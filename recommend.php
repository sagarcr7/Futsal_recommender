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
	<img src="team/<?php echo $row['F_image']; ?>" style="width: 40%; height: 100px; opacity: 1" >
	<a href="book.php?id=<?php echo $row['F_id']; ?>" class="btn btn-lg btn-primary">Book Now </a>

</div>
<?php 
}
	}


}
?>