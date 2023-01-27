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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
                <span>Have an account?</span>
                <header>Login</header>
            </div>

            <div class="input-field">
                <i class = "bx bx-user"> </i>
                <form method="post">
                    
                    <input type="text"  class = "input" placeholder = "username" required name = "user_name">   <br> <br>
                    <input type="password"  class = "input" placeholder = "Password" required name = "password"> <br> <br>
                    <input type="submit"  class = "submit" value = "Login" >
                
            
                </form>
                            
                             
            </div>

            <div class="bottom">

                <div class="left">
                <input type="checkbox" id="check">
                <label for="check">Remember Me</label>
                </div>

                <div class="right">
                    <label> <a href="signup.php">Click to Register?</a></label>
                </div>


            </div>

        </div>


    </div>
 </div>
</body>
</html>