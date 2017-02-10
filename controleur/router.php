<?php

switch ($gestion) {
    case 'login':
        require_once $gestion . 'Controleur.php';
        break;
    case 'accueil':
        require_once $gestion . 'Controleur.php';
        break;
    case 'produit':
        require_once $gestion . 'Controleur.php';
        break;
    case 'vendeur':
        require_once $gestion . 'Controleur.php';
        break;
    case 'client':
        require_once $gestion . 'Controleur.php';
        break;
    case 'commande':
        require_once $gestion . 'Controleur.php';
        break;
    case 'ligne_commande':
        require_once $gestion . 'Controleur.php';
        break;
}

if (isset($_SESSION['login'])) {

    if (isset($_POST['ajouter'])) {
        ajouter ($_POST);
        } elseif (isset ($_POST['modifier'])) {
        modifier ($_POST);
        } elseif (isset ($_POST['consulter'])) {
        consulter ($_POST);
        } elseif (isset ($_POST['supprimer'])) {
        supprimer ($_POST);
        }else {
        liste();
    }
} else {
    connection();
}

