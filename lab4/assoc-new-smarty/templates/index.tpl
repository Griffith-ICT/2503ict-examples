<!DOCTYPE HTML>
<!-- Home page of associative array search example. -->
<html>
<head>
  <title>Associative array search example</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <h2>Australian Prime Ministers</h2>
  <h3>Query</h3>

  <form method="get" action="results.php">
  <table>
    <tr><td>Name or year or state: </td>
        <td><input type="text" name="query"></td></tr>
    <tr><td colspan=2><input type="submit" value="Search">
                      <input type="reset" value="Reset"></td></tr>
  <table>
  </form>

  <hr>
  <p>
    Sources:
    <a href="show.php?file=index.php">index.php</a> 
    <a href="show.php?file=templates/index.tpl">templates/index.tpl</a> 
  </p>
</body>
</html>
