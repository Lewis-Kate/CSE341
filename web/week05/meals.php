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
        
    <div class="meal_form"  method="post">
       <h2>Complete the Form</h2> 
      <form action="meals.php">
          <input type="text" id="mon" name="mon" value="mon" placeholder="Monday"><br>
          <input type="text" id="tues" name="tues" value="tues" placeholder="Tuesday"><br>
          <input type="text" id="wed" name="wed" value="wed" placeholder="Wednesday"><br>
          <input type="text" id="thurs" name="thurs" value="thurs" placeholder="Thursday"><br>
          <input type="text" id="fri" name="fri" value="fri" placeholder="Friday"><br>
          <input type="text" id="sat" name="sat" value="sat" placeholder="Saturday"><br>
          <input type="text" id="sun" name="sun" value="sun" placeholder="Sunday"><br>
          <input type="submit" value="Save">        
      </form>  
        
        <?php 
/* if (isset($_POST['mon'])) { 
 $_SESSION['mon'] = $_POST['mon']; 
 } 

 if (isset($_POST['tues'])) { 
 $_SESSION['tues'] = $_POST['tues']; 
 } 
        
 if (isset($_POST['wed'])) { 
 $_SESSION['wed'] = $_POST['wed']; 
 } 
        
 if (isset($_POST['thurs'])) { 
 $_SESSION['thurs'] = $_POST['thurs']; 
 }
        
if (isset($_POST['fri'])) { 
 $_SESSION['fri'] = $_POST['fri']; 
 } 
        
if (isset($_POST['sat'])) { 
 $_SESSION['sat'] = $_POST['sat']; 
 }
        
if (isset($_POST['sun'])) { 
 $_SESSION['sun'] = $_POST['sun']; 
 } */
     
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
        
    $id = filter_input(INPUT_GET, 'action');
    $stmt = $db->query('SELECT * FROM days WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
foreach ($db->query('SELECT * FROM days') as $row)
    {
        echo . $row['monday'] . <br> . $row['tuesday'] . <br> . $row['wednesday'] . <br> . $row['thursday'] . <br> . $row['friday'] . <br> . $row['saturday'] . <br> . $row['sunday'] };

        
         print_r($_SESSION)

?>


    
    </div>    
    
    </main>
</div> 
</body>





</html>