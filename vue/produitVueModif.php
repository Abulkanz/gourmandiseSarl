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
$tpl->assign('jScript', "<script>
                            function validForm() {
                                var valStock = document.forms['formAjMod']['stock'].value;
                                if (valStock == '' || valStock == 0 || valStock == undefined) {
                                    var choix = confirm('Attention, le stock est à zéro');
                                    if (choix === true) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }
                            }

                            function desactQte() {
                                var desc = document.getElementById('sDesc');
                                var choix = desc.options[desc.selectedIndex].value;
                                if (choix === 'G') {
                                    document.getElementById('pPiece').disabled = true;
                                    document.getElementById('pPiece').style.cursor = 'not-allowed';
                                    document.getElementById('pPiece').value = '0';
                                } else {
                                    document.getElementById('pPiece').disabled = false;
                                    document.getElementById('pPiece').style.cursor = 'default';
                                }
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
        $tpl->assign('inputRef', '');
        $tpl->assign('titrePrincipal', 'Ajouter');
        $tpl->assign('titre', "Ajouter un produit");
        $tpl->assign('confirmEdit', 'ajouterProduit');
        $tpl->assign('editer', 'Ajouter');

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
        $tpl->assign('confirmEdit', 'modifierProduit');
        $tpl->assign('editer', 'Modifier');
        break;
}

$tpl->display('vue/produitVueModif.tpl');
