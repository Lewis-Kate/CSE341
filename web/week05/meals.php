<?php
session_start();
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
       <h2>Complete the Form</h2> 
      <form action="meals.php"  method="post">
                  <label for="mon">Monday:</label>
          <input type="text" id="mon" name="mon" value="mon"><br>
          <label for="tues">Tuesday:</label>
          <input type="text" id="tues" name="tues" value="tues" ><br>
          <label for="wed">Wednesday:</label>
          <input type="text" id="wed" name="wed" value="wed" ><br>
          <label for="thurs">Thursday:</label>
          <input type="text" id="thurs" name="thurs" value="thurs" br>
          <label for="fri">Friday:</label>
          <input type="text" id="fri" name="fri" value="fri"><br>
          <label for="sat">Saturday:</label>
          <input type="text" id="sat" name="sat" value="sat" ><br>
          <label for="sun">Sunday:</label>
          <input type="text" id="sun" name="sun" value="sun" ><br>
          <input type="submit" value="Save">        
      </form>  
        
        <?php 
 
try
    {
      $dbUrl = getenv('DATABASE_URL');
    
      $dbOpts = parse_url($dbUrl);
    
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
    
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
        
          
foreach ($db->query('SELECT * FROM days') as $row)
    {
             echo 'Monday: ' . $row['monday']<br>;
       echo 'Tuesday: ' . $row['tuesday']<br>; 
       echo 'Wednesday: ' . $row['wednesday']<br>;
       echo 'Thursday: ' . $row['thursday']<br>;
       echo 'Friday: ' . $row['friday']<br>;
       echo 'Saturday: ' . $row['saturday']<br>;
       echo 'Sunday: ' . $row['sunday']<br>;
}
?>

    </div>    
    
    </main>
</div> 
</body>





</html>