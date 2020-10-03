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
            <p>Hard Candy:</p><?php echo $_POST["hard_candy"]; ?><br>
            <p>Chocolate:</p><?php echo $_POST["chocolate"]; ?><br>
            <p>Gummy Bears:</p><?php echo $_POST["gummy_bears"]; ?><br>
            <p>Sour Candies:</p><?php echo $_POST["sourpatch"]; ?><br>
            <p>Chocolate Bar:</p><?php echo $_POST["chocolate_bar"]; ?><br>

    
             <button> <a href="checkout.html">Continue to Checkout</a>  </button>
    
</div>
  
   
    
    
    
</main>
    </body>
    
    
</html>