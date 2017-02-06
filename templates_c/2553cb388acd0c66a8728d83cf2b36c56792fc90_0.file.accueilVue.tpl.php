<?php
/* Smarty version 3.1.29, created on 2017-02-06 15:45:08
  from "C:\Wamp64\www\gourmandiseSarl\vue\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58989a049060f3_55725682',
  'file_dependency' => 
  array (
    '2553cb388acd0c66a8728d83cf2b36c56792fc90' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandiseSarl\\vue\\accueilVue.tpl',
      1 => 1486395905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58989a049060f3_55725682 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GourmandiseSARL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <header>
                <p class="groTit"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                <nav class="center">
                    <form method='POST' name='gestion'>
                        <ul>
                            <li><input class="action" type="submit" name="produit" value="Articles"></li>
                            <li><input class="action" type="submit" name="produit" value="Clients"></li>
                            <li><input class="action" type="submit" name="produit" value="Commandes"></li>
                            <li><input class="action" type="submit" name="produit" value="Ligne Commande"></li>
                            <li><input class="action" type="submit" name="produit" value="Vendeur"></li>
                        </ul>
                    </form>
                </nav>
            </header>
            <a class="lienAcc" href="./index.php">Accueil</a>
            <table>
                <tr>
                    <th>Nom du vendeur</th>
                    <th>Chiffre d'affaire</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['vendeursCA']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Vendeur_0_saved_item = isset($_smarty_tpl->tpl_vars['Vendeur']) ? $_smarty_tpl->tpl_vars['Vendeur'] : false;
$_smarty_tpl->tpl_vars['Vendeur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Vendeur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Vendeur']->value) {
$_smarty_tpl->tpl_vars['Vendeur']->_loop = true;
$__foreach_Vendeur_0_saved_local_item = $_smarty_tpl->tpl_vars['Vendeur'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Vendeur']->value['nomVendeur'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Vendeur']->value['CA'];?>
</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['Vendeur'] = $__foreach_Vendeur_0_saved_local_item;
}
if ($__foreach_Vendeur_0_saved_item) {
$_smarty_tpl->tpl_vars['Vendeur'] = $__foreach_Vendeur_0_saved_item;
}
?>
            </table>
            <br>
            <table>
                <tr>
                    <th>Reference Client</th>
                    <th>Nom du Client</th>
                    <th>Total de chiffre d'affaires</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['bestCustomers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Client_1_saved_item = isset($_smarty_tpl->tpl_vars['Client']) ? $_smarty_tpl->tpl_vars['Client'] : false;
$_smarty_tpl->tpl_vars['Client'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Client']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Client']->value) {
$_smarty_tpl->tpl_vars['Client']->_loop = true;
$__foreach_Client_1_saved_local_item = $_smarty_tpl->tpl_vars['Client'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Client']->value['refClient'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Client']->value['nomClient'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Client']->value['CAcl'];?>
</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['Client'] = $__foreach_Client_1_saved_local_item;
}
if ($__foreach_Client_1_saved_item) {
$_smarty_tpl->tpl_vars['Client'] = $__foreach_Client_1_saved_item;
}
?>
            </table>
        </div>
    </body>
</html>
<?php }
}
