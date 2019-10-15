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

    if(isset($_POST["Harness"]))
    {
        $_SESSION["items"]["Harness"] = 0;
    }

    if(isset($_POST["ChalkBag"]))
    {
        $_SESSION["items"]["ChalkBag"] = 0;
    }

    if(isset($_POST["ClimbingShoes"]))
    {
        $_SESSION["items"]["ClimbingShoes"] = 0;
    }

    if(isset($_POST["Chalk"]))
    {
        $_SESSION["items"]["Chalk"] = 0;
    }

    if(isset($_POST["Brush"]))
    {
        $_SESSION["items"]["Brush"] = 0;
    }

    if(isset($_POST["Gri-Gri"]))
    {
        $_SESSION["items"]["Gri-Gri"] = 0;
    }
?>
    <form method="post">
        <table id="cart-table">
            <tr><th>In Your Cart</th></tr>
            <tr><td>Product</td><td>Qty</td><td>Remove</td></tr>
            <?php
                foreach($_SESSION["items"] as $key=>$value)
                {
                    if($value > 0)
                    {
                        echo "<tr><td>".$key."</td><td>".$value."</td><td><input type='checkbox' name='".$key."'></td></tr>";
                    }
                }
            ?>
            <tr><td></td><td><a href="checkout.php">Checkout</a></td><td><input type="submit" value="Remove Items"></td></tr>
        </table>
    </form>
</body>