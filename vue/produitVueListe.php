<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$listeProduits = array();
$i = 0;

while($row = $idRequete->fetch()){
    $listeProduits[$i]['reference'] = $row['reference'];
    $listeProduits[$i]['designation'] = $row['designation'];
    $listeProduits[$i]['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
    $i++;
}

$nbLignes = $idRequete->rowCount();

$tpl->assign('msg','Liste des produits');
$tpl->assign('nbLignes', $nbLignes);
$tpl->assign('listeProduits', $listeProduits);
$tpl->display('vue/produitVueListe.tpl');

?>
