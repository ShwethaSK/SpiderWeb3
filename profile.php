<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br />
<a href="notice_board.php">Click here to go to the Notice Board</a><br />
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
