<?php
session_start();
require "dbconnect.php";
$db = get_db();

$stmt = $db->prepare('INSERT INTO days (id, monday, tuesday, wednesday, thursday, friday, saturday, sunday) VALUES (:id, :monday, :tuesday, :wednesday, :thursday, :friday, :saturday, :sunday)');
    $stmt->bindValue(':monday', $monday, PDO::PARAM_STR);
    $stmt->bindValue(':tuesday', $tuesday, PDO::PARAM_STR);
    $stmt->bindValue(':wednesday', $wednesday, PDO::PARAM_STR);
    $stmt->bindValue(':thursday', $thursday, PDO::PARAM_STR);
    $stmt->bindValue(':friday', $friday, PDO::PARAM_STR);
    $stmt->bindValue(':saturday', $saturday, PDO::PARAM_STR);
    $stmt->bindValue(':sunday', $sunday, PDO::PARAM_STR);
    $stmt->execute();

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
      </form>  
<?php
                  
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

    </div>    
    
    </main>
</div> 
</body>





</html>