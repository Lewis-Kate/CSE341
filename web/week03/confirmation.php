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
 
    <div id="confirm_nav">
<nav>
  <a href="index.html"> <img src="images/logo.png" alt="candy logo" width="200"></a>
   <a href="index.html"><h1>The Sweet Shop</h1> </a>
    
</nav> 
        </div>
    
    <main>
    
    <div class="center">
    <h2>Order Confirmation</h2>
       
        <h3>Thanks for your order!</h3>
        <p>Hard Candy: <?php echo $_SESSION['hard_candy'];?></p>
        <p>Chocolate: <?echo $_SESSION['chocolate'];?></p> 
       <p>Gummy Bears: <? echo $_SESSION['gummy_bears'];?></p> 
        <p>Sour Candies: <? echo $_SESSION['sourpatch'];?></p>
        <p>Chocolate Bars: <?echo $_SESSION['chocolate_bar'];?></p> 
        
    <h2>Shipping to:</h2>
         <p>First Name:<?php echo $_SESSION['fname'];?></p> 
        <p>Last Name:<?php echo $_SESSION['lname'];?></p> 
        <p>Street Address:<?php echo $_SESSION['stadd'];?></p> 
        <p>City:<?php echo $_SESSION['city'];?></p> 
        <p>State:<?php echo $_SESSION['state'];?></p> 
        <p>Phone:<?php echo $_SESSION['phone'];?></p> 
        <p>Email:<?php echo $_SESSION['email'];?></p> 
        </div>
    
        
    </main>