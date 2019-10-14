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
        <?php
            $products=array("Harness", "Chalk Bag", "Climbing Shoes", "Chalk", "Brush", "Gri-Gri");
            $prodImages=array(
                    "https://www.rei.com/media/product/126508",
                "https://www.rei.com/media/product/899004",
                "https://www.rei.com/media/product/122574",
                "https://www.rei.com/media/product/842037",
                "https://www.rei.com/media/product/160952",
                "https://www.rei.com/media/product/151970");
        ?>
        <form action="index.php" method="post">
            <table name="productTable">
                <?php
                    for($i = 0; $i <= sizeof($products); $i++)
                    {
                        echo "<tr><td>".$products[$i]."</td><td><img src=\"".$prodImages[$i]."\"></td><td><button onclick=\"".addToSession($products[$i])."\">Add To Cart</button></td></tr>";
                    }
                ?>

                <tr><td></td><td></td><td><button id="viewCart" onclick="viewCart()">View Cart</button></td></tr>
            </table>
        </form>
    </div>
</body>