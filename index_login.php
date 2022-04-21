<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
				</div>

<?php
require('conn.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$user = stripslashes($_REQUEST['username']);
        //escapes special characters in a string2
	$user = mysqli_real_escape_string($con,$user);
	$pass = stripslashes($_REQUEST['password']);
	$pass = mysqli_real_escape_string($con,$pass);
    //$role = stripslashes($_REQUEST['role']);
        //escapes special characters in a string2
//$role = mysqli_real_escape_string($con,$role);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$user' and password='$pass'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {
        $role = $row["role"];
         $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = $row['role_name'];
         $_SESSION['role_no'] = $row['role'];}
        if($rows==1 && $role==1){
            $_SESSION['status'] = true;
	    $_SESSION['username'] = $user;
       
            // Redirect user to index.php
	    header("Location: index.php");
         }
         elseif($rows==1 && $role==2){
             $_SESSION['status'] = true;
	    $_SESSION['username'] = $user;
        
            // Redirect user to index.php
	    header("Location: index.php");
         }
          elseif($rows==1 && $role==4){
             $_SESSION['status'] = true;
	    $_SESSION['username'] = $user;
        
            // Redirect user to index.php
	    header("Location: index_driver.php");
         }
         elseif($rows==1 && $role==5){
             $_SESSION['status'] = true;
	    $_SESSION['username'] = $user;
        
            // Redirect user to index.php
	    header("Location: call_dash.php");
         }
         elseif($rows==1 && $role==3){
             $_SESSION['status'] = true;
	    $_SESSION['username'] = $user;
        
            // Redirect user to index.php
	    header("Location: index_nurse.php");
         }
         else
         {
	echo "<div class='form'>
<h6>Username/password is incorrect.</h6>
<br/>Click here to <a href='index_login.php'>Login</a></div>";
	}
    }else{
?>






				<form class="login100-form validate-form" name="login" action="" method="post">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<!--<button class="login100-form-btn">
							Login
						</button>--!>
                        <input class="login100-form-btn" type="submit" value="Login" />
					</div>

				<!--	<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>--!>

					<div class="text-center p-t-136">
					<!--	<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>--!>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php } ?>
</body>
</html>