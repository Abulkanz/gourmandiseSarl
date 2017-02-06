<?php

include 'modele.php';

function listeProduits() {
    $cnx = getBD();
    $sql = 'SELECT * FROM produit';
    $reqListeProd = executeR($cnx, $sql);
    return $reqListeProd;
}

function consulterProduit($reference) {
    $cnx = getBD();
    $sql = "SELECT * FROM produit WHERE reference = ?";
    $reqConsProd = executeR($cnx, $sql, array($reference));
    return $reqConsProd;
}

function ajouterProduitExec($param) {
    $designation = $param['designation'];
    $prix_unitaire_HT = $param['prix_unitaire_HT'];
    $descriptif = $param['descriptif'];
    $stock = $param['stock'];
    $quantite = $param['quantite'];
    $poids_piece = $param['poids_piece'];

    $cnx = getBD();
    $sql = "INSERT INTO produit (designation, prix_unitaire_HT, descriptif, stock, quantite, poids_piece)
            VALUES (?, ?, ?, ?, ?, ?)";
    $reqAjoutProd = executeR($cnx, $sql, array($designation, $prix_unitaire_HT, $descriptif, $stock, $quantite, $poids_piece));
    Header('Location: index.php?success=1');
}

function supprimerProduit($reference) {
    $cnx = getBD();
    $sql = "DELETE FROM produit WHERE reference = ?";
    $idRequete = executeR($cnx, $sql, array($reference));
    Header('Location: index.php?success=1');
}

function modifierProduitM($param) {
    
    $designation = $param['designation'];
    $prix_unitaire_HT = $param['prix_unitaire_HT'];
    $descriptif = $param['descriptif'];
    $stock = $param['stock'];
    $quantite = $param['quantite'];
    $poids_piece = $param['poids_piece'];
    $reference = $param['reference'];

    $cnx = getBD();
    $sql = "UPDATE produit 
            SET designation = ? , prix_unitaire_HT = ?, descriptif = ?, stock = ?, quantite = ?, poids_piece = ?
            WHERE reference = ?";
    $idRequete = executeR($cnx, $sql, array($designation, $prix_unitaire_HT, $descriptif, $stock, $quantite, $poids_piece, $reference));
    Header('Location: index.php?success=1');
}
