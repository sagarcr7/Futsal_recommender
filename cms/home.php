<?php
//session_start();
//if(!isset($_SESSION['user'])){
//	header("location: index.php");
//	exit();
//}
//else{
//	$user = $_SESSION['user'];
//	}
	include('php/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Futsal CMS</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
		
<div class="row">

		<div class="col three">
			<a href="addfutsal.php" class="btn btn-dark"><i class="fa fa-pencil"></i> Add Futsals</a>			
		</div>

		<div class="col three">
			<a href="futsaldisplay.php" class="btn btn-dark"><i class="fa fa-database"></i> View Futsals</a>						
		</div>

		<div class="col three">
			<a href="addteam.php" class="btn btn-dark"><i class="fa fa-pencil"></i> Add teams</a>			
		</div>

		<div class="col three">
			<a href="teamdisplay.php" class="btn btn-dark"><i class="fa fa-database"></i> View Teams</a>	

		</div>
		<div class="col three">
			<a href="addrate.php" class="btn btn-dark"><i class="fa fa-database"></i> Add Rates</a>	

		</div>


		<div class="col three">
			<a href="php/logout.php" class="btn btn-dark"><i class="fa fa-times-circle"></i> Sign out</a>			
		</div>

	</div>


</div>

	
</body>
</html>