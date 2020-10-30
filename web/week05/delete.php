<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menu Planner</title>
    <meta name="Menu Planner" content="Menu Planner Index">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Rozha+One&display=swap" rel="stylesheet">
</head>

    <h1>Delete</h1>
    

    
    
    <?php
    
    switch ($action){
    case "mon":
            
    $monday = filter_input(INPUT_POST, 'monday');     
    
    $stmt = $db->prepare("DELETE FROM days WHERE monday = :monday");
    $stmt -> bindValue(':monday', $monday);
    
    
    $stmt->execute();
    $stmt->closeCursor();
    header('Location: view.php');
    
   
    }
    ?>



</html>