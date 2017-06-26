<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-color: lightblue;
		color: red;
	}
</style>
	<title>
		Login Page
	</title>
</head>
<body>
<h1>
	Welcome to Login Page
</h1>
<h3>
	Enter your username and password
</h3>
 <div id="Sign-Up">
<fieldset style="width:50%">
	<legend>Login Form</legend>
	<table border="0">
	<tr>
	<form method="POST" action="login.php">
        <td>UserName</td><td><input type="text" name="name"/></td>
    </tr>
    <tr>
    	<td>Password</td><td><input type="password" name="password"/></td>
    </tr>
    <tr>
    	<td><input id="button" type="submit" name="submit" value="Submit"/></td>
    </tr>
	</form>
	</table>
</fieldset>
</div>
</body>
</html>