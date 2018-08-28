<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "futsaldb");


$username = mysqli_real_escape_string($conn, $_POST['teamname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if($username =='' || $password == ''){
	$error = "Username or Password cant' be empty......";
	header("location: index.php");
}
else{
	$password = md5($password);
	//echo $password;
	//exit();
$data = mysqli_query($conn, "SELECT * FROM team WHERE T_name='$username' && T_pw ='$password'");
if(!$data){
	echo "Cant' Execute query";
	exit();
}
$num = mysqli_num_rows($data);


if($num==1){
	$row = mysqli_fetch_array($data);
	$_SESSION['name'] = $row['T_name'];
	header ("location: home.php");
	exit();
}
else{
	$_SESSION['user'] = $username;
	$error= "Either Username or Password wrong!!!";
	header("location: index.php#section-two");
}
}
$_SESSION['message'] = $error;

mysqli_close($conn);

 ?>