<?php

$showError = "False";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	include '_dbconnect.php';
	$Email = $_POST['Email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from register where Email='$Email' AND pwd='$pwd'";
	$result = mysqli_query($con, $sql);
	$num = mysqli_num_rows($result);
	if($num == 1)
	{
		$row = mysqli_fetch_assoc($result);
		{
			if(password_verify($pwd,$row['pwd']))
			{
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['Email'] = $Email;
				echo "Logged in",$email;
				
		header('location:../index.php');
			}
			echo "<br>unable to login";
		}
		header('location:../index.php');

	}
}