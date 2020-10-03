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
    <a href="index.html"><img src="images/logo.png" alt="candy logo" width="200"></a>
    <a href="index.html"> <h1>The Sweet Shop</h1></a>
    <a href="cart.php"><i class='fas fa-shopping-cart'></i></a> 
</nav> 
    
    
    <main>
        
    <div class="center">
     <h2>Checkout</h2>
    </div>

    <div id="checkout">
   
    <h3>Please Fill In All Fields</h3>
<form  action="checkout.php" method="post">
  <input type="text" id="fname" name="fname" placeholder="First Name">
    
  <input type="text" id="lname" name="lname" placeholder="Last Name"><br>
    
  <input type="text" id="stadd" name="stadd" placeholder="Street Address"><br>

 <input type="text" id="city" name="city" placeholder="City">
    
 <input type="text" id="state" name="state" placeholder="State"><br>
    
    <input type="phone" id="phone" name="phone" placeholder="Phone Number"><br>
    
    <input type="email" id="email" name="email" placeholder="Email Address"><br>
  
        </form>
        
        <?php 
 if (isset($_POST['fname'])) { 
 $_SESSION['fname'] = $_POST['fname']; 
 } 

 if (isset($_POST['lname'])) { 
 $_SESSION['lname'] = $_POST['lname']; 
 } 
        
if (isset($_POST['stadd'])) { 
 $_SESSION['stadd'] = $_POST['stadd']; 
 } 
        
if (isset($_POST['city'])) { 
 $_SESSION['city'] = $_POST['city']; 
 }
        
if (isset($_POST['state'])) { 
 $_SESSION['state'] = $_POST['state']; 
 }
    
if (isset($_POST['phone'])) { 
 $_SESSION['phone'] = $_POST['phone']; 
 }
        
if (isset($_POST['email'])) { 
 $_SESSION['email'] = $_POST['email']; 
 }
        
         print_r($_SESSION)

?> 
        

    </div>
        
        <div class="center">
                  
        
                  <button> <a href="confirmation.php">Submit Order</a>  </button>
        </div>
            
    

  
   
    
    
    
</main>
    </body>
</html>