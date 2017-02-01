<?php

include 'modele.php';

function listeProduits() {
    $cnx = getBD();
    $sql = 'SELECT * FROM produit';
    $idRequete = executeR($cnx, $sql);

    return $idRequete;
}

function consulterProduit($reference) {
    $cnx = getBD();
    $sql = "SELECT * FROM produit WHERE reference = ?";
    $idRequete = executeR($cnx, $sql, array($reference));
    return $idRequete;
}


