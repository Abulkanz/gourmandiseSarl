<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <form method="POST" action="index.php">
                Designation
                <input type="text" name="designation" required>
                Prix Unitaire HT
                <input type="number" name="prix_unitaire_HT" >
                Produit au poids ou en lot
                <select class="descriptif" name="descriptif">
                    <option selected="selected" value="G">Grammes</option>
                    <option value="P">Pièces</option>
                </select>
                Quantité en stock
                <input type="number" name="stock">
                Poids ou nombre de pièces
                <input type="number" name="quantite">
                Poids d'une pièce
                <input type="number" name="poids_piece">
                <input type="submit" name="retour" value="Annuler">
                <input type="submit" name="ajouter" value="Ajouter">
            </form>
        </div>
    </body>
</html>
</html>