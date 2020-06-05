<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "myStyles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <title>Search</title>
    </head>
<body>
    <nav>
        <a href = "index.php">Home</a>
        <a href = "list-products.php">Products</a>
        <a href = "search.php" class = "active">Search</a>
        <a href = "cart.php">Cart</a>
                <a href = "register.php">Register</a>
        <a href = "login.php">Login</a>
                    </nav>
    <div class = "container">
        <h1 class = "searchHeading">Search </h1>
        <form name = "searchForm" action = "search.php" method = "get">
            <input name = "keyword" type = "text" placeholder = "search here...." value = "">
            <input type = "submit" name = "search" value = "search">
        </form>
        
        <div class = "product-grid">
                </div>
</body>
<script src = "actions.js"></script>
</html>