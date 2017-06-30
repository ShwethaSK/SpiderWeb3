<!DOCTYPE html>
<html>
<head>
	<title>
		Registration page
	</title>
	<style type="text/css">
		body{
			background-color: lightyellow;
      font-weight: bold;
		}
		h1,h3{
			color:red;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Registration page</h1>
    <h3>Please enter some basic details to complete registration</h3>
    <div id="Sign-Up">
<fieldset style="width:50%">
	<legend>Registration Form</legend>
	<table border="0">
	<tr>
	<form method="POST" action="connectivity_sign_up.php">
        <td>Name</td><td><input type="text" name="name"/></td>
    </tr>
    <tr>
        <td>Email</td><td><input type="text" name="email"/></td> 	
    </tr>		
    <tr>
    	<td>Username</td><td><input type="text" name="username"/></td>
    </tr>
    <tr>
    	<td>Password</td><td><input type="password" name="pass"/></td>
    </tr>
    <tr>
    	<td>Confirm Password</td><td><input type="password" name="con_pass"/></td>
    </tr>
    <tr>
    	<td><input id="button" type="submit" name="submit" value="Sign-up"/></td>
    </tr>
	</form>
	</table>
</fieldset>
</body>
</html>
<?php
 define('DB_HOST', 'localhost');
define('DB_NAME', 'test'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 if (mysqli_connect_errno($con))
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 
  mysql_query("CREATE TABLE WebsiteUsers
  	(
  	userId int(9) NOT NULL auto_increment,
    moderated VARCHAR(50) DEFAULT 'NO',
    userrole VARCHAR(50) DEFAULT 'STUDENT',
  	fullname VARCHAR(50) NOT NULL,
  	username VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    pass VARCHAR(40) NOT NULL,
    PRIMARY KEY(userId))
  	");
   ?>

