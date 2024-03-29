<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Comicbook Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
        require_once 'includes/dbConnect.php';
        session_start();
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
    <div id='main'>
        <div class='search'>
            <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='post'>
                Simple Search: <input type='text' name='searchParam'>
                <input type='submit' value='search'>
            </form>
        </div>
        <div class='searchResults'>
            <?php
                if(isset($_POST['searchParam']))
                {
                    $searchParam = $_POST['searchParam'];
                    $searchQuery1 = "SELECT comic_id FROM cb_comicbooks WHERE '".$searchParam."' IN (title, publication_date, publisher, summary)";
                    $searchQuery2 = "SELECT writer_id FROM cb_writers WHERE '".$searchParam."' IN (first_name, last_name)";
                    $searchQuery3 = "SELECT artist_id FROM cb_artists WHERE '".$searchParam."' IN (first_name, last_name)";
                }
            ?>
        </div>
        <div class='login'>
            <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='post'>
                Username: <input type='text' name='username'></br>
                Password: <input type='password' name='password'></br>
                <input type='submit' value='Login'>
            </form>

            <?php
                if(isset($_POST['username']))
                {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);
                    $hashed = MD5($password);
                    $loginQuery = "SELECT user_id FROM cb_users WHERE username = '".$username."' AND password='".$hashed."'";
                    $db = get_db();
                    $db->query($loginQuery);
                    $count = 0;

                    foreach ($db->query($loginQuery) as $row)
                    {
                        echo $row;
                        $_SESSION['username'] = $username;
                        echo $username;
                        header("Location:manage.php");
                    }

                    if($count == 0)
                    {
                        echo "</br><pre class='warning'>The username/password combination you have entered does not exist!</pre>";
                        echo "<a href='includes/passwordReset.php'>Reset Password</a>";
                    }
                }
            ?>
        </div>
    </div>
</body>