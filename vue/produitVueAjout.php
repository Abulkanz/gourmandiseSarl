<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();

$tpl->assign('libDesignation', 'Designation :');
$tpl->assign('libPrixUnitaireHT', 'Prix unitaire HT');
$tpl->assign('libProduitPoidsOuLot', 'Descriptif :');
$tpl->assign('libQuantiteStock', 'Stock :');
$tpl->assign('libQuantiteConditionne', 'Quantité');
$tpl->assign('libPoidsOuNbPieces', 'Poids pièce');



switch ($action) {
    case 'ajouter':
        $tpl->assign('libPieces', 'Pieces');
        $tpl->assign('libGrammes', 'Grammes');
        $tpl->assign('valDesignation', '');
        $tpl->assign('valPrixUnitaireHT', '0');
        $tpl->assign('valProduitPoidsOuLot', 'G');
        $tpl->assign('valQuantiteStock', '0');
        $tpl->assign('valQuantiteConditionne', '0');
        $tpl->assign('valPoidsOuNbPieces', '0');

        $tpl->assign('titrePrincipal', 'Ajouter');
        $tpl->assign('titre', "Ajouter un produit");
        $tpl->assign('ajouterProd', 'ajouterProduit');
        $tpl->assign('ajouter', 'Ajouter');

        break;
}

$tpl->display('vue/produitVueAjout.tpl');
