#Universal_medica_group Prérequis

1-PHP Version 8.1
2-MySQL 5.7
3-PhpMyAdmin
4-Symfony version 5.4

#Installation

Après avoir cloné le projet avec git clone https://github.com/MohamedNh/univ_medica.git

Ouvrir le projet et exécuter ces commandes:
-docker-compose build
-docker-compose up -d

A l'intérieur du conteneur www_univ_medica exécuter ces commandes :

-php bin/console doctrine:migrations:migrate
-composer require symfony/security-bundle
-composer require symfony/twig-bundle
-composer require --dev doctrine/doctrine-fixtures-bundle
-php bin/console doctrine:fixtures:load

Pour accéder à phpmyadmin utiliser root / root pour se connecter

Vous pouvez maintenant accéder à Universal_medica_group sur http://localhost:8080/login

Les utilisateurs créés:
-Front User: 
  username:frontuser / mot de passe: test1234 
-Back User: 
  username:frontuser / mot de passe: test1234 
-Anonymous User:
  username:test / mot de passe: test 
