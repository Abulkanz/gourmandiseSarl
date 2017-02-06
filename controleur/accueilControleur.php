<?php

require_once 'modele/accueilModele.php';

function liste() {
    $idRequete = listeVendeurCA();
    $idRequete1 = meillClients();
    require_once 'vue/accueilVue.php';
}
