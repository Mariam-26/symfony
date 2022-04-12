
Conversation ouverte. 1 message non lu.

Aller au contenu
Utiliser Messagerie Colombbus avec un lecteur d'écran
1 sur 260
SYMFONY COURS
Boîte de réception

Dominique DARIVON - Terrage 2021
13:54 (il y a 4 minutes)
À moi



#symfony
symfony est un framework PHP(cadriciel), c'est uen boite à iutils logiciel.Symfony va nous faciliter le développement d'applications en PHP, en facilitant la créartion de CRUD (create/Read/Upodate/Delete) par exemple
-logiciel open source créée en 2009 par Fabien potencier
-version5.4
-Symfony se compose de plusieurs composants qui représentent plusieurs niveaux de notre site

##LES COMPOSANTS
-doctrine: permet de gérer la BDD, système d'ORM(obeject Relation Manager)
-twig :va nous servir à faire des templates en HTML
-monologue: outil pour gérer les historiques et journaux d'utilisation
-etc.

##COMPOSER
Composer sert à installer les différents composants, par exempe , si on veut installer doctrine on fera `composer require doctrine` ou si on veut installer un nouveau symfony :`composer create-project symfony/website-skeleton nomProjet`

## LES REPERTOIRES
-bin:il contient les fichiers exécutables, des outils pour simplifier la vie ( la ocnsole phpinit, etc.)
-config: il contient les fichiers de configurations de symfony et de ses composants ( exemple :si on veut que nos formulaires générés automatiquement soient fait en Bootstrap, il faudra modifier un fichier de configuration:twig.yaml)
-migrations:il contient les différentes versions selon l'evolution de la structure de la BDD
-public: dossier quisera accessible par le serveur HTTP 
-src :contient la majorité du code en développement de l'application
-template: contient les gabarits HTML
-tests :contient tous les tests
-translations:les traductions
-car:fichiers temporaires de Symfony (caches)
-vendor :pas lié à symfony mais à Composer qui stocke tous les fichiers et dossiers à cet endroit

## LES FICHIERS
-.env : c'est le fichier de configuration pour notre environnement ( connexion à la BDD par exemple)
-composer.json : le fichier qui va être utile à Composer pour paramétrer les différents paquets

## TWIG
- Twig est une nouvelle façon de faire du HTML
- Ce langage va nous permettre non seulement d'afficher du contenu grâce aux balises HTML que l'on connait mais aussi de redéfinir du contenu grâce à des bloacks : {% block body%} {% endblock %}
- On étendra toujours notre page depuis la page *base.html.twig*=> normalement fait automatiquement 
- Twig permet aussi; outre le extends de faire des include. Par exemple , on verra comment faire une en-tête et la mettre dans certains fichiers grâce à cette fonction 
- On pourra également appeler des variables et aisni, récupérer des informations directement depuis la BDD
- Lorsque l'on veut afficher des images , il faudra utilser la fonction, asset dans l'attribut source de notre image de la façon suivante: `{{ asset(`img/1.jpg` )}}'. Il faudra toujours placer le dossier img dans le dossier public


## INSTALLATION
1.Installation de Composer
2.Installation de notre Symfony grâce à `composer create-project symfony/website-skeleton nomProjet`
3.Customisation du fichier .env avec nos identifiants et le nom de notre BDD.
4.`php bin/console doctrine:database:create` qui va envoyer notre nouvelle BDD vers phpMyAdmin
5.`php bin/console make:entity Nomtable` qui va permettre de créer la table de notre BDD
6.`php bin/console make:migration`qui enregistre les changements dans un fichier dans le dossier Migrations
7.`php bin/console doctrine:migrations:migrate`qui envoie les changements dans la BDD
8.Pour lancer un serveur local , se rendre sur commander de mysql: `php -S localhost:8000 -t public`
9.Pour créer des controllers qyu permettront de lancer des vues et définir ce qu'on y affiche on utilisera la commande `php bin/console make:controller NomController`
10.Cette commande créera deux fichiers :
    1.Le controller dans lequel on pourra définir la route mais aussi le chemin d'accès au fichier en Twig
    2.Le template twig qu'on pourra personnaliser selon nos besoins
11.Pour faire un formulaire , on utilisera la commande 'php bin/console make:form NomFormType'.Lorsque l'on fait cette commande , symfony nous demande à partir de quelle entité on veut faire notre formulaire, dans l'exemple on précide Articles , et il génére 1 fichier dans lequel les champs de notre table  sont décrits.
12. La page générée(isi ArticlesFormType)peut être customisée pour y ajouter des options:
    1.  on peut dire le type de champs que l'on attend(TexType, TextareaType? checkboxType? DateType, FileType, etc.)
    2. On peut préciser directement dans ce fichier des classes
    3. On peut dire que l'on veut recevoir des fichiers uniquement avec certaines extensions(par exemple, on accepte seulement les jpeg,jpg,gif et png)
    4. On peut préciser si on veut une image en mode protrait en mode paysage 
    5. E on peut définir les messages d'erreur si les données entrées dans le formulaire" par l'utilisateur ne correspond pas à ce que l'on attend
 13. Pour faire  une nav on fera un fichier externe ( nav.html.twig) et sur lequel on fera un include pour qu'il soit présent sur notre fichier base.html.twig 
 14. Pr faire la table User (nommenclature générale) on utiliser la ligne de cmde `php bin/console make:user`. Cette façon de faire, ns génère facilemt une table adaptée à l'enregistremt et à l'authentification de nouveaux utilisateurs. Cette entité pourra être modifiée si on veut y ajouter ds champs grâce à la ligne de cmde `php bin/console make:entity User` =>mise à jour de l'entité


POUR INSERRER UN CONTENU
<p class="card-text">{{article.content | striptags | slice(0,70)}} ...</p>
{{ article.content | raw}}







