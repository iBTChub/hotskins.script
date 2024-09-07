<?php
require("inc/config.php");
if (!preg_match("/^[0-9a-zA-Z]+$/",$_COOKIE['sid']) && $_COOKIE['sid'] != ""){
	exit("хацкеры сосат...");
}
$otdachaDep = 50;
$login = $_POST['login'];
$type = $_POST['type'];
$podtype = $_POST['podtype'];
$sid = $_COOKIE['sid'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = $_POST['pass'];
$secretkey = "6LehzqgZAAAAAOV7myyssZOw1gSJUGvaoKJeUtN2";
$secretkey2 = "6LehzqgZAAAAABAw0iz83VdKlObo1hBTI6gtstIV";
$error = 0;
$fa = "";
if($type == "cont_BJ") {
	$sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$balance = $row['balance'];
$login = $row['login'];
$user_id = $row['id'];
$startblackjack = $row['startblackjack'];
}


	$sql_select2 = "SELECT * FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$bet = $row['bet'];
$player = $row['player'];
$diller = $row['diller'];
$cards_player = $row['cards_player'];
$cards_diller = $row['cards_diller'];
$can_split = $row['can_split'];
$cards_split_1 = $row['cards_split_1'];
$cards_split_2 = $row['cards_split_2'];
$sum_cards_split_1 = $row['sum_cards_split_1'];
$sum_cards_split_2 = $row['sum_cards_split_2'];
$split = $row['split'];
$diller_suit = $row['diller_suit'];
$player_suit = $row['player_suit'];
$split_suit_1 = $row['split_suit_1'];
$split_suit_2 = $row['split_suit_2'];
}

if($_SESSION['timestamp'] + 2 > time()){
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
}
else{
$_SESSION['timestamp'] = time();
}


      if($startblackjack != 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Начните игру";
         $fa = "error";
       }

       if($ban == 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Ваш аккаунт заблокирован";
         $fa = "error";
       }



	if ($error == 0){
		if($split == 0){
			$cards_diller = json_decode($cards_diller);
			$cards_diller = json_encode($cards_diller);

			$player_suit = json_decode($player_suit);
			$player_suit = json_encode($player_suit);

			$diller_suit = json_decode($diller_suit);
			$diller_suit = json_encode($diller_suit);


		}

		if ($split == 1 or $split == 2){
				$split_suit_1 = json_decode($split_suit_1);
			$split_suit_1 = json_encode($split_suit_1);

			$split_suit_2 = json_decode($split_suit_2);
			$split_suit_2 = json_encode($split_suit_2);
		}

		$fa = "success";
	}


	$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'cards_player' => "$cards_player",
    'cards_diller' => "$cards_diller",
    'player' => $player,
    'diller' => $diller,
    'cards_split_1' => "$cards_split_1",
    'cards_split_2' => "$cards_split_2",
    'sum_cards_split_1' => "$sum_cards_split_1",
    'sum_cards_split_2' => "$sum_cards_split_2",
    'split' => $split,
    'bet' => $bet,
    'can_split' => $can_split,
    'player_suit' => "$player_suit",
    'diller_suit' => "$diller_suit",
    'split_suit_1' => "$split_suit_1",
    'split_suit_2' => "$split_suit_2"
    );
}

if($type == "split_BJ") {

$sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$balance = $row['balance'];
$login = $row['login'];
$user_id = $row['id'];
$startblackjack = $row['startblackjack'];
}
$sql_select2 = "SELECT * FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$bet = $row['bet'];
$player = $row['player'];
$diller = $row['diller'];
$cards_player = $row['cards_player'];
$cards_diller = $row['cards_diller'];
$split = $row['split'];
$can_split = $row['can_split'];
$player_suit = $row['player_suit'];
}

$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}

if($_SESSION['timestamp'] + 2 > time()){
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
}
else{
$_SESSION['timestamp'] = time();
}

      if ($can_split != 1){
      	$newbalance = $balance;
         $error = 97;
         $mess = "Ошибка";
         $fa = "error";
      }

      if($startblackjack != 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Начните игру";
         $fa = "error";
       }
         if ($split != 0){

 $newbalance = $balance;
         $error = 97;
         $mess = "Ошибка";
         $fa = "error";
         }

       if($ban == 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Ваш аккаунт заблокирован";
         $fa = "error";
       }



       $split = 0;

	if ($error == 0){
		$cards_player = json_decode($cards_player);
		$cards_diller = json_decode($cards_diller);
		$new_fitst_card = $cards_player[0];
		$split_1 = rand(2, 10);
		$sum_cards_split_1 = $new_fitst_card + $split_1;
		$cards_split_1 = [$new_fitst_card, $split_1];
		$split_2 = rand(2, 10);
		$sum_cards_split_2 = $new_fitst_card + $split_2;
		$cards_split_2 = [$new_fitst_card, $split_2];

		$player_suit = json_decode($player_suit);
		$s1 = $player_suit[0];
		$s2 = $player_suit[1];

		$s1_1 = rand(0,3);
		$split_suit_1 = [$s1, $s1_1];

		$s2_2 = rand(0,3);
		$split_suit_2 = [$s2, $s2_2];


		$split_suit_1 = array_map('intval', $split_suit_1);
		$split_suit_2 = array_map('intval', $split_suit_2);
		$split_suit_1 = json_encode($split_suit_1);
		$split_suit_2 = json_encode($split_suit_2);

		$cards_split_1 = array_map('intval', $cards_split_1);
		$cards_split_2 = array_map('intval', $cards_split_2);
		$cards_split_1 = json_encode($cards_split_1);
		$cards_split_2 = json_encode($cards_split_2);
		$split = 1;
			mysqli_query($conn,"UPDATE svuti_users set balance=$balance - $bet WHERE hash='$sid'");
		$newbalance = $balance - $bet;
		mysqli_query($conn,"UPDATE blackjack set split_suit_2='$split_suit_2', split_suit_1='$split_suit_1',split=1,cards_split_1='$cards_split_1',cards_split_2='$cards_split_2',sum_cards_split_1='$sum_cards_split_1', sum_cards_split_2='$sum_cards_split_2' WHERE user_id='$user_id' and off=1");


		 $fa = "success";
	}


	$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'cards_split_1' => "$cards_split_1",
    'cards_split_2' => "$cards_split_2",
    'sum_cards_split_1' => "$sum_cards_split_1",
    'sum_cards_split_2' => "$sum_cards_split_2",
    'split' => $split,
	'game_off' => "$game_off",
	'split_suit_1' => "$split_suit_1",
	'split_suit_2' => "$split_suit_2",

    );

}

if($type == "double_BJ") {

$sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$balance = $row['balance'];
$login = $row['login'];
$sliv = $row['sliv'];
$baltype = $row['baltype'];
$user_id = $row['id'];
$startblackjack = $row['startblackjack'];
}


$sql_select2 = "SELECT * FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$bet = $row['bet'];
$player = $row['player'];
$diller = $row['diller'];
$double_card = $row['double_card'];
$cards_player = $row['cards_player'];
$cards_diller = $row['cards_diller'];
}

$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}

if($_SESSION['timestamp'] + 2 > time()){
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
}
else{
// $_SESSION['timestamp'] = time();
}


  if($double_card != 0){
  		$newbalance = $balance;
         $error = 97;
         $mess = "Ошибка";
         $fa = "error";
  }
  if ($balance < $bet){
  	$newbalance = $balance;
         $error = 97;
         $mess = "Недостаточно средств";
         $fa = "error";
  }

      if($startblackjack != 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Начните игру";
         $fa = "error";
       }


       if($ban == 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Ваш аккаунт заблокирован";
         $fa = "error";
       }





	if ($error == 0){
	$hashGame = hash("md5", mt_rand(0,10000000));
	$saltGame = 1000 / mt_rand(1000,9999);
$sql_select2 = "SELECT id FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
$idGame = $row['id'];		
		$cards_player = json_decode($cards_player);
		$cards_diller = json_decode($cards_diller);
		$r = rand(2, 10);
        if($sliv != 1){
          $pWin = $bet * 2;
	      if($pWin*(-1) < $minBank - $bank_dep)
          {
	         $minGen = 21 - $player + 1;
			 $r = rand($minGen, 10);		 
          }	  
	      if($bank_dep < $xuyBank && $xuyBank != 0)
	      {
	         $minGen = 21 - $player + 1;
			 $r = rand($minGen, 10);			 
	      }	  
	      if($bank_dep < 0)
	      {
	         $minGen = 21 - $player + 1;
			 $r = rand($minGen, 10);				 
	      }
        }
        else{		
			$r = rand(2,10);
		}
		$player = $player + $r;
		array_push($cards_player, $r);
		$game_off = 0;

		mysqli_query($conn,"UPDATE svuti_users set balance=$balance - $bet WHERE hash='$sid'");
		$newbalance = $balance - $bet;

		$cards_player = array_map('intval', $cards_player);
		$cards_diller = array_map('intval', $cards_diller);
		$cards_player = json_encode($cards_player);
		$cards_diller = json_encode($cards_diller);
		mysqli_query($conn,"UPDATE blackjack set double_card=2,cards_player='$cards_player', player='$player', bet=$bet * 2 WHERE user_id='$user_id' and off=1");
		if($player > 21){
			$game_off = 1;
			$mess = "Диллер выиграл";
				mysqli_query($conn,"UPDATE svuti_users set startblackjack=0 WHERE hash='$sid'");
			mysqli_query($conn,"UPDATE blackjack set off=2 WHERE user_id='$user_id' and off=1");
			
		    if($sliv != 1){
            if($baltype == "bonus")
            {	
	           $pizdak = ($bet * 2) * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		   }	
		   }			

		}



			if($player == 21){
				
             if($sliv != 1){
             $xs = ($bet * 2) * 1.5;
             if($baltype == "deposit")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             if($baltype == "bonus")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             }
			 
			$game_off = 2;
			$bet = $bet * 2;
			mysqli_query($conn,"UPDATE svuti_users set balance=$balance + ($bet * 2),  startblackjack=0 WHERE hash='$sid'");
			$newbalance = $balance + ($bet * 2);
			$mess = "Игрок выиграл";
	$mode_live = "Blackjack Game";
    $coeff_live = 2;
    $profit_live = $bet * 2;
    $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$login}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
    mysqli_query($conn, $insert_live);					
				$newbalance = $balance;
			mysqli_query($conn,"UPDATE blackjack set off=2 WHERE user_id='$user_id' and off=1");

		}
		 $fa = "success";
	}


	$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'diller' => "$diller",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'idGame' => "$idGame",
    'player' => "$player",
    'cards_player' => "$cards_player",
    'cards_diller' => "$cards_diller",
	'game_off' => "$game_off",
	'new_balance' => "$newbalance"
    );

}


if($type == "take_BJ")
{
$sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$balance = $row['balance'];
$login = $row['login'];
$user_id = $row['id'];
$sliv = $row['sliv'];
$startblackjack = $row['startblackjack'];
$baltype = $row['baltype'];
}


$sql_select2 = "SELECT * FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$bet = $row['bet'];
$player = $row['player'];
$diller = $row['diller'];
$cards_player = $row['cards_player'];
$cards_diller = $row['cards_diller'];
$split = $row['split'];
$cards_split_1 = $row['cards_split_1'];
$cards_split_2 = $row['cards_split_2'];
$sum_cards_split_1 = $row['sum_cards_split_1'];
$sum_cards_split_2 = $row['sum_cards_split_2'];
$diller_suit = $row['diller_suit'];
$player_suit = $row['player_suit'];

$split_suit_1 = $row['split_suit_1'];
$split_suit_2 = $row['split_suit_2'];
}

$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}

if($_SESSION['timestamp'] + 2 > time()){
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
}
else{
$_SESSION['timestamp'] = time();
}



           if($startblackjack != 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Начните игру";
         $fa = "error";
       }


       if($ban == 1) {
         $newbalance = $balance;
         $error = 97;
         $mess = "Ваш аккаунт заблокирован";
         $fa = "error";
       }




       if($error != 0){
       		$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    );
       }
	if ($error == 0){
	$hashGame = hash("md5", mt_rand(0,10000000));
	$saltGame = 1000 / mt_rand(1000,9999);
$sql_select2 = "SELECT id FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
$idGame = $row['id'];
	
		if($split == 0){
		$cards_player = json_decode($cards_player);
		$cards_diller = json_decode($cards_diller);
		$r = rand(2, 10);
		
        if($sliv != 1){
          $pWin = $bet * 2 - $bet;
	      if($pWin*(-1) < $minBank - $bank_dep)
          {
	         $minGen = 21 - $player + 1;
			 $r = rand($minGen, 10);		 
          }	  
	      if($bank_dep < $xuyBank && $xuyBank != 0)
	      {
	         $minGen = 21 - $player + 1;
			 $r = rand($minGen, 10);				 
	      }	  
	      if($bank_dep < 0)
	      {
	         $minGen = 21 - $player + 1;
			 $r = rand($minGen, 10);
	      }
        }
		else{
		  if($player + $r > 17){
			$r = rand($r, 10);
		  }
		  if($player + $r == 21){
			$r = rand(2, 5);
		  }	
		}
				
		$player = $player + $r;
		array_push($cards_player, $r);
		$game_off = 0;



		$cards_player = array_map('intval', $cards_player);
		$cards_diller = array_map('intval', $cards_diller);
		$cards_player = json_encode($cards_player);
		$cards_diller = json_encode($cards_diller);


		$player_suit_1 = rand(0,3);
			$player_suit = json_decode($player_suit);
    	array_push($player_suit, $player_suit_1);
       	$player_suit = array_map('intval', $player_suit);
       $player_suit = json_encode($player_suit);





		mysqli_query($conn,"UPDATE blackjack set player_suit='$player_suit', cards_player='$cards_player', double_card=1,can_split=0, player='$player' WHERE user_id='$user_id' and off=1");
		if($player > 21){
			$game_off = 1;
			
			$mess = "Диллер выиграл";
			$newbalance = $balance;
			mysqli_query($conn,"UPDATE svuti_users set startblackjack=0 WHERE hash='$sid'");
			mysqli_query($conn,"UPDATE blackjack set off=2 WHERE user_id='$user_id' and off=1");
			
		    if($sliv != 1){
            if($baltype == "bonus")
            {	
	           $pizdak = $bet * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		   }	
		   }	

		}

		if($player == 21){
             if($sliv != 1){
             $xs = ($bet * 2 - $bet) * 1.5;
             if($baltype == "deposit")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             if($baltype == "bonus")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             }			
			$game_off = 2;
			$mess = "Игрок выиграл";
			$newbalance = $balance + ($bet * 2);
			mysqli_query($conn,"UPDATE svuti_users set balance=$newbalance, startblackjack=0 WHERE hash='$sid'");
			mysqli_query($conn,"UPDATE blackjack set off=2 WHERE user_id='$user_id' and off=1");

		}

		 $fa = "success";
		$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'diller' => "$diller",
    'player' => "$player",
    'cards_player' => "$cards_player",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",	
	'idGame' => "$idGame",	
    'cards_diller' => "$cards_diller",
	'game_off' => "$game_off",
	'split' => 0,
	'player_suit' => "$player_suit"
    );
		}






		///////////////////////////////////

		if ($split == 1){

		$cards_split_1 = json_decode($cards_split_1);
		$r = rand(2, 10);
		$sum_cards_split_1 = $sum_cards_split_1 + $r;
		array_push($cards_split_1, $r);
		$game_off = 0;



		$cards_split_1 = array_map('intval', $cards_split_1);
		$cards_split_1 = json_encode($cards_split_1);


		$split_suit_1 = json_decode($split_suit_1);
		$s = rand(0,3);
		array_push($split_suit_1, $s);
		$split_suit_1 = array_map('intval', $split_suit_1);
		$split_suit_1 = json_encode($split_suit_1);

		$spliting = 1;
		if($sum_cards_split_1 > 21){
			$spliting = 2;
			
		    if($sliv != 1){
            if($baltype == "bonus")
            {	
	           $pizdak = $bet * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		   }	
		   }			

		}

		if($sum_cards_split_1 == 21){
			$spliting = 2;
			
             if($sliv != 1){
             $xs = ($bet * 2 - $bet) * 1.5;
             if($baltype == "deposit")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             if($baltype == "bonus")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             }				

		}
			mysqli_query($conn,"UPDATE blackjack set split_suit_1='$split_suit_1',split='$spliting', cards_split_1='$cards_split_1', sum_cards_split_1='$sum_cards_split_1' WHERE user_id='$user_id' and off=1");




				 $fa = "success";
		$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'cards_split_1' => "$cards_split_1",
	'hashGame' => "$hashGame",
	'idGame' => "$idGame",	
	'saltGame' => "$saltGame",	
    'cards_split_2' => "$cards_split_2",
    'sum_cards_split_1' => "$sum_cards_split_1",
    'sum_cards_split_2' => "$sum_cards_split_2",
    'split' => $spliting,
	'game_off' => "$game_off",
	'split_suit_1' =>"$split_suit_1"
    );
		}

		///////////////////////////////////

		if ($split == 2){

		$cards_split_2 = json_decode($cards_split_2);
		$r = rand(2, 10);
		$sum_cards_split_2 = $sum_cards_split_2 + $r;
		array_push($cards_split_2, $r);
		$game_off = 0;



		$cards_split_2 = array_map('intval', $cards_split_2);
		$cards_split_2 = json_encode($cards_split_2);

		$spliting = 2;
		if($sum_cards_split_2 > 21){
			$spliting = 2;
			$game_off = 1;
			
		    if($sliv != 1){
            if($baltype == "bonus")
            {	
	           $pizdak = $bet * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		   }	
		   }			
		}

		if($sum_cards_split_2 == 21){
			$spliting = 2;
			$game_off = 1;
			
             if($sliv != 1){
             $xs = ($bet * 2 - $bet) * 1.5;
             if($baltype == "deposit")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             if($baltype == "bonus")
             {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
             } 
             }					

		}
			mysqli_query($conn,"UPDATE blackjack set split='$spliting', cards_split_2='$cards_split_2', sum_cards_split_2='$sum_cards_split_2' WHERE user_id='$user_id' and off=1");


	$fa = "success";
		$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'cards_split_1' => "$cards_split_1",
    'cards_split_2' => "$cards_split_2",
    'sum_cards_split_1' => "$sum_cards_split_1",
	'idGame' => "$idGame",	
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",	
    'sum_cards_split_2' => "$sum_cards_split_2",
    'split' => $spliting,
	'game_off' => "$game_off"
    );
		}

	}

}

if($type == "stop_BJ") {

$sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$startblackjack = $row['startblackjack'];
$balance = $row['balance'];
$login = $row['login'];
$user_id = $row['id'];
$baltype = $row['baltype'];
}
$sql_select2 = "SELECT * FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$bet = $row['bet'];
$player = $row['player'];
$diller = $row['diller'];
$cards_player = $row['cards_player'];
$cards_diller = $row['cards_diller'];
$diller_card_hidden = $row['diller_card_hidden'];
$split = $row['split'];
$cards_split_1 = $row['cards_split_1'];
$cards_split_2 = $row['cards_split_2'];
$sum_cards_split_1 = $row['sum_cards_split_1'];
$sum_cards_split_2 = $row['sum_cards_split_2'];
$diller_suit = $row['diller_suit'];
$diller_suit_hidden = $row['diller_suit_hidden'];
}

$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}

if($_SESSION['timestamp'] + 1 > time()){
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
}
else{
$_SESSION['timestamp'] = time();
}


if($startblackjack != 1)
{
  $newbalance = $balance;
  $error = 97;
  $mess = "Начните игру";
  $fa = "error";
}



if($ban == 1)
{
   $newbalance = $balance;
   $error = 97;
   $mess = "Ваш аккаунт заблокирован";
   $fa = "error";
}


if($error != 0)
{
    $result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    );
}



	if ($error == 0){
	$hashGame = hash("md5", mt_rand(0,10000000));
	$saltGame = 1000 / mt_rand(1000,9999);
$sql_select2 = "SELECT id FROM blackjack WHERE user_id='$user_id' and off=1";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
$idGame = $row['id'];	

		if($split == 0){
		$cards_player = json_decode($cards_player);
		$diller_suit = json_decode($diller_suit);

		array_push($diller_suit, $diller_suit_hidden);


		$diller = $diller + $diller_card_hidden;
		$cards_diller = json_decode($cards_diller);
		array_push($cards_diller, $diller_card_hidden);

		while ($diller < 17){
       	$card_d = rand(2, 10);
       	//if ($diller + $card_d > 21){
       	//	$card_d = rand(2, 10);
       	//}
       	$diller += $card_d;
       	array_push($cards_diller, $card_d);


       	$diller_suit_1 = rand(0,3);
    	array_push($diller_suit, $diller_suit_1);

       }


       	$diller_suit = array_map('intval', $diller_suit);
       $diller_suit = json_encode($diller_suit);


     if ($diller > $player and $diller <= 21){
		 if($sliv != 1){
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		 }		 
     	$newbalance = $balance;
     	$mess = 'Диллер выиграл';
        $game_off = 1;
     }else if($diller == $player){
     		$newbalance = $balance + $bet;
     		$mess = 'Ничья';
     		$game_off = 3;
     }else{		 
     	$newbalance = $balance + ($bet * 2);
     	$mess = 'Игрок выиграл';
     	$game_off = 2;
		
	$mode_live = "Blackjack Game";
    $coeff_live = 2;
    $profit_live = $bet * 2;
    $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$login}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
    mysqli_query($conn, $insert_live);		
		
        if($sliv != 1){
        $xs = ($bet * 2 - $bet) * 1.5;
        if($baltype == "deposit")
        {
	       $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
           mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
        } 
        if($baltype == "bonus")
        {
	       $pWin = $pWin * 1.5; 
	       $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
           mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
        } 
        }		
     }

    		mysqli_query($conn,"UPDATE svuti_users set balance=$newbalance, startblackjack=0 WHERE id='$user_id'");
		mysqli_query($conn,"UPDATE blackjack set off=2 WHERE user_id='$user_id'");
		 $fa = "success";


	$cards_diller = array_map('intval', $cards_diller);
	$cards_player = json_encode($cards_player);
	$cards_diller = json_encode($cards_diller);
	$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'diller' => "$diller",
    'player' => "$player",
	'idGame' => "$idGame",
    'cards_player' => "$cards_player",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
    'cards_diller' => "$cards_diller",
    'game_off'=>"$game_off",
    'split' => 0,
'diller_suit' => $diller_suit,
    );
	}

	if ($split == 1){
		$splitting = 2;
		 $fa = "success";
		 	mysqli_query($conn,"UPDATE blackjack set split=2 WHERE user_id='$user_id' and off=1");


			$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$newbalance",
    'diller' => "$diller",
	'idGame' => "$idGame",	
    'player' => "$player",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",	
    'cards_player' => "$cards_player",
    'cards_diller' => "$cards_diller",
    'game_off'=>"$game_off",
    'split' => $splitting,
		);

	}

	if($split == 2){
		$splitting = 0;
		 $fa = "success";
		mysqli_query($conn,"UPDATE blackjack set split='$spliting' WHERE user_id='$user_id' and off=1");



		$no_cards_diller = 0;

		$diller = $diller + $diller_card_hidden;
		$cards_diller = json_decode($cards_diller);
		array_push($cards_diller, $diller_card_hidden);

		while ($diller < 17){
       	$card_d = rand(2, 10);
       	$diller += $card_d;
       	array_push($cards_diller, $card_d);
       }


     if ($sum_cards_split_1 <= 21){
     if ($diller > $sum_cards_split_1 and $diller <= 21){
     	$newbalance1 = $balance;
     	$mess = 'Диллер выиграл';
        $game_off_split_1 = 1;
		 if($sliv != 1){
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		 }			
     }else if($diller == $sum_cards_split_1){
     		$newbalance1 = $balance + $bet;
     			$mess = 'Ничья';
     				$game_off_split_1 = 3;					
     }else {
     	if ($sum_cards_split_1 <= 21){
     	$newbalance1 = $balance + ($bet * 2);
     	$mess = 'Игрок выиграл';
	$mode_live = "Blackjack Game";
    $coeff_live = 2;
    $profit_live = $bet * 2;
    $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$login}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
    mysqli_query($conn, $insert_live);				
     	$game_off_split_1 = 2;
        if($sliv != 1){
        $xs = ($bet * 2 - $bet) * 1.5;
        if($baltype == "deposit")
        {
	       $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
           mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
        } 
        if($baltype == "bonus")
        {
	       $pWin = $pWin * 1.5; 
	       $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
           mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
        } 
        }			
     	}else{
     			$newbalance1 = $balance;
     	}
     }
     }else{
     		$newbalance1 = $balance;
     		$no_cards_diller += 1;
     		$game_off_split_1 = 1;
     }

     mysqli_query($conn,"UPDATE svuti_users set balance=$newbalance1, startblackjack=0 WHERE id='$user_id'");


     $sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$balance = $row['balance'];

}

     if ($sum_cards_split_2 <= 21){
     if ($diller > $sum_cards_split_2 and $diller <= 21){
     	$newbalance = $balance;
     	$mess = 'Диллер выиграл';
     	$game_off_split_2 = 1;
		 if($sliv != 1){
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		 }			
     }else if($diller == $sum_cards_split_2){
     		$newbalance = $balance + $bet;
     	    $mess = 'Ничья';
     	    $game_off_split_2 = 3;				
     }else{
     	if ($sum_cards_split_2 <= 21){
     	$newbalance1 = $balance + ($bet * 2);
     	$mess = 'Игрок выиграл';
     	$game_off_split_2 = 2;
	$mode_live = "Blackjack Game";
    $coeff_live = 2;
    $profit_live = $bet * 2;
    $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$login}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
    mysqli_query($conn, $insert_live);				
        if($sliv != 1){
        $xs = ($bet * 2 - $bet) * 1.5;
        if($baltype == "deposit")
        {
	       $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
           mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
        } 
        if($baltype == "bonus")
        {
	       $pWin = $pWin * 1.5; 
	       $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xs' WHERE id='1'";
           mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
        } 
        }		
     	}
     }
     }else{
     		$newbalance = $balance;
     		$no_cards_diller += 1;
     		$game_off_split_2 = 1;
     }
     mysqli_query($conn,"UPDATE svuti_users set balance=$newbalance, startblackjack=0 WHERE id='$user_id'");


      $sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$balance = $row['balance'];

}
		mysqli_query($conn,"UPDATE blackjack set off=2 WHERE user_id='$user_id'");
		 $fa = "success";
		 $cards_diller = json_encode($cards_diller);

		 if ($no_cards_diller == 2){
		 	$no_diller = 1;
		 	$game_off_split_1 = 1;
		 	$game_off_split_2 = 1;
		 }else{
		 	$no_diller = 0;
		 }
			$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => "$balance",
    'diller' => "$diller",
    'sum_cards_split_1' => "$sum_cards_split_1",
    'sum_cards_split_2' => "$sum_cards_split_2",
    'cards_diller' => "$cards_diller",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",	
    'game_off_split_1'=>"$game_off_split_1",
	'idGame' => "$idGame",	
    'game_off_split_2'=>"$game_off_split_2",
    'split' => $splitting,
    'no_diller' => $no_diller
		);
	}
	}
}

if($type == "start_BJ")
{
$bet = $_POST['bet'];
$sql_select2 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$resultult2 = mysqli_query($conn,$sql_select2);
$row = mysqli_fetch_array($resultult2);
if($row)
{
$startblackjack = $row['startblackjack'];
$balance = $row['balance'];
$login = $row['login'];
$user_id = $row['id'];
$wager = $row['wager'];
$sliv = $row['sliv'];
}

$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}

if($_SESSION['timestamp'] + 2 > time()){
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
}
else{
$_SESSION['timestamp'] = time();
}

if($startblackjack != 0)
{
  	$newbalance = $balance;
  	$error = 4;
  	$mess = "У вас уже есть активная игра";
  	$fa = "error";
}

if($bet > $balance)
{
    $newbalance = $balance;
    $error = 4;
    $mess = "Недостаточно средств";
    $fa = "error";
}

if($ban == 1)
{
    $newbalance = $balance;
    $error = 97;
    $mess = "Ваш аккаунт заблокирован";
    $fa = "error";
}

if($bet < 1)
{
   $newbalance = $balance;
   $error = 64;
   $mess = "Ставки от 1";
   $fa = "error";
}

if(!is_numeric($bet))
{
   $newbalance = $balance;
   $error = 77;
   $mess = "Введите сумму корректно";
   $fa = "error";
}

if($error == 0)
{
	   $diller_1 = rand(2, 10);
       $diller_2 = rand(2, 10);
	   
       $player_1 = rand(2, 10);
       $player_2 = rand(2, 10);	   
	   
       if($sliv != 1){
          $pWin = $bet * 2 - $bet;
	      if($pWin*(-1) < $minBank - $bank_dep)
          {
	         $diller_1 = rand(7, 10);
             $diller_2 = rand(10, 10);
             $player_1 = rand(2, 6);
             $player_2 = rand(10, 10);					 
          }	  
	      if($bank_dep < $xuyBank && $xuyBank != 0)
	      {
	         $diller_1 = rand(7, 10);
             $diller_2 = rand(10, 10);
             $player_1 = rand(2, 6);
             $player_2 = rand(10, 10);					 
	      }	  
	      if($bank_dep < 0)
	      {
	         $diller_1 = rand(7, 10);
             $diller_2 = rand(10, 10);
             $player_1 = rand(2, 6);
             $player_2 = rand(10, 10);			 
	      }  

		  $pWin2 = $bet * 2;
	      if($pWin2*(-1) < $minBank - $bank_dep)
          {
	         $diller_1 = rand(7, 10);
             $diller_2 = rand(10, 10);
             $player_1 = rand(2, 6);
             $player_2 = rand(10, 10);					 
          }	  		  
        }
		
       $diller_m = json_encode([$diller_1]);


       $player_1_2 = $player_1 + $player_2;
       $player_m = json_encode([$player_1, $player_2]);
       $can_split = 0;
       if ($player_1 == $player_2){
       	$can_split = 1;
       }

       $player_suit_1 = rand(0,3);
       $player_suit_2 = rand(0,3);
       $player_suit = [$player_suit_1,  $player_suit_2];
       	$player_suit = array_map('intval', $player_suit);
       $player_suit = json_encode($player_suit);


        $diller_suit_1 = rand(0,3);
        $diller_suit_hidden = rand(0,3);
        $diller_suit = [$diller_suit_1];
         	$diller_suit = array_map('intval', $diller_suit);
       $diller_suit = json_encode($diller_suit);
		$newbalance = $balance - $bet;
		mysqli_query($conn,"UPDATE svuti_users set wager=$wager - $bet,balance=$balance - $bet, startblackjack=1 WHERE hash='$sid'");
		mysqli_query($conn,"INSERT INTO blackjack set diller_suit_hidden=$diller_suit_hidden,diller_suit='$diller_suit',player_suit='$player_suit',off='1',can_split=$can_split, user_id='$user_id', bet='$bet', diller_card_hidden='$diller_2', player='$player_1_2', diller='$diller_1', cards_player='$player_m', cards_diller='$diller_m'") or die("" . mysqli_error($conn));


		 $fa = "success";
	}

$result = array(
	'success' => "$fa",
	'error' => "$mess",
    'new_balance' => $newbalance,
    'diller' => "$diller_1",
    'player' => "$player_1_2",
    'cards_player' => $player_m,
    'cards_diller' => "$diller_m",
    'can_split' => "$can_split",
    'diller_suit' => "$diller_suit",
    'player_suit' => "$player_suit"
);

}
if ($type == "TakeBonus" ){
$sid = $_POST['sid'];
$sql_select1 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result1 = mysqli_query($conn, $sql_select1);
$row1 = mysqli_fetch_array($result1);
$what = time();
if($row1)
{
$user_id = $row1['id'];
$balance = $row1['balance'];
$baltype = $row1['baltype'];
$ban = $row1['ban'];
$email = $row1['email_new'];
$likesKd = $row1['likesKd'];
$vk_idd = $row1['bonus_url'];
if ($row1['bonusposts'] != null) $bonusposts = explode(' ',$row1['bonusposts']);
}
if(empty($vk_idd)){
$error = 3;
$fa = "error";
$mess = "Аккаунт не привязан!";	
}
if($ban == 1)
{
$error = 3;
$fa = "error";
$mess = "Вы заблокированы";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if ((($likesKd + 600) > time()) && (!is_null($likesKd)))
{
$error = 3;
$fa = "error";
$mess = "Запрос можно делать раз в час =(";
}
$bonus = 0;
if($error == 0)
{
$params = http_build_query(array(
'owner_id' => '-196560794',
'count'=>'9',
'v' => '5.52',
'access_token'=>'af90a34278c3e5ce5f4e8bde914b089337a5738d8fcde6bd580f5c1e102e713388bfdfc6373d74623c494'
));

$response = json_decode(file_get_contents("https://api.vk.com/method/wall.get?$params"),true);
$ids = array();
foreach($response["response"]["items"] as $item)
$ids[] = $item["id"];

$likedposts = array();

foreach ($ids as $id){
	if(in_array($id,$bonusposts))
		continue;
$request_params = array(
'user_id' => $vk_idd,
'type' => 'post',
'owner_id' => '-196560794',
'item_id' => $id,
'v' => '5.52',
'access_token'=>'af90a34278c3e5ce5f4e8bde914b089337a5738d8fcde6bd580f5c1e102e713388bfdfc6373d74623c494'
);
$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/likes.isLiked?'. $get_params),true);
if ( $result['error']['error_code'] == 15 ){
$errortrue = "У вас закрытый профиль!";
}
$like = false;
if ($result['response']['liked'] == 1 ){
$bonus += 0.5;
$like = true;
}
if ($result['response']['copied'] == 1 ){
$bonus += 1;
$like = true;
}
if ($like)
	$likedposts[] = $id;
}


$newbonusposts = $bonusposts == null ? implode(' ',$likedposts) : implode(' ', array_merge($bonusposts,$likedposts));
if ( !empty($errortrue) ){
$fa = 'error';
$mess = $errortrue;
}else{
if ( $bonus > 0 ){
$wagerBonus = $bonus * 4;	
mysqli_query($conn, "UPDATE `svuti_users` SET `bonusposts` = '$newbonusposts' WHERE `id` = '$user_id'");
$newbalance = round($balance + $bonus,2);
mysqli_query($conn, "UPDATE `svuti_users` SET `balance` = '$newbalance' WHERE `id` = '$user_id'");
if($bonus > $balance && $baltype != "bonus"){
	mysqli_query($conn, "UPDATE `svuti_users` SET `baltype` = 'bonus' WHERE `id` = '$user_id'");
}
$update_sql1 = "UPDATE bank_dep SET bank = bank + '$bonus' WHERE id='1'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
mysqli_query($conn, "UPDATE `svuti_users` SET `wager` = `wager` + '$wagerBonus' WHERE `id` = '$user_id'");
$fa = 'success';
$mess = "Получено $bonus монет";
mysqli_query($conn, "UPDATE `svuti_users` SET `likesKd` = '$what' WHERE `id` = '$user_id'");
}else{
$fa = 'error';
$error = 5;
$mess = 'Не найдено новых лайков.';
mysqli_query($conn, "UPDATE `svuti_users` SET `likesKd` = '$what' WHERE `id` = '$user_id'");
}
}
  $result = array(
    'success' => "$fa",
    'error' => "$mess",
	'bonusposts' => "$newbonusposts",
	'coins' => "$bonus",
    'balance'=>"$balance",
    "newbalance"=>"$newbalance"
  );
}
}
if($type == "otmena")
{
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Попробуйте позже";
$success = "no";
} 
if($error == 0){
$_SESSION['timestamp'] = time();	
$paysid = $_POST['sid'];
$payid = $_POST['id'];		
$sql_select = "SELECT * FROM svuti_payout WHERE id='$payid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$sumaohg = $row['suma'];
$status = $row['status'];
}
else{
$error = 3;
$fa = "error";
$mess = "Выплата не найдена!";
$success = "no";
}
if($status != "Ожидание"){
$error = 3;
$fa = "error";
$mess = "Выплату невозможно отменить!";
$success = "no";	
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$paysid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balanceotm = $row['balance'];
$baltype = $row['baltype'];
}
if($error == 0){
$otmenabalance = $balanceotm + $sumaohg;
$update_sqljf = "Update svuti_users set balance='$otmenabalance' WHERE hash='$paysid'";
mysqli_query($conn, $update_sqljf) or die("����ڧҧܧ� �ӧ��ѧӧܧ�" . mysqli_error());
if($baltype == "deposit"){
$update_sql1 = "Update bank_dep set maxBank = maxBank + '$sumaohg' WHERE id='1'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
}
$update_sql1 = "Update bank_withdraw set bank = bank + '$sumaohg' WHERE id='1'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
$paysgo2 = "DELETE FROM `svuti_payout` WHERE id = '$payid'";
mysqli_query($conn, $paysgo2) or die("" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$paysid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$outbalance = $row['balance'];
}
$fa = "success";
}
}
$result = array(
    'balance' => "$balanceotm",
	'success' => "$fa",
	'mess' => "$mess",
	'new_balance' => "$outbalance"
    );
}
if($type == "connectVK")
{
	$vk = $_POST['vk'];
	$sid = $_POST['sid'];

$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE bonus_url='$vk'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
$vkcount = $row['COUNT(*)'];
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
$bonus_url = $row['bonus_url'];
$referer = $row['referer'];
}
	if($vkcount >= 1)
	{
	$update_sql1 = "Update svuti_users set bonus_url='FAKE' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$fa = "error";
	$error = 5;
	$mess = "Вы уже привязывали этот аккаунт!";
	}
	if($vkcount == 0)
	{
		if($bonus_url == "")
	{
$user = explode( 'vk.com', $vk )[1];
$http = "https://";
$vks = str_replace($user, '', $vk);
$vks = str_replace($http, '', $vks);
if($vks == "vk.com" || $vks == "m.vk.com")
{
	//good
		$domainvk = explode( 'https://vk.com/id', $vk )[1];
if (!is_numeric($domainvk))
{
	$domainvk = explode( 'com/', $vk )[1];
}

		$vk1 = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$domainvk}&access_token=".$grtok."&v=5.74"));
        $vk1 = $vk1->response[0]->id;
	$resp = file_get_contents("https://api.vk.com/method/groups.isMember?group_id=".$grid."&user_id={$vk1}&access_token=".$grtok."&v=5.74");
$data = json_decode($resp, true);
if($data['response']=='1')
{
if($referer != ""){
	$update_sql1 = "Update svuti_users set balance = balance + '5' WHERE id='$referer'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
}
	$update_sql1 = "Update svuti_users set balance = balance + '10' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
	$update_sql1 = "Update svuti_users set bonus_url='$domainvk' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$fa = "success";
	$mess = "Бонус получен";
}
else
{
	$fa = "error";
	$error = 5;
	$mess = "Пользователь не найден";
}
	}
	}
	}
	// массив для ответа
    $result = array(
			'success' => "$fa",
			'error' => "$mess",
    );
}
if($type == "betRps")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$where = $_POST['where'];
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
if($balance < $bet){
	$error = 3;
    $fa = "error";
    $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($where != "rock" && $where != "paper" && $where != "scissors"){
	$error = 3;
    $fa = "error";
    $mess = "Ошибка выбора!";
}
if($where == "rock"){
	$numPlay = 1;
}
if($where == "paper"){
	$numPlay = 2;
}
if($where == "scissors"){
	$numPlay = 3;
}
if($error == 0)
{
$rWin = 0;
$hashGame = hash("md5", mt_rand(0,10000000));
$saltGame = 1000 / mt_rand(1000,9999);	
$pWinn = $bet * 1.95;

	   if($numPlay == 1){
		  $gens = mt_rand(1,3); 
		  if($sliv != 1){
             $pWin = $bet * 1.95 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
		  $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(2,2);
				}	     
	}
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		  $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(2,2);
				}	
	  }	  
	  if($bank_dep < 0)
	  {
		  $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(2,2);
				}	
	  }			 
          }
          if($maxPw != 0 && $balance > $maxPw){
	         $forlose = rand(0,100);
             if($pWinn >= $maxPw){
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(2,2);
				}	
             }
             else{
                if($forlose > 33){
                   $slivach = rand(1,2);
                   if($slivach == 1){
					  $gens = rand($numPlay,$numPlay);
				   }
         		   else{
					  $gens = rand(2,2);
				   }
                }
             }
          }
		  if($gens == $numPlay){
			  $win = 2;	
              $posWon = "paper";			  
		  }
		  if($gens == 3){
			  $posWon = "scissors";
			  $win = 1;
			  $rWin = $bet * 1.95 - $bet;
			  $update_sql1 = "Update svuti_users set balance = balance + '$rWin' WHERE hash='$sid'";
	          mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());	
              if($sliv != 1){
                 if($baltype == "deposit")
                 {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank - '$rWin' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
                 }
                 if($baltype == "bonus")
                 {
					$rWin = $rWin * 1.5;
	                $update_sql1 = "UPDATE bank_dep SET bank = bank - '$rWin' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
                 }   
              }				  
		  }
		  if($gens == 2){
			  $posWon = "rock";
			  $win = 0;
			  $update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
	          mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
			  if($baltype == "deposit")
              {
			     if($bank_dep + $bet < $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }
			     if($bank_dep + $bet >= $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }				
              } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }				  
		  }		  
	   }

	   if($numPlay == 2){
		  $gens = mt_rand(1,3); 
		  if($sliv != 1){
             $pWin = $bet * 1.95 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(3,3);
				}
      }
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(3,3);
				}
	  }	  
	  if($bank_dep < 0)
	  {
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(3,3);
				} 
	  }			   
          }
          if($maxPw != 0 && $balance > $maxPw){
	         $forlose = rand(0,100);
             if($pWinn >= $maxPw){
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(3,3);
				}	
             }
             else{
                if($forlose > 33){
                   $slivach = rand(1,2);
                   if($slivach == 1){
					  $gens = rand($numPlay,$numPlay);
				   }
         		   else{
					  $gens = rand(3,3);
				   }
                }
             }
          }
		  if($gens == $numPlay){
			  $win = 2;		
              $posWon = "scissors";			  
		  }
		  if($gens == 1){
			  $posWon = "paper";
			  $win = 1;
			  $rWin = $bet * 1.95 - $bet;
			  $update_sql1 = "Update svuti_users set balance = balance + '$rWin' WHERE hash='$sid'";
	          mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());	
              if($sliv != 1){
                 if($baltype == "deposit")
                 {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank - '$rWin' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
                 }
                 if($baltype == "bonus")
                 {
					$rWin = $rWin * 1.5;
	                $update_sql1 = "UPDATE bank_dep SET bank = bank - '$rWin' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
                 }   
              }				  
		  }
		  if($gens == 3){
			  $posWon = "rock";
			  $win = 0;
			  $update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
	          mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
			  if($baltype == "deposit")
              {
			     if($bank_dep + $bet < $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }
			     if($bank_dep + $bet >= $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }				
              } 
		 if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		  }		  
	   }

	   if($numPlay == 3){
		  $gens = mt_rand(1,3); 
		  if($sliv != 1){
             $pWin = $bet * 1.95 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(1,1);
				}	
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(1,1);
				}	
	  }	  
	  if($bank_dep < 0)
	  {
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(1,1);
				}	
	  }			  
          }
          if($maxPw != 0 && $balance > $maxPw){
	         $forlose = rand(0,100);
             if($pWinn >= $maxPw){
                $slivach = rand(1,2);
                if($slivach == 1){
					$gens = rand($numPlay,$numPlay);
				}
         		else{
					$gens = rand(1,1);
				}	
             }
             else{
                if($forlose > 33){
                   $slivach = rand(1,2);
                   if($slivach == 1){
					  $gens = rand($numPlay,$numPlay);
				   }
         		   else{
					  $gens = rand(1,1);
				   }
                }
             }
          }
		  if($gens == $numPlay){
			  $win = 2;		
			  $posWon = "paper";
		  }
		  if($gens == 2){
			  $posWon = "rock";
			  $win = 1;
			  $rWin = $bet * 1.95 - $bet;
			  $update_sql1 = "Update svuti_users set balance = balance + '$rWin' WHERE hash='$sid'";
	          mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());	
              if($sliv != 1){
                 if($baltype == "deposit")
                 {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank - '$rWin' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
                 }
                 if($baltype == "bonus")
                 {
					$rWin = $rWin * 1.5;
	                $update_sql1 = "UPDATE bank_dep SET bank = bank - '$rWin' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
                 }   
              }				  
		  }
		  if($gens == 1){
			  $posWon = "scissors";
			  $win = 0;
			  $update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
	          mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
			  if($baltype == "deposit")
              {
			     if($bank_dep + $bet < $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }
			     if($bank_dep + $bet >= $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }				
              } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }				  
		  }		  
	   }
	   
$insert = "INSERT INTO `rpsBets` (`user_id`, `bet`, `where`, `won`, `profit`) VALUES ('{$id}','{$bet}', '{$where}', '{$posWon}', '{$rWin}');";
mysqli_query($conn, $insert);
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
if($rWin > 0)
{
	$mode_live = "RPS Game";
    $coeff_live = 1.95;
    $profit_live = $bet * 1.95;
    $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
    mysqli_query($conn, $insert_live);
}
  
$sql_select = "SELECT balance FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$sql_select = "SELECT * FROM rpsBets WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['won'];
if($win == 2)
{
	$numberGame = $where;
}
if($win == 0)
{
	if($where == "rock")
	{
		$numberGame = "paper";
	}
	if($where == "paper")
	{
		$numberGame = "scissors";
	}	
	if($where == "scissors")
	{
		$numberGame = "rock";
	}		
}
if($win == 1)
{
   $numberGame = $where;	
}

$idGame = $row['id'];
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'idGame' => "$idGame",
	'numberGame' => "$numberGame",
	'saltGame' => "$saltGame",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'win' => "$win"
    );
}

if($type == "betBomba")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$where = $_POST['where'];
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];
$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
if($balance < $bet){
	$error = 3;
    $fa = "error";
    $mess = "Недостаточно средств!";
}
if($where != 1 && $where != 2 && $where != 3 && $where != 4){
	$error = 3;
    $fa = "error";
    $mess = "Ошибка";		
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{
$hashGame = hash("md5", mt_rand(0,10000000));
$saltGame = 1000 / mt_rand(1000,9999);	

$sql_update = "UPDATE svuti_users SET balance = balance - '$bet' WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_update);

	$pWinn = $bet * 4;
	$ballGen1 = mt_rand(1,4);
		  if($sliv != 1){
			  $ss = mt_rand(1,2);
             $pWin = $bet * 4 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}		
                if($where == 4){
					$ballGen1 = mt_rand(1,3);
				}     
	  }
	 
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		  $ss = mt_rand(1,2);
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}		
                if($where == 4){
					$ballGen1 = mt_rand(1,3);
				} 
	  }	  
	  if($bank_dep < 0)
	  {
		  $ss = mt_rand(1,2);
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}		
                if($where == 4){
					$ballGen1 = mt_rand(1,3);
				}
	  }			 
		  }
          if($maxPw != 0 && $balance > $maxPw){
	         $forlose = rand(0,100);
             if($pWinn >= $maxPw){
				$ss = mt_rand(1,2);
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
                if($where == 4){
					$ballGen1 = mt_rand(1,3);
				}					
             }
             else{
                if($forlose > 33){
				$ss = mt_rand(1,2);
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
                if($where == 4){
					$ballGen1 = mt_rand(1,3);
				}					
                }
             }
          }	
	if($ballGen1 == $where){
	   $win = 1;
	   $prof = $bet * 4;
	   $sql_update = "UPDATE svuti_users SET balance = balance + '$prof' WHERE hash='$sid'";
       $result = mysqli_query($conn, $sql_update);
	   $mode_live = "Defuse Game";
       $coeff_live = 4;
       $profit_live = $bet * 4;
       $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
       mysqli_query($conn, $insert_live);	
       if($sliv != 1){
          if($baltype == "bonus")
          {
			  $pizdos = ($prof - $bet) * 1.5;
	          $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pizdos' WHERE id='1'";
              mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
          }   
       }		   
	}
	else{
		$win = 0;
		$prof = 0;
			  if($baltype == "deposit")
              {
			     if($bank_dep + $bet < $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }
			     if($bank_dep + $bet >= $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }				
              } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }				  
	}

if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$insert = "INSERT INTO `bombGames` (`user_id`, `bet`, `where`, `generated`, `profit`) VALUES ('{$id}','{$bet}', '{$where}', '{$ballGen1}', '{$prof}');";
mysqli_query($conn, $insert) or die("Ошибка вставки" . mysqli_error($conn));
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		
$sql_select = "SELECT balance FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$sql_select = "SELECT * FROM bombGames WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['generated'];
$idGame = $row['id'];
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'idGame' => "$idGame",
	'numberGame' => "$numberGame",
	'saltGame' => "$saltGame",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'win' => "$win",
	'winSum' => "$prof",
	'ballGen1' => "$ballGen1",
    );
}

if($type == "betThimbles")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$balls = $_POST['balls'];
$where = $_POST['where'];
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
if($balls != 1 && $balls != 2){
	$error = 3;
    $fa = "error";
    $mess = "Выберите количество шариков!$balls";	
}
if($balance < $bet){
	$error = 3;
    $fa = "error";
    $mess = "Недостаточно средств!";
}
if($where != 1 && $where != 2 && $where != 3){
	$error = 3;
    $fa = "error";
    $mess = "Ошибка";		
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{
$hashGame = hash("md5", mt_rand(0,10000000));
$saltGame = 1000 / mt_rand(1000,9999);	

$sql_update = "UPDATE svuti_users SET balance = balance - '$bet' WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_update);
if($balls == 1){
	$pWinn = $bet * 2.9;
	$ballGen1 = mt_rand(1,3);
		  if($sliv != 1){
             $pWin = $bet * 2.9 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
      }
	 
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
	  }	  
	  if($bank_dep < 0)
	  {
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
	  }		
		  }	  
          if($maxPw != 0 && $balance > $maxPw){
	         $forlose = rand(0,100);
             if($pWinn >= $maxPw){
				$ss = mt_rand(1,2);
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
             }
             else{
                if($forlose > 33){
				$ss = mt_rand(1,2);
                if($where == 1){
					$ballGen1 = mt_rand(2,3);
				}	
                if($where == 2){
					if($ss == 1){
					  $ballGen1 = mt_rand(1,1);
					}
					else{
					  $ballGen1 = mt_rand(3,3);
					}
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,2);
				}
                }
             }
          }	
	if($ballGen1 == $where){
	   $win = 1;
	   $prof = $bet * 2.9;
	   $sql_update = "UPDATE svuti_users SET balance = balance + '$prof' WHERE hash='$sid'";
       $result = mysqli_query($conn, $sql_update);
	   $mode_live = "Thimbles Game";
       $coeff_live = 2.9;
       $profit_live = $bet * 2.9;
       $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
       mysqli_query($conn, $insert_live);	
       if($sliv != 1){
          if($baltype == "bonus")
          {
			  $pWin = ($prof - $bet) * 1.5; 
	          $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
              mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
          }   
       }		   
	}
	else{
		$win = 0;
		$prof = 0;
		if($sliv != 1){
			  if($baltype == "deposit")
              {
			     if($bank_dep + $bet < $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }
			     if($bank_dep + $bet >= $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }				
              }
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		}		 
	}
} 
if($balls == 2){
	$pWinn = $bet * 1.45; 	
	$ballGen1 = mt_rand(1,3);
	$ballGen2 = mt_rand(1,3);
	if($ballGen1 == $ballGen2){
	   if($ballGen2 == 1){
	      $ballGen1 = mt_rand(2,3);
	   }
	   else{
		  $ballGen1 = mt_rand(1,1);
	   }
	}
		  if($sliv != 1){
             $pWin = $bet * 1.45 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
                if($where == 1){
					$ballGen1 = mt_rand(2,2);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 2){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(2,2);
				}	
      }
	
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
                if($where == 1){
					$ballGen1 = mt_rand(2,2);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 2){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(2,2);
				}	
	  }	  
	  if($bank_dep < 0)
	  {
                if($where == 1){
					$ballGen1 = mt_rand(2,2);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 2){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(2,2);
				}	
	  }
          }
          if($maxPw != 0 && $balance > $maxPw){
	         $forlose = rand(0,100);
             if($pWinn >= $maxPw){
                if($where == 1){
					$ballGen1 = mt_rand(2,2);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 2){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(2,2);
				}
             }
             else{
                if($forlose > 33){
                if($where == 1){
					$ballGen1 = mt_rand(2,2);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 2){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(3,3);
				}	
                if($where == 3){
					$ballGen1 = mt_rand(1,1);
					$ballGen2 = mt_rand(2,2);
				}
                }
             }
          }	
	if($ballGen1 == $where || $ballGen2 == $where){
	   $win = 1;
	   $prof = $bet * 1.45;
	   $sql_update = "UPDATE svuti_users SET balance = balance + '$prof' WHERE hash='$sid'";
       $result = mysqli_query($conn, $sql_update);
	   $mode_live = "Thimbles Game";
       $coeff_live = 1.45;
       $profit_live = $bet * 1.45;
       $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
       mysqli_query($conn, $insert_live);
       if($sliv != 1){
          if($baltype == "bonus")
          {
			  $pWin = ($prof - $bet) * 1.5; 
	          $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
              mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
          }   
       }	   
	}
	else{
		$win = 0;
		$prof = 0;
		if($sliv != 1){
			  if($baltype == "deposit")
              {
			     if($bank_dep + $bet < $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }
			     if($bank_dep + $bet >= $maxBank)
			     {
	                $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			     }				
              }
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		}		 
	}
} 
if($balls == 1){
   $insert = "INSERT INTO `thimblesBets` (`user_id`, `bet`, `balls`, `where`, `generated`, `won`, `profit`) VALUES ('{$id}','{$bet}', '{$balls}', '{$where}', '{$ballGen1}', '{$win}', '{$prof}');";
   mysqli_query($conn, $insert) or die("Ошибка вставки" . mysqli_error($conn));
}
else{
   $insert = "INSERT INTO `thimblesBets` (`user_id`, `bet`, `balls`, `where`, `generated`, `won`, `profit`) VALUES ('{$id}','{$bet}', '{$balls}', '{$where}', '{$ballGen1},{$ballGen2}', '{$win}', '{$prof}');";
   mysqli_query($conn, $insert) or die("Ошибка вставки" . mysqli_error($conn));	
}
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
$sql_select = "SELECT balance FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$sql_select = "SELECT * FROM thimblesBets WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['generated'];
$idGame = $row['id'];
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'idGame' => "$idGame",
	'numberGame' => "$numberGame",
	'saltGame' => "$saltGame",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'win' => "$win",
	'winSum' => "$prof",
	'ballGen1' => "$ballGen1",
	'ballGen2' => "$ballGen2",
    );
}
if($type == "getCashback")
{
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
$error = false;
$sid = $_POST['sid'];
$today = time();
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$cashback = $row['cashback'];
$balance = $row['balance'];
$deposit = $row['deposit'];
}
$mathed = 100 - $deposit;
if($deposit < 0){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо пополнить на 100 <i class='fas fa-coins'></i><br>Осталось: ".number_format($mathed, 2, '.', ' ')." <i class='fas fa-coins'></i>";
}
if($cashback < 50){
	$error = 3;
    $fa = "error";
    $mess = "Минимум к получению 50 <i class='fas fa-coins'></i>";
}
else{
	   $balancenew = $balance + $cashback;
	   $update_sql1 = "Update svuti_users set balance = balance + '$cashback' WHERE hash='$sid'";
	   mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	   	   $update_sql1 = "Update svuti_users set cashback = '0' WHERE hash='$sid'";
	   mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	   $fa = "success";
	  
}
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'suma' => "$summa"
    );
}
if($type == "faucet")
{
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
$error = false;
$sid = $_POST['sid'];
$today = time();
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$deposit = $row['deposit'];
$faucet = $row['faucet'];
$email = $row['email_new'];
$bonus_url = $row['bonus_url'];
}
if(empty($bonus_url) || $bonus_url == "FAKE"){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо вступить в группу ВК!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if ((($faucet + 900) > time()) && (!is_null($faucet)))
{
$error = 3;
$fa = "error";
$mess = "Кран можно получать раз в 15 мин!";
}
if ($error == 0){
if($deposit == 0){
	$randAmount = mt_rand(1,10) / 100;
}
if($deposit > 0){
	$randAmount = mt_rand(1,12) / 100;
}
if($deposit > 25){
	$randAmount = mt_rand(1,18) / 100;
}
if($deposit >= 50){
	$randAmount = mt_rand(1,20) / 100;
}
if($deposit >= 100){
	$randAmount = mt_rand(1,25) / 100;
}
if($deposit >= 1000){
	$randAmount = mt_rand(1,30) / 100;
}
if($deposit >= 2000){
	$randAmount = mt_rand(1,100) / 100;
}
$balancenew = $balance + $randAmount;
$update_sql1 = "Update svuti_users set balance = balance + '$randAmount' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$update_sql1 = "Update svuti_users set faucet = '$today' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	   $update_sql1 = "UPDATE bank_dep SET bank = bank + '$randAmount' WHERE id='1'";
       mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
	  if($randAmount > $balance && $baltype != "bonus"){
	      mysqli_query("UPDATE `svuti_users` SET `baltype` = 'bonus' WHERE `hash` = '$sid'");
      }   
$fa = "success";	  
}	
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'fauc' => "$randAmount"
    );
}
if($type == "changeCode")
{
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
}
$sid = $_POST['sid'];
$password = $_POST['pass'];
$scode = $_POST['code'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$scode)){
	$mess = "Код не может состоять из спец. символов";
	$fa = "error";
	$error = 3;
}
$scode_count = strlen($scode);
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$userid = $row['id'];
$passbd = $row['password'];
$email = $row['email'];
}
if(hash('sha256', $password.$email.$sitesalt) != $passbd){
	$mess = "Неверный пароль!";
	$fa = "error";
	$error = 3;
}
if($scode_count < 6) {
	$mess = "Мин. 6 символов для поля <b>секретный код</b>!";
	$fa = "error";
	$error = 3;	
}
if($error == 0)
{
	   $update_sql1 = "Update svuti_users set secret_code = '$scode' WHERE hash='$sid'";
	   mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	   $fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
    );
}

if($type == "wager")
{
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
$error = false;
$sid = $_POST['sid'];
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$userid = $row['id'];
$wager = $row['wager'];
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$userid' AND freespins >= freespinsleft ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$fsleft = $row5['freespinsleft'];
}
if($fsleft > 0)
{
	$error = 3;
    $fa = "error";
    $mess = "Ошибка: Отыграйте Free Spins!";
}
if($wager <= 1){
	$error = 3;
    $fa = "error";
    $mess = "Ошибка: Вагер меньше или равен 1!";
}
if($error == 0)
{
	   $balancenew = "0";
	   $update_sql1 = "Update svuti_users set balance = '0' WHERE hash='$sid'";
	   mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
       $update_sql1 = "Update svuti_users set wager = '0' WHERE hash='$sid'";
	   mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	   $fa = "success";
	  
}
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
    );
}

if($type == "getBonus")
{
session_start(); 
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
}
$sid = $_POST['sid'];
$today = time();
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$loginwtf = $row['login'];
$balance = $row['balance'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
$bonus_url = $row['bonus_url'];
$email = $row['email_new'];
$bonus = $row['bonus'];
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if(empty($bonus_url) || $bonus_url == "FAKE"){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо вступить в группу ВК!";
}
$mathed = 50 - $deposit;
$gettoday = date('d-m-Y H:i:s');
if($deposit < 0){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо пополнить на 50.<br>Осталось: ".number_format($mathed, 2, '.', ' ')."";
}
if($deposit < 200){
	$randed = mt_rand(1,250) / 100;
}
if($deposit >= 200){
	$randed = mt_rand(100,300) / 100;
}
if($deposit >= 700){
	$randed = mt_rand(100,400) / 100;
}
if($deposit >= 1000){
	$randed = mt_rand(100,500) / 100;
}
$random4ik = $randed;
if ((($bonus + 86400) > time()) && (!is_null($bonus)))
{
$error = 3;
$fa = "error";
$mess = "Бонус можно забирать раз в сутки!";
}
if($error == 0){
	   $insert_sql3 = "INSERT INTO `daily` (`date`, `user`, `amount`) VALUES ('{$gettoday}', '{$loginwtf}', '{$randed}');";
       mysqli_query($conn, $insert_sql3);
	   $insert_sql3 = "UPDATE `svuti_users` SET `bonus` = ".$today." WHERE hash='$sid'";
       mysqli_query($conn, $insert_sql3);
	   $update_sql1 = "UPDATE bank_dep SET bank = bank + '$randed' WHERE id='1'";
       mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	 	   
	   if($randed > $balance && $baltype != "bonus"){
	       mysqli_query("UPDATE `svuti_users` SET `baltype` = 'bonus' WHERE `hash` = '$sid'");
       }
	   $update_sql1 = "Update svuti_users set balance = balance + '$randed' WHERE hash='$sid'";
	   mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	   $sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
       $result = mysqli_query($conn, $sql_select);
       $row = mysqli_fetch_array($result);
       $balancenew = $balance + $randed;
	   $fa = "success";
	  
}
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'bonus' => "$random4ik",
	'new_balance' => "$balancenew",
	'suma' => "$summa"
    );
}
if($type == "case1")
{
$caseId = 1;
$price = 5;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$logins = $row['login'];
$user_id = $row['id'];
$baltype = $row['baltype'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if($error == 0)
{ 
      $xd = mt_rand(0,100);
      if($xd > 80)
      {
         $rander = mt_rand($price, $price * 10);
      }
      else{
         $rander = mt_rand(1,$price);
      }
      $win = round($rander, 2);
	  
	  if($sliv != 1)
	  {
		$pWin = $win - $price; 
	    if($pWin*(-1) < $minBank - $bank_dep)
        {
           $win = mt_rand(1,$price-1);
        }
        if($bank_dep < $xuyBank && $xuyBank != 0)
	    {
		   $win = mt_rand(1,$price-1); 
	    }	  
	    if($bank_dep < 0)
	    {
		   $win = mt_rand(1,$price-1);
	    }
	  }
	  
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
	  $update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	  $balancenew = $balance - $price + $win;
	  $profit = $win - $price;
	  if($win > $price){
		 $okyp = "da";
		 if($sliv != 1){
		 if($baltype == "bonus")
         {
			$winZ = ($win - $price) * 1.5; 
	        $update_sql1 = "UPDATE bank_dep SET bank = bank - '$winZ' WHERE id='1'";
            mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
         } 
		 }		 
	  }
	  if($win < $price){
		 $okyp = "net";
		 if($sliv != 1){
		 if($baltype == "bonus")
         {	
	        $pizdak = ($price - $win) * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		 }
	  }
	   if($win == $price){
		  $okyp = "v nol";
	  }
	  $caseRands = 1;
	  $insert_sql1 = "INSERT INTO `cases` (`user_id`, `case_id`, `price`, `ticket`, `win`, `profit`, `okyp`) VALUES ('{$user_id}', '{$caseId}', '{$price}', '{$caseRands}', '{$win}', '{$profit}', '{$okyp}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error($conn));	  
	  if($okyp == "da" || $okyp == "v nol"){
	    $mode_live = "Cases";
        $coeff_live = $win / $price;
        $profit_live = $price * $coeff_live;
        $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$price}', '{$coeff_live}', '{$profit_live}');";
		mysqli_query($conn, $insert_live) or die("Ошибка вставки" . mysqli_error($conn));	  
	  }
	
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'profit' => "$win",
	'hashGame' => "$hashGame",
	'ticket' => "$caseRands",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "betRed")
{
$type = "red";
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
if(!preg_match('/^[0-9]+(\.?[0-9]+)?$/', $bet)){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{ 
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$pWinn = $bet * 2;
$rouletteRand = mt_rand(0,14);
if($sliv != 1){
   $rouletteRand = mt_rand(0,14);
   $pWin = $bet * 2 - $bet;
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $rouletteRand = mt_rand(8, 14);
    }
	
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $rouletteRand = mt_rand(8, 14);
	}	  
	if($bank_dep < 0)
	{
       $rouletteRand = mt_rand(8, 14);
	}      
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
	  $rouletteRand = mt_rand(8, 14); 
   }
   else{
   if($forlose > 33){
	  $rouletteRand = mt_rand(8, 14); 
   }
   }
}
if($rouletteRand > 7){
	$what = "black";
}
if($rouletteRand < 7 && $rouletteRand != 0){
	$what = "red";
}
if($rouletteRand == 0){
	$what = "green";
}
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
if($rouletteRand <=7 && $rouletteRand != 0){
	  $mode_live = "Roulette";
      $coeff_live = 2;
      $profit_live = $bet * 2;
	  if($coeff_live > 1){
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
	  }	
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$win = $bet * 2;
$okyp = "da";
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $pWin = ($bet * 2 - $bet) * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
}
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}	
$update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `roulette` (`user_id`, `type`, `number`, `bet`, `win`, `profit`) VALUES ('{$user_id}', '{$type}', '{$rouletteRand}', '{$bet}', '{$okyp}', '{$win}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $win - $bet;
$fa = "success";  
}
else{
if($sliv != 1){
         if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         }  
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
}	
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$win = "0";
$okyp = "net";
$insert_sql1 = "INSERT INTO `roulette` (`user_id`, `type`, `number`, `bet`, `win`, `profit`) VALUES ('{$user_id}', '{$type}', '{$rouletteRand}', '{$bet}', '{$okyp}', '{$win}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $win - $bet;
$fa = "success";  	
}
$sql_select = "SELECT * FROM roulette WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'what' => "$what",
	'error' => "$mess",
	'winroll' => "$win",
	'hashGame' => "$hashGame",
	'idGame' => "$idGame",
	'numberGame' => "$what",
	'saltGame' => "$saltGame",
	'rand' => "$rouletteRand",
	'soundcookie' => "$soundsB",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}

if($type == "Coinbet_red")
{
$type = "red";
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
if(!preg_match('/^[0-9]+(\.?[0-9]+)?$/', $bet)){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$logins = $row['login'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];
$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if($error == 0)
{
$hashGame = hash("md5", mt_rand(0,10000000));
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$pWinn = $bet * 2;
$flipResult = mt_rand(1,2);
if($sliv != 1){
   $pWin = $bet * 2 - $bet;
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $flipResult = mt_rand(2, 2);
    }
	
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $flipResult = mt_rand(2, 2);
	}	  
	if($bank_dep < 0)
	{
       $flipResult = mt_rand(2, 2);
	}     
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
	  $flipResult = mt_rand(2, 2);
   }
   else{
   if($forlose > 33){
	  $flipResult = mt_rand(2, 2);
   }
   }
}
$cfwin = $bet * 2;
$prof = "yes";
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
if($flipResult <=1){
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
   if($baltype == "bonus")
   {
	   $pWin = $bet * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
}		
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$resultBet = "Counter-Terrorists";
$update_sql1 = "Update svuti_users set balance = balance + '$cfwin' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `cfbets` (`user_id`, `bet`, `pick`, `win`, `profit`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$cfwin}', '{$prof}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $mode_live = "Coinflip";
      $coeff_live = 2;
      $profit_live = $bet * 2;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
$balancenew = $balance + $cfwin - $bet;
$fa = "success";  
}
else{
	if($sliv != 1){
         if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
	}		 
$cfwin = 0;
$prof = "no";	
$resultBet = "Terrorists";
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `cfbets` (`user_id`, `bet`, `pick`, `win`, `profit`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$cfwin}', '{$prof}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance - $bet;
$fa = "success";  
}
$sql_select = "SELECT * FROM cfbets WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['profit'];
if($numberGame == "yes"){
	$numberGame = "win";
}
else{
	$numberGame = "lose";
}
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'flipResult' => "$flipResult",
	'resultBet' => "$resultBet",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'saltGame' => "$saltGame",
	'idGame' => "$idGame",
	'soundcookie' => "$soundsB",
	'cfwin' => "$cfwin",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "Coinbet_gray")
{
$type = "gray";
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
if(!preg_match('/^[0-9]+(\.?[0-9]+)?$/', $bet)){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$logins = $row['login'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if(empty($email))
{
	$fa = "error";
	$error = 3;
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$pWinn = $bet * 2;
$flipResult = mt_rand(1,2);
if($sliv != 1){
   $pWin = $bet * 2 - $bet;
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $flipResult = mt_rand(1, 1);
    }
	
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $flipResult = mt_rand(1, 1);
	}	  
	if($bank_dep < 0)
	{
       $flipResult = mt_rand(1, 1);
	}    
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
	  $flipResult = mt_rand(1, 1);
   }
   else{
   if($forlose > 33){
	  $flipResult = mt_rand(1, 1);
   }
   }
}
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
$cfwin = $bet * 2;
$prof = "yes";
if($flipResult > 1){
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
   if($baltype == "bonus")
   {
	   $pWin = $bet * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
}		
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$resultBet = "Terrorists";
$update_sql1 = "Update svuti_users set balance = balance + '$cfwin' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `cfbets` (`user_id`, `bet`, `pick`, `win`, `profit`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$cfwin}', '{$prof}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $mode_live = "Coinflip";
      $coeff_live = 2;
      $profit_live = $bet * 2;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
$balancenew = $balance + $cfwin - $bet;
$fa = "success";  
}
else{
	if($sliv != 1){
         if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
	}
$cfwin = 0;
$prof = "no";	
$resultBet = "Counter-Terrorists";
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `cfbets` (`user_id`, `bet`, `pick`, `win`, `profit`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$cfwin}', '{$prof}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance - $bet;
$fa = "success";  
}
$sql_select = "SELECT * FROM cfbets WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['profit'];
if($numberGame == "yes"){
	$numberGame = "win";
}
else{
	$numberGame = "lose";
}
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'flipResult' => "$flipResult",
	'resultBet' => "$resultBet",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",	
	'soundcookie' => "$soundsB",
	'cfwin' => "$cfwin",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}

if($type == "betGreen")
{
$type = "green";
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
if(!preg_match('/^[0-9]+(\.?[0-9]+)?$/', $bet)){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$balance = $row['balance'];
$wager = $row['wager'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$logins = $row['login'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if($error == 0)
{ 
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$pWinn = $bet * 14;
$rouletteRand = mt_rand(0,14);
if($sliv != 1){
   $rouletteRand = mt_rand(0,14);
   $pWin = $bet * 2 - $bet;
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $rouletteRand = mt_rand(1, 14);
    }
	
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $rouletteRand = mt_rand(1, 14);
	}	  
	if($bank_dep < 0)
	{
       $rouletteRand = mt_rand(1, 14);
	}     
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
	  $rouletteRand = mt_rand(1, 14); 
   }
   else{
   if($forlose > 33){
	  $rouletteRand = mt_rand(1, 14); 
   }
   }
}
if($rouletteRand > 7){
	$what = "black";
}
if($rouletteRand < 7 && $rouletteRand != 0){
	$what = "red";
}
if($rouletteRand == 0){
	$what = "green";
}
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
if($rouletteRand == 0){
	  $mode_live = "Roulette";
      $coeff_live = 14;
      $profit_live = $bet * 14;
	  if($coeff_live > 1){
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
	  }
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
   if($baltype == "bonus")
   {
	  $pWin = ($bet * 14 - $bet) * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
}	  
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}	
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$win = $bet * 14;
$okyp = "da";
$update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `roulette` (`user_id`, `type`, `number`, `bet`, `win`, `profit`) VALUES ('{$user_id}', '{$type}', '{$rouletteRand}', '{$bet}', '{$okyp}', '{$win}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $win - $bet;
$fa = "success";  
}
else{
if($sliv != 1){
         if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
}	
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$win = "0";
$okyp = "net";
$insert_sql1 = "INSERT INTO `roulette` (`user_id`, `type`, `number`, `bet`, `win`, `profit`) VALUES ('{$user_id}', '{$type}', '{$rouletteRand}', '{$bet}', '{$okyp}', '{$win}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $win - $bet;
$fa = "success";  	
}
$sql_select = "SELECT * FROM roulette WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'what' => "$what",
	'winroll' => "$win",
	'hashGame' => "$hashGame",
	'idGame' => "$idGame",
	'numberGame' => "$what",
	'saltGame' => "$saltGame",
	'rand' => "$rouletteRand",
	'soundcookie' => "$soundsB",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "betBlack")
{
$type = "black";
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
if(!preg_match('/^[0-9]+(\.?[0-9]+)?$/', $bet)){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
$logins = $row['login'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if($error == 0)
{ 
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$pWinn = $bet * 2;
$rouletteRand = mt_rand(0,14);
if($sliv != 1){
   $rouletteRand = mt_rand(0,14);
   $pWin = $bet * 2 - $bet;  
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $rouletteRand = mt_rand(0, 7);
    }
	
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $rouletteRand = mt_rand(0, 7);
	}	  
	if($bank_dep < 0)
	{
       $rouletteRand = mt_rand(0, 7);
	}   
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
	  $rouletteRand = mt_rand(0, 7); 
   }
   else{
   if($forlose > 33){
	  $rouletteRand = mt_rand(0, 7); 
   }
   }
}
if($rouletteRand > 7){
	$what = "black";
}
if($rouletteRand < 7 && $rouletteRand != 0){
	$what = "red";
}
if($rouletteRand == 0){
	$what = "green";
}
$hashGame = hash("md5", mt_rand(0,10000000));
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
if($rouletteRand > 7 && $rouletteRand != 0){
	  $mode_live = "Roulette";
      $coeff_live = 2;
      $profit_live = $bet * 2;
	  if($coeff_live > 1){
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
	  }	
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $pWin = ($bet * 2 - $bet) * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }   
}	  
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$win = $bet * 2;
$okyp = "da";
$update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$insert_sql1 = "INSERT INTO `roulette` (`user_id`, `type`, `number`, `bet`, `win`, `profit`) VALUES ('{$user_id}', '{$type}', '{$rouletteRand}', '{$bet}', '{$okyp}', '{$win}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $win - $bet;
$fa = "success";  
}
else{
if($sliv != 1){
         if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         }
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
}	
$update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
$win = "0";
$okyp = "net";
$insert_sql1 = "INSERT INTO `roulette` (`user_id`, `type`, `number`, `bet`, `win`, `profit`) VALUES ('{$user_id}', '{$type}', '{$rouletteRand}', '{$bet}', '{$okyp}', '{$win}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $win - $bet;
$fa = "success";  	
}
$sql_select = "SELECT * FROM roulette WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'what' => "$what",
	'winroll' => "$win",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'idGame' => "$idGame",
	'numberGame' => "$what",
	'rand' => "$rouletteRand",
	'soundcookie' => "$soundsB",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "vkbonus")
{
	$vk = $_POST['vk'];
	$sid = $_POST['sid'];

	$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE bonus_url='$vk'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
$vkcount = $row['COUNT(*)'];
}
	$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
$vkcounts = $row['bonus_url'];
$bala = $row['balance'];
}
	if($vkcount == 1)
	{
	$update_sql1 = "Update svuti_users set bonus_url='FAKE' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$fa = "error";
	$error = 5;
	$mess = "Вы уже получали бонус";
	}
	if($vkcount == 0)
	{
		if($vkcounts == "")
	{
$user = explode( 'vk.com', $vk )[1];
$http = "https://";
$vks = str_replace($user, '', $vk);
$vks = str_replace($http, '', $vks);
if($vks == "vk.com" || $vks == "m.vk.com")
{

$domainvk = explode( 'https://vk.com/id', $vk )[1];
if (!is_numeric($domainvk))
{
	$domainvk = explode( 'com/', $vk )[1];
}
$sql_select = "SELECT * FROM svuti_users WHERE bonus_url='$domainvk'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$fa = "error";
	$error = 5;
	$mess = "Вы уже получали бонус!";
	$update_sql1 = "Update svuti_users set bonus_url='FAKE' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
}

		$vk1 = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$domainvk}&access_token=".$grtok."&v=5.74"));
        $vk1 = $vk1->response[0]->id;
	$resp = file_get_contents("https://api.vk.com/method/groups.isMember?group_id=".$grid."&user_id={$vk1}&access_token=".$grtok."&v=5.74");
$data = json_decode($resp, true);
if($error == 0)
{
	$update_sql1 = "Update svuti_users set balance = balance + '10' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$update_sql1 = "Update svuti_users set bonus_url='$domainvk' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$fa = "success";
	$mess = "Бонус получен";
}
else
{
	$fa = "error";
	$error = 5;
	$mess = $mess;
}
	}
	}
	}
	// массив для ответа
    $result = array(
			'success' => "$fa",
			'error' => "$mess",
			'balance' => "$bala",
			'new_balance' => "$balances",
    );
}
if($type == "slot")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
if(!preg_match('/^[0-9]+(\.?[0-9]+)?$/', $bet)){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$logins = $row['login'];
$balance = $row['balance'];
$wager = $row['wager'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];
$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row228 = mysqli_fetch_array($result5);
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$id' AND freespins >= freespinsleft ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$fs = $row5['freespins'];
$betfs = $row5['bet'];
$typefs = $row5['typefs'];
$fsleft = $row5['freespinsleft'];
$randbuy = $row5['randbuy'];
}
if($fsleft > 0)
{
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$bet = $row5['bet'];
if($bet != $row5['bet'])
{
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
//session_start(); 
//if($_SESSION['timestamp'] + 1 > time()){ 
//$error = 3;
//$fa = "error";
//$mess = "Не нужно нажимать так быстро!";
//else{
//$_SESSION['timestamp'] = time();
//}
if($error == 0){
$betcoef = 0;
$win = "no";
$coef = 0;
      
	  $num1 = mt_rand(0,9);
	  $num2 = mt_rand(0,9);
	  $num3 = mt_rand(1,9);

if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($forlose > 33){
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  $num3 = mt_rand(1,6);
   }
}

$combination = "$num1$num2$num3 (lost)";
if($num1 == 0 && $num2 == 0 && $num3 == 0)
{
$win = "yes";
$coef = 10;
$combination = "000";
}
elseif($num1 == 7 && $num2 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 100;
$combination = "777";
}
elseif($num1 == 9 && $num2 == 9 && $num3 == 9)
{
$win = "yes";
$coef = 50;
$combination = "999";
}
elseif($num1 == 5 && $num2 == 5 && $num3 == 5)
{
$win = "yes";
$coef = 30;
$combination = "555";
}
elseif($num1 == 1 && $num2 == 1 && $num3 == 1)
{
$win = "yes";
$coef = 20;
$combination = "111";
}
elseif($num1 == 1 && $num2 == 2 && $num3 == 3)
{
$win = "yes";
$coef = 5;
$combination = "123";
} 
elseif($num1 == 7 && $num2 == 7)
{
$win = "yes";
$coef = 5;
$combination = "77*";
}
elseif($num2 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 5;
$combination = "*77";
}
elseif($num1 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 4;
$combination = "7*7";
}
elseif($num1 == 7 || $num2 == 7 || $num3 == 7)
{
$win = "yes";
$coef = 2;
$combination = "ANY 7";
}
elseif($num2 == 0 && $num3 == 0)
{
$win = "yes";
$coef = 3;
$combination = "*00";
}
elseif($num1 == 0 && $num2 == 0)
{
$win = "yes";
$coef = 3;
$combination = "00*";
}
elseif($num1 == 0)
{
$win = "yes";
$coef = 1.5;
$combination = "0**";
}
if($typefs == "win" || $typefs == "buy"){
if($num1 == 7 && $num2 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 1000;
$combination = "777";
}
elseif($num1 == 0)
{
$win = "yes";
$coef = 5;
$combination = "0 [Bonus]";
}
elseif($num1 == 7 && $num2 == 7)
{
$win = "yes";
$coef = 50;
$combination = "Две 7 [Bonus]";
}
elseif($num1 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 50;
$combination = "Две 7 [Bonus]";
}
elseif($num2 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 50;
$combination = "Две 7 [Bonus]";
}
elseif($num1 == 7 || $num2 == 7 || $num3 == 7)
{
$win = "yes";
$coef = 10;
$combination = "Любая 7 [Bonus]";
}
}

if($sliv != 1){
    $pWin = ($bet * $coef) - $bet;  
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  if($num2 == 5)
	  {
		$num2 = mt_rand(8,8);  
	  }
	  $num3 = mt_rand(1,6);
	  $coef = 0;
	  $combination = "$num1$num2$num3 (lost)";
	}	  
	if($bank_dep < 0)
	{
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  if($num2 == 5)
	  {
		$num2 = mt_rand(8,8);  
	  }	  
	  $num3 = mt_rand(1,6);
	  $coef = 0;
	  $combination = "$num1$num2$num3 (lost)";
	}   
    if($pWin*(-1) < $minBank - $bank_dep)
    {
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  if($num2 == 5)
	  {
		$num2 = mt_rand(8,8);  
	  }	  
	  $num3 = mt_rand(1,6);
	  $coef = 0;
	  $combination = "$num1$num2$num3 (lost)";
    }	
}

$betcoef =  $coef * $bet;
$betcoefss =  $coef * $bet - $bet;
if($sliv != 1){
   if($baltype == "deposit" && $betcoef - $bet > $bank_dep * $otdachaDep / 100){
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  $num3 = mt_rand(1,6);
   }
   if($baltype == "bonus" && $betcoef - $bet > $bank_bon * 0.35){
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  $num3 = mt_rand(1,6);
   }   
}
$wagerFs = $betcoef * 5;
$count = $row2['count'];
$update_sql1 = "Update svuti_users set balance = balance + '$betcoef' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
if($sliv != 1){
$update_sql1 = "Update svuti_users set wager = wager + '$betcoef' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
}
if($sliv != 1){
if($betcoef > 0){
if($bank_dep >= $betcoefss){
if($baltype == "deposit")
{
	$update_sql1 = "UPDATE bank_dep SET bank = bank - '$betcoefss' WHERE id='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}  
if($baltype == "bonus")
{
	$update_sql1 = "UPDATE bank_bon SET bank = bank - '$betcoefss' WHERE id='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
} 
}
}
else{
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
}
}
$update_sql2 = "Update freespins set freespinsleft = freespinsleft - 1 WHERE user_id='$id'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$update_sql2 = "Update freespins set win = win + '$betcoef' WHERE user_id='$id' ORDER BY ID DESC LIMIT 1";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$balancenew = $balance + $betcoef;
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $saltGame = 1000 / mt_rand(1000,9999);
	  $sql_select = "SELECT * FROM slots WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($conn, $sql_select);
      $row = mysqli_fetch_array($result);
	  $numberGame = $row['combination'];
	  $idGame = $row['id'];
$fa = "success";
}
}
else{
//session_start(); 
//if($_SESSION['timestamp'] + 1 > time()){ 
//$error = 3;
//$fa = "error";
//$mess = "Не нужно нажимать так быстро!";
//} 
//else{
//$_SESSION['timestamp'] = time();
//}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($sid)){
  $error = 3;
  $fa = "error";
  $mess = "Сессия не активна!";
}
if($error == 0)
{ 
if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
$betcoef = 0;
$win = "no";
$coef = 0;
$coefZ = 2;

  	  $num111 = mt_rand(0,9);
	  $num211 = mt_rand(0,9);
	  $num311 = mt_rand(0,9);
	  
if($num111 == 7 && $num211 == 7 && $num311 == 7)
{
$coefZ = 100;
}
elseif($num111 == 0 && $num211 == 0 && $num311 == 0)
{
$coefZ = 10;
}
elseif($num111 == 9 && $num211 == 9 && $num311 == 9)
{
$coefZ = 50;
}
elseif($num111 == 5 && $num211 == 5 && $num311 == 5)
{
$coefZ = 30;
}
elseif($num111 == 1 && $num211 == 1 && $num311 == 1)
{
$coefZ = 20;
}
elseif($num111 == 1 && $num211 == 2 && $num311 == 3)
{
$coefZ = 5;
} 
elseif($num111 == 0 && $num311 == 0)
{
$coefZ = 1;
}
elseif($num111 == 7 && $num211 == 7)
{
$coefZ = 5;
}
elseif($num211 == 7 && $num311 == 7)
{
$coefZ = 5;
}
elseif($num111 == 7 && $num311 == 7)
{
$coefZ = 4;
}
elseif($num111 == 7 || $num211 == 7 || $num311 == 7)
{
$coefZ = 2;
}
elseif($num211 == 0 && $num311 == 0)
{
$coefZ = 3;
}
elseif($num111 == 0 && $num211 == 0)
{
$coefZ = 3;
}
elseif($num111 == 0)
{
$coefZ = 1.5;
}

if($sliv != 1){
    $pWin = ($bet * $coefZ) - $bet;  
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  if($num2 == 5)
	  {
		$num2 = mt_rand(8,8);  
	  }
	  $num3 = mt_rand(1,6);
	  $pizda = 11;
	}	  
	if($bank_dep < 0)
	{
	  $pizda = 11;
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  if($num2 == 5)
	  {
		$num2 = mt_rand(8,8);  
	  }	  
	  $num3 = mt_rand(1,6);
	}   
    if($pWin*(-1) < $minBank - $bank_dep)
    {
	  $num1 = mt_rand(2,6);
	  $num2 = mt_rand(1,6);
	  if($num2 == 5)
	  {
		$num2 = mt_rand(8,8);  
	  }	  
	  $num3 = mt_rand(1,6);
	  $pizda = 11;
    }	
}

if($pizda != 11)
{
$num1 = mt_rand(0,9);
$num2 = mt_rand(0,9);
$num3 = mt_rand(0,9);		
}

$combination = "$num1$num2$num3 (lost)";

if($num1 == 7 && $num2 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 100;
$combination = "777";
}
elseif($num1 == 0 && $num2 == 0 && $num3 == 0)
{
$win = "yes";
$coef = 10;
$combination = "000";
}
elseif($num1 == 9 && $num2 == 9 && $num3 == 9)
{
$win = "yes";
$coef = 50;
$combination = "999";
}
elseif($num1 == 5 && $num2 == 5 && $num3 == 5)
{
$win = "yes";
$coef = 30;
$combination = "555";
}
elseif($num1 == 1 && $num2 == 1 && $num3 == 1)
{
$win = "yes";
$coef = 20;
$combination = "111";
}
elseif($num1 == 1 && $num2 == 2 && $num3 == 3)
{
$win = "yes";
$coef = 5;
$combination = "123";
} 
elseif($num1 == 0 && $num3 == 0)
{
$win = "yes";
$coef = 1;
$combination = "Free Spins Won!";
$countfs = 10;
$yy = "win";
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$fswin = 1;
}
elseif($num1 == 7 && $num2 == 7)
{
$win = "yes";
$coef = 5;
$combination = "77*";
}
elseif($num2 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 5;
$combination = "*77";
}
elseif($num1 == 7 && $num3 == 7)
{
$win = "yes";
$coef = 4;
$combination = "7*7";
}
elseif($num1 == 7 || $num2 == 7 || $num3 == 7)
{
$win = "yes";
$coef = 2;
$combination = "ANY 7";
}
elseif($num2 == 0 && $num3 == 0)
{
$win = "yes";
$coef = 3;
$combination = "*00";
}
elseif($num1 == 0 && $num2 == 0)
{
$win = "yes";
$coef = 3;
$combination = "00*";
}
elseif($num1 == 0)
{
$win = "yes";
$coef = 1.5;
$combination = "0**";
}	
$betcoef =  $coef * $bet;
$betcoefzz = $coef * $bet - $bet;  
	  
      $update_sql1 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
      $update_sql1 = "Update svuti_users set balance = balance + '$betcoef' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	  $balancenew = $balance + $betcoef - $bet;
	  if($sliv != 1)
	  {
		 if($coef > 1){
         if($baltype == "bonus")
         {
			$betcoefzz = (($coef * $bet) - $bet) * 1.5;  
	        $update_sql1 = "UPDATE bank_dep SET bank = bank - '$betcoefzz' WHERE id='1'";
            mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
         } 		 
		 }
		 else{	
         if($baltype == "bonus")
         {
			if($bank_dep + $bet < $maxBank)
			{
			   $pidor = $bet * 0.75;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pidor' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}			
         }    
		 }
      }  
	  $insert_sql1 = "INSERT INTO `slots` (`user_id`, `bet`, `combination`, `coef`, `profit`) VALUES ('{$user_id}', '{$bet}', '{$combination}', '{$coef}', '{$betcoef}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  
	  $update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	

	  $mode_live = "Slots";
      $coeff_live = $coef;
      $profit_live = $bet * $coef;
	  if($coeff_live > 1){
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
	  }
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $saltGame = 1000 / mt_rand(1000,9999);
	  $sql_select = "SELECT * FROM slots WHERE user_id='$id' ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($conn, $sql_select);
      $row = mysqli_fetch_array($result);
	  $numberGame = $row['combination'];
	  $idGame = $row['id'];
	  $fa = "success";  
}
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'kef' => "$coef",
	'win' => "$betcoef",
	'num1' => "$num1",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",
	'countspins' => "$fsleft",
	'soundcookie' => "$soundsB",
	'saltGame' => "$saltGame",
	'num2' => "$num2",
	'randd' => "$randd",
	'num3' => "$num3",
	'fswin' => "$fswin",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus1")
{
$price = 1000;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [1000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 10;
$update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
$balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'randbuy' => "$randbuy",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus2")
{
$price = 2000;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [2000]!";
$countfs = 15;
$yy = "buy";
$bet = 20;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	  $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus3")
{
$price = 3000;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [3000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 30;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	  $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus4")
{
$price = 5000;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [5000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 50;

	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	  $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus5")
{
$price = 10000;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [10000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 100;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	  $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus6")
{
$price = 15000;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [15000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 150;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	 $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus7")
{
$price = 100;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [15000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 1;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	 $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus8")
{
$price = 150;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [15000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 1.5;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	 $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "buybonus9")
{
$price = 180;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time() && $sliv != 1){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас уже есть активные спины!";
}
if($error == 0)
{ 		  
$coef = 1;
$combination = "Free Spins Bought [15000]!";
$countfs = rand(15,20);
$yy = "buy";
$bet = 1.8;
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysql_error());
	 $balancenew = $balance - $price;
$insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`, `typefs`) VALUES ('{$user_id}', '{$countfs}', '{$countfs}', '{$bet}', '{$yy}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysql_error());
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "case2")
{
$caseId = 2;
$price = 50;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$baltype = $row['baltype'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{ 
      $xd = mt_rand(0,100);
      if($xd > 80)
      {
         $rander = mt_rand($price, $price * 10);
      }
      else{
         $rander = mt_rand(1,$price);
      }
      $win = round($rander, 2);
	  
	  if($sliv != 1)
	  {
		$pWin = $win - $price;   
	    if($pWin*(-1) < $minBank - $bank_dep)
        {
           $win = mt_rand(1,$price-1);
        }
        if($bank_dep < $xuyBank && $xuyBank != 0)
	    {
		   $win = mt_rand(1,$price-1); 
	    }	  
	    if($bank_dep < 0)
	    {
		   $win = mt_rand(1,$price-1);
	    }
	  }
		  
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
	  $update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	  $balancenew = $balance - $price + $win;
	  $profit = $win - $price;
	  if($win > $price){
		 $okyp = "da";
		 if($sliv != 1){
		 if($baltype == "bonus")
         {
			$winZ = ($win - $price) * 1.5; 
	        $update_sql1 = "UPDATE bank_dep SET bank = bank - '$winZ' WHERE id='1'";
            mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
         } 	
		 }		 
	  }
	  if($win < $price){
		 $okyp = "net";
		 if($sliv != 1){
		 if($baltype == "bonus")
         {	
	        $pizdak = ($price - $win) * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }
		 }		 
	  }
	   if($win == $price){
		  $okyp = "v nol";
	  }
	  $caseRands = 1;
	  $insert_sql1 = "INSERT INTO `cases` (`user_id`, `case_id`, `price`, `ticket`, `win`, `profit`, `okyp`) VALUES ('{$user_id}', '{$caseId}', '{$price}', '{$caseRands}', '{$win}', '{$profit}', '{$okyp}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  if($okyp == "da" || $okyp == "v nol"){
	    $mode_live = "Cases";
        $coeff_live = $win / $price;
        $profit_live = $price * $coeff_live;
        $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$price}', '{$coeff_live}', '{$profit_live}');";
		mysqli_query($conn, $insert_live) or die("Ошибка вставки" . mysqli_error($conn));	  
	  }	  
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'profit' => "$win",
	'hashGame' => "$hashGame",
	'ticket' => "$caseRands",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "case3")
{
$caseId = 3;
$price = 100;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$baltype = $row['baltype'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{ 
      $xd = mt_rand(0,100);
      if($xd > 80)
      {
         $rander = mt_rand($price, $price * 10);
      }
      else{
         $rander = mt_rand(1,$price);
      }
      $win = round($rander, 2);
	  
	  if($sliv != 1)
	  {
		$pWin = $win - $price; 
	    if($pWin*(-1) < $minBank - $bank_dep)
        {
           $win = mt_rand(1,$price-1);
        }
        if($bank_dep < $xuyBank && $xuyBank != 0)
	    {
		   $win = mt_rand(1,$price-1); 
	    }	  
	    if($bank_dep < 0)
	    {
		   $win = mt_rand(1,$price-1);
	    }
	  }
	  
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
	  $update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	  $balancenew = $balance - $price + $win;
	  $profit = $win - $price;
	  if($win > $price){
		 $okyp = "da";
		 if($sliv != 1){
		 if($baltype == "bonus")
         {
			$winZ = ($win - $price) * 1.5; 
	        $update_sql1 = "UPDATE bank_dep SET bank = bank - '$winZ' WHERE id='1'";
            mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
         } 	
		 }		 
	  }
	  if($win < $price){
		 $okyp = "net";
		 if($sliv != 1){
		 if($baltype == "bonus")
         {	
	        $pizdak = ($price - $win) * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }	
		 }		 
	  }
	   if($win == $price){
		  $okyp = "v nol";
	  }
	  $caseRands = 1;
	  $insert_sql1 = "INSERT INTO `cases` (`user_id`, `case_id`, `price`, `ticket`, `win`, `profit`, `okyp`) VALUES ('{$user_id}', '{$caseId}', '{$price}', '{$caseRands}', '{$win}', '{$profit}', '{$okyp}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  if($okyp == "da" || $okyp == "v nol"){
	    $mode_live = "Cases";
        $coeff_live = $win / $price;
        $profit_live = $price * $coeff_live;
        $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$price}', '{$coeff_live}', '{$profit_live}');";
		mysqli_query($conn, $insert_live) or die("Ошибка вставки" . mysqli_error($conn));	  
	  }	  
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'profit' => "$win",
	'hashGame' => "$hashGame",
	'ticket' => "$caseRands",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "case_lucky")
{
$caseId = 4;
$price = 5;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{ 
      $randd = mt_rand(0,100);
	  if($randd >=80){
      $caseRands = mt_rand(0,5000);
	  }
	  else{
	  $caseRands = mt_rand(0,5001);
	  }		 
	  if($caseRands <= 9988){
		$win = 1;
	  }
	  if($sliv != 1){
	  if($caseRands >= 9989){
		$win = 300;
	  }
	  }
	  else{
		if($caseRands >= 9100){
		$win = 300;  
		}
	  }
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
	  $update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	  $balancenew = $balance - $price + $win;
	  $profit = $win - $price;
	  if($win > $price){
		  $okyp = "da";
	  }
	  if($win < $price){
		  $okyp = "net";
	  }
	   if($win == $price){
		  $okyp = "v nol";
	  }
	  $insert_sql1 = "INSERT INTO `cases` (`user_id`, `case_id`, `price`, `ticket`, `win`, `profit`, `okyp`) VALUES ('{$user_id}', '{$caseId}', '{$price}', '{$caseRands}', '{$win}', '{$profit}', '{$okyp}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'profit' => "$win",
	'ticket' => "$caseRands",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "case_safe")
{
$caseId = 5;
$price = 8;
$sid = $_POST['sid'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$baltype = $row['baltype'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($price > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0){
	  
      $xd = mt_rand(0,100);
      if($xd > 80)
      {
         $rander = mt_rand(1, 1);
      }
      else{
         $rander = mt_rand(10,0);
      }
      $win = round($rander, 2);
	  
	  if($sliv != 1)
	  {
	    if($pWin*(-1) < $minBank - $bank_dep)
        {
           $win = mt_rand(1,1);
        }
        if($bank_dep < $xuyBank && $xuyBank != 0)
	    {
		   $win = mt_rand(1,1); 
	    }	  
	    if($bank_dep < 0)
	    {
		   $win = mt_rand(1,1);
	    }
	  }
	  
	  $update_sql2 = "Update svuti_users set balance = balance - '$price' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
	  $update_sql1 = "Update svuti_users set balance = balance + '$win' WHERE hash='$sid'";
	  mysqli_query($conn, $update_sql1) or die("Ошибка вставки" . mysqli_error());
	  $balancenew = $balance - $price + $win;
	  $profit = $win - $price;
	  if($win > $price){
		  $okyp = "da";
	  }
	  if($win < $price){
		  $okyp = "net";
	  }
	  $insert_sql1 = "INSERT INTO `cases` (`user_id`, `case_id`, `price`, `ticket`, `win`, `profit`, `okyp`) VALUES ('{$user_id}', '{$caseId}', '{$price}', '{$caseRands}', '{$win}', '{$profit}', '{$okyp}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $hashGame = hash("md5", mt_rand(0,10000000));
	  $fa = "success";
	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'profit' => "$win",
	'hashGame' => "$hashGame",
	'balance' => "$balance",
	'new_balance' => "$balancenew"
    );
}
if($type == "upgradeBet")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$wantwin = preg_replace("/[^,.0-9]/", '', $_POST['wantwin']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$sliv = $row['sliv'];$email = $row['email_new'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$deposit = $row['deposit'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
$coeff = $wantwin / $bet;
$chancewin = 100 / $coeff;
if($chancewin < 1 || $chancewin > 75){
  $error = 3;
  $fa = "error";
  $mess = "Мин. шанс выигрыша - 1%<br>Макс. шанс выигрыша - 75%";	
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$saltGame = 1000 / mt_rand(1000,9999);
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$random = mt_rand(0,100);
$pWinn = $bet * $coeff;
if($sliv != 1){
   $pWin = $bet * $coeff - $bet;
    if($bank_dep < 0)
	{
       $random = mt_rand($chancewin+1, 100);
	}        
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $random = mt_rand($chancewin+1, 100);
    }
    if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $random = mt_rand($chancewin+1, 100);
	}	  
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $random = mt_rand($chancewin+1, 100);
   }
   else{
   if($forlose > 33){
      $random = mt_rand($chancewin+1, 100);
   }
   }
}
if($random < $chancewin){
	$resulttt = "win";
	$profit = $bet * $coeff;
	$update_sql2 = "Update svuti_users set balance = balance + '$profit' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
	  $mode_live = "Upgrade";
      $coeff_live = $coeff;
      $profit_live = $profit;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
	  mysqli_query($conn, $insert_live) or die("Ошибка вставки" . mysqli_error());
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	   $pWin = $pWin * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }    
}	  
}
else{
	$resulttt = "lose";
	$profit = 0;
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 			 
}	
}
$insert_sql2 = "INSERT INTO `upgradeGame` (`user_id`, `bet`, `wantwin`, `chance`, `result`) VALUES ('{$user_id}', '{$bet}', '{$wantwin}', '{$chancewin}', '{$resulttt}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	  
$sql_select = "SELECT * FROM upgradeGame WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['chance'];
$idGame = $row['id'];
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",
	'result' => "$resulttt",
    );
}
if($type == "diceBet")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$sliv = $row['sliv'];$email = $row['email_new'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$saltGame = 1000 / mt_rand(1000,9999);
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
$myDice = mt_rand(1,6);
$enemyDice = mt_rand(1,6);
$pWinn = $bet * 2;
if($sliv != 1){
   $pWin = $bet * 2 - $bet;
    if($pWin*(-1) < $minBank - $bank_dep)
    {
       $myDice = mt_rand(1,6);	   
       $enemyDice = mt_rand($myDice,6);
    }
	
	if($bank_dep < $xuyBank && $xuyBank != 0)
	{
       $myDice = mt_rand(1,6);	   
       $enemyDice = mt_rand($myDice,6);
	}	  
	if($bank_dep < 0)
	{
       $myDice = mt_rand(1,6);	   
       $enemyDice = mt_rand($myDice,6);
	}    
   
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $myDice = mt_rand(1,6);	   
      $enemyDice = mt_rand($myDice,6);	
   }
   else{
   if($forlose > 33){
      $myDice = mt_rand(1,6);	   
      $enemyDice = mt_rand($myDice,6);	
   }
   }
}
if($myDice > $enemyDice){
$win = "yes";
$betx = $bet * 2;
$res = "Выигрыш!";
	  $mode_live = "Dice 2.0";
      $coeff_live = 2;
      $profit_live = $bet * 2;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
	  
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $pWin = ($bet * 2 - $bet) * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }   
}	  
}
if($myDice < $enemyDice){
$win = "no";
$betx = $bet * 0;
$res = "Проигрыш";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 		 		 
}
}
if($myDice == $enemyDice){
$win = "draw";
$betx = $bet * 1;
$res = "Ничья!";
}
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$betx' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `diceBet` (`user_id`, `bet`, `myDice`, `enemyDice`, `result`) VALUES ('{$user_id}', '{$bet}', '{$myDice}', '{$enemyDice}', '{$betx}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	  
$sql_select = "SELECT * FROM diceBet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['enemyDice'];
$idGame = $row['id'];
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",
	'saltGame' => "$saltGame",
	'betx' => "$betx",
	'result' => "$res",
	'myDice' => "$myDice",
	'enemyDice' => "$enemyDice"
    );
}
if($type == "betlu")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit('syka');
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$sliv = $row['sliv'];$email = $row['email_new'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
$sql_select = "SELECT * FROM lowerupper WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$coefl = $row['coeff_lower'];
$coefu = $row['coeff_upper'];
$numul = $row['number'];
$loginz = $row['login'];
$idGame = $row['id'];
$betact = $row['bet'];
$betresL = $coefl * $betact;
$betresU = $coefu * $betact;
if($podtype == "betlu" && $row){
  $error = 3;
  $fa = "error";
  $mess = "Игра уже активна!";
}
if($row){
	$hashGame = hash("md5", mt_rand(0,10000000));
	$saltGame = 1000 / mt_rand(1000,9999);
	if($podtype == "betMenshe"){
	$sql_select = "SELECT number FROM lowerupper WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($result);
    $numus = $row['number'];
		if($sliv == 1){
		$numRand = mt_rand(1,100);	
		}
		else{
			$numRand = mt_rand(1,100);
            $pWin = $betact * $coefl - $betact;   
	        if($pWin*(-1) < $minBank - $bank_dep)
            {
               $numRand = mt_rand($numus,100);
            }
	        if($bank_dep < $xuyBank && $xuyBank != 0)
	        {
		       $numRand = mt_rand($numus,100);
	        }	  
	        if($bank_dep < 0)
	        {
		       $numRand = mt_rand($numus,100);
	        }			
		}
		if($numRand < $numul){			
			$mode_live = "Upper / Lower";
            $coeff_live = $coefl;
            $profit_live = $bet * $coefl;
            $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$loginz}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
            mysqli_query($conn, $insert_live);
			$cef = $coefl * $betact;
		    if($baltype == "bonus")
            {
			   $xax = ($profit_live - $betact) * 1.5;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xax' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
            } 					
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
		    $update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='min', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 
			$win = "yes";
			$fa = "success";
			$actualcf = number_format($cef, 2, '.', ' ');
		}
		else{
			$cef = 0;
		    if($baltype == "bonus")
            {	
	           $pizdak = $betact * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		    }				
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
		    $update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='min', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 			
			$win = "yes";
			$fa = "success";
		}			
	}
	
	if($podtype == "betBolshe"){
	$sql_select = "SELECT number FROM lowerupper WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($result);
    $numus = $row['number'];
		if($sliv == 1){
		$numRand = mt_rand(1,100);	
		}
		else{
			$numRand = mt_rand(1,100);
            $pWin = $betact * $coefu - $betact;   
	        if($pWin*(-1) < $minBank - $bank_dep)
            {
               $numRand = mt_rand(1,$numus);
            }
	        if($bank_dep < $xuyBank && $xuyBank != 0)
	        {
		       $numRand = mt_rand(1,$numus);
	        }	  
	        if($bank_dep < 0)
	        {
		       $numRand = mt_rand(1,$numus);
	        }	
		}
		if($numRand > $numul){
			$mode_live = "Upper / Lower";
            $coeff_live = $coefu;
            $profit_live = $bet * $coefu;
            $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$loginz}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
            mysqli_query($conn, $insert_live);
			$cef = $coefu * $betact;
		    if($baltype == "bonus")
            {
			   $xax = ($profit_live - $betact) * 1.5;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xax' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
            } 						
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
		    $update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='max', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 			
			$win = "yes";
			$fa = "success";
			
		}
		else{
			$cef = 0;
		    if($baltype == "bonus")
            {	
	           $pizdak = $betact * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		    }				
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
		    $update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='max', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 	
			$win = "yes";
		    $fa = "success";
		}	
	}
	
	if($podtype == "betEven"){
		if($sliv == 1){
		$numRand = mt_rand(1,100);	
		}
		else{
			$numRand = mt_rand(1,100);
            $pWin = $betact * 1.98 - $betact;   
	        if($pWin*(-1) < $minBank - $bank_dep)
            {
               if($numRand % 2 == 0)
			   {
                  $numRand = $numRand + 1;
               }  
            }
	        if($bank_dep < $xuyBank && $xuyBank != 0)
	        {
               if($numRand % 2 == 0)
			   {
                  $numRand = $numRand + 1;
               }  
	        }	  
	        if($bank_dep < 0)
			{
               if($numRand % 2 == 0)
			   {
                  $numRand = $numRand + 1;
               }  
			}
	     }	
		 $cff = 0;
		 if($numRand % 2 == 0){
			$mode_live = "Upper / Lower";
            $coeff_live = 1.98;
            $profit_live = $bet * 1.98;
            $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$loginz}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
            mysqli_query($conn, $insert_live);			 
			$cef = $betact * 1.98;
		    if($baltype == "bonus")
            {
			   $xax = ($profit_live - $betact) * 1.5;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xax' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
            } 							
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='even', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance'];			
			$win = "yes";
			$fa = "success";
         }
         else{
 			$cef = 0;
		    if($baltype == "bonus")
            {	
	           $pizdak = $betact * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		    }				
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='even', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	 
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance'];		
		    $fa = "success";
		 }
    }
	
	if($podtype == "betOdd"){
		if($sliv == 1){
		$numRand = mt_rand(1,100);	
		}
		else{
			$numRand = mt_rand(1,100);
            $pWin = $betact * 1.98 - $betact;   
	        if($pWin*(-1) < $minBank - $bank_dep)
            {
               if($numRand % 2 != 0)
			   {
                  $numRand = $numRand + 1;
               }  
            }
	        if($bank_dep < $xuyBank && $xuyBank != 0)
	        {
               if($numRand % 2 != 0)
			   {
                  $numRand = $numRand + 1;
               }  
	        }	  
	        if($bank_dep < 0)
			{
               if($numRand % 2 != 0)
			   {
                  $numRand = $numRand + 1;
               }  
			}
		}
		 if($numRand % 2 != 0){
			$mode_live = "Upper / Lower";
            $coeff_live = 1.98;
            $profit_live = $bet * 1.98;
            $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$loginz}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
            mysqli_query($conn, $insert_live);				 
			$cef = $betact * 1.98;
		    if($baltype == "bonus")
            {
			   $xax = ($profit_live - $betact) * 1.5;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xax' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
            } 							
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='odd', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance'];			
			$win = "yes";
			$fa = "success";
         }
         else{
 			$cef = 0;
		    if($baltype == "bonus")
            {	
	           $pizdak = $betact * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		    }				
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='odd', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	 
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 
		    $fa = "success";
		}
    }
	
	if($podtype == "betRavno"){
		if($sliv == 1){
		  $numRand = mt_rand(1,100);
		  $slivRand = mt_rand(1,100);
		  if($slivRand > 97){
			  $numRand = mt_rand($numul,$numul);
		  }
		}
		else{
			$numRand = mt_rand(1,100);
            $pWin = $betact * 98 - $betact;   
	        if($pWin*(-1) < $minBank - $bank_dep)
            {
			   $x = rand(1,2);
			   if($x == 1){$numRand = mt_rand($numul+1, 100);}
			   if($x == 2){$numRand = mt_rand(1, $numul-1);}
			   if($numul == 100)
			   {
				   $numRand = mt_rand(1,99);  
			   }
			   if($numul == 1)
			   {
				   $numRand = mt_rand(2,100);		  
			   }			   
            }
	        if($bank_dep < $xuyBank && $xuyBank != 0)
	        {
			   $x = rand(1,2);
			   if($x == 1){$numRand = mt_rand($numul+1, 100);}
			   if($x == 2){$numRand = mt_rand(1, $numul-1);}
			   if($numul == 100)
			   {
				   $numRand = mt_rand(1,99);  
			   }
			   if($numul == 1)
			   {
				   $numRand = mt_rand(2,100);		  
			   }	
	        }	  
	        if($bank_dep < 0)
			{
			   $x = rand(1,2);
			   if($x == 1){$numRand = mt_rand($numul+1, 100);}
			   if($x == 2){$numRand = mt_rand(1, $numul-1);}
			   if($numul == 100)
			   {
				   $numRand = mt_rand(1,99);  
			   }
			   if($numul == 1)
			   {
				   $numRand = mt_rand(2,100);		  
			   }	
			}
		}
		 if($numRand == $numul){		 
			$mode_live = "Upper / Lower";
            $coeff_live = 98;
            $profit_live = $bet * 98;
            $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$loginz}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
            mysqli_query($conn, $insert_live);				 
			$cef = $betact * 98;
		    if($baltype == "bonus")
            {
			   $xax = ($profit_live - $betact) * 1.5;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xax' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
            } 					
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='ravno', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 			
			$win = "yes";
			$fa = "success";
         }
         else{
 			$cef = 0;
		    if($baltype == "bonus")
            {	
	           $pizdak = $betact * 0.75;
			   if($bank_dep + $pizdak < $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		
			   if($bank_dep + $pizdak >= $maxBank)
			   {
	              $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
                  mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			   }		 
		    }				
			$actualcf = number_format($cef, 2, '.', ' ');
			$update_sql2 = "Update lowerupper set number2 = '$numRand', active='0', result='$cef', choose='ravno', result='$cef' WHERE user_id='$user_id' AND active = '1' ORDER BY id DESC LIMIT 1";
		  	mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
			$update_sql2 = "Update svuti_users set balance = balance + '$cef' WHERE hash='$sid'";
            mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	 
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
            $result = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($result);
            $balancenew = $row['balance']; 			
		    $fa = "success";
		}		
    }
}		
else{
$ingame = "no";
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Мин. ставка - 0.01 <i class='fas fa-coins'></i>";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{ 
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error()); 
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$numRand = mt_rand(1,100);
$formula1 = 100 / $numRand;
$formula2 = 100 / (100 - $numRand);
$formula12 = number_format($formula1, 2, '.', ' ');
$formula22 = number_format($formula2, 2, '.', ' ');
$insert_sql2 = "INSERT INTO `lowerupper` (`user_id`, `login`, `bet`, `number`, `coeff_lower`, `coeff_upper`) VALUES ('{$user_id}', '{$logins}', '{$bet}', '{$numRand}', '{$formula1}', '{$formula2}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];	
$fa = "success";	  
}
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'number' => "$numRand",
	'numprev' => "$numul",
	'betact' => "$betact",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",
	'actualcf' => "$actualcf",
	'saltGame' => "$saltGame",
	'cef1' => "$formula12",
	'ingame' => "$ingame",	
	'cef2' => "$formula22"
    );
}
if($type == "playChest")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$logins = $row['login'];
$wager = $row['wager'];
$user_id = $row['id'];
$sliv = $row['sliv'];$email = $row['email_new'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$xd = mt_rand(0,100);
if($xd > 98)
{
	$crasher = mt_rand(50,10000) / 100;
}
else
{
	$xd = rand(0,100);
	if($xd > 20){
	   $crasher = mt_rand(50,300) / 100;
	}
	else{
	   $crasher = 0;
	}
}
if($crasher < 1)
{
   $crasher = 0;
}
$multiplier = round($crasher, 2);
if($sliv != 1)
{
   $pWin = $bet * $multiplier - $bet;   
   if($pWin*(-1) < $minBank - $bank_dep)
   {
      $multiplier = 0;
   }
   if($bank_dep < $xuyBank && $xuyBank != 0)
   {
      $multiplier = 0;
   }	  
   if($bank_dep < 0)
   {
	  $multiplier = 0;
   }		
}
$profit = $bet * $multiplier;
if($profit > 0){
	  $mode_live = "Chests Game";
      $coeff_live = $multiplier;
      $profit_live = $bet * $multiplier;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
	  if($sliv != 1)
	  {
		  if($baltype == "bonus")
          {
			$winZ = ($bet * $multiplier - $bet) * 1.5;
	        $update_sql1 = "UPDATE bank_dep SET bank = bank - '$winZ' WHERE id='1'";
            mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
          } 	
	  }
}
else{
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
		 }		
}

if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}	 
		 
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
$update_sql2 = "Update svuti_users set balance = balance + '$profit' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$insert_sql2 = "INSERT INTO `chests` (`user_id`, `bet`, `multiplier`, `win`) VALUES ('{$user_id}', '{$bet}', '{$multiplier}', '{$profit}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	  
$sql_select = "SELECT * FROM chests WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['multiplier'];
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'saltGame' => "$saltGame",
	'idGame' => "$idGame",
	'multiplier' => "$multiplier",
	'new_balance' => "$balancenew",
	'res' => "$profit"
    );
}
if($type == "cardbet_red")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$type = "red";
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$logins = $row['login'];
$wager = $row['wager'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	  
$cardRand = mt_rand(0,1);
$pWinn = $bet * 2;
if($sliv != 1){
   $pWin = $bet * 2 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $cardRand = mt_rand(1, 1); 
      }
	 
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $cardRand = mt_rand(1, 1);
	  }	  
	  if($bank_dep < 0)
	  {
		 $cardRand = mt_rand(1, 1); 
	  }
}
if($maxPw != 0 && $balance > $maxPw){
   $forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $cardRand = mt_rand(1, 1);
   }
   else{
   if($forlose > 33){
      $cardRand = mt_rand(1, 1);
   }
   }
}
if($cardRand == 0){
$win = 2;
$card = "red";
	  $mode_live = "Card Guess";
      $coeff_live = 2;
      $profit_live = $bet * 2;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $pWin = $bet * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }   
}	  
}
if($cardRand == 1){
$win = 0;
$card = "black";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 	 		 
}
}
$resultBet = $bet * $win;
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$resultBet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `cardbet` (`user_id`, `bet`, `type`, `coeff`, `card`, `win`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$win}', '{$card}', '{$resultBet}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	  
$sql_select = "SELECT * FROM cardbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['card'];
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",	
	'saltGame' => "$saltGame",
	'new_balance' => "$balancenew",
	'win' => "$win",
	'card' => "$card",
	'resultBet' => "$resultBet"
    );
}
if($type == "cardbet_black")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$type = "black";
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$logins = $row['login'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		  
$cardRand = mt_rand(0,1);
$pWinn = $bet * 2;
if($sliv != 1){
   $pWin = $bet * 2 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $cardRand = mt_rand(0, 0); 
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $cardRand = mt_rand(0, 0);
	  }	  
	  if($bank_dep < 0)
	  {
		 $cardRand = mt_rand(0, 0); 
	  } 
}
if($maxPw != 0 && $balance > $maxPw){
   $forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $cardRand = mt_rand(0, 0);
   }
   else{
   if($forlose > 33){
      $cardRand = mt_rand(0, 0);
   }
   }
}
if($cardRand == 0){
$win = 0;
$card = "red";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 		 
}
}
if($cardRand == 1){
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$bet' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $xy9ka = ($bet * 2 - $bet) * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$xy9ka' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }   
}	
$win = 2;
$card = "black";
	  $mode_live = "Card Guess";
      $coeff_live = 2;
      $profit_live = $bet * 2;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
}
$resultBet = $bet * $win;
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$resultBet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `cardbet` (`user_id`, `bet`, `type`, `coeff`, `card`, `win`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$win}', '{$card}', '{$resultBet}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	  
$sql_select = "SELECT * FROM cardbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['card'];
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",	
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'saltGame' => "$saltGame",
	'win' => "$win",
	'card' => "$card",
	'resultBet' => "$resultBet"
    );
}
if($type == "cardbet_spades")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$type = "spades";
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$user_id = $row['id'];
$logins = $row['login'];
$sliv = $row['sliv'];$email = $row['email_new'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		  
$cardRand = mt_rand(1,4);
$pWinn = $bet * 4;
if($sliv != 1){
   $pWin = $bet * 4 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $cardRand = mt_rand(2, 4); 
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $cardRand = mt_rand(2, 4);
	  }	  
	  if($bank_dep < 0)
	  {
		 $cardRand = mt_rand(2, 4); 
	  }  
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $cardRand = mt_rand(2, 4);
   }
   else{
   if($forlose > 33){
      $cardRand = mt_rand(2, 4);
   }
   }
}
if($cardRand == 1){
$win = 4;
$card = "spades";
	  $mode_live = "Card Guess";
      $coeff_live = 4;
      $profit_live = $bet * 4;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
   if($baltype == "bonus")
   {
	   $pWin = $pWin * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }   
}	  
}
if($cardRand == 2){
$win = 0;
$card = "clubs";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 			 
}
}
if($cardRand == 3){
$win = 0;
$card = "hearts";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 	 		 
}
}
if($cardRand == 4){
$win = 0;
$card = "diamonds";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 			 
}
}
$resultBet = $bet * $win;
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$resultBet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `cardbet` (`user_id`, `bet`, `type`, `coeff`, `card`, `win`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$win}', '{$card}', '{$resultBet}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	 
$sql_select = "SELECT * FROM cardbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['card'];
$idGame = $row['id']; 
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'saltGame' => "$saltGame",
	'idGame' => "$idGame",	
	'new_balance' => "$balancenew",
	'win' => "$win",
	'card' => "$card",
	'rand' => "$cardRand",
	'resultBet' => "$resultBet"
    );
}
if($type == "cardbet_clubs")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$type = "clubs";
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$logins = $row['login'];
$user_id = $row['id'];
$sliv = $row['sliv'];$email = $row['email_new'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		  
$cardRand = mt_rand(1,4);
$pWinn = $bet * 4;
if($sliv != 1){
   $pWin = $bet * 4 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $cardRand = mt_rand(3, 4); 
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $cardRand = mt_rand(3, 4);
	  }	  
	  if($bank_dep < 0)
	  {
		 $cardRand = mt_rand(3, 4); 
	  }   
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $cardRand = mt_rand(3, 4);
   }
   else{
   if($forlose > 33){
      $cardRand = mt_rand(3, 4);
   }
   }
}
if($cardRand == 1){
$win = 0;
$card = "spades";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         }
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 } 		 
}
}
if($cardRand == 2){
$win = 4;
$card = "clubs";
	  $mode_live = "Card Guess";
      $coeff_live = 4;
      $profit_live = $bet * 4;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	   $pWin = $pWin * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }    
}	  
}
if($cardRand == 3){
$win = 0;
$card = "hearts";
if($sliv != 1){
	     if($baltype == "bonus")
         {
			$xles = $bet * 0.75;
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$xles' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
}
}
if($cardRand == 4){
$win = 0;
$card = "diamonds";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
$resultBet = $bet * $win;
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$resultBet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `cardbet` (`user_id`, `bet`, `type`, `coeff`, `card`, `win`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$win}', '{$card}', '{$resultBet}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";
$sql_select = "SELECT * FROM cardbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['card'];
$idGame = $row['id'];
$saltGame = 1000 / mt_rand(1000,9999);	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",	
	'balance' => "$balance",
	'saltGame' => "$saltGame",
	'new_balance' => "$balancenew",
	'win' => "$win",
	'card' => "$card",
	'rand' => "$cardRand",
	'resultBet' => "$resultBet"
    );
}
if($type == "cardbet_hearts")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$type = "hearts";
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$logins = $row['login'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$sliv = $row['sliv'];$email = $row['email_new'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			  
$cardRand = mt_rand(1,4);
$pWinn = $bet * 4;
if($sliv != 1){
   $pWin = $bet * 4 - $bet;
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $cardRand = mt_rand(1, 2); 
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $cardRand = mt_rand(1, 2);
	  }	  
	  if($bank_dep < 0)
	  {
		 $cardRand = mt_rand(1, 2); 
	  } 
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $cardRand = mt_rand(1, 2);
   }
   else{
   if($forlose > 33){
      $cardRand = mt_rand(1, 2);
   }
   }
}
if($cardRand == 1){
$win = 0;
$card = "spades";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}			
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
if($cardRand == 2){
$win = 0;
$card = "clubs";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
if($cardRand == 3){
$win = 4;
$card = "hearts";
	  $mode_live = "Card Guess";
      $coeff_live = 4;
      $profit_live = $bet * 4;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
   if($baltype == "bonus")
   {
	   $pWin = $pWin * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
}	  
}
if($cardRand == 4){
$win = 0;
$card = "diamonds";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         }
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
$resultBet = $bet * $win;
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$resultBet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `cardbet` (`user_id`, `bet`, `type`, `coeff`, `card`, `win`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$win}', '{$card}', '{$resultBet}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";	
$sql_select = "SELECT * FROM cardbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['card'];
$idGame = $row['id'];  
$saltGame = 1000 / mt_rand(1000,9999);
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",	
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'win' => "$win",
	'card' => "$card",
	'rand' => "$cardRand",
	'resultBet' => "$resultBet"
    );
}
if($type == "cardbet_diamonds")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$type = "diamonds";
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$logins = $row['login'];
$sliv = $row['sliv'];$email = $row['email_new'];
$user_id = $row['id'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
if($baltype != "deposit" && $baltype != "bonus"){
  $error = 3;
  $fa = "error";
  $mess = "Ошибка обработки ставки";
}
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		  
$cardRand = mt_rand(1,4);
$pWinn = $bet * 4;
if($sliv != 1){
   $pWin = $bet * 4 - $bet;   
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $cardRand = mt_rand(1, 3); 
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $cardRand = mt_rand(1, 3);
	  }	  
	  if($bank_dep < 0)
	  {
		 $cardRand = mt_rand(1, 3); 
	  }
}
if($maxPw != 0 && $balance > $maxPw){
	$forlose = rand(0,100);
   if($pWinn >= $maxPw){
      $cardRand = mt_rand(1, 3);
   }
   else{
   if($forlose > 33){
      $cardRand = mt_rand(1, 3);
   }
   }
}
if($cardRand == 1){
$win = 0;
$card = "spades";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
if($cardRand == 2){
$win = 0;
$card = "clubs";
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 	
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
}
}
if($cardRand == 3){
$win = 0;
$card = "hearts";
if($sliv != 1){ 
	     if($baltype == "deposit")
         {
			if($bank_dep + $bet < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$bet' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}
			if($bank_dep + $bet >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
if($cardRand == 4){
$win = 4;
$card = "diamonds";
	  $mode_live = "Card Guess";
      $coeff_live = 4;
      $profit_live = $bet * 4;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
if($sliv != 1){
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $pWin = $pWin * 1.5;  
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }  
}	  
}
$resultBet = $bet * $win;
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$resultBet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		  
$insert_sql2 = "INSERT INTO `cardbet` (`user_id`, `bet`, `type`, `coeff`, `card`, `win`) VALUES ('{$user_id}', '{$bet}', '{$type}', '{$win}', '{$card}', '{$resultBet}');";
mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];
$fa = "success";
$sql_select = "SELECT * FROM cardbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$numberGame = $row['card'];
$idGame = $row['id'];	
$saltGame = 1000 / mt_rand(1000,9999);  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'hashGame' => "$hashGame",
	'numberGame' => "$numberGame",
	'idGame' => "$idGame",
	'saltGame' => "$saltGame",
	'new_balance' => "$balancenew",
	'win' => "$win",
	'card' => "$card",
	'rand' => "$cardRand",
	'resultBet' => "$resultBet"
    );
}
if($type == "crashBet")
{
$sid = $_POST['sid'];
$bet = preg_replace("/[^,.0-9]/", '', $_POST['bet']);
$cashout = $_POST['cashout'];
if(empty($cashout)){
$error = 3;
$fa = "error";
$mess = "Введите автовывод!";
}	
if(!preg_match('/^[0-9.]+$/i', $cashout)){
$error = 3;
$fa = "error";
$mess = "Автовывод должен быть цифрами!";
}
if($cashout < 1.01){
$error = 3;
$fa = "error";
$mess = "Минимальный автовывод - 1.01x!";
}	
if (!preg_match("/^[0-9a-zA-Z]+$/",$sid)){
	exit();
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$wager = $row['wager'];
$logins = $row['login'];
$user_id = $row['id'];
$sliv = $row['sliv'];$email = $row['email_new'];
$deposit = $row['deposit'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
$sql_select12 = "SELECT * FROM crashbet WHERE user_id='$user_id' AND result = '0' ORDER BY id DESC LIMIT 1";
$result12 = mysqli_query($conn, $sql_select12);
$row12 = mysqli_fetch_array($result12);
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bet > $balance){
  $error = 3;
  $fa = "error";
  $mess = "Недостаточно средств!";
}
$prof = $cashout * $bet;
$fx = number_format($prof, 2, '.', ' ');
if($bet == $fx)
{
	$error = 2;
	$mess = "Ставка равна выигрышу!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bet < 0.01){
  $error = 3;
  $fa = "error";
  $mess = "Неверная сумма ставки";
}
$rff = $cashout * 1000;
if($error == 0)
{ 
$hashGame = hash("md5", mt_rand(0,10000000));
$update_sql2 = "Update svuti_users set balance = balance - '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());	
$xd = mt_rand(0,100);
if($xd > 98)
{
   $rander = mt_rand(100,20000);
}
else{
   $rander = mt_rand(100,500);
}
$crasher = mt_rand(50,$rander) * 0.01;
if($crasher < 1)
{
   $crasher = 1;
}
$crashNum = round($crasher, 2);
if($sliv != 1){
      $pWin = $bet * $cashout - $bet;   
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $crashNum = mt_rand(100, $cashout*100-1) / 100; 
      }
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $crashNum = mt_rand(100, $cashout*100-1) / 100; 
	  }	  
	  if($bank_dep < 0)
	  {
		 $crashNum = mt_rand(100, $cashout*100-1) / 100; 
	  }
}
if($crashNum >= $cashout){
$profitX = $bet * $cashout;	
$profitXX = $bet * $cashout - $bet;
if($sliv != 1){
	     if($baltype == "deposit")
         {
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$profitXX' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
         } 	
	     if($baltype == "bonus")
         {
			   $profitXX = $profitXX * 1.5;
	           $update_sql1 = "UPDATE bank_dep SET bank = bank - '$profitXX' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
         } 			 
}	
	  $mode_live = "Crash Game";
      $coeff_live = $cashout;
      $profit_live = $profitX;
      $insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$bet}', '{$coeff_live}', '{$profit_live}');";
      mysqli_query($conn, $insert_live);
}
else{
$profitX = $bet * 0;	
if($sliv != 1){
         if($baltype == "bonus")
         {	
	        $pizdak = $bet * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }		 
}
}
$saltGame = 1000 / mt_rand(1000,9999);  
if($wager > 0 && $bet < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$bet' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $bet >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
$update_sql2 = "Update svuti_users set balance = balance + '$profitX' WHERE hash='$sid'";
mysqli_query($conn, $update_sql2) or die("Ошибка вставки" . mysqli_error());		
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$bet' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
$insert_sql1 = "INSERT INTO `crashbet` (`user_id`, `bet`, `cashout`, `crashed`, `result`) VALUES ('{$user_id}', '{$bet}', '{$cashout}', '{$crashNum}', '{$profitX}');";
mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
$sql_select = "SELECT * FROM crashbet WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$idGame = $row['id'];
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$balancenew = $row['balance'];  
$fa = "success";	  
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'profitx' => "$profitX",
	'numberGame' => "$crashNum",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'idGame' => "$idGame",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'crashNum' => "$crashNum"
    );
}
if($type == "joinGa")
{
session_start(); 
if($_SESSION['timestamp'] + 2 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
}
$sid = $_POST['sid'];
if(empty($sid))  
{	
$error = 1;
$fa = "error";
$mess = "Сначала авторизуйтесь!";
}
$sql_select = "SELECT * FROM giveaway ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$id = $row['id'];
$users = $row['users'];
$usersleft = $row['usersleft'];
$randTo =  $row['randTo'];
}
if($users >= $usersleft)
{
$error = 1;
$fa = "error";
$mess = "Раздача окончена!<br>Следите за <a href='https://vk.com/hotskinsclub' style='color:#fff' target='_blank'><b>новостями</b></a><Br>Чтобы не пропустить новую раздачу!";	
}
$sql_select1 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result1 = mysqli_query($conn, $sql_select1);
$row1 = mysqli_fetch_array($result1);
if($row1)
{	
$user_id = $row1['id'];
$balance = $row1['balance'];
$email = $row1['email_new'];
$baltype = $row1['baltype'];
$deposit = $row1['deposit'];
$bonus_url = $row1['bonus_url'];
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if(empty($bonus_url) || $bonus_url == "FAKE"){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо вступить в группу ВК!";
}
$sql_select2 = "SELECT * FROM gausers WHERE user='$user_id' AND ga_id='$id'";
$result2 = mysqli_query($conn, $sql_select2);
$row2 = mysqli_fetch_array($result2);
if($row2)
{ 
$error = 3;
$fa = "error";
$mess = "Вы уже участвовали в этой раздаче!";
}
$forga = mt_rand(0,100);
$fixRand = $randTo * 0.25;
$randAmount = mt_rand(100,$randTo) / 100;
if($deposit == 0 && $forga > 20){
	$randAmount = mt_rand(100,$fixRand) / 100;
}
if($error == 0){	
	  $wagerRand = $randAmount * 8;
	  $balancenew = $balance + $randAmount;
	  $insert_sql1 = "INSERT INTO `gausers` (`ga_id`, `user`, `amount`) VALUES ('{$id}', '{$user_id}', '{$randAmount}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $update_sql = "Update giveaway set users = users + 1 ORDER BY id DESC LIMIT 1";
      mysqli_query($conn, $update_sql) or die("Ошибка вставки" . mysqli_error());
	  if($randAmount > $balance && $baltype != "bonus"){
	      mysqli_query("UPDATE `svuti_users` SET `baltype` = 'bonus' WHERE `hash` = '$sid'");
      }   
	  $update_sql1 = "Update svuti_users set balance = balance + '$randAmount' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	  $sql_select = "SELECT users FROM giveaway ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($conn, $sql_select);
      $row = mysqli_fetch_array($result);
      $usersupdate = $row['users'];
	  $fa = "success";
	 
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'users' => "$usersupdate",
	'new_balance' => "$balancenew",
	'randAmount' => "$randAmount"
    );
}
if($type == "PromoActive")
{
session_start(); 
if($_SESSION['timestamp'] + 2 > time()){ 
$error = 3;
$fa = "error";
$mess = "Повторите попытку позже!";
} 
else{
$_SESSION['timestamp'] = time();
	$promo = $_POST['promo'];
	$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
	$sid = $_POST['sid'];
	if(empty($promo))  
{	
$error = 1;
$fa = "error";
$mess = "Введите Промокод";
}
$sql_select = "SELECT * FROM svuti_promo WHERE promo='$promo'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$active = $row['active'];
$activelimit = $row['activelimit'];
$summa = $row['summa'];
$typePromo =  $row['type'];
$sql_select1 = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result1 = mysqli_query($conn, $sql_select1);
$row1 = mysqli_fetch_array($result1);
if($row1)
{	
$user_id = $row1['id'];
$wager = $row1['wager'];
$ip_reg = $row1['ip_reg'];
$email = $row1['email_new'];
$bonus_url = $row1['bonus_url'];
$sliv = $row1['sliv'];
$balance = $row1['balance'];
$baltype = $row1['baltype'];
}
if(empty($bonus_url) || $bonus_url == "FAKE"){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо вступить в группу ВК!";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
$sql_select2 = "SELECT * FROM promoactive WHERE user_id='$user_id' AND promo='$promo'";
$result2 = mysqli_query($conn, $sql_select2);
$row2 = mysqli_fetch_array($result2);
if($row2)
{ 
$error = 3;
$fa = "error";
$mess = "Вы уже активировали данный промокод!";
}
$sql_select11 = "SELECT * FROM promoactive WHERE ip='$ip_reg' AND user_id !='$user_id'";
$result11 = mysqli_query($conn, $sql_select11);
$row11 = mysqli_fetch_array($result11);
$accs_ban = $row11['COUNT(*)'];
if($row11)
{ 
    $sql_ban = "UPDATE svuti_users SET ban='1', ban_mess='мультиакк', wban='1' WHERE ip_reg='$ip_reg'";
    mysqli_query($conn, $sql_ban);	
	$error = 2;
	$mess = "Ваши аккаунты были заблокированы.<br>Если вы считаете, что это ошибка,<br>обратитесь в тех. поддержку";
    $fa = "error";
}
$sql_select5 = "SELECT * FROM freespins WHERE user_id='$user_id' AND freespinsleft > 0 ORDER BY id DESC LIMIT 1";
$result5 = mysqli_query($conn, $sql_select5);
$row5 = mysqli_fetch_array($result5);
if($row5)
{	
$error = 3;
$fa = "error";
$mess = "У Вас есть активные спины!";
}
if($active >= $activelimit)
{
$error = 3;
$fa = "error";
$mess = "Количество активаций исчерпано";
}
	if (preg_match("/$user_id /",$idactive))  {	
	$error = 3;
$fa = "error";
$mess = "Вы уже активировали данный промокод!";
}
}
else
{
	$error = 2;
$fa = "error";
$mess = "Промокод не существует";
}
$wagerPromo = $summa * 2;
if($error == 0)
{
	  if($typePromo == "balance")
	  {
	  $activeupd = $active + "1";
	  $balancenew = $balance + $summa;
	  $insert_sql1 = "INSERT INTO `promoactive` (`user_id`, `promo`, `ip`) VALUES ('{$user_id}', '{$promo}', '{$ip_reg}');";
      mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $update_sql = "Update svuti_promo set active='$activeupd' WHERE promo='$promo'";
      mysqli_query($conn, $update_sql) or die("Ошибка вставки" . mysqli_error());
	  $update_sql1 = "Update svuti_users set balance = balance + '$summa' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	  $update_sql1 = "UPDATE bank_dep SET bank = bank + '$summa' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	  
	  if($sliv != 1){
	  $update_sql1 = "Update svuti_users set wager = wager + '$wagerPromo' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	  }
      $update_sql2 = "UPDATE `svuti_win` SET `win`=`win`+'{$summa}'WHERE `id`='1'";
      mysqli_query($conn, $update_sql2) or die("" . mysqli_error());
	  if($summa > $balance && $baltype != "bonus"){
	      mysqli_query("UPDATE `svuti_users` SET `baltype` = 'bonus' WHERE `hash` = '$sid'");
      }
	  $fa = "success";
	  }
	  if($typePromo == "freespins")
	  {
	  
	  $activeupd = $active + "1";
      $insert_sql1 = "INSERT INTO `promoactive` (`user_id`, `promo`, `ip`) VALUES ('{$user_id}', '{$promo}', '{$ip_reg}');";
	  mysqli_query($conn, $insert_sql1) or die("Ошибка вставки" . mysqli_error());
	  $update_sql = "Update svuti_promo set active='$activeupd' WHERE promo='$promo'";
      mysqli_query($conn, $update_sql) or die("Ошибка вставки" . mysqli_error());
      $sql_select2 = "SELECT * FROM svuti_promo WHERE promo='$promo' AND type='freespins'";
	  $result2 = mysqli_query($conn, $sql_select2);
      $row2 = mysqli_fetch_array($result2);
	  $summa = $row2['summa'];
	  $count = $row2['count'];
	  $ggr = $summa * $count;
	  $update_sql1 = "UPDATE bank_dep SET bank = bank + '$ggr' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		  
	  $ggg = "bonus";
	  $insert_sql2 = "INSERT INTO `freespins` (`user_id`, `freespins`, `freespinsleft`, `bet`,  `typefs`) VALUES ('{$user_id}', '{$count}', '{$count}', '{$summa}', '{$ggg}');";
	  mysqli_query($conn, $insert_sql2) or die("Ошибка вставки" . mysqli_error());
	  $fa = "success";
	  }
	 
}
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'countfs' => "$count",
	'typePromo' => "$typePromo",
	'new_balance' => "$balancenew",
	'suma' => "$summa"
    );
}
}
if($type == "withdraw")
{
session_start(); 
if($_SESSION['timestamp'] + 3 > time()){ 
$error = 3;
$fa = "error";
$mess = "Вы не можете делать вывод так часто!";
} 
else{
$_SESSION['timestamp'] = time();
$sql_select232 = "SELECT * FROM vivod WHERE id='1'";
$result232 = mysqli_query($conn, $sql_select232);
$row232 = mysqli_fetch_array($result232);
if($row232)
{	
$vivodoff = $row232['on'];
}
$sid = $_POST['sid'];
$system = $_POST['system'];
$size = $_POST['size'];
$code = (int) $_POST['code'];
$wallet = $_POST['wallet'];
$sql_select4232 = "SELECT * FROM slim_zakidi WHERE user_id='$userid' ORDER BY ID DESC LIMIT 1";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$sumka = $row4232['SUM(suma)'];
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$login = $row['login'];
$baltype = $row['baltype'];
$userid = $row['id'];
$sliv = $row['sliv'];$email = $row['email_new'];
$bonus_url = $row['bonus_url'];
$wager = $row['wager'];
$ban = $row['ban'];
$ipchik =  $row['ip_reg'];
$wager2 =  $row['wager2'];
$sign =  $row['sign'];
$wban = $row['wban'];
$deposit = $row['deposit'];
$sql_select = "SELECT * FROM autow WHERE id='1'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$off_on = $row['onn'];
	$bankaw = $row['bank'];
}
$sql_select4232 = "SELECT SUM(suma) FROM slim_zakidi WHERE user_id='$userid'";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$sumapey2 = $row4232['SUM(suma)'];
$sql_select4232 = "SELECT * FROM svuti_payout WHERE user_id='$userid'";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$sumapey2 = $row4232['SUM(suma)'];
$sql_select111 = "SELECT COUNT(*) FROM svuti_users WHERE ip_reg='$ipchik'";
$result111 = mysqli_query($conn, $sql_select111);
$row111 = mysqli_fetch_array($result111);
$baner = $row111['COUNT(*)'];
$sql_select4444 = "SELECT sum(suma) FROM slim_zakidi WHERE data >= DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY) and user_id='$userid'";
$result4444 = mysqli_query($conn, $sql_select4444);
$row4444 = mysqli_fetch_array($result4444);
$sumochka = $row4444['sum(suma)'];
$sql_select4232 = "SELECT * FROM bank_withdraw WHERE id='1'";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$bank_withdraw = $row4232['bank'];
if(is_null($sumochka)){$sumochka = 0;}
}
if($baner > 1) 
{
	$error = 1;
	$mess = "Вывод заблокирован!<br>Нарушено правило 5.7";
	$fa = "error";
	$update_sql1 = "Update svuti_users set ban='1' WHERE ip_reg='$ipchik'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$update_sql2 = "Update svuti_users set wban='1' WHERE ip_reg='$ipchik'";
    mysqli_query($conn, $update_sql2) or die("" . mysqli_error());
	$update_sql3 = "Update svuti_users set ban_mess='мультиакк' WHERE ip_reg='$ipchik'";
    mysqli_query($conn, $update_sql3) or die("" . mysqli_error());
	setcookie('sid', "", time()- 10);
}
$sign = $_COOKIE['sign'];
$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE sign='$sign' AND sign != ''";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$signs = $row['COUNT(*)'];
}
if($signs > 1)
{
   $sql_select = "UPDATE svuti_users SET ban='1', ban_mess='мультиакк' WHERE sign='$sign'";
   $result = mysqli_query($conn, $sql_select);
   $mess = "Регистрация более одного аккаунта запрещена";
   $error = 1;
   $fa = "error";
}
$sql_select1199 = "SELECT * FROM svuti_payout WHERE qiwi='$wallet' AND user_id != '$userid'";
$result1199 = mysqli_query($conn, $sql_select1199);
$row1199 = mysqli_fetch_array($result1199);
if($row1199)
{
	$error = 1;
	$mess = "Номер используется на другом аккаунте.";
	$fa = "error";
}
if(empty($bonus_url) || $bonus_url == "FAKE"){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо вступить в группу ВК!";
}
$sql_select = "SELECT code FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$emCode = $row['code'];
if($emCode != $code){
	$mess = "Неверный код с почты!";
	$fa = "error";
	$error = 3;	
}
if($vivodoff != 1)
{
	$error = 1;
	$mess = "Вывод временно недоступен, ошибка сервера.";
	$fa = "error";
}
if($system == 1 && $wallet[0] != "+"){
	$error = 1;
	$mess = "Номер QIWI должен начинаться с +!";
	$fa = "error";		
}
if($size > $bank_withdraw){

if($sliv != 1){
if($sumochka < 50){
	$error = 1;
	$mess = "Необходимо пополнить на 50 за последние 24 ч.!<br>У вас пополнено $sumochka/50";
	$fa = "error";	
}
}

}
if(!preg_match('/^[a-z0-9+]+$/i',$wallet)){
	$error = 1;
	$mess = "Неверный формат кошелька!";
	$fa = "error";	
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($wban == 1)
{
	$error = 22;
	$mess = "Вывод заблокирован!<br>Обратитесь в службу техническкой поддержки.";
	$fa = "error";
}
if($deposit <= 0 && $size > 250){
	$error = 1;
	$mess = "Макс. сумма вывода бонусного баланса - 250 RUB.";
	$fa = "error";	
}
if($sliv != 1){
if($wager > 0){
	$error = 1;
	$mess = "Необходимо отыграть $wager RUB! <u><a style='color:#fff' href='#' data-dismiss='modal' data-toggle='modal' data-target='#withdraw_rule'>(п. 6.9.1)</a></u>";
	$fa = "error";		
}
if($wager2 > 0){
	$error = 1;
	$mess = "Необходимо отыграть бонусные $wager RUB! <u><a style='color:#fff' href='#' data-dismiss='modal' data-toggle='modal' data-target='#withdraw_rule'>(п. 6.9.1)</a></u>";
	$fa = "error";		
}
}
if($vivodoff != 1)
{
	$error = 1;
	$mess = "Вывод временно недоступен, ошибка сервера.";
	$fa = "error";
}
if($balance < $size)
{
	$error = 1;
	$mess = "Недостаточно средств";
	$fa = "error";
}
if($system <= 3 && $size < 50)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  50 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 4 && $size < 1050)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1050 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 5 && $size < 1050)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1050 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 6 && $size < 1600)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1600 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 7 && $size < 1600)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1600 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system < 1 || $system > 7){
	$error = 4;
	$mess = "Ошибка выплаты!";
	$fa = "error";	
}
if(!is_numeric($size))
{
	$error = 2;
	$mess = "Сумма должна быть цифрами";
	$fa = "error";
}
if($error == 0)
{
	if($system == 1){
		$sys = "qiwi";	
		$ps = "26808";
	}
	if($system == 2){
		$sys = "payeer";
		$ps = "1136053";
	}	
	if($system == 3){
		$sys = "yandex";
		$ps = "57378077";
	}	
	if($system == 4){
		$sys = "visa";
		$size = $size * 0.95 - 50;
		$ps = "117146509";
	}	
	if($system == 5){
		$sys = "mcard";
		$size = $size * 0.95 - 50;
		$ps = "117650874";
	}	
	if($system == 6){
		$sys = "bitcoin";
		$size = $size * 0.9;
		$ps = "189279909";
	}	
	if($system == 7){
		$sys = "etherium";
		$size = $size * 0.9;
		$ps = "421934187";
	}		
	$verifieddd = "no";
	$datas = date("d.m.Y");
	$datass = date("H:i:s");
	$data = "$datas $datass";
	$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
	$code = rand(100000,999999);
	$sql_select = "UPDATE emails SET code='$code' WHERE user='$login'";
    $result = mysqli_query($conn, $sql_select);	
	$update_sql1 = "Update svuti_users set balance = balance - '$size' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$balancenew = $balance - $size;
	if($deposit < 200){
	$size = $size * 0.95;
	}
	$update_sql2 = "Update svuti_users set wager = 0 WHERE hash='$sid'";
    mysqli_query($conn, $update_sql2) or die("" . mysqli_error());	
	if($baltype == "deposit"){
    if($maxBank >= $size){
	    $update_sql1 = "Update bank_dep set maxBank = maxBank - '$size' WHERE id='1'";
        mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	}
	else{
		
	    $update_sql1 = "Update bank_dep set maxBank = '0' WHERE id='1'";
        mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	}
	}
	if($bank_withdraw >= $size){
	$update_sql1 = "Update bank_withdraw set bank = bank - '$size' WHERE id='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
	}
    else{
	$update_sql1 = "Update bank_withdraw set bank = '0' WHERE id='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());			
    }
	
if($off_on == 1)
{
	require_once('cpayeer.php');
    $accountNumber = 'P1030113177';
    $apiId = '1085830728';
    $apiKey = 'RDoTaLQCskoEO8N4';
    $payeer = new CPayeer($accountNumber, $apiId, $apiKey);	
	$arPs = $payeer->getPaySystems();
    $arBalance = $payeer->getBalance();
}

if($off_on == 1 && $bankaw >= $size && $size < 200 && $arBalance >= $size){
		
    if ($payeer->isAuth()){
    $initOutput = $payeer->initOutput(array(
        'ps' => $ps,
        'curIn' => 'RUB',
        'sumOut' => $size,
        'curOut' => 'RUB',
        'param_ACCOUNT_NUMBER' => "$wallet"
    ));

    if ($initOutput)
    {
        $historyId = $payeer->output();
        if ($historyId > 0 && $error == 0)
        {				
			$update_sql1 = "Update autow set bank = bank - '$size' WHERE id='1'";
            mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
            $insert_sql1 = "INSERT INTO `svuti_payout` (`user_id`, `login`, `suma`, `wallet`, `system`, `status`, `data`, `ip`, `verified`) VALUES ('{$userid}','{$login}', '{$size}', '{$wallet}', '{$sys}', 'Выплачено (A)', '{$data}', '{$ip}', '{$verifieddd}')";
            mysqli_query($conn, $insert_sql1);
            $fa = "success";
        }
        else
        {
           $error = 3;
           $mess = "Ошибка процесса выплаты!";
           $fa = "error";
        }
    }
    else{
        $error = 3;
        $mess = '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
        $fa = "error";
    }
}
else{
     $insert_sql1 = "INSERT INTO `svuti_payout` (`user_id`, `login`, `suma`, `wallet`, `system`, `status`, `data`, `ip`, `verified`) VALUES ('{$userid}','{$login}', '{$size}', '{$wallet}', '{$sys}', 'Ожидание', '{$data}', '{$ip}', '{$verifieddd}')";
     mysqli_query($conn, $insert_sql1);
}
    }

	else{
       $insert_sql1 = "INSERT INTO `svuti_payout` (`user_id`, `login`, `suma`, `wallet`, `system`, `status`, `data`, `ip`, `verified`) VALUES ('{$userid}','{$login}', '{$size}', '{$wallet}', '{$sys}', 'Ожидание', '{$data}', '{$ip}', '{$verifieddd}')";
       mysqli_query($conn, $insert_sql1);
   	}
$sql_select3 = "SELECT * FROM svuti_payout WHERE user_id='".$userid."' ORDER BY `data` DESC";
$result3 = mysqli_query($conn, $sql_select3);
$row3 = mysqli_fetch_array($result3);
$s = '<i class="fa fa-close close" onclick="otmena()" value="'.$row3['id'].'" id="otmina"></i>';
	$fa = "success";
		$add_bd = '<tr style="cursor:default!important" id="'.$row3['id'].'"><td>'.$s.$data.'</td><td>'.$wallet.'</td><td>'.$size.' <i class="fas fa-coins"></i></td>
							<td><div class="tag tag-warning"><i class="fa fa-clock-o"></i> Ожидание </div></td>

							</tr>';
// массив для ответа
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'balance' => "$balance",
	'new_balance' => "$balancenew",
	'add_bd' => "$add_bd"
    );
}
else{
	// массив для ответа
$result = array(
	'success' => "error",
	'error' => "Обновите страницу!"
    );
}
}

}
if($type == "deposit")
{
$sid = $_POST['sid'];	
$system = 1;
$size = $_POST['size'];
if($system == 1)
{
	$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$user_id = $row['id'];
}
  $MERCHANT_ID = 3620;
  $ORDER_AMOUNT = $size;
  $SECRET_WORD = "vuHwhN39yciIdw5xrDSeSgUds6R4YFM3";
  $PAYMENT_ID = time();
  $sign = md5($MERCHANT_ID.':'.$ORDER_AMOUNT.':'.$SECRET_WORD.':'.$PAYMENT_ID);
$podpis = md5($fkassa.':'.$size.':'.$fksec.':'. $user_id);
    $result = array(
	'success' => "success",
	'locations' => "https://enot.io/pay?cf=".$user_id."&m=$MERCHANT_ID&oa=$ORDER_AMOUNT&o=$PAYMENT_ID&s=$sign"
    );		
}
}
if($type == "updateHash")
{
	$random = mt_rand(0, 999999);
	$hash = hash('sha512', $random);
	$hid = 1;

// массив для ответа
    $result = array(
	'success' => "success",
	'hash' => "$hash",
	'hid' => "$hid"
    );
	
}
if($type == "betMin")
{
$sid = $_POST['sid'];
$betSize = preg_replace("/[^,.0-9]/", '', $_POST['betSize']);
$betPercent = preg_replace("/[^,.0-9]/", '', $_POST['betPercent']);
$hids = $_POST["hid"];
$sql_select23 = "SELECT * FROM bets WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$ffef = $row23['online'];
}
$sql_select23 = "SELECT * FROM offline WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$ffaf = $row23['online'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$user_id = $row['id'];
$wager = $row['wager'];
$slif = $row['sliv'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
$ban = $row['ban'];
$youtube = $row['youtube'];
$sliv = $row['sliv'];
$email = $row['email_new'];
$fake = $row['fake'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($ban == 1)
{
	$error = 22;
	$mess = "Обновите страницу";
	setcookie('sid', "", time()- 10);
}
if($ffaf >= 2)
{
	$error = 22;
	$mess = "Обновите страницу";
	setcookie('sid', "", time()- 10);
}
if($ffef > 1)
{
	$error = 2;
	$mess = "Ставки временно недоступны";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($bala < $betSize)
{
	$error = 1;
	$mess = "Недостаточно средств";
}
if($baltype != "deposit" && $baltype != "bonus"){
	$error = 2;
	$mess = "Ошибка обработки ставки!";	
}
$fx = ((100 / $betPercent * $betSize));
$fx2 = number_format($fx, 2, '.', ' ');
if($betSize == $fx2)
{
	$error = 2;
	$mess = "Ставка равна выигрышу!";
}
if($betSize < 0.1 && $betPercent > 50)
{
	$error = 2;
	$mess = "Для ставок ниже 0.1 <i class='fas fa-coins'></i><br>Макс. шанс - 50%";
}	
if($betSize < 0.01)
{
	$error = 2;
	$mess = "Ставки от 0.01 <i class='fas fa-coins'></i>";
}
if($betPercent <= 0)
{
	$error = 3;
	$mess = "% Шанс от 1 до 85";
}
if($betPercent > 85)
{
	$error = 4;
	$mess = "% Шанс от 1 до 85";
}
if($error == 0)
{
	if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
	$hashGame = hash("md5", mt_rand(0,10000000));
	$saltGame = 1000 / mt_rand(1000,9999);
		$hid = $_POST['hid'];
	$code = str_replace('-', '', $hid);
	$min = ($betPercent / 100) * 999999;
    $min = explode( '.', $min )[0];
	$rand = mt_rand(0,999999);
	$number = explode( '|', $rand )[1];
$salt12 = explode( '|', $rand )[0];
$salt12 = $salt1."|";
$namsalt12 = $salt1.$number;
$salt22 = str_replace($namsalt1, '', $rand);
$hash12 = hash('sha512', $rand);
$rand2 = explode( '|', $rand )[1];
$rand = preg_replace("/[^0-9]/", '', $rand);

		$code = str_replace('-', '', $hids);
$saltall = hash("sha256", mt_rand(0,9999999));
$sha = hash('sha512', $saltall);

for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[mt_rand(1,48)];
$salt2 .= $chr[mt_rand(1,48)];
}
$saltall = hash("sha256", mt_rand(0,9999999));
$sha = hash('sha512', $salt1.$rand.$salt2);  
if($sliv != 1){
   $rand = mt_rand(1,999999);
   $pWin = ((100 / $betPercent) * $betSize) - $betSize;
   if($baltype == "bonus")
   {
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $rand = mt_rand($min, 999999);
      }
	 
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $rand = mt_rand($min, 999999);  
	  }	  
	  
	  if($bank_dep < 0)
	  {
		 $rand = mt_rand($min, 999999);  
	  }
	  
   } 
}
if($maxPw != 0 && $bala > $maxPw){
   $forlose = rand(0,100);
   if($fx >= $maxPw){
	  $rand = mt_rand($min, 999999); 
   }
   else{
   if($forlose > 33){
	  $rand = mt_rand($min, 999999); 
   }  
   }
}
#endregion
	if($rand <= $min)
	{
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
}	
if($fake == 0){
     $newbalic = $bala - $betSize;
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());

		$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$logins = $row['login'];
}
		$suma = round(((100 / $betPercent) * $betSize), 2);
		$newbalic = $bala + $suma;
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
$winsumma = $suma - $betSize;
if($youtube == 0){
if($sliv == 0){
	$update_sql1 = "UPDATE `svuti_win` SET `win`=`win`+'{$winsumma}' WHERE `id`='1'";

    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
}
} 
} 
		$what = "win";
		//$error  = "1";
		//$hash = hash('sha512', $rand);
		// массив для ответа
		$chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[mt_rand(1,48)];
$salt2 .= $chr[mt_rand(1,48)];
}
$number = mt_rand(0, 999999);
$hash = hash('sha512', $salt1.$number.$salt2);
	$dete = time();
	
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$betSize' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	


	if($row['deposit'] >=100){
$cashtotal = $suma / 30;
$update_sql13 = "UPDATE `svuti_users` SET cashback = cashback + '{$cashtotal}' WHERE hash='$sid'";
mysqli_query($conn, $update_sql13);
}
if($wager > 0 && $betSize < $wager){
   if($betPercent <= 40){
	  $update_sql1 = "UPDATE svuti_users SET wager = wager - '$betSize' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
}
elseif($wager > 0 && $betSize >= $wager){
   if($betPercent <= 40){
	  $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
}	
if($sliv != 1){
   $xs = $suma - $bet;
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
   if($baltype == "bonus")
   {
	  $pWin = $pWin * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }     
}
$insert_sql1 = "INSERT INTO `svuti_games` (`login`,`user_id`, `chislo`, `cel`, `suma`, `shans`, `win_summa`, `type`, `data`, `saltall`, `hash`) 
VALUES ('{$logins}','{$user_id}', '{$rand}', '0-{$min}', '{$betSize}', '{$betPercent}', '{$suma}', '{$what}', '{$dete}', '{$saltall}', '{$sha}');
";

$mode_live = "Dice Game";
$coeff_live = 100 / $betPercent;
$profit_live = $betSize * $coeff_live;
$saltall = $salt1.$rand.$salt2;
if($coeff_live > 1){
$insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$betSize}', '{$coeff_live}', '{$profit_live}');";
mysqli_query($conn, $insert_live);
}

if(!$suma){
    $suma = 0;
}

mysqli_query($conn, $insert_sql1);
		$sql_select = "SELECT * FROM svuti_games WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$check_bet = $row['id'];
}
    $result = array(
	'success' => "success",
	'type' => "$what",
	'profit' => "$suma",
	'balance' => "$bala",
	'new_balance' => "$newbalic",
	'cel' => "0 - {$min}",
	'chance' => "$betPercent",
	'saltall' => "$saltall",
	'salt' => "$salt1",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'salt2' => "$salt2",
	'profit' => "$suma",
	'hash' => "$hash",
	'hid' => "$hid",
	'soundcookie' => "$soundsB",
	'number' => "$rand",
	'check_bet' => "$check_bet"
    );
	}
	else
	{
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$logins = $row['login'];
}
if($fake == 0){
		$newbalic = $bala - $betSize;
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	if($youtube == 0){
if($sliv == 0){
	$update_sql1 = "UPDATE `svuti_win` SET `lose`=`lose`+'{$betSize}'WHERE `id`='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
} 
} 
} 
	$what = "lose";
$chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[mt_rand(1,48)];
$salt2 .= $chr[mt_rand(1,48)];
}
$number = mt_rand(0, 999999);
$hash = hash('sha512', $salt1.$number.$salt2);
$saltall = $salt1.$rand.$salt2;
$suma = 0;
$sha = hash('sha512', $saltall);
$dete = time();
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$betSize' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	

if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $betSize < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$betSize' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $betSize >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}				
         }
         if($baltype == "bonus")
         {	
	        $pizdak = $betSize * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
}
if($wager > 0 && $betSize < $wager){
   if($betPercent <= 40){
	  $update_sql1 = "UPDATE svuti_users SET wager = wager - '$betSize' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
}
elseif($wager > 0 && $betSize >= $wager){
   if($betPercent <= 40){
	  $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
}	
$insert_sql1 = "INSERT INTO `svuti_games` (`login`,`user_id`, `chislo`, `cel`, `suma`, `shans`, `win_summa`, `type`, `data`, `saltall`, `hash`) 
VALUES ('{$logins}','{$user_id}', '{$rand}', '0-{$min}', '{$betSize}', '{$betPercent}', '{$suma}', '{$what}', '{$dete}', '{$saltall}', '{$sha}');
";
mysqli_query($conn, $insert_sql1);

$mode_live = "Dice Game";
$coeff_live = "0";
$profit_live = "0";
$saltall = $salt1.$rand.$salt2;
if($coeff_live > 1){
$insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$betSize}', '{$coeff_live}', '{$profit_live}');";
mysqli_query($conn, $insert_live);
}

if(!$suma){
    $suma = 0;
}

		$sql_select = "SELECT * FROM svuti_games WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$check_bet = $row['id'];
}
		$result = array(
	'success' => "success",
	'type' => "$what",
	'balance' => "$bala",
	'new_balance' => "$newbalic",
	'profit' => "$suma",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",	
	'hid' => "$hid",
	'cel' => "0 - {$min}",
	'chance' => "$betPercent",
	'saltall' => "$saltall",
	'salt' => "$salt1",
	'salt2' => "$salt2",
	'hash' => "$hash",
	'soundcookie' => "$soundsB",
	'number' => "$rand",
	'check_bet' => "$check_bet"
    );
	}
	////
//$error = "1";
}
}
if($error >= 1)
{
	////$mess = "Технический перерыв! 10 Минут!";
	// массив для ответа
    $result = array(
	'success' => "error",
	'error' => "$mess"
    );
}


if($type == "betMax")
{
$sid = $_POST['sid'];
$betSize = preg_replace("/[^,.0-9]/", '', $_POST['betSize']);
$betPercent = preg_replace("/[^,.0-9]/", '', $_POST['betPercent']);
$sql_select23 = "SELECT * FROM bets WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$ffef = $row23['online'];
}
$sql_select23 = "SELECT * FROM offline WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$ffaf = $row23['online'];
}
$sql_select23 = "SELECT * FROM bank_dep WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_dep = $row23['bank'];$maxBank = $row23['maxBank'];$minBank = $row23['minBank'];$xuyBank = $row23['xuyBank'];
}
$sql_select23 = "SELECT bank FROM bank_bon WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$bank_bon = $row23['bank'];
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$user_id = $row['id'];
$ban = $row['ban'];
$youtube = $row['youtube'];
$sliv = $row['sliv'];$email = $row['email_new'];
$fake = $row['fake'];
$wager = $row['wager'];
$slif = $row['sliv'];
$baltype = $row['baltype'];
$maxPw = $row['maxPw'];
}
session_start(); 
if($_SESSION['timestamp'] + 1 > time()){ 
$error = 3;
$fa = "error";
$mess = "Не нужно нажимать так быстро!";
} 
else{
$_SESSION['timestamp'] = time();
}
if($bala < $betSize)
{
	$error = 1;
	$mess = "Недостаточно средств";
}
if(empty($email))
{
	$error = 2;
	$fa = "error";
	$mess = '<a style="color:#fff" href="#" data-toggle="modal" data-target="#profile">Привяжите E-mail (нажмите)</a>';	
}
if($ban == 1)
{
	$error = 22;
	$mess = "Обновите страницу";
	setcookie('sid', "", time()- 10);
}
if($ffef > 1)
{
	$error = 2;
	$mess = "Ставки временно недоступны";
}
if($baltype != "deposit" && $baltype != "bonus"){
	$error = 2;
	$mess = "Ошибка обработки ставки!";	
}
$fx = ((100 / $betPercent * $betSize));
$fx2 = number_format($fx, 2, '.', ' ');
if($betSize == $fx2)
{
	$error = 2;
	$mess = "Ставка равна выигрышу!";
}
if($ffaf >= 2)
{
	$error = 22;
	$mess = "Обновите страницу";
	setcookie('sid', "", time()- 10);
}
if($betSize < 0.01)
{
	$error = 2;
	$mess = "Ставки от 0.01 <i class='fas fa-coins'></i>";
}
if($betSize < 0.1 && $betPercent > 50)
{
	$error = 2;
	$mess = "Для ставок ниже 0.1 <i class='fas fa-coins'></i><br>Макс. шанс - 50%";
}
if($betPercent <= 0)
{
	$error = 3;
	$mess = "% Шанс от 1 до 85";
}
if($betPercent > 85)
{
	$error = 4;
	$mess = "% Шанс от 1 до 85";
}
if($error == 0)
{
	if($_COOKIE['sounds'] == "yes"){
	$soundsB = "ok";
}
	$hashGame = hash("md5", mt_rand(0,10000000));
	$saltGame = 1000 / mt_rand(1000,9999);
	$hid = $_POST['hid'];
	$code = str_replace('-', '', $hid);
	$max = (999999 - (($betPercent / 100) * 999999));
$max = explode( '.', $max )[0];
$max = round($max, -1);
$rand = mt_rand(0,999999);
$rand = preg_replace("/[^0-9]/", '', $rand);
$code = str_replace('-', '', $hids);
$saltall = hash("sha256", mt_rand(0,9999999));
$sha = hash('sha512', $saltall);
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[mt_rand(1,48)];
$salt2 .= $chr[mt_rand(1,48)];
}
$saltall = hash("sha256", mt_rand(0,9999999));
$sha = hash('sha512', $salt1.$rand.$salt2);  

if($sliv != 1){
   $rand = mt_rand(1,999999);
   $pWin = ((100 / $betPercent) * $betSize) - $betSize;
   
	  if($pWin*(-1) < $minBank - $bank_dep)
      {
         $rand = mt_rand(0, $max);  
      }
	  
	  if($bank_dep < $xuyBank && $xuyBank != 0)
	  {
		 $rand = mt_rand(0, $max);  
	  }	  
	  if($bank_dep < 0)
	  {
		 $rand = mt_rand(0, $max);  
	  }
}
if($maxPw != 0 && $bala > $maxPw){
   $forlose = rand(0,100);
   if($fx >= $maxPw){
	  $rand = mt_rand(0, $max);
   }
   else{
   if($forlose > 33){
	  $rand = mt_rand(0, $max);
   }  
   }
}
	if($rand >= $max)
	{
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$logins = $row['login'];
}	
if($fake == 0)
{
     $newbalic = $bala - $betSize;
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	
		$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
}
		$suma = round(((100 / $betPercent) * $betSize), 2);
		$newbalic = $bala + $suma;
   $winsumma = $suma - $betSize;
if($youtube == 0){
if($sliv == 0){
		$update_sql1 = "UPDATE `svuti_win` SET `win`=`win`+'{$winsumma}'WHERE `id`='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	} 
} 
} 
if($fake == 1){
  $newbalic = $bala + $betSize;
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$weager = $row['wager'];
$logins = $row['login'];
}
$suma = round(((100 / $betPercent) * $betSize), 2);
}
		$what = "win";
		
$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$betSize' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
		
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
		//$error = "1";
		$suma = round($suma, 2);
$chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[mt_rand(1,48)];
$salt2 .= $chr[mt_rand(1,48)];
}
$number = mt_rand(0, 999999);
$hash = hash('sha512', $salt1.$number.$salt2);
$dete = time();
if($row['deposit'] >=100){
$cashtotal = $suma / 30;
$update_sql13 = "UPDATE `svuti_users` SET cashback = cashback + '{$cashtotal}' WHERE hash='$sid'";
mysqli_query($conn, $update_sql13);
}
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$iduser = $row['id'];
if($wager > 0 && $betSize < $wager){
   if($betPercent <= 40){
	  $update_sql1 = "UPDATE svuti_users SET wager = wager - '$betSize' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
}
elseif($wager > 0 && $betSize >= $wager){
   if($betPercent <= 40){
	  $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   }
}	
if($sliv != 1){
   $xs = $suma - $bet;
   if($baltype == "deposit")
   {
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
   if($baltype == "bonus")
   {
	  $pWin = $pWin * 1.5; 
	  $update_sql1 = "UPDATE bank_dep SET bank = bank - '$pWin' WHERE id='1'";
      mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
   } 
}
$insert_sql1 = "INSERT INTO `svuti_games` (`login`, `user_id`, `chislo`, `cel`, `suma`, `shans`, `win_summa`, `type`, `data`, `saltall`, `hash`) 
VALUES ('{$logins}','{$user_id}', '{$rand}', '{$max}-999999', '{$betSize}', '{$betPercent}', '{$suma}', '{$what}', '{$dete}', '{$saltall}', '{$sha}');
";
mysqli_query($conn, $insert_sql1);

$mode_live = "Dice Game";
$coeff_live = 100 / $betPercent;
$profit_live = $betSize * $coeff_live;
$saltall = $salt1.$rand.$salt2;
if($coeff_live > 1){
$insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$betSize}', '{$coeff_live}', '{$profit_live}');";
mysqli_query($conn, $insert_live);
}

if(!$suma){
    $suma = 0;
}

$sql_select = "SELECT * FROM svuti_games WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$check_bet = $row['id'];
}
		// массив для ответа
    $result = array(
	'success' => "success",
	'type' => "$what",
	'profit' => "$suma",
	'balance' => "$bala",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",
	'new_balance' => "$newbalic",
	'hash' => "$hash",
	'cel' => "{$max} - 999999",
	'chance' => "$betPercent",
	'saltall' => "$saltall",
	'salt' => "$salt1",
	'salt2' => "$salt2",
	'hid' => "$hid",
	'soundcookie' => "$soundsB",
	'profit' => "$suma",
	'number' => "$rand",
	'check_bet' => "$check_bet"
    );
	}
	else
	{
			$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$bala = $row['balance'];
$logins = $row['login'];
}
$suma = "0";
if($fake == 0)
{
		$newbalic = $bala - $betSize;
		$update_sql1 = "Update svuti_users set balance='$newbalic' WHERE hash='$sid'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	if($youtube == 0){
if($sliv == 0){
	$update_sql1 = "UPDATE `svuti_win` SET `lose`=`lose`+'{$betSize}'WHERE `id`='1'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
} 
} 
} 
	$what = "lose";
$chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[mt_rand(1,48)];
$salt2 .= $chr[mt_rand(1,48)];
}
$number = mt_rand(0, 999999);
$hash = hash('sha512', $salt1.$number.$salt2);	
$saltall = $salt1.$rand.$salt2;
$sha = hash('sha512', $saltall);
if($sliv != 1){
	     if($baltype == "deposit")
         {
			if($bank_dep + $betSize < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$betSize' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}	
			if($bank_dep + $betSize >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}			
         } 
         if($baltype == "bonus")
         {	
	        $pizdak = $betSize * 0.75;
			if($bank_dep + $pizdak < $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = bank + '$pizdak' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		
			if($bank_dep + $pizdak >= $maxBank)
			{
	           $update_sql1 = "UPDATE bank_dep SET bank = '$maxBank' WHERE id='1'";
               mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	
			}		 
		 }			 
}

$update_sql1 = "Update svuti_users set betsAmount = betsAmount + '$betSize' WHERE hash='$sid'";
mysqli_query($conn, $update_sql1) or die("" . mysqli_error());	

if($wager > 0 && $betSize < $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = wager - '$betSize' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}
elseif($wager > 0 && $betSize >= $wager){
   $update_sql1 = "UPDATE svuti_users SET wager = '0' WHERE hash='$sid'";
   mysqli_query($conn, $update_sql1) or die("" . mysqli_error());		   
}	
$dete = time();
$insert_sql1 = "INSERT INTO `svuti_games` (`login`, `user_id`, `chislo`, `cel`, `suma`, `shans`, `win_summa`, `type`, `data`, `saltall`, `hash`) 
VALUES ('{$logins}','{$user_id}', '{$rand}', '{$max}-999999', '{$betSize}', '{$betPercent}', '{$suma}', '{$what}', '{$dete}', '{$saltall}', '{$sha}');
";
mysqli_query($conn, $insert_sql1);

$mode_live = "Dice Game";
$coeff_live = "0";
$profit_live = "0";
$saltall = $salt1.$rand.$salt2;
if($coeff_live > 1){
$insert_live = "INSERT INTO `liveGames` (`mode`, `login`, `amount`, `coeff`, `profit`) VALUES ('{$mode_live}','{$logins}', '{$betSize}', '{$coeff_live}', '{$profit_live}');";
mysqli_query($conn, $insert_live);
}

if(!$suma){
    $suma = 0;
}

		$sql_select = "SELECT * FROM svuti_games WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$check_bet = $row['id'];
}
		$result = array(
	'success' => "success",
	'type' => "$what",
	'balance' => "$bala",
	'soundcookie' => "$soundsB",
	'new_balance' => "$newbalic",
	'hash' => "$hash",
	'cel' => "{$max} - 999999",
	'profit' => "$suma",
	'hashGame' => "$hashGame",
	'saltGame' => "$saltGame",	
	'chance' => "$betPercent",
	'saltall' => "$saltall",
	'salt' => "$salt1",
	'salt2' => "$salt2",
	'hid' => "$hid",
	'number' => "$rand",
	'check_bet' => "$check_bet"
    );
	}
	////
//$error = "1";
}
}
if($error >= 1)
{
	////$mess = "Технический перерыв! 10 Минут!";
	// массив для ответа
    $result = array(
	'success' => "error",
	'error' => "$mess"
    );
}

if($type == "resetPass")
{
$email = $_POST['email'];
$reset_pass1 = $_POST['reset_pass1'];
$reset_pass2 = $_POST['reset_pass2'];
$count_pass = strlen($reset_pass1);
$sql_select = "SELECT * FROM svuti_users WHERE email_new='$email'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$emailz = $row['email_new'];
$login = $row['login'];
if(!$row){
	$mess = "Аккаунт с такой почтой не найден!";
	$fa = "error";
	$error = 3;
}
if (!preg_match("/^[0-9a-zA-Z]+$/",$reset_pass1) || !preg_match("/^[0-9a-zA-Z]+$/",$reset_pass2)) 
{
	$mess = "Введите корректный пароль";
	$fa = "error";
	$error = 3;
} 
if($count_pass < 6){
	$mess = "Пароль минимум из 6 символов";
	$fa = "error";
	$error = 3;	
}
if($reset_pass1 != $reset_pass2){
	$mess = "Пароли не совпадают!";
	$fa = "error";
	$error = 3;		
}
if($error == 0)
{
	
$from = "verify@hotskins.club";
$to = $email;
$code = rand(100000,999999);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message

$subject = "Hotskins - восстановление пароля";
$message = '<html><body>';
$message .= '<p style="font-size:22px">Код для восстановления пароля: <b>'.$code.'<b><br><p style="color:#ff0000">Если вы не запрашивали этот код - рекомендуем обратиться в поддержку!</p></p>';
$message .= '</body></html>';
mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers);

$sql_select = "SELECT * FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
   $sql_select = "UPDATE emails SET code='$code', email='$email' WHERE user='$login'";
   $result = mysqli_query($conn, $sql_select);	
}
else{
   $insert_sql1 = "INSERT INTO `emails` (`code`, `user`, `email`) VALUES ('{$code}','{$login}','{$email}');";
   mysqli_query($conn, $insert_sql1);
}
$fa = "success";	
}
$result = array(
    'success' => "$fa",
	'error' => "$mess"
    );
}

if($type == "resDone")
{
$email = $_POST['email'];
$code = (int) $_POST['code'];
$reset_pass1 = $_POST['reset_pass1'];
$reset_pass2 = $_POST['reset_pass2'];
$count_pass = strlen($reset_pass1);
$sql_select = "SELECT * FROM svuti_users WHERE email_new='$email'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$emailz = $row['email_new'];
$email_old = $row['email'];
$login = $row['login'];
if(!$row){
	$mess = "Аккаунт с такой почтой не найден!";
	$fa = "error";
	$error = 3;
}
$sql_select = "SELECT * FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$codeZ = $row['code'];
if (!preg_match("/^[0-9a-zA-Z]+$/",$reset_pass1) || !preg_match("/^[0-9a-zA-Z]+$/",$reset_pass2)) 
{
	$mess = "Введите корректный пароль";
	$fa = "error";
	$error = 3;
} 
if($count_pass < 6){
	$mess = "Пароль минимум из 6 символов";
	$fa = "error";
	$error = 3;	
}
if($reset_pass1 != $reset_pass2){
	$mess = "Пароли не совпадают!";
	$fa = "error";
	$error = 3;		
}
if($code != $codeZ){
	$mess = "Неверный код с почты!";
	$fa = "error";
	$error = 3;			
}
if($error == 0)
{	
	$chars3="qazxswedcvfrtgnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
    $max3=32; 
    $size3=strlen($chars3)-1; 
    $passwords3=null; 
    while($max3--) 
    $hashed.=$chars3[mt_rand(32,$size3)];
    $hash = hash('sha256', $hashed);
    $newpass = hash('sha256', $reset_pass1.$email_old.$sitesalt);	
	$update_sql1 = "Update svuti_users set password='$newpass' WHERE email_new='$emailz'";
    mysqli_query($conn, $update_sql1) or die("" . mysqli_error());
	$mess = "Пароль успешно изменен!";
	$fa = "success";	
}
$result = array(
    'success' => "$fa",
	'error' => "$mess"
    );
}

if($type == "login")
{
$ipwnik = $_SERVER["HTTP_CF_CONNECTING_IP"];
$sql_select = "SELECT * FROM `svuti_users` WHERE login='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$userid = $row['id'];
$email = $row['email'];
$passbd = $row['password'];
$userbalance = $row['balance'];
$fa = "success";
$ban = $row['ban'];
$ban_mess = $row['ban_mess'];
}
$sign = $_COOKIE['sign'];
$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE sign='$sign' AND sign != ''";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$signs = $row['COUNT(*)'];
}
if($signs > 1)
{
   $sql_select = "UPDATE svuti_users SET ban='1', ban_mess='мультиакк' WHERE sign='$sign'";
   $result = mysqli_query($conn, $sql_select);
   $mess = "Регистрация более одного аккаунта запрещена";
   $error = 1;
   $fa = "error";
}
if(hash('sha256', $pass.$email.$sitesalt) != $passbd){
	$mess = "Неверный логин/пароль!";
	$fa = "error";
	$error = 3;
}
if (!preg_match("/^[0-9a-zA-Z]+$/",$login)) 
{
	$mess = "Введите корректный логин";
	$fa = "error";
	$error = 3;
}
if (!preg_match("/^[0-9a-zA-Z]+$/",$pass)) 
{
	$mess = "Введите корректный пароль";
	$fa = "error";
	$error = 3;
} 
if($ban == 1 && !empty($ban_mess))
{
	$error = 6;
	$mess = "Аккаунт заблокирован.<br>Причина: <b>$ban_mess</b>";
	$fa = "error";
}
if($ban == 1 && empty($ban_mess))
{
	$error = 6;
	$mess = "Аккаунт заблокирован.";
	$fa = "error";
}
if($error == 0){
$chars3="qazxswedcvfrtgnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 	
$max3=32; 
$size3=strlen($chars3)-1; 
$passwords3=null; 
while($max3--) 
$hash.=$chars3[mt_rand(32,$size3)];
$hpass = hash('sha256', $hash);	
$update_sql = "UPDATE `svuti_users` SET hash = '{$hpass}' WHERE login = '$login'";
mysqli_query($conn, $update_sql) or die("" . mysqli_error());
setcookie('sid', $hpass, time()+3600*24*365, '/');
$sign = $_COOKIE['sign'];
if(!empty($sign)){
$update_sql = "UPDATE `svuti_users` SET sign = '{$sign}' WHERE login = '$login'";
mysqli_query($conn, $update_sql) or die("" . mysqli_error());
}
$update_sql = "UPDATE `svuti_users` SET iprox = '{$ipwnik}' WHERE login = '$login'";
mysqli_query($conn, $update_sql) or die("" . mysqli_error());
}

// массив для ответа
    $result = array(
	'sid' => "$hpass",
	'uid' => "$userid",
    'success' => "$fa",
	'error' => "$mess"
    );
}

if($type == "lem")
{	
$code = (int) $_POST['code'];
$sql_select = "SELECT * FROM `svuti_users` WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$login = $row['login'];
$sql_select = "SELECT * FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$cods = $row['code'];
$email = $row['email'];
if($code != $cods){
	$mess = "Неверный код!";
	$fa = "error";
	$error = 3;			
}
if($error == 0){
	$sql_select = "UPDATE svuti_users SET email_new='$email' WHERE login='$login'";
    $result = mysqli_query($conn, $sql_select);
	$fa = "success";
}
    $result = array(
    'success' => "$fa",
	'error' => "$mess"
    );
}

if($type == "wEmail")
{	
$sid = $_POST['sid'];
$system = $_POST['system'];
$size = $_POST['size'];
$wallet = $_POST['wallet'];
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$emails = $row['email_new'];
$wager = $row['wager'];
$balance = $row['balance'];
$deposit = $row['deposit'];
$wager2 = $row['wager2'];
$login = $row['login'];
$baltype = $row['baltype'];
$userid = $row['id'];
$bonus_url = $row['bonus_url'];
$sql_select1199 = "SELECT * FROM svuti_payout WHERE qiwi='$wallet' AND user_id != '$userid'";
$result1199 = mysqli_query($conn, $sql_select1199);
$row1199 = mysqli_fetch_array($result1199);
$sql_select4232 = "SELECT SUM(suma) FROM slim_zakidi WHERE user_id='$userid'";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$sumapey2 = $row4232['SUM(suma)'];
$sql_select4232 = "SELECT * FROM svuti_payout WHERE user_id='$userid'";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$sumapey2 = $row4232['SUM(suma)'];
$sql_select111 = "SELECT COUNT(*) FROM svuti_users WHERE ip_reg='$ipchik'";
$result111 = mysqli_query($conn, $sql_select111);
$row111 = mysqli_fetch_array($result111);
$baner = $row111['COUNT(*)'];
$sql_select4444 = "SELECT sum(suma) FROM slim_zakidi WHERE data >= DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY) and user_id='$userid'";
$result4444 = mysqli_query($conn, $sql_select4444);
$row4444 = mysqli_fetch_array($result4444);
$sumochka = $row4444['sum(suma)'];
$sql_select4232 = "SELECT * FROM bank_withdraw WHERE id='1'";
$result4232 = mysqli_query($conn, $sql_select4232);
$row4232 = mysqli_fetch_array($result4232);
$bank_withdraw = $row4232['bank'];
if(is_null($sumochka)){$sumochka = 0;}

if(empty($emails))
{
	$mess = "Привяжите почту в настройках!";
	$fa = "error";
	$error = 3;		
}
if($row1199)
{
	$error = 1;
	$mess = "Номер используется на другом аккаунте.";
	$fa = "error";
}
if(empty($bonus_url) || $bonus_url == "FAKE"){
	$error = 3;
    $fa = "error";
    $mess = "Необходимо вступить в группу ВК!";
}
if($system == 1 && $wallet[0] != "+"){
	$error = 1;
	$mess = "Номер QIWI должен начинаться с +!";
	$fa = "error";		
}

if($size > $bank_withdraw){

if($sliv != 1){
if($sumochka < 50){
	$error = 1;
	$mess = "Необходимо пополнить на 50 за последние 24 ч.!<br>У вас пополнено $sumochka/50";
	$fa = "error";	
}
}

}

if(!preg_match('/^[a-z0-9+]+$/i',$wallet)){
	$error = 1;
	$mess = "Неверный формат кошелька!";
	$fa = "error";	
}
if($wban == 1)
{
	$error = 22;
	$mess = "Вывод заблокирован!<br>Обратитесь в службу техническкой поддержки.";
	$fa = "error";
}
if($deposit <= 0 && $size > 250){
	$error = 1;
	$mess = "Макс. сумма вывода бонусного баланса - 250 RUB.";
	$fa = "error";	
}
if($sliv != 1){
if($wager > 0){
	$error = 1;
	$mess = "Необходимо отыграть $wager RUB! <u><a style='color:#fff' href='#' data-dismiss='modal' data-toggle='modal' data-target='#withdraw_rule'>(п. 6.9.1)</a></u>";
	$fa = "error";		
}
if($wager2 > 0){
	$error = 1;
	$mess = "Необходимо отыграть бонусные $wager RUB! <u><a style='color:#fff' href='#' data-dismiss='modal' data-toggle='modal' data-target='#withdraw_rule'>(п. 6.9.1)</a></u>";
	$fa = "error";		
}
}
if($balance < $size)
{
	$error = 1;
	$mess = "Недостаточно средств";
	$fa = "error";
}
if($system <= 3 && $size < 50)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  50 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 4 && $size < 1050)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1050 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 5 && $size < 1050)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1050 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 6 && $size < 1600)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1600 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system == 7 && $size < 1600)
{
	$error = 4;
	$mess = "Минимальная сумма вывода -  1600 <i class='fas fa-coins'></i>";
	$fa = "error";
}
if($system < 1 || $system > 7){
	$error = 4;
	$mess = "Ошибка выплаты!";
	$fa = "error";	
}
if(!is_numeric($size))
{
	$error = 2;
	$mess = "Сумма должна быть цифрами";
	$fa = "error";
}
if($error == 0)
{
$from = "verify@hotskins.club";
$to = $emails;
$code = rand(100000,999999);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$subject = "Hotskins - подтверждение действия аккаунта";
$message = '<html><body>';
$message .= '<p style="font-size:22px">Код для подтверждения выплаты: <b>'.$code.'</b></p>';
$message .= '</body></html>';
mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers);

$sql_select = "SELECT * FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
   $sql_select = "UPDATE emails SET code='$code', email='$emails' WHERE user='$login'";
   $result = mysqli_query($conn, $sql_select);	
}
else{
   $insert_sql1 = "INSERT INTO `emails` (`code`, `user`, `email`) VALUES ('{$code}','{$login}','{$emails}');";
   mysqli_query($conn, $insert_sql1);
}
$fa = "success";
}
    $result = array(
    'success' => "$fa",
	'error' => "$mess"
    );
}


if($type == "linkEm")
{	
$email = $_POST['email'];
$sql_select = "SELECT * FROM svuti_users WHERE hash='$sid'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$emails = $row['email_new'];
$login = $row['login'];
if(!empty($emails))
{
	$mess = "Вы уже привязали почту!";
	$fa = "error";
	$error = 3;		
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$mess = "Неверный формат Email!";
	$fa = "error";
	$error = 3;			
}

$arr = explode("@", $email, 2);
$first = $arr[0];
$second = $arr[1];
$emailZ = str_replace(".", "", $first);
$emailZ = "$emailZ@$second";

$sql_select = "SELECT * FROM svuti_users WHERE email_new='$emailZ' OR email='$emailZ'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$mess = "Такая почта уже существует!";
	$fa = "error";
	$error = 3;		
}

$sql_select = "SELECT * FROM svuti_users WHERE email='$email'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$mess = "Такая почта уже существует!";
	$fa = "error";
	$error = 3;		
}

$whatIWant = substr($email, strpos($email, "@") + 1);    
$whitelist = array(
'gmail.com',
'yandex.ru',
'mail.ru',
'bk.ru',
'srv1.mail-tester.com',
'list.ru',
'inbox.ru',
'ukr.net',
'icloud.com',
);
$domain = $whatIWant;

if(!in_array($domain, $whitelist))
{
	$mess = "Эта почта запрещена!";
	$fa = "error";
	$error = 3;	
}

if($error == 0)
{
$from = "verify@hotskins.club";
$to = $email;
$code = rand(100000,999999);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$subject = "Hotskins - подтверждение эл.почты";
$message = '<html><body>';
$message .= '<p style="font-size:22px">Код для привязки Email к вашему аккаунту: <b>'.$code.'</b></p>';
$message .= '</body></html>';
mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers);

$sql_select = "SELECT * FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
   $sql_select = "UPDATE emails SET code='$code', email='$email' WHERE user='$login'";
   $result = mysqli_query($conn, $sql_select);	
}
else{
   $insert_sql1 = "INSERT INTO `emails` (`code`, `user`, `email`) VALUES ('{$code}','{$login}','{$email}');";
   mysqli_query($conn, $insert_sql1);
}
$fa = "success";
}
    $result = array(
    'success' => "$fa",
	'error' => "$mess"
    );
}


if($type == "emReg")
{	
if(empty($email)){
	exit();
}
if(empty($login))
{
	exit();
} 
$whatIWant = substr($email, strpos($email, "@") + 1);    
$whitelist = array(
'gmail.com',
'yandex.ru',
'mail.ru',
'bk.ru',
'list.ru',
'inbox.ru',
'srv1.mail-tester.com',
'ukr.net',
'icloud.com',
);
$domain = $whatIWant;
$sql_select = "SELECT * FROM svuti_users WHERE email_new='$email'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$mess = "Такая почта уже существует!";
	$fa = "error";
	$error = 3;		
}

if(!in_array($domain, $whitelist))
{
	$mess = "Эта почта запрещена!";
	$fa = "error";
	$error = 3;	
}

$arr = explode("@", $email, 2);
$first = $arr[0];
$second = $arr[1];
$emailZ = str_replace(".", "", $first);
$emailZ = "$emailZ@$second";

$sql_select = "SELECT * FROM svuti_users WHERE email_new='$emailZ' OR email='$emailZ'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
	$mess = "Такая почта уже существует!";
	$fa = "error";
	$error = 3;		
}


if($error == 0)
{
$from = "verify@hotskins.club";
$to = $email;
$code = rand(100000,999999);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$subject = "Hotskins - подтверждение регистрации";
$message = '<html><body>';
$message .= '<p style="font-size:22px">Код для подтверждения регистрации: <b>'.$code.'</b></p>';
$message .= '</body></html>';
mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers);

$sql_select = "SELECT * FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{
   $sql_select = "UPDATE emails SET code='$code', email='$email' WHERE user='$login'";
   $result = mysqli_query($conn, $sql_select);	
}
else{
   $insert_sql1 = "INSERT INTO `emails` (`code`, `user`, `email`) VALUES ('{$code}','{$login}','{$email}');";
   mysqli_query($conn, $insert_sql1);
}
$fa = "success";
}
    $result = array(
    'success' => "$fa",
	'error' => "$mess"
    );
}

if($type == "register")
{
function getUserIP() {
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    return $ip;
}
$datas = date("d.m.Y");
$datass = date("H:i:s");
$data = "$datas $datass";
$ip = getUserIP();
$iprox = getUserIP();
$dllogin = strlen($login);
$codeEm = $_POST['emCode'];
$sql_select = "SELECT code FROM emails WHERE user='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$emCode = $row['code'];
if($emCode != $codeEm){
	$mess = "Неверный код с почты!";
	$fa = "error";
	$error = 3;	
}
if (!preg_match("/^[0-9a-zA-Z]+$/",$login)) 
{
	$mess = "Введите корректный логин";
	$fa = "error";
	$error = 3;
} 
if (!preg_match("/^[0-9a-zA-Z]+$/",$pass)) 
{
	$mess = "Введите корректный пароль";
	$fa = "error";
	$error = 3;
} 
if($dllogin < 4 || $dllogin > 15)
{
	$error = 4;
	$fa = "error";
	$mess = 'Логин от 4 до 15 символов';
}
if($_SESSION['timestamp'] + 5 > time()){ 
$error = 3;
$fa = "error";
$mess = "Попробуйте позже";
$success = "no";
} 
else{
$_SESSION['timestamp'] = time();
}
$ipprox = $_SERVER["HTTP_CF_CONNECTING_IP"];
$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE login='$login'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$usersss = $row['COUNT(*)'];
}
$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE email='$email'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$emailstu = $row['COUNT(*)'];
}
$sql_select444 = "SELECT COUNT(*) FROM svuti_users WHERE ip_reg='$iprox'";
$result444 = mysqli_query($conn, $sql_select444);
$row444 = mysqli_fetch_array($result444);
if($row444)
{	
$ipshnik = $row444['COUNT(*)'];
}
$_SERVER["HTTP_CF_CONNECTING_IP"];
$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE ip='$ip'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$ipshnik2 = $row['COUNT(*)'];
}
$sign = $_COOKIE['sign'];
$sql_select = "SELECT COUNT(*) FROM svuti_users WHERE sign='$sign' AND sign != ''";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$signs = $row['COUNT(*)'];
}
if($signs > 1)
{
   $sql_select = "UPDATE svuti_users SET ban='1', ban_mess='мультиакк' WHERE sign='$sign'";
   $result = mysqli_query($conn, $sql_select);
   $mess = "Регистрация более одного аккаунта запрещена";
   $error = 1;
   $fa = "error";
}
if($usersss == "1")
{
	$error = 1;
	$mess = "Логин занят";
}
if($emailstu == "1")
{
	$error = 2;
	$mess = "Email занят";
    $fa = "error";
}
if($ipshnik >= 1)
{
	$error = 2;
	$mess = "Регистрация более одного аккаунта запрещена";
    $fa = "error";
}
if($error == 0){
$sounds = "yes";
setcookie('sounds', $sounds, time()+3600*24*365, '/');
$ref = $_COOKIE["ref"];
if(!isset($_COOKIE['sign'])){
$chars3="qazxswedcvfrtgnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
$max3=32; 
$size3=strlen($chars3)-1; 
$passwords3=null; 
while($max3--) 
$hashedz.=$chars3[mt_rand(32,$size3)];
$signe = hash('sha256', $hashedz);
setcookie('sign', $signe, strtotime( '+365 days' ), '/');
}
else{
$signe = $_COOKIE['sign'];
}
$datas = date("d.m.Y");
	$datass = date("H:i:s");
	$data = "$datas $datass";
	$chars3="qazxswedcvfrtgnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
$max3=32; 
$size3=strlen($chars3)-1; 
$passwords3=null; 
while($max3--) 
$hashed.=$chars3[mt_rand(32,$size3)];
$hash = hash('sha256', $hashed);
$hashedpassword = hash('sha256', $pass.$email.$sitesalt);
$insert_sql1 = "INSERT INTO `svuti_users` (`data_reg`, `iprox`, `sign`, `ip_reg`, `referer`, `login`, `password`, `email`, `email_new`, `hash`, `balance`, `bonusposts`) VALUES ('{$data}','{$iprox}','{$signe}','{$iprox}','{$ref}', '{$login}','{$hashedpassword}', '{$email}', '{$email}', '{$hash}', '0', '');";
sleep(1);
mysqli_query($conn, $insert_sql1);
setcookie('sid', $hash, strtotime( '+7 days' ), '/');
setcookie('ref', '', time()-1, '/');
$fa = "success";
}
else
{
	$fa = "error";
}
// массив для ответа
    $result = array(
	'sid' => "$hash",
    'success' => "$fa",
	'error' => "$mess"
    );
}

    echo json_encode($result);
?>
