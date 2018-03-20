<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Password;
use App\User;
use App\ResetPassword;

class changePassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Instance of user created
     *
     * @var user
     */
    public $user;

    /**
     * The token generated and used to validate the user account
     *
     * @var token
     */
    public $token;

    /**
     * The new password
     *
     * @var password
     */
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password = bcrypt($password);
        $this->token = Password::getRepository()->createNewToken();
        $this->insert();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.changePassword')->to($this->user->email, $this->user->prenom)->from('hugo.huilier@viacesi.fr', 'Prometheus')->subject('[PROMETHEUS] Changement de mot de passe');
    }

    private function insert()
    {
        $resetPassword = new ResetPassword;
        $resetPassword->user_id = $this->user->id;
        $resetPassword->remember_token = $this->token;
        $resetPassword->password = $this->password;
        $resetPassword->save();
    }
}
