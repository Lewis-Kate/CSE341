<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shopping List</title>
    <meta name="Shopping List" content="Shopping List">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Rozha+One&display=swap" rel="stylesheet">
</head>

    
<body>
<div class="content">
    <main>
    
    <div class="shop">    
    <h1>Shopping List</h1>
        <button><a href="index.php">Home</a></button>
        <button><a href="meals.php">Plan Meals</a></button>
        <button><a href="view.php">View Menu</a></button>
    </div>
        
        <div class="shop_form">

        <h2>Make Your List</h2>
            
            <form action="shop.php"  method="post">
            <textarea id="shoplist" name="textarea" placeholder="Shopping List"></textarea><br>
            <input type="submit" value="Save">            
            </form>
        
             <?php 
            
$shoppingList = $db->query('SELECT * FROM shoppingList');
        
$stmt = $db->prepare('INSERT INTO shoppingList (item) VALUES (:item)');
$stmt->bindValue(':item', $_POST['textarea'], PDO::PARAM_STR);
 
?>
        </div>
    
    </main>
</div> 
</body>





</html>