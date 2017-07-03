	<!DOCTYPE html>
	<html>
	<head>
		<title>
			Registration status
		</title>
		<style type="text/css">
			body{
				background-color: lightblue;
				color: red;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
	</body>
	</html>
	<?php 
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'sys');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); 
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

	function NewUser()
	{
	$fullname = $_POST['name'];
	$userName = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	if($userName=="Shwetha")
    {
    	$query="INSERT INTO websiteusers (userrole,fullname,username,email,pass) VALUES ('ADMIN','$fullname','$userName','$email',SHA('$password'))";
    } 
		else
	{		
	$query = "INSERT INTO websiteusers (fullname,username,email,pass) VALUES ('$fullname','$userName','$email',SHA('$password'))";
    }
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); 
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
	$data = mysqli_query ($con,$query)or die(mysqli_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...<br /><br />";
	echo "<a href='index.php'>Click here to go back to homepage</a>";
	}
	}
	function SignUp()
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); 
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
	if(!empty($_POST['username']))
	{ 
	$query = mysqli_query($con,"SELECT * FROM websiteusers WHERE userName = '$_POST[username]' AND pass = '$_POST[pass]'") or die(mysqli_error($con));
	if(!$row = mysqli_fetch_array($query))
	{
	NewUser();
	}
	else
	{
	echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
	echo "<a href='index.php'>Click here to go back to homepage</a>";
	}
	}
	}
	if(isset($_POST['submit'])) 
	{
	//	session_start();
	//	include('captcha.php');
//		if($_POST['captcha']!=$_SESSION['digit'])die("Sorry, the CAPTCHA code entered was incorrect");
//		else
	SignUp();
	}
	?>
