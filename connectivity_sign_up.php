	<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>
			Registration status
		</title>
		<style type="text/css">
			body{
				color: lightblue;
			}
		</style>
	</head>
	<body>
	</body>
	</html>
	<?php 
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'test');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
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
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...<br />";
	echo "<a href='index.php'>Click here to go back to homepage</a>";
	}
	}
	function SignUp()
	{
	if(!empty($_POST['username']))
	{ 
	$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[username]' AND pass = '$_POST[pass]'") or die(mysql_error());
	if(!$row = mysql_fetch_array($query))
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
	SignUp();
	}
	?>
