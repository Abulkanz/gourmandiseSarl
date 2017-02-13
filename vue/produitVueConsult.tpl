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
            <br>
            <table class="pUnique">
                <tr>
                    <th>Photo</th>
                    <th>Info</th>
                    <th>Détail</th>
                </tr>
                <tr>
                    <td rowspan="8"><img src="img/gummy.png" alt=""/></td>
                <tr>
                    <td>
                        Reference
                    </td>
                    <td>{$reference}</td>
                </tr>
                <tr>
                    <td>
                        Designation
                    </td>
                    <td>{$designation}</td>
                </tr>
                <tr>
                    <td>
                        Prix Unitaire Hors Taxe
                    </td>
                    <td>{$prix_unitaire_HT}</td>
                </tr>
                <tr>
                    <td>
                        Quantité
                    </td>
                    <td>{$quantite}</td>
                </tr>
                <tr>
                    <td>
                        Descriptif
                    </td>
                    <td>{$descriptif}</td>
                </tr>
                <tr>
                    <td>
                        Stock
                    </td>
                    <td>{$stock}</td>
                </tr>
                <tr>
                    <td>
                        Poids par pièce
                    </td>
                    <td>{$poids_piece}</td>
                </tr>
            </table>
            <a class="lienAcc" href="./index.php">Accueil</a>
        </div>

    </body>
</html>
