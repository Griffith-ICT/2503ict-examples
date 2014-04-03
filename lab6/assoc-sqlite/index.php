<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include '../../Smarty/libs/Smarty.class.php';

date_default_timezone_set('UTC');

$smarty = new Smarty;
$smarty->display("index.tpl");
?>
