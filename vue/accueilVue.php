<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$vendeursCA = array();
$bestCustomers = array();
$i = 0;

while ($row = $idRequete->fetch()) {
    $vendeursCA[$i]['nomVendeur'] = $row['nom'];
    $vendeursCA[$i]['CA'] = $row['ROUND(SUM(total_ht + total_tva), 2)'];
    $i++;
}

while ($row = $idRequete1->fetch()) {
    $bestCustomers[$i]['refClient'] = $row['codeCli'];
    $bestCustomers[$i]['nomClient'] = $row['nom'];
    $bestCustomers[$i]['CAcl'] = $row['ROUND(SUM(total_ht + total_tva), 2)'];
    $i++;
}

$tpl->assign('vendeursCA', $vendeursCA);
$tpl->assign('bestCustomers', $bestCustomers);
$tpl->assign('msg', 'Tableau de bord');

$tpl->display('vue/accueilVue.tpl');
