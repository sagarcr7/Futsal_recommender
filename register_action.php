 <?php
session_start();

//connect to database

$conn = mysqli_connect("localhost", "root", "", "futsaldb");

  $teamname= mysqli_real_escape_string($conn, $_POST['teamname']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  $password2=mysqli_real_escape_string($conn, $_POST['confirm_password']);
  $location=mysqli_real_escape_string($conn, $_POST['location']);
  $email=mysqli_real_escape_string($conn, $_POST['email']); 
  $phnum=mysqli_real_escape_string($conn, $_POST['phnum']);
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  
  if($check !== false){
      $image = $_FILES['image']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));

    if($password!=$password2){
    $_SESSION['message']="The two passwords do not match";   
    }  

    else if(strlen($password) < 8){
    $_SESSION['message']="The password length is less than 8";
    }

    else if(strlen($teamname) < 2){
    $_SESSION['message']="The Teamname is too small";
    }

    else
     {      
     //Create User
            $password = md5($password);
            $sql="INSERT INTO team(T_id,T_name,T_pw,T_location,T_email,T_phnum, T_image) VALUES (NULL,'$teamname','$password','$location','$email','$phnum', '$imgcontent')";  
            $insert = mysqli_query($conn, $sql);
            if(!$insert){
              header("location: index.php#section-two");
            }
            else{
              $_SESSION['name'] = $teamname;
              header("location:home.php");
            }
    }
  }
     $conn->close();
?>