
<?php session_start(); 
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'php/link.php'; 
	$conn = mysqli_connect("localhost", "root", "", "futsaldb");
	?>

	<title></title>
</head>
	<body>
		<div class="header" style="text-align: center; height: 60px; width: 100%; margin-left: auto; margin-right: auto;">
			<a href="index.php" title="Futsal"><img src="images/logo.png"  width = "70" height = "60" style="float: left;" /></a>
	
			<a href="index.php" style="float: right; padding-top: 20px; margin-right: 50px;">Logout</a>
			<a href="home.php" style="float: right; padding-top: 20px; margin-right: 50px;">User Home</a>
			
		</div>

<body style="width: 100%; margin-right: auto; margin-left: auto;">
<main role="main" id=" main-wrapper">
            

            <!-- section-one -->

            <section class="section-one text-center" id="section-one" >

            	<div class="container">


                	<header role="title-page">
					</header>

							<form action="check.php" method="post">
								<input type="text" name="fid" value="<?php echo $id; ?>" hidden>
								<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"  readonly><br>
								<input type="date" name="b_date" placeholder="Date of booking" style="width:100%; margin-top: 20px; margin-bottom: 20px; height: 80px;text-align: center; "><br>
								<input type="time" name="b_time" placeholder="Time of booking" style="width:100%; margin-top: 20px; margin-bottom: 20px; height: 80px;text-align: center; "><br>
								<input type="text" name="hour" placeholder="Number of Hours" style="width:100%; margin-top: 20px; margin-bottom: 20px; height: 80px;text-align: center; "><br>
							<input type="submit" name="" value="Check">

							</form>
						</div>
							</section>	
</body>
<style>

.container{
	background-color:#F4A460;
	margin-top: 40px;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</html>