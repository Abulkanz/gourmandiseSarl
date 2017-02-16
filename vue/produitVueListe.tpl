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
                <br>
                <nav class="center">
                    <ul>
                        <li>
                            <a class="lienAcc" href="./index.php">Accueil</a>
                        </li>
                        <li>
                            <form method="POST" action="index.php" id="boutAjout">
                                <input type="hidden" name="gestion" value="produit">
                                <input type="hidden" name="action" value="ajouter">
                                <input type='submit' name='ajouter' value='Ajouter un produit'>
                            </form>
                        </li> 
                        <li>
                            <form method="POST" action="index.php">
                                <input type="text" name="objRech" placeholder="Rechercher">
                                <input type="hidden" name="gestion" value="produit">
                                <input type="hidden" name="action" value="rechercher">
                                <input class="action" type="submit" name="rechercherProduit" value="->">
                                <label for="tri">Trier par</label>
                                <select id="tri" name="selection">
                                    <option selected="selected" value="designation">Designation</option>
                                    <option value="reference">Référence</option>
                                    <option value="prix_unitaire_HT">Prix H.T.</option>
                                    <option value="stock">Quantité en stock</option>
                                </select>
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>

            {if $success eq '1'}
                <br>
                <div class="succes"><h3 class="mSucces">Bravo</h3></div>
            {else}
                {$aucRes}
            {/if}
            <br>
            {$initTable}
            {foreach from=$listeProduits item=Produit}
                <tr>
                    <td>{$Produit.reference}</td>
                    <td>{$Produit.designation}</td>
                    <td>{$Produit.prix_unitaire_HT}</td>
                    <td>
                        <form method='POST' action='index.php'>
                            <input class="action" type='submit' name='consulter' value='Consulter'>
                            <input type="hidden" name="gestion" value="produit">
                            <input type='hidden' name='reference' value="{$Produit.reference}">
                            <input type="hidden" name="action" value="consulter">
                        </form>
                        <form method='POST' action='index.php'>
                            <input class="action" type='submit' name='modifier' value='Modifier'>
                            <input type="hidden" name="gestion" value="produit">
                            <input type='hidden' name='reference' value="{$Produit.reference}">
                            <input type="hidden" name="action" value="modifier">
                        </form>
                        <form method='POST' action='index.php'>
                            <input class="action" type='submit' name='supprimer' value='Supprimer'>
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


