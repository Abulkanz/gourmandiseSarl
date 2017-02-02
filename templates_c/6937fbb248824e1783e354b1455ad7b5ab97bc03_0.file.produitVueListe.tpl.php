<?php
/* Smarty version 3.1.29, created on 2017-02-02 09:03:10
  from "C:\Wamp64\www\gourmandiseSarl\vue\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5892f5cee901c1_33755447',
  'file_dependency' => 
  array (
    '6937fbb248824e1783e354b1455ad7b5ab97bc03' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandiseSarl\\vue\\produitVueListe.tpl',
      1 => 1486026177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5892f5cee901c1_33755447 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <header><h1 class="center groTit"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1></header>
            <a class="lienAcc" href="./index.php">Accueil</a>
            <table>
                <tr>
                    <th>Reference</th>
                    <th>Designation</th>
                    <th>Prix Unitaire Hors Taxe</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['listeProduits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Produit_0_saved_item = isset($_smarty_tpl->tpl_vars['Produit']) ? $_smarty_tpl->tpl_vars['Produit'] : false;
$_smarty_tpl->tpl_vars['Produit'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Produit']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Produit']->value) {
$_smarty_tpl->tpl_vars['Produit']->_loop = true;
$__foreach_Produit_0_saved_local_item = $_smarty_tpl->tpl_vars['Produit'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['designation'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['prix_unitaire_HT'];?>
</td>
                        <td>
                            <form method='POST' action='index.php'>
                                <input type='submit' name='consulter' value='C'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                                <input type="hidden" name="action" value="consulter">
                            </form>
                            <form method='POST' action='index.php'>
                                <input type='submit' name='modifier' value='M'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                                <input type="hidden" name="action" value="modifier">
                            </form>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_local_item;
}
if ($__foreach_Produit_0_saved_item) {
$_smarty_tpl->tpl_vars['Produit'] = $__foreach_Produit_0_saved_item;
}
?>
            </table>
            <form>
                <input type='submit' name='ajouter' value='Ajouter un produit'>
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="ajouter">
            </form>
        </div>
    </body>
</html>


<?php }
}
