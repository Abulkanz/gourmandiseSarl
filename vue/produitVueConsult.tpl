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
                <tr>
                    <td>{$Produit.reference}</td>
                    <td>{$Produit.designation}</td>
                    <td>{$Produit.prix_unitaire_HT}</td>
                </tr>
            </table>
        </div>
    </body>
</html>