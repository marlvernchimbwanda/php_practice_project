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
<body style = "width: 100%">
<div class="header">
  <h1 style = "text-align: center;">Marlvern Chimbwanda Chicken Management System</h1>
</div>
  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#news">Sales</a>
    <a href="#contact">Contact</a>
    <a href="#about" style = "align: right;">About</a>
    <a href="modern.php" style = " position: absolute; right: 0px;" >Logout</a>

  </div>
    <h1>Home Page</h1>
    <br>

    Hello, <?php echo  $user_data['user_name']; ?>
</body>
</html>