<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Update item</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<h1>Update item</h1>
{if $error}
    <p>{$error}</p>
{/if}

<form method="post" action="update_item_action.php">
    <input type="hidden" name="id" value="{$item.id}">
    <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary" value="{$item.summary}"> <br></td></tr>
    <tr><td>Details:</td> <td><textarea name="details">{$item.details}</textarea> <br></td></tr>
    <tr><td><input type="submit" value="Update item"></td></tr>
    </table>
</form>
</body>
</html>
