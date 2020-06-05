<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "myStyles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <title>Products</title>
    </head>
<body>
    <nav>
        <a href = "index.php">Home</a>
        <a href = "list-products.php" class = "active">Products</a>
        <a href = "search.php">Search</a>
        <a href = "cart.php">Cart</a>
                <a href = "register.php">Register</a>
        <a href = "login.php">Login</a>
                    </nav>
    <div class = "container">
        <h1>Products</h1>
        <div class = "product-grid">
                        <div class = "product-card">
                <img src = "images/dvd-image.jpg" alt = "dvd-image.jpg" class = "product-thumbnail">
                <a href = "product.php?id=1"><h3>DVD Player</h3></a>
                <span class = "product-price">$65</span>
            </div>
                        <div class = "product-card">
                <img src = "images/black-hat.jpg" alt = "black-hat.jpg" class = "product-thumbnail">
                <a href = "product.php?id=2"><h3>Stylish Black Cap</h3></a>
                <span class = "product-price">$5</span>
            </div>
                        <div class = "product-card">
                <img src = "images/nike-ball.jpg" alt = "nike-ball.jpg" class = "product-thumbnail">
                <a href = "product.php?id=3"><h3>Round Basket Ball</h3></a>
                <span class = "product-price">$25</span>
            </div>
                        <div class = "product-card">
                <img src = "images/coffee-cup.jpg" alt = "coffee-cup.jpg" class = "product-thumbnail">
                <a href = "product.php?id=4"><h3>Novelty Coffee Cup</h3></a>
                <span class = "product-price">$19</span>
            </div>
                        <div class = "product-card">
                <img src = "images/drink-holder.jpg" alt = "drink-holder.jpg" class = "product-thumbnail">
                <a href = "product.php?id=5"><h3>Can Holder</h3></a>
                <span class = "product-price">$5</span>
            </div>
                        <div class = "product-card">
                <img src = "images/novelty-light.jpg" alt = "novelty-light.jpg" class = "product-thumbnail">
                <a href = "product.php?id=6"><h3>Novelty Light</h3></a>
                <span class = "product-price">$24</span>
            </div>
                        <div class = "product-card">
                <img src = "images/hover-ball.jpg" alt = "hover-ball.jpg" class = "product-thumbnail">
                <a href = "product.php?id=7"><h3>Hover Ball</h3></a>
                <span class = "product-price">$33</span>
            </div>
                        <div class = "product-card">
                <img src = "images/decanter.jpg" alt = "decanter.jpg" class = "product-thumbnail">
                <a href = "product.php?id=8"><h3>Whisky Decanter</h3></a>
                <span class = "product-price">$12</span>
            </div>
                        <div class = "product-card">
                <img src = "images/stapler.jpg" alt = "stapler.jpg" class = "product-thumbnail">
                <a href = "product.php?id=9"><h3>Stapler</h3></a>
                <span class = "product-price">$50</span>
            </div>
                        <div class = "product-card">
                <img src = "images/dart-board.jpg" alt = "dart-board.jpg" class = "product-thumbnail">
                <a href = "product.php?id=10"><h3>Dart Board</h3></a>
                <span class = "product-price">$5</span>
            </div>
                    </div>
        </div>
</body>
<script src = "actions.js"></script>
</html>