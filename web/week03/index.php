<?php
// Start the session
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kate Lewis">
    <meta name="description" content="Shopping Cart">
    <link href="main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
    
<body>
    
<nav>
  <img src="images/logo.png" alt="candy logo" width="200">
   <h1>The Sweet Shop</h1>
    <a href="cart.php"><i class='fas fa-shopping-cart'></i></a> 
</nav> 
    
    

<main>

    <div class="center">
            <h2> Sweets</h2>
    <div id="candy">

   
    <form action="index.php" method="post">
    <img src="images/hard_candy.png" alt="candy image" width="300">
    <input id="candy_input" name="hard_candy" placeholder="Enter Amount">
        
    
    <img src="images/chocolate.png" alt="candy image" width="300">
    <input id="candy_input" name="chocolate" placeholder="Enter Amount">
            
    <img src="images/gummy_bears.png" alt="candy image" width="300">
    <input id="candy_input" name="gummy_bears" placeholder="Enter Amount">
        
    <img src="images/sourpatch.png" alt="candy image" width="300">
    <input id="candy_input" name="sourpatch" placeholder="Enter Amount">
        
    <img src="images/chocolate_bar.png" alt="candy image" width="300">
    <input id="candy_input" name="chocolate_bar" placeholder="Enter Amount">
        
    <input type="submit" name="Submit" value="Submit" />    
       
        </form>
        
        <?php 
 if (isset($_POST['hard_candy'])) { 
 $_SESSION['hard_candy'] = $_POST['hard_candy']; 
 } 

 if (isset($_POST['chocolate'])) { 
 $_SESSION['chocolate'] = $_POST['chocolate']; 
 } 
        
if (isset($_POST['gummy_bears'])) { 
 $_SESSION['gummy_bears'] = $_POST['gummy_bears']; 
 } 
        
if (isset($_POST['sourpatch'])) { 
 $_SESSION['sourpatch'] = $_POST['sourpatch']; 
 }
        
if (isset($_POST['chocolate_bar'])) { 
 $_SESSION['chocolate_bar'] = $_POST['chocolate_bar']; 
 }
        
         print_r($_SESSION)
?> 
    </div>
    </div>
    
    
</main>
    
    
</body>

    

</html>