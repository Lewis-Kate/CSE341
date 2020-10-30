<?php
session_start();
require "dbconnect.php";
$db = get_db();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

    
    switch ($action){
    case "mon":
            
    $monday = "monday";     
    
    $stmt = $db->prepare('DELETE FROM days WHERE monday = :monday');
    $stmt -> bindValue(':monday', $monday);
    
    
    $stmt->execute();
    $stmt->closeCursor();
    header('Location: view.php');    
   
    }
    ?>



