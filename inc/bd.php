<?php
if (!preg_match("/^[0-9a-zA-Z]+$/",$_COOKIE['sid']) && $_COOKIE['sid'] != ""){
	exit('cookie hack detected');
}
else{
$bd_login = 'o92098xr_baza';//логин базы данных

$bd_pass = 'Csgo1337';//пароль базы данных  bv20v272y4h02

$bd_name = 'o92098xr_baza';//имя базы данных antihotskins
 
$conn = mysqli_connect("localhost", $bd_login, $bd_pass, $bd_name) or die("<p>Ошибка подключения к базе данных! " . mysqli_error() . "</p>");
mysqli_select_db($conn, "o92098xr_baza");
mysqli_query($conn, "SET NAMES 'utf8';"); 
mysqli_query($conn, "SET CHARACTER SET 'utf8';"); 
mysqli_query($conn, "SET SESSION collation_connection = 'utf8_general_ci';"); 
}
?>