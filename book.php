<?php session_start(); 
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="width: 80%; margin-right: auto; margin-left: auto;">
	<form action="check.php" method="post">
		<input type="text" name="fid" value="<?php echo $id; ?>" hidden>
		<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" readonly><br>
		<input type="date" name="b_date"><br>
		<input type="time" name="b_time"><br>
		<input type="submit" name="" value="Check">

	</form>
</body>
</html>