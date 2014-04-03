<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty.class.php';

$smarty = new Smarty;
$smarty->display("index.tpl");
?>
