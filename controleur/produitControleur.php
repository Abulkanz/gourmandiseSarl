<?php

require_once 'modele/produitModele.php';

function liste(){
    $idRequete = listeProduits();
    require_once 'vue/produitVueListe.php';
}

function consulter(){
    $idRequete = consulterProduit();
    require_once 'vue/produitVueConsult.php';
}


