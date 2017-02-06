<?php

require_once 'modele/produitModele.php';

function liste() {
    $reqListeProd = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function consulter($param) {
    $reference = $param['reference'];
    $reqConsProd = consulterProduit($reference);
    require_once 'vue/produitVueConsult.php';
}

function ajouter() {
    $action = $param['action'];
    require_once 'vue/produitVueModif.php';
    if (isset($_POST['ajouterProduit'])) {
        
        $reqAjout = ajouterProduit($_POST);
    }
}

function ajouterProduit($param) {
    $reqAjoutProd = ajouterProduitExec($param);
    $reqListeProd = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function supprimer($param) {
    $reference = $param['reference'];
    $idRequete = supprimerProduit($reference);
    $reqListeProd = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function modifier($param) {
    $reference = $param['reference'];
    $idRequete = consulterProduit($reference);
    $action = $param['action'];
    require_once 'vue/produitVueModif.php';
}

function modifierProduit($param) {
    $idRequete = modifierProduitM($param);
    $reqListeProd = listeProduits();
    require_once 'vue/produitVueListe.php';
}
