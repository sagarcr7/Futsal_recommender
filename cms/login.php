<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "futsaldb");
$user = $_POST['username'];
$pass = md5($_POST['password']);

$data = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username='$user' AND admin_pw = '$pass'");

$num = mysqli_num_rows($data);


if($num==1){
	$row = mysqli_fetch_array($data);
	$_SESSION['user'] = $row['admin_username'];
	header("location: home.php");
}
else{
	header("location: index.php");
}



?>