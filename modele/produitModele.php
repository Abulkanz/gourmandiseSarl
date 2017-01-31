<?php

include 'modele.php';

function listeProduits() {
    $cnx = getBD();
    $sql = 'SELECT * FROM produit';
    $idRequete = executeR($cnx, $sql);

    return $idRequete;
}

function consulterProduit() {
    $cnx = getBD();
    $sql = "SELECT * FROM auteur WHERE reference =" . $row['$reference'] ."";
    $idRequete = executeR($cnx, $sql, array($row["$reference"]));
}
?>

