<?php require_once 'inc/config.php';

$hashA = $_COOKIE['sid'];
$sql_select = "SELECT * FROM `svuti_users` WHERE hash='$hashA'";
$result = mysqli_query($conn, $sql_select);
$user = mysqli_fetch_array($result);
if($user)
{	
$yout = $user['youtube'];
$prava = $user['prava'];
$userhash = $user['hash'];
$userid = $user['id'];
$idref = $user['id'];
$secretC = $user['secret_code'];
$bon = $row['bonus_url'];
$balance = $user['balance'];
$login = $user['login'];
$datareg = $user['data_reg'];
$withdraw = $user['withdraw'];
$deposit = $user['deposit'];
$wager = $user['wager'];
$b11 = $user['login'][0];
$b21 = $user['login'][1];
$ava1 = $b11.$b21;
$chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[rand(1,48)];
$salt2 .= $chr[rand(1,48)];
}
$number = rand(0, 999999);
$hash = hash('sha512', $salt1.$number.$salt2);

if($bon == "")
{
	$bonusrow = <<<HERE
	<div class="col-md-12" id="bonusRow">
										
                                        <div class="card" style="box-shadow: rgb(210, 215, 222) 7px 10px 23px -11px;border-radius:25px!important;">
										<div class="card-header" style="border-radius:25px!important;border-bottom:0!important">
                                                    
                                                   
                                                     
													<div class="heading-elements">
                                                        <ul class="list-inline mb-2 font-medium-4">
                                                        </ul>
                                                    </div>
													 
                                                </div>
                                            <div class="card-body" style="margin-top:-35px;border-radius:25px!important">
                                                <div class="row justify-content-center">
													<div class="p-2 text-xs-center ">
													
														<h5>Для активации бонусов на нашем сайте</h5>
													1. Подписаться на наш паблик, <a target="_blank" href="https://vk.com/hotskinsclub">ссылка</a><br>
													2. Нажать на кнопку ниже, для верификации аккаунта

													<a id="error_bonus" class="btn red btn-raised btnError" style="cursor:default;padding:10px;color: rgb(255, 255, 255);width: 100%;display:none;"></a>
													<a id="success_bonus" class="btn red btn-raised btnError" style="cursor:default;padding:10px;color: rgb(255, 255, 255);width: 100%;display:none;"></a>
													<br>
													<br>
													<center><button class="btn btn-success" id="enter_but" onclick="vkBonus()">Получить бонунус</button></center>
													
													</div>
												</div>
												
											</div>
											<script>
											function vkBonus() {
	                                         const cid = '7521733';
	                                         const redir_url = "https://hotskins.club/vklogin.php";
	                                         document.location.href = "https://oauth.vk.com/authorize?client_id="+cid+"&redirect_uri="+redir_url+"&response_type=code";
											}
										</script>
										</div>
									</div>	
HERE;
}

$code = 12;
//$code = strToHex(($salt1.$number.$salt2, '2Q$8s(');
$hid = implode("-", str_split($code, 4));
setcookie('hid', $hid, time()+31536000, '/');

$sql_select = "SELECT COUNT(*) FROM `slim_zakidi` WHERE user_id='".$userid."'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row['COUNT(*)'] == 0)
{
	$paymentss = '<tr><td colspan="6" class="text-xs-center">История пополнений пуста</td>                 
                        </tr>';
}
else
{
$sql_select33 = "SELECT * FROM `slim_zakidi` WHERE user_id='".$userid."' ORDER BY data DESC";
$result33 = mysqli_query($conn, $sql_select33);
$row33 = mysqli_fetch_array($result33);
do
{

	$paymentss = $paymentss.'<tr style="cursor:default!important;""><td></td><td></td><td>'.$row33['data'].'<td>'.number_format($row33['suma'], 2, '.', '').' <i class="fas fa-coins"></i></td></td><td></td><td></td>

							</tr>';
}
while($row33 = mysqli_fetch_array($result33));
}

$sql_select = "SELECT COUNT(*) FROM `svuti_payout` WHERE user_id='".$userid."' ORDER BY data";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row['COUNT(*)'] == 0)
{
	$payouts = '<tr><td id="emptyHistory" colspan="4" class="text-xs-center">История пуста</td>
															</tr>';
}
else
{	
	$sql_select3 = "SELECT * FROM `svuti_payout` WHERE user_id='".$userid."' ORDER BY id DESC";
$result3 = mysqli_query($conn, $sql_select3);
$row3 = mysqli_fetch_array($result3);
do
{
	$statw = $row3['status'];
	if($row3['status'] == "Ожидание")
	{
		$tag = "warning";
		$i = '<i class="fa fa-clock-o"></i> ';
		$s = '<i class="fa fa-times" onclick="otmena()" value="'.$row3['id'].'" id="otmina"></i>';
	}
	if($row3['status'] == "Выплачиваем")
	{
		$tag = "info";
		$i = '<i class="fa fa-clock-o"></i> ';
	}
	if($row3['status'] == "Выплачено" || $row3['status'] == "Выплачено (A)")
	{
		$tag = "success";
		$s = "";
		$i = '<i class="fa fa-check"></i> ';
		$statw = "Выплачено";
	}
	if($row3['status'] == "Возврат")
	{
		$tag = "info";
		$s = "";
		$i = '<i class="fa fa-times"></i> ';
	}
	if($row3['status'] == "Отменен")
	{
		$tag = "danger";
		$s = "";
		$i = '<i class="fa fa-times"></i> ';
	}
	$payouts = $payouts.'<tr style="cursor:default!important;" id="'.$row3['id'].'"><td>'.$s.$row3['data'].'</td><td>'.$row3['wallet'].'</td><td>'.$row3['suma'].' <i class="fas fa-coins"></i></td>
							<td><div class="badge badge-'.$tag.'">'.$i.$statw.' </div></td>

							</tr>';
							$tag = "";
}
while($row3 = mysqli_fetch_array($result3));
}

if($deposit >= 200)
{
   $status = '<span class="text-success">[V.I.P]</span>';
}
if($deposit >= 700)
{
   $status = '<span class="text-danger">[PREMIUM]</span>';
}
if($deposit >= 1000)
{
   $status = '<span class="text-info">[PRO]</span>';
}

$sql_select = "SELECT * FROM `freespins` WHERE user_id='$userid' AND freespins >= freespinsleft ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$countspins = $row['freespinsleft'];
$betspins = $row['bet'];
if($countspins > 0)
{
	$fsyes = <<<HERE
	<h5 class="text-xs-center">Сумма ставки:</h5>
	<center><input id="BetSizeSlot" onkeyup="validateBetSize(this);" value="$betspins" class="form-control text-xs-center" readonly></center>
<br>
    <center><button class="btn btn-info" onclick="spin()" style="margin-top:-15px" id="case1op">ВРАЩАТЬ БЕСПЛАТНО (<span id="ccspin">$countspins</span>)</button></center>
HERE;
}
else{
$fsno = <<<HERE
	<h5 class="text-xs-center">Сумма ставки:</h5>
	<center><input id="BetSizeSlot" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
</span>
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val('')" class="btn btn-white"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val('0.01')" class="btn btn-white"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+1;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="btn btn-white"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+10;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="btn btn-white" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+100;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="btn btn-white" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val(parseFloat(Math.max(($('#BetSizeSlot').val()/2), 0.01)).toFixed(2));" class="btn btn-white" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val(parseFloat(Math.max(($('#BetSizeSlot').val()*2), 0.01)).toFixed(2));" class="btn btn-white" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeSlot').val(Math.max(max,0.01));" class="btn btn-white" style="display:inline-block;"> <span>Max</span></div>
</div>


</center>
	</center>
    <center><button class="btn btn-info" onclick="spin()" style="margin-top:-15px" id="case1op">ВРАЩАТЬ</button></center>
HERE;
}

if(!empty($idref)){
$sql_select221 = "SELECT * FROM `svuti_users` WHERE referer='$idref' ORDER BY `data_reg` DESC";
$result221 = mysqli_query($conn, $sql_select221);
$row221 = mysqli_fetch_array($result221);
$sql_select4 = "SELECT COUNT(*) FROM `svuti_users` WHERE referer='$idref'";
$result4 = mysqli_query($conn, $sql_select4);
$row4 = mysqli_fetch_array($result4);	
$count = $row4['COUNT(*)'];
do
{
$sql_select423 = "SELECT SUM(suma) FROM `slim_zakidi` WHERE user_id=".$row221['id'];
$result423 = mysqli_query($conn, $sql_select423);
$row423 = mysqli_fetch_array($result423);
do
{
	$sumapey = $sumapey + $row423['SUM(suma)'];
}
while($row423 = mysqli_fetch_array($result423));
$sumapeys = ($sumapey / 100) * 10;
}
while($row221 = mysqli_fetch_array($result221));
}

$sql_select = "SELECT * FROM `lowerupper` WHERE user_id='$userid' AND active = '1' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$coefl = $row['coeff_lower'];
$coefu = $row['coeff_upper'];
$numul = $row['number'];
if($row)
{
	$luactive = <<<HERE
	<div id="activePhp">	
    <center><button class="btn btn-info" onclick="mensheChange();betLu();">МЕНЬШЕ (<span>$coefl</span>x)</button><button style="margin-left:5px" class="btn btn-info" onclick="bolsheChange();betLu();">БОЛЬШЕ (<span>$coefu</span>x)</button></center>           
 	<center><button class="btn btn-info" style="margin-top:5px" onclick="evenChange();betLu();">ЧЕТНОЕ (1.98x)</button><button style="margin-left:5px;margin-top:5px" class="btn btn-info" style="margin-top:5px" onclick="oddChange();betLu();">НЕЧЕТНОЕ (1.98x)</button></center>
    <center><button class="btn btn-info" style="margin-top:5px" onclick="ravnoChange();betLu();">РАВНО (98x)</button></center>	
	</div>
	
	<div id="createGamos" style="display:none">
	<center><button class="btn btn-info" onclick="betluchange();betLu();">Создать игру</button></center>
	</div>
HERE;
$numul = $row['number'];
}
else{
	$lunoactive = <<<HERE
	<div id="createGame">
	<center><button class="btn btn-info" onclick="betluchange();betLu();">Создать игру</button></center>
	</div>
HERE;
}

$sql_select = "SELECT * FROM `giveaway` ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$rands = $row['randTo'];
$usersga = $row['users'];
$usersgaleft = $row['usersleft'];
$randAmount = $rands / 100;
$randga = number_format($randAmount, 2, '.', ' ');
if($usersga >= $usersgaleft){
	$statusga = '<span style="color:#ff0000">[OFFLINE]</span>';
	$gablock = <<<HERE
	<center><h5 class="text-xs-center" style="font-size:18px;color:red">Раздача не активна!</h5></center>
HERE;
}
else{
	$statusga = '<span style="color:#4BB543">[ACTIVE!]</span>';
$gablock = <<<HERE
	<center><h5 class="text-xs-center" style="font-size:15px;">Максимальный приз: <b>$randga <i class="fas fa-coins"></i></b></h5>
	<h5 class="text-xs-center" style="font-size:15px;">Участников: <b><span id="usersga">$usersga</span> / $usersgaleft</b></h5></center>
HERE;
}

$sql_select = "SELECT date FROM `tournamentTimer` WHERE id='1'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$tourTime = $row['date'];
$sql_select111 = "SELECT * FROM svuti_users WHERE betsAmount > 0 AND ban != '1' ORDER by betsAmount DESC LIMIT 10";
$result111 = mysqli_query($conn, $sql_select111);
$num = 1;

    while($row111 = mysqli_fetch_array($result111))
    { 

        $deposit = $row111['deposit'];
        $color = '';
        if($deposit >= 200)
        {
	       $color = '#ff0000';
        }
        if($deposit >= 700)
        {
	       $color = '#5273CF';
        }
        if($deposit >= 1000){
	       $color = '#999966';
        }
	   
       if($num == 1){$prize='<b>2500 <i class="fas fa-coins"></i></b>';}
       if($num == 2){$prize='<b>1500 <i class="fas fa-coins"></i></b>';}
       if($num == 3){$prize='<b>500 <i class="fas fa-coins"></i></b>';}
       if($num != 1 && $num != 2 && $num != 3){$prize='-';}
	   $nck = "'$row111[login]'";
				$xd11.= '<tr>';
				$xd11.= "<td>#$num</td>";
				$xd11.= '<td style="color:'.$color.'" onclick="userGetInfo('.$nck.');" data-dismiss="modal" data-toggle="modal" data-target="#aProfile">'.$row111['login'].'</td>';
				$xd11.= "<td>$row111[betsAmount]</td>";
				$xd11.= "<td>$prize</td>";
				$xd11.= '</tr>';	
				$num++;	
				
				
	}

$sql_select = "SELECT date FROM `refTimer` WHERE id='1'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$refTime = $row['date'];

$sql_select11 = "SELECT * FROM svuti_users WHERE refsToday > 0 AND ban != '1' ORDER by refsToday DESC LIMIT 10";
$result11 = mysqli_query($conn, $sql_select11);
$num = 1;

    while($row11 = mysqli_fetch_array($result11))
    { 
        $deposit = $row11['deposit'];
        $color = '';
        if($deposit >= 200)
        {
	       $color = '#ff0000';
        }
        if($deposit >= 700)
        {
	       $color = '#5273CF';
        }
        if($deposit >= 1000){
	       $color = '#999966';
        }
		
       if($num == 1){$prize='<b>150 <i class="fas fa-coins"></i></b>';}
       if($num == 2){$prize='<b>125 <i class="fas fa-coins"></i></b>';}
       if($num == 3){$prize='<b>100 <i class="fas fa-coins"></i></b>';}
       if($num != 1 && $num != 2 && $num != 3){$prize='-';}
	   $nck = "'$row11[login]'";
				$xd1.= '<tr>';
				$xd1.= "<td>#$num</td>";
				$xd1.= '<td style="color:'.$color.'" onclick="userGetInfo('.$nck.');" data-toggle="modal" data-target="#aProfile">'.$row11['login'].'</td>';
				$xd1.= "<td>$row11[refsToday]</td>";
				$xd1.= "<td>$prize</td>";
				$xd1.= '</tr>';	
				$num++;	
	}	
	

$sql_select = "SELECT COUNT(*) FROM `slim_zakidi` WHERE user_id='".$userid."'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row['COUNT(*)'] == 0)
{
	$paymentss = '<tr><td colspan="6" class="text-xs-center">История пополнений пуста</td>                 
                        </tr>';
}
else
{
$sql_select33 = "SELECT * FROM `slim_zakidi` WHERE user_id='".$userid."' ORDER BY data DESC";
$result33 = mysqli_query($conn, $sql_select33);
$row33 = mysqli_fetch_array($result33);
do
{

	$paymentss = $paymentss.'<tr style="cursor:default!important;""><td></td><td></td><td>'.$row33['data'].'<td>'.number_format($row33['suma'], 2, '.', '').' <i class="fas fa-coins"></i></td></td><td></td><td></td>

							</tr>';
}
while($row33 = mysqli_fetch_array($result33));
}
}

if(isset($_COOKIE['background']))
{
  $bgclass = 'light';
 
}
else{
  $bgclass = 'light';
}

$sql_select = "SELECT * FROM `liveGames` ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
do
{
$b1 = $row['login'][0];
$b2 = $row['login'][1];
$ava = $b1.$b2;
$game =  <<<HERE
$game
<tr>
    <td data-toggle="modal" id="userpclick" onclick="userGetInfo('$row[login]');" data-target="#aProfile"><div style="display:inline-flex;text-align:center;text-transform:uppercase;padding:8px;border-radius:99px;background:#3f51b5;color:#fff;font-weight:600">$ava</div><span style="margin-left:5px">$row[login]</span></td>
	<td>$row[mode]</td>
    <td style="font-weight:600">$row[amount]</td>
    <td style="font-weight:600">x$row[coeff]</td>
    <td style="font-weight:600">$row[profit]</td>
</tr>
HERE;
}
while($row = mysqli_fetch_array($result));
?>
<!DOCTYPE html>
<head>
      <link rel="stylesheet" type="text/css" href="../libs/jqvmap/dist/jqvmap.min.css">
      <meta charset="utf-8">
      <title>HOTSKINS - Лучшие выигрыши только здесь!</title>
      <meta name="description" content="Что такое HOTSKINS.CLUB? Это много честных увлекательных режимов игры. Заходи и выигрывай!">
      <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
      <!-- style -->
      <link rel="stylesheet" href="../assets/css/site.min.css?v=<?php echo time(); ?>">
	  <link rel="stylesheet" href="../assets/css/loader-gg.css">   
	  <!-- <link href="assets/css/salert.css" rel="stylesheet"> -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	  <link rel="stylesheet" href="../assets/css/fa.css"> 
	  <link rel="icon" href="fav.ico" type="image/png" sizes="16x16">
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
	  <?php if($_COOKIE['background'] == "light"){ ?>
	   <style>
	   .modal-content {
           border: none!important;
           background-color: #f9f9fa!important;
	   }
	   .modal-footer {
           border-top: 1px solid #eee!important;
	   }
	   </style>
	  <?php } ?>
   </head>
<html lang="en" class="bg-<?php echo $bgclass; ?>" data-class="bg-<?php echo $bgclass; ?>">   