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
                                <form method='POST' name='gestion'>
                                    <input class="action" type="hidden" name="gestion" value="produit">
                                    <input class="action" type="submit" name="produits" value="Articles">
                                </form>
                            </li>
                            <li>
                                <form method='POST' name='gestion'>
                                    <input class="action" type="submit" name="clients" value="Clients">
                                </form>
                            </li>
                            <li>
                                <form method='POST' name='gestion'>
                                    <input class="action" type="submit" name="commandes" value="Commandes">
                                </form>
                            </li>
                            <li>
                                <form method='POST' name='gestion'>
                                    <input class="action" type="submit" name="lignes_commande" value="Ligne Commande">
                                </form>
                            </li>
                            <li>
                                <form method='POST' name='gestion'>
                                    <input class="action" type="submit" name="vendeurs" value="Vendeur">
                                </form>
                            </li>
                            <li>
                                <form method='POST' action="index.php">
                                    <input class="action" type="submit" name="deco" value="Déconnexion">
                                </form>
                            </li> 
                        </ul>
                    </form>
                </nav>
            </header>
            <br>
            <a class="lienAcc" href="./index.php">Accueil</a>
            <br>
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
