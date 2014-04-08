<!DOCTYPE html>
<!-- Home page of prime minister search example. -->
<html>
<head>
  <title>Associative array search example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <header>
  </header>

  <section>
  <h2>Australian Prime Ministers</h2>
  <h3>Query</h3>

  <form method="get" action="results.php">
  <table>
    <tr><td>Name or year or state: </td>
        <td><input type="text" name="query"></td></tr>
    <tr><td colspan=2><input type="submit" value="Search">
                      <input type="reset" value="Reset"></td></tr>
  </table>
  </form>
  </section>

  <footer>
  </footer>
</body>
</html>
