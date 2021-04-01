<?php 
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username =$_POST['username'];
    $password=$_POST['password'];
    if(!empty($username)  && !empty($password) && !is_numeric($username) )
    {
        //save to database
        $userid = random_num(20);
        $query= "insert into users (user id,username ,password) values('$userid','$username' ,'$password')";

     mysqli_query($con ,$query);
     header("location:login.php");
     die;

    }else
    {
        echo "please enter some valid information!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Signup </title>
</head>
<body>
    
    <style type="text/css">
    #text{
        height: 25px;
        width: 100%;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
 }
 #button{
     padding: 10px;
     width: 100px;
color: white;
background-color: lightblue;
border: none;

 }
 #box{
background-color: grey;
margin: auto;
width: 300px;
padding: 20px;
 }
    </style>
    <div id="box">
    <form method="post">
    <div style="font-size: 20px;margin: 10px;"> Signup </div>

    <input id="text" type="text" name="username"><br><br>
    <input id="text" type="password" name="password"><br><br>
    <input type="submit"   value="signup"><br><br>
    <a href="login.php"> click to login</a><br>
    </form>
    
    </div>
</body>
</html>
