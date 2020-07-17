<?php

include 'connect.php';

if (isset($_GET['id'])) {    // GET instead of POST for value in the URL
    $id = $_GET['id'];       // only id is needed - delete other variable assignments
}


// Add code here
$stmt = $db->prepare("DELETE FROM `test_db` WHERE `id` = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->close();

header("Location: display-and-delete.php");

?>