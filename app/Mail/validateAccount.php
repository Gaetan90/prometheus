<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Password;
use App\User;
use App\ValidateAccount as Token;

class validateAccount extends Mailable
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
        $this->setTooken();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.validateAccount')->to($this->user->email, $this->user->prenom)->from('huilierhugo@gmail.com', 'Prometheus')->subject('Welcome to Prometheus');
    }

    private function setTooken()
    {
        $this->token = Password::getRepository()->createNewToken();
        
        $validateAccount = new Token;
        $validateAccount->user_id = $this->user->id;
        $validateAccount->remember_token = $this->token;
        $validateAccount->save();
    }
}
