<?php
require("inc/config.php");

$login = $_POST['login'];
if(!preg_match("/^[0-9a-zA-Z]+$/",$login)) 
{
	die("empty login");
} 

$sql_select = "SELECT id, data_reg FROM svuti_users WHERE login='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$uid = $row['id'];
$dreg = $row['data_reg'];


$sql_select = "SELECT SUM(suma), count(*) FROM svuti_games WHERE login='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma1 = $row['SUM(suma)'];
$sum1 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM bombGames WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma2 = $row['SUM(bet)'];
$sum2 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM cardbet WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma3 = $row['SUM(bet)'];
$sum3 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM cfbets WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma4 = $row['SUM(bet)'];
$sum4 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM chests WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma5 = $row['SUM(bet)'];
$sum5 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM crashbet WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma6 = $row['SUM(bet)'];
$sum6 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM diceBet WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma7 = $row['SUM(bet)'];
$sum7 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM lowerupper WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma8 = $row['SUM(bet)'];
$sum8 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM roulette WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma9 = $row['SUM(bet)'];
$sum9 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM rpsBets WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma10 = $row['SUM(bet)'];
$sum10 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM thimblesBets WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma11 = $row['SUM(bet)'];
$sum11 = $row['count(*)'];

$sql_select = "SELECT SUM(bet), count(*) FROM upgradeGame WHERE user_id='$uid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$suma12 = $row['SUM(bet)'];
$sum12 = $row['count(*)'];

$sql_select = "SELECT profit FROM liveGames WHERE login='$login' ORDER BY profit DESC";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$profit = $row['profit'];

$sql_select = "SELECT coeff FROM liveGames WHERE login='$login' ORDER BY coeff DESC";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);	
$coeff = $row['coeff'];

$betsSum = round($suma1 + $suma2 + $suma3 + $suma4 + $suma5 + $suma6 + $suma7 + $suma8 + $suma9 + $suma10 + $suma11 + $suma12, 2);
$gamesTotal = (int) $sum1 + $sum2 + $sum3 + $sum4 + $sum5 + $sum6 + $sum7 + $sum8 + $sum9 + $sum10 + $sum11 + $sum12;
$profit = $profit;
$coeff = $coeff;

$success = "false";
if($betsSum && $gamesTotal && $profit && $coeff)
{
	$success = "success";
}

$result = array(
"betAmount" => "$betsSum",
"success" => "$success",
"gamesPlayed" => "$gamesTotal",
"bestWin" => "$profit",
"bestCoeff" => "x$coeff",
"dreg" => "$dreg",
);

exit(json_encode($result));
?>