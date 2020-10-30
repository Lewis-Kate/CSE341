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
  <form action="delete.php" method="post">

             <?php   
          
foreach ($db->query('SELECT * FROM days ORDER BY daysId DESC LIMIT 1') as $row) { ?>
            
            <div class="del">
            <p>Monday: <? echo $row['monday'] ?> </p> 
            <input type="text" id="monday" name="monday">
            </div>
            
            <div class="del">
            <p>Tuesday: <? echo $row['tuesday'] ?> </p> 
            <input type="text" id="tuesday" name="tuesday">
            </div>
            
            <div class="del">
            <p>Wednesday: <? echo $row['wednesday'] ?> </p>
            <input type="text" id="wednesday" name="wednesday">                
            </div>
            
            <div class="del">
            <p>Thursday: <? echo $row['thursday'] ?> </p> 
            <input type="text" id="thursday" name="thursday">
            </div>
            
            <div class="del">
            <p>Friday: <? echo $row['friday'] ?> </p>
            <input type="text" id="friday" name="friday">
            </div>
            
            <div class="del">
            <p>Saturday: <? echo $row['saturday'] ?> </p>
            <input type="text" id="saturday" name="saturday">
            </div>
            
            <div class="del">
            <p>Sunday: <? echo $row['sunday'] ?> </p>   
            <input type="text" id="sunday" name="sunday">
            </div>
       <input type="hidden" name="daysId" value= "<?php echo $row['daysid']?>">      
       <input type="submit" id="del" value="Update">
       <input type="hidden" name="action" value="mon">
        <?php } ?> 
            </form>
                  
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