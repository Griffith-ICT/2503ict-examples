<?php
/*
 * Displays form to update item with given id.
 */
require '../../Smarty/libs/Smarty.class.php';
require "includes/defs.php";

date_default_timezone_set('UTC');

$id = $_GET['id'];
$error = @$_GET['error']; # for error reporting

$item = get_item($id);

$smarty = new Smarty;

$smarty->assign('item',$item);
$smarty->assign('error',$error);

$smarty->display('update_item.tpl');
?>
