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
            <input type="radio" name="major" value="cs">Computer Science
            <input type="radio" name="major" value="wdd">Web Design and Dev.
            <input type="radio" name="major" value="cit">Computer Info Tech
            <input type="radio" name="major" value="ce">Computer Engineering
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <input type="submit">
        </form>

    </body>
</html>