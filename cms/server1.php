<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'futsaldb');

	// initialize variables
	$name = "";
	$address = "";
    $id = 0;
    $email="";
    $contact="";
	$update = false;


	if (isset($_POST['save'])) {
        $name = mysqli_real_escape_string($conn, $_POST['tname']);
	    $address = mysqli_real_escape_string($conn, $_POST['address']);
        $email= mysqli_real_escape_string($conn, $_POST['email']);
        $contact= mysqli_real_escape_string($conn, $_POST['phnum']);
		

		mysqli_query($conn, "INSERT INTO team (T_id, T_name, T_location, T_email, T_phnum, T_image) VALUES ('Null', '$name', '$address', '$email','$contact','NULL')"); 
		$_SESSION['message'] = "Data Added"; 
		header('location: addfutsal.php');
	}
	if (isset($_POST['update'])) {
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$name = mysqli_real_escape_string($conn, $_POST['tname']);
	    $address = mysqli_real_escape_string($conn, $_POST['address']);
        $email= mysqli_real_escape_string($conn, $_POST['email']);
        $contact= mysqli_real_escape_string($conn, $_POST['phnum']);
	
		mysqli_query($conn, "UPDATE team SET T_name='$name', T_location='$address', T_email='$email', T_phnum='$contact' WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		header('location: teamdisplay.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM team WHERE T_id=$id");
		$_SESSION['message'] = "Data deleted!"; 
		header('location: teamdisplay.php');
	}
?>