<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'futsaldb');

	// initialize variables
	$name = "";
	$address = "";
    $id = 0;
    $owner="";
    $contact="";
	$update = false;


	if (isset($_POST['save'])) {
        $name = mysqli_real_escape_string($conn, $_POST['fname']);
	    $address = mysqli_real_escape_string($conn, $_POST['address']);
        $owner= mysqli_real_escape_string($conn, $_POST['owner']);
        $contact= mysqli_real_escape_string($conn, $_POST['phnum']);
		

		mysqli_query($conn, "INSERT INTO futsal (F_id, F_name, F_location, F_owner, F_phnum, F_image) VALUES ('Null', '$name', '$address', '$owner','$contact','NULL')"); 
		$_SESSION['message'] = "Data Added"; 
		header('location: addfutsal.php');
	}
	if (isset($_POST['update'])) {
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$name = mysqli_real_escape_string($conn, $_POST['fname']);
	    $address = mysqli_real_escape_string($conn, $_POST['address']);
        $owner= mysqli_real_escape_string($conn, $_POST['owner']);
        $contact= mysqli_real_escape_string($conn, $_POST['phnum']);
	
		mysqli_query($conn, "UPDATE futsal SET F_name='$name', F_location='$address', F_owner='$owner', F_phnum='$contact' WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		header('location: futsaldisplay.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM futsal WHERE F_id=$id");
		$_SESSION['message'] = "Data deleted!"; 
		header('location: futsaldisplay.php');
	}
?>