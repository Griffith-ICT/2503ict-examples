<?php
/*
 * Displays form to add new item.
 */
require '../../Smarty/libs/Smarty.class.php';
require "includes/defs.php";

date_default_timezone_set('UTC');

if (isset($_GET['error'])) {
    $error = $_GET['error']; # for error reporting
} else {
    $error = "";
}

$smarty = new Smarty;
$smarty->assign('error',$error);
$smarty->display('add_item.tpl');
?>
