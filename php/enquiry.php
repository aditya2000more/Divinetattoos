<?php 

$servername="localhost";
$username="root";
$Password="";
$database="Custregistration";

$con = mysqli_connect($servername,$username,$Password,$database);

if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'Custregistration');

$Name=$_POST['Name'];
$Email=$_POST["Email"];
$Mobile1=$_POST["Mobile1"];
$Mobile2=$_POST["Mobile2"];
$purpose=$_POST["purpose"];
$comment=$_POST["comment"];



$query	=	"insert into enquiry(Name,Email,Mobile1,Mobile2,purpose,comment)
values ('$Name','$Email','$Mobile1','$Mobile2','$purpose','$comment')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

 ?>