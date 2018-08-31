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
        $record = mysqli_query($conn, "SELECT * FROM futsal WHERE F_id=$id");
        
			$n = mysqli_fetch_array($record);
			$name = $n['F_name'];
            $address = $n['F_location'];
            $owner = $n['F_owner'];
            $contact = $n['F_phnum'];
		
    }
    ?>

<form method="post" action="server.php" >

<input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
		<label>Futsal Name</label>
            <input type="text" name="fname" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
		<label>Address</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
    </div>
    <div class="input-group">
		<label>Owner</label>                
            <input type="text" name="owner" value="<?php echo $owner; ?>">
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