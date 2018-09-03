<?php 
session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'futsaldb');

       $f_id = $_GET['id'];
       $rate = $_POST['star'];
       $T_id = $_SESSION['t_id'];
       //echo $f_id."<br>".$T_id."<br>".$rate;
     
		$save = mysqli_query($conn, "INSERT INTO rates(R_id, F_id, T_id, rate, timestamp) values(NULL,'$f_id','$T_id','$rate', NOW() )");
		if(!$save){
			echo "Error in Query";
			exit();
		}
		header('location: home.php#section-three');
	
	
?>
