<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "myStyles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
    <title>Register</title>
    </head>
<body>
    <nav>
        <a href = "index.php">Home</a>
        <a href = "list-products.php">Products</a>
        <a href = "search.php">Search</a>
        <a href = "cart.php">Cart</a>
                <a href = "register.php" class = "active">Register</a>
        <a href = "login.php">Login</a>
                
            </nav>
    <div class = "container">
        <h1>Register</h1>
        
        <form class = "login" method = "post" action = "register.php" onsubmit="return validateRegister()">
        <span class = "error" id = "formError"></span>

            <input name = "email" id = "email" type = "email" placeholder = "email">
            <span class = "error" id = "emailError"></span>

            <input name = "password" id = "password" type = "password" placeholder = "password">
            <span class = "error" id = "passwordError"></span>

            <input name = "firstName" id = "firstName" type = "text" placeholder = "first name">
            <span class = "error" id = "firstNameError"></span>

            <input name = "lastName" id = "lastName" type = "text" placeholder = "last name">
            <span class = "error" id = "lastNameError"></span>

            <input name = "street" id = "street" type = "text" placeholder = "street">
            <span class = "error" id = "streetError"></span>

            <input name = "suburb" id = "suburb" type = "text" placeholder = "suburb">
            <span class = "error" id = "suburbError"></span>

            <select name = "state" id = "state">
                <option value = "" selected = "true" disabled = "disabled">Select state</option>
                <option value = "NSW">New South Wales</option>
                <option value = "WAU">Western Australia</option>
                <option value = "QUE">Queensland</option>
                <option value = "SAU">South Australia</option>
                <option vlaue = "VIC">Victoria</option>
                <option value = "TSM">Tasmania</option>
            </select>
            <span class = "error" id = "stateError"></span>

            <input name = "postcode" id = "postcode" type = "text" placeholder = "postcode">
            <span class = "error" id = "postcodeError"></span>

            <input name = "submit" id = "submit" type = "submit" value = "Login">
        </form>
    </div>
</body>
<script src = "actions.js"></script>
</html>