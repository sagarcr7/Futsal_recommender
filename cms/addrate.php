<?php

	include('server.php');
	include('php/header.php');
    $conn = mysqli_connect('localhost', 'root', '', 'futsaldb');
    
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Rating</title>
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

	<form method="post" action="server2.php" >

		<div class="add_label">
						<b style="font-size: 30px;">Add Rating</b>
</div>

		<div class="input-group">
			
			<input type="text"required name="tname" placeholder="Teams Name ">
		</div>

		<div class="input-group">
		
			<input type="text"required name="Fname" placeholder="Futsal Name ">
			
		</div>

		<div class="input-group">
				<label>Rate</label>
				<select name="rate">
  				<option value="1" name="rate">1</option>
 				<option value="2"name="rate">2</option>
  				<option value="3"name="rate">3</option>
  				<option value="4"name="rate">4</option>
  				<option value="5"name="rate">5</option>
  
			</select>
		</div>

        
		<button class="btn-add" type="submit" name="save" >Save</button>
            
	</form>
</body>
</html>