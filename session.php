<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("test", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select userName from websiteusers where userName='$user_check'", $connection)or die(mysql_error());
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['userName'];
?>