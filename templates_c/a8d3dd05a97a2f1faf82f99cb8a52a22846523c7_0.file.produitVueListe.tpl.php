<?php
/* Smarty version 3.1.29, created on 2017-02-12 22:56:28
  from "C:\wamp64\www\gourmandiseSarl\vue\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a0e81c214700_00833368',
  'file_dependency' => 
  array (
    'a8d3dd05a97a2f1faf82f99cb8a52a22846523c7' => 
    array (
      0 => 'C:\\wamp64\\www\\gourmandiseSarl\\vue\\produitVueListe.tpl',
      1 => 1486932634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a0e81c214700_00833368 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Liste Produits</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <header>
                <img id="logo" src="img/gummy.png" alt=""/>
                <p class="groTit"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                <form method="POST" action="index.php" id="boutAjout">
                    <input type="hidden" name="gestion" value="produit">
                    <input type="hidden" name="action" value="ajouter">
                    <input type='submit' name='ajouter' value='Ajouter un produit'>
                </form>
            </header>
            <a class="lienAcc" href="./index.php">Accueil</a>

            <?php if ($_smarty_tpl->tpl_vars['success']->value == '1') {?>
                <div class="succes"><h3 class="mSucces">Bravo</h3></div>
            <?php } else { ?>
            <?php }?>
            <br>
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
                                <input class="action" type='submit' name='consulter' value='Consulter'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                                <input type="hidden" name="action" value="consulter">
                            </form>
                            <form method='POST' action='index.php'>
                                <input class="action" type='submit' name='modifier' value='Modifier'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                                <input type="hidden" name="action" value="modifier">
                            </form>
                            <form method='POST' action='index.php'>
                                <input class="action" type='submit' name='supprimer' value='Supprimer'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="<?php echo $_smarty_tpl->tpl_vars['Produit']->value['reference'];?>
">
                                <input type="hidden" name="action" value="supprimer">
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
            <br>
        </div>
    </body>
</html>


<?php }
}
