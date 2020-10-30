<?php
session_start();
require "dbconnect.php";
$db = get_db();



    
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



