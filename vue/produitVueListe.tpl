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
            <header><h1 class="center groTit">{$msg}</h1></header>
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
                        <td><form method='POST' action='vue/produitVueConsult.php'>
                                <input type='submit' name='gestion' value='C'><input type='hidden' name='id' value={$Produit.reference}>
                            </form>
                        </td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </body>
</html>


