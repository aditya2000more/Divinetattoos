<?php 

$reg = mysqli_connect('localhost','customerregistration');

if($reg){
  echo "Connection Successful";
}else{
  echo "No Connection";
}

mysqli_select_db($con,'customerregistration');

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Mobile1=$_POST['Mobile1'];
$Mobile2=$_POST['Mobile2'];
$Password=$_POST['Password'];
$RPassword=$_POST['RPassword'];

$query  = "insert into customerinfo (Name,Email,Mobile1,Mobile2,Password,RPassword)
values ('$Name','$Email','$Mobile1','$Mobile2','$Password','$RPassword')";

echo "$query";

mysqli_query($reg,$query);

header('location:login.php');
echo "Account created";

 ?>