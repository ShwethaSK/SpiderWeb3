<!DOCTYPE html>
<html>
<head>
	<title>
		Edit access level
	</title>
	<style type="text/css">
		body{
			background-color: thistle;
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"sys");
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	if(isset($_POST['submit']))
	{
	$userrole=$_POST['userrole'];
		$update=mysqli_query($con,"UPDATE WebsiteUsers SET userrole='$userrole' WHERE userId='$id'");
		if($update)
		{
			header('location:edit.php');
		}
	}
	$query1=mysqli_query($con,"SELECT * FROM WebsiteUsers WHERE userId='$id'");
	if(!$query1)
	{
		die('Invalid query:' .mysqli_error($con));
	}
	$result=mysqli_fetch_array($query1,MYSQLI_NUM);
	?>
	<form method="POST" action="">
	AccessLevel:<input type="text" name="userrole" value=" <?php echo $result['userrole']; ?>" />ADMIN/STUDENT/CLASS_REP<br />
	<input type="submit" name="submit" value="update"/>
	</form>
	<?php
}
?>
</body>
</html>