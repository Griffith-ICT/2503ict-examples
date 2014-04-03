<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Show item list</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
{if $query}
<h1>Items for '{$query}'</h1>
{else}
<h1>Items</h1>
{/if}
    
{if $items}
<ul>
{foreach $items as $item}
    <li><a href="item_detail.php?id={$item.id}">{$item.summary|escape}</a></li>
{/foreach}
</ul>
{else}
<p>No items found.</p>
{/if}

<form method="get" action="item_list.php">
Search: <input type="text" name="query"> <input type="submit" value="Go">
</form>

<p><a href="add_item.php">Add a new item</a></p>

{if $query}
<p><a href="item_list.php">Home</a></p>
{/if}
</body>
</html>
