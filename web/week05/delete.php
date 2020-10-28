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
    case "delete":
            
     $monday = filter_input(INPUT_POST, 'monday');
     $tuesday = filter_input(INPUT_POST, 'tuesday');
     $wednesday = filter_input(INPUT_POST, 'wednesday');
     $thursday = filter_input(INPUT_POST, 'thursday');
     $friday = filter_input(INPUT_POST, 'friday');
     $saturday = filter_input(INPUT_POST, 'saturday');
     $sunday = filter_input(INPUT_POST, 'sunday');
    
    $stmt = $db->prepare("DELETE FROM days WHERE monday = :monday OR tuesday = :tuesday OR wednesday = :wednesday OR thursday = :thursday OR friday = :friday OR saturday = :saturday OR sunday = :sunday");
    $stmt -> bindValue(':monday', $monday);
    $stmt -> bindValue(':tuesday', $tuesday);
    $stmt -> bindValue(':wednesday', $wednesday);
    $stmt -> bindValue(':thursday', $thursday);
    $stmt -> bindValue(':friday', $friday);
    $stmt -> bindValue(':saturday', $saturday);
    $stmt -> bindValue(':sunday', $sunday);
    
    $stmt->execute();
    $stmt->closeCursor();
    header('Location: view.php');
    
   
    }
    ?>



</html>