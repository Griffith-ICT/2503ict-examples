<?php
/*
 * Function definitions for list-detail example.
 */

require "db_defs.php";
date_default_timezone_set('UTC');
/* Adds a new item from form data and returns its id. */
function add_item($summary,$details) {
    try {
        $db = db_open();
        $sql = "insert into ld_items (summary, details) " .
        "values (:summary, :details)";
        $statement = $db->prepare($sql);
        $statement->bindValue(':summary', $summary);
        $statement->bindValue(':details', $details);
        $statement->execute();
        $id = $db->lastInsertId();
    } catch(PDOException $e) {
        die("Error: " . $e->getMessage());
    }
    return $id;
}


/* Gets list of items that match $str, if present, in databse. */
function get_items($str) {
    try{
        $db = db_open();
        $sql = "select id, summary from ld_items ";
        if ($str) {
            $sql .= "where summary like :str or details like :str ";
        }
        $sql .=  "order by id";
        // print "$sql<br>\n";
        $statement = $db->prepare($sql);
        if ($str){
            $statement->bindValue(':str', "%$str%");
        }
        $statement->execute();
    
        $items = $statement->fetchAll();
        // print_r($items);
        return $items;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

/* Gets item with the given id. */
function get_item($id) {
    try {
        $db = db_open();
        $sql = "select id, summary, details from ld_items where id = :id";
        // print "$sql<br>\n";
        $statement = $db->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        
        $items = $statement->fetchAll();
        if (count($items) != 1){
            die("Invalid query or result: $sql\n");
        }
        return $items[0];
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

/* Updates an item with the given id using the given summary and details. */
function update_item($id,$summary,$details) {
    /* to be completed */
}

/* Deletes the item with the given id. */
function delete_item($id) {
    /* to be completed */
}

