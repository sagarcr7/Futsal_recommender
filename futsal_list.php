<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "futsaldb");
?>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="external.css">
<script type="text/javascript" src="external.js"></script>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);

* {
  margin: 0;
  padding: 0;
  font-family: roboto;
}

body { background: none; }

.cont {
  width: 93%;
  max-width: 350px;
  text-align: center;
  margin: 4% auto;
  padding: 30px 0;
  background: #111;
  color: #EEE;
  border-radius: 5px;
  border: thin solid #444;
  overflow: hidden;
}

hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
<link href="css.css" rel="stylesheet" type="text/css">
 <div class="container">
 <div class="row">
<div id="theCarousel" style="width: 80%; height: 500px; margin-left: auto; margin-right: auto;">
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
    	<?php 
    	$data = mysqli_query($conn, "select * from futsal");
    	while($result = mysqli_fetch_array($data)){
    	 ?>
        <div class="carousel-cell">
        	<div style="width: 50%; height: 100%; float: left;"><img src="Images/<?php echo $result['F_image']; ?>" style="width: 100%; height: 100%;"/></div>
          <div style="width: 50%; height: 100%; float: right;"><h1 style="margin-left: 50%; margin-top: 250px; color: #000; font-weight: bold;"><?php echo $result['F_name']; ?><br><?php echo $result['F_location']; ?></h1>
          <div class="cont" style="background: none; border: none;">
  <div class="stars">
    <form action="server2.php?id=<?php echo $result['F_id']; ?>" method="post">
      <!-- <input  type="radio" name="star" value="5" />
      <input  type="radio" name="star" value="4" />
      <input  type="radio" name="star" value="3" />
      <input  type="radio" name="star" value="2" />
      <input  type="radio" name="star" value="1" /><br> -->
      <input class="star star-5" id="star-5-<?php echo $result['F_id']; ?>" type="radio" name="star" value="5" />
      <label class="star star-5" for="star-5-<?php echo $result['F_id']; ?>"></label>
      <input class="star star-4" id="star-4-<?php echo $result['F_id']; ?>" type="radio" name="star" value="4" />
      <label class="star star-4" for="star-4-<?php echo $result['F_id']; ?>"></label>
      <input class="star star-3" id="star-3-<?php echo $result['F_id']; ?>" type="radio" name="star" value="3" />
      <label class="star star-3" for="star-3-<?php echo $result['F_id']; ?>"></label>
      <input class="star star-2" id="star-2-<?php echo $result['F_id']; ?>" type="radio" name="star" value="2" />
      <label class="star star-2" for="star-2-<?php echo $result['F_id']; ?>"></label>
      <input class="star star-1" id="star-1-<?php echo $result['F_id']; ?>" type="radio" name="star" value="1" />
      <label class="star star-1" for="star-1-<?php echo $result['F_id']; ?>"></label>
      
      <input type="submit" name="" value="Rate this Futsal" class="btn btn-lg">
    </form>
  </div>
</div>
</div>
        </div>
        
        <?php } ?>
        
      </div> 

</div>
 <!--carousel slide-->
 </div><!-- /row-->
 </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript"
src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
 $('.carousel-indicators li:nth-child(1)').addClass('active');
 $('.item:nth-child(1)').addClass('active');

});
</script> 