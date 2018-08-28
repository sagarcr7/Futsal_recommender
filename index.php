<?php
session_start();
include('php/db.php');
if(!isset($_SESSION['message']))
 {$_SESSION['message']= ""; }

if(isset($_SESSION['err'])){
  ?>
  <div class="isa_info">
    <i class="fa fa-info-circle"></i>
  <script type="text/javascript">
    var Err = "<?php echo $_SESSION['err']?>";
    alert(Err);
  </script>
  </div>
  <?php
}
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

  </head>

   <body class="module-home" data-spy="scroll" data-target=".navbar">



	<!-- header -->

        <header role="header" class="header-top" id="headere-top">
             <?php
                        include('php/header.php')
                        ?>


            <!-- banner Text --> 

                 <section class="text-center">

                    <h2>Looking for Futsal in and around your area?</h2>

                    <p>We are here to help you</p>

                     

                     <a class="popup-vimeo video-button" href="videos/index.mp4"><i class="fa fa-caret-right" aria-hidden="true"></i></a>

                     <a  href="#section-two" class="button-header">Join Us</a>

                </section>

                

            <!-- banner Text -->   

                

            <!-- banner image -->

        	<figure>

            	<div class="parallax-window item tp-banner-container" data-parallax="scroll" data-image-src="images/index_figure.jpg"></div>

            </figure>

            <!-- banner image -->

        </header>

    <!-- header -->

	

    <!-- main -->

    	<main role="main" id=" main-wrapper">
            

            <!-- section-one -->

            <section class="section-one text-center" id="section-one">

            	<div class="container">


                	<header role="title-page">

                        <h4>Overview</h4>

                        <h2>We Facilitate you to <br/> locate futsal <br/>challenge with teams </h2>

                    </header>

                    <article>

                    	<p>Booksal application targets to provide all the information regarding the futsal grounds in and around the Kathmandu Valley<br/>

                        </p>

                    </article>

                    

                    <!-- four boxes  -->

                    	<div class="row four-box-pan" role="four-box">

                        	

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-user-plus" aria-hidden="true"></i></figure>

                            	<h5>Membership</h5>

                                <p>Become a member to use all the facilities</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>

                            	<h5>Locate Futsal</h5>

                                <p>Find Futsal grounds in your area</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-futbol-o" aria-hidden="true"></i></figure>

                            	<h5>Book Futsal</h5>

                                <p>Book different futsal grounds around Kathmandu valley.</p>

                            </section>

                            <section class="col-xs-12 col-sm-6 col-md-3">

                            	<figure><i class="fa fa-gift" aria-hidden="true"></i></figure>

                            	<h5>Offers</h5>

                                <p>Different offers in Futsal and tournaments going around the valley</p>

                            </section>

                            

                        </div>

                    <!-- four boxes -->

                    

                </div>

            </section>

            <!-- section-one -->

            

            <!-- section-two -->

            <section class="section-two" id="section-two">

              <div style="height: 50px; width: 100%;">
              </div>     
 <!-- main div -->

<div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
                  
          <form action="login_action.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Team Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="teamname" style="color: #fff;font-size: 18px; padding-left: 10px;" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" style="color: #fff;font-size: 18px; padding-left: 10px;"/>
          </div>
          <div class='error'>
            <p style="color: #fff; font-size: 15px; text-align: left;"><?php echo $_SESSION['message'] ;?></p>
            <p class="forgot" ><a href="forgot.php" style="color: #fff;">Forgot Password?</a></p>
          </div>
          
          
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
                
          <form action="register_action.php" method="post" autocomplete="off" enctype="multipart/form-data">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Team Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='teamname' style="color: #fff;font-size: 18px; padding-left: 10px;" />
            </div>
        
            <div class="field-wrap">
              <label>
                Location<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='location'  style="color: #fff;font-size: 18px; padding-left: 10px;"/>
            </div>
        </div>
             

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email'  style="color: #fff;font-size: 18px; padding-left: 10px;"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password' style="color: #fff;font-size: 18px; padding-left: 10px;"/>
          </div>
          <div class="field-wrap">
            <label>
              Re-enter Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='confirm_password' style="color: #fff;font-size: 18px; padding-left: 10px;"/>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Phone Number<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='phnum'  style="color: #fff;font-size: 18px; padding-left: 10px;"/>
            </div>
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <input type="file"required autocomplete="off" name='image'  style="font-size: 18px; padding-left: 10px;"/>
            </div>
        </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

    <!-- main div  --> 

   </section>

            
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
<?php session_destroy(); ?>