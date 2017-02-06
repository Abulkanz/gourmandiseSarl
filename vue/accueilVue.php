<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();

$tpl->assign('msg','Tableau de bord');

$tpl->display('vue/accueilVue.tpl');