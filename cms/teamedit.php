<?php
    session_start();
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
<?php
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
        $record = mysqli_query($conn, "SELECT * FROM team WHERE T_id=$id");
        
			$n = mysqli_fetch_array($record);
			$name = $n['T_name'];
            $address = $n['T_location'];
            $email = $n['T_email'];
            $contact = $n['T_phnum'];
		
    }
    ?>

<form method="post" action="server1.php" >

<input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
		<label>Team Name</label>
            <input type="text" name="tname" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
		<label>Address</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
    </div>
    <div class="input-group">
		<label>Email</label>                
            <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
		<label>contact</label>
            <input type="text" name="phnum" value="<?php echo $contact; ?>">
    </div> 
    <div class="input-group">
                <button class="btn-add" type="submit" name="update" >Update</button>
            
		</div>       

   </form>  
   </body>
</html>       