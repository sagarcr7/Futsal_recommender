<?php

function similarity_distance($matrix, $team1, $team2)
{
	$similar =array();
	$sum =0;

	foreach ($matrix[$team1] as $key => $value) 
	{
		if(array_key_exists($key,$matrix[$team2]))
		{
			$similar[$key]=1;
		}
		if ($similar==0){
			return 0;
		}
		foreach ($matrix[$team1] as $key => $value) 
		{
			if(array_key_exists($key,$matrix[$team2]))
			{

				$sum = $sum+pow($value-$matrix[$team2][$key],2 );
			}


		}
			return 1/(1 +sqrt($sum));	
	}
}
function getRecommendation($matrix,$team)
{
	$total =array();
	$simsums =array();
	$ranks =array();
	foreach ($matrix as $otherteam => $value) 
	{
		if ($otherteam!= $team)
		{
			$sim=similarity_distance($matrix, $team, $otherteam);
			foreach ($matrix[$otherteam] as $key => $value) 
			{
				if(!array_key_exists($key, $matrix[$team]))
				{
					if(!array_key_exists($key, $total)) 
					{
						$total[$key]=0;

					}
				
					$total[$key]+=$matrix[$otherteam][$key]*$sim;
					if (!array_key_exists($key, $simsums))
					{
						$simsums[$key]=0;
					}

					$simsums[$key]+=$sim;
				}
			}
		}
	}
	

	foreach ($total as $key => $value) 
	{
	
		if($simsums[$key]!=0)
		$ranks[$key]=$value/$simsums[$key];
}

	arsort($ranks);


	$i= 1;
	$conn = mysqli_connect("localhost","root","","futsaldb");
	foreach ($ranks as $key => $value) {
		if($i<=4){
		 
	$rdt = mysqli_query($conn, "SELECT * FROM futsal WHERE F_name='$key'");
	$row= mysqli_fetch_array($rdt);
	$i= $i+1;
		?>
	<div class="col-md-3" id="recommend" style="margin-bottom: 20px;">
	<h3><?php echo $row['F_name']; ?></h3>
	<p><?php echo $row['F_location']?></p>
	<a id="open-popup" href=""><img src="team/<?php echo $row['F_image']; ?>" style="width: 40%; height: 100px; opacity: 1" >
	<a href="book.php?id=<?php echo $row['F_id']; ?>" class="btn btn-lg btn-primary">Book Now </a>


<div class="popup" id="popup">
  <div class="popup__inner">
    <header class="popup__header">
      <kbd>close</kbd><a href="#" class="popup__close"></a>  
    </header>
	<div class="col-sm-6"><img src="team/<?php echo $row['F_image']; ?>" style="height: 30px; width: 100%;"/>
        </div>
                    <div class="col-sm-6" style="text-align: left;">
                        <div class="name">
                        <p style="font-size:20px; font-weight: bold;"><?php echo $row['F_name']; ?></p> </div>

                        <div class="f_entity">
                        <p><?php echo $row['F_location']; ?></p></div>
                        <div class="f_entity">
                        <p><?php echo $row['F_phnum']; ?></p></div>
                        <style>
                        .f_entity{
                            height: 30px;
                            font-size: 16px;
                            font-family: Comic Sans MS;
                        }
                        .name{
                            margin-bottom: 80px;
                        }
                    </style>
					</div>

    
  </div><!-- /popup__inner -->
</div><!-- /popup -->

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

	<script src="js/futsal.js"></script>
	<style>

	////////////
// POPUP //
///////////
.popup { // gray area  
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(50, 50, 50, 0.5);
  display: none;
}
.popup__inner {
  overflow-y: scroll;
  max-height: 100%;
  background-color: #f2f2f2;
  width: 90%;
  max-width: 30em;
  margin: 3em auto 0;
  padding-bottom: 1.5em;
  border-radius: 2px;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.6);
}

.popup__header {
  background-color: lightgray;
  padding: 0.25em 0.75em;
  margin-bottom: 2em;
  text-align: right;
}
.popup__close {
  display: inline-block;
  width: 0.875em;
  height: 0.875em;
  background-color: tomato;
  border-radius: 50%;
  

	</style>
<?php 
}
	}


}
?>