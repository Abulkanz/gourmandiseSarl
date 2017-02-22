<?php
/* Smarty version 3.1.29, created on 2017-02-22 12:34:50
  from "C:\wamp64\www\gourmandiseSarl\vue\loginVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ad856a689188_89663737',
  'file_dependency' => 
  array (
    '8210928410ce401ac138e8b02ff6a1171de1484b' => 
    array (
      0 => 'C:\\wamp64\\www\\gourmandiseSarl\\vue\\loginVue.tpl',
      1 => 1486938687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ad856a689188_89663737 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
        <title>Connexion</title>
    </head>
    <body>
        <div id="loginBox">
            <h1>BIENVENUE</h1>
            <form id="login" method="POST" action="index.php">
                <label for="cLogin">Login</label>
                <input type="text" name="fLogin" id="cLogin">
                <label for="cMdp">Mot de passe</label>
                <input type="password" name="fMdp" id="cMdp">
                <input type="submit" name="valider" value="CONFIRMER">
            </form>
        </div>
    </body>
</html>
<?php }
}
