<?php
require("bd.php");
$sid = $_COOKIE["sid"];



$sql_select = "SELECT * FROM liveGames ORDER BY `id` DESC LIMIT 20";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
	$sql_select1 = "SELECT * FROM svuti_users WHERE login=".$row['login'];
$result1 = mysql_query($sql_select1);
$row1 = mysql_fetch_array($result1);
$youtube = $row1['youtube'];
$deposit = $row1['deposit'];
$admin = $row1['prava'];
$deposit = $row1['deposit'];
if($deposit >= 200)
{
	$color = '#ff0000';
}
if($deposit >= 700)
{
	$color = '#5273CF';
}
if($deposit >= 1000){
	$color = '<span style="color:#999966">[PRO]</span>';
}
$login = ucfirst($row['login']);
	$game =  <<<HERE
$game
<tr>
    <td class="text-truncate " style="font-weight:600">$row[id]</td>
	<td class="text-truncate " style="font-weight:600">$row[mode]</td>
    <td class="text-truncate $st" style="font-weight:600"><span style='color:$color'>$row[login]</span></td>
    <td class="text-truncate " style="font-weight:600">$row[amount] <i class="fas fa-coins"></i></td>
    <td class="text-truncate " style="font-weight:600">x$row[coeff]</td>
    <td class="text-truncate $st " style="font-weight:600">$row[profit] <i class="fas fa-coins"></i></td>
</tr>
HERE;
$st = "";
$sts = "";
$login = "";
}
while($row = mysql_fetch_array($result));
$sid = $_COOKIE["sid"];
$time = time() + 5;
$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];

$sql_select2 = "SELECT * FROM liveGames ORDER BY `id` DESC LIMIT 1";
$result2 = mysql_query($sql_select2);
$row2 = mysql_fetch_array($result2);
$lastgame1 = $row2['id'];
$sql_select3 = "SELECT * FROM svuti_games ORDER BY `id` DESC LIMIT 1";
$result3 = mysql_query($sql_select3);
$row3 = mysql_fetch_array($result3);
$lastgame2 = $row3['id'];

$lastgame = $lastgame1 + $lastgame2;

    $result = array(
	'game' => "$game",
	'lastgame' => "$lastgame"
    );
    echo json_encode($result);
?>