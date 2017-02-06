<?php

switch ($gestion) {
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
    default :
        echo 'Impossible !';
}


if (isset($_POST['ajouter'])) {
    ajouter($_POST);
} elseif (isset($_POST['ajouterProduit'])) {
    ajouterProduit($_POST);
} elseif (isset($_POST['modifier'])) {
    modifier($_POST);
} elseif (isset($_POST['modifierProduit'])) {
    modifierProduit($_POST);
} elseif (isset($_POST['consulter'])) {
    consulter($_POST);
} elseif (isset($_POST['supprimer'])) {
    supprimer($_POST);
} else {
    liste();
}

