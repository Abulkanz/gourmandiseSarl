<?php
/* Smarty version 3.1.29, created on 2017-02-03 11:03:06
  from "C:\Wamp64\www\gourmandiseSarl\vue\produitVueModif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5894636a17f230_31427568',
  'file_dependency' => 
  array (
    '35bd07c9127836cafd428c5779a1829541811d86' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandiseSarl\\vue\\produitVueModif.tpl',
      1 => 1486119755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5894636a17f230_31427568 ($_smarty_tpl) {
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
    <body>
        <div class="conteneur">
            <h1 class="center groTit"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
            <div style="margin: auto auto;">
                <form method="POST" action="index.php">
                    <input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['valReference']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['libDesignation']->value;?>

                    <input type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['valDesignation']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libPrixUnitaireHT']->value;?>

                    <input type="number" name="prix_unitaire_HT" value="<?php echo $_smarty_tpl->tpl_vars['valPrixUnitaireHT']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libProduitPoidsOuLot']->value;?>

                    <select class="descriptif" name="descriptif">
                        <option selected="selected" value="G"><?php echo $_smarty_tpl->tpl_vars['libGrammes']->value;?>
</option>
                        <option value="P"><?php echo $_smarty_tpl->tpl_vars['libPieces']->value;?>
</option>
                    </select>
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libQuantiteStock']->value;?>

                    <input type="number" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['valQuantiteStock']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libQuantiteConditionne']->value;?>

                    <input type="number" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['valQuantiteConditionne']->value;?>
">
                    <br><br>
                    <?php echo $_smarty_tpl->tpl_vars['libPoidsOuNbPieces']->value;?>

                    <input type="number" step="0.01" name="poids_piece" value="<?php echo $_smarty_tpl->tpl_vars['valPoidsOuNbPieces']->value;?>
">
                    <br><br>
                    <input type="hidden" name="gestion" value="produit">
                    <input type="submit" name="retour" value="Annuler">
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['modifierProd']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['modifier']->value;?>
">
                </form>
            </div>
        </div>
    </body>
    <?php echo $_smarty_tpl->tpl_vars['jsAlertStock']->value;?>

</html><?php }
}
