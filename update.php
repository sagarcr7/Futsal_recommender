<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'php/link.php'; 
	$conn = mysqli_connect("localhost", "root", "", "futsaldb");

	$TeamId = $_GET['TeamId'];	




$data = mysqli_query($conn, "SELECT * from team WHERE T_id = '$TeamId'");
$row = mysqli_fetch_array($data);


	?>
</head>
<body>
	<div class="header" style="text-align: center; height: 60px; width: 80%; margin-left: auto; margin-right: auto;">
		<a href="index.php" title="Futsal"><img src="images/logo.png"  width = "60" height = "60" style="float: left;" /></a>

		<a href="index.php" style="float: right; padding-top: 20px; margin-right: 50px;">Logout</a>
		<a href="home.php" style="float: right; padding-top: 20px; margin-right: 50px;">User Home</a>
		
	</div>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100" style="background: black;">
				<form class="login100-form validate-form" action="CMS_update_team_info.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"><img src="team/<?php echo $row['T_image']; ?>" width="120px" height="120px" style="border-radius: 100%;"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Update Info
					</span>
					<input type="text" name="id" value="<?php echo $TeamId; ?>" hidden>
					<div class="wrap-input100 validate-input" data-validate = "Enter Team name ">
						<input class="input100" type="text" name="name" value="<?php echo $row['T_name'];?>">
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter location">
						<input class="input100" type="text" name="location" value="<?php echo $row['T_location'];?>"">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter email">
						<input class="input100" type="email" name="email" value="<?php echo $row['T_email'];?>"">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="phnum" value="<?php echo $row['T_phnum'];?>"">
						
					</div>

					<div class="container-login100-form-btn">
							<input type="submit" name="submit" class="login100-form-btn" value="Update" style="color: #fff;">
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php include 'php/js.php'; ?>

</body>
</html>