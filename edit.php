<!DOCTYPE html>
<html>
<head>
	<title>
		Edit Database
	</title>
	<style type="text/css">
		body{
			background-color: rosybrown;
			font-weight: bold;
		}
	</style>
</head>
<body>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"sys");
$c=1;
$query1=mysqli_query($con,"SELECT userId,userrole,fullname FROM WebsiteUsers") or die(mysqli_error());
echo '<table><tr><td>USERID   </td><td>   ACCESSLEVEL</td><td>   NAME</td><td></td><td></td>' ;
$row=mysqli_num_rows($query1);
$i=0;
function mysqli_result($result, $row, $field=0)
{
	$result->data_seek($row);
	$data=$result->fetch_array();
	return $data[$field];
}
while($i<$row)
{
	$userId=mysqli_result($query1, $i,"userId");
	$userrole=mysqli_result($query1, $i, "userrole");
	$fullname=mysqli_result($query1, $i, "fullname");
	echo "<tr><td>$userId</td>";
	echo "<td>$userrole</td>";
	echo "<td>$fullname</td>"; 
	echo "<td><a href='edit_access.php?id=$userId'>EDIT</a></td>";
	echo "<td><a href='delete.php?id=$userId'>X</a></td>";
	echo "<td><a href='moderate.php?id=$userId'>MODERATE</a></td>";
$i++;
}
 echo "<a href='profile.php'>Click here to go back to profile</a>";
?>