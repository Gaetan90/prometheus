<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Password;
use App\User;
use App\ResetPassword as reset;

class resetPassword extends Mailable
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
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
        return $this->view('emails.resetPassword')->to($this->user->email, $this->user->prenom)->from('hugo.huilier@viacesi.fr', 'Prometheus')->subject('[PROMETHEUS] Mot de passe oublié');
    }

    private function insert()
    {
        $resetPassword = new Reset;
        $resetPassword->user_id = $this->user->id;
        $resetPassword->remember_token = $this->token;
        $resetPassword->password = "";
        $resetPassword->save();
    }
}
