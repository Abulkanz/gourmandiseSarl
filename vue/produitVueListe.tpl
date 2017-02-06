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
                <p class="groTit">{$msg}</p>
                <ul>
                    <li></li>
                    <li>></li>
                    <li></li>
                    <li></li>
                    <img class="avatar" src="../img/avatarTest.png" alt=""/>
                </ul>
                <form method="POST" action="index.php" id="boutAjout">
                    <input type="hidden" name="gestion" value="produit">
                    <input type="hidden" name="action" value="ajouter">
                    <input type='submit' name='ajouter' value='Ajouter un produit'>
                </form>
            </header>
            <a class="lienAcc" href="./index.php">Accueil</a>

            {if $success eq '1'}
                <div class="succes"><h3 class="mSucces">Bravo</h3></div>
            {else}
            {/if}
            <br>
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
                                <input class="action" type='submit' name='consulter' value='C'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="{$Produit.reference}">
                                <input type="hidden" name="action" value="consulter">
                            </form>
                            <form method='POST' action='index.php'>
                                <input class="action" type='submit' name='modifier' value='M'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="{$Produit.reference}">
                                <input type="hidden" name="action" value="modifier">
                            </form>
                            <form method='POST' action='index.php'>
                                <input class="action" type='submit' name='supprimer' value='S'>
                                <input type="hidden" name="gestion" value="produit">
                                <input type='hidden' name='reference' value="{$Produit.reference}">
                                <input type="hidden" name="action" value="supprimer">
                            </form>
                        </td>
                    </tr>
                {/foreach}
            </table>
            <br>
        </div>
    </body>
</html>


