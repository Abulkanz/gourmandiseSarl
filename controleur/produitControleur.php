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

function modifier($param) {
    $reference = $param['reference'];
    $idRequete = modifierProduit($reference);
    require_once 'vue/produitVueModif.php';
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
