<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
date_default_timezone_set('UTC');
include '../../Smarty/libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->display("index.tpl");
?>
