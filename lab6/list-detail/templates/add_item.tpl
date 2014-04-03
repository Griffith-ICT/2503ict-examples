<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Add item</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<h1>Add new item</h1>

{if $error}
    <p>{$error}</p>
{/if}

<form method="post" action="add_item_action.php">
    <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary"></td></tr>
    <tr><td>Details:</td> <td><textarea name="details"></textarea></td></tr>
    <tr><td colspan=2><input type="submit" value="Add item">
    </table>
</form>
</body>
</html>
