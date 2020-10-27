<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Menu</title>
    <meta name="View Menu" content="View Menu">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Rozha+One&display=swap" rel="stylesheet">
</head>

    
<body>
<div class="content">
    <main>
    
    <div class="view">    
    <h1>View Your Menu</h1>
        <button type=button><a href="index.php">Home</a></button>
        <button type=button><a href="meals.php">Plan Meals</a></button>
        <button type=button><a href="shop.php">Shopping List</a></button>
    </div>
        
        <div class ="current">
        
        <h2>Current Menu:</h2>
  
             <?php   
          
foreach ($db->query('SELECT * FROM days ORDER BY daysId DESC LIMIT 1') as $row) { ?>
            
       <p>Monday: <? echo $row['monday'] ?> </p> <a href="delete.php">Delete</a>
       <p>Tuesday: <? echo $row['tuesday'] ?> </p> <a href="delete.php">Delete</a>
       <p>Wednesday: <? echo $row['wednesday'] ?> </p> <a href="delete.php">Delete</a>
       <p>Thursday: <? echo $row['thursday'] ?> </p> <a href="delete.php">Delete</a>
       <p>Friday: <? echo $row['friday'] ?> </p> <a href="delete.php">Delete</a>
       <p>Saturday: <? echo $row['saturday'] ?> </p ><a href="delete.php">Delete</a>
       <p>Sunday: <? echo $row['sunday'] ?> </p> <a href="delete.php">Delete</a>
                  
        <h2>Current List:</h2>
            
             <?php    
          
foreach ($db->query('SELECT * FROM shoppingList ORDER BY shoppingListId DESC LIMIT 1') as $row) { ?>
            
      <p>Shopping List: <? echo $row['item'] ?> </p>
            
 <?php } ?> 
        
        </div>
    
    </main>
</div> 
</body>





</html>