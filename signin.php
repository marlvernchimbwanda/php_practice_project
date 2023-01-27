<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: modern.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boxicons-master/css/boxicons.css">
    <title>Modern</title>
</head>
<body>
    
    <div class = "box" >
        <div class = "container">
            <div class="topheader">
                <span>Have</span>
                <header>Sign In</header>
            </div>

            <div class="input-field">
            
                <form method="post">
                    
                    <input type="text"  class = "input" placeholder = "Name" required name = "user_name">   <br>
                    <input type="password"  class = "input" placeholder = "Password" required name = "password"> <br> <br>
                    <input type="submit"  class = "submit" value = "Register" > <br>

                    
                
            
                </form>
                            
                             
            </div>

            <div class="bottom">

                <div class="left">
                <input type="checkbox" id="check">
                <label for="check">Remember Me</label>
                </div>

                <div class="right">
                    <label> <a href="modern.php">Click to Login?</a></label>
                </div>


            </div>

        </div>


    </div>
 </div>
</body>
</html>