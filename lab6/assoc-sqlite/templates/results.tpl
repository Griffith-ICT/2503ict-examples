<!DOCTYPE html>
<!-- Results page of associativprime minister search example. -->
<html>
<head>
  <title>Associative array search results page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <header>
  </header>

  <section>
  <h2>Australian Prime Ministers</h2>
  <h3>Results for '{$query}'</h3>

  {if (count($pms) == 0)} 
    <p>No results found.</p>
  {else}
    <table class="bordered">
    <thead>
    <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
    </thead>
    <tbody>
    {foreach $pms as $pm}
      <tr><td>{$pm.index}</td><td>{$pm.name}</td><td>{$pm.from}</td><td>{$pm.to}</td>
          <td>{$pm.duration}</td><td>{$pm.party}</td><td>{$pm.state}</td></tr>
    {/foreach}
    </tbody>
    </table>
  {/if}

  <p><a href="index.php">New search</a></p>
  </section>

  <footer>
  </footer>
</body>
</html>
