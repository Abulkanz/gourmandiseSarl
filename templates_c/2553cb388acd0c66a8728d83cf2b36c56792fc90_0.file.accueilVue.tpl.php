<?php
/* Smarty version 3.1.29, created on 2017-02-06 11:04:23
  from "C:\Wamp64\www\gourmandiseSarl\vue\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5898583739a432_77780758',
  'file_dependency' => 
  array (
    '2553cb388acd0c66a8728d83cf2b36c56792fc90' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandiseSarl\\vue\\accueilVue.tpl',
      1 => 1486379043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5898583739a432_77780758 ($_smarty_tpl) {
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
                <nav>
                    <ul>
                        <li>Articles</li>
                        <li>Clients</li>
                        <li>Vendeurs</li>
                    </ul>
                </nav>
            </header>
            <a class="lienAcc" href="./index.php">Accueil</a>
        </div>
    </body>
</html>
<?php }
}
