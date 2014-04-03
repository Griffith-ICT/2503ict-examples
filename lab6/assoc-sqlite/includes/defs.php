<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for form data $query in name, year or state. */
function search($query) {
  global $pms; 
  
  $query = trim($query);
  
  // Filter $pms by $query
  if (!empty($query)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['name'], $query) !== FALSE ||
          strpos($pm['from'], $query) !== FALSE || 
          strpos($pm['to'], $query) !== FALSE ||
          stripos($pm['state'], $query) !== FALSE) {
        $results[] = $pm;
      }
    }
    return $results;
  } else {
    return $pms;
  }
}
?>
