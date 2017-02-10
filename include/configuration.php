<?php

require_once 'infoConnexion.php';

function deconnexion() {
    $_SESSION = array();
    session_destroy();
    require_once 'vue/loginVue.php';
}
