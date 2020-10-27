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
    
     $monday = $_GET['monday'];
     $tuesday = $_GET['tuesday'];
     $wednesday = $_GET['wednesday'];
     $thursday = $_GET['thursday'];
     $friday = $_GET['friday'];
     $saturday = $_GET['saturday'];
     $sunday = $_GET['sunday'];
    
    $del = query($db, "DELETE FROM days WHERE id = '$id'");
    
    if($del)
    {
        close($db);
        header("locatoin:view.php");
        exit;
    }
    else
    {
        echo "Error deleting record";
    }
    ?>



</html>