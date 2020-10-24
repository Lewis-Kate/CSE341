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
        <button><a href="index.php">Home</a></button>
        <button><a href="meals.php">Plan Meals</a></button>
        <button><a href="shop.php">Shopping List</a></button>
    </div>
        
        <div class ="current">
        
        <h2>Current Menu:</h2>
            
       <?php   
          
foreach ($db->query('SELECT * FROM days ORDER BY daysId LIMIT 1') as $row)
    {
       echo 'Monday: ' . $row['monday'] . '<br>';
       echo 'Tuesday: ' . $row['tuesday'] . '<br>'; 
       echo 'Wednesday: ' . $row['wednesday'] .'<br>';
       echo 'Thursday: ' . $row['thursday'] . '<br>';
       echo 'Friday: ' . $row['friday'] . '<br>';
       echo 'Saturday: ' . $row['saturday'] . '<br>';
       echo 'Sunday: ' . $row['sunday'] . '<br>';
}
?> 
            
            <h2>Testing</h2>
          <?php
            $stmt = $db->prepare('SELECT * FROM days WHERE daysId = :id');
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                    echo 'Monday: ' . $row['monday'] . '<br>';
                    echo 'Tuesday: ' . $row['tuesday'] . '<br>'; 
                    echo 'Wednesday: ' . $row['wednesday'] .'<br>';
                    echo 'Thursday: ' . $row['thursday'] . '<br>';
                    echo 'Friday: ' . $row['friday'] . '<br>';
                    echo 'Saturday: ' . $row['saturday'] . '<br>';
                    echo 'Sunday: ' . $row['sunday'] . '<br>';
                }
            ?>
            
                       
        <h2>Current List:</h2>
            
             <?php 
   
          
foreach ($db->query('SELECT * FROM shoppingList') as $row)
    {
       echo 'Shopping List: ' . $row['item'] . '<br>';
    }
?>
        
        </div>
    
    </main>
</div> 
</body>





</html>