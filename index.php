<?php

require_once 'include/configuration.php';

if(isset($_REQUEST['gestion'])){
    $gestion = $_REQUEST['gestion'];
}else{
    $gestion = 'accueil';
}

require_once 'controleur/router.php';      

?>
