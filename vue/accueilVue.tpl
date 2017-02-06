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
                <p class="groTit">{$msg}</p>
                <nav class="center">
                    <form method='POST' name='gestion'>
                        <ul>
                            <li>
                                <input class="action" type="hidden" name="gestion" value="produit">
                                <input class="action" type="submit" name="produits" value="Articles">
                            </li>
                            <li><input class="action" type="submit" name="clients" value="Clients"></li>
                            <li><input class="action" type="submit" name="commandes" value="Commandes"></li>
                            <li><input class="action" type="submit" name="lignes_commande" value="Ligne Commande"></li>
                            <li><input class="action" type="submit" name="vendeurs" value="Vendeur"></li>
                        </ul>
                    </form>
                </nav>
            </header>
            <a class="lienAcc" href="./index.php">Accueil</a>
            <table>
                <tr>
                    <th>Nom du vendeur</th>
                    <th>Chiffre d'affaires</th>
                </tr>
                {foreach from=$vendeursCA item=Vendeur}
                    <tr>
                        <td>{$Vendeur.nomVendeur}</td>
                        <td>{$Vendeur.CA}</td>
                    </tr>
                {/foreach}
            </table>
            <br>
            <table>
                <tr>
                    <th>Reference Client</th>
                    <th>Nom du Client</th>
                    <th>Total de chiffre d'affaires</th>
                </tr>
                {foreach from=$bestCustomers item=Client}
                    <tr>
                        <td>{$Client.refClient}</td>
                        <td>{$Client.nomClient}</td>
                        <td>{$Client.CAcl}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </body>
</html>
