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
<?php
    session_start();
?>
    <form method="post">
        <table id="cart-table">
            <tr><th>In Your Cart</th></tr>
            <tr><td>Product</td><td>Qty</td><td>Remove</td></tr>
            <?php
                foreach($_SESSION["items"] as $key=>$value)
                {
                    echo "<tr><td>".$key."</td><td>".$value."</td><td><input type='checkbox' name='".$key."'></td></tr>";
                }
            ?>
            <tr><td></td><td><a href="checkout.php">Checkout</a></td><td><input type="submit" value="Remove Items"></td></tr>
        </table>
    </form>
</body>