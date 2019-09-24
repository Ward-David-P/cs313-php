<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>About Me and Stuff</title>
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
    <h1>About Me and Stuff</h1>
    <div class="container-fluid info col-sm-4" id="aboutDiv">
        <p>My name is David Ward. I am from Mesa, Arizona USA. I served in the Ohio Cleveland Mission. I am studying
            Software Engineering and would like to develop educational software and tools. Currently, I work as a
            Solutions Engineer for GoDaddy. I love to do things outdoors. Hiking, backpacking, climbing, and camping
            are just a few of my hobbies. Right now I am really into bouldering. I enjoy eating many things, mostly
            stuff that isn't good for you. I especially love it when I can do these things with my wife, son (6), and
            daughter (3). I also enjoy reading comic books/graphic novels (particularly DC), video games, movies/TV,
            and reading.</p>
    </div>
    <div class="container-fluid youtube col-sm-4">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/GUfoBowpjZ4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/d-RldyMf3aI" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Hg2tp6wocWw" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</body>
<footer>
    <?php
    include_once 'php/footer.php';
    ?>
</footer>