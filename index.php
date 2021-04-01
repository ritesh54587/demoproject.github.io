<?php 
session_start();
include("connection.php");
include("function.php");

$user_data= check_login($con);



?>
<!DOCTYPE html>
<html>
<head>
<title>My website </title>
</head>
<body>
   <a href="logout.php">logout</a>
<h1>this is index page</h1>
HELLO, username.


   </body>
</html>