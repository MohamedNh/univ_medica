#Universal_medica_group Prérequis

-PHP Version 8.1
-MySQL 5.7
-PhpMyAdmin
-Symfony version 5.4

#Installation

Après avoir cloné le projet avec git clone https://github.com/MohamedNh/univ_medica.git

Ouvrir le projet et exécuter ces commandes:
-docker-compose build
-docker-compose up -d

Accéder à l'intérieur du conteneur WEB www_univ_medica avec cette commande:

-docker exec -it ww_univ_medica bash
-cd universal_medica_group

et lancer ces commandes :

-composer install
-php bin/console doctrine:migrations:migrate avec purge (yes)
-php bin/console doctrine:fixtures:load avec purge (yes)

Pour accéder à phpmyadmin utiliser root / root pour se connecter

#Universal_medica_group 

Vous pouvez maintenant accéder à Universal_medica_group sur http://localhost:8080/login

Les utilisateurs créés:
-Front User: 
  username:frontuser / mot de passe: test1234 
-Back User: 
  username:frontuser / mot de passe: test1234 
-Anonymous User:
  username:test / mot de passe: test 
