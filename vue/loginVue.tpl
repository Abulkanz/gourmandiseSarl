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