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
$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
$db = mysqli_select_db( $connection,"sys");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"SELECT * FROM WebsiteUsers WHERE pass=SHA('$password')AND userName='$username'") or die(mysql_error());
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("Location: profile.php"); // Redirecting To Other Page
}
 else {
$error="Username or password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>