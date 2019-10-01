<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <form action="form.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <?php
                $continent = array("North America" => "North America", "South America" => "South America", "Europe" => "Europe", "Asia" => "Asia", "Australia" => "Australia", "Africa" => "Africa", "Antarctica" => "Antarctica");

                foreach($continent as $x => $x_value){
                    echo '<input type="Checkbox" name="continents" value="' . $x . '"> ' . $x_value . '<br/>';
                }

                $major = array("cs" => "Computer Science", "wdd" => "Web Design and Development", "cit" => "Computer Information Technology", "ce" => "Computer Engineering");

                foreach($major as $x => $x_value){
                    echo '<input type="radio" name="major" value="' . $x . '"> ' . $x_value . '<br/>';
            }
            ?>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <input type="submit">
        </form>

    </body>
</html>