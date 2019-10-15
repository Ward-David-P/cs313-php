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

        $_SESSION["name"] = htmlspecialchars($_POST["name"]);
        $_SESSION["address"] = htmlspecialchars($_POST["address"]);
        $_SESSION["city"] = htmlspecialchars($_POST["city"]);
        $_SESSION["state"] = htmlspecialchars($_POST["state"]);
        $_SESSION["zipcode"] = htmlspecialchars($_POST["zipcode"]);
        $_SESSION["email"] = htmlspecialchars($_POST["email"]);

        echo "<h3>Congrats! You have completed your purchase.</h3>";
        echo "<p>Your sweet gear is going to the following:</p>";
        echo "<pre>".$_SESSION["name"]."</pre>";
        echo "<pre>".$_SESSION["address"]."&nbsp;".$_SESSION["city"]."&nbsp;".$_SESSION["state"]."&nbsp;".$_SESSION["zipcode"]."</pre>";
        echo "<pre>".$_SESSION["email"]."</pre>";
        echo "<pre>Enjoy your climbing adventures!</pre>";
    ?>
</body>