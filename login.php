<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if ((empty($_POST['name'])) ||( empty($_POST['password'])))
$error="Username or password is invalid";
else
{
// Define $username and $password
$username=$_POST['name'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("test", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("SELECT * FROM WebsiteUsers WHERE pass=SHA('$password')AND userName='$username'", $connection) or die(mysql_error());
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("Location: profile.php"); // Redirecting To Other Page
}
 else {
$error="Username or password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>