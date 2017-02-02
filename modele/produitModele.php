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

function ajouterProduitM($param) {
    $designation = $param['designation'];
    $prix_unitaire_HT = $param['prix_unitaire_HT'];
    $descriptif = $param['descriptif'];
    $stock = $param['stock'];
    $quantite = $param['quantite'];
    $poids_piece = $param['poids_piece'];
    
    $cnx = getBD();
    $sql = "INSERT INTO produit (designation, prix_unitaire_HT, descriptif, stock, quantite, poids_piece)
            VALUES (?, ?, ?, ?, ?, ?)";
    $idRequete = executeR($cnx, $sql, array($designation, $prix_unitaire_HT, $descriptif, $stock, $quantite, $poids_piece));
    return $idRequete;
}

function supprimerProduit($reference){
    $cnx = getBD();
    $sql = "DELETE FROM produit WHERE reference = ?";
    $idRequete = executeR($cnx, $sql, array($reference));
    
    Header('Location: index.php?success=1');
}
