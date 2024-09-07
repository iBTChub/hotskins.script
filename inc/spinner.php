<?php
require("bd.php");
$hash = $_COOKIE['sid'];

$sql_select = "SELECT * FROM svuti_users WHERE hash='$hash'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
$user_id = $row['id'];

$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespins >= freespinsleft ORDER BY id DESC LIMIT 1";
$result5 = mysql_query($sql_select5);
$row5 = mysql_fetch_array($result5);
if($row5)
{	
$fsleft = $row5['freespinsleft'];
}

$result = array(
'spincount' => "$fsleft"
);
exit(json_encode($result));
?>