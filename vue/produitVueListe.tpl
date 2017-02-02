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
            <header><h1 class="center groTit">{$msg}</h1></header>
            <a class="lienAcc" href="./index.php">Accueil</a>
            <table>
                <tr>
                    <th>Reference</th>
                    <th>Designation</th>
                    <th>Prix Unitaire Hors Taxe</th>
                </tr>
                {foreach from=$listeProduits item=Produit}
                    <tr>
                        <td>{$Produit.reference}</td>
                        <td>{$Produit.designation}</td>
                        <td>{$Produit.prix_unitaire_HT}</td>
                        <td>
                            <form method='POST' action='index.php'>
                                <input type='submit' name='consulter' value='C'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="{$Produit.reference}">
                                <input type="hidden" name="action" value="consulter">
                            </form>
                            <form method='POST' action='index.php'>
                                <input type='submit' name='modifier' value='M'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="{$Produit.reference}">
                                <input type="hidden" name="action" value="modifier">
                            </form>
                        </td>
                    </tr>
                {/foreach}
            </table>
            <form>
                <input type='submit' name='ajouter' value='Ajouter un produit'>
                <input type="hidden" name="gestion" value="produit">
                <input type="hidden" name="action" value="ajouter">
            </form>
        </div>
    </body>
</html>


