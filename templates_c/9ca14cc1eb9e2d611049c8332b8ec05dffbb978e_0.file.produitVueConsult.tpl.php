<?php
/* Smarty version 3.1.29, created on 2017-02-03 23:08:33
  from "C:\wamp64\www\gourmandiseSarl\vue\produitVueConsult.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58950d71bccaa3_24606401',
  'file_dependency' => 
  array (
    '9ca14cc1eb9e2d611049c8332b8ec05dffbb978e' => 
    array (
      0 => 'C:\\wamp64\\www\\gourmandiseSarl\\vue\\produitVueConsult.tpl',
      1 => 1486163310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58950d71bccaa3_24606401 ($_smarty_tpl) {
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
            <br>
            <table class="pUnique">
                <tr>
                    <th>Reference</th>
                    <th>Designation</th>
                    <th>Prix Unitaire Hors Taxe</th>
                    <th>Quantité</th>
                    <th>Descriptif</th>
                    <th>Stock</th>
                    <th>Poids par pièce</th>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['designation']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['prix_unitaire_HT']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['quantite']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['descriptif']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['poids_piece']->value;?>
</td>
                </tr>
            </table>
            <a class="lienAcc" href="./index.php">Accueil</a>
        </div>
        
    </body>
</html>
<?php }
}
