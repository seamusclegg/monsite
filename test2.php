<?php
require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');

$ma_variable="Hello World!";
$smarty->debugging = true;
$sm$smarty->assign('ma_variable',$ma_variable);
arty->display('test2.tpl');

?>
