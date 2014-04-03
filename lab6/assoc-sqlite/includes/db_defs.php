<?php
/* Database access functions. */

// Read HOST, USER, PASSWORD, DATABASE from file
// include your database credentials file her

/* Show MySQL error. */
function show_error() {
  die("Error ". mysql_errno() . " : " . mysql_error());
}

/* Open connection and select database. */
function mysql_open() {
  $connection = @ mysql_connect(HOST, USER, PASSWORD)
      or die("Could not connect");
  mysql_select_db(DATABASE, $connection)
      or show_error();
  return $connection;
}
?>
