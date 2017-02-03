<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$ficheProduit = array();

$tpl->assign('libDesignation', 'Designation :');
$tpl->assign('libPrixUnitaireHT', 'Prix unitaire HT');
$tpl->assign('libProduitPoidsOuLot', 'Descriptif :');
$tpl->assign('libQuantiteStock', 'Stock :');
$tpl->assign('libQuantiteConditionne', 'Quantité');
$tpl->assign('libPoidsOuNbPieces', 'Poids pièce');
$tpl->assign('jsAlertStock', "<script>
                                    var valStock = document.getElementsByClassName('stock').value;
                                    alert(valStock);
                                    if (valStock === '0'){
                                    alert('Stock à zéro');
                                    }
                              </script>");


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
    case 'modifier' :

        $ficheProduit = array();

        if ($row = $idRequete->fetch()) {
            $ficheProduit['reference'] = $row['reference'];
            $ficheProduit['designation'] = $row['designation'];
            $ficheProduit['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
            $ficheProduit['quantite'] = $row['quantite'];
            $ficheProduit['descriptif'] = $row['descriptif'];
            $ficheProduit['stock'] = $row['stock'];
            $ficheProduit['poids_piece'] = $row['poids_piece'];
        }

        $valReference = $ficheProduit['reference'];
        $inputRef = '<input type="hidden" name="reference" value=' . $valReference . '>';


        $tpl->assign('libPieces', 'Pieces');
        $tpl->assign('libGrammes', 'Grammes');
        $tpl->assign('inputRef', $inputRef);
        $tpl->assign('valDesignation', $ficheProduit['designation']);
        $tpl->assign('valPrixUnitaireHT', $ficheProduit['prix_unitaire_HT']);
        $tpl->assign('valProduitPoidsOuLot', $ficheProduit['descriptif']);
        $tpl->assign('valQuantiteStock', $ficheProduit['stock']);
        $tpl->assign('valQuantiteConditionne', $ficheProduit['quantite']);
        $tpl->assign('valPoidsOuNbPieces', $ficheProduit['poids_piece']);

        $tpl->assign('titrePrincipal', 'Modifier');
        $tpl->assign('titre', "Modifier un produit");
        $tpl->assign('modifierProd', 'modifierProduit');
        $tpl->assign('modifier', 'Modifier');
        break;
}

$tpl->display('vue/produitVueModif.tpl');
