<?php
session_start();
include ("connection.php");
include ("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <h1>Marlvern Chimbwanda</h1>
</div>
<div class="topnav">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" text-align = "left">Link</a>

</div>

    <a href="logout.php">Logout</a>
    <h1>Home Page</h1>
    <br>

    Hello, <?php echo  $user_data['user_name']; ?>
</body>
</html>