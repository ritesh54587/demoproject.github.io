<?php 




?>
<!DOCTYPE html>
<html>
<head>
<title> Login </title>
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
    <div style="font-size: 20px;margin: 10px;"> Login </div>

    <input id="text" type="text" name="username"><br><br>
    <input id="text" type="password" name="password"><br><br>
    <input type="submit"   value="login"><br><br>
    <a href="signup.php"> click to Signup</a><br>
    </form>
    
    </div>
</body>
</html>
