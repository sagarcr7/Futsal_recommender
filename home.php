<?php
session_start();
if(!isset($_SESSION['name']) || $_SESSION['name']==""){
   header("Location: index.php#section-two");
   exit();
}

include('recommend.php');
$conn = mysqli_connect("localhost", "root", "", "futsaldb");

$name = $_SESSION['name'];
$q = "SELECT * from team where T_name='$name'";
$data = mysqli_query($conn, $q);

$row = mysqli_fetch_array($data);


?>

<!DOCTYPE html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <title>Booksal</title>
    <style type="text/css">
        .hide{
            position: absolute;
        }
    </style>
    

    <!-- style -->

    <link href="css/style.css" rel="stylesheet" type="text/css">

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
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  </head>

   <body class="module-home" data-spy="scroll" data-target=".navbar">



	<!-- header -->

        <header role="header" class="header-top" id="headere-top">
             
		<div class="header-fixed-wrapper" role="header-fixed">

                <div class="container">

                    <!-- hgroup -->

                    <hgroup class="row">

                        <!-- logo -->
                        <!-- logo -->

                        <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2">

                            <h1>

                                <a href="#headere-top" title="Futsal"><img src="images/logo.png"  width = "60" height = "60" /></a>

                            </h1>

                        </div>

                        <!-- logo -->

                        <!-- nav -->

                        <nav role="navigation" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 navbar navbar-default">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                    <span class="sr-only"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div id="navbar" class="navbar-collapse collapse">            

                                <ul class="nav navbar-nav">                   

                                    <li class="active"><a href="#headere-top" title="Home">Welcome</a></li>

                                    <li><a href="#section-one" title="Overview">My Team</a></li>

                                    <li><a href="#section-two" title="Find futsal">Book Futsal</a></li>

                                    <li><a href="#section-three" title="Contact">Contact</a></li>          

                                </ul>

                            </div>

                        </nav>

                        <!-- nav -->

                    </hgroup>

                    <!-- hgroup -->

                  </div>

            </div>


            <!-- banner Text --> 

                 <section class="text-center">

                    <h2>Looking for Futsal in and around your area?</h2>

                    <p>Logged in as <?php echo $_SESSION['name'];
                    ?>
                    </p>

                     <center><img src="team/<?php echo $row['T_image']; ?>" style="border-radius: 100%; height: 120px; width: 120px; margin-bottom: 20px;"></center>

                     <a  href="php/logout.php" class="button-header">Logout</a>

                </section>

                

            <!-- banner Text -->   

                

            <!-- banner image -->

        	<figure>

            	<div class="parallax-window item tp-banner-container" data-parallax="scroll" data-image-src="images/home_figure.jpg"></div>

            </figure>

            <!-- banner image -->

        </header>

    <!-- header -->

	

    <!-- main -->

    	<main role="main" id=" main-wrapper">
            

            <!-- section-one -->

            <section class="section-one text-center" id="section-one">
                <header role="title-page" class="text-center">

                        <h4>User Profile</h4>
                    </header>

                <div style="height: 30px; width: 100%;"></div>

            	<div class="container" style="width: 80%; margin-left: auto; margin-right: auto;">

                    <div class="col-sm-6"><img src="team/<?php echo $row['T_image']; ?>" style="height: 540px; width: 100%;"/>

                        <!--<img src="team/001.jpg"/"> -->
                    </div>
                    <div class="col-sm-6" style="text-align: left;">
                        <div class="name">
                        <p style="font-size: 50px; font-weight: bold;"><?php echo $row['T_name']; ?></p> </div>

                        <div class="entity">
                        <p><?php echo $row['T_location']; ?></p></div>
                        <div class="entity">
                        <p><?php echo $row['T_email']; ?></p></div>
                        <div class="entity">
                        <p><?php echo $row['T_phnum']; ?></p></div>
                        <style>
                        .entity{
                            height: 80px;
                            font-size: 30px;
                            font-family: Comic Sans MS;
                        }
                        .name{
                            margin-bottom: 80px;
                        }
                    </style>

                        
                        <a href="update.php?TeamId=<?php echo $row['T_id']; ?>" class="btn btn-lg btn-primary">Update</a>
                </div>
                </div>
            </section>

            		


            <!-- section-one -->

            <!-- section-two -->

           <!-- search futsal -->

    <section class="section-two" id="section-two">

     
        <div class="container" style="height: 50px; width: 100%; margin-top: 40px;">
            <header role="title-page" class="text-center">

                        <h4>Search Futsal</h4>
                    </header>


<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

     <center><div class="search-box" style="margin-top: 50px;">
        
        <input type="text"  name="t1" autocomplete="off" placeholder="Search Futsal...." />
       
       
        <div class="result" style="z-index: 1000;"></div>
    </div></center>


    <div class ="container" style="height: 50px; width: 100%; margin-top: 40px;">
        <header role="title-page" class="text-center">

                        <h4>Recommendation For You</h4>
                    </header>

        <div class ="recommendations" style=" margin-top: 40px; margin-left: 120px;">

        <?php

                $futsal_lists=mysqli_query($conn, "select * from rates");
                $matrix=array();
                $teamss = array();

                while ($futsal_list = mysqli_fetch_array($futsal_lists))
                {
                    $teamId = $futsal_list['T_id'];
                    $futsalId = $futsal_list['F_id'];
                    $teams = mysqli_query($conn, "SELECT T_name from team where T_id =$teamId");
                    $teamname = mysqli_fetch_array($teams);
                    $futsals = mysqli_query($conn, "SELECT F_name from futsal where F_id =$futsalId");
                    $futsalname = mysqli_fetch_array($futsals);
                    $matrix[$teamname['T_name']][$futsalname['F_name']]=$futsal_list['rate'];

                }

               ?>
              
               <?php
                getRecommendation($matrix, $name);
                
                 ?>

            </div>

    </div>

    </div> 

    <!-- main div  --> 



          </section>  
            <!-- section-two -->

            

            <!-- section-three -->


            <section class="section-three" id="section-three">

            	<div class="container">

                	 <header role="title-page" class="text-center">

                        <h4>Get in touch</h4>

                        <h2>Have any questions? Our team will be happy to<br/>answer your questionss.</h2>

                    </header>

                    <!-- contact-form -->

                    <div class="contact-form">

                        <div id="message"></div>

                                <form method="post" action="php/contactfrom.php" name="cform" id="cform">

                                <div class="col-md-6 col-lg-6 col-sm-6">

                                	<input  name="name" id="name" type="text" placeholder="Full Name">

                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-6">

                                	<input  name="email" id="email" type="email"  placeholder="Email Address">

                                </div>

                                <div class="clearfix"></div>

                                <textarea name="comments" id="comments" cols="" rows="" placeholder="Question in Detail"></textarea>

                                <div class="clearfix"></div>

                                <input name="" type="submit" value="Send mail">

                                <div id="simple-msg"></div>

                        </form>

                     </div>

                    <!-- contact-form -->

            </section>

            <!-- section-three-->

            

           <!-- footer -->

           

           <!-- footer -->

            

        </main>

    <!-- main -->

    <footer role="footer" class="footer text-center">
            <?php
             include('php/footer.php')
             ?>

           </footer>



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