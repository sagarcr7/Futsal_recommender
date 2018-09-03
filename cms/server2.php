<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'futsaldb');

	// initialize variables
	$name = "";
	$name1= "";
	$rate = "";
    $id = 0;


	if (isset($_POST['save'])) {
        $name = mysqli_real_escape_string($conn, $_POST['tname']);
        $name1 = mysqli_real_escape_string($conn, $_POST['fname']);
	    $rate = mysqli_real_escape_string($conn, $_POST['rate']);
       
	$query1= mysqli_fetch_array(mysqli_query($conn, "SELECT T_id from team where T_name = '$name'"));
	
    $query2=  mysqli_fetch_array(mysqli_query($conn, "SELECT F_id from team where F_name= '$name1'"));


		mysqli_query($conn, "INSERT INTO rates (R_id,T_id,F_id,rate,timestamp) values(NULL,'$query1','$query2','$rate',NOW() )");
		$_SESSION['message'] = "Data Added";
		header('location: addrate.php');
	}
	
?>
