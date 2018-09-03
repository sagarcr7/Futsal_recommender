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
		$target = "../team/";
		$filename = $_FILES['pic']['name'];
		$target1 = $target.$filename;

if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

	if($_FILES['pic']['error']>0)
		{echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1))
			{
				echo "File Exits"; 
				exit;
			}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){
			$qry = "INSERT INTO futsal (F_id, F_name, F_location, F_owner, F_phnum, F_image) VALUES(NULL, '$name', '$address', '$owner','$contact', '$filename')";
			$inst = mysqli_query($conn, $qry);
			if(!$inst){
				echo "Error in Query.";
				exit();
			}
			else{
					$_SESSION['message'] = "Data Added"; 
					header('location: addfutsal.php');
			}
		}



}
}
else{
	echo "Invalid File Format";
}

		
	
	}
	if (isset($_POST['update'])) {
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$name = mysqli_real_escape_string($conn, $_POST['fname']);
	    $address = mysqli_real_escape_string($conn, $_POST['address']);
        $owner= mysqli_real_escape_string($conn, $_POST['owner']);
        $contact= mysqli_real_escape_string($conn, $_POST['phnum']);
		echo $id."<br>".$name."<br>".$address."<br>".$owner."<br>".$contact;
		//exit();
		$updt = mysqli_query($conn, "UPDATE `futsal` SET `F_name` = '$name', `F_location` = '$address', `F_owner` = '$owner', `F_phnum` = '$contact' WHERE `futsal`.`F_id` = '$id'");
		if($updt){
			$_SESSION['message'] = "Data updated!"; 
			header('location: futsaldisplay.php');
		}
		
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM futsal WHERE F_id=$id");
		$_SESSION['message'] = "Data deleted!"; 
		header('location: futsaldisplay.php');
	}
?>