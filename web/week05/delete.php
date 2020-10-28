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
    
     $monday = $_POST['monday'];
     $tuesday = $_POST['tuesday'];
     $wednesday = $_POST['wednesday'];
     $thursday = $_POST['thursday'];
     $friday = $_POST['friday'];
     $saturday = $_POST['saturday'];
     $sunday = $_POST['sunday'];
    
    $del ="DELETE FROM days WHERE monday = :monday OR tuesday = :tuesday OR wednesday = :wednesday OR thursday = :thursday OR friday = :friday OR saturday = :saturday OR sunday = :sunday";
    
    $result = query($del);
    
    if(!$result)
    {
        echo "Error deleting record";
         exit();
    }
    close();
    
    header('Location:view.php');
    ?>



</html>