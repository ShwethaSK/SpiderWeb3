<!DOCTYPE html>
<html>
<head>
	<title>
		Delete from database
	</title>
</head>
<body>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"sys");
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysqli_query($con,"DELETE FROM WebsiteUsers WHERE userId='$id'");
	if($query)
	{
		header('location:edit.php');
	}
}
?>