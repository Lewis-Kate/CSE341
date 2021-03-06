<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Meals</title>
    <meta name="Meals" content="Meals">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Rozha+One&display=swap" rel="stylesheet">
</head>

    
<body>
<div class="content">
    <main>
    
    <div class="meals">    
    <h1>Plan Meals</h1>
        <button type=button><a href="index.php">Home</a></button>
        <button type=button><a href="shop.php">Shopping List</a></button>
        <button type=button><a href="view.php">View Menu</a></button>
    </div>
        
    <div class="meal_form" >
       <h2>What's for Dinner?</h2> 
      <form action="meals.php"  method="post">
        <label for="mon">Monday:</label>
          <input type="text" id="mon" name="mon"><br>
          <label for="tues">Tuesday:</label>
          <input type="text" id="tues" name="tues"><br>
          <label for="wed">Wednesday:</label>
          <input type="text" id="wed" name="wed" ><br>
          <label for="thurs">Thursday:</label>
          <input type="text" id="thurs" name="thurs"><br>
          <label for="fri">Friday:</label>
          <input type="text" id="fri" name="fri"><br>
          <label for="sat">Saturday:</label>
          <input type="text" id="sat" name="sat" ><br>
          <label for="sun">Sunday:</label>
          <input type="text" id="sun" name="sun"><br>
          <input id="submit" type="submit" value="Save">   
          </form> 
      
<?php
          
$days = $db->query('SELECT * FROM days');
        
$stmt = $db->prepare('INSERT INTO days (monday, tuesday, wednesday, thursday, friday, saturday, sunday) VALUES (:monday, :tuesday, :wednesday, :thursday, :friday, :saturday, :sunday)');
$stmt->bindValue(':monday', $_POST['mon'], PDO::PARAM_STR);
$stmt->bindValue(':tuesday', $_POST['tues'], PDO::PARAM_STR);
$stmt->bindValue(':wednesday', $_POST['wed'], PDO::PARAM_STR);
$stmt->bindValue(':thursday', $_POST['thurs'], PDO::PARAM_STR);
$stmt->bindValue(':friday', $_POST['fri'], PDO::PARAM_STR);
$stmt->bindValue(':saturday', $_POST['sat'], PDO::PARAM_STR);
$stmt->bindValue(':sunday', $_POST['sun'], PDO::PARAM_STR);
$stmt->execute();

    ?>
           

    </div>    
    
    </main>
</div> 
</body>





</html>