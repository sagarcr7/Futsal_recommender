<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "futsaldb");

	$id = $_POST['id'];
	$name = $_POST['name'];
	$location = $_POST['location'];
	$email = $_POST['email'];
	$phnum = $_POST['phnum'];


	$q = "UPDATE team set T_name='$name', T_location='$location', T_email='$email', T_phnum='$phnum' WHERE T_id='$id'";
	$update = mysqli_query($conn, $q);

	if(!$update){
		header("location:home.php");
	}
	else

	{
		$_SESSION['err'] = "Please Re-Login to access home page";
		header("location:index.php#section-two");

	}
 ?>