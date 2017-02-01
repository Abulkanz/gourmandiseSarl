<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$ficheProduit = array();
$msg = 'Fiche unique';

if($row = $idRequete->fetch()){
$ficheProduit['reference'] = $row['reference'];
$ficheProduit['designation'] = $row['designation'];
$ficheProduit['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
}

$tpl->assign('msg', $msg);
$tpl->assign('reference', $ficheProduit['reference']);
$tpl->assign('designation', $ficheProduit['designation']);
$tpl->assign('prix_unitaire_HT', $ficheProduit['prix_unitaire_HT']);
$tpl->display('vue/produitVueConsult.tpl');

?>