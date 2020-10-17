<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menu Planner</title>
    <meta name="Menu Planner" content="Menu Planner Index">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Rozha+One&display=swap" rel="stylesheet">
</head>
<?php
session_start();
require "dbconnect.php";
$db = get_db();
?>

    
<body>
<div class="content">
    <main>
    
    <div class="home">    
    <h1>Menu Planner</h1>
        <button><a href="meals.php">Plan Meals</a></button>
        <button><a href="shop.php">Shopping List</a></button>
        <button><a href="view.php">View Menu</a></button>
    </div>
    
    </main>
</div> 

</body>

</html>