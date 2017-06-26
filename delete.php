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
$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con);
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysql_query("DELETE FROM WebsiteUsers WHERE userId='$id'");
	echo $query;
	if($query)
	{
		header('location:edit.php');
	}
}
?>