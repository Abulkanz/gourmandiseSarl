<?php

require_once 'modele/produitModele.php';

if (isset($_POST['ajouterProduit'])) {
    ajouterProduit($_POST);
}

if (isset($_POST['modifierProduit'])) {
    modifierProduit($_POST);
}

if (isset($_POST['rechercherProduit'])){
    $idRequete = rechercherProduits($_POST);
    require_once 'vue/produitVueListe.php';
}

function liste() {
    $reqListeProd = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function consulter($param) {
    $reference = $param['reference'];
    $reqConsProd = consulterProduit($reference);
    require_once 'vue/produitVueConsult.php';
}

function ajouter($param) {
    $action = $param['action'];
    require_once 'vue/produitVueModif.php';
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
