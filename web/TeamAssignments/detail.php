<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Scripture Resources</h1>

<?php 
try
{
  $user = 'postgres';
  $password = 'password';
  $db = new PDO('pgsql:host=localhost;dbname=mark', $user, $password);

  // this line makes PDO give us an exception when there are problems,
  // and can be very helpful in debugging! (But you would likely want
  // to disable it for production environments.)
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

foreach ($db->query('SELECT * FROM scriptures')as $row) {
    echo $row['book'] . ' ';
    echo $row['chapter'] . ':';
    echo $row['verse'] . ' - "';
    echo $row['content'] . '"';
    echo '<br>';
}

?>
<form method="post" action=''>
	<span>Search:</span><input type="text" name="search">
   <input type="submit" value="Search">
   <!-- <input type='button' onclick="submit();"> -->
</form>
<table>
	<tr><th>Results</th></tr>
	<tr><td>Book</td><td>Chapter</td><td>Verse</td><td>Content</td></tr>
	<?php
       $book = filter_var($_POST["search"], FILTER_SANITIZE_STRING);
       $book = filter_var($_POST["search"], FILTER_SANITIZE_STRING);
   	 foreach ($db->query('SELECT * FROM scriptures WHERE book=\'' . $book . '\'') as $row) {
	echo $row['book'] . ' ';
	echo $row['chapter'] . ':';
	echo $row['verse'] . ' - "';
	echo $row['content'] . '"';
	echo '<br>';
       }
	?>
</table>
</body>

       </html>