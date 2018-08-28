<?php
session_start();
include('php/db.php');

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

                    <p>We are here to help you</p>

                     

                     <a class="popup-vimeo video-button" href="https://vimeo.com/173595640"><i class="fa fa-caret-right" aria-hidden="true"></i></a>

                     <a  href="index.php" class="button-header">Logout</a>

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

            	<div class="container">

            		<!-- profile page
                	<header role="title-page">

                        <h4>Overview</h4>

                        <h2>We Facilitate you to <br/> locate futsal <br/>challenge with teams </h2>

                    </header>

                    <article>

                    	<p>Booksal application targets to provide all the information regarding the futsal grounds in and around the Kathmandu Valley<br/>

                        </p>

                    </article>

                    -->

                    <!-- four boxes  -->

                    <!--	<div class="row four-box-pan" role="four-box">

                        	

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-rocket" aria-hidden="true"></i></figure>

                            	<h5>Membership</h5>

                                <p>Become a member to use all the facilities</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-magic" aria-hidden="true"></i></figure>

                            	<h5>Locate Futsal</h5>

                                <p>Find Futsal grounds in your area</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-paper-plane" aria-hidden="true"></i></figure>

                            	<h5>Book Futsal</h5>

                                <p>Book different futsal grounds around Kathmandu valley.</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-television" aria-hidden="true"></i></figure>

                            	<h5>Offers</h5>

                                <p>Different offers in Futsal and tournaments going around the valley</p>

                            </section>

                            

                        </div>
						
						-->

                    <!-- four boxes -->

                <!--    

                </div>

            </section>

			-->

            <!-- section-one -->

            <!-- section-two -->

           <!-- search futsal 
            <section class="section-two" id="section-two">

                      <style type="text/css">

.userform_container section {
    width:100%;
    font-family:calibri;
    padding: 30px 50px;
    display:inline-block; 
    max-width:610px; 
    border:2px;
    margin:0 31px; 
}
.userform_container {
    text-align: center;
}

.error-message {
    padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
}
.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
    border-radius: 4px;
}
.demo-table {
    background: #d9eeff;
    margin-top: 10px;
    width: 100%;
    border-spacing: initial;
    margin: 2px 0px;
    word-break: break-word;
    table-layout:auto;
    line-height: 1.8em;
    color: #333;
    border-radius: 4px;
    padding: 20px 40px;
}
.demo-table td {
    padding: 15px 10px;
}
.demoInputBox {
    padding: 10px 30px;
    border: #a9a9a9 1px solid;
    border-radius: 4px;
}
.btnRegister {
    padding: 10px 30px;
    background-color: #3367b2;
    border: 0;
    color: #FFF;
    cursor: pointer;
    border-radius: 4px;
    margin-left: 10px;
}
</style>

	-->

 <!-- main div -->
 <!-- 

<div class="userform_container"> -->

    <!-- login div  --> 
       <!--
        <section> -->

<!--

        <?php 
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<header>

    <h2 align="center"><br/> Member Area</h2>

 </header>

     <form name="frmlogin" method="post" action="php/login_action.php">
            <table border="0" width="200" align="center" class="demo-table">

            <tr>
            <td>Team Name</td>
            <td><input type="text" class="demoInputBox" name="teamname" id="teamname"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" class="demoInputBox" name="password" id="password"></td>
            </tr>
            <tr>
            <td colspan=2>
            <input type="submit" name="login-user" value="Go" class="btnRegister"></td>
            </tr>

        </table>
        </form>
    </section>
        <!-- login  --> 


    <!-- signup div-->
   
<!--
    <section>
   <header>

    <h2 align="center"><br/> Join Us</h2>

 </header>

        <form name="frmRegistration" method="post" action="php/register_action.php">
            <table border="0" width="200" align="center" class="demo-table">

            <tr>
            <td>Team Name</td>
            <td><input type="text" class="demoInputBox" name="teamname" id="teamname" value="<?php if(isset($_POST['teamname'])) echo $_POST['teamname']; ?>"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" class="demoInputBox" name="password" id="password" value=""></td>
            </tr>
            <tr>
            <td>Confirm Password</td>
            <td><input type="password" class="demoInputBox" name="confirm_password" id="confirm_password" value=""></td>
            </tr>
            <tr>
            <td>Location</td>
            <td><input type="text" class="demoInputBox" name="location" id="location" value="<?php if(isset($_POST['location'])) echo $_POST['location']; ?>"></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" class="demoInputBox" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
            </tr>
            <tr>
            <td>Contact no.</td>
            <td><input type="text" class="demoInputBox" name="phnum" id="phnum" value="<?php if(isset($_POST['phnum'])) echo $_POST['phnum']; ?>"></td>
            </tr>
            <tr>
            <td colspan=2>
            <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
            </tr>
            </table>
            </form>

        </section>

-->

            <!-- Signup  --> 
           <!--

    </div> 
-->
    <!-- main div  --> 
<!--
   </section>

-->
            
            <!-- section-two -->

            

            <!-- section-three -->


            <section class="section-three" id="section-three">

            	<div class="container">

                	 <header role="title-page" class="text-center">

                        <h4>Get in touch</h4>

                        <h2>Have any questions? Our team will happy to<br/>answer your questionss.</h2>

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

           <footer role="footer" class="footer text-center">
            <?php
             include('php/footer.php')
             ?>

           </footer>

           <!-- footer -->

            

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