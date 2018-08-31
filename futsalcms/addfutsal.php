<?php

	include('server.php');
	include('php/header.php');
    $conn = mysqli_connect('localhost', 'root', '', 'futsaldb');
    
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add futsal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

	<form method="post" action="server.php" >

		<div class="add_label">
						<b style="font-size: 30px;">Add Futsal</b>
</div>

		<div class="input-group">
			
			<input type="text"required name="fname" placeholder="Futsal Name ">
		</div>
		<div class="input-group">
		
			<input type="text"required name="address" placeholder="Address ">
		</div>
        <div class="input-group">
		
			<input type="text"required name="owner" placeholder="Owner Name">
		</div>
        <div class="input-group">

			<input type="text"required name="phnum" placeholder="Contact No." >
		</div>
        <div class="input-group" >

			<input type="file"required autocomplete="off" name='image'>
		</div>
		
		<button class="btn-add" type="submit" name="save" >Save</button>
            
	</form>
</body>
</html>