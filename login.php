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
        <a href = "cart.php">Cart</a>
                <a href = "register.php">Register</a>
        <a href = "login.php" class = "active">Login</a>
                    </nav>
    <div class = "container">
        <h1>Login</h1>
        <form class = "login" method = "post" action = "login.php" onsubmit="return validateLogin()">
        <span class = "error" id = "formError"></span>

            <input name = "email" id = "email" type = "email" placeholder = "email" value = "">
            <span class = "error" id = "emailError"></span>

            <input name = "password" id = "password" type = "password" placeholder = "password">
            <span class = "error" id = "passwordError"></span>

            <input name = "submit" id = "submit" type = "submit" value = "login">
            
        </form>
    </div>
</body>
<script src = "actions.js"></script>
</html>