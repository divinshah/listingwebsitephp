<?php
require_once 'dbconfig.php';

// Get IDs
$image_id = filter_input(INPUT_POST, 'image_id', FILTER_VALIDATE_INT);

// Delete the boxer from the database
if ($image_id != false && $boxer_id != false) {
    $query = "DELETE FROM gallery
              WHERE id = :image_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':image_id', $image_id);
    $statement->execute();
    $statement->closeCursor();
}

// display the Product List page
include('index.php');
?>