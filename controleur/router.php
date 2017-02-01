<?php

switch ($gestion) {
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
    default :
        echo 'Impossible !';
}

if (isset($_POST['ajouter'])) {
    ajouter();
} elseif (isset($_POST['valider'])) {
    valider();
} elseif (isset($_POST['modifier'])) {
    modifier();
} elseif (isset($_POST['consulter'])) {
    consulter($_POST);
} else {
    liste();
}

