<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "myStyles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <title>Login</title>
    </head>
<body>
    <nav>
        <a href = "index.php">Home</a>
        <a href = "list-products.php">Products</a>
        <a href = "search.php">Search</a>
        <a href = "cart.php" class = "active">Cart</a>
                <a href = "register.php">Register</a>
        <a href = "login.php">Login</a>
                    </nav>
    <div class = "container">
        <h1>Cart</h1>
        <div class = "cart-grid">
            <div class = "cart-product-grid">
                <span class = ""></span>
                <span class = "cart-product-name">Product name</span>
                <span class = "cart-product-qty">Quantity</span>
                <span class = "cart-product-price">Price</span>
                <span class = "cart-product-total-price">Total Price</span>
            </div>
                        <div class = "cart-product-grid">
                <span class = ""></span>
                <span class = "cart-product-name"></span>
                <span class = "cart-product-qty"></span>
                <span class = "cart-product-price">Total Price</span>
                <span class = "cart-product-total-price">AUD 0 </span>
            </div>
                    
    </div>
    </body>
<script src = "actions.js"></script>
</html>