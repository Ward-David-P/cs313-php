<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Assignments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<?php
    require_once 'includes/dbConnect.php';
    session_start();
?>
<body>
    <div id='main'>
        <div>
            <form method='post'>
                Username: <input type='text' name='username'></br>
                Password: <input type='password' name='password'></br>
                <input type='submit' value='Login'>
            </form>

            <?php
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $loginQuery = "SELECT user_id FROM cb_users WHERE username = '".$username."' AND password = MD5('".$password."'";
                $row = $db->query($loginQuery);
                if (pg_num_rows($row) > 0)
                {
                    $_SESSION['username'] = $username;
                }

                else
                {
                    echo "</br><pre class='warning'>The username/password combination you have entered does not exist!</pre>";
                    echo "<a href='includes/passwordReset.php'>Reset Password</a>";
                }
            ?>
        </div>
    </div>
</body>