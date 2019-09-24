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
<header>
    <?php
        include_once 'php/nav_bar.php';
    ?>
</header>
<body>
    <h1>The Me Site</h1>
    <div class="container-fluid info col-sm-4" id="homeDiv">
        <p>Hi, my name is David. To learn more about me and some other stuff go to my <a href="about.php">about</a>
            page. Really, you should go there. There isn't really anything else here.</p>
    </div>
</body>
<footer>
    <?php
        include_once 'php/footer.php';
    ?>
</footer>