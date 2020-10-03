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
        <a href="index.html"><h1>The Sweet Shop</h1></a>
         <a href="index.html">Continue Shopping</a>
  
    </nav>

<main>
    
    <div id="cart">
     <h2>Cart</h2>
                
        
  <div class="summary">    
        <h3>Order Summary:</h3>
   
       <p>Hard Candy: <?php echo $_SESSION['hard_candy'];?></p>
        <p>Chocolate: <?echo $_SESSION['chocolate'];?></p>
       <p>Gummy Bears: <? echo $_SESSION['gummy_bears'];?></p>
        <p>Sour Candies: <? echo $_SESSION['sourpatch'];?></p>
        <p>Chocolate Bars: <?echo $_SESSION['chocolate_bar'];?></p>
        
         </div>
    
             <button> <a href="checkout.php">Continue to Checkout</a>  </button>
    
</div>
  
   
    
    
    
</main>
    </body>
    
    
</html>