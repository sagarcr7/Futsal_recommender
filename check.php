<?php
session_start();
$conn = mysqli_connect("localhost","root","","futsaldb");

$id = $_POST['fid'];
$name = $_POST['name'];
$date = $_POST['b_date'];
$time = $_POST['b_time'];
$hour=$_POST['hour'];
$cost= $hour * 1000;
// $gid = $_POST['gid'];
//$price = $_POST['price'];
$available_c = array();
$available_t = array();


$data = mysqli_query($conn, "SELECT * FROM book WHERE F_id='$id' && B_date='$date' && B_time='$time'");

if(mysqli_num_rows($data)==0){
	$insert = mysqli_query($conn, "INSERT INTO book (B_id, F_id, G_id, T_id, B_date, B_time, B_price) VALUES(NULL, '$id', 1, '$name', '$date', '$time', '$cost')");

	if($insert){
		echo "Congratulations! Booked";
		header("location:home.php");
		exit();
	}


}
else{
	$datas = mysqli_query($conn, "SELECT * FROM book WHERE F_id='$id' && B_date='$date'");
	echo "Not Available, you can book on other time except these<br>";
	while ($res = mysqli_fetch_array($datas)) {
		echo $res['B_time']."<br>";
	}





}

 ?>