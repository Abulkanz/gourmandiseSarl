<?php

require_once 'modele/produitModele.php';

function liste() {
    $idRequete = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function consulter($param) {
    $reference = $param['reference'];
    $idRequete = consulterProduit($reference);
    require_once 'vue/produitVueConsult.php';
}

function ajouter($param) {
    $action = $param['action'];
    require_once 'vue/produitVueAjout.php';
}

function ajouterProduit($param) {
    $idRequete = ajouterProduitM($param);
    $idRequete = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function supprimer($param) {
    $reference = $param['reference'];
    $idRequete = supprimerProduit($reference);
    $idRequete = listeProduits();
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
    $idRequete = listeProduits();
    require_once 'vue/produitVueListe.php';
}