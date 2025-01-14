PHP MVC Framework
php-mvc-normal-main est un projet basé sur une architecture MVC simple, conçu pour servir de base à des applications PHP robustes et organisées.

📝 Description
Ce projet fournit une structure claire pour séparer les responsabilités entre les modèles, les vues et les contrôleurs. Cela facilite la maintenance, améliore la lisibilité du code et encourage les bonnes pratiques de développement en PHP.

Fonctionnalités principales
Architecture basée sur MVC.
Système de routage flexible.
Support des modèles pour la gestion des bases de données.
Vues dynamiques pour une séparation nette entre la logique métier et l'affichage.
Structure modulaire facile à étendre.
🚀 Installation et configuration
Prérequis
PHP >= 7.4 (ou une version plus récente).
Un serveur web (ex. Apache avec mod_rewrite activé ou Nginx).
Une base de données (ex. MySQL).

php
Copier le code
define('DB_HOST', 'localhost');
define('DB_USER', 'votre_utilisateur');
define('DB_PASS', 'votre_mot_de_passe');
define('DB_NAME', 'nom_de_la_base');
Configurer votre serveur web :
Assurez-vous que les URL redirigent vers public/index.php en configurant .htaccess (Apache) ou nginx.conf (Nginx).

Lancer le serveur (si vous utilisez le serveur intégré PHP) :

bash
Copier le code
php -S localhost:8000 -t public
Accédez au projet via votre navigateur à l'adresse :
http://localhost:8000

📁 Structure du projet
plaintext
Copier le code
php-mvc-normal-main/
├── app/
│   ├── controllers/   # Contrôleurs de l'application
│   ├── models/        # Modèles de données
│   ├── views/         # Vues HTML/PHP
│   └── core/          # Classes principales (Routeur, Contrôleur de base, etc.)
├── public/
│   ├── index.php      # Point d'entrée principal
│   ├── css/           # Fichiers CSS
│   ├── js/            # Fichiers JavaScript
│   └── assets/        # Autres ressources
├── config/
│   └── database.php   # Configuration de la base de données
├── .htaccess          # Configuration Apache pour la redirection
└── README.md          # Documentation du projet
✨ Fonctionnalités à explorer
Système de routage : Ajoutez facilement de nouvelles routes dans le fichier core/Router.php.
Modèles : Gérez les données via des classes situées dans app/models/.
Vues dynamiques : Utilisez des fichiers .php pour rendre le contenu dynamique avec des données passées par les contrôleurs.
🛠️ Contribution
Les contributions sont les bienvenues ! Voici comment vous pouvez aider :

Forker le dépôt.

Créer une nouvelle branche :

bash
Copier le code
git checkout -b nouvelle-fonctionnalite
Commiter vos modifications :

bash
Copier le code
git commit -m "Ajout d'une nouvelle fonctionnalité"
Pousser vers la branche :

bash
Copier le code
git push origin nouvelle-fonctionnalite
