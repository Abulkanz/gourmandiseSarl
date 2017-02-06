<?php

require_once 'modele/accueilModele.php';

function listeV() {
    $idRequete = listeVendeurCA();
    $idRequete1 = meillClients();
    require_once 'vue/accueilVue.php';
}
