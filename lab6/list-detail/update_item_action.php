<?php
/*
 * Updates item from form data.
 */

require "includes/defs.php";

# Get form data
$id = $_POST['id'];
$summary = $_POST['summary'];
$details = $_POST['details'];

# Check data is valid
if (empty($summary)) {
    $error = "Summary must be nonempty.";
    header("Location: update_item?id=$id&error=$error");
    exit;
}

# Perform update with data
update_item($id,$summary,$details);

header("Location: item_detail.php?id=$id"); 
exit;
?>


