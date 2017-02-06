<?php

include 'modele.php';

function listeVendeurCA() {
$cnx = getBD();
$sql = 'SELECT vendeur.nom "Nom du vendeur",  ROUND(SUM(total_ht + total_tva), 2) "Chiffre d\'affaires" 
        FROM commande, vendeur 
        WHERE vendeur.code_v = commande.code_v
        GROUP BY 1';
$idRequete = executeR($cnx, $sql);
return $idRequete;
}

function meillClients(){
$cnx = getBD();
$sql = 'SELECT client.code_c "Reference client", client.nom "Nom client", ROUND(SUM(total_ht + total_tva), 2) "Chiffre d\'affaires"
        FROM commande, client
        WHERE client.code_c = commande.code_c
        GROUP BY 1
        LIMIT 5';
$idRequete = executeR($cnx, $sql);
    return $idRequete;
}
