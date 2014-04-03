<?php
/*
 * Deletes item with given id.
 */
require "includes/defs.php";

$id = $_GET['id'];

delete_item($id);

header("Location: item_list.php");
exit;
?>
