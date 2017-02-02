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
            <table class="pUnique">
                <tr>
                    <th>Reference</th>
                    <th>Designation</th>
                    <th>Prix Unitaire Hors Taxe</th>
                    <th>Quantité</th>
                    <th>Descriptif</th>
                    <th>Stock</th>
                    <th>Poids par pièce</th>
                </tr>
                <tr>
                    <td>{$reference}</td>
                    <td>{$designation}</td>
                    <td>{$prix_unitaire_HT}</td>
                    <td>{$quantite}</td>
                    <td>{$descriptif}</td>
                    <td>{$stock}</td>
                    <td>{$poids_piece}</td>
                </tr>
            </table>

            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="produit">
                <input type="submit" name="retour" value="Annuler">
                <input type="submit" name="{$supprimerProd}" value="{$validSuppr}">
            </form>

            <a class="lienAcc" href="./index.php">Accueil</a>

        </div>

    </body>
</html>
