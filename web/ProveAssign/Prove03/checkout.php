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
    <form method="post" action="confirmOrder.php">
        <table>
            <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
            <tr><td>Street Address:</td><td><input type="text" name="address"></td></tr>
            <tr><td>City:</td><td><input type="text" name="city"></td></tr>
            <tr><td>State:</td><td><input type="text" name="state"></td></tr>
            <tr><td>Zip Code:</td><td><input type="text" name="zipcode"></td></tr>
            <tr><td>Email Address:</td><td><input type="text" name="email"></td></tr>
            <tr><td></td><td><input type="submit" value="Confirm Order"></td></tr>
        </table>
    </form>
</body>