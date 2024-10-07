
 Ce dossier contient les fichiers constituants mon dossier d'ECF pou l'obtention de mon diplome de développeur.

# Projet ECF - Gamestore

L'enseigne de vente de jeux vidéo Gamestore est une entreprise ayant actuellement 5 magasins sur la France (Nantes, Lille, Bordeaux, Paris et Toulouse). On peux y trouver des jeux pour toutes les plateformes existantes à ce jour. L'enseigne à besoin de moderniser sa visibilité et adapter son mode de communication au marché actuel qui est "le tout numérique".

"GameStore, fondée en 2020, est votre destination idéale pour tous vos besoins en jeux vidéo. Avec une vaste sélection pour toutes les plateformes, nous proposons également des événements et des tournois pour les passionnés. Rejoignez-nous et plongez dans le monde du jeu avec GameStore!"

## Prérequis

Avant de commencer, assurez-vous d'avoir installer tout les éléments suivants sur votre système :

- Node.js
- npm ou yarn
- Git
- Avoir installé un outil comme XAMPP, WAMP ou MAMP afin de gérer la base de données MySQL.
- Dans le dossier "Documentation" vous trouverez un sous-dossier "SQL_db" contenant les scripts pour la base de données.

## Installation

Pour l'installation en local du projet, veuillez suivre ces étapes.

### Clone du dépôt

En utilisant un invite de commande ou GitBash, lancez la commande ci-dessous afin de copier le dépôt distant en local :

    git clone https://github.com/Alkgorth/Projet-ECF.git



### Ajout de la base de données

1. Lancez votre gestionnaire de serveur local (XAMPP, MAMP ou WAMP), dans la colonne "Actions" cliquez sur les boutons "Start" des modules Apache et MySQL pour les lancer.
2. Cliquez sur le bouton Admin de MySQL, une fenêtre de votre navigateur va s'ouvrir sur PhpMyAdmin.
3. Connectez-vous avec vos identifiants de connexion pour accéder à PhpMyAdmin (paramètres par défaut : nom utilisateur = root et champ de mot de passe vide).
4. Dans le menu latérale gauche, cliquez sur "Nouvelle base de données". Au centre de l'écran, dans la case "Nom de base de données", copiez-coller le nom suivant : "gamestore_bdd".
5. Cliquez sur le bouton "Créer".
6. Dans le menu latérale gauche, cliquez sur le nom de la base de donnée que vous venez de créer, puis dans le menu horizontal cliquez sur l'onglet "Importer".
7. Sur la page d'importation, cliquez sur "choisir un fichier", une fenêtre s'ouvre, placez-vous dans le dossier du dépôt cloné "Projet_ECF" => "Documentation" => "SQL_db" et sélectionnez le fichier "gamestore_bdd.sql" puis cliquer sur le bouton "ouvrir", la fenêtre se fermera. Verifier que le nom du fichier apparait bien dans la case dédiée.
Faites défiler l'écran jusqu'en bas, et cliquez sur "Importer", afin de créer les tables de la base de donnée.
8. Sur la page d'importation, cliquez sur "choisir un fichier", une fenêtre s'ouvre, placez-vous dans le dossier du dépôt cloné "Projet_ECF" => "Documentation" => "SQL_db" et sélectionnez le fichier "datas_table.sql" puis cliquer sur le bouton "ouvrir", la fenêtre se fermera. Verifier que le nom du fichier apparait bien dans la case dédiée.
Faites défiler l'écran jusqu'en bas, et cliquez sur "Importer", afin d'ajouter les données à la base de données.
9. Une fois l'importation faites, vous pouvez vérifier que toutes les tables ont bien été créées. Pour cela, cliquez sur le nom de la base de données dans le panneau latérale de gauche afin d'afficher les tables.
10. Après avoir suivis ces étapes vous aurez importé la structure nécessaire de la base de données dans PhpMyAdmin, et l'application sera prête à utiliser cette base de données en lecture et en écriture.
11. Pour afficher le site, tapez ou copier ce lien dans dans votre URL : http://localhost:3000/index.php