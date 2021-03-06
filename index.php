<?php

require_once('controller/FrontendController.php');

$frontendController = new FrontendController();

if(!isset($_GET['action']) || $_GET['action'] == 'listArticles') {
    $frontendController->listArticles();
}

/**
 * 1. Installer tout l'environnement Apache, PHP, Mysql
 * 2. Créer la base de données avec les bonnes tables + ajouter des fausses données
 * 3. Découpage du menu / du footer pour les mettre dans des includes
 * 4. Page de détail d'un article
 */
