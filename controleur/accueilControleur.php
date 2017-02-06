<?php

require_once 'modele/accueilModele.php';

function liste() {
    $idRequete = listeVendeurCA();
    require_once 'vue/accueilVue.php';
}

require_once 'vue/accueilVue.php';


