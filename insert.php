-<?php

include("config.php");
?>


<!DOCTYPE html>

</head>
<body bgcolor="skyblue">
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

<div id = "box">
<form action=""  method="POST">
<div style="font-size: 20px;margin: 10px;"> Signup </div>
Name:<input type ="text" name="name" ><br>
Email:<input type ="text" name="email" ><br>
Mobile:<input type ="text" name="mobile" ><br>
Date:<input type ="text" name="date" ><br>
<input type ="submit" name="submit" ><br>
</form>
</div>
    <?php
if(isset($_POST['submit'])) 
{
   $name= $_POST['name'];
   $email= $_POST['email'];
   $mobile= $_POST['mobile'];
   $date= $_POST['date'];


$result=mysqli_query($mysqli,"INSERT into record values('',' $name',' $email','$mobile','$date')");
if($result){
echo "sucess";
}
else{
    echo " failed";
}


}

?>
</body>
</html>