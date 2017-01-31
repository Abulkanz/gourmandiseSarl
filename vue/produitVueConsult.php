<?php

require_once '../include/libs/Smarty.class.php';

$tpl = new Smarty();
$ficheProduit = array();
$msg = 'Fiche unique';

$row = $idRequete->fetch();
$ficheProduit['reference'] = $row['$reference'];
$ficheProduit['designation'] = $row['designation'];
$ficheProduit['prix_unitaire_HT'] = $row['prix_unitaire_HT'];


$tpl->assign('ficheProduit', $ficheProduit);
$tpl->display('vue/produitVueConsult.tpl');

