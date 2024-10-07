
 Ce dossier contient les fichiers constituants mon dossier d'ECF pou l'obtention de mon diplome de développeur.

# Projet ECF - Gamestore

L'enseigne de vente de jeux vidéo Gamestore est une entreprise ayant actuellement 5 magasin sur la France (Nantes, Lille, Bordeaux, Paris et Toulouse). On peux y trouver des jeux pour toutes les plateformes existantes à ce jour. L'enseigne à besoin de moderniser sa visibilité et adapter son mode de communication au marché actuel qui est "le tout numérique".

GameStore, fondée en 2020, est votre destination idéale pour tous vos besoins en jeux vidéo. Avec une vaste sélection pour toutes les plateformes, nous offrons également des événements et des tournois pour les passionnés. Rejoignez-nous et plongez dans le monde du jeu avec GameStore!

## Prérequis

Avant de commencer, assurez-vous d'avoir installer tout les éléments suivants sur votre système :

- Node.js
- npm ou yarn
- Git
- Dans le dossier "Documentation" vous trouverez un sous-dossier "SQL_db" contenant les scripts pour la base de données.

## Installation

Pour l'installation en local du projet, veuillez suivre ces étapes.

### Clone du dépôt

    git clone https://github.com/Alkgorth/Projet-ECF.git

lancer le fichier index.php

### Ajout de la base de données

1. Suivez le chemin Documentation -> SQL_db, vous trouverez les fichiers pour créer les tables de la base de donnée dans "gamestore_bdd.sql" et les données à y insérer dans "datas_table.sql".
2. Utilisez un outil comme XAMPP, WAMP ou MAMP afin de gérer la base de données MySQL.
3. Ouvrez votre navigateur et accédez à PhpMyAdmin.
4. Connectez vous avec vos identifiants de connexion pour accéder à PhpMyAdmin (paramètres par défaut : nom utilisateur = root et champ de mot de passe vide).
5. Créez une nouvelle base de données, en utilisant le même nom que dans la variable 'db_name', puis cliquez sur le bouton "Créer".
6. Cliquez sur le nom de la base de donnée que vous venez de créer dans la sidebar de gauche pour vous positionner dedans, puis dans la barre supérieur cliquez sur l'onglet "Importer". Sur la page d'importation, cliquez sur le bouton parcourir et sélectionnez le fichier "gamestore_bdd.sql". Faites défiler l'écran jusqu'en bas, et cliquez sur "Importer", afin de créer les tables de la base de donnée.
Maintenant on va importer les données, retournez dans "Importer" et cette fois séléctionner le fichier "datas_table.sql", et cliquez sur "Importer" en bas de page.
7. Une fois l'importation faites, vous pouvez vérifier que toutes les tables ont bien été créées. Pour cela, cliquez sur le nom de la base de données dans le panneau latérale de gauche afin d'afficher les tables.
8. Après avoir suivis ces étapes vous aurez importé la structure nécessaire de la base de données dans PhpMyAdmin, et l'application sera prête à utiliser cette base de données pour en lecture et en écriture.