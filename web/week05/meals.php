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
        <button><a href="index.php">Home</a></button>
        <button><a href="shop.php">Shopping List</a></button>
        <button><a href="view.php">View Menu</a></button>
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
          <input type="submit" value="Save">        
      
<?php
        
 $stmt = $db->prepare('INSERT INTO days (monday, tuesday, wednesday, thursday, friday, saturday, sunday) VALUES (:monday, :tuesday, :wednesday, :thursday, :friday, :saturday, :sunday)');
$stmt->bindValue(':monday', $monday);
$stmt->bindValue(':tuesday', $tuesday);
$stmt->bindValue(':wednesday', $wednesday);
$stmt->bindValue(':thursday', $thursday);
$stmt->bindValue(':friday', $friday);
$stmt->bindValue(':saturday', $saturday);
$stmt->bindValue(':sunday', $sunday);
$stmt->execute();

//$daysId = $db->lastInsertId("days_id_seq");
        
                  
foreach ($db->query('SELECT * FROM days') as $row)
    {
       echo 'Monday: ' . $row['monday'] . '<br>';
       echo 'Tuesday: ' . $row['tuesday'] . '<br>'; 
       echo 'Wednesday: ' . $row['wednesday'] .'<br>';
       echo 'Thursday: ' . $row['thursday'] . '<br>';
       echo 'Friday: ' . $row['friday'] . '<br>';
       echo 'Saturday: ' . $row['saturday'] . '<br>';
       echo 'Sunday: ' . $row['sunday'] . '<br>';
    ?>
           </form> 

    </div>    
    
    </main>
</div> 
</body>





</html>