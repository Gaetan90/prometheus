<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class createUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Use to create a user';

    protected $nom;
    protected $prenom;
    protected $email;
    protected $password;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {   
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $nom = $this->ask('Entrez votre nom ');
        $prenom = $this->ask('Entrez votre prenom ');
        $email = $this->ask('Entrez votre e-mail ');
        $password = bcrypt($this->secret('Entrez votre mot de passe '));
        $sexe = $this->choice('Sexe ', ['Masculin', 'Féminin']);
        $tel = $this->ask('Entrez votre numéro de téléphone ');
        $annee = $this->choice('Année ', ['1', '2', '3', '4', '5']);

        $user = new User;
        $user->nom = $nom;
        $user->prenom = $prenom;
        $user->email = $email;
        $user->password = $password;
        $user->sexe = $sexe;
        $user->tel = $tel;
        $user->annee = $annee;
        $user->save();
    }
}
