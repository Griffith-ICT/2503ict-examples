<?php
/*
 * Displays the list of item summaries that match a given query,
 * if present or the list of all item summaries otherwise. 
 * Each summary is a link to the items's details.
 * This is an alias for item_list.php.
 */
require '../../Smarty/libs/Smarty.class.php';
require "includes/defs.php";

date_default_timezone_set('UTC');

if (isset($_GET['query'])) {
    $query = $_GET['query'];
} else {
    $query = "";
}

$items = get_items($query);

$smarty = new Smarty;

$smarty->assign("query",$query);
$smarty->assign("items",$items);

$smarty->display("item_list.tpl");
?>
