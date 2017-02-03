<!DOCTYPE html>
<html>
    <head>
        <title>{$titrePrincipal}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="conteneur">
            <h1 class="center groTit">{$titre}</h1>
            <div style="margin: auto auto;">
                <form method="POST" action="index.php">
                    {$inputRef}
                    {$libDesignation}
                    <br>
                    <input type="text" name="designation" value="{$valDesignation}">
                    <br><br>
                    {$libPrixUnitaireHT}
                    <br>
                    <input type="number" name="prix_unitaire_HT" value="{$valPrixUnitaireHT}">
                    <br><br>
                    {$libProduitPoidsOuLot}
                    <br>
                    <select class="descriptif" name="descriptif">
                        <option selected="selected" value="G">{$libGrammes}</option>
                        <option value="P">{$libPieces}</option>
                    </select>
                    <br><br>
                    {$libQuantiteStock}
                    <br>
                    <input type="number" id="stock" name="stock" value="{$valQuantiteStock}">
                    <br><br>
                    {$libQuantiteConditionne}
                    <br>
                    <input type="number" name="quantite" value="{$valQuantiteConditionne}">
                    <br><br>
                    {$libPoidsOuNbPieces}
                    <br>
                    <input type="number" step="0.01" name="poids_piece" value="{$valPoidsOuNbPieces}">
                    <br><br>
                    <input type="hidden" name="gestion" value="produit">
                    <input type="submit" name="retour" value="Annuler">
                    <input type="submit" name="{$confirmEdit}" value="{$editer}">
                </form>
            </div>
        </div>
    </body>
    {$jsAlertStock}
</html>