<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Upload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
    </head>
</head>
<body>
    <form method="POST" action="sUpload.php" enctype="multipart/form-data">
        <input type="file" name="fichier_source" value="" size="20">
        <input type="submit" name="go" value="Upload">
    </form>
    <?php
    if (isset($_POST['go'])) {
        if (isset($_FILES)) {
            $nom = $_FILES['fichier_source']['name'];
            $type = $_FILES['fichier_source']['type'];
            $size = $_FILES['fichier_source']['size'];
            $error = $_FILES['fichier_source']['error'];
            //Determiner le chemin avant de déplacer le fichier
            $nom = '../img/' . $nom;
            move_uploaded_file($_FILES['fichier_source']['tmp_name'], $nom);
            echo "Image téléchargée, ($nom):<img src='" . $nom . "' alt=''><hr>  Type : ".$type."  Taille : ".$size." octets" ;    
        }
    }
    ?>
</body>
</html>







