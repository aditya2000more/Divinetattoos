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


 ?>