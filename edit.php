<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con);
$c=1;
$query1=mysql_query("SELECT userId,userrole,fullname FROM WebsiteUsers",$con) or die(mysql_error());
echo '<table><tr><td>USERID   </td><td>   ACCESSLEVEL</td><td>   NAME</td><td></td><td></td>' ;
$row=mysql_num_rows($query1);
$i=0;
while($i<$row)
{
	$userId=mysql_result($query1, $i,"userId");
	$userrole=mysql_result($query1, $i, "userrole");
	$fullname=mysql_result($query1, $i, "fullname");
	echo "<tr><td>$userId</td>";
	echo "<td>$userrole</td>";
	echo "<td>$fullname</td>"; 
	echo "<td><a href='edit_access.php?id=$userId'>EDIT</a></td>";
	echo "<td><a href='delete.php?id=$userId'>X</a></td>";
$i++;
}
?>