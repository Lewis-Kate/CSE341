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
            <p>Monday: <?php echo $row['monday'] ?> </p> 
            <input type="text" id="monday" name="monday" value= "<?php echo $row['monday']?>">
            </div>
            
            <div class="del">
            <p>Tuesday: <?php echo $row['tuesday'] ?> </p> 
            <input type="text" id="tuesday" name="tuesday" value="<?php echo $row['tuesday'] ?>">
            </div>
            
            <div class="del">
            <p>Wednesday: <?php echo $row['wednesday'] ?> </p>
            <input type="text" id="wednesday" name="wednesday" value="<?php echo $row['wednesday'] ?>">                
            </div>
            
            <div class="del">
            <p>Thursday: <?php echo $row['thursday'] ?> </p> 
            <input type="text" id="thursday" name="thursday" value="<?php echo $row['thursday'] ?>">
            </div>
            
            <div class="del">
            <p>Friday: <?php echo $row['friday'] ?> </p>
            <input type="text" id="friday" name="friday" value="<?php echo $row['friday'] ?>">
            </div>
            
            <div class="del">
            <p>Saturday: <?php echo $row['saturday'] ?> </p>
            <input type="text" id="saturday" name="saturday" value="<?php echo $row['saturday'] ?> ">
            </div>
            
            <div class="del">
            <p>Sunday: <?php echo $row['sunday'] ?> </p>   
            <input type="text" id="sunday" name="sunday" value =" <?php echo $row['sunday'] ?> ">
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