<!DOCTYPE html>
<html>
<head>
	<title>
		Edit access level
	</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con);
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	if(isset($_POST['submit']))
	{
	$userrole=$_POST['userrole'];
		$update=mysql_query("UPDATE WebsiteUsers SET userrole='$userrole' WHERE userId='$id'");
		if($update)
		{
			header('location:edit.php');
		}
	}
	$query1=mysql_query("SELECT * FROM WebsiteUsers WHERE userId='$id'");
	$result=mysql_fetch_array($query1);
	?>
	<form method="POST" action="">
	AccessLevel:<input type="text" name="userrole" value=" <?php echo $result['userrole']; ?>" /><br />
	<input type="submit" name="submit" value="update"/>
	</form>
	<?php
}
?>
</body>
</html>