<?php
/* Database access functions. */

/* Show SQLite error. */
function show_error($e) {
  die("Error: " . $e->getMessage());
}

/* Open connection and select database. */
function db_open()
{
	try {
		$db = new PDO('sqlite:db/database.sqlite');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		show_error($e);
	}
	return $db;
} 
?>
