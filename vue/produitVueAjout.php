<!--?php require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();

$tpl->assign('libDesignation', 'Designation :');
$tpl->assign('libPrixUnitaireHT', 'Prix unitaire HT');
$tpl->assign('libProduitPoidsOuLot', 'Descriptif :');
$tpl->assign('libQuantiteStock', 'Stock :');
$tpl->assign('libQuantiteConditionne', 'Quantité');
$tpl->assign('libPoidsOuNbPieces', 'Poids pièce');
$tpl->assign('jsAlertStock', "<script>
                                    var valStock = document.getElementById('stock').value;
                                    if (valStock === '0'){
                                    alert('Stock à zéro');
                                    }
                              </script>");



switch ($action) {
    case 'ajouter':
        $tpl->assign('libPieces', 'Pieces');
        $tpl->assign('libGrammes', 'Grammes');
        $tpl->assign('valDesignation', '');
        $tpl->assign('valPrixUnitaireHT', '');
        $tpl->assign('valProduitPoidsOuLot', 'G');
        $tpl->assign('valQuantiteStock', '');
        $tpl->assign('valQuantiteConditionne', '');
        $tpl->assign('valPoidsOuNbPieces', '');

        $tpl->assign('titrePrincipal', 'Ajouter');
        $tpl->assign('titre', "Ajouter un produit");
        $tpl->assign('ajouterProd', 'ajouterProduit');
        $tpl->assign('ajouter', 'Ajouter');

        break;
}

$tpl->display('vue/produitVueAjout.tpl');
