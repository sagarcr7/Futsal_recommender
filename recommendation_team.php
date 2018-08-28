<?php
include('php/db.php');
include('recommend.php');
$conn = mysqli_connect("localhost","root","","futsaldb");
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


getRecommendation($matrix, $teamname['T_name'] ); 
