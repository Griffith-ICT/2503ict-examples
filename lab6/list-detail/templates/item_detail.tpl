<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Show item detail</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<h1>{$item.summary}</h1>
    
<p>
{$item.details}

<p>
<a href="delete_item_action.php?id={$item.id}">Delete this item</a> (not yet implemented)

<p>
<a href="update_item.php?id={$item.id}">Update this item</a> (not yet implemented)

<p>
<a href="item_list.php">Home</a>
</body>
</html>
