<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire Modification</title>
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <header>
                <div id='banner'><h1>LISTE D'AUTEURS</h1></div>
                <br>
            </header>
            <form id='fModif' method='post' action='formModif.php'>
                <input type='hidden' name='id' value=>   
                       <input type='text' name='Nom' value="">
                       <input type='text' name='Prenom' value="">
                       <input type='text' name='aN' value="">
                       <br><br>
                <input type='submit' name='vModif' value='Modifier'>
                <input type='submit' name='aModif' value='Annuler'>
            </form>
    </body>
</html>

