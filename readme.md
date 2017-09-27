# Website Prometheus

## Prérequis: 
  - Installer composer: https://getcomposer.org/download/
  - Installer Git: https://git-scm.com/


## Installer le projet en local
1) Cloner le projet à l'aide de la commande suivante
```
git clone https://github.com/EmreSuzenExia/Prometheus.git
```

2) Se placer dans le répertoir du projet en utilisant la commande 'cd'. Par exemple :
```
cd c://wamp64/www/prometheus
```

3) Installer les dépendances PHP
```
composer install
```

4) Copier le fichier .env.example 
```
Sous windows
copy .env.example .env

Sous linux
cp .env.example .env
```

5) Ouvrir le fichier .env et changer les informations suivantes:
> DB_DATABASE : correspond au nom de la base de donnée
> DB_USERNAME : nom d'utilisateur pour accéder à la BDD
> DB_PASSWORD : mot de passe pour accéder à la BDD

6) Mettre à jour la BDD
```
php artisan migrate
```

6) Générer la clé d'application
```
php artisan key:generate
```
