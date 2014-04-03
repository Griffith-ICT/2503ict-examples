<?php
/*
 * Displays details of item with given id.
 */
require '../../Smarty/libs/Smarty.class.php';
require "includes/defs.php";

date_default_timezone_set('UTC');

$id = $_GET['id'];
$item = get_item($id);

$smarty = new Smarty;
$smarty->assign("item",$item);
$smarty->display("item_detail.tpl");
?>
