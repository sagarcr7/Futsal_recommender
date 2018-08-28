<?php 
$conn = mysqli_connect("localhost", "root", "", "futsaldb");

$TeamId = $_GET['TeamId'];	




$data = mysqli_query($conn, "SELECT * from team WHERE T_id = '$TeamId'");
$row = mysqli_fetch_array($data);


?>
<?php
session_start();
include('php/db.php');
if(!isset($_SESSION['message']))
 {$_SESSION['message']= ""; }

?>

<!DOCTYPE html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <title>Booksal</title>

    

    <!-- style -->

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style1.css">

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


    <!-- responsive -->

    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!-- font-awesome -->

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- animate-css -->

    <link href="css/animate.min.css" rel="stylesheet" type="text/css">

    <!-- popup-css -->

    <link href="css/popup.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	table tr{
    		height: 35px;
    	}
    	table td{
    		height: 30px;
    	}
    </style>

  </head>

   <body class="module-home" data-spy="scroll" data-target=".navbar">



	<!-- header -->

        

    <!-- header -->

	

    <!-- main -->

    	<main role="main" id=" main-wrapper">
            

            <!-- section-one -->

            <section class="section-one text-center" id="section-one">
            	<p>Update Profile</p>
            	<div class="container" style="text-align: center;">
            		<form action="CMS_update_team_info.php" method="post">
			<table border="0" width="400" align="center" class="demo-table">
				<input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
            <tr>
            <td>Team Name</td>
            <td><input type="text" class="demoInputBox" name="teamname" required id="teamname" value="<?php echo $row['T_name']; ?>"></td>
            </tr>

            
            <tr>
            <td>Location</td>
            <td><input type="text" class="demoInputBox" name="location" required id="location" value="<?php echo $row['T_location']; ?>"></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" class="demoInputBox" name="email" id="email" required value="<?php echo $row['T_email']; ?>"></td>
            </tr>
            <tr>
            <td>Contact no.</td>
            <td><input type="text" class="demoInputBox" name="phnum" id="phnum" required value="<?php echo $row['T_phnum']; ?>"></td>
            </tr>
            <tr>
            <td colspan=2>
            <input type="submit" name="update-team" value="Update" class="btnRegister"></td>
            </tr>
            </table>
		</form>

            	</div>	
                </section>	

            

        </main>

    <!-- main -->

	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery.min.js" type="text/javascript"></script>

    

	<script src="js/parallax.min.js" type="text/javascript"></script>

	<script type="text/javascript">

    	$('.parallax-window').parallax({});

    </script>

    <script src="js/main.js" type="text/javascript"></script>

 

	<script src="js/maps.js" type="text/javascript"></script>

	<script type="text/javascript" src="js/video.js"></script>

    <script src="js/custom.js" type="text/javascript"></script>

	<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

	<script src="js/jquery.contact.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/html5shiv.min.js" type="text/javascript"></script>


  </body>

</html>
