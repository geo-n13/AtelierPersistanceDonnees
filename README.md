# Atelier : Persistence des données

## Configuration du projet :

Frontend : Twig

Backend : Symfony

## Requis du projet  : 

Répertorisation des livres, création d'emprunts

1/ Donner la possibilité de supprimer des livres tout en conservant l’historique des
emprunts

2/ Donner la possibilité de supprimer des catégories tout en conservant les livres

3/ Fonctionnalités :
- Nombre d’emprunts sur une plage de dates donnée 
- Nombre d’emprunts par livre
- Lister les emprunts en cours
- Recherche de livres par auteur

## Initialisation du projet : 

```
DATABASE_URL="mysql://<utilisateur>:<motdepasse>@localhost:3306/atelier_persistence_des_donnees?serverVersion=mariadb-10.6.11&charset=utf8"
```
Configuration des accès à la base de données (ligne 28 du .env)

```
composer install
```
Installation des dépendances PHP 
```
npm install
```
Installation des dépendances JS

```
npm run build 
```
Compilation des assets

```
symfony serve
```
Démarrage du serveur
