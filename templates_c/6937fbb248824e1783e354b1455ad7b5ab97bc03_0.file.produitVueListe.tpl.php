<?php
/* Smarty version 3.1.29, created on 2017-01-31 16:29:16
  from "C:\Wamp64\www\gourmandiseSarl\vue\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5890bb5c20c1b9_92183351',
  'file_dependency' => 
  array (
    '6937fbb248824e1783e354b1455ad7b5ab97bc03' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandiseSarl\\vue\\produitVueListe.tpl',
      1 => 1485880136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5890bb5c20c1b9_92183351 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="template/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <header><h1 class="center groTit"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1></header>
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
                        <td><form method='POST' action='vue/produitVueConsult.php'>
                                <input type='submit' name='consulter' value='C'><input type='hidden' name='id' value=<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
>
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
        </div>
    </body>
</html>


<?php }
}
