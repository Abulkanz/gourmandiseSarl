<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$listeProduits = array();
$i = 0;

if (isset($_POST['action'])) {
//    $ligne = $idRequete->fetch();
    if (!$ligne = $idRequete->fetch()) {
        $aucRes = '<p class="aucRes">--La recherche ne fournit aucun resultat--</p>';
        $nbLignes = '';
        $initTable = '';
    } else {
        $initTable = '<table>
                    <tr>
                        <th>Reference</th>
                        <th>Designation</th>
                        <th>Prix Unitaire Hors Taxe</th>
                    </tr>';

        while ($ligne = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $listeProduits[$i]['reference'] = $ligne['reference'];
            $listeProduits[$i]['designation'] = $ligne['designation'];
            $listeProduits[$i]['prix_unitaire_HT'] = $ligne['prix_unitaire_HT'];
            $i++;
        }
        $aucRes = '';
        $nbLignes = $idRequete->rowCount();
    }
} else {
    $initTable = '<table>
                    <tr>
                        <th>Reference</th>
                        <th>Designation</th>
                        <th>Prix Unitaire Hors Taxe</th>
                    </tr>';
    while ($row = $reqListeProd->fetch()) {
        $listeProduits[$i]['reference'] = $row['reference'];
        $listeProduits[$i]['designation'] = $row['designation'];
        $listeProduits[$i]['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
        $i++;
    }
    $aucRes = '';
    $nbLignes = $reqListeProd->rowCount();
}



$tpl->assign('msg', 'Liste des produits');
$tpl->assign('aucRes', $aucRes);
$tpl->assign('nbLignes', $nbLignes);
$tpl->assign('initTable', $initTable);
$tpl->assign('listeProduits', $listeProduits);

if (!empty($_GET['success'])) {
    $tpl->assign('success', $_GET['success']);
} else {
    $tpl->assign('success', '0');
}

$tpl->display('vue/produitVueListe.tpl');

