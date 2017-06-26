<!DOCTYPE html>
<html>
<head>
	<title>
		NITT notice board
	</title>
	<style type="text/css">
    button{
		color: blue;
	}
	h1{
		color: red;
	}
	h3{
		color: yellow;
	}
	body{
		background-image: url(NITT.jpg);
		background-position: 50% 50%;
	}
	</style>
</head>
<body>
<h1>Welcome To NITT's official notice board</h1>	
<h3>New user's click here to register</h3>
<form>
	<input type="button" name="Reg_Btn" value="Register" onclick="window.location.href='reg.php';"/>
</form>
<h3>Existing user's click here to login</h3>
<form>
	<input type="button" name="Log_Btn" value="Login" onclick="window.location.href='log.php';" />
</form>
</body>
</html>
<? php
?>