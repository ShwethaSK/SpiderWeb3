<!DOCTYPE html>
<html>
<head>
	<title>
		Bulletin Board
	</title>
	<style type="text/css">
		body{
			font-family: cursive;
			background-color: plum;
		}
	</style>
	<script type="text/javascript">
	var x1=0;
		function add_notes()
		{
         x1++;
	     DIV=document.createElement("LI");
	     DIV.setAttribute("id","DIV"+x1);
	     var x=prompt("Please enter your note","User");
	     textnode=document.createTextNode(x);
	     DIV.appendChild(textnode);
	     node=document.getElementById("div");
	     node.appendChild(DIV);
		}
		function save_notes()
		{
 	     editElem=document.getElementById("div");
     	 editElem.contentEditable="false";
	     userVersion=editElem.innerHTML;
	     localStorage.userEdits=userVersion;
	     alert("Edits saved");
	     document.getElementById("div").innerHTML;
		}
		function edit_notes()
		{
         editElem=document.getElementById("div");
	     document.getElementById("div").contentEditable="true";
	     alert("Content is now editable");
	     userVersion=editElem.innerHTML;
	     localStorage.userEdits=userVersion;
		}
		function checkEdits()
        {
	     if(localStorage.userEdits!=null)
		 document.getElementById("div").innerHTML=localStorage.userEdits;
        }
    </script>
</head>
<body onload="checkEdits()">
<h1>Notices...
</h1>
<ol>
<div id="div">
</div>
</ol>
<a href="profile.php">Click here to go back to my profile</a>
<br />
<hr />
</body>
</html>
<?php
include('session.php');
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("test", $connection);
$query = mysql_query("SELECT userrole FROM WebsiteUsers WHERE userName='$user_check'", $connection) or die(mysql_error());
$rows = mysql_fetch_assoc($query);
$rows['userrole']=trim($rows['userrole']);
if(strcmp($rows['userrole'],"ADMIN")==0)
{ 
echo '<input type="button" name="Add_notes" value="Add Notes" onclick="add_notes()" />';
echo '<input type="button" name="Edit_notes" value="Edit Notes" onclick="edit_notes()" />';
echo '<input type="button" name="Save_notes" value="Save Notes" onclick="save_notes()" /><br /><hr />';
echo '<a href="edit.php">Click here to edit Database</a><hr />';
}
if(strcmp($rows['userrole'], "CLASS_REP")==0)
{
echo '<input type="button" name="Add_assgnmnt" value="Add assignments" onclick="add_notes()" />';
echo '<input type="button" name="save_assgnmnt" value="Save assignments" onclick="save_notes()"/><br /><hr />';
}

?>