#SYMFONY
symfony est un framework PHP (cardriciel). C'est une boîte à outils logiciel.Symfony va ns faciliter le développet d'applis en PHP, en facilitt la création de CRUD() pr exemple

- logiciel open source créeé en 2009 par Fabien Potencier
- version 5.4
- symfony de compose de plusieurs composants que repésentent plusieurs niveaux de" notre site

## LES COMPOSANTS
- doctrine : permet de gérer la BDD système d'ORM (objet Relation Manager)

- twig : va ns servir à faire ds temples en HTML
- monolog : outil pr ls historiaques et nournaux d'utilisation
- etc.

## COMPOSER
Composer sert à instaler les différents composants, pr exemple, si on vt instaler doctrine on fera `composer require doctine` ou si on vt installer un nouveau symfony : `composer create-project symfony/website-skeleton nomProjet`

## LES REPERTOIRRES
- bin :contient ls fichiers exécutables ds outils pr simplifier la vie (la console php, etc)

- config : contient ls fichiers de cnfigurations de syfony et de ss composants (exemple : si on vt que ns  formulaires générés automatiquemmen soient ft en Bootstrap, il faudra modifier un fichier de configuration : twig.yam)

- migrations : contient ls différentes versions selon l'évollution de la structure de la BDD

- public : dossier qui sera accessible pr le serveur HTTP

- src : contient la majorité du code en développement de l'apli

- template : contient les gabarits HTML

- tests : contient ts ls tests

- tranlations : les traductions

- var : fichier temporaires de symfony (caches)

- vendor : ps lié à symfony ms à Composer qui stocke ts les fichiers et dossiers à cet endroit

## LES FICHIERS

- .env : fichier de configuration pr ntre environnemt (connexion à la BDD pr exemple)

- composer.json : le fichier qui va être utile à Composer pr maramétrer ls paquets

## INSTALATION

1. Instalation de Composer

2. Instalation de notre symfony grâce à  `composer create-project symfony/website-skeleton nomProjet`
3. Customistion du fichier .env avec nos identifiants et le nom de notre BDD
4. `php bin/console doctrine:database:create` qui va envoyer notre nouvelle BDD vers phpMyAdmin
5. `php bin/console make:entityNomtable` qui va perttre de créer la table de notre BDD 
6. `php bin/console male:migration` qui enregistre les changements dans un fichier dans le dossier Migrations
7. `php bin/console doctrine:migrations:migrate` qui envoie ls changements ds la BDD
8. Pour lancer un server local : `php -S localhost:8000 -t public`