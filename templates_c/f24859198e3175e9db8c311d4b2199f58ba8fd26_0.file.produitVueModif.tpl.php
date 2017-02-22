<?php
/* Smarty version 3.1.29, created on 2017-02-22 12:35:15
  from "C:\wamp64\www\gourmandiseSarl\vue\produitVueModif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ad8583475fc3_17271690',
  'file_dependency' => 
  array (
    'f24859198e3175e9db8c311d4b2199f58ba8fd26' => 
    array (
      0 => 'C:\\wamp64\\www\\gourmandiseSarl\\vue\\produitVueModif.tpl',
      1 => 1487274776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ad8583475fc3_17271690 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titrePrincipal']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload='desactQte()'>
        <div class="conteneur">
            <h1 class="center groTit"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
            <div style="margin: auto auto;">
                <form method="POST" name="formAjMod" onsubmit="return validForm()" action="index.php">
                    <?php echo $_smarty_tpl->tpl_vars['inputRef']->value;?>

                    <?php echo $_smarty_tpl->tpl_vars['libDesignation']->value;?>

                    <br>
                    <input type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['valDesignation']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libPrixUnitaireHT']->value;?>

                    <br>
                    <input type="number" name="prix_unitaire_HT" value="<?php echo $_smarty_tpl->tpl_vars['valPrixUnitaireHT']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libProduitPoidsOuLot']->value;?>

                    <br>
                    <select id="sDesc" class="descriptif" onchange="desactQte()" name="descriptif">
                         <option selected="selected" value="G"><?php echo $_smarty_tpl->tpl_vars['libGrammes']->value;?>
</option>
                        <option value="P"><?php echo $_smarty_tpl->tpl_vars['libPieces']->value;?>
</option>
                    </select>
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libQuantiteStock']->value;?>

                    <br>
                    <input type="number" id="stock" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['valQuantiteStock']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libQuantiteConditionne']->value;?>

                    <br>
                    <input type="number" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['valQuantiteConditionne']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libPoidsOuNbPieces']->value;?>

                    <br>
                    <input id="pPiece" type="number" step="0.01" name="poids_piece" value="<?php echo $_smarty_tpl->tpl_vars['valPoidsOuNbPieces']->value;?>
">
                    <br><br>
                    <input type="hidden" name="gestion" value="produit">
                    <input class="action" type="submit" name="retour" value="Annuler">
                    <input class="action" type="submit" name="<?php echo $_smarty_tpl->tpl_vars['confirmEdit']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['editer']->value;?>
">
                </form>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['jScript']->value;?>

    </body>
</html><?php }
}
