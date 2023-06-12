<?php 

$servername="localhost";
$username="root";
$Password="";
$database="Custregistration";

$con = mysqli_connect($servername,$username,$Password,$database);

if($con){
	echo "Connection Successful";
}else{
	die("Error".mysqli_connect_error());
}

mysqli_select_db($con,'Custregistration');

$Name=$_POST['Name'];
$Email=$_POST["Email"];
$Address=$_POST["Address"];

$Mobile1=$_POST["Mobile1"];
$Mobile2=$_POST["Mobile2"];
$pwd=$_POST["pwd"];
$Date=$_POST["Date"];



$query	=	"insert into register(Name,Email,Address,Mobile1,Mobile2,pwd,Date)
values ('$Name','$Email','$Address','$Mobile1','$Mobile2','$Password','$Date')";

echo "$query";

mysqli_query($con,$query);
/*if ($query) {
*/	header('location:login.php');
/*
}else
{
	header('location:_error.php');
}*/
 ?>