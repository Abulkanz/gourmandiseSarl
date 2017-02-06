<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$ficheProduit = array();
$msg = 'Fiche unique';

if($row = $reqConsProd->fetch()){
$ficheProduit['reference'] = $row['reference'];
$ficheProduit['designation'] = $row['designation'];
$ficheProduit['prix_unitaire_HT'] = $row['prix_unitaire_HT'];

$ficheProduit['quantite'] = $row['quantite'];
$ficheProduit['descriptif'] = $row['descriptif'];
$ficheProduit['stock'] = $row['stock'];
$ficheProduit['poids_piece'] = $row['poids_piece'];
}

$tpl->assign('msg', $msg);
$tpl->assign('reference', $ficheProduit['reference']);
$tpl->assign('designation', $ficheProduit['designation']);
$tpl->assign('prix_unitaire_HT', $ficheProduit['prix_unitaire_HT']);
$tpl->assign('quantite', $ficheProduit['quantite']);
$tpl->assign('descriptif', $ficheProduit['descriptif']);
$tpl->assign('stock', $ficheProduit['stock']);
$tpl->assign('poids_piece', $ficheProduit['poids_piece']);
$tpl->display('vue/produitVueConsult.tpl');

?>