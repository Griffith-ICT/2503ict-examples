<?php
/* 
 * Database access functions. 
 */

// Include your database access constants here
// require /* to be inserted /*;


function db_open()
{
  try {
    $db = new PDO('sqlite:db/database.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Error: " . $e->getMessage());
  }
  return $db;
}

?>
