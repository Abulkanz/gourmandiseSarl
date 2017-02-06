<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$listeProduits = array();
$i = 0;

while($row = $reqListeProd->fetch()){
    $listeProduits[$i]['reference'] = $row['reference'];
    $listeProduits[$i]['designation'] = $row['designation'];
    $listeProduits[$i]['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
    $i++;
}

$nbLignes = $reqListeProd->rowCount();

$tpl->assign('msg','Liste des produits');
$tpl->assign('nbLignes', $nbLignes);
$tpl->assign('listeProduits', $listeProduits);

if (!empty($_GET['success'])) {
    $tpl->assign('success', $_GET['success']);
} else {
    $tpl->assign('success', '0');
}

$tpl->display('vue/produitVueListe.tpl');

