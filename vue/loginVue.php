<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();

require_once 'modele/modele.php';
require_once 'include/infoConnexion.php';

$cnx = connexion(SERVEUR, UTILISATEUR, MOTDEPASSE, BASEDEDONNEES);

if (isset($_POST['valider'])) {
    
    $tmp_login = $_POST['fLogin'];
    $tmp_mdp = $_POST['fMdp'];
    
    $sql = "SELECT * FROM utilisateurs WHERE login='$tmp_login'";
    $idRequete = executeR($cnx, $sql);
    
    if ($idRequete->rowCount() == 1) {
        $row = $idRequete->fetch(PDO::FETCH_NUM);
        $droite = "tk!@";
        $gauche = "ar3o&b%";
        $jeton = hash('ripemd128', "$gauche.$tmp_mdp.$droite");
        echo 'Ketchoze';
            if($jeton == $row[3]){
                session_start();
                $_SESSION['login'] = $tmp_login;
                $_SESSION['nom'] = $row[1];
                $_SESSION['prenom'] = $row[0];
                Header('Location: index.php');
            }else{
                echo "Mot de passe inconnu";
            }
    } else {
        echo "Nom inconnu";
    }
}

$tpl->display('vue/loginVue.tpl');
