# Projet 5 Blog PHP (OC)

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/543da12634be43908cfba582bff22c56)](https://www.codacy.com/manual/lallieau/blog?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=lallieau/blog&amp;utm_campaign=Badge_Grade)

Début du projet : juillet 2020

Fin du projet : septembre 2020

## Présentation du projet

Bienvenue dans mon premier projet !
Ceci est un exercice d'apprentissage du langage PHP.

Contenu :
- Blog en php orienté objet
- Utilisation du modele MVC
- Page d'accueil
- Articles
- Espace d'administration
- Espace profil
- Formulaire de contact

Langues utilisées:
- Html et Css
- Php et MySQL

Captures d'écran :

<img src="https://github.com/lallieau/blog/blob/master/public/img/capture_home.png" alt="Your image title" width="200"/> <img src="https://github.com/lallieau/blog/blob/master/public/img/capture_articles.png" alt="Your image title" width="200"/> <img src="https://github.com/lallieau/blog/blob/master/public/img/capture_profil.png" alt="Your image title" width="200"/>

## Pré-requis
Ce qu'il est requis pour commencer :
- Serveur local (Mamp, Lamp, wamp...).
- Editeur de texte (Sublime, Vs code, Php Storm...).

## Installation
Les étapes pour installer :
- Cloner le projet sur votre machine.
- Démarrer votre serveur local.
- Upload du fichier db.sql qui est dans le dossier /sql à la racine du projet, sur votre interface de gestion de base de donnée fournie avec votre serveur local (phpmyadmin...).
- Changement des informations de connexion à la base de donnée : /config/dev.php

## Obtenir un compte admin
Se connecter au SGBD correspondant à votre serveur local.
Ouvrir la database "blog".
Aller au niveau de la table user.
Ajouter un user.
Remplir les cases :
- Pseudo,
- Password (bien hasher le mot de passe avant d'enregistrer, ici : http://www.passwordtool.hu/php5-password-hash-generator),
- Role_id : 1 pour admin,
- Sexe : 1 (homme), 2 (femme).

## Paramétrage du formulaire de contact
Penser à changer les differentes informations : src/DAO/ContactDAO

## Démarrage
Lancer votre serveur local.
Pointer le serveur local sur : /blog/

