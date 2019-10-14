<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>The Me Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php require_once 'php/functions.php' ?>
    <div class="container-fluid info" id="homeDiv">
        <table name="productTable">
            <tr><td></td><td><button id="addToCart0" onclick="addToCart()">Add To Cart</button></td></tr>
            <tr><td></td><td><button id="addToCart1" onclick="addToCart()">Add To Cart</button></td></tr>
            <tr><td></td><td><button id="addToCart2" onclick="addToCart()">Add To Cart</button></td></tr>
            <tr><td></td><td><button id="addToCart3" onclick="addToCart()">Add To Cart</button></td></tr>
            <tr><td></td><td><button id="addToCart4" onclick="addToCart()">Add To Cart</button></td></tr>
            <tr><td></td><td><button id="addToCart5" onclick="addToCart()">Add To Cart</button></td></tr>
        </table>
    </div>
</body>