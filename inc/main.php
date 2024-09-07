<?php
$depobon = 0;
$chars3="qazxswedcvfrtgnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
$max3=32; 
$size3=StrLen($chars3)-1; 
$passwords3=null; 
while($max3--) 
$pizdos.=$chars3[rand(32,$size3)];
$sign = hash('sha256', $pizdos);

if($_GET['i'])
{
setcookie('ref', $_GET['i'], time()+1200, '/');
}
if(empty($_COOKIE['sign'])){
setcookie('sign', $sign, time()+360000, '/');
}
///
if($_COOKIE["sid"] == "")
{

$go = <<<HERE

					                         <div class="row">
                            <div class="col-xs-12">
                                <div class="card" style="border-radius:20px!important;">									
                                    <div class="card-body" style="box-shadow: rgba(210, 215, 222, 0.5) 7px 10px 23px -11px;background-color:#ffca1c">
                                        <div class="row">
                                            <div class="col-lg-6  col-md-12 col-sm-12 ">
                                                <div id="what-is" class="card" style="">
                                                    <div  class="card-header"   style="background-color:#ffca1c">
                                                        <h4 class="card-title"><b>Что такое HOTSKINS?</b></h4>

                                                    </div>
                                                    <div class="card-body collapse in" style="background-color:#ffca1c">
                                                        <div class="card-block">
                                                            <div class="card-text">
                                                                <p style="font-size:15.5px">Сервис мгновенных игр, где шанс выигрыша указываете сами. Вывод от 50р за 10 минут</p>
                                                                <ul>
																    <li>Быстрые выплаты</li>
																	<li>5 р. за каждого реферала</li>
                                                                    <li>Денежный бонус каждые 15 минут</li>
																	<li>14 игровых режимов</li>
                                                                    <li>Проверяйте на честность любую игру</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6  col-md-12 col-sm-12 ">
                                                <div id="login">
                                                    
                                                    <div class="col-lg-10 offset-lg-1">
													<div class="card-header no-border pb-0" style="background-color:#ffca1c">
                                                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span style="font-size:17px"> Авторизация </span></h6>
                                                    </div>
                                                        <div class="card-body collapse in"  style="background-color:#ffca1c">
                                                            <div class="card-block">
                                                                <form class="form-horizontal">
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control form-control-md input-md" id="userLogin" value="" placeholder="Логин"  >
                                                                        <div class="form-control-position">
                                                                            <i class="ft-user"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="password" class="form-control form-control-md input-md" id="userPass" placeholder="Пароль">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
                                                                        </div>
                                                                    </fieldset>
															     	<div class="g-recaptcha" data-sitekey="6LehzqgZAAAAAOV7myyssZOw1gSJUGvaoKJeUtN2"></div>
                                                                    <a id="error_enter" class="btn  btn-block btnError" style="margin-top:5px;color:#fff;display:none;"></a>

                                                                    <a id="enter_but" onclick="login()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px;">
                                                                        <center><span id="text_enter" style="margin-top:10px"> <i class="ft-unlock"></i>  Войти</span>

                                                                            <div id="loader" style="position:absolute">
                                                                                <div id='dot-container' style='display:none'>
                                                                                    <div id="left-dot" class='white-dot'></div>
                                                                                    <div id='middle-dot' class='white-dot'></div>
                                                                                    <div id='right-dot' class='white-dot'></div>
                                                                                </div>
                                                                            </div>

                                                                        </center>
                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer no-border" style="margin-top:-12x;background-color:#ffca1c">
                                                            <p class="float-sm-left text-xs-center"><a onclick="register_show()" class="card-link">Регистрация</a></p>
															<p class="float-sm-right text-xs-center"><a onclick="reset_show()" class="card-link">Восстановить аккаунт</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="register" style="display:none">
                                                   
                                                    <div class="col-lg-10 offset-lg-1">
													 <div class="card-header no-border pb-0" style="background-color:#ffca1c">
                                                        <h6  class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2" style="background-color:#ffca1c"><span style="font-size:17px">Регистрация </span></h6>
                                                    </div>
                                                        <div class="card-body collapse in">
                                                            <div class="card-block">
                                                                <form class="form-horizontal" >
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control form-control-md input-md" id="userLoginRegister" placeholder="Логин">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-user"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="email" class="form-control form-control-md input-md" id="userEmailRegister" placeholder="E-mail">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-mail"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="password" class="form-control form-control-md input-md" id="userPassRegister" placeholder="Пароль">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
                                                                        </div>
                                                                    </fieldset>
																	<div class="g-recaptcha" data-sitekey="6LehzqgZAAAAAOV7myyssZOw1gSJUGvaoKJeUtN2"></div>
																	<fieldset style="margin-top:15px">
																		<label class="check1">
																		  <input id="rulesagree" type="checkbox"/>
																		  <div class="box1"></div>
																		 
																		 
																		</label>
																		 <div style="display:inline-block;padding-left:10px;position:absolute">Согласен c <u data-toggle="modal" data-target="#large" style="cursor:pointer">правилами</u></div>
																	</fieldset>
                                                                    <a id="error_register" class="btn  btn-block btnError" style="color:#fff;display:none;"></a>
                                                                    <a onclick="emReg()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px;">   
                                                                        <center><span id="text_register"><i class="ft-check"></i> Зарегистрироваться</span>

                                                                            <div id="loader_register" style="position:absolute">
                                                                                <div id='dot-container_register' style='display:none'>
                                                                                    <div id="left-dot_register" class='white-dot'></div>
                                                                                    <div id='middle-dot_register' class='white-dot'></div>
                                                                                    <div id='right-dot_register' class='white-dot'></div>
                                                                                </div>
                                                                            </div>

                                                                        </center>
                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer no-border" style="margin-top:-12px;background-color:#ffca1c">
                                                            <p class="float-sm-left text-xs-center"><a onclick="login_show()" class="card-link">Есть аккаунт</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="reset" style="display:none">
                                                    
                                                    <div class="col-lg-10 offset-lg-1">
													<div class="card-header no-border pb-0">
                                                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span style="font-size:17px">Восстановление аккаунта</span></h6>
                                                    </div>
                                                        <div class="card-body collapse in">
                                                            <div class="card-block">
                                                             
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="email" class="form-control form-control-md input-md" id="em_recover" placeholder="E-mail аккаунта">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-mail"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left" style="margin-top:5px">
                                                                        <input type="password" class="form-control form-control-md input-md" id="reset_pass1" placeholder="Новый пароль">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
                                                                        </div>
                                                                    </fieldset>	
                                                                    <fieldset class="form-group position-relative has-icon-left" style="margin-top:5px">
                                                                        <input type="password" class="form-control form-control-md input-md" id="reset_pass2" placeholder="Повторите пароль">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
                                                                        </div>
                                                                    </fieldset>			
                                                                    <fieldset class="form-group position-relative has-icon-left" id="emBox-reset" style="display:none;margin-top:5px">
                                                                        <input type="text" class="form-control form-control-md input-md" id="emCode_reset" placeholder="Код, отправленный на почту">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-mail"></i>
                                                                        </div>
                                                                    </fieldset>																			
																	
                                                                    <a id="error_reset" class="btn  btn-block btnError" style="color:#fff;display:none;margin-top:5px;"></a>
                                                                    <a id="reset_success" class="btn  btn-block btnSuccess" style="color:#fff;display:none;margin-top:5px;"></a>
                                                                    <a  id="reset_but" onclick="reset_password()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px;">

                                                                        <center><span id="text_reset"><i class="ft-check"></i> Восстановить аккаунт</span>

                                                                            <div id="loader_reset" style="position:absolute">
                                                                                <div id='dot-container_reset' style='display:none'>
                                                                                    <div id="left-dot_reset" class='white-dot'></div>
                                                                                    <div id='middle-dot_reset' class='white-dot'></div>
                                                                                    <div id='right-dot_reset' class='white-dot'></div>
                                                                                </div>
                                                                            </div>

                                                                        </center>
                                                                    </a>                                                               
                                                            </div>
                                                        </div>
 
                                                        <div class="card-footer no-border" style="margin-top:-12px">
                                                            <p class="float-sm-left text-xs-center"><a onclick="login_show()" class="card-link">Есть аккаунт</a></p>
                                                            <p class="float-sm-right text-xs-center"><a onclick="register_show()" class="card-link">Регистрация </a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
HERE;
$panel = <<<HERE

<div data-menu="menu-container" class="navbar-container main-menu-content container center-layout">
                    <!-- include ../../../includes/mixins-->
                    <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
                        <li class="dropdown nav-item active" onclick="$('.dsec').hide();$('#lastBets').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#lastBets').offset().top);">
                            <a class="dropdown-toggle nav-link"><span><i class="fa fa-home"></i> Главная</span></a>

                        </li>

                        <li class="dropdown nav-item " onclick="$('.dsec').hide();$('#rules').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#rules').offset().top);">
                            <a class="dropdown-toggle nav-link"><span><i class="fa fa-question"></i> Как играть</span></a>
                        </li>

												<li class="dropdown nav-item " onclick="$('.dsec').hide();$('#contacts').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#contacts').offset().top);">
                            <a class="dropdown-toggle nav-link"><span><i class="fa fa-book"></i> Контакты</span></a>
                        </li>
						
						<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();location.href = 'https://tgme.pro/hotskinsclub'">
                            <a class="dropdown-toggle nav-link"><span style="color:#ff381b"><i class="fab fa-telegram-plane"></i> Телеграм (промокоды)</span></a>
                        </li> 
						<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();location.href = 'https://vk.com/im?media=&message=&sel=-196560794'">
                            <a class="dropdown-toggle nav-link"><span><i class="fas fa-user-check"></i> Сотрудничество</span></a>
                        </li> 
						
                    </ul>
                </div>

HERE;

}
else
{
	
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
	
$hashh = $_COOKIE["sid"];
$sql_select = "SELECT bank FROM `bank_withdraw` WHERE id='1'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$bonbank = $row['bank'];
$sql_select = "SELECT * FROM `svuti_users` WHERE hash='$hashh'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$yout = $row['youtube'];
$prava = $row['prava'];
$userhash = $row['hash'];
$userid = $row['id'];
$idref = $row['id'];
$secretC = $row['secret_code'];
$balance = $row['balance'];
$login = $row['login'];
$datareg = $row['data_reg'];
$withdraw = $row['withdraw'];
$deposit = $row['deposit'];
$wager = $row['wager'];
if($balance == 0 && $wager != 0){
	$sql_select = "UPDATE `svuti_users` SET wager = '0' WHERE hash ='$hashh'";
    $result = mysqli_query($conn, $sql_select);
}
$bon = $row['bonus_url'];
$clanbalance = $row['clanbalance'];
$depbonus = $row['depbonus'];
$cashback = $row['cashback'];

$chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
for ($i=1; $i<=8; $i++) {
$salt1 .= $chr[rand(1,48)];
$salt2 .= $chr[rand(1,48)];
}
$number = rand(0, 999999);
$hash = hash('sha512', $salt1.$number.$salt2);

//$code = strToHex(encode($salt1.$number.$salt2, '2Q$8s('));
$hid = implode("-", str_split($code, 4));
setcookie('hid', $hid, time()+31536000, '/');
if($depobon == 1)
{
	$bonus10 = <<<HERE
HERE;
}
if(!isset($_COOKIE['rules'])){
$rules_modal = <<< HERE
<div class="modal fade text-xs-left" id="warning_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">

                        </button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Напоминание от администрации</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
	<br>
<br>
<br>	
<br>
<center><h6>Правилами нашего сервиса (Пункт 5.7)</h6>
<h6><b style='color:#ff0000'>Запрещается повторная регистрация аккаунтов / создание более одной учетной записи</b></h6>
<h6>При создании двух или более аккаунтов - аккаунты будут заблокированы.</h6>
<br>
<button style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1" data-dismiss="modal" aria-label="Close">Принять</button></center>
<br>
<br>
<br>
<br>
                            </div>						
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>	
<script>
setTimeout(function(){
$('#warning_modal').modal('toggle');
}, 200);
</script>	
HERE;
}

if(!isset($_COOKIE['rules']))
{
    setcookie('rules', '1', time()+2592000, '/');
}
if(!isset($_COOKIE['likeweek'])){
$rules_modal = <<< HERE
<div class="modal fade text-xs-left" id="warning_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">

                        </button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Сумасшедшая неделя!</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
	<br>
<br>
<br>	
<br>
<center>
<h6><b style='color:#ff0000'>Зарабатывай каждый день</b></h6>
<h6>Повышенные награды за лайки и репосты в <a href="https://vk.com/hotskinsclub" target="_blank">нашей группе ВК</a></h6>
<h6>Бонус можно забрать во вкладке "Бонус"</a></h6>
<br>
<button style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1" data-dismiss="modal" aria-label="Close">Понятно</button></center>
<br>
<br>
<br>
<br>
                            </div>						
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>	
<script>
setTimeout(function(){
$('#warning_modal').modal('toggle');
}, 200);
</script>	
HERE;
}

if(!isset($_COOKIE['likeweek']))
{
    setcookie('likeweek', '1', time()+25920, '/');
}

if(!isset($_COOKIE['refboom'])){
$rules_modal = <<< HERE
<div class="modal fade text-xs-left" id="xd_ref" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">

                        </button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Активность в группе!</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
	<br>
<br>
<br>	
<br>
<center>
<h6><b style='color:#ff0000'>Халявные монеты за лайки!</b></h6>
<h6>Получайте до <span>15 <i class="fas fa-coins"></i></span> за активность в группе сразу на баланс!</h6>
<h6>Подробнее в разделе бонус</h6>
<br>
<button style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1" data-dismiss="modal" aria-label="Close">Понятно</button></center>
<br>
<br>
<br>
<br>
                            </div>						
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>	
<script>
setTimeout(function(){
$('#xd_ref').modal('toggle');
}, 200);
</script>	
HERE;
}

if(!isset($_COOKIE['refboom']))
{
    setcookie('refboom', '1', time()+25920, '/');
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
	<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="mensheChange();betLu();">
	<span>МЕНЬШЕ ($coefl</span>x)</a>&nbsp;&nbsp;<a class="btn btn-block" style="margin-top:-1px;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="bolsheChange();betLu();">
	<span>БОЛЬШЕ ($coefu</span>x)</a>
	<br>
	<br>
	<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="evenChange();betLu();">
	<span>ЧЕТНОЕ (1.98x)</span></a>&nbsp;&nbsp;<a class="btn btn-block" style="margin-top:-1px;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="oddChange();betLu();">
	<span>НЕЧЕТНОЕ (1.98x)</span></a>
	<br>
	<br>
	<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="ravnoChange();betLu();">
	<span>РАВНО (98x)</span></a>
	</div>
	
	<div id="createGamos" style="display:none">
	<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="betluchange();betLu();">
	<span>СОЗДАТЬ ИГРУ</span></a>
	</div>
HERE;
$numul = $row['number'];
}
else{
	$lunoactive = <<<HERE
	<div id="createGame">
	<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="betluchange();betLu();">
	<span>СОЗДАТЬ ИГРУ</span></a>
	</div>
HERE;
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
    <center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:240px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op" onclick="spin()">
	<span>ВРАЩАТЬ БЕСПЛАТНО (<span id="ccspin">$countspins</span>)</span></a>
HERE;
}
else{
$fsno = <<<HERE
	<h5 class="text-xs-center">Сумма ставки:</h5>
	<center><input id="BetSizeSlot" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
</span>
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+1;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+10;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+100;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val(parseFloat(Math.max(($('#BetSizeSlot').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val(parseFloat(Math.max(($('#BetSizeSlot').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeSlot').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>


</center>
	</center>
	<br>
    <center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:240px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op" onclick="spin()">
	<span id="spinslotnofree">ВРАЩАТЬ</span></a>
HERE;
}
if($depbonus > 0){
$depbon = <<<HERE
	<h5 class="text-xs-center"><b>Ваш бонус к депозиту: +$depbonus</b>%</h5>
HERE;
}
else{
	$depbon = <<<HERE

HERE;
}
if($bon == "")
{
	$bonusrow = <<<HERE
	<div class="col-xs-12" id="bonusRow">
										
                                        <div class="card" style="box-shadow: rgb(210, 215, 222) 7px 10px 23px -11px;border-radius:25px!important;background-color: #ffca1c;">
										<div class="card-header" style="border-radius:25px!important">
                                                    
                                                   
                                                     
													<div class="heading-elements">
                                                        <ul class="list-inline mb-2 font-medium-4">
                                                        </ul>
                                                    </div>
													 
                                                </div>
                                            <div class="card-body" style="margin-top:-35px;border-radius:25px!important">
                                                <div class="row">
													<div class="p-2 text-xs-center ">
													
														<h5>Для активации бонусов на нашем сайте</h5>
													1. Подписаться на наш паблик, <a target="_blank" href="https://vk.com/hotskinsclub">ссылка</a><br>
													2. Нажать на кнопку ниже, для верификации аккаунта
													<center>
													<a id="error_bonus" class="btn  btn-block btnError" style="color: rgb(255, 255, 255); display: none;width:240px;margin-top:6px"></a>
													<a id="success_bonus" class="btn  btn-block btnSuccess" style="color: rgb(255, 255, 255); display: none;width:240px;margin-top:6px"></a>
													<br>
													<a id="enter_but" onclick="vkBonus()" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;">
                                                                        Привязать ВКонтакте</a></center>
													
													
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

$sql_select = "SELECT date FROM `tournamentTimer` WHERE id='1'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$tourTime = $row['date'];

$sql_select = "SELECT date FROM `refTimer` WHERE id='1'";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_array($result);
$refTime = $row['date'];


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
	<h5 class="text-xs-center" style="font-size:18px;color:red">Раздача не активна!</h5>
HERE;
}
else{
	$statusga = '<span style="color:#4BB543">[ACTIVE!]</span>';
$gablock = <<<HERE
	<h5 class="text-xs-center" style="font-size:15px;">Максимальный приз: <b>$randga <i class="fas fa-coins"></i></b></h5>
	<h5 class="text-xs-center" style="font-size:15px;">Участников: <b><span id="usersga">$usersga</span> / $usersgaleft</b></h5>
HERE;
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
		$s = '<i class="fa fa-close close" onclick="otmena()" value="'.$row3['id'].'" id="otmina"></i>';
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
		$i = '<i class="fa fa-close"></i> ';
	}
	if($row3['status'] == "Отменен")
	{
		$tag = "danger";
		$s = "";
		$i = '<i class="fa fa-close"></i> ';
	}
	$payouts = $payouts.'<tr style="cursor:default!important;" id="'.$row3['id'].'"><td>'.$s.$row3['data'].'</td><td>'.$row3['wallet'].'</td><td>'.$row3['suma'].' <i class="fas fa-coins"></i></td>
							<td><div class="tag tag-'.$tag.'">'.$i.$statw.' </div></td>

							</tr>';
							$tag = "";
}
while($row3 = mysqli_fetch_array($result3));

}
//go
$modal = <<<HERE
<style>
p table.dataTable {
    width: 100%;
    overflow-x: scroll
}

p table.dataTable th:before,
p table.dataTable th:after {
    display: none !important
}

p table.dataTable th > span {
    position: relative;
    display: inline-block
}

p table.dataTable th > span:before,
p table.dataTable th > span:after {
    position: absolute;
    top: 0;
    opacity: 0.3
}

p table.dataTable th > span:before {
    content: '\2191';
    right: -20px
}

p table.dataTable th > span:after {
    content: '\2193';
    right: -13px
}

p table.dataTable th.sorting_asc span:before {
    opacity: 1
}

p table.dataTable th.sorting_desc span:after {
    opacity: 1
}

.dataTables_filter label {
    margin-bottom: 0
}

div.dataTables_wrapper div.dataTables_filter {
    text-align: center
}

div.dataTables_wrapper div.dataTables_filter label {
    width: 100%;
    position: relative
}

div.dataTables_wrapper div.dataTables_filter label:before {
    position: absolute;
    height: 36px;
    width: 30px;
    text-align: center;
    line-height: 36px;
    font-family: themify;
    content: '\e610';
    color: #abbbd9;
    font-size: 15px
}

div.dataTables_wrapper div.dataTables_filter input {
    width: 100%;
    padding: 8px 30px;
    line-height: 20px;
    font-size: 13px;
    border: none;
    background: transparent;
    height: auto
}

div.dataTables_wrapper div.dataTables_filter input:focus {
    border: none;
    background: transparent;
    outline: none;
    box-shadow: none
}

div.dataTables_wrapper div.dataTables_filter input:-moz-placeholder {
    opacity: 1;
    color: #abbbd9
}

div.dataTables_wrapper div.dataTables_filter input:-ms-input-placeholder {
    opacity: 1;
    color: #abbbd9
}

div.dataTables_wrapper div.dataTables_filter input::-webkit-input-placeholder {
    opacity: 1;
    color: #abbbd9
}

div.dataTables_wrapper div.dataTables_length {
    text-align: center
}

div.dataTables_wrapper div.dataTables_length label {
    color: #8599c7
}

div.dataTables_wrapper div.dataTables_length select {
    margin-left: 10px
}

div.dataTables_wrapper div.dataTables_info {
    color: #23406c;
    padding: 8px 0 0;
    text-align: center
}

div.dataTables_wrapper div.dataTables_paginate {
    padding: 20px 0 0
}

div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    justify-content: center
}

@media (min-width: 576px) {
    div.dataTables_wrapper div.dataTables_info {
        padding-top: 18px
    }

    div.dataTables_wrapper div.dataTables_filter {
        text-align: left
    }

    div.dataTables_wrapper div.dataTables_filter input {
        text-align: left
    }

    div.dataTables_wrapper div.dataTables_length {
        text-align: right
    }

    div.dataTables_wrapper div.dataTables_info {
        text-align: right
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        justify-content: flex-start
    }
}

.data-table {
    width: 100%
}

.data-table th.dataTables_empty,
.data-table td.dataTables_empty {
    background: #fff;
    border-radius: 4px !important;
    padding: 45px 0 15px
}

.data-col {
    padding: 20px 10px 20px 0;
    border-bottom: 1px solid #e6effb
}

.data-col:last-child {
    padding-right: 0
}

.data-col .lead {
    font-size: 12px;
    font-weight: 600;
    color: #495463;
    letter-spacing: 0.01em;
    line-height: 1;
    display: block;
    margin-top: 0
}

.data-col .sub {
    font-size: 10px;
    font-weight: 400;
    color: #758698;
    letter-spacing: 0.01em;
    line-height: 1;
    padding-top: 7px;
    display: block
}

.data-col .sub-s2 {
    font-size: 12px;
    color: #495463;
    padding-top: 0
}

.data-col .sub:first-child {
    padding-top: 0
}

.data-item {
    background: #fff;
    margin-bottom: 3px;
    border-radius: 4px;
    position: relative
}

.data-head .data-col {
    padding: 0 10px 0 0;
    font-size: 12px;
    line-height: 20px;
    font-weight: 700;
    letter-spacing: 0.1em;
    color: #2c80ff;
    text-transform: uppercase;
    border-bottom: none
}

.data-state {
    height: 30px;
    width: 30px;
    line-height: 28px;
    margin-right: 12px;
    flex-shrink: 0
}

.data-state:after {
    display: block;
    font-family: 'themify';
    color: #2c80ff;
    height: 100%;
    width: 100%;
    font-size: 14px;
    border-radius: 50%;
    text-align: center;
    border: 1px solid
}

.data-state-sm {
    height: 24px;
    width: 24px;
    line-height: 23px
}

.data-state-sm:after {
    font-size: 12px
}

.data-state-approved:after {
    content: '\e64c';
    color: #00d285;
    border-color: #00d285
}

.data-state-pending:after {
    content: '\e6c5';
    color: #ffc100;
    border-color: #ffc100
}

.data-state-canceled:after {
    content: '\e646';
    color: #ff6868;
    border-color: #ff6868
}

.data-state-progress:after {
    content: '\e6c6';
    color: #1babfe;
    border-color: #1babfe
}

.data-state-missing:after {
    content: '\e69c';
    color: #b1becc;
    border-color: #b1becc
}

.data-details {
    border-radius: 4px;
    padding: 18px 20px;
    border: 1px solid #d2dde9
}

.data-details > div {
    flex-grow: 1;
    margin-bottom: 18px
}

.data-details > div:last-child {
    margin-bottom: 0
}

.data-details-title {
    font-size: 14px;
    font-weight: 600;
    color: #758698;
    line-height: 20px;
    display: block
}

.data-details-info {
    font-size: 14px;
    font-weight: 400;
    color: #495463;
    line-height: 20px;
    display: block;
    margin-top: 6px
}

.data-details-info.large {
    font-size: 20px
}

.data-details-list {
    border-radius: 4px;
    border: 1px solid #000
}

.data-details-list li {
    display: block
}

.data-details-list li:last-child .data-details-des {
    border-bottom: none
}

.data-details-head {
    font-size: 13px;
    font-weight: 500;
    line-height: 20px;
    padding: 15px 20px 2px;
    width: 100%
}

.data-details-des {
    font-size: 14px;
    color: #495463;
    font-weight: 400;
    line-height: 20px;
    padding: 2px 20px 15px;
    flex-grow: 1;
    border-bottom: 1px solid #000;
    justify-content: space-between
}

.data-details-des .ti:not([data-toggle="tooltip"]),
.data-details-des [class*=fa]:not([data-toggle="tooltip"]) {
    color: #2c80ff
}

.data-details-des span:last-child:not(:first-child) {
    font-size: 12px;
    color: #758698
}

.data-details-des small {
    color: #758698
}

.data-details-des span,
.data-details-des strong {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.data-details-docs {
    border-top: 1px solid #d2dde9
}

.data-details-docs-title {
    color: #495463;
    display: block;
    padding-bottom: 6px;
    font-weight: 400
}

.data-details-docs > li {
    flex-grow: 1;
    border-bottom: 1px solid #d2dde9;
    border-left: 1px solid #d2dde9;
    padding: 20px
}

.data-details-docs > li:last-child {
    border-bottom: none
}

.data-details-alt {
    border-radius: 4px;
    border: 1px solid #d2dde9;
    font-weight: 400
}

.data-details-alt li {
    line-height: 1.35;
    padding: 15px 20px;
    border-bottom: 1px solid #d2dde9
}

.data-details-alt li:last-child {
    border-bottom: none
}

.data-details-alt li div {
    padding: 3px 0
}

.data-details-date {
    display: block;
    padding-bottom: 4px
}

.data-doc-list {
    display: flex;
    margin: 0 -5px
}

.data-doc-list > div {
    margin: 0 5px
}

.data-doc-item {
    height: 54px;
    width: 70px;
    border-radius: 3px;
    overflow: hidden;
    position: relative
}

.data-doc-item:hover .data-doc-actions {
    opacity: 1
}

.data-doc-item-lg {
    width: 180px;
    height: 140px
}

.data-doc-image {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)
}

.data-doc-image img {
    width: 100%
}

.data-doc-actions {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all .3s
}

.data-doc-actions li {
    margin: 3px
}

.data-doc-actions li a {
    display: inline-block;
    width: 30px;
    height: 30px;
    font-size: 14px;
    line-height: 31px;
    border-radius: 4px;
    text-align: center;
    color: #fff;
    background: rgba(44, 128, 255, 0.7)
}

.data-doc-actions li a:hover {
    background: rgba(44, 128, 255, 0.9)
}

.data-vr-list {
    display: inline-flex;
    align-items: center
}

.data-vr-list li {
    display: inline-flex;
    align-items: center;
    margin-right: 18px;
    font-size: 12px;
    font-weight: 500
}

.data-vr-list li:last-child {
    margin-right: 0
}

.data-vr-list .data-state {
    margin-right: 9px
}

.data-action-list {
    display: inline-flex
}

.data-action-list li {
    padding: 0 5px
}

.data-action-list li:first-child {
    padding-left: 0
}

.data-action-list li:last-child {
    padding-right: 0
}

.data-action-dropdown {
    position: relative
}

@media (min-width: 576px) {
    .data-details-list > li {
        display: flex;
        align-items: center
    }

    .data-details-docs {
        width: calc(100% - 190px);
        border-top: none
    }

    .data-details-head {
        width: 190px;
        padding: 14px 20px
    }

    .data-details-des {
        border-top: none;
        border-left: 1px solid #000;
        width: calc(100% - 190px);
        padding: 14px 20px
    }
}

@media (min-width: 768px) {
    .data-item .lead {
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.02em
    }

    .data-item .sub {
        font-size: 12px;
        letter-spacing: 0.02em;
        padding-top: 7px
    }

    .data-item .sub-s2 {
        font-size: 13px;
        color: #495463
    }

    .data-details > div {
        margin-bottom: 0
    }

    .data-details-head {
        font-size: 14px
    }

    .data-details-docs {
        display: flex
    }

    .data-details-docs > li {
        width: 50%;
        border: none;
        border-left: 1px solid #d2dde9
    }
}

@media (min-width: 992px) {
    .data-details-date {
        padding-bottom: 0
    }
}
</style>
<div class="modal fade text-xs-left" id="checkDiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
<div class="modal-dialog" role="document">  
<div class="modal-content" style="padding:30px;background:#FFD700!important">
<div class="modal-header" style="BACKGROUND: NONE!IMPORTANT;padding:0px!important">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ft-x"></i></span></button>
</div>
<div class="popup-body" id="modalDice"><h3 class="popup-title">Проверка игры</h3><ul class="data-details-list" style="padding: 32px;">                                     
										   <li>
                                                <div class="data-details-head">Hash</div>
                                                <div class="data-details-des" style="font-size:13px;word-break: break-all;" id="hash_check">61edc98fc8ee32861cf506cbb94e9227605db4166ded07aecd116a2b79b4c17ecd10e5b886d2627e25fc1a590d78ca913964f35a289d76ed09f793c6bc82be8f</div>
                                            </li>
                                            <li>
                                                <div class="data-details-head">Number</div>
                                                <div class="data-details-des" style="font-size:13px" id="num_check"><b>909741</b></div>
                                            </li>  										
                                            <li>
                                                <div class="data-details-head">Amount</div>
                                                <div class="data-details-des" style="font-size:13px" id="amount_check">1.00</div>
                                            </li>
                                            <li>
                                                <div class="data-details-head">Percent</div>
                                                <div class="data-details-des" style="font-size:13px" id="percent_check">90% (0 - 899999)</div>
                                            </li>
                                            <li>
                                                <div class="data-details-head">Result</div>
                                                <div class="data-details-des" style="font-size:13px" id="result_check">0.00</div>
                                            </li>											
                                        </ul>
									</div>
                                                            </div>
									  </div>
									</div>
<div class="modal fade text-xs-left" id="withdraw_rule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" style="display: none;z-index:9999999;top:35%" aria-hidden="true">
            <div class="modal-dialog" role="document">
<div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
                        <h4 class="modal-title" style="font-weight:600">Пункт правил <b>6.9.1</b></h4>
                    </div>
                   <div class="modal-body">
                    <div class="row" style="padding-bottom:15px">
					<div class="col-lg-8 offset-lg-2" style="padding-bottom:5px">
					<br>
               После пополнения баланса Вам нужно будет отыграть сумму равную сумме пополнения в режиме Dice. (сумма начинает отыгрыватся только в том условии, если шанс выигрыша равен или меньше 40%)
            </div>
        </div>
    </div>
	            </div>
        </div>
    </div>
<div class="modal fade text-xs-left" id="checkGameHash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" style="display: none;z-index:9999999;top:35%" aria-hidden="true">
            <div class="modal-dialog" role="document">
<div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
                        <h4 class="modal-title" style="font-weight:600">Проверка Hash игры #<span id="id-check"></span></h4>
                    </div>
                   <div class="modal-body">
                    <div class="row" style="padding-bottom:15px">
					<div class="col-lg-8 offset-lg-2" style="padding-bottom:5px">
					<br>
<h5 style="color:#4bb543;font-weight:600;font-size:18px"><center><i class="fas fa-check"></i> HASH VERIFIED!<br><Br>WINNING POS: <span id="win_pos"></span><br>HASH: <span id="hash_game"></span><br>SALT: <span id="salt_game"></span><br>ID GAME: <span id="id_game"></span></center></h5>
            </div>
        </div>
    </div>
	            </div>
        </div>
    </div>
	$security_modal					
	$rules_modal
<div class="modal fade text-xs-left" id="deposit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
<div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
                        <h4 class="modal-title" style="font-weight:600">Пополнение счета</h4>
                    </div>
                   <div class="modal-body">
                    <div class="row" style="padding-bottom:15px">
					<div class="col-lg-8 offset-lg-2" style="padding-bottom:5px">
	                $depbon
					<br>
					<h5>Минимальная сумма пополнения 1р</h5>
					<br>
								</div>
					</div>
                    <div class="row">
                            
								<div class="col-lg-8 offset-lg-2">
                                <h5>Cумма: </h5><h5><i class="fas fa-coins" style="margin-left: 57px;position: absolute;margin-top: 12px;"></i> 
								<input onkeyup="validateWithdrawSize(this)" id="depositSize" class="form-control " value="1">
								<a id="error_deposit" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none"></a>
								</h5></div>
								
								</div> 
								
								 <div class="row">
							 <div class="col-lg-4 offset-lg-4" style="margin-top:8px;margin-bottom:18px">
                                <a id="depositButton" class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="deposit()">
                                    <span> Пополнить</span>
                                    
                                </a>
                            </div>
							<div class="col-lg-4 offset-lg-4">
							<div class="text-xs-center">
                                <svg id="depositLoad" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 100 100" style="background: none;display:none">
                                    <g transform="translate(50,50)">
                                        <circle cx="0" cy="0" r="7.142857142857143" fill="none" stroke="#31444f" stroke-width="2" stroke-dasharray="22.43994752564138 22.43994752564138" transform="rotate(337.283)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="0" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="14.285714285714286" fill="none" stroke="#465e6b" stroke-width="2" stroke-dasharray="44.87989505128276 44.87989505128276" transform="rotate(359.621)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.16666666666666666" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="21.428571428571427" fill="none" stroke="#4c6470" stroke-width="2" stroke-dasharray="67.31984257692413 67.31984257692413" transform="rotate(15.8588)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.3333333333333333" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="28.571428571428573" fill="none" stroke="#546E7A" stroke-width="2" stroke-dasharray="89.75979010256552 89.75979010256552" transform="rotate(50.6171)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.5" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="35.714285714285715" fill="none" stroke="#fff" stroke-width="2" stroke-dasharray="108.1997376282069 108.1997376282069" transform="rotate(92.2943)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.6666666666666666" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="42.857142857142854" fill="none" stroke="#fff" stroke-width="2" stroke-dasharray="134.63968515384826 134.63968515384826" transform="rotate(137.453)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.8333333333333334" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                    </g>
                                </svg>
                            </div>
                            </div>
                            </div>
                 <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr style="cursor:default">
                                <th></th>
                                <th></th>
                                <th class="text-xs-center">Дата</th>
                                <th class="text-xs-center">Сумма</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
						$paymentss
						</tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
        </div>
<div class="modal fade text-xs-left in" id="bombaGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header" style="">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="ft-x"></i></span>
            </button>
            <h4 class="modal-title" style="font-weight:600; color:#805900;">Бомба</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
                  <h5 class="text-xs-center">Угадайте верный провод, чтобы обезвредить бомбу</h5>
                  <br>
                  <center>
                     <img src="../files/bamba.png" style="width: 180px;">
                  </center>
                  <br>
                  <h5 class="text-xs-center">Сумма ставки:</h5>
                  <i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
                  <center>
                     <input id="BetSizeBomb" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
                     <div style="margin-top:5px">
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeBomb').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeBomb').val('0.01')" class="tag tag-default"><span>Min</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeBomb').val()+1;$('#BetSizeBomb').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeBomb').val()+10;$('#BetSizeBomb').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+10</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeBomb').val()+100;$('#BetSizeBomb').val(parseFloat(sum).toFixed(2));" class="tag tag-default"> <span>+100</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeBomb').val(parseFloat(Math.max(($('#BetSizeBomb').val()/2), 0.01)).toFixed(2));" class="tag tag-default"> <span>1/2</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeBomb').val(parseFloat(Math.max(($('#BetSizeBomb').val()*2), 0.01)).toFixed(2));" class="tag tag-default"> <span>X2</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeBomb').val(Math.max(max,0.01));" class="tag tag-default"> <span>Max</span></div>
                     </div>
                  </center>
                  <br>
                  <div id="betbuttonsBomba">
                     <center>
								<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #ff0000;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #ff0000;box-shadow: 0 0.25rem 0 0 #ff0000;border-radius: 1.125rem;color: #fff;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;margin-top: 7px;display: inline-flex;width: 20%;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="pizdak(1);">
								<i class="fas fa-cut"></i>
								</a>
<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #5e9af2;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #5e9af2;box-shadow: 0 0.25rem 0 0 #5e9af2;margin-left: 10px;border-radius: 1.125rem;color: #fff;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;width: 20%;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="pizdak(2);">
								<i class="fas fa-cut"></i>
								</a>

<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #1ab065;-webkit-text-stroke-color: #000;-webkit-text-stroke: #000;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #1ab065;box-shadow: 0 0.25rem 0 0 #1ab065;border-radius: 1.125rem;color: #fff;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;width: 20%;margin-left: 10px;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="pizdak(3);">
								<i class="fas fa-cut"></i>
								</a><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #232327;-webkit-text-stroke-color: #232327;-webkit-text-stroke: #232327;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #232327;box-shadow: 0 0.25rem 0 0 #00;border-radius: 1.125rem;color: #fff;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;width: 20%;margin-left: 10px;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="pizdak(4);">
								<i class="fas fa-cut"></i>
								</a>
                        <br>
                        <br>
                        <div id="hashPanel-bomba" style="display:none">
                           <center>HASH: <span id="hash-bomba"><b>sdg9g049g4g</b></span><br></center>
                           <center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-lg-8 offset-lg-2">
                  <a id="error_bomba" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
                  <a id="succes_bomba" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>       
        <div class="modal fade text-xs-left" id="promomodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Промокоды</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
                                <h6>Активация промокода на нескольких аккаунтах запрещена.</h6>
								<h6>Промокод:</h6>
                                <input type="text" id="promo" class="form-control" placeholder="Введите ваш промокод..">

                            </div>
							
                            <div class="col-lg-8 offset-lg-2">
                                <a id="error_promo" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_promo" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="active()">
                                   <span>  Активировать</span>
                                </a>
								<br>
								<br>
					
								</div>
								<div class="col-lg-8 offset-lg-2" style="margin-top:8px">

								
								
                                                                </div>
							
							                      </div>       </div>
							
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>
<div class="modal fade text-xs-left" id="giveaway" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Раздача $statusga</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											<h5 class="text-xs-center" style="font-size:15px;">Вступайте и получайте монеты бесплатно!</h5>
											<h5 class="text-xs-center" style="font-size:15px;">О новой раздаче вы можете узнать <a href="https://vk.com/hotskinsclub" target="_blank">тут</a></h5>
											<br>							
											$gablock
											<br>
											<h5 class="text-xs-center" style="font-size:14px;">Чтобы вступить в раздачу, нажмите на кнопку ниже</h5>
											<center><div class="g-recaptcha" data-sitekey="6LehzqgZAAAAAOV7myyssZOw1gSJUGvaoKJeUtN2"></div></center>
													<br>
											
											
                            </div>
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px" id="gabutton">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="joinGa()">
                                   <span>  Войти в раздачу</span>

                                </a>
                            </div>
														 <div class="col-lg-8 offset-lg-2">
                                <a id="error_ga" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_ga" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>										
<div class="modal fade text-xs-left" id="faucet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кран монет</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											<h5 class="text-xs-center" style="font-size:15px;">Получайте до <b>100.00 <i class="fas fa-coins"></i></b> каждые 15 мин!</h5>
											<br>										
											<h5 class="text-xs-center" style="font-size:14px;">Чтобы получить бонус, нажмите на кнопку ниже</h5>
											<center><div class="g-recaptcha" data-sitekey="6LehzqgZAAAAAOV7myyssZOw1gSJUGvaoKJeUtN2"></div></center>
											<br>
											
											
                            </div>
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px" id="cabutton">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="getFaucet()">
                                   <span>  Получить</span>

                                </a>
                            </div>
														 <div class="col-lg-8 offset-lg-2">
                                <a id="error_faucet" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_faucet" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>						
									
<div class="modal fade text-xs-left" id="tournamentPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;"></h4>
										  </div>
										  <div class="modal-body">
										  <center>
										  <div class="row">
<br>										
<script>
var countDownDate = new Date("$tourTime").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("timer-tournament").innerHTML = days + "д " + hours + "ч "
  + minutes + "м " + seconds + " сек. ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer-tournament").innerHTML = "ОКОНЧЕН!";
  }
}, 1000);
</script>  
<script>
var countDownDate1 = new Date("$refTime").getTime();

var x1 = setInterval(function() {

  var now1 = new Date().getTime();

  var distance1 = countDownDate1 - now1;

  var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
  var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

  document.getElementById("timer-ref").innerHTML = days1 + "д " + hours1 + "ч "
  + minutes1 + "м " + seconds1 + " сек. ";

  if (distance1 < 0) {
    clearInterval(x1);
    document.getElementById("timer-ref").innerHTML = "ОКОНЧЕН!";
  }
}, 1000);
</script>  
<h3 style="font-weight:600">ТАБЛИЦА ТУРНИРА</h3>	
<br>		
<h4>До окончания: <span id="timer-tournament"></span></h4>
<BR>
<span>Делайте ставки и участвуйте в турнире!</span><BR>
<span>Первые 3 призовые места разделят между собой призовой фонд в 5,000 <i class="fas fa-coins"></i></span>
<br>
<center>				  
<table class="table table-responsive" style="border-radius:6px">
											
	<thead>
	<tr>
	    <td class="tabler">Место</td>
		<td class="tabler">Логин</td>
		<td class="tabler">Ставок</td>
		<td class="tabler">Приз</td>
	</tr>
	</thead>
	<tbody style="font-size:14px">
          $xd11
    </tbody>
</table>
</center>
</center>
</div>
					 </div>					 
										</div>
									  </div>
									</div>			
<div class="modal fade text-xs-left" id="bjGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
<style>
.card_faceInner__2nkbn {
     color: #2b2f3b!important;
}
.deck_container__2nZFt {
	position: absolute;
	right: .75em;
	top: 0;
	transform: translateY(-50%);
	width: 3em;
	height: 4.89em;
	font-size: 2.5em
}

@media(max-width:900px) {
	.deck_container__2nZFt {
		font-size: 2em
	}
}

.deck_card__2Hdlm {
	border-radius: .3em;
	height: 4.89em;
	display: flex;
	align-items: flex-end;
	position: absolute;
	top: 0;
	left: 0;
	padding: .25em;
	width: 100%;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
	background: #fff
}

.deck_card__2Hdlm:first-child {
	box-shadow: 0 6px 10px rgba(0, 0, 0, .05)
}

.deck_card__2Hdlm img {
	width: 100%;
	position: relative;
	z-index: 2
}

.card_container__21YlE {
	display: flex;
	position: relative;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	will-change: transform;
	z-index: 0;
	border-radius: 6px;
	perspective: 20px
}

.card_card__cY3Uo {
	position: relative;
	z-index: 3;
	will-change: transform;
	width: 2.6em;
	height: 4em;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none
}

.card_card__cY3Uo.card_inPlay__2zghE .card_face__3lBVA {
	transition: transform .4s .3s, box-shadow .5s
}

.card_card__cY3Uo.card_inPlay__2zghE .card_back__2Hbhq {
	transition: transform .4s .3s, opacity .7s .35s
}

.card_face__3lBVA {
	width: 100%;
	height: 100%;
	box-shadow: 0 .1em .2em rgba(29, 65, 136, .1);
	text-align: center;
	display: flex;
	position: relative;
	opacity: 1;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	will-change: transform;
	z-index: 1;
	background: #fff;
	padding: .3em;
	border-radius: 6px;
	transition: transform .4s 0s, box-shadow .5s
}

.card_face__3lBVA.card_isActive__20seD {
	box-shadow: 0 0 0 3px #4986f5
}

.card_face__3lBVA.card_won__2tUrU {
	box-shadow: 0 0 0 3px #62ca5b
}

.card_face__3lBVA.card_lost__mrXhE {
	box-shadow: 0 0 0 3px #e86376
}

.card_face__3lBVA.card_push__358u_ {
	box-shadow: 0 0 0 3px #ffd000
}

.card_face__3lBVA.card_hidden__vbF5g {
	transform: rotateY(180deg);
	box-shadow: none
}

@media(max-width:400px) {
	.card_face__3lBVA.card_isActive__20seD {
		box-shadow: 0 0 0 2px #4986f5
	}
	.card_face__3lBVA.card_won__2tUrU {
		box-shadow: 0 0 0 2px #62ca5b
	}
	.card_face__3lBVA.card_lost__mrXhE {
		box-shadow: 0 0 0 2px #e86376
	}
	.card_face__3lBVA.card_push__358u_ {
		box-shadow: 0 0 0 2px #ffd000
	}
}

.card_faceInner__2nkbn {
	display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	color: #e86376;
	width: 100%;
	align-items: flex-start;
	justify-content: center
}

.card_faceInner__2nkbn.card_dark__1KpX3 {
	color: #2b2f3b
}

.card_faceInner__2nkbn.card_dark__1KpX3 img::selection,
.card_faceInner__2nkbn.card_dark__1KpX3 span::selection {
	background: 0 0
}

.card_faceInner__2nkbn>svg {
	width: .8em;
	height: .8em;
	margin: 0 0 0 5px
}

.card_faceInner__2nkbn span {
	line-height: .9em;
	font-size: .9em;
	font-weight: 600;
	align-self: flex-start;
	position: absolute;
	top: .3em;
	left: 1em;
	transform: translateX(-50%)
}

.card_back__2Hbhq {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	cursor: pointer;
	transform: rotateY(180deg);
	will-change: transform;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	background: #fff;
	padding: 7px;
	border-radius: 6px;
	transition: transform .4s 0s, opacity .7s .35s;
	display: flex
}

.card_back__2Hbhq img {
	width: 100%;
	height: 100%;
	z-index: 2
}

.card_back__2Hbhq.card_hidden__vbF5g {
	transform: rotateY(0deg);
	box-shadow: 0 .1em .2em rgba(29, 65, 136, .1)
}

@media(max-width:820px) {
	.card_back__2Hbhq {
		padding: 3px
	}
}

.arrow_arrow__37nF2 {
	position: absolute;
	top: -35px;
	height: 40px;
	left: 30px
}

.arrow_arrow__37nF2 polygon {
	fill: #4986f5;
	-webkit-animation: arrow_arrow-wave__1wvHm 1s infinite;
	animation: arrow_arrow-wave__1wvHm 1s infinite;
	-webkit-animation-direction: alternate;
	animation-direction: alternate
}

.arrow_arrow__37nF2 .arrow_top__qqvdO {
	fill: #4986f5;
	-webkit-animation-delay: .1s;
	animation-delay: .1s
}

.arrow_arrow__37nF2 .arrow_middle__mu2WV {
	fill: #5890f6;
	-webkit-animation-delay: .2s;
	animation-delay: .2s
}

.arrow_arrow__37nF2 .arrow_bottom__1ZV_P {
	fill: #6699f7;
	-webkit-animation-delay: .3s;
	animation-delay: .3s
}

@-webkit-keyframes arrow_arrow-wave__1wvHm {
	0% {
		fill-opacity: .1
	}
	50% {
		fill-opacity: .7
	}
	to {
		fill-opacity: 1
	}
}

@keyframes arrow_arrow-wave__1wvHm {
	0% {
		fill-opacity: .1
	}
	50% {
		fill-opacity: .7
	}
	to {
		fill-opacity: 1
	}
}

.stack_container__33UBQ {
	display: flex;
	position: relative;
	z-index: 3;
	will-change: transform;
	align-items: center;
	transition: all .3s ease-out;
	height: 4em;
	font-size: 2.5em
}

.stack_container__33UBQ:last-child {
	z-index: 1
}

@media(max-width:900px) {
	.stack_container__33UBQ {
		font-size: 2em
	}
}

.stack_focusArrow__3vdaD img {
	position: absolute;
	bottom: calc(100% + 20px);
	left: 50%;
	transform: translateX(-50%);
	transition: opacity .25s ease-out;
	opacity: 0
}

.stack_focusArrow__3vdaD.stack_focus__8PVOV img {
	opacity: 1
}

.stack_valuation__1Om0O {
	position: absolute;
	left: 0;
	top: 0;
	width: 2.6em;
	height: .34em;
	border-radius: 15px;
	font-weight: 600;
	color: #fff;
	text-align: center;
	transition: transform 1s, opacity 1s;
	white-space: nowrap;
	will-change: transform
}

.stack_valuation__1Om0O.stack_won__1Q-ZH:after {
	background: #62ca5b
}

.stack_valuation__1Om0O.stack_lost__67uKQ:after {
	background: #e86376
}

.stack_valuation__1Om0O.stack_push__3K-cf:after {
	background: #ffd000
}

.stack_valuation__1Om0O:after {
	content: attr(data-values);
	position: absolute;
	top: 100%;
	left: 100%;
	transform: translate(-120%, -50%);
	background: #828f9a;
	padding: .05em 1em;
	border-radius: 1em;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: .5em
}

.stack_valuation__1Om0O.stack_hidden__2prp7:after {
	transform: translate(-120%, -50%) scale(.5);
	opacity: 0
}

.blackjack_blackjack__1ClL- {
	background: #272d39;
	width: 100%;
	display: flex;
	flex-grow: 1;
	position: relative;
	flex-direction: column;
	justify-content: space-between;
	border-radius: 6px;
	overflow: hidden;
	padding: 10em
}

@media(max-width:1150px) {
	.blackjack_blackjack__1ClL- {
		height: 400px
	}
}

@media(max-width:900px) {
	.blackjack_blackjack__1ClL- {
		height: 55vh;
		font-size: 12px
	}
}

@media(max-width:440px) {
	.blackjack_blackjack__1ClL- {
		height: 48vh;
		font-size: 11px;
		padding: 0
	}
}

.blackjack_blackjack__1ClL-.blackjack_isEmbed__2APZI {
	padding: 0;
	background: 0 0
}

.blackjack_blackjack__1ClL-.blackjack_isEmbed__2APZI .blackjack_header__1qRwc {
	padding-bottom: 1em
}

.blackjack_blackjack__1ClL-.blackjack_isEmbed__2APZI .blackjack_footer__BHkz7 {
	padding-top: 1em
}

.blackjack_blackjack__1ClL-.blackjack_isEmbed__2APZI .blackjack_ribbon__2kTWC svg {
	height: 45px
}

.blackjack_header__1qRwc {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 50%;
	flex: 1 1;
	transition: transform .25s ease-out 0s
}

@media(max-width:900px) {
	.blackjack_header__1qRwc {
		padding-bottom: .3em
	}
}

.blackjack_footer__BHkz7 {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 50%;
	flex: 1 1;
	transition: transform .25s ease-out 0s
}

@media(max-width:900px) {
	.blackjack_footer__BHkz7 {
		padding-top: .3em
	}
}

.blackjack_footer__BHkz7.blackjack_hasSplit__3LyQN {
	justify-content: space-around
}

.blackjack_ribbon__2kTWC {
	position: absolute;
	transform: translate(-50%, -50%);
	width: 100%;
	height: 100%;
	max-width: 70%;
	top: 50%;
	left: 50%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center
}

.blackjack_ribbon__2kTWC svg {
	height: 73px;
	pointer-events: none
}

@media(max-width:440px) {
	.blackjack_ribbon__2kTWC svg {
		height: 40px
	}
}

.blackjack_ribbonPath__2D1HY.blackjack_isActive__2t8WZ {
	fill: #4986f5;
	stroke: #4986f5
}
@media (min-width: 544px){
.bjModal {
    max-width: 800px!important;
    margin: 30px auto!important;
}
}
</style>
									  <div class="modal-dialog bjModal" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Blackjack</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
                        <svg aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; width: 0px; height: 0px; overflow: hidden;"><defs><symbol id="icon-equal" viewBox="0 0 32 32"><path d="M3.669 26.534h24.663c2.026 0 3.669-1.642 3.669-3.669s-1.642-3.669-3.669-3.669v0h-24.663c-2.026 0-3.669 1.642-3.669 3.669s1.642 3.669 3.669 3.669v0zM3.669 12.8h24.663c2.026 0 3.669-1.642 3.669-3.669s-1.642-3.669-3.669-3.669v0h-24.663c-2.026 0-3.669 1.642-3.669 3.669s1.642 3.669 3.669 3.669v0z"></path></symbol><symbol id="icon-demo" viewBox="0 0 32 32"><path d="M15.488 27.75c3.045 0 5.405-0.78 7.078-2.331 1.682-1.561 2.519-3.694 2.519-6.411v-6.016c0-2.726-0.846-4.851-2.519-6.411-1.673-1.551-4.042-2.331-7.078-2.331h-7.416c-0.413 0-0.715 0.084-0.893 0.245-0.178 0.169-0.263 0.47-0.263 0.883v21.244c0 0.423 0.094 0.715 0.263 0.883 0.178 0.16 0.47 0.245 0.893 0.245h7.416zM15.516 23.877h-4.428v-15.755h4.428c1.749 0 3.092 0.413 4.023 1.241 0.94 0.827 1.41 2.021 1.41 3.591v6.091c0 1.57-0.47 2.763-1.41 3.591s-2.275 1.241-4.023 1.241z"></path></symbol><symbol id="icon-rub" viewBox="0 0 23 32"><path d="M18.618 11.232c0-2.393-1.696-4-4.214-4h-5.714v8h5.714c2.518 0 4.214-1.607 4.214-4zM22.85 11.232c0 4.589-3.321 7.804-8.089 7.804h-6.071v2.107h9.018c0.321 0 0.571 0.25 0.571 0.571v2.286c0 0.321-0.25 0.571-0.571 0.571h-9.018v3.429c0 0.321-0.25 0.571-0.571 0.571h-2.982c-0.321 0-0.571-0.25-0.571-0.571v-3.429h-4c-0.321 0-0.571-0.25-0.571-0.571v-2.286c0-0.321 0.25-0.571 0.571-0.571h4v-2.107h-4c-0.321 0-0.571-0.25-0.571-0.571v-2.661c0-0.321 0.25-0.571 0.571-0.571h4v-11.232c0-0.321 0.25-0.571 0.571-0.571h9.625c4.768 0 8.089 3.214 8.089 7.804z"></path></symbol><symbol id="icon-dots" viewBox="0 0 32 32"><path d="M18.667 16c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667z"></path><path d="M18.667 6.667c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667z"></path><path d="M18.667 25.333c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667z"></path></symbol><symbol id="icon-add" viewBox="0 0 32 32"><path d="M23.285 0.309c2.365 0.027 3.547 0.275 4.773 0.931 1.163 0.621 2.080 1.539 2.701 2.704 0.693 1.291 0.933 2.533 0.933 5.173v13.763c0 2.64-0.24 3.885-0.933 5.176-0.62 1.158-1.546 2.084-2.669 2.687l-0.035 0.017c-1.291 0.693-2.533 0.933-5.173 0.933h-13.763c-2.64 0-3.885-0.24-5.176-0.933-1.157-0.622-2.082-1.547-2.687-2.669l-0.017-0.035c-0.693-1.291-0.933-2.533-0.933-5.173l0.003-14.168c0.027-2.365 0.275-3.547 0.931-4.773 0.621-1.163 1.539-2.080 2.704-2.701 1.291-0.693 2.533-0.933 5.173-0.933zM22.88 2.155h-13.76c-2.363 0-3.317 0.184-4.307 0.712-0.834 0.447-1.5 1.113-1.934 1.922l-0.012 0.025c-0.528 0.987-0.712 1.947-0.712 4.307v13.76c0 2.363 0.184 3.317 0.712 4.307 0.451 0.84 1.107 1.496 1.947 1.947 0.885 0.472 1.744 0.669 3.605 0.707l0.701 0.005h13.76c2.363 0 3.317-0.184 4.307-0.712 0.834-0.447 1.5-1.113 1.934-1.922l0.012-0.025c0.472-0.885 0.669-1.744 0.707-3.605l0.005-0.701v-13.76c0-2.363-0.184-3.317-0.712-4.307-0.447-0.834-1.113-1.5-1.922-1.934l-0.025-0.012c-0.987-0.528-1.947-0.712-4.307-0.712zM16 8c0 0 0 0 0 0 0.652 0 1.194 0.467 1.31 1.085l0.001 0.008 0.021 0.24v5.333h5.333c0.001 0 0.002 0 0.002 0 0.736 0 1.333 0.597 1.333 1.333 0 0.652-0.469 1.195-1.088 1.311l-0.008 0.001-0.24 0.021h-5.333v5.333c0 0.001 0 0.002 0 0.002 0 0.736-0.597 1.333-1.333 1.333-0.652 0-1.195-0.469-1.311-1.088l-0.001-0.008-0.021-0.24v-5.333h-5.333c-0.001 0-0.002 0-0.002 0-0.736 0-1.333-0.597-1.333-1.333 0-0.652 0.469-1.195 1.088-1.311l0.008-0.001 0.24-0.021h5.333v-5.333c0-0.736 0.597-1.333 1.333-1.333v0z"></path></symbol><symbol id="icon-android" viewBox="0 0 32 32"><path d="M4.444 10.364c-0.011-0-0.024-0-0.036-0-0.537 0-1.022 0.222-1.369 0.579l-0 0c-0.357 0.344-0.579 0.826-0.579 1.36 0 0.010 0 0.020 0 0.031l-0-0.002v8.269c-0 0.009-0 0.020-0 0.031 0 0.537 0.222 1.022 0.578 1.369l0 0c0.347 0.357 0.833 0.579 1.37 0.579 0.013 0 0.026-0 0.038-0l-0.002 0c0.55 0 1.013-0.191 1.389-0.579 0.354-0.35 0.573-0.835 0.573-1.371 0-0.010-0-0.020-0-0.031l0 0.002v-8.275c0-0.538-0.191-0.995-0.579-1.383-0.344-0.357-0.826-0.579-1.36-0.579-0.010 0-0.020 0-0.031 0l0.002-0zM20.369 2.94l1.366-2.517c0.087-0.168 0.058-0.289-0.098-0.382-0.168-0.081-0.289-0.041-0.382 0.116l-1.389 2.535c-1.215-0.538-2.506-0.81-3.865-0.81s-2.645 0.272-3.865 0.81l-1.383-2.535c-0.093-0.156-0.22-0.197-0.388-0.116-0.15 0.087-0.185 0.214-0.093 0.382l1.36 2.517c-1.389 0.706-2.488 1.69-3.31 2.951-0.769 1.154-1.227 2.573-1.227 4.099 0 0.018 0 0.035 0 0.053v-0.003h17.788c0-1.505-0.411-2.882-1.233-4.143-0.822-1.255-1.932-2.257-3.239-2.929l-0.048-0.022zM12.47 6.608c-0.132 0.136-0.316 0.22-0.519 0.22-0.003 0-0.005 0-0.008-0h0c-0.403-0.003-0.729-0.331-0.729-0.735 0-0.006 0-0.012 0-0.018l-0 0.001c0-0.203 0.069-0.382 0.208-0.527 0.145-0.15 0.318-0.22 0.521-0.22s0.382 0.069 0.527 0.22c0.15 0.145 0.226 0.324 0.226 0.527 0 0.208-0.075 0.382-0.226 0.532zM20.577 6.608c-0.127 0.136-0.307 0.22-0.507 0.22-0.005 0-0.010-0-0.014-0h0.001c-0.203 0-0.376-0.075-0.521-0.22-0.143-0.132-0.231-0.319-0.231-0.528 0-0.002 0-0.003 0-0.005v0c0-0.203 0.081-0.382 0.231-0.527 0.145-0.15 0.318-0.22 0.521-0.22 0.004-0 0.009-0 0.014-0 0.2 0 0.38 0.084 0.507 0.22l0 0c0.145 0.145 0.214 0.324 0.214 0.527 0 0.208-0.069 0.382-0.214 0.532zM7.175 23.54c0 0.59 0.203 1.088 0.613 1.505 0.405 0.405 0.909 0.613 1.505 0.613h1.412l0.023 4.363c0 0.55 0.191 1.018 0.579 1.406s0.845 0.579 1.383 0.579c0.55 0 1.018-0.197 1.4-0.579s0.579-0.856 0.579-1.406v-4.363h2.65v4.363c0 0.55 0.197 1.018 0.579 1.406s0.851 0.579 1.406 0.579c0.55 0 1.018-0.197 1.4-0.579s0.579-0.856 0.579-1.406v-4.363h1.447c0.005 0 0.012 0 0.018 0 0.572 0 1.089-0.237 1.457-0.619l0.001-0.001c0.411-0.405 0.619-0.909 0.619-1.499v-12.812h-17.649v12.812zM27.562 10.364c-0.009-0-0.020-0-0.031-0-0.531 0-1.012 0.217-1.358 0.567l-0 0c-0.357 0.343-0.579 0.824-0.579 1.357 0 0.013 0 0.026 0 0.039l-0-0.002v8.275c0 0.55 0.197 1.018 0.579 1.4s0.851 0.579 1.389 0.579c0.55 0 1.018-0.191 1.4-0.579s0.579-0.851 0.579-1.4v-8.275c0-0.55-0.191-1.013-0.579-1.389-0.35-0.354-0.835-0.573-1.371-0.573-0.010 0-0.020 0-0.031 0l0.002-0z"></path></symbol><symbol id="icon-apple" viewBox="0 0 26 32"><path d="M22.066 16.598c-0.014-2.574 1.155-4.522 3.506-5.955-1.354-1.855-3.501-3.061-5.932-3.116l-0.009-0c-2.49-0.195-5.203 1.447-6.205 1.447-1.057 0-3.464-1.391-5.357-1.391-3.896 0.070-8.070 3.13-8.070 9.363 0 1.837 0.334 3.743 1.016 5.704 0.89 2.56 4.132 8.877 7.513 8.765 1.767-0.042 3.019-1.252 5.315-1.252 2.226 0 3.381 1.252 5.357 1.252 3.409-0.042 6.33-5.788 7.193-8.348-4.577-2.17-4.327-6.33-4.327-6.456zM18.101 5.078c1.906-2.268 1.739-4.341 1.656-5.078-1.903 0.211-3.563 1.111-4.752 2.442l-0.006 0.007c-1.224 1.391-1.948 3.103-1.781 5.037 1.823 0.139 3.492-0.793 4.87-2.407z"></path></symbol><symbol id="icon-share" viewBox="0 0 27 32"><path d="M8.347 8.667h0.133c0.456 0.105 0.791 0.508 0.791 0.989 0 0.538-0.419 0.978-0.948 1.011l-0.003 0h-2.507c-1.253 0-1.76 0.133-2.293 0.427-0.465 0.245-0.838 0.61-1.086 1.053l-0.007 0.013c-0.267 0.533-0.4 1.013-0.427 2.053v11.947c0 1.253 0.133 1.787 0.427 2.32 0.246 0.464 0.611 0.837 1.053 1.086l0.013 0.007c0.587 0.32 1.147 0.427 2.64 0.427h14.4c1.467 0 2.027-0.107 2.613-0.427 0.465-0.245 0.838-0.61 1.086-1.053l0.007-0.013c0.293-0.533 0.4-1.067 0.427-2.347v-11.947c-0.027-1.067-0.16-1.547-0.427-2.027-0.245-0.465-0.61-0.838-1.053-1.086l-0.013-0.007c-0.533-0.293-1.067-0.4-2.347-0.427h-2.48c-0.523-0.044-0.931-0.479-0.931-1.010 0-0.483 0.338-0.887 0.791-0.989l0.007-0.001h2.32c1.787 0 2.667 0.16 3.547 0.64 0.827 0.453 1.493 1.093 1.947 1.92 0.453 0.853 0.613 1.68 0.64 3.2v11.44c0 1.787-0.16 2.667-0.64 3.547-0.453 0.827-1.093 1.493-1.92 1.947-0.853 0.453-1.68 0.613-3.2 0.64h-15.147c-1.387 0-2.187-0.16-2.933-0.533l-0.267-0.133c-0.821-0.442-1.478-1.099-1.908-1.895l-0.012-0.025c-0.421-0.861-0.667-1.873-0.667-2.943 0-0.213 0.010-0.423 0.029-0.631l-0.002 0.027v-11.413c0-1.547 0.187-2.373 0.64-3.2s1.093-1.493 1.92-1.92c0.933-0.507 1.787-0.667 3.573-0.667h2.213zM13.333 0c0.667 0 1.227 0.373 1.333 0.853v0.133l4.267 3.2c0.196 0.185 0.318 0.447 0.318 0.737 0 0.56-0.454 1.013-1.013 1.013-0.134 0-0.261-0.026-0.378-0.073l0.007 0.002-0.133-0.080-3.067-2.293v16.16c0 0.56-0.587 1.013-1.333 1.013-0.667 0-1.227-0.373-1.333-0.853v-16.827l-3.733 2.8c-0.167 0.126-0.378 0.201-0.606 0.201-0.272 0-0.519-0.107-0.701-0.282l0 0-0.080-0.107c-0.126-0.167-0.201-0.378-0.201-0.606 0-0.272 0.107-0.519 0.282-0.701l-0 0 5.44-4.080c0.171-0.136 0.39-0.218 0.627-0.218 0.033 0 0.065 0.002 0.097 0.005l-0.004-0h0.213z"></path></symbol><symbol id="icon-verified" viewBox="0 0 32 32"><path d="M32 8.125l-3.837-3.838-15.75 15.75-8.575-8.563-3.837 3.825 12.406 12.406z"></path><path d="M16 24.125l16-16-3.837-3.838-12.163 12.15z"></path></symbol><symbol id="icon-minus" viewBox="0 0 32 32"><path d="M16 0c-8.823 0-16 7.177-16 16s7.177 16 16 16 16-7.177 16-16-7.177-16-16-16zM23 17.333h-14c-0.736 0-1.333-0.597-1.333-1.333s0.597-1.333 1.333-1.333h14c0.736 0 1.333 0.597 1.333 1.333s-0.597 1.333-1.333 1.333z"></path></symbol><symbol id="icon-plus" viewBox="0 0 32 32"><path d="M16 0c-8.823 0-16 7.177-16 16s7.177 16 16 16 16-7.177 16-16-7.177-16-16-16zM23 17.333h-5.667v5.667c0 0.736-0.597 1.333-1.333 1.333s-1.333-0.597-1.333-1.333v-5.667h-5.667c-0.736 0-1.333-0.597-1.333-1.333s0.597-1.333 1.333-1.333h5.667v-5.667c0-0.736 0.597-1.333 1.333-1.333s1.333 0.597 1.333 1.333v5.667h5.667c0.736 0 1.333 0.597 1.333 1.333s-0.597 1.333-1.333 1.333z"></path></symbol><symbol id="icon-time" viewBox="0 0 32 32"><path d="M16 0c-8.823 0-16 7.177-16 16s7.177 16 16 16 16-7.177 16-16-7.177-16-16-16zM23.609 24.276c-0.26 0.26-0.601 0.391-0.943 0.391s-0.683-0.131-0.943-0.391l-6.667-6.666c-0.251-0.249-0.391-0.588-0.391-0.943v-8.667c0-0.737 0.597-1.333 1.333-1.333s1.333 0.596 1.333 1.333v8.115l6.276 6.276c0.521 0.521 0.521 1.364 0 1.885z"></path></symbol><symbol id="icon-auto" viewBox="0 0 32 32"><path d="M18.35 14.434c-0.864 0.001-1.565 0.701-1.566 1.566v0c0 0.863 0.703 1.565 1.566 1.565s1.566-0.702 1.566-1.565c-0.001-0.864-0.701-1.565-1.566-1.566h-0zM19.387 9.69v2.822c0.814 0.249 1.489 0.751 1.95 1.412l0.008 0.012 2.685-0.873c-0.929-1.766-2.61-3.029-4.606-3.37l-0.038-0.005zM24.672 15.036l-2.685 0.873c0 0.030 0.002 0.061 0.002 0.091 0 0.831-0.281 1.598-0.751 2.211l1.658 2.282c1.143-1.152 1.85-2.738 1.85-4.49 0-0.341-0.027-0.676-0.078-1.002l0.005 0.036z"></path><path d="M18.35 2.35h-12.613c-0.573 0-1.037 0.464-1.037 1.037s0.464 1.037 1.037 1.037v0h5.388c-1.165 0.737-2.166 1.594-3.029 2.576l-0.013 0.015h-7.045c-0.554 0.024-0.993 0.479-0.993 1.037s0.44 1.012 0.991 1.037l0.002 0h5.547c-1.184 1.973-1.884 4.353-1.884 6.897 0 0.005 0 0.010 0 0.015v-0.001c0 0.005 0 0.010 0 0.016 0 2.949 0.94 5.679 2.538 7.905l-0.028-0.041h-2.941c-0.562 0.014-1.011 0.473-1.011 1.037s0.45 1.022 1.010 1.037l0.001 0h4.751c0.625 0.588 1.314 1.123 2.050 1.59l0.056 0.033h-9.982c-0.573 0-1.037 0.464-1.037 1.037s0.464 1.037 1.037 1.037v0h17.206c7.527 0 13.65-6.124 13.65-13.65s-6.123-13.65-13.65-13.65zM23.386 22.804c-0.038 0.033-0.080 0.063-0.125 0.091l-0.004 0.003c-1.36 0.982-3.060 1.571-4.898 1.571-0.003 0-0.006 0-0.010 0h0c-1.828 0-3.521-0.582-4.906-1.57-0.025-0.015-0.048-0.031-0.071-0.047-0.021-0.015-0.039-0.031-0.059-0.047-2.081-1.544-3.432-4.019-3.432-6.804 0-4.669 3.799-8.469 8.468-8.469s8.469 3.8 8.469 8.469c0 2.784-1.352 5.259-3.433 6.804z"></path><path d="M12.67 13.064l2.685 0.873c0.469-0.674 1.144-1.176 1.932-1.418l0.026-0.007v-2.822c-2.033 0.346-3.714 1.609-4.626 3.339l-0.017 0.035zM19.561 19.431c-0.361 0.132-0.777 0.209-1.211 0.209s-0.851-0.076-1.236-0.217l0.025 0.008-1.659 2.282c0.864 0.435 1.839 0.681 2.87 0.681s2.006-0.246 2.869-0.681l-1.658-2.283zM14.711 16c0-0.031 0.001-0.061 0.002-0.091l-2.686-0.873c-0.047 0.291-0.074 0.625-0.074 0.967 0 1.752 0.707 3.338 1.85 4.491l-0-0 1.659-2.282c-0.469-0.604-0.751-1.373-0.751-2.208 0-0.001 0-0.002 0-0.003v0z"></path></symbol><symbol id="icon-fast" viewBox="0 0 32 32"><path d="M4.671 20.505c-0.063 0.122-0.099 0.267-0.099 0.42 0 0.259 0.105 0.493 0.274 0.663v0l0.229 0.229c0.787-0.928 1.562-1.767 2.37-2.572l0.001-0.001c0.066-0.066 0.134-0.098 0.2-0.159l-1.474-1.475c-0.857 1.551-1.357 2.611-1.5 2.894zM12.749 24.548c-0.806 0.809-1.643 1.585-2.51 2.326l-0.059 0.049 0.311 0.311c0.17 0.169 0.404 0.274 0.663 0.274 0.156 0 0.304-0.038 0.434-0.106l-0.005 0.002c0.486-0.25 1.25-0.609 2.871-1.512l-1.544-1.544c-0.061 0.066-0.093 0.134-0.159 0.2zM12.25 19.746c-0.678-0.677-2.583-0.070-3.478 0.825-2.994 2.994-4.347 5.116-4.954 6.37-0.059 0.119-0.094 0.26-0.094 0.408 0 0.518 0.42 0.938 0.938 0.938 0.149 0 0.29-0.035 0.415-0.096l-0.005 0.002c1.226-0.595 3.322-1.941 6.352-4.971 0.984-0.984 1.469-2.832 0.826-3.476zM2.926 12.482l-2.652 2.652c-0.17 0.17-0.275 0.404-0.275 0.664 0 0.518 0.42 0.938 0.938 0.938 0.087 0 0.171-0.012 0.251-0.034l-0.007 0.002c1.433-0.384 2.694-0.547 3.542-0.329 1.208-2.148 2.506-4.125 3.881-5.921-0.795-0.509-3.423-0.226-5.678 2.029zM15.869 31.9c0.123 0.063 0.268 0.1 0.421 0.1 0.259 0 0.493-0.105 0.663-0.275l2.652-2.651c2.053-2.054 2.414-4.703 1.949-5.543-2.003 1.509-4.032 2.784-5.925 3.851 0.131 0.738 0.044 1.453-0.266 3.544-0.006 0.041-0.010 0.089-0.010 0.137 0 0.364 0.208 0.679 0.511 0.834l0.005 0.002zM18.613 9.404c-0.508 0.509-0.822 1.212-0.822 1.989s0.314 1.479 0.823 1.989l-0-0c1.097 1.096 2.881 1.096 3.977 0s1.097-2.881 0-3.978-2.881-1.097-3.977 0zM31.945 0.914c-0.035-0.463-0.402-0.829-0.862-0.864l-0.003-0c-2.302-0.174-4.596 0.109-6.844 0.797 0.169 1.545 0.968 3.216 2.331 4.58 1.38 1.38 3.097 2.178 4.669 2.327 0.606-2.121 0.893-4.394 0.709-6.84z"></path><path d="M25.242 6.753c-1.56-1.56-2.512-3.431-2.819-5.253-5.629 2.309-11.019 7.35-15.277 14.434l2.116 2.116c1.446-0.587 3.2-0.742 4.314 0.371 1.114 1.115 0.956 2.869 0.37 4.313l2.185 2.186c5.45-3.284 11.794-8.459 14.492-15.344-1.866-0.282-3.796-1.236-5.381-2.822zM23.916 14.707c-1.828 1.828-4.801 1.828-6.629 0s-1.828-4.802 0-6.629c1.828-1.827 4.801-1.827 6.629 0 1.828 1.828 1.828 4.802 0 6.629z"></path></symbol><symbol id="icon-manual" viewBox="0 0 32 32"><path d="M27.010 32c0.575-1.859 2.453-8.333 2.453-10.719v-8.286c0-1.116-0.896-2.024-1.999-2.024s-2 0.908-2 2.026v3.532c-0.015 0.196-0.178 0.349-0.376 0.349s-0.361-0.153-0.376-0.347l-0-0.001v-5.521c0-1.116-0.898-2.024-2-2.024s-1.999 0.908-1.999 2.024v3.936c-0.015 0.196-0.178 0.349-0.376 0.349s-0.361-0.153-0.376-0.347l-0-0.001v-5.52c0-1.116-0.898-2.024-2-2.024s-1.999 0.908-1.999 2.023v3.938c-0.011 0.199-0.175 0.357-0.377 0.357s-0.366-0.158-0.377-0.356l-0-0.001v-11.336c0-1.116-0.896-2.025-1.999-2.025s-2 0.908-2 2.025v17.553c-0 0.16-0.1 0.297-0.241 0.351l-0.003 0.001c-0.145 0.054-0.315 0.011-0.416-0.105l-4.683-5.357-0.055-0.057c-0.361-0.342-0.848-0.553-1.385-0.555h-0.014c-0.539 0.006-1.038 0.211-1.403 0.579-0.461 0.461-0.823 1.344 0.078 2.925 1.366 2.401 2.86 4.677 4.183 6.694 0.985 1.5 1.914 2.916 2.607 4.11 0.442 0.765 1.366 2.772 1.877 3.836h15.253z"></path></symbol><symbol id="icon-ninja" viewBox="0 0 32 32"><path d="M30.66 30.997c-3.895-1.543-7.366-4.888-7.935-9.208-0.029-0.241 0.154-0.569 0.405-0.733l0.453-0.289c0.771-0.482 1.504-1.147 2.256-1.764 0.694-0.694 1.417-1.369 2.025-2.169 2.536-3.346 4.368-7.723 4.117-12.013-0.063-1.072-0.253-2.075-0.554-3.028l0.024 0.088-0.145-0.521c-0.077-0.289-0.231-0.289-0.347-0.019l-0.193 0.501c-0.116 0.309-0.289 0.675-0.511 1.080-1.388 2.439-5.245 7.231-8.61 6.344-0.82-0.212-1.331-1.475-1.832-2.102-1.477-1.846-3.24-3.39-5.234-4.588l-0.088-0.049c-3.596-2.121-8.552-3.24-12.64-1.976-1.128 0.281-1.479 0.38-1.83 0.481l0.779-0.192 1.003 0.395c2.268 0.977 4.149 2.484 5.547 4.37l0.026 0.036c1.012 1.427 3.037 4.368 1.012 5.64-4.821 2.979-8.619 9.13-8.378 14.935l0.048 0.993c0 0.627 0.096 1.196 0.193 1.697 0.058 0.482 0.154 0.906 0.26 1.253l0.145 0.521c0.077 0.289 0.231 0.289 0.347 0.019l0.193-0.501c0.116-0.309 0.289-0.675 0.511-1.080 0.212-0.405 0.444-0.858 0.771-1.302 1.071-1.483 2.385-2.717 3.896-3.669l0.057-0.034c0.829-0.501 3.741-2.121 4.512-0.945 2.876 4.496 7.475 7.674 12.844 8.613l0.114 0.017c0.405 0.067 0.8 0.125 1.196 0.135l1.070 0.058 1.003-0.048c0.627-0.010 1.205-0.096 1.697-0.193 0.482-0.058 0.906-0.154 1.253-0.26l0.521-0.145c0.289-0.087 0.289-0.231 0.019-0.347zM15.976 19.148c-1.668-0.003-3.030-1.314-3.114-2.962l-0-0.008-0.019-0.164c0.044-1.696 1.43-3.055 3.133-3.055 1.649 0 3 1.273 3.124 2.89l0.001 0.011 0.010 0.154c0 1.735-1.398 3.133-3.133 3.133z"></path></symbol><symbol id="icon-bubbles" viewBox="0 0 32 32"><path d="M15.829 0.204c-8.63 0-15.692 7.061-15.692 15.692s7.061 15.692 15.692 15.692c8.63 0 15.692-7.061 15.692-15.692s-7.061-15.692-15.692-15.692zM21.713 8.050c1.079 0 1.962 1.275 1.962 2.942s-0.883 2.942-1.962 2.942c-1.078 0-1.961-1.275-1.961-2.942s0.883-2.942 1.961-2.942zM9.945 8.050c1.079 0 1.962 1.275 1.962 2.942s-0.883 2.942-1.962 2.942c-1.079 0-1.962-1.275-1.962-2.942s0.883-2.942 1.962-2.942zM15.829 27.664c-5.1 0-9.316-4.315-9.807-9.709 2.844 1.667 6.276 2.648 9.807 2.648s6.963-0.98 9.807-2.648c-0.49 5.394-4.707 9.709-9.807 9.709z"></path></symbol><symbol id="icon-c" viewBox="0 0 29 32"><path d="M21.423 23.381l0.815-0.555c1.027-0.569 1.751-0.853 2.174-0.853 0.936 0 1.948 0.796 3.035 2.389 0.664 0.996 0.996 1.792 0.996 2.389s-0.204 1.095-0.611 1.493c-0.408 0.398-0.883 0.754-1.427 1.067s-1.064 0.612-1.563 0.896c-0.498 0.284-1.517 0.654-3.057 1.109s-3.027 0.683-4.461 0.683-2.884-0.178-4.348-0.533c-1.464-0.356-2.974-0.953-4.529-1.792s-2.952-1.863-4.19-3.072c-1.238-1.209-2.257-2.759-3.057-4.651s-1.2-3.947-1.2-6.165c0-2.219 0.392-4.231 1.178-6.037s1.789-3.3 3.012-4.48c1.223-1.18 2.619-2.169 4.189-2.965 2.959-1.536 5.933-2.304 8.923-2.304 1.419 0 2.861 0.206 4.325 0.619s2.574 0.832 3.329 1.259l1.087 0.597c0.544 0.313 0.966 0.569 1.268 0.768 0.785 0.597 1.178 1.273 1.178 2.027s-0.317 1.543-0.951 2.368c-1.178 1.536-2.234 2.304-3.171 2.304-0.544 0-1.313-0.313-2.31-0.939-1.268-0.967-2.959-1.451-5.073-1.451-1.963 0-3.895 0.64-5.797 1.92-0.906 0.626-1.661 1.508-2.265 2.645s-0.906 2.425-0.906 3.861c0 1.436 0.302 2.724 0.906 3.861s1.374 2.034 2.31 2.688c1.842 1.252 3.759 1.877 5.752 1.877 0.936 0 1.819-0.114 2.65-0.341s1.427-0.455 1.789-0.683z"></path></symbol><symbol id="icon-m" viewBox="0 0 37 32"><path d="M36.258 1.182c0.248 0.438 0.396 0.832 0.442 1.182s0.070 0.861 0.070 1.532v24.296c0 2.014-0.59 3.196-1.769 3.546-0.59 0.175-1.334 0.263-2.234 0.263s-1.614-0.073-2.141-0.219-0.931-0.321-1.21-0.525c-0.279-0.204-0.496-0.496-0.652-0.876-0.155-0.496-0.233-1.255-0.233-2.276v-14.665c-0.776 0.905-1.908 2.342-3.398 4.312s-2.436 3.203-2.839 3.699c-0.403 0.496-0.683 0.839-0.838 1.029s-0.535 0.452-1.14 0.788c-0.605 0.336-1.257 0.504-1.955 0.504s-1.334-0.153-1.908-0.46c-0.574-0.306-0.985-0.606-1.233-0.897l-0.372-0.482c-0.621-0.73-1.846-2.284-3.677-4.662s-2.824-3.655-2.979-3.83v14.752c0 0.671-0.023 1.175-0.070 1.51s-0.194 0.708-0.442 1.116c-0.465 0.788-1.676 1.182-3.63 1.182-1.893 0-3.072-0.394-3.537-1.182-0.248-0.409-0.396-0.788-0.442-1.138s-0.070-0.876-0.070-1.576v-24.295c0-0.671 0.023-1.175 0.070-1.51s0.194-0.722 0.442-1.16c0.465-0.759 1.676-1.138 3.63-1.138 0.838 0 1.559 0.095 2.164 0.284s1.001 0.387 1.187 0.591l0.279 0.263 10.566 13.045c5.275-6.566 8.797-10.9 10.565-13.001 0.528-0.788 1.776-1.182 3.747-1.182s3.173 0.394 3.607 1.182z"></path></symbol><symbol id="icon-arrow-left" viewBox="0 0 32 32"><path d="M31.438 13.169l-30.125-13.094c-0.112-0.051-0.243-0.081-0.381-0.081-0.518 0-0.938 0.42-0.938 0.938 0 0.138 0.030 0.269 0.083 0.387l-0.002-0.006 13.094 30.125c0.15 0.33 0.477 0.555 0.856 0.555 0.417 0 0.77-0.272 0.892-0.649l0.002-0.007 2.813-9.181c0.65-2.125 2.306-3.775 4.425-4.425l9.181-2.813c0.383-0.124 0.655-0.477 0.655-0.894 0-0.379-0.225-0.706-0.549-0.854l-0.006-0.002z"></path></symbol><symbol id="icon-shield" viewBox="0 0 32 32"><path d="M29.593 8.682l-0.001-0.025c-0.014-0.307-0.023-0.633-0.029-0.994-0.026-1.764-1.429-3.224-3.193-3.322-3.679-0.205-6.525-1.405-8.957-3.775l-0.021-0.020c-0.793-0.727-1.99-0.727-2.783 0l-0.021 0.020c-2.432 2.37-5.278 3.57-8.957 3.776-1.764 0.098-3.167 1.558-3.193 3.322-0.005 0.359-0.015 0.685-0.029 0.994l-0.001 0.058c-0.072 3.752-0.16 8.421 1.402 12.659 0.859 2.331 2.16 4.356 3.866 6.022 1.943 1.896 4.489 3.402 7.565 4.475 0.1 0.035 0.204 0.063 0.31 0.084 0.149 0.030 0.3 0.045 0.45 0.045s0.301-0.015 0.45-0.045c0.106-0.021 0.211-0.050 0.311-0.085 3.073-1.075 5.616-2.581 7.557-4.477 1.706-1.666 3.006-3.692 3.866-6.023 1.568-4.251 1.479-8.929 1.408-12.687zM26.423 20.72c-1.647 4.467-5.010 7.534-10.281 9.378-0.019 0.006-0.039 0.012-0.060 0.016-0.054 0.011-0.11 0.011-0.165-0-0.021-0.004-0.041-0.010-0.059-0.016-5.276-1.84-8.642-4.906-10.288-9.373-1.44-3.906-1.358-8.193-1.286-11.974l0-0.021c0.015-0.325 0.024-0.665 0.030-1.039 0.012-0.783 0.636-1.432 1.421-1.475 2.082-0.116 3.911-0.519 5.592-1.23 1.678-0.71 3.169-1.712 4.557-3.062 0.071-0.060 0.162-0.060 0.232 0 1.388 1.35 2.879 2.351 4.557 3.062 1.681 0.711 3.51 1.114 5.592 1.23 0.785 0.044 1.409 0.692 1.42 1.476 0.006 0.376 0.015 0.716 0.030 1.039 0.072 3.786 0.151 8.075-1.292 11.99z"></path><path d="M16 8.026c-4.397 0-7.975 3.578-7.975 7.975s3.577 7.975 7.975 7.975c4.397 0 7.975-3.578 7.975-7.975s-3.578-7.975-7.975-7.975zM16 22.098c-3.362 0-6.097-2.735-6.097-6.097s2.735-6.097 6.097-6.097c3.362 0 6.097 2.735 6.097 6.097s-2.735 6.097-6.097 6.097z"></path><path d="M18.292 13.525l-3.704 3.704-1.005-1.005c-0.367-0.367-0.961-0.367-1.328 0s-0.366 0.961 0 1.328l1.669 1.669c0.183 0.183 0.424 0.275 0.664 0.275s0.48-0.092 0.664-0.275l4.368-4.368c0.366-0.367 0.366-0.961 0-1.328s-0.961-0.367-1.328 0z"></path></symbol><symbol id="icon-support" viewBox="0 0 32 32"><path d="M26.948 12.168v-1.23c0-2.945-1.042-5.681-2.931-7.711-1.936-2.084-4.598-3.227-7.503-3.227h-1.015c-2.904 0-5.566 1.143-7.503 3.227-1.889 2.030-2.931 4.766-2.931 7.711v1.23c-2.292 0.155-4.114 2.064-4.114 4.397v1.923c0 2.427 1.976 4.403 4.403 4.403h2.481c0.444 0 0.807-0.363 0.807-0.807v-9.123c0-0.444-0.363-0.807-0.807-0.807h-1.156v-1.217c0-5.318 3.792-9.324 8.813-9.324h1.015c5.029 0 8.813 4.007 8.813 9.324v1.217h-1.156c-0.444 0-0.807 0.363-0.807 0.807v9.116c0 0.444 0.363 0.807 0.807 0.807h1.129c-0.329 4.208-3.227 5.183-4.571 5.405-0.37-1.136-1.439-1.956-2.696-1.956h-2.017c-1.56 0-2.83 1.271-2.83 2.83s1.271 2.837 2.83 2.837h2.024c1.304 0 2.4-0.887 2.729-2.084 0.659-0.094 1.701-0.329 2.736-0.934 1.459-0.854 3.187-2.595 3.415-6.104 2.306-0.141 4.134-2.057 4.134-4.397v-1.923c0.007-2.326-1.808-4.242-4.101-4.39zM7.042 21.271h-1.674c-1.54 0-2.79-1.25-2.79-2.79v-1.923c0-1.54 1.25-2.79 2.79-2.79h1.674v7.503zM18.034 30.387h-2.024c-0.672 0-1.217-0.545-1.217-1.217s0.545-1.217 1.217-1.217h2.024c0.672 0 1.217 0.545 1.217 1.217s-0.545 1.217-1.217 1.217zM29.442 18.481c0 1.54-1.25 2.79-2.79 2.79h-1.674v-7.503h1.674c1.54 0 2.79 1.25 2.79 2.79v1.923z"></path></symbol><symbol id="icon-777" viewBox="0 0 32 32"><path d="M11.313 8.5v15h9.375v-15zM18.813 15.438l-0.25 0.313c-0.983 0.976-1.599 2.32-1.625 3.808l-0 0.005v1.125h-1.875v-1.125c0-1.75 0.688-3.563 1.875-4.875v-0.563h-1.875v0.938h-1.875v-2.813h5.625zM0 2.875h32v3.75h-32zM0 25.375h32v3.75h-32zM9.438 8.5h-9.438v15h9.438zM7.563 15.438l-0.25 0.313c-0.983 0.976-1.599 2.32-1.625 3.808l-0 0.005v1.125h-1.875v-1.125c0-1.75 0.688-3.563 1.875-4.875v-0.563h-1.875v0.938h-1.875v-2.813h5.625zM22.563 23.5h9.438v-15h-9.438zM24.438 12.25h5.625v3.188l-0.25 0.313c-0.983 0.976-1.599 2.32-1.625 3.808l-0 0.005v1.125h-1.875v-1.125c0-1.75 0.688-3.563 1.875-4.875v-0.563h-1.875v0.938h-1.875z"></path></symbol><symbol id="icon-roulette" viewBox="0 0 32 32"><path d="M15.059 4.759c-1.153 0.096-2.219 0.351-3.215 0.743l0.076-0.027-1.265-2.628c1.294-0.538 2.793-0.898 4.362-1.004l0.044-0.002v2.917zM10.289 6.261c-0.964 0.569-1.792 1.235-2.513 2.003l-0.006 0.006-2.282-1.821c1.006-1.106 2.172-2.043 3.466-2.781l0.069-0.036 1.265 2.629zM6.643 9.686c-0.569 0.834-1.045 1.795-1.378 2.82l-0.023 0.080-2.846-0.65c0.47-1.551 1.14-2.904 1.994-4.116l-0.030 0.045 2.282 1.821zM4.838 14.352c-0.074 0.484-0.116 1.043-0.116 1.611s0.042 1.127 0.124 1.673l-0.008-0.062-2.843 0.648c-0.116-0.682-0.183-1.467-0.183-2.268 0-0.795 0.066-1.576 0.192-2.335l-0.011 0.082 2.845 0.65zM5.24 19.338c0.322 1.023 0.79 2.003 1.396 2.904l-2.283 1.82c-0.822-1.169-1.49-2.522-1.93-3.974l-0.026-0.101 2.843-0.648zM15.056 27.173l-0.002 2.918c-1.613-0.105-3.113-0.466-4.501-1.044l0.093 0.034 1.268-2.629c0.921 0.369 1.988 0.625 3.101 0.718l0.041 0.003zM20.007 26.457l1.265 2.628c-1.295 0.538-2.796 0.898-4.367 1.003l-0.043 0.002 0.002-2.917c1.154-0.096 2.222-0.351 3.22-0.743l-0.077 0.027zM24.157 23.665l2.282 1.822c-1.007 1.106-2.174 2.043-3.469 2.779l-0.069 0.036-1.264-2.629c0.964-0.569 1.793-1.235 2.515-2.003l0.005-0.006zM26.686 19.35l2.847 0.651c-0.471 1.551-1.141 2.902-1.996 4.115l0.030-0.045-2.282-1.821c0.601-0.894 1.076-1.873 1.401-2.9zM27.093 14.362l2.844-0.646c0.116 0.681 0.183 1.465 0.183 2.265 0 0.796-0.066 1.577-0.192 2.338l0.011-0.082-2.846-0.651c0.074-0.484 0.116-1.043 0.116-1.612s-0.042-1.127-0.123-1.673l0.008 0.062zM25.299 9.694l2.282-1.817c0.822 1.169 1.488 2.523 1.928 3.975l0.026 0.1-2.843 0.646c-0.352-1.107-0.825-2.069-1.418-2.944l0.025 0.039zM21.651 6.268l1.269-2.628c1.362 0.777 2.526 1.714 3.523 2.808l0.010 0.011-2.283 1.817c-0.727-0.774-1.556-1.44-2.467-1.98l-0.052-0.028zM7.766 23.657c0.727 0.772 1.556 1.438 2.467 1.978l0.052 0.029-1.268 2.631c-1.362-0.776-2.528-1.713-3.525-2.806l-0.010-0.011 2.283-1.82zM16.651 14.148l3.149-3.446 1.429 1.43-3.447 3.148v1.37l3.447 3.149-1.43 1.43-3.149-3.446h-1.37l-3.148 3.446-1.43-1.43 3.446-3.149v-1.37l-3.446-3.148 1.43-1.43 3.148 3.446h1.37zM31.385 11.835c-2.28-8.509-11.043-13.569-19.551-11.29s-13.567 11.042-11.288 19.55c2.28 8.509 11.042 13.569 19.55 11.288 8.509-2.278 13.568-11.041 11.288-19.55zM20.022 5.482c-0.923-0.37-1.993-0.627-3.109-0.72l-0.041-0.003v-2.918c1.616 0.105 3.12 0.467 4.511 1.046l-0.093-0.034-1.269 2.629z"></path></symbol><symbol id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></symbol><symbol id="icon-blackjack" viewBox="0 0 32 32"><path d="M3.502 24.616l3.122-21.336c0.061-0.41 0.158-0.777 0.289-1.127l-0.012 0.037-3.058 0.156c-2.143 0.112-3.838 1.877-3.838 4.038 0 0.072 0.002 0.144 0.006 0.215l-0-0.010 1.093 21.535c0.112 2.143 1.877 3.838 4.038 3.838 0.072 0 0.144-0.002 0.215-0.006l-0.010 0 8.235-0.417-5.525-0.809c-2.623-0.398-4.609-2.637-4.609-5.34 0-0.273 0.020-0.542 0.059-0.804l-0.004 0.030z"></path><path d="M12.558 12.141c0.811-1.329 2.057-1.86 3.736-1.594 0.949 0.15 1.663 0.552 2.147 1.208 0.484 0.655 0.663 1.379 0.538 2.171-0.148 0.93-0.519 1.604-1.116 2.022s-1.622 0.789-3.078 1.116c-0.019 0.006-0.085 0.019-0.199 0.041s-0.185 0.037-0.213 0.046-0.095 0.025-0.2 0.047c-0.105 0.023-0.177 0.045-0.215 0.065-0.039 0.021-0.099 0.047-0.178 0.078-0.067 0.024-0.125 0.057-0.175 0.099l0.001-0.001c-0.039 0.036-0.082 0.075-0.125 0.113l-0.006 0.005c-0.048 0.041-0.086 0.093-0.11 0.152l-0.001 0.003c-0.022 0.058-0.038 0.118-0.048 0.178l-0.037 0.232 4.316 0.684c0.164 0.026 0.273 0.077 0.328 0.152s0.068 0.194 0.042 0.357l-0.101 0.634c-0.025 0.163-0.076 0.272-0.151 0.327s-0.194 0.068-0.357 0.042l-5.57-0.882c-0.164-0.025-0.273-0.076-0.327-0.151s-0.069-0.194-0.043-0.357l0.154-0.97c0.067-0.422 0.192-0.78 0.376-1.073 0.186-0.294 0.435-0.532 0.73-0.699l0.010-0.005c0.243-0.145 0.526-0.28 0.822-0.389l0.037-0.012c0.262-0.091 0.603-0.183 1.024-0.275 0.896-0.194 1.494-0.373 1.794-0.538 0.511-0.272 0.81-0.683 0.898-1.235 0.014-0.075 0.022-0.161 0.022-0.25 0-0.318-0.105-0.612-0.282-0.848l0.003 0.004c-0.236-0.324-0.574-0.521-1.012-0.591-0.854-0.135-1.508 0.154-1.966 0.868-0.095 0.153-0.185 0.242-0.268 0.269s-0.199 0.002-0.346-0.075l-0.657-0.369c-0.275-0.158-0.34-0.359-0.196-0.601zM24.199 11.997c0.164 0.026 0.273 0.076 0.327 0.152 0.054 0.075 0.069 0.194 0.043 0.357l-1.314 8.297c-0.026 0.163-0.076 0.272-0.152 0.326-0.075 0.054-0.194 0.069-0.357 0.043l-0.737-0.117c-0.164-0.025-0.273-0.076-0.327-0.151s-0.069-0.194-0.043-0.357l1.073-6.772-1.969 0.721c-0.187 0.068-0.326 0.079-0.416 0.034-0.090-0.044-0.162-0.147-0.216-0.305l-0.231-0.632c-0.046-0.158-0.047-0.275-0.004-0.352s0.144-0.147 0.305-0.21l2.749-1.048c0.138-0.061 0.3-0.096 0.469-0.096 0.063 0 0.125 0.005 0.186 0.014l-0.007-0.001 0.62 0.098zM31.203 3.987c-0.628-0.841-1.562-1.424-2.635-1.583l-0.022-0.003-16.002-2.342c-0.176-0.027-0.379-0.043-0.586-0.043-2.026 0-3.705 1.491-3.998 3.435l-0.003 0.022-3.122 21.336c-0.024 0.166-0.038 0.358-0.038 0.553 0 2.032 1.485 3.717 3.429 4.029l0.023 0.003 16.003 2.342c0.166 0.024 0.358 0.038 0.553 0.038 2.032 0 3.717-1.485 4.029-3.429l0.003-0.023 3.123-21.336c0.028-0.178 0.044-0.383 0.044-0.592 0-0.908-0.301-1.746-0.809-2.419l0.007 0.010z"></path></symbol><symbol id="icon-baccarat" viewBox="0 0 26 32"><path d="M15.578 17.568c-0.781 0.208-1.628 0.313-2.54 0.313-2.848 0-4.272-1.253-4.272-3.76 0-1.165 0.393-2.086 1.18-2.762 0.785-0.676 1.872-1.014 3.257-1.014 1.429 0 2.526 0.38 3.29 1.139s1.146 1.814 1.146 3.166v3.596c0 1.363-0.382 2.422-1.146 3.175s-1.86 1.13-3.29 1.13c-2.178 0-3.602-0.868-4.272-2.606-0.066-0.198-0.074-0.346-0.025-0.445s0.179-0.193 0.388-0.281l0.874-0.313c0.198-0.077 0.343-0.092 0.437-0.042s0.185 0.179 0.272 0.387c0.385 0.913 1.159 1.369 2.326 1.369 1.583 0 2.375-0.786 2.375-2.359v-0.692zM15.578 14.632c0-0.77-0.203-1.354-0.61-1.756s-0.995-0.602-1.764-0.602c-0.77 0-1.358 0.156-1.765 0.47-0.406 0.313-0.61 0.772-0.61 1.377 0 0.616 0.185 1.075 0.553 1.377s0.97 0.454 1.805 0.454c1.089 0 1.886-0.127 2.392-0.38v-0.94zM22.697 0.002h-19.348c-1.846-0.001-3.349 1.502-3.349 3.347v26.149c0 1.38 1.168 2.502 2.605 2.502h20.837c1.436 0 2.605-1.122 2.605-2.501v-26.15c0-1.846-1.503-3.349-3.349-3.349z"></path></symbol><symbol id="icon-poker" viewBox="0 0 32 32"><path d="M27.776 12.032l-10.88-10.88c-0.48-0.48-1.28-0.48-1.792 0l-10.976 11.008c-2.912 2.912-2.912 7.712 0 10.624 1.472 1.472 3.392 2.208 5.312 2.208 1.408 0 2.816-0.416 4.064-1.184l-2.784 6.208c-0.256 0.576 0.16 1.184 0.768 1.184h8.992c0.608 0 1.024-0.64 0.768-1.184l-2.784-6.24c1.248 0.8 2.656 1.216 4.096 1.216 1.984 0 3.968-0.768 5.44-2.336 2.848-2.976 2.688-7.712-0.224-10.624z"></path></symbol><symbol id="icon-flash" viewBox="0 0 24 32"><path d="M23.698 12.574h-9.996l3.104-11.773c0.172-0.653-0.659-1.088-1.098-0.575l-15.515 18.152c-0.352 0.412-0.059 1.048 0.483 1.048h9.996l-3.104 11.773c-0.172 0.653 0.659 1.088 1.098 0.575l15.515-18.152c0.352-0.412 0.059-1.048-0.483-1.048z"></path></symbol><symbol id="icon-flash-off" viewBox="0 0 31 32"><path d="M26.761 12.574h-9.996l3.104-11.773c0.172-0.653-0.659-1.088-1.098-0.575l-15.515 18.152c-0.353 0.412-0.059 1.048 0.483 1.048h9.996l-3.104 11.773c-0.172 0.653 0.659 1.088 1.098 0.575l15.515-18.152c0.352-0.412 0.059-1.048-0.483-1.048z"></path><path d="M29.387 31.207c-0.274 0-0.548-0.105-0.757-0.314l-28.274-28.274c-0.627-0.627-0.313-1.839 0.941-1.881 0.109-0.004 0.262 0.056 0.339 0.133l28.508 28.508c0.418 0.418 0.418 1.096 0 1.514-0.209 0.209-0.483 0.314-0.757 0.314z"></path></symbol><symbol id="icon-battle" viewBox="0 0 32 32"><path d="M1.254 1.357c3.721 7.018 8.907 12.647 14.518 18.295l0.227 0.234 0.004-0.004c1.364 1.371 2.753 2.745 4.15 4.141-1.178 0.926-2.436 1.762-3.746 2.52l1.783 1.783 4.295-4.295c2.646 1.727 4.768 3.978 6.506 6.613l1.754-1.754c-2.654-1.718-4.984-3.763-6.627-6.492l4.309-4.309-1.783-1.783c-0.695 1.366-1.526 2.626-2.467 3.787-2.741-2.738-5.404-5.365-8.133-7.842-0.014-0.013-0.027-0.026-0.041-0.039-4.506-4.086-9.2-7.763-14.748-10.855zM30.746 1.357c-5.19 2.893-9.633 6.299-13.873 10.072l1.426 1.348 3.551-3.551 0.826 0.824-3.527 3.527 1.537 1.449c3.863-4.182 7.35-8.557 10.061-13.67zM10.15 9.226l12.535 12.533c-0.273 0.278-0.552 0.55-0.838 0.814l-12.523-12.524 0.826-0.824zM5.357 16.306l-1.781 1.783 4.307 4.307c-1.643 2.73-3.971 4.776-6.625 6.494l1.754 1.754c1.738-2.635 3.86-4.886 6.506-6.613l4.295 4.295 1.783-1.783c-1.31-0.757-2.568-1.594-3.746-2.52 1.117-1.114 2.226-2.215 3.322-3.311l-1.553-1.603-3.467 3.467c-0.285-0.265-0.563-0.539-0.836-0.816l3.49-3.49-1.533-1.586c-1.143 1.116-2.288 2.254-3.447 3.412-0.942-1.162-1.774-2.422-2.469-3.789z"></path></symbol><symbol id="icon-question" viewBox="0 0 32 32"><path d="M17.563 23.656c0 0.863-0.7 1.563-1.563 1.563s-1.563-0.7-1.563-1.563c0-0.863 0.7-1.563 1.563-1.563s1.563 0.7 1.563 1.563z"></path><path d="M16 0c-8.843 0-16 7.156-16 16 0 8.843 7.156 16 16 16 8.843 0 16-7.156 16-16 0-8.843-7.156-16-16-16zM16 29.5c-7.461 0-13.5-6.038-13.5-13.5 0-7.461 6.038-13.5 13.5-13.5 7.461 0 13.5 6.038 13.5 13.5 0 7.461-6.038 13.5-13.5 13.5z"></path><path d="M16 8.031c-2.757 0-5 2.243-5 5 0 0.69 0.56 1.25 1.25 1.25s1.25-0.56 1.25-1.25c0-1.379 1.121-2.5 2.5-2.5s2.5 1.121 2.5 2.5c0 1.379-1.122 2.5-2.5 2.5-0.69 0-1.25 0.56-1.25 1.25v3.125c0 0.69 0.56 1.25 1.25 1.25s1.25-0.56 1.25-1.25v-2.033c2.154-0.556 3.75-2.516 3.75-4.842 0-2.757-2.243-5-5-5z"></path></symbol><symbol id="icon-success" viewBox="0 0 32 32"><path d="M16 0c-8.873 0-16 7.127-16 16s7.127 16 16 16 16-7.127 16-16-7.127-16-16-16zM25.236 10.982v0l-11.636 12.073c-0.145 0.145-0.291 0.218-0.509 0.218s-0.436-0.073-0.509-0.218l-5.673-6.109-0.145-0.145c-0.145-0.145-0.218-0.364-0.218-0.509s0.073-0.364 0.218-0.509l1.018-1.018c0.291-0.291 0.727-0.291 1.018 0l0.073 0.073 4 4.291c0.145 0.145 0.364 0.145 0.509 0l9.745-10.109h0.073c0.291-0.291 0.727-0.291 1.018 0l1.018 1.018c0.291 0.218 0.291 0.655 0 0.945z"></path></symbol><symbol id="icon-referrals" viewBox="0 0 32 32"><path d="M16.696 5.565v-2.783h-1.391v2.783h1.391zM23.791 9.183l1.948-1.948-0.974-0.974-1.948 1.948c0.417 0.278 0.696 0.557 0.974 0.974zM26.435 16.696h2.783v-1.391h-2.783v1.391zM22.817 23.791l1.948 1.948 0.974-0.974-1.948-1.948c-0.278 0.417-0.557 0.696-0.974 0.974zM15.304 26.435v2.783h1.391v-2.783h-1.391zM8.209 22.817l-1.948 1.948 0.974 0.974 1.948-1.948c-0.417-0.278-0.696-0.557-0.974-0.974zM5.565 15.304h-2.783v1.391h2.783v-1.391zM9.183 8.209l-2.087-2.087-0.974 0.974 1.948 1.948c0.417-0.278 0.696-0.557 1.113-0.835zM16 25.043c-5.009 0-9.043-4.035-9.043-9.043s4.035-9.043 9.043-9.043c5.009 0 9.043 4.035 9.043 9.043s-4.035 9.043-9.043 9.043zM10.017 20.73c1.391 1.809 3.617 2.922 5.983 2.922s4.591-1.113 5.983-2.922c-0.556-1.53-2.087-2.644-3.896-2.644h-4.174c-1.809 0-3.339 1.113-3.896 2.644zM16 16.696c1.948 0 3.478-1.53 3.478-3.478s-1.53-3.478-3.478-3.478c-1.948 0-3.478 1.53-3.478 3.478s1.53 3.478 3.478 3.478z"></path><path d="M16 0c1.113 0 2.087 0.974 2.087 2.087s-0.974 2.087-2.087 2.087-2.087-0.974-2.087-2.087c0-1.113 0.974-2.087 2.087-2.087zM24.348 4.73c0.835-0.835 2.087-0.835 2.922 0s0.835 2.087 0 2.922c-0.835 0.835-2.087 0.835-2.922 0s-0.835-2.087 0-2.922zM27.826 16c0-1.113 0.974-2.087 2.087-2.087s2.087 0.974 2.087 2.087-0.974 2.087-2.087 2.087c-1.113 0-2.087-0.974-2.087-2.087zM24.348 27.27c-0.835-0.835-0.835-2.087 0-2.922s2.087-0.835 2.922 0c0.835 0.835 0.835 2.087 0 2.922s-2.087 0.835-2.922 0zM16 32c-1.113 0-2.087-0.974-2.087-2.087s0.974-2.087 2.087-2.087 2.087 0.974 2.087 2.087c0 1.113-0.974 2.087-2.087 2.087zM7.652 27.27c-0.835 0.835-2.087 0.835-2.922 0s-0.835-2.087 0-2.922c0.835-0.835 2.087-0.835 2.922 0s0.835 2.087 0 2.922zM4.174 16c0 1.113-0.974 2.087-2.087 2.087s-2.087-0.974-2.087-2.087 0.974-2.087 2.087-2.087c1.113 0 2.087 0.974 2.087 2.087zM7.652 4.73c0.835 0.835 0.835 2.087 0 2.922s-2.087 0.835-2.922 0c-0.835-0.835-0.835-2.087 0-2.922s2.087-0.835 2.922 0z"></path></symbol><symbol id="icon-star" viewBox="0 0 32 32"><path d="M16.756 1.245l4.070 9.634 10.421 0.895c0.423 0.037 0.752 0.389 0.752 0.818 0 0.247-0.109 0.469-0.282 0.62l-0.001 0.001-7.904 6.848 2.369 10.188c0.013 0.056 0.021 0.119 0.021 0.185 0 0.454-0.368 0.821-0.821 0.821-0.156 0-0.303-0.044-0.427-0.12l0.004 0.002-8.956-5.401-8.956 5.401c-0.121 0.074-0.267 0.118-0.424 0.118-0.454 0-0.821-0.368-0.821-0.821 0-0.066 0.008-0.129 0.022-0.191l-0.001 0.006 2.369-10.188-7.906-6.85c-0.174-0.151-0.283-0.373-0.283-0.621 0-0.429 0.329-0.781 0.748-0.818l0.003-0 10.421-0.895 4.070-9.632c0.128-0.297 0.418-0.501 0.756-0.501s0.628 0.204 0.754 0.496l0.002 0.005z"></path></symbol><symbol id="icon-telegram" viewBox="0 0 32 32"><path d="M7.7 18.234l3.98 9.949 5.181-5.181 8.884 7.061 6.255-28.125-32 13.329zM22.856 10.007l-9.795 8.934-1.22 4.598-2.254-5.635z"></path></symbol><symbol id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></symbol><symbol id="icon-a" viewBox="0 0 32 32"><path d="M30.653 30.493l-9.037-29.666c-0.151-0.483-0.594-0.827-1.118-0.827-0 0-0.001 0-0.001 0h-8.997c-0.523 0.001-0.965 0.345-1.114 0.819l-0.002 0.008-9.037 29.666c-0.032 0.101-0.050 0.218-0.050 0.339 0 0.645 0.522 1.167 1.166 1.169h6.456c0 0 0.001 0 0.002 0 0.552 0 1.015-0.383 1.137-0.898l0.002-0.008 1.362-5.889h9.154l1.365 5.889c0.124 0.523 0.587 0.905 1.139 0.905 0.001 0 0.001 0 0.002 0h6.452c0.784 0 1.347-0.759 1.119-1.508zM16.002 18.658h-3.051l0.538-2.214c0.788-3.055 1.576-6.944 2.363-10.142h0.292c0.788 3.198 1.576 7.087 2.363 10.142l0.542 2.214h-3.051z"></path></symbol><symbol id="icon-bets" viewBox="0 0 32 32"><path d="M24.666 0.594h-17.331c-3.721 0.002-6.737 3.019-6.737 6.741 0 0.001 0 0.002 0 0.003v-0 17.331c0.002 3.72 3.017 6.736 6.737 6.738h17.331c3.72-0.002 6.736-3.017 6.738-6.737v-17.335c-0.002-3.72-3.017-6.736-6.737-6.737h-0zM9.259 24.666c-1.064 0-1.927-0.863-1.927-1.927s0.863-1.927 1.927-1.927v0c1.064 0 1.927 0.863 1.927 1.927s-0.863 1.927-1.927 1.927v0zM7.334 16c0-1.064 0.863-1.927 1.927-1.927s1.927 0.863 1.927 1.927v0c0 1.064-0.863 1.927-1.927 1.927s-1.927-0.863-1.927-1.927v0zM9.259 11.188c-1.064 0-1.927-0.863-1.927-1.927s0.863-1.927 1.927-1.927v0c1.064 0 1.927 0.863 1.927 1.927s-0.863 1.927-1.927 1.927v0zM13.113 23.703v-1.925h11.553v1.925h-11.553zM24.666 16.962h-11.553v-1.925h11.553v1.925zM13.113 10.222v-1.925h11.553v1.925h-11.553z"></path></symbol><symbol id="icon-more" viewBox="0 0 104 32"><path d="M15.719 29.75c7.974 0 14.438-6.464 14.438-14.438s-6.464-14.438-14.438-14.438v0c-7.974 0-14.438 6.464-14.438 14.438s6.464 14.438 14.438 14.438v0zM50.875 29.75c7.974 0 14.438-6.464 14.438-14.438s-6.464-14.438-14.438-14.438v0c-7.974 0-14.438 6.464-14.438 14.438s6.464 14.438 14.438 14.438v0zM86.063 29.75c7.974 0 14.438-6.464 14.438-14.438s-6.464-14.438-14.438-14.438v0c-7.974 0-14.438 6.464-14.438 14.438s6.464 14.438 14.438 14.438v0z"></path></symbol><symbol id="icon-affiliate" viewBox="0 0 32 32"><path d="M10.852 3.578l3.306 3.306c0.357 0.359 0.852 0.581 1.398 0.581 0.002 0 0.004 0 0.005 0h-0c0.53 0 1.029-0.207 1.404-0.581 0.359-0.36 0.58-0.856 0.58-1.404s-0.222-1.044-0.58-1.404l-3.307-3.306c-0.357-0.359-0.852-0.582-1.398-0.582-0.002 0-0.004 0-0.006 0h0c-0.002 0-0.003 0-0.005 0-0.546 0-1.041 0.222-1.398 0.581l-0 0c-0.359 0.36-0.58 0.856-0.58 1.404 0 0.544 0.219 1.037 0.573 1.396l0.009 0.009zM6.719 7.711l4.133 4.132c0.375 0.375 0.873 0.581 1.404 0.581s1.028-0.206 1.404-0.581c0.375-0.375 0.581-0.873 0.581-1.403 0-0.002 0-0.004 0-0.006 0-0.546-0.222-1.041-0.581-1.398l-4.134-4.134c-0.357-0.359-0.852-0.581-1.398-0.581-0.002 0-0.004 0-0.005 0h0c-0.002 0-0.004 0-0.006 0-0.546 0-1.041 0.222-1.398 0.581l-0 0c-0.359 0.36-0.58 0.856-0.58 1.404 0 0.546 0.22 1.040 0.576 1.399l-0-0 0.005 0.005zM2.591 11.85l3.3 3.3c0.375 0.375 0.873 0.582 1.403 0.582s1.029-0.206 1.404-0.581c0.359-0.36 0.58-0.856 0.58-1.404s-0.221-1.043-0.579-1.402l-3.308-3.308c-0.375-0.375-0.874-0.582-1.404-0.582-0.002 0-0.004 0-0.006 0-0.546 0-1.041 0.222-1.398 0.581l-0 0c-0.359 0.357-0.582 0.852-0.582 1.399 0 0.002 0 0.003 0 0.005v-0c0 0.53 0.207 1.029 0.582 1.404l0.007 0.007zM3.005 20.53c0.284 0.283 0.655 0.48 1.069 0.548l0.011 0.002 0.024 0.004c0.096 0.014 0.194 0.021 0.293 0.021 0.002 0 0.003 0 0.005 0 0.546 0 1.041-0.222 1.398-0.581l0-0c0.359-0.36 0.58-0.856 0.58-1.404s-0.222-1.044-0.581-1.404l-2.48-2.48c-0.375-0.375-0.874-0.582-1.404-0.582s-1.029 0.206-1.404 0.581c-0.359 0.359-0.58 0.856-0.58 1.404s0.222 1.044 0.581 1.404l-0-0 0.010 0.011 2.469 2.469c0.002 0.003 0.005 0.005 0.007 0.008z"></path><path d="M31.357 15.235c-0.359-0.36-0.855-0.582-1.404-0.582-0.374 0-0.725 0.104-1.023 0.284l0.009-0.005c-0.137 0.083-0.303 0.132-0.48 0.132-0.299 0-0.566-0.14-0.737-0.358l-0.002-0.002-0.055-0.071c-0.124-0.157-0.199-0.358-0.199-0.577 0-0.259 0.105-0.493 0.275-0.663v0l1.564-1.564c0.35-0.356 0.567-0.844 0.567-1.384 0-0.002 0-0.004 0-0.006v0c0-0.53-0.206-1.029-0.581-1.404s-0.874-0.581-1.404-0.581c-0.002 0-0.003 0-0.005 0-0.547 0-1.041 0.222-1.399 0.581l-0 0c-0.17 0.173-0.407 0.28-0.668 0.28-0.518 0-0.938-0.42-0.938-0.938 0-0.262 0.107-0.498 0.28-0.668l0-0c0.359-0.359 0.581-0.856 0.581-1.404s-0.222-1.044-0.581-1.404l0 0c-0.36-0.359-0.856-0.58-1.404-0.58s-1.044 0.222-1.404 0.58l0-0c-0.17 0.173-0.407 0.28-0.668 0.28-0.518 0-0.938-0.42-0.938-0.938 0-0.262 0.107-0.498 0.28-0.668l0-0c0.375-0.375 0.581-0.873 0.581-1.404s-0.206-1.028-0.581-1.403c-0.36-0.359-0.856-0.581-1.404-0.581s-1.044 0.222-1.404 0.581l-0.953 0.953 1.027 1.028c1.505 1.505 1.505 3.954 0 5.459-0.607 0.611-1.419 1.018-2.324 1.11l-0.016 0.001c0.104 0.334 0.164 0.718 0.164 1.116 0 0.001 0 0.002 0 0.004v-0c0 1.031-0.402 2.001-1.131 2.73-0.695 0.698-1.656 1.13-2.719 1.13-0.004 0-0.007 0-0.011 0h0.001c-0.386 0-0.762-0.056-1.121-0.165-0.094 0.921-0.499 1.732-1.108 2.341l-0 0c-0.551 0.553-1.27 0.939-2.073 1.075l-0.023 0.003c0.627 1.417 0.362 3.136-0.798 4.295-0.695 0.698-1.657 1.131-2.719 1.131-0.003 0-0.007 0-0.011 0h0c-0.042 0-0.084-0.002-0.126-0.003l-1.535 1.535c-0.301 0.301-0.454 0.725-0.43 1.194 0.026 0.505 0.249 0.992 0.629 1.372l4.176 4.176c0.354 0.353 0.843 0.572 1.382 0.572s1.028-0.218 1.382-0.572l2.367-2.367 0.905-0.243c3.702 0.988 7.682-0.078 10.389-2.784l7.816-7.816c0.359-0.36 0.581-0.856 0.581-1.404s-0.222-1.044-0.581-1.404l0 0zM28.337 23.714l-3.47 3.471c-1.161 1.161-2.547 2.098-4.087 2.739l-0.084 0.031 1.299 1.298c0.354 0.353 0.843 0.572 1.382 0.572s1.028-0.218 1.382-0.572l4.176-4.176c0.749-0.749 0.929-1.836 0.392-2.373l-0.99-0.99z"></path></symbol><symbol id="icon-alert" viewBox="0 0 32 32"><path d="M30.667 23.333l-11.2-18.933c-0.533-0.933-1.467-1.6-2.533-1.867s-2.133-0.133-3.067 0.4c-0.533 0.267-1.067 0.8-1.333 1.333l-11.2 19.067c-1.067 1.867-0.4 4.4 1.467 5.467 0.533 0.4 1.2 0.533 1.867 0.533h22.667c1.067 0 2.133-0.4 2.8-1.2 0.8-0.8 1.2-1.733 1.2-2.8-0.133-0.667-0.267-1.467-0.667-2zM28.267 26.267c-0.267 0.267-0.667 0.4-0.933 0.4h-22.667c-0.267 0-0.4 0-0.667-0.133-0.667-0.4-0.8-1.2-0.533-1.867l11.333-18.8c0.133-0.133 0.267-0.4 0.4-0.4 0.667-0.4 1.467-0.133 1.867 0.4l11.333 18.8c0.133 0.133 0.133 0.4 0.133 0.667 0.133 0.4-0.133 0.667-0.267 0.933z"></path><path d="M16 10.667c-0.8 0-1.333 0.533-1.333 1.333v5.333c0 0.8 0.533 1.333 1.333 1.333s1.333-0.533 1.333-1.333v-5.333c0-0.8-0.533-1.333-1.333-1.333zM15.067 21.733c-0.267 0.267-0.4 0.533-0.4 0.933s0.133 0.667 0.4 0.933c0.267 0.267 0.533 0.4 0.933 0.4s0.667-0.133 0.933-0.4c0.267-0.267 0.4-0.667 0.4-0.933s-0.133-0.667-0.4-0.933c-0.533-0.533-1.333-0.533-1.867 0z"></path></symbol><symbol id="icon-arrow-down1" viewBox="0 0 36 32"><path d="M18.57 6.992l-17.028-5.789 17.028 29.459 16.688-29.459-16.688 5.789z"></path></symbol><symbol id="icon-arrow-up" viewBox="0 0 36 32"><path d="M18.57 24.872l-17.028 5.79 17.028-29.459 16.688 29.459-16.688-5.789z"></path></symbol><symbol id="icon-close" viewBox="0 0 32 32"><path d="M30.589 26.894c0.461 0.461 0.746 1.098 0.746 1.801s-0.285 1.34-0.746 1.801v0c-0.497 0.498-1.15 0.747-1.802 0.747s-1.303-0.248-1.802-0.747l-10.939-10.939-10.94 10.939c-0.497 0.498-1.15 0.746-1.802 0.746s-1.304-0.248-1.802-0.746c-0.462-0.461-0.747-1.098-0.747-1.802s0.286-1.341 0.747-1.802l10.94-10.94-10.94-10.939c-0.995-0.996-0.995-2.607 0-3.603s2.607-0.996 3.603 0l10.939 10.94 10.94-10.94c0.995-0.996 2.608-0.996 3.604 0s0.995 2.607 0 3.603l-10.94 10.939 10.941 10.941z"></path></symbol><symbol id="icon-club" viewBox="0 0 32 32"><path d="M30.034 13.794c-1.474-1.595-3.555-2.621-5.871-2.709 0.238-0.694 0.388-1.494 0.417-2.326l0-0.014c0.003-0.089 0.005-0.193 0.005-0.298 0-1.675-0.49-3.236-1.335-4.547l0.020 0.033c-1.394-2.197-3.774-3.724-6.544-3.911-0.050-0.003-0.099-0.006-0.149-0.008l-0.012-0.001c-4.843-0.236-8.859 3.637-8.859 8.429 0 0.911 0.142 1.796 0.423 2.644-2.248 0.086-4.274 1.055-5.739 2.569-1.581 1.634-2.509 3.903-2.361 6.383 0.251 4.237 3.607 7.615 7.812 7.899l0.026 0.001c0.176 0.013 0.382 0.021 0.59 0.021 2.162 0 4.134-0.816 5.623-2.157l-0.008 0.007-1.597 5.415c-0.015 0.049-0.024 0.106-0.024 0.164 0 0.32 0.26 0.58 0.58 0.58 0 0 0 0 0 0h6.176c0.387 0 0.666-0.372 0.556-0.744l-1.617-5.479c0.386 0.354 0.812 0.677 1.266 0.959l0.036 0.021c1.248 0.775 2.762 1.235 4.384 1.235 0.194 0 0.387-0.007 0.578-0.020l-0.026 0.001c1.588-0.101 3.036-0.627 4.253-1.465l-0.028 0.018c1.141-0.786 2.060-1.816 2.695-3.018l0.022-0.046c0.523-0.986 0.86-2.145 0.933-3.375l0.001-0.023c0.143-2.407-0.729-4.616-2.229-6.237z"></path></symbol><symbol id="icon-coin" viewBox="0 0 29 32"><path d="M0.142 25.6v1.564c0 0.569 0.178 1.102 0.533 1.493 1.067 1.244 3.733 3.307 9.707 3.307 5.938 0 8.213-2.062 9.067-3.271 0.245-0.38 0.391-0.845 0.391-1.344 0-0.003 0-0.005 0-0.008v0-1.529c-1.316 1.387-4.018 3.058-9.458 3.058-5.831 0.035-8.818-1.884-10.24-3.271z"></path><path d="M19.84 21.298c-1.316 1.387-4.018 3.058-9.458 3.058-5.831 0-8.818-1.92-10.24-3.307v1.813c0 0.569 0.178 1.102 0.533 1.493 1.067 1.244 3.733 3.307 9.707 3.307 5.938 0 8.213-2.062 9.067-3.271 0.245-0.38 0.391-0.845 0.391-1.344 0-0.003 0-0.005 0-0.008v0-1.742zM19.733 10.418c5.084-0.178 9.244-2.489 9.244-5.191 0.036-2.844-4.48-5.227-9.813-5.227s-9.849 2.382-9.849 5.227c0 0.64 0.249 1.28 0.676 1.849 4.267 0 7.893 1.316 9.742 3.342z"></path><path d="M9.991 8.32c-5.333 0-9.849 2.382-9.849 5.227 0 2.809 4.516 5.227 9.849 5.227s9.849-2.418 9.849-5.262c0-2.809-4.516-5.191-9.849-5.191zM21.084 16v3.307c4.8-0.32 6.791-2.133 7.538-3.235 0.245-0.38 0.391-0.845 0.391-1.344 0-0.003 0-0.005 0-0.008v0-1.742c-1.209 1.244-3.52 2.737-7.929 3.022z"></path><path d="M19.84 16.533c-1.813 2.062-5.511 3.449-9.849 3.449s-8-1.387-9.849-3.449v1.778c0 0.569 0.178 1.102 0.533 1.493 1.067 1.245 3.733 3.307 9.707 3.307 5.938 0 8.213-2.063 9.067-3.271 0.245-0.38 0.391-0.845 0.391-1.344 0-0.003 0-0.005 0-0.008v0-1.955zM20.587 11.591c0.32 0.604 0.462 1.244 0.462 1.92 0 0.249-0.036 0.498-0.071 0.747h0.071v0.498c4.8-0.32 6.791-2.133 7.538-3.236 0.245-0.38 0.391-0.845 0.391-1.344 0-0.003 0-0.005 0-0.008v0-1.955c-1.6 1.849-4.693 3.129-8.391 3.378zM21.084 20.551v3.058c4.8-0.32 6.791-2.133 7.538-3.235 0.245-0.38 0.391-0.845 0.391-1.344 0-0.003 0-0.005 0-0.008v0-1.528c-1.209 1.316-3.52 2.773-7.929 3.058z"></path></symbol><symbol id="icon-conversations" viewBox="0 0 37 32"><path d="M31.113 26.261v-3.686c2.951-2.092 4.883-5.527 4.883-9.422-0.001-6.379-5.171-11.549-11.55-11.549s-11.548 5.17-11.549 11.549c0.001 6.38 5.169 11.549 11.548 11.549 0.683 0 1.348-0.070 1.999-0.184l2.618 2.597c1.127 1.118 2.050 0.734 2.050-0.854zM10.154 11.141c-0.091 0.604-0.143 1.302-0.144 2.013v0.001c0 5.104 2.665 9.594 6.673 12.162-1.588 1.918-3.988 3.141-6.673 3.141-0.512 0-1.011-0.053-1.498-0.138l-1.449 1.437c-1.127 1.118-2.050 0.734-2.050-0.854v-2.038c-2.216-1.569-3.666-4.147-3.666-7.067 0-4.784 3.878-8.662 8.662-8.662 0.027 0 0.053 0.002 0.079 0.004 0.022 0.002 0.043 0.003 0.065 0.004z"></path></symbol><symbol id="icon-copy" viewBox="0 0 25 32"><path d="M9.262 3.297c-0.877 0-1.625 0.31-2.245 0.931s-0.93 1.369-0.93 2.245v14.82c0 0.877 0.31 1.625 0.93 2.245s1.369 0.93 2.246 0.93h10.585c0.877 0 1.625-0.31 2.245-0.93s0.931-1.369 0.931-2.245v-14.82c0-0.877-0.31-1.625-0.931-2.245s-1.369-0.93-2.245-0.93h-10.585zM3.969 7.713v17.814c0 0.292 0.103 0.542 0.31 0.748s0.456 0.31 0.748 0.31h13.579c-0.221 0.623-0.604 1.131-1.149 1.526s-1.161 0.591-1.845 0.591h-10.585c-0.877 0-1.625-0.31-2.246-0.93s-0.93-1.369-0.93-2.245v-14.821c0-0.683 0.197-1.298 0.592-1.845s0.903-0.929 1.526-1.149zM9.262 5.415h10.586c0.292 0 0.542 0.103 0.748 0.31 0.191 0.186 0.31 0.445 0.31 0.732 0 0.006-0 0.011-0 0.017v-0.001 14.82c0 0.292-0.103 0.542-0.31 0.748-0.186 0.191-0.445 0.31-0.733 0.31-0.006 0-0.011-0-0.017-0h-10.585c-0.292 0-0.542-0.103-0.748-0.31s-0.31-0.456-0.31-0.748v-14.821c0-0.292 0.103-0.542 0.31-0.748s0.456-0.31 0.748-0.31z"></path></symbol><symbol id="icon-crash" viewBox="0 0 32 32"><path d="M13.627 17.243c-0-1-0.811-1.811-1.812-1.811h-1.883c-1 0-1.811 0.811-1.812 1.811v12.619c0 0 0 0 0 0 0 1 0.811 1.812 1.812 1.812h1.883c1.001 0 1.812-0.811 1.812-1.812v0-12.619zM5.506 21.648c0-1.076-0.873-1.949-1.949-1.949-0 0-0 0-0 0h-1.607c-1.076 0-1.949 0.873-1.949 1.949v0 8.077c0 0 0 0 0 0 0 1.076 0.873 1.949 1.949 1.949h1.608c0 0 0 0 0 0 1.076 0 1.949-0.873 1.949-1.949v-8.077zM21.61 12.426c0-1-0.811-1.811-1.811-1.812h-1.883c-1 0-1.812 0.811-1.812 1.812v17.437c0 1 0.811 1.812 1.812 1.812v0h1.883c1-0 1.811-0.811 1.811-1.812v-17.437zM31.707 5.472l-3.532-4.53c-0.305-0.391-0.738-0.616-1.189-0.616s-0.885 0.224-1.19 0.616l-3.532 4.53c-0.303 0.388-0.377 0.815-0.204 1.17 0.189 0.387 0.642 0.618 1.213 0.618l0.952 0.003v22.651c0 0.999 0.814 1.76 1.813 1.76h1.896c0.999 0 1.798-0.761 1.798-1.76v-22.666l0.957 0.013c0.572 0 1.029-0.231 1.218-0.618 0.173-0.355 0.102-0.781-0.201-1.17z"></path></symbol><symbol id="icon-decline" viewBox="0 0 32 32"><path stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" stroke-width="1.1853" d="M23.277 6.637l-16.166 16.166c-0.19 0.19-0.32 0.356-0.415 0.522-1.531-1.991-2.454-4.518-2.454-7.262 0-0.039 0-0.078 0.001-0.117v0.006c-0.002-0.078-0.003-0.171-0.003-0.263 0-6.349 5.147-11.496 11.496-11.496 0.076 0 0.152 0.001 0.228 0.002h-0.012c2.809 0 5.333 0.901 7.324 2.441zM9.126 25.648c0.142-0.083 0.296-0.213 0.463-0.379l16.083-16.107c1.306 1.885 2.086 4.22 2.086 6.738 0 0.036 0 0.071-0.001 0.106v-0.006c0 6.672-5.084 11.804-11.757 11.804l-0.106 0.001c-0.005 0-0.012 0-0.018 0-2.551 0-4.911-0.818-6.832-2.205l0.034 0.024 0.035 0.024zM1.185 16c0 8.182 6.633 14.815 14.815 14.815s14.815-6.633 14.815-14.815v0c0-8.182-6.633-14.815-14.815-14.815s-14.815 6.633-14.815 14.815v0z"></path></symbol><symbol id="icon-diamond" viewBox="0 0 28 32"><path d="M27.784 16.44c0.117-0.171 0.187-0.383 0.187-0.611 0-0.23-0.071-0.443-0.192-0.619l0.002 0.004c-0.032-0.047-0.064-0.088-0.099-0.126l0.001 0.001-12.73-14.156c-0.222-0.243-0.539-0.397-0.891-0.403h-0.001l-0.032-0.001c-0.009 0-0.018 0-0.027 0.001-0.346 0.007-0.673 0.153-0.897 0.403l-12.729 14.155c-0.178 0.194-0.288 0.455-0.288 0.74s0.109 0.546 0.289 0.741l-0.001-0.001 12.729 14.155c0.224 0.25 0.552 0.396 0.898 0.403 0.009 0.001 0.018 0.001 0.027 0.001 0.066-0 0.131-0.005 0.194-0.015l-0.007 0.001c0.295-0.043 0.55-0.184 0.738-0.389l12.731-14.156c0.035-0.039 0.068-0.081 0.098-0.125l0.003-0.004z"></path></symbol><symbol id="icon-dice" viewBox="0 0 32 32"><path d="M7.962 2.848l-7.962 12.322 6.76 13.192 7.962-12.322-6.76-13.191zM3.97 15.982c-0.635 0-1.15-0.515-1.15-1.15s0.515-1.15 1.15-1.15v0c0.635 0 1.15 0.515 1.15 1.15s-0.515 1.15-1.15 1.15v0zM6.755 21.471c-0.635 0-1.15-0.515-1.15-1.15s0.515-1.15 1.15-1.15v0c0.635 0 1.15 0.515 1.15 1.15s-0.515 1.15-1.15 1.15v0zM7.133 11.142c-0.635 0-1.15-0.515-1.15-1.15s0.515-1.15 1.15-1.15v0c0.635 0 1.15 0.515 1.15 1.15s-0.515 1.15-1.15 1.15v0zM10.194 16.869c-0.635 0-1.149-0.514-1.149-1.149s0.514-1.15 1.149-1.15c0.635 0 1.15 0.515 1.15 1.15s-0.515 1.15-1.15 1.15v0zM16.377 17.108l-8.117 12.562 15.374 0.771 8.117-12.563-15.374-0.77zM15.542 27.646c-0.635 0-1.149-0.515-1.149-1.149s0.515-1.149 1.149-1.149v0c0.635 0 1.149 0.515 1.149 1.149s-0.515 1.149-1.149 1.149v0zM24.752 22.62c-0.635 0-1.149-0.515-1.149-1.149s0.515-1.149 1.149-1.149v0c0.635 0 1.149 0.515 1.149 1.149s-0.515 1.149-1.149 1.149v0zM25.042 2.337l-15.525-0.778 6.958 13.581 15.525 0.777-6.958-13.58zM21.36 9.971c-0.635 0-1.15-0.515-1.15-1.15s0.515-1.15 1.15-1.15v0c0.635 0 1.15 0.515 1.15 1.15s-0.515 1.15-1.15 1.15v0z"></path></symbol><symbol id="icon-double-down" viewBox="0 0 35 32"><path d="M28.328 1.22c-0.405 0.006-0.77 0.173-1.034 0.439l-0 0-9.819 9.578-9.819-9.578c-0.27-0.271-0.643-0.438-1.055-0.438-0.007 0-0.014 0-0.021 0h0.001c-0.815 0.011-1.472 0.674-1.472 1.491 0 0.425 0.178 0.809 0.464 1.080l0.001 0.001 10.862 10.594c0.268 0.262 0.636 0.423 1.041 0.423s0.772-0.162 1.041-0.424l-0 0 10.861-10.594c0.287-0.272 0.466-0.657 0.466-1.083 0-0.823-0.667-1.491-1.491-1.491-0.008 0-0.016 0-0.024 0h0.001zM28.328 12.981c-0.405 0.006-0.77 0.173-1.034 0.44l-0 0-9.819 9.579-9.819-9.579c-0.27-0.271-0.643-0.438-1.056-0.438-0.007 0-0.014 0-0.021 0h0.001c-0.815 0.011-1.472 0.674-1.472 1.491 0 0.425 0.178 0.809 0.464 1.080l0.001 0.001 10.862 10.594c0.268 0.262 0.636 0.423 1.041 0.423s0.772-0.162 1.041-0.424l-0 0 10.861-10.594c0.288-0.272 0.467-0.657 0.467-1.083 0-0.823-0.667-1.49-1.49-1.49-0.008 0-0.017 0-0.025 0l0.001-0zM2.572 27.799c-0.009-0-0.020-0-0.031-0-0.823 0-1.491 0.667-1.491 1.491s0.667 1.491 1.491 1.491c0.011 0 0.021-0 0.032-0l-0.002 0h29.764c0.007 0 0.014 0 0.022 0 0.823 0 1.49-0.667 1.49-1.49 0-0.277-0.076-0.536-0.207-0.759l0.004 0.007c-0.263-0.445-0.741-0.739-1.287-0.739-0.008 0-0.015 0-0.023 0h-29.763z"></path></symbol><symbol id="icon-double-up" viewBox="0 0 37 32"><path d="M29.675 31.484c-0.424-0.006-0.807-0.181-1.084-0.46l-0-0-10.286-10.034-10.287 10.034c-0.283 0.283-0.674 0.459-1.105 0.459-0.008 0-0.015-0-0.023-0h0.001c-0.854-0.011-1.541-0.706-1.541-1.561 0-0.445 0.186-0.847 0.486-1.132l0.001-0.001 11.379-11.098c0.281-0.274 0.666-0.444 1.090-0.444s0.809 0.169 1.090 0.444l-0-0 11.378 11.098c0.301 0.285 0.488 0.688 0.488 1.134 0 0.863-0.699 1.562-1.562 1.562-0.008 0-0.017-0-0.025-0h0.001zM29.675 19.163c-0.424-0.006-0.807-0.181-1.084-0.46l-0-0-10.286-10.036-10.287 10.036c-0.283 0.284-0.674 0.459-1.106 0.459-0.007 0-0.015-0-0.022-0h0.001c-0.854-0.011-1.542-0.706-1.542-1.561 0-0.446 0.187-0.848 0.486-1.132l0.001-0.001 11.379-11.098c0.281-0.274 0.666-0.444 1.090-0.444s0.809 0.169 1.090 0.444l-0-0 11.378 11.098c0.301 0.285 0.488 0.688 0.488 1.134 0 0.862-0.699 1.562-1.562 1.562-0.009 0-0.017-0-0.026-0l0.001 0zM2.691 3.639c-0.009 0-0.020 0-0.031 0-0.862 0-1.562-0.699-1.562-1.562s0.699-1.562 1.562-1.562c0.011 0 0.022 0 0.033 0l-0.002-0h31.181c0.009-0 0.020-0 0.031-0 0.862 0 1.562 0.699 1.562 1.562s-0.699 1.562-1.562 1.562c-0.011 0-0.022-0-0.033-0l0.002 0h-31.181z"></path></symbol><symbol id="icon-down" viewBox="0 0 21 32"><path d="M10.468 21.739c-0.441-0.044-0.833-0.223-1.142-0.494l0.002 0.002-8.549-7.379c-0.448-0.328-0.692-0.861-0.774-1.394-0.041-0.533 0.122-1.107 0.489-1.517s0.855-0.697 1.425-0.697c0.57-0.041 1.099 0.164 1.506 0.533l7.246 6.231 7.246-6.231c0.407-0.369 0.936-0.574 1.506-0.533s1.058 0.287 1.425 0.697 0.529 0.984 0.488 1.517-0.326 1.066-0.773 1.394l-8.549 7.379c-0.488 0.369-1.018 0.533-1.547 0.492z"></path></symbol><symbol id="icon-edit" viewBox="0 0 32 32"><path d="M29.629 24.637v-6.255c-0.032-0.778-0.681-1.426-1.491-1.426s-1.458 0.648-1.458 1.426v5.316c0 2.107-1.75 3.825-3.889 3.825h-15.623c-2.139 0-3.89-1.718-3.89-3.825v-15.396c0-2.107 1.75-3.824 3.89-3.824h17.113l0.032-2.885h-18.085c-3.241 0-5.867 2.593-5.867 5.769v17.275c0 3.177 2.625 5.769 5.867 5.769h17.534c3.241 0 5.867-2.593 5.867-5.769zM28.3 5.937c0.746-0.745 2.010-0.745 2.755 0 0.778 0.746 0.778 1.945 0 2.723l-13.775 13.581c-0.745 0.745-2.009 0.745-2.755 0-0.36-0.343-0.583-0.826-0.583-1.361s0.224-1.018 0.583-1.361l0.001-0.001 13.775-13.581z"></path></symbol><symbol id="icon-facebook" viewBox="0 0 17 32"><path d="M5.102 11.323h-3.507v4.677h3.507v14.031h5.846v-14.031h4.209l0.467-4.677h-4.677v-1.988c0-1.053 0.234-1.52 1.286-1.52h3.391v-5.846h-4.443c-4.209 0-6.080 1.871-6.080 5.378v3.976z"></path></symbol><symbol id="icon-fairness" viewBox="0 0 32 32"><path d="M16 30.971c-0.324 0-0.648-0.065-0.94-0.227-2.333-1.232-14.032-7.777-14.032-14.745 0-6.222 1.944-12.412 2.333-13.611 0.162-0.518 0.551-0.907 1.037-1.167 0.519-0.227 1.069-0.259 1.588-0.065 1.847 0.68 6.514 2.236 10.013 2.236s8.199-1.556 10.013-2.204c0.213-0.081 0.459-0.127 0.716-0.127 0.317 0 0.616 0.071 0.885 0.198l-0.013-0.005c0.486 0.227 0.875 0.648 1.037 1.167 0.389 1.167 2.333 7.356 2.333 13.578 0 6.967-11.698 13.513-14.031 14.744-0.292 0.162-0.616 0.227-0.94 0.227zM6.505 5.434c-0.486 0.259-0.843 0.745-0.972 1.264-0.583 2.333-1.264 5.866-1.264 9.301 0 3.5 5.768 8.134 10.759 10.986 0.292 0.162 0.648 0.259 1.005 0.259s0.681-0.065 1.005-0.259c1.155-0.66 2.097-1.259 3.010-1.898l-0.126 0.083c0.356-0.259 0.454-0.778 0.194-1.134s-0.778-0.454-1.134-0.194c-0.907 0.616-1.847 1.199-2.787 1.75-0.056 0.031-0.123 0.049-0.195 0.049s-0.138-0.018-0.197-0.050l0.002 0.001c-5.736-3.338-9.916-7.389-9.916-9.592 0-3.273 0.648-6.643 1.264-8.879 0.032-0.162 0.13-0.227 0.194-0.259 0.061-0.029 0.133-0.045 0.209-0.045 0.041 0 0.080 0.005 0.118 0.014l-0.003-0.001c3.273 0.972 6.125 1.458 8.426 1.458 2.333 0 5.152-0.486 8.425-1.458 0.163-0.032 0.26 0 0.324 0.032s0.162 0.129 0.195 0.259c0.551 2.268 1.199 5.638 1.199 8.911 0 1.296-1.491 3.338-4.148 5.574-0.357 0.292-0.389 0.778-0.097 1.134s0.777 0.389 1.134 0.097c2.139-1.847 4.731-4.504 4.731-6.838 0-3.435-0.68-6.967-1.264-9.301-0.162-0.518-0.486-1.004-0.973-1.264-0.289-0.176-0.638-0.281-1.012-0.281-0.206 0-0.404 0.032-0.59 0.090l0.014-0.004c-3.111 0.907-5.833 1.393-7.972 1.393s-4.893-0.486-7.972-1.394c-0.551-0.162-1.102-0.064-1.588 0.195z"></path></symbol><symbol id="icon-faq" viewBox="0 0 28 32"><path d="M16.511 2.388h-5.303c-0.662 0-1.326 0.544-1.326 1.361v2.723h7.954v-2.723c0-0.817-0.53-1.361-1.326-1.361z"></path><path d="M20.488 3.749h2.652c0.796 0 1.326 0.545 1.326 1.361v23.141c0 0.817-0.53 1.361-1.326 1.361h-18.56c-0.663 0-1.326-0.544-1.326-1.361v-23.141c0-0.817 0.663-1.361 1.326-1.361h2.651v5.445h13.257v-5.445zM15.185 24.168c0-1.361 0-2.45 1.458-3.948 2.519-2.586 0.795-6.942-2.784-6.942-2.254 0-3.977 1.77-3.977 4.084 0 0.817 0.53 1.361 1.326 1.361s1.326-0.545 1.326-1.361 0.53-1.361 1.326-1.361c1.193 0 1.723 1.497 0.928 2.314-1.989 2.178-2.254 3.947-2.254 5.853 0 0.817 0.53 1.361 1.326 1.361s1.326-0.544 1.326-1.361z"></path></symbol><symbol id="icon-faucet" viewBox="0 0 32 32"><path d="M29.176 8.68h-4.099c0.732-0.732 1.171-1.757 1.171-2.928 0-2.489-1.903-4.392-4.392-4.392-1.464 0-4.099 1.317-5.856 3.074-1.757-1.757-4.392-3.074-5.856-3.074-2.489 0-4.392 1.903-4.392 4.392 0 1.171 0.439 2.196 1.171 2.928h-4.099c-0.878 0-1.464 0.586-1.464 1.464v4.099c0 0.147 0.146 0.293 0.293 0.293h12.297c0.293 0 0.586-0.293 0.586-0.586v-4.685c0-0.293 0.293-0.586 0.586-0.586h1.757c0.293 0 0.586 0.293 0.586 0.586v4.685c0 0.293 0.293 0.586 0.586 0.586h12.298c0.147 0 0.293-0.146 0.293-0.293v-4.1c0-0.878-0.586-1.464-1.464-1.464zM10.144 7.216c-0.878 0-1.464-0.586-1.464-1.464s0.586-1.464 1.464-1.464c0.878 0 3.514 1.757 4.246 2.635-0.439 0.146-4.246 0.293-4.246 0.293zM17.61 6.923c0.878-1.025 3.367-2.635 4.246-2.635s1.464 0.586 1.464 1.464-0.586 1.464-1.464 1.464c0 0-3.807-0.146-4.246-0.293zM13.95 17.464h-10.834c-0.147 0-0.293 0.146-0.293 0.293v11.42c0 0.878 0.586 1.464 1.464 1.464h9.662c0.293 0 0.586-0.293 0.586-0.586v-12.005c0-0.293-0.293-0.586-0.586-0.586zM28.883 17.464h-10.833c-0.293 0-0.586 0.293-0.586 0.586v12.005c0 0.293 0.293 0.586 0.586 0.586h9.663c0.878 0 1.464-0.586 1.464-1.464v-11.42c0-0.146-0.146-0.293-0.293-0.293z"></path></symbol><symbol id="icon-gamepad" viewBox="0 0 32 32"><path d="M31.323 14.465c-1.57-7.193-3.783-8.967-5.13-9.678-2.158-1.139-4.66-0.476-5.491-0.047-0.942 0.486-1.578 1.409-2.537 1.811-1.107 0.462-2.613 0.587-3.745 0.029-0.902-0.445-1.698-1.396-2.792-1.817-1.386-0.535-3.694-1.284-5.979 0.354-0.54 0.388-4.393 3.618-5.551 13.71-0.714 6.223 2.697 8.225 2.572 8.134 0.878 0.629 2.843 1.692 5.506 0.027 1.78-1.113 3.224-3.31 3.224-3.31s0.644-1.222 1.498-1.741c0.605-0.369 1.51-0.089 1.51-0.089h3.202s1.017-0.128 1.731 0.188c0.693 0.302 1.084 1.049 1.084 1.049s2.111 2.728 4.133 4.118c0.861 0.591 4.322 1.271 6.109-0.913 1.167-1.428 1.963-5.821 0.654-11.826zM14.216 13.828c0 0.547-0.434 0.989-0.97 0.989h-2.426v2.476c0 0.548-0.434 0.991-0.97 0.991h-0.728c-0.536 0-0.97-0.442-0.97-0.991v-2.477h-2.427c-0.536 0-0.97-0.442-0.97-0.989v-0.742c0-0.547 0.434-0.991 0.97-0.991h2.426v-2.474c0-0.547 0.434-0.991 0.97-0.991h0.728c0.536 0 0.97 0.443 0.97 0.991v2.475h2.426c0.536 0 0.97 0.443 0.97 0.991v0.742h0.001zM21.049 17.293c-1.005 0-1.819-0.83-1.819-1.857 0-1.025 0.814-1.856 1.819-1.856s1.819 0.83 1.819 1.856c0.001 1.027-0.815 1.857-1.819 1.857zM24.385 13.169c-0.994 0-1.799-0.822-1.799-1.837 0-1.012 0.805-1.834 1.799-1.834s1.799 0.822 1.799 1.834c0 1.015-0.805 1.837-1.799 1.837z"></path></symbol><symbol id="icon-heart" viewBox="0 0 37 32"><path d="M25.47 0.81c-3.359-0.103-6.357 1.633-7.157 2.933-0.006 0.010-0.012 0.020-0.017 0.029s-0.011 0.018-0.016 0.027c-0.090-0.152-0.187-0.283-0.294-0.405l0.002 0.003c-0.457-0.529-1.224-1.094-2.192-1.56-1.298-0.625-2.957-1.073-4.713-1.019-3.264 0.102-5.771 1.361-7.448 3.259-2.461 2.784-3.136 6.943-1.801 10.841 0.231 0.676 0.523 1.344 0.876 1.995 0.304 0.561 0.558 0.989 0.825 1.408l-0.059-0.099c3.071 4.896 8.045 9.172 12.199 11.79 0.187 0.117 0.372 0.233 0.556 0.344 0.092 0.056 0.182 0.108 0.269 0.158 0.756 0.433 1.322 0.637 1.794 0.68l0.021-0.002c0.522-0.052 1.161-0.302 2.040-0.837 2.361-1.43 5.039-3.436 7.502-5.813 2.351-2.269 4.508-4.877 6.007-7.646 3.774-6.971 0.491-15.817-8.391-16.085z"></path></symbol><symbol id="icon-help" viewBox="0 0 32 32"><path d="M22.544 3.573c-1.824-1.315-4.115-1.973-6.873-1.973-2.098 0-3.869 0.463-5.308 1.389-2.283 1.449-3.496 3.912-3.643 7.384h5.291c0-1.013 0.296-1.984 0.885-2.925 0.59-0.938 1.592-1.407 3.005-1.407 1.436 0 2.427 0.381 2.966 1.141 0.543 0.763 0.813 1.607 0.813 2.531 0 0.806-0.403 1.544-0.891 2.213-0.267 0.39-0.619 0.75-1.058 1.079 0 0-2.869 1.84-4.128 3.318-0.729 0.856-0.795 2.141-0.861 3.981-0.004 0.131 0.046 0.403 0.504 0.403h4.113c0.41 0 0.494-0.302 0.499-0.438 0.029-0.669 0.102-1.013 0.226-1.4 0.23-0.732 0.86-1.368 1.566-1.919l1.456-1.004c1.315-1.025 2.363-1.865 2.828-2.525 0.79-1.081 1.347-2.415 1.347-4-0.002-2.583-0.913-4.531-2.738-5.849zM15.585 23.878c-1.822-0.055-3.326 1.207-3.384 3.184-0.056 1.974 1.373 3.282 3.197 3.334 1.902 0.056 3.366-1.163 3.425-3.141 0.055-1.977-1.334-3.322-3.239-3.378z"></path></symbol><symbol id="icon-hilo" viewBox="0 0 26 32"><path d="M23.116 4.55h-1.122v21.523c0 1.479-1.224 2.703-2.703 2.703h-13.873v0.357c0 0.918 0.765 1.683 1.683 1.683h16.066c0.918 0 1.683-0.765 1.683-1.683v-22.951c-0.051-0.867-0.816-1.632-1.734-1.632z"></path><path d="M21.228 26.073v-22.951c0-0 0-0 0-0.001 0-1.070-0.867-1.938-1.938-1.938-0 0-0 0-0.001 0h-16.014c-0 0-0 0-0.001 0-1.070 0-1.938 0.867-1.938 1.938 0 0 0 0 0 0v0 22.951c0 0 0 0 0 0.001 0 1.070 0.867 1.938 1.938 1.938 0 0 0 0 0.001 0h16.066c1.020 0 1.887-0.867 1.887-1.938zM11.334 23.829l-5.1-8.722 5.1 1.734 4.998-1.734-4.998 8.722zM6.234 14.189l5.1-8.823 4.998 8.823-4.998-1.734-5.1 1.734z"></path></symbol><symbol id="icon-history" viewBox="0 0 32 32"><path d="M16 0c-8.822 0-16 7.178-16 16s7.178 16 16 16c8.822 0 16-7.178 16-16s-7.178-16-16-16zM16 29.81c-7.615 0-13.809-6.195-13.809-13.81s6.195-13.809 13.809-13.809 13.809 6.195 13.809 13.809c0 7.615-6.195 13.81-13.809 13.81z"></path><path d="M24.255 15.786h-7.6v-8.303c0-0.605-0.49-1.095-1.095-1.095s-1.095 0.49-1.095 1.095v0 9.398c0 0 0 0 0 0 0 0.605 0.49 1.095 1.095 1.095 0 0 0 0 0 0h8.696c0.605 0 1.095-0.49 1.095-1.095s-0.49-1.095-1.095-1.095v0z"></path></symbol><symbol id="icon-icon_bets" viewBox="0 0 32 32"><path d="M24.665 0.596h-17.33c-3.722 0-6.739 3.017-6.739 6.739v17.33c0 3.722 3.017 6.739 6.739 6.739h17.33c3.722 0 6.739-3.017 6.739-6.739v-17.33c0-3.722-3.017-6.739-6.739-6.739zM9.261 24.665c-0.007 0-0.016 0-0.025 0-1.063 0-1.926-0.862-1.926-1.926s0.862-1.926 1.926-1.926c0.009 0 0.017 0 0.026 0h-0.001c1.053 0.014 1.901 0.871 1.901 1.925s-0.848 1.912-1.9 1.925h-0.001zM7.335 16c-0-0.007-0-0.016-0-0.025 0-1.063 0.862-1.926 1.926-1.926s1.926 0.862 1.926 1.926c0 0.009-0 0.017-0 0.026v-0.001c-0.014 1.053-0.871 1.901-1.925 1.901s-1.912-0.848-1.925-1.9v-0.001zM9.261 11.186c-1.063 0-1.926-0.862-1.926-1.926s0.862-1.926 1.926-1.926v0c1.063 0 1.926 0.862 1.926 1.926s-0.862 1.926-1.926 1.926v0zM13.112 23.702v-1.926h11.553v1.926h-11.553zM24.665 16.963h-11.553v-1.926h11.553v1.926zM13.112 10.223v-1.926h11.553v1.926h-11.553z"></path></symbol><symbol id="icon-instagram" viewBox="0 0 30 32"><path d="M14.769 1.969c-3.859 0-4.326 0-5.729 0.117-5.145 0.234-7.951 3.040-8.185 8.185-0.117 1.403-0.117 1.871-0.117 5.729s0 4.326 0.117 5.729c0.234 5.145 3.040 7.951 8.184 8.185 1.403 0.117 1.871 0.117 5.73 0.117s4.326 0 5.729-0.117c5.145-0.234 7.951-3.040 8.184-8.185 0.117-1.403 0.117-1.871 0.117-5.729s0-4.326-0.117-5.729c-0.234-5.145-3.040-7.951-8.185-8.185-1.403-0.117-1.871-0.117-5.729-0.117zM14.769 4.542c3.741 0 4.209 0 5.729 0.117 3.858 0.117 5.613 1.987 5.729 5.729 0.117 1.52 0.117 1.871 0.117 5.612s0 4.209-0.117 5.613c-0.117 3.741-1.988 5.612-5.729 5.729-1.52 0.117-1.871 0.117-5.729 0.117-3.741 0-4.209 0-5.612-0.117-3.858-0.117-5.612-1.988-5.729-5.729-0.117-1.52-0.117-1.871-0.117-5.613s0-4.209 0.117-5.613c0.117-3.742 1.987-5.612 5.729-5.729 1.403-0.117 1.871-0.117 5.613-0.117zM7.52 16c0 3.976 3.274 7.249 7.249 7.249s7.249-3.274 7.249-7.249c0-3.975-3.274-7.249-7.249-7.249s-7.249 3.274-7.249 7.249zM14.769 20.677c-2.572 0-4.677-2.105-4.677-4.677s2.105-4.677 4.677-4.677c2.573 0 4.677 2.104 4.677 4.677s-2.104 4.677-4.677 4.677zM20.616 8.517c0-0.935 0.702-1.637 1.637-1.637s1.637 0.702 1.637 1.637-0.701 1.637-1.637 1.637-1.637-0.701-1.637-1.637z"></path></symbol><symbol id="icon-keno" viewBox="0 0 32 32"><path d="M28.16 23.904l-4.256 4.256h-15.807l-4.256-4.256v-15.808l4.256-4.255h15.808l4.256 4.255v15.809zM26.4 0h-20.801l-5.599 5.599v20.801l5.599 5.6h20.801l5.6-5.6v-20.801l-5.6-5.599z"></path><path d="M15.355 16.922c0.135 0 0.229 0.027 0.283 0.080s0.080 0.148 0.080 0.283v0.459c0 0.135-0.025 0.229-0.074 0.282s-0.146 0.080-0.288 0.080h-0.736v1.398c0 0.135-0.027 0.229-0.080 0.282s-0.148 0.080-0.283 0.080h-0.522c-0.135 0-0.229-0.027-0.283-0.080s-0.080-0.148-0.080-0.282v-1.398h-3.52c-0.135 0-0.229-0.027-0.283-0.080s-0.080-0.148-0.080-0.282v-0.384c0-0.177 0.043-0.323 0.128-0.437l3.541-4.394c0.142-0.171 0.313-0.256 0.512-0.256h0.587c0.135 0 0.229 0.025 0.283 0.075s0.080 0.146 0.080 0.287v4.288zM13.371 14.064l-2.315 2.858h2.315zM16.539 14.704c0-0.789 0.249-1.415 0.747-1.877s1.191-0.693 2.080-0.693c0.889 0 1.58 0.231 2.075 0.693s0.741 1.088 0.741 1.877v2.741c0 0.797-0.247 1.426-0.741 1.888s-1.186 0.693-2.075 0.693c-0.889 0-1.582-0.231-2.080-0.693s-0.747-1.092-0.747-1.888zM20.848 14.704c0-0.42-0.13-0.745-0.389-0.976s-0.624-0.347-1.093-0.347c-0.469 0-0.834 0.116-1.093 0.347s-0.389 0.556-0.389 0.976v2.741c0 0.42 0.13 0.747 0.389 0.981s0.624 0.352 1.093 0.352c0.469 0 0.834-0.117 1.093-0.352s0.389-0.562 0.389-0.981zM22.067 6.667h-12.134l-3.267 3.266v12.134l3.266 3.266h12.134l3.266-3.266v-12.134l-3.266-3.266z"></path></symbol><symbol id="icon-ladder" viewBox="0 0 32 32"><path d="M23.057 0c-0.982 0-1.778 0.796-1.778 1.778v0 1.939h-10.559v-1.939c0-0.982-0.796-1.778-1.778-1.778s-1.778 0.796-1.778 1.778v0 28.444c0.019 0.968 0.808 1.745 1.778 1.745s1.759-0.777 1.778-1.743l0-0.002v-1.724h10.559v1.724c0.019 0.968 0.808 1.745 1.778 1.745s1.759-0.777 1.778-1.743l0-0.002v-28.444c0-0 0-0 0-0 0-0.982-0.796-1.778-1.778-1.778v0zM10.721 14.384h10.559v3.448h-10.559v-3.448zM21.279 7.273v3.555h-10.559v-3.556h10.559zM10.721 24.943v-3.556h10.559v3.556h-10.559z"></path></symbol><symbol id="icon-left" viewBox="0 0 21 32"><path d="M3.028 16.271c0.054 0.543 0.273 1.084 0.655 1.518l9.829 11.387c0.437 0.597 1.147 0.922 1.857 1.030 0.71 0.054 1.474-0.163 2.020-0.651s0.928-1.139 0.928-1.898c0.055-0.759-0.218-1.464-0.709-2.006l-8.3-9.652 8.3-9.652c0.491-0.542 0.764-1.247 0.709-2.006s-0.382-1.409-0.928-1.898c-0.546-0.488-1.31-0.705-2.020-0.651s-1.42 0.434-1.856 1.030l-9.829 11.387c-0.491 0.651-0.71 1.356-0.655 2.061z"></path></symbol><symbol id="icon-loader" viewBox="0 0 32 32"><path d="M27.488 10.847c0.262 0 0.492-0.066 0.755-0.197 0.722-0.427 0.952-1.313 0.525-2.002-0.427-0.722-1.313-0.952-2.002-0.525-0.722 0.394-0.952 1.313-0.525 2.035 0.23 0.427 0.722 0.689 1.247 0.689zM21.875 5.793c0.216 0.124 0.474 0.197 0.749 0.197 0.002 0 0.004 0 0.006 0h-0c0.492 0 1.018-0.263 1.28-0.755 0.394-0.689 0.164-1.608-0.525-2.002-0.722-0.394-1.608-0.164-2.035 0.525-0.394 0.722-0.164 1.608 0.525 2.035zM16 30.737c8.139 0 14.737-6.597 14.737-14.737 0-0.821-0.657-1.477-1.477-1.477s-1.477 0.656-1.477 1.477c0 6.498-5.284 11.782-11.783 11.782s-11.783-5.284-11.783-11.783c0-6.498 5.284-11.783 11.783-11.783 0.821 0 1.477-0.656 1.477-1.477s-0.656-1.477-1.477-1.477c-8.139 0-14.737 6.597-14.737 14.737s6.597 14.736 14.737 14.736z"></path></symbol><symbol id="icon-logout" viewBox="0 0 36 32"><path d="M25.399 8.715c0.781-0.805 0.781-2.109 0-2.914-5.467-5.633-14.332-5.633-19.799 0s-5.468 14.766 0 20.399c5.467 5.633 14.331 5.633 19.799 0 0.781-0.805 0.781-2.109 0-2.914-0.357-0.372-0.859-0.603-1.414-0.603s-1.057 0.231-1.414 0.603l-0.001 0.001c-3.905 4.023-10.237 4.023-14.142 0s-3.905-10.547 0-14.571 10.237-4.024 14.142 0c0.357 0.372 0.859 0.604 1.414 0.604s1.057-0.231 1.414-0.603l0.001-0.001zM29.41 22.058l4.584-4.81c0.677-0.71 0.673-1.857-0.007-2.563l-4.578-4.745c-1.886-1.936-4.714 0.968-2.828 2.904l0.019 0.019c0.589 0.598 0.399 1.083-0.435 1.083h-14.669c-1.099 0-1.99 0.916-1.996 2.053v0c0.006 1.135 0.899 2.053 1.996 2.053h14.669c0.829 0 1.023 0.486 0.435 1.082l-0.019 0.019c-1.886 1.936 0.942 4.84 2.828 2.904z"></path></symbol><symbol id="icon-mines" viewBox="0 0 32 32"><path d="M20.174 10.247v-2.028c-0.001-0.597-0.484-1.081-1.081-1.081h-1.639v-1.972h1.798c0.633 0 1.223-0.25 1.659-0.703 0.398-0.411 0.644-0.971 0.644-1.589 0-0.033-0.001-0.067-0.002-0.1l0 0.005-0.058-1.563c-0.025-0.676-0.579-1.215-1.259-1.215-0.017 0-0.033 0-0.050 0.001l0.002-0c-0.676 0.026-1.214 0.58-1.214 1.26 0 0.016 0 0.033 0.001 0.049l-0-0.002 0.049 1.335h-1.751c-1.291 0-2.342 1.051-2.342 2.342v2.152h-2.025c-0.597 0.001-1.080 0.484-1.081 1.081v2.028c-4.158 1.663-7.103 5.732-7.103 10.477-0 6.218 5.058 11.277 11.277 11.277s11.277-5.059 11.277-11.277c0-4.745-2.945-8.814-7.103-10.476z"></path></symbol><symbol id="icon-minus1" viewBox="0 0 25 32"><path d="M25.143 13.143v3.429c0 0.947-0.767 1.714-1.714 1.714v0h-21.714c-0.947 0-1.714-0.767-1.714-1.714v0-3.429c0-0.947 0.767-1.714 1.714-1.714v0h21.714c0.947 0 1.714 0.768 1.714 1.714v0z"></path></symbol><symbol id="icon-network" viewBox="0 0 32 32"><path d="M4.872 25.683c1.448 0 2.621-1.173 2.621-2.621v-1.219c0-1.448-1.173-2.621-2.621-2.621s-2.621 1.174-2.621 2.621v0 1.219c0 1.447 1.173 2.621 2.621 2.621h0zM16 6.462c1.447-0 2.621-1.173 2.621-2.621v-1.22c-0.016-1.435-1.183-2.593-2.621-2.593s-2.605 1.157-2.621 2.591v1.221c0 1.448 1.173 2.621 2.621 2.621 0 0 0 0 0 0v0zM7.959 26.896l-0.54-0.132c-0.725 0.5-1.602 0.794-2.547 0.794s-1.822-0.294-2.546-0.794l-0.54 0.132c-1.033 0.258-1.786 1.178-1.786 2.274v0 2.83h9.745v-2.83c-0-1.096-0.753-2.016-1.77-2.27l-0.016-0.003zM27.128 19.221c-1.448 0-2.621 1.174-2.621 2.621 0 0 0 0 0 0v0 1.219c-0 0.009-0 0.019-0 0.029 0 1.448 1.174 2.621 2.621 2.621s2.621-1.174 2.621-2.621c0-0.010-0-0.020-0-0.030v0.002-1.219c0-0 0-0 0-0 0-1.448-1.174-2.621-2.621-2.621v0zM19.086 7.675l-0.54-0.131c-0.724 0.499-1.602 0.793-2.546 0.793s-1.822-0.294-2.546-0.793l-0.54 0.132c-1.033 0.258-1.786 1.178-1.786 2.274 0 0 0 0 0 0v0 2.83h9.744v-2.83c0-0 0-0 0-0 0-1.096-0.753-2.016-1.77-2.27l-0.016-0.003zM30.214 26.896l-0.54-0.132c-0.724 0.5-1.602 0.794-2.546 0.794s-1.822-0.294-2.547-0.794l-0.54 0.132c-1.033 0.258-1.786 1.178-1.786 2.274v0 2.83h9.745v-2.83c-0-1.096-0.753-2.016-1.77-2.27l-0.016-0.003zM24.122 10.988c1.547 1.695 2.57 3.891 2.8 6.319l0.003 0.044c0.062-0.003 0.134-0.005 0.206-0.005 0.612 0 1.195 0.123 1.726 0.346l-0.029-0.011c-0.166-3.082-1.397-5.848-3.328-7.964l0.009 0.010c-1.233-1.355-2.738-2.44-4.432-3.17l-0.083-0.032c1.005 0.727 1.671 1.87 1.745 3.171l0 0.011c0.508 0.398 0.96 0.818 1.374 1.273l0.008 0.009zM6.461 9.759c-1.905 2.101-3.124 4.855-3.288 7.889l-0.001 0.032c0.502-0.212 1.085-0.334 1.696-0.334 0.073 0 0.145 0.002 0.216 0.005l-0.010-0c0.232-2.459 1.246-4.645 2.786-6.344l-0.008 0.009c0.429-0.474 0.89-0.903 1.384-1.291l0.024-0.018c0.075-1.311 0.739-2.452 1.73-3.171l0.012-0.008c-1.789 0.768-3.303 1.863-4.532 3.221l-0.010 0.011zM11.548 28.397c0.046 0.251 0.071 0.509 0.071 0.773v1.277c1.299 0.485 2.801 0.766 4.368 0.766 0.004 0 0.009 0 0.013 0h-0.001c1.511 0 2.988-0.261 4.38-0.766v-1.277c0-0.263 0.025-0.521 0.071-0.772-1.304 0.594-2.829 0.94-4.434 0.94-0.006 0-0.012 0-0.018 0h0.001c-1.55 0-3.060-0.322-4.452-0.941z"></path></symbol><symbol id="icon-news" viewBox="0 0 32 32"><path d="M29 0h-22c-1.657 0-3 1.342-3 3v2h-1c-1.657 0-3 1.342-3 3v20c0 2.209 1.791 4 4 4h24c2.209 0 4-1.791 4-4v-25c0-1.658-1.344-3-3-3zM30 28c0 1.102-0.898 2-2 2h-24c-1.103 0-2-0.898-2-2v-20c0-0.552 0.448-1 1-1h1v20c0 0.553 0.447 1 1 1s1-0.447 1-1v-24c0-0.552 0.448-1 1-1h22c0.551 0 1 0.448 1 1v25zM19.498 13.005c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5h8c0.277 0 0.5 0.224 0.5 0.5s-0.223 0.5-0.5 0.5h-8zM19.498 10.005c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5h8c0.277 0 0.5 0.224 0.5 0.5s-0.223 0.5-0.5 0.5h-8zM19.498 7.005c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5h8c0.277 0 0.5 0.224 0.5 0.5s-0.223 0.5-0.5 0.5h-8zM16.5 27.004c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5v0h-8c-0.276 0-0.5-0.223-0.5-0.5 0-0.275 0.224-0.5 0.5-0.5h8zM16.5 24.004c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5v0h-8c-0.276 0-0.5-0.223-0.5-0.5 0-0.275 0.224-0.5 0.5-0.5h8zM16.5 21.004c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5v0h-8c-0.276 0-0.5-0.223-0.5-0.5 0-0.275 0.224-0.5 0.5-0.5h8zM27.5 27.004c0.275 0 0.5 0.225 0.5 0.5 0 0.276-0.224 0.5-0.5 0.5v0h-8c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5v0h8zM27.5 24.004c0.275 0 0.5 0.225 0.5 0.5 0 0.276-0.224 0.5-0.5 0.5v0h-8c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5v0h8zM27.5 21.004c0.275 0 0.5 0.225 0.5 0.5 0 0.276-0.224 0.5-0.5 0.5v0h-8c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5v0h8zM27.5 15.004c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-19c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5v0h19zM27.5 18.004c0.275 0 0.5 0.225 0.5 0.5 0 0.276-0.224 0.5-0.5 0.5v0h-19c-0.276 0-0.5-0.223-0.5-0.5 0-0.275 0.224-0.5 0.5-0.5h19zM9 13h7c0.553 0 1-0.447 1-1v-6.996c0-0.553-0.447-1-1-1h-7c-0.553 0-1 0.447-1 1v6.996c0 0.552 0.448 1 1 1v0zM10 6h5v5h-5v-5z"></path></symbol><symbol id="icon-open-in-new-tab" viewBox="0 0 32 32"><path d="M6.091 8.876h1.712c0.771-0.012 1.391-0.639 1.391-1.411s-0.62-1.4-1.389-1.411l-1.713-0.001c-2.721 0.001-4.925 2.205-4.926 4.926v14.685c0.001 2.721 2.205 4.925 4.926 4.926h14.685c2.721-0.001 4.925-2.205 4.925-4.926v-1.712c0-0.78-0.632-1.412-1.412-1.412s-1.412 0.632-1.412 1.412v0 1.712c-0.002 1.16-0.942 2.1-2.102 2.102h-14.685c-1.16-0.002-2.1-0.942-2.102-2.102v-14.686c0.002-1.16 0.942-2.101 2.102-2.103h0z"></path><path d="M13.479 18.767c0.256 0.255 0.608 0.413 0.998 0.413s0.743-0.158 0.998-0.413l12.535-12.536v8.679c0 0.78 0.632 1.412 1.412 1.412s1.412-0.632 1.412-1.412v0-12.088c0-0.184-0.037-0.366-0.108-0.538-0.074-0.179-0.178-0.332-0.306-0.461l0 0c-0.128-0.128-0.282-0.231-0.451-0.302l-0.009-0.003c-0.159-0.068-0.344-0.107-0.538-0.108h-12.087c-0.78 0-1.412 0.632-1.412 1.412s0.632 1.412 1.412 1.412v0h8.679l-12.535 12.535c-0.256 0.256-0.414 0.609-0.414 0.999s0.158 0.743 0.414 0.999v0z"></path></symbol><symbol id="icon-person" viewBox="0 0 27 32"><path d="M13.718 15.334c3.31 0 5.993-2.683 5.993-5.993s-2.683-5.993-5.993-5.993-5.993 2.683-5.993 5.993 2.683 5.993 5.993 5.993zM0.9 26.688c-0.167 1.032 0.666 1.965 1.698 1.965h22.241c1.066 0 1.865-0.933 1.698-1.965-0.966-5.959-6.326-9.356-12.818-9.356s-11.853 3.396-12.819 9.356z"></path></symbol><symbol id="icon-plinko" viewBox="0 0 32 32"><path d="M16.16 7.697c-4.364 0-7.913 3.55-7.913 7.913s3.55 7.913 7.913 7.913 7.913-3.549 7.913-7.912c0-4.363-3.55-7.913-7.913-7.913z"></path><path d="M16.16 26.731c-6.131 0-11.121-4.99-11.121-11.121s4.99-11.121 11.121-11.121c6.131 0 11.121 4.99 11.121 11.121s-4.99 11.121-11.121 11.121zM16.16 0c-8.621 0-15.61 6.988-15.61 15.609s6.988 15.61 15.609 15.61c8.621 0 15.61-6.988 15.61-15.609s-6.988-15.61-15.609-15.61z"></path></symbol><symbol id="icon-plus1" viewBox="0 0 25 32"><path d="M25.143 13.143v3.429c0 0.947-0.767 1.714-1.714 1.714v0h-7.429v7.429c0 0.947-0.768 1.714-1.714 1.714v0h-3.429c-0.947 0-1.714-0.767-1.714-1.714v0-7.429h-7.429c-0.947 0-1.714-0.767-1.714-1.714v0-3.429c0-0.947 0.767-1.714 1.714-1.714v0h7.429v-7.429c0-0.947 0.768-1.714 1.714-1.714v0h3.429c0.947 0 1.714 0.768 1.714 1.714v0 7.429h7.429c0.947 0 1.714 0.768 1.714 1.714v0z"></path></symbol><symbol id="icon-stats" viewBox="0 0 58 32"><path d="M49.378 3.031c-2.889 0-5.237 2.134-5.237 4.761 0 0.821 0.241 1.587 0.602 2.243l-6.621 6.238c-0.662-0.328-1.445-0.492-2.288-0.492-1.565 0-2.949 0.602-3.852 1.587l-4.454-1.805v-0.492c0-2.627-2.348-4.761-5.237-4.761s-5.237 2.134-5.237 4.761c0 0.547 0.12 1.040 0.301 1.532l-5.598 3.775c-0.842-0.547-1.926-0.876-3.009-0.876-2.889-0.055-5.237 2.080-5.237 4.706s2.347 4.76 5.237 4.76c2.889 0 5.237-2.134 5.237-4.761 0-0.547-0.12-1.040-0.301-1.532l5.598-3.776c0.843 0.547 1.926 0.875 3.009 0.875 1.565 0 2.95-0.602 3.852-1.587l4.454 1.806v0.492c0 2.627 2.348 4.761 5.237 4.761s5.237-2.134 5.237-4.761c0-0.821-0.241-1.587-0.602-2.243l6.681-6.293c0.663 0.328 1.445 0.492 2.288 0.492 2.889 0 5.237-2.134 5.237-4.761-0.12-2.517-2.468-4.651-5.297-4.651z"></path></symbol><symbol id="icon-question1" viewBox="0 0 32 32"><path d="M16.823 18.485v2.89l-5.561 0.031v-8.42h4.753c1.927 0 3.48-1.553 3.48-3.479s-1.553-3.48-3.479-3.48-3.48 1.553-3.48 3.48h-5.561c0-5.002 4.070-9.041 9.041-9.041s9.010 4.039 9.010 9.041c0 4.691-3.604 8.575-8.202 8.978zM14.12 31.534c2.361 0 4.256-1.895 4.256-4.256 0-2.33-1.895-4.225-4.256-4.256-0.004 0-0.009-0-0.013-0-2.343 0-4.243 1.9-4.243 4.243 0 0.005 0 0.009 0 0.014v-0.001c0 2.361 1.895 4.256 4.256 4.256z"></path></symbol><symbol id="icon-refresh" viewBox="0 0 32 32"><path d="M32 12h-12l4.486-4.486c-2.267-2.266-5.281-3.514-8.486-3.514s-6.219 1.248-8.485 3.514c-2.267 2.267-3.515 5.281-3.515 8.486s1.248 6.219 3.515 8.485c2.266 2.267 5.28 3.515 8.485 3.515s6.219-1.248 8.485-3.515c0.189-0.189 0.371-0.384 0.546-0.583l3.010 2.634c-2.933 3.349-7.239 5.464-12.041 5.464-8.836 0-16-7.163-16-16s7.164-16 16-16c4.419 0 8.417 1.791 11.313 4.688l4.688-4.688v12z"></path></symbol><symbol id="icon-rouble1" viewBox="0 0 23 32"><path d="M18.625 10.089c0-2.393-1.696-4-4.214-4h-5.714v8h5.714c2.518 0 4.214-1.607 4.214-4zM22.857 10.089c0 4.589-3.321 7.804-8.089 7.804h-6.071v2.107h9.018c0.321 0 0.571 0.25 0.571 0.571v2.286c0 0.321-0.25 0.571-0.571 0.571h-9.018v3.429c0 0.321-0.25 0.571-0.571 0.571h-2.982c-0.321 0-0.571-0.25-0.571-0.571v-3.429h-4c-0.321 0-0.571-0.25-0.571-0.571v-2.286c0-0.321 0.25-0.571 0.571-0.571h4v-2.107h-4c-0.321 0-0.571-0.25-0.571-0.571v-2.661c0-0.321 0.25-0.571 0.571-0.571h4v-11.232c0-0.321 0.25-0.571 0.571-0.571h9.625c4.768 0 8.089 3.214 8.089 7.804z"></path></symbol><symbol id="icon-send" viewBox="0 0 28 32"><path d="M3.876 2.677l21.633 11.572c0.648 0.35 1.052 1.025 1.052 1.753s-0.404 1.402-1.052 1.753l-21.633 11.572c-0.647 0.351-1.483 0.108-1.834-0.567-0.162-0.297-0.216-0.674-0.108-0.998l2.401-8.524 10.034-3.237-10.034-3.264-2.401-8.497c-0.035-0.114-0.055-0.245-0.055-0.38 0-0.618 0.42-1.138 0.99-1.29l0.009-0.002c0.324-0.108 0.674-0.054 0.998 0.107z"></path></symbol><symbol id="icon-settings" viewBox="0 0 32 32"><path d="M26.552 6.704c0.589 0.14 1.091 0.504 1.385 1.008l1.592 2.604c0.192 0.309 0.307 0.685 0.307 1.087 0 0.191-0.026 0.376-0.074 0.552l0.003-0.015c-0.147 0.56-0.53 1.036-1.061 1.316l-1.385 0.756c0.113 0.594 0.177 1.276 0.177 1.974s-0.064 1.38-0.187 2.042l0.011-0.069 1.385 0.784c0.531 0.28 0.914 0.756 1.061 1.316 0.148 0.532 0.059 1.12-0.236 1.624l-1.592 2.632c-0.294 0.504-0.796 0.868-1.385 1.008-0.56 0.14-1.179 0.056-1.709-0.224l-1.385-0.756c-1.025 0.82-2.218 1.486-3.512 1.935l-0.084 0.025v1.512c0 1.176-1.032 2.184-2.269 2.184h-3.183c-1.267 0-2.27-1.008-2.27-2.184v-1.512c-1.326-0.42-2.534-1.092-3.596-1.96l-1.385 0.756c-0.501 0.28-1.12 0.364-1.709 0.224s-1.091-0.504-1.385-1.008l-1.591-2.631c-0.192-0.309-0.306-0.684-0.306-1.086 0-0.191 0.026-0.376 0.074-0.552l-0.003 0.015c0.147-0.56 0.53-1.036 1.061-1.316l1.385-0.756c-0.112-0.593-0.177-1.276-0.177-1.974s0.064-1.38 0.187-2.042l-0.011 0.069-1.385-0.784c-0.531-0.28-0.914-0.756-1.061-1.316-0.147-0.532-0.059-1.12 0.236-1.624l1.592-2.604c0.324-0.504 0.796-0.868 1.385-1.008 0.56-0.14 1.179-0.056 1.709 0.224l1.385 0.756c1.021-0.84 2.215-1.516 3.515-1.964l0.080-0.024v-1.512c0-1.176 1.032-2.184 2.27-2.184h3.183c1.267 0 2.269 1.008 2.269 2.184v1.512c1.381 0.472 2.575 1.148 3.616 2.004l-0.020-0.016 1.385-0.756c0.501-0.28 1.12-0.364 1.709-0.224zM11.962 19.836c1.061 1.036 2.535 1.596 4.038 1.596 1.533 0 2.947-0.588 4.038-1.596 1.034-0.957 1.679-2.321 1.68-3.836v-0c0-1.428-0.619-2.8-1.68-3.836s-2.535-1.596-4.038-1.596-2.947 0.588-4.037 1.596-1.681 2.408-1.681 3.836 0.619 2.8 1.68 3.836z"></path></symbol><symbol id="icon-smile" viewBox="0 0 34 32"><path d="M1.563 16c0-8.555 6.944-15.499 15.499-15.499s15.499 6.944 15.499 15.499-6.944 15.499-15.499 15.499c-8.555 0-15.499-6.944-15.499-15.499zM22.859 10.172c0-1.054-0.867-1.922-1.922-1.922s-1.922 0.868-1.922 1.922 0.868 1.922 1.922 1.922c1.054 0 1.922-0.868 1.922-1.922zM13.188 8.251c-1.054 0-1.922 0.868-1.922 1.922s0.868 1.922 1.922 1.922c1.054 0 1.922-0.868 1.922-1.922s-0.868-1.922-1.922-1.922zM9.313 16c0 4.278 3.472 7.749 7.749 7.749s7.749-3.472 7.749-7.749h-15.499z"></path></symbol><symbol id="icon-spade" viewBox="0 0 29 32"><path d="M27.739 12.915c-2.599-5.087-7.529-9.567-11.434-12.074-0.754-0.487-1.299-0.71-1.744-0.752l-0.039 0.004c-0.438 0.052-0.972 0.275-1.707 0.747-3.908 2.508-8.842 6.98-11.445 12.060-3.202 6.255-0.431 14.191 7.088 14.44 1.427 0.046 2.778-0.323 3.856-0.848l-1.393 4.723c-0.015 0.049-0.023 0.104-0.023 0.162 0 0.317 0.257 0.574 0.574 0.574h6.111c0 0 0 0 0 0 0.317 0 0.573-0.257 0.573-0.573 0-0.058-0.009-0.114-0.025-0.167l0.001 0.004-1.399-4.742c1.085 0.54 2.455 0.922 3.905 0.875 7.518-0.241 10.297-8.177 7.102-14.431z"></path></symbol><symbol id="icon-success1" viewBox="0 0 32 32"><path d="M0.648 16c0-8.479 6.874-15.352 15.352-15.352 8.479 0 15.353 6.873 15.353 15.352s-6.874 15.352-15.353 15.352c-8.477 0-15.352-6.873-15.352-15.352zM8.199 16.677l6.102 6.107 9.503-9.494-2.715-2.716-6.783 6.779-3.392-3.392-2.716 2.716z"></path></symbol><symbol id="icon-support1" viewBox="0 0 30 32"><path d="M29.375 12.25h-3.125v-2.394c0-4.096-4.916-8.856-11.25-8.856s-11.25 4.76-11.25 8.856v2.394h-3.125c-0.345 0-0.625 0.28-0.625 0.625v0 10c0 0.344 0.28 0.625 0.625 0.625h3.75c0.344 0 0.625-0.281 0.625-0.625v-13.019c0-3.445 4.459-7.606 10-7.606s10 4.161 10 7.607v16.221c0 1.334-1.087 2.421-2.422 2.421h-1.328v-0.625c0-0.344-0.281-0.625-0.625-0.625h-5.058c-1.002 0-1.817 0.815-1.817 1.934 0.001 1.003 0.814 1.816 1.816 1.816h5.059c0.344 0 0.625-0.279 0.625-0.625v-0.625h1.329c2.025 0 3.671-1.645 3.671-3.671v-2.579h3.125c0.345 0 0.625-0.281 0.625-0.625v-10c0-0.345-0.281-0.625-0.625-0.625z"></path><path d="M23.75 14.854v-2.526c0-4.817-3.926-8.735-8.75-8.735s-8.75 3.931-8.75 8.762v2.214c0 4.587 3.674 11.392 8.75 11.392 4.712 0.003 8.75-6.106 8.75-11.107z"></path></symbol><symbol id="icon-switch" viewBox="0 0 32 32"><path d="M30.546 7.273h-25.579l4.789-4.79c0.263-0.263 0.426-0.627 0.426-1.029 0-0.803-0.651-1.455-1.455-1.455-0.402 0-0.765 0.163-1.028 0.426l-7.273 7.273c-0.263 0.263-0.426 0.627-0.426 1.028s0.163 0.765 0.426 1.028l7.273 7.273c0.284 0.284 0.656 0.426 1.028 0.426s0.745-0.142 1.028-0.426c0.263-0.263 0.426-0.627 0.426-1.029s-0.163-0.765-0.426-1.029l-4.789-4.789h25.579c0.803 0 1.455-0.651 1.455-1.455s-0.651-1.455-1.455-1.455v0zM24.301 14.972c-0.262-0.255-0.619-0.412-1.014-0.412-0.803 0-1.455 0.651-1.455 1.455 0 0.394 0.157 0.752 0.412 1.014l-0-0 4.79 4.79h-25.579c-0.803 0-1.455 0.651-1.455 1.455s0.651 1.455 1.455 1.455h25.579l-4.789 4.789c-0.263 0.263-0.426 0.627-0.426 1.028 0 0.803 0.651 1.454 1.454 1.454 0.402 0 0.765-0.163 1.028-0.426l7.273-7.273c0.263-0.263 0.426-0.627 0.426-1.029s-0.163-0.765-0.426-1.029l-7.273-7.272z"></path></symbol><symbol id="icon-tasks" viewBox="0 0 32 32"><path d="M26.072 2.274h-1.271v-1.547c0-0.401-0.325-0.727-0.727-0.727s-0.727 0.325-0.727 0.727v0 1.554h-14.667v-1.554c0-0.401-0.325-0.726-0.726-0.726s-0.726 0.325-0.726 0.726v0 1.554h-1.235c-2.006 0.001-3.631 1.627-3.632 3.632v22.455c0.001 2.006 1.627 3.631 3.632 3.632h20.072c2.006-0.001 3.631-1.627 3.632-3.632v-22.462c0-2.003-1.622-3.628-3.625-3.632zM12.604 23.711l-3.189 3.051c-0.127 0.126-0.302 0.203-0.495 0.203-0.002 0-0.004 0-0.007-0h0c-0.201-0.001-0.382-0.081-0.516-0.211l-1.736-1.736c-0.131-0.131-0.212-0.312-0.212-0.512 0-0.4 0.324-0.724 0.724-0.724 0.2 0 0.381 0.081 0.512 0.212l1.235 1.235 2.68-2.557c0.13-0.125 0.307-0.202 0.501-0.202 0.206 0 0.391 0.086 0.523 0.223l0 0c0.125 0.128 0.202 0.304 0.202 0.498 0 0.204-0.086 0.389-0.223 0.519l-0 0zM12.604 16.447l-3.189 3.051c-0.127 0.126-0.302 0.203-0.495 0.203-0.002 0-0.005 0-0.007-0h0c-0.201-0.001-0.382-0.081-0.516-0.21l0 0-1.736-1.736c-0.131-0.131-0.212-0.312-0.212-0.512 0-0.4 0.324-0.724 0.724-0.724 0.2 0 0.381 0.081 0.512 0.212v0l1.235 1.235 2.68-2.557c0.13-0.125 0.307-0.202 0.501-0.202 0.205 0 0.391 0.086 0.523 0.223l0 0c0.125 0.129 0.202 0.304 0.202 0.498 0 0.204-0.086 0.389-0.223 0.519l-0 0zM12.604 9.182l-3.189 3.051c-0.127 0.126-0.302 0.203-0.495 0.203-0.002 0-0.005 0-0.007-0h0c-0.201-0.001-0.382-0.081-0.516-0.21l0 0-1.736-1.737c-0.131-0.131-0.212-0.312-0.212-0.512 0-0.4 0.324-0.724 0.724-0.724 0.2 0 0.381 0.081 0.512 0.212l1.235 1.235 2.68-2.557c0.13-0.125 0.307-0.202 0.501-0.202 0.205 0 0.391 0.086 0.523 0.223l0 0c0.125 0.129 0.202 0.304 0.202 0.498 0 0.204-0.086 0.389-0.223 0.519l-0 0zM24.895 25.44h-8.354c-0.401 0-0.726-0.325-0.726-0.726s0.325-0.726 0.726-0.726v0h8.354c0.401 0 0.727 0.325 0.727 0.727s-0.325 0.727-0.727 0.727v0zM24.895 18.176h-8.354c-0.401 0-0.727-0.325-0.727-0.727s0.325-0.727 0.727-0.727v0h8.354c0.401 0 0.727 0.325 0.727 0.727s-0.325 0.727-0.727 0.727v0zM24.895 10.911h-8.354c-0.401 0-0.727-0.325-0.727-0.727s0.325-0.727 0.727-0.727v0h8.354c0.401 0 0.727 0.325 0.727 0.727s-0.325 0.727-0.727 0.727v0z"></path></symbol><symbol id="icon-thumb-down" viewBox="0 0 33 32"><path d="M32.5 2.909h-5.818v17.454h5.818v-17.455zM0.5 18.909c0 1.6 1.309 2.909 2.909 2.909h9.163l-1.455 6.691v0.437c0 0.582 0.291 1.163 0.582 1.6l1.6 1.454 9.6-9.6c0.582-0.436 0.873-1.164 0.873-2.036v-14.546c0-1.6-1.309-2.909-2.909-2.909h-13.091c-1.164 0-2.182 0.727-2.618 1.746l-4.363 10.327c-0.146 0.291-0.146 0.727-0.146 1.018v2.909h-0.145c0-0.146 0 0 0 0z"></path></symbol><symbol id="icon-thumb-up" viewBox="0 0 32 32"><path d="M0 30.546h5.818v-17.455h-5.818v17.455zM32 14.546c0-1.6-1.309-2.909-2.909-2.909h-9.163l1.455-6.691v-0.437c0-0.582-0.291-1.163-0.582-1.6l-1.6-1.454-9.6 9.6c-0.582 0.436-0.873 1.163-0.873 2.036v14.545c0 1.6 1.309 2.909 2.909 2.909h13.091c1.164 0 2.182-0.727 2.618-1.746l4.364-10.327c0.146-0.291 0.146-0.727 0.146-1.018v-2.909h0.145c0 0.146 0 0 0 0z"></path></symbol><symbol id="icon-top" viewBox="0 0 32 32"><path d="M31.461 6.692c-0.359-0.359-0.794-0.538-1.308-0.538h-5.538v-1.846c0-0.846-0.301-1.57-0.904-2.173s-1.328-0.903-2.173-0.903h-11.077c-0.846 0-1.571 0.301-2.173 0.904s-0.904 1.327-0.904 2.173v1.846h-5.539c-0.512 0-0.948 0.179-1.308 0.538s-0.538 0.795-0.538 1.308v2.462c0 0.91 0.266 1.827 0.798 2.75s1.25 1.757 2.154 2.5c0.904 0.744 2.013 1.369 3.327 1.875s2.696 0.792 4.144 0.856c0.537 0.689 1.138 1.29 1.804 1.81l0.023 0.017c0.488 0.436 0.824 0.9 1.009 1.394s0.279 1.067 0.279 1.721c0 0.692-0.195 1.276-0.587 1.75s-1.016 0.712-1.875 0.712c-0.962 0-1.817 0.292-2.567 0.875s-1.125 1.317-1.125 2.202v1.23c0 0.18 0.058 0.328 0.173 0.442s0.263 0.173 0.442 0.173h16c0.18 0 0.327-0.058 0.442-0.173s0.172-0.262 0.172-0.442v-1.23c0-0.885-0.375-1.619-1.125-2.202s-1.606-0.875-2.567-0.875c-0.859 0-1.484-0.237-1.875-0.712s-0.586-1.057-0.586-1.75c0-0.654 0.093-1.227 0.278-1.721s0.523-0.958 1.010-1.394c0.689-0.537 1.29-1.138 1.809-1.804l0.017-0.023c1.449-0.064 2.83-0.349 4.145-0.856 1.313-0.506 2.423-1.131 3.327-1.875s1.622-1.577 2.154-2.5 0.798-1.84 0.798-2.75v-2.462c-0-0.513-0.18-0.948-0.539-1.308zM4.279 13.577c-1.212-1.077-1.817-2.115-1.817-3.115v-1.846h4.923c0 2.68 0.474 5.058 1.423 7.134-1.807-0.372-3.317-1.096-4.529-2.173zM29.538 10.462c0 1-0.605 2.039-1.817 3.116s-2.722 1.801-4.529 2.173c0.949-2.077 1.423-4.455 1.423-7.134h4.923v1.846z"></path></symbol><symbol id="icon-tower" viewBox="0 0 32 32"><path d="M28.388 0h-2.779c-0.521 0-0.943 0.423-0.944 0.944v1.119c-0 0.521-0.423 0.943-0.944 0.944h-0.781c-0.521-0-0.943-0.423-0.944-0.944v-1.119c0-0.001 0-0.002 0-0.003 0-0.519-0.421-0.94-0.94-0.94-0.001 0-0.003 0-0.004 0h-2.778c-0.521 0-0.943 0.423-0.944 0.944v1.119c-0 0.521-0.423 0.943-0.944 0.944h-0.781c-0.518-0.001-0.937-0.421-0.937-0.939 0-0.002 0-0.004 0-0.005v0-1.119c-0-0.521-0.423-0.943-0.944-0.944h-2.778c-0.521 0-0.943 0.423-0.944 0.944v1.119c-0 0.521-0.423 0.943-0.944 0.944h-0.781c-0.521-0-0.943-0.423-0.944-0.944v-1.119c-0-0.521-0.422-0.943-0.943-0.944h-2.779c-0.521 0-0.943 0.423-0.944 0.944v5.356c0 1.265 1.026 2.291 2.291 2.291 0 0 0 0 0 0h0.039v23.409h8.545v-3.697c0-1.357 1.1-2.457 2.457-2.457s2.457 1.1 2.457 2.457v0 3.697h8.545v-23.409h0.039c1.265 0 2.291-1.026 2.291-2.291v-5.356c-0-0.521-0.422-0.943-0.943-0.944h-0zM12.951 22.674h-3.488v-2.232c0-0.963 0.781-1.744 1.744-1.744s1.744 0.781 1.744 1.744v0 2.232zM12.951 14.142h-3.488v-2.232c0-0.963 0.781-1.744 1.744-1.744s1.744 0.781 1.744 1.744v0 2.232zM22.55 22.674h-3.488v-2.232c0-0.963 0.781-1.744 1.744-1.744s1.744 0.781 1.744 1.744v0 2.232zM22.55 14.142h-3.488v-2.232c0-0.963 0.781-1.744 1.744-1.744s1.744 0.781 1.744 1.744v0 2.232z"></path></symbol><symbol id="icon-triple" viewBox="0 0 32 32"><path d="M8.732 20.677h-4.534l2.018 11.136h0.817l1.886-10.438zM8.221 31.812h0.049c0.304 0.027 0.595-0.131 0.739-0.401l1.436-4.349-0.815-3.036-1.409 7.787zM0.076 18.82l4.161 12.591c0.131 0.242 0.383 0.404 0.673 0.404 0.023 0 0.046-0.001 0.069-0.003l-0.003 0h0.049l-2.053-11.351-2.895-1.641zM3.72 19.504h4.697l-1.763-6.575-1.824 5.017c-0.084 0.227-0.299 0.386-0.551 0.386-0.324 0-0.586-0.262-0.586-0.586 0-0.072 0.013-0.141 0.037-0.205l-0.001 0.004 1.622-4.457-5.349 4.342 3.569 2.026c0.053 0.009 0.103 0.025 0.151 0.048zM27.922 18.297c-0.060 0.022-0.129 0.035-0.201 0.035-0.252 0-0.466-0.159-0.549-0.381l-0.001-0.004-1.824-5.017-1.763 6.574h4.697c0.044-0.021 0.094-0.038 0.147-0.047l0.003-0.001 3.57-2.027-5.349-4.338 1.621 4.454c0.022 0.060 0.035 0.129 0.035 0.201 0 0.252-0.159 0.467-0.382 0.55l-0.004 0.001zM26.976 31.812h0.048c0.020 0.002 0.044 0.003 0.067 0.003 0.29 0 0.542-0.162 0.671-0.4l0.002-0.004 4.163-12.589-2.895 1.641-2.057 11.349zM23.267 20.677l-0.187 0.698 1.889 10.438h0.814l2.017-11.136zM21.555 27.065l1.438 4.346h-0.001c0.131 0.242 0.383 0.404 0.672 0.404 0.023 0 0.046-0.001 0.069-0.003l-0.003 0h0.049l-1.409-7.784-0.815 3.037zM7.020 9.776l5.68 21.168c0.138 0.504 0.592 0.868 1.131 0.869h0.318l-2.792-19.003-4.337-3.034z"></path><path d="M19.526 12.381c0.010-0.049 0.027-0.096 0.050-0.141 0.008-0.025 0.017-0.050 0.028-0.074 0.015-0.019 0.031-0.036 0.048-0.053 0.032-0.044 0.068-0.083 0.108-0.116l0.001-0.001 0.005-0.005 5.296-3.707-7.886-8.099 2.898 9.18c0.017 0.053 0.027 0.113 0.027 0.176 0 0.324-0.262 0.586-0.586 0.586-0.261 0-0.482-0.17-0.558-0.406l-0.001-0.004-2.957-9.365-2.957 9.365c-0.077 0.24-0.298 0.41-0.559 0.41v0c-0.060 0-0.119-0.009-0.176-0.026-0.24-0.077-0.41-0.298-0.41-0.559 0-0.063 0.010-0.124 0.028-0.181l-0.001 0.004 2.885-9.135-7.87 8.055 5.143 3.601h5.676c0.315 0.011 0.567 0.269 0.567 0.586s-0.252 0.575-0.566 0.586l-0.001 0h-5.182l2.758 18.755h1.331l2.86-19.423v-0.008z"></path><path d="M20.647 12.807l-2.795 19.006h0.317c0.54-0 0.994-0.365 1.13-0.861l0.002-0.008 5.683-21.17-4.337 3.034z"></path></symbol><symbol id="icon-twitter" viewBox="0 0 38 32"><path d="M35.488 5.774c-1.244 0.553-2.487 0.968-3.869 1.106 1.382-0.829 2.487-2.211 3.040-3.731-1.382 0.829-2.764 1.382-4.284 1.658-1.229-1.36-3-2.211-4.969-2.211-0.002 0-0.004 0-0.006 0h0c-4.422 0-7.6 4.146-6.633 8.291-5.804-0.276-10.778-3.040-14.095-7.185-1.796 3.178-0.967 7.185 2.073 9.12-1.106 0-2.211-0.277-3.040-0.829-0.138 3.178 2.211 6.080 5.389 6.771-0.967 0.276-2.073 0.276-3.040 0.138 0.829 2.763 3.316 4.698 6.356 4.698-2.902 2.211-6.494 3.178-10.087 2.764 3.040 1.934 6.633 3.040 10.364 3.040 12.574 0 19.76-10.64 19.345-20.175 1.382-0.967 2.487-2.211 3.455-3.454z"></path></symbol><symbol id="icon-vk" viewBox="0 0 46 32"><path d="M25.154 28.437c1.067 0 1.6-0.711 1.6-1.6 0-3.378 1.244-5.155 3.733-2.844 2.667 2.667 3.2 4.444 6.4 4.444h5.689c1.422 0 1.956-0.533 1.956-1.244 0-1.6-2.489-4.267-4.622-6.222-3.022-2.845-3.2-2.845-0.533-6.223 3.022-4.089 7.111-9.422 3.378-9.422h-7.111c-1.422 0-1.422 0.711-1.956 1.956-1.778 4.089-5.156 9.6-6.4 8.711-1.422-0.889-0.711-4.267-0.711-9.422 0-1.423 0-2.311-1.956-2.667-1.067-0.178-2.133-0.356-3.2-0.356-3.911 0-6.755 1.778-5.155 1.956 2.844 0.533 2.489 6.578 1.955 9.244-1.067 4.622-5.333-3.556-7.111-7.644-0.533-1.067-0.711-1.778-2.311-1.778h-5.689c-0.889 0-1.422 0.356-1.422 0.889 0 1.067 5.333 11.911 10.311 17.422 4.8 5.333 9.778 4.8 13.156 4.8z"></path></symbol><symbol id="icon-wand" viewBox="0 0 34 32"><path d="M19.977 14.002l-2.119-1.589c-0.11-0.083-0.249-0.133-0.399-0.133-0.217 0-0.409 0.104-0.53 0.264l-0.001 0.002-2.584 3.446 3.182 2.387 2.584-3.446c0.083-0.11 0.133-0.248 0.133-0.399 0-0.217-0.104-0.409-0.264-0.53l-0.002-0.001zM5.792 27.392c-0.083 0.11-0.133 0.248-0.133 0.399 0 0.217 0.103 0.409 0.264 0.53l0.002 0.001 2.119 1.589c0.11 0.083 0.249 0.133 0.399 0.133 0.217 0 0.409-0.104 0.53-0.264l0.001-0.002 7.834-10.447-3.182-2.387-7.835 10.447zM7.065 15.431l1.673-1.631-2.312-0.335-1.033-2.095-1.034 2.095-2.312 0.336 1.673 1.631-0.394 2.303 2.067-1.088 2.068 1.088-0.396-2.303zM10.018 8.32l2.068-1.088 2.068 1.088-0.395-2.303 1.672-1.632-2.312-0.336-1.033-2.095-1.034 2.095-2.313 0.336 1.674 1.631-0.395 2.303zM21.939 24.783l-1.033-2.097-1.035 2.097-2.312 0.335 1.673 1.63-0.395 2.302 2.068-1.086 2.068 1.086-0.395-2.302 1.672-1.63-2.313-0.335zM31.953 16.195l-2.312-0.336-1.034-2.096-1.034 2.096-2.312 0.336 1.672 1.63-0.395 2.303 2.069-1.087 2.067 1.087-0.394-2.303 1.673-1.63zM21.785 9.613l2.069-1.087 2.069 1.087-0.396-2.303 1.673-1.631-2.312-0.335-1.034-2.095-1.033 2.095-2.312 0.335 1.673 1.631-0.397 2.302z"></path></symbol><symbol id="icon-arrow-down" viewBox="0 0 20 20"><path d="M9 16.172l-6.071-6.071-1.414 1.414 8.485 8.485 8.485-8.485-1.414-1.414-6.071 6.071v-16.172h-2z"></path></symbol><symbol id="icon-rain" viewBox="0 0 32 32"><path d="M25 4c-0.332 0-0.66 0.023-0.987 0.070-1.867-2.544-4.814-4.070-8.013-4.070s-6.145 1.526-8.013 4.070c-0.327-0.047-0.655-0.070-0.987-0.070-3.859 0-7 3.141-7 7s3.141 7 7 7c0.856 0 1.693-0.156 2.482-0.458 1.81 1.578 4.112 2.458 6.518 2.458 2.409 0 4.708-0.88 6.518-2.458 0.789 0.302 1.626 0.458 2.482 0.458 3.859 0 7-3.141 7-7s-3.141-7-7-7zM25 16c-1.070 0-2.057-0.344-2.871-0.917-1.467 1.768-3.652 2.917-6.129 2.917s-4.662-1.148-6.129-2.917c-0.813 0.573-1.801 0.917-2.871 0.917-2.762 0-5-2.238-5-5s2.238-5 5-5c0.676 0 1.316 0.138 1.902 0.38 1.327-2.588 3.991-4.38 7.098-4.38s5.771 1.792 7.096 4.38c0.587-0.242 1.229-0.38 1.904-0.38 2.762 0 5 2.238 5 5s-2.238 5-5 5zM14.063 30c0 1.105 0.895 2 2 2s2-0.895 2-2-2-4-2-4-2 2.895-2 4zM22 28c0 1.105 0.895 2 2 2s2-0.895 2-2-2-4-2-4-2 2.895-2 4zM6 24c0 1.105 0.894 2 2 2s2-0.895 2-2-2-4-2-4-2 2.895-2 4z"></path></symbol><symbol id="icon-sound-mute" viewBox="0 0 32 32"><path d="M30 19.348v2.652h-2.652l-3.348-3.348-3.348 3.348h-2.652v-2.652l3.348-3.348-3.348-3.348v-2.652h2.652l3.348 3.348 3.348-3.348h2.652v2.652l-3.348 3.348 3.348 3.348z"></path><path d="M13 30c-0.26 0-0.516-0.102-0.707-0.293l-7.707-7.707h-3.586c-0.552 0-1-0.448-1-1v-10c0-0.552 0.448-1 1-1h3.586l7.707-7.707c0.286-0.286 0.716-0.372 1.090-0.217s0.617 0.519 0.617 0.924v26c0 0.404-0.244 0.769-0.617 0.924-0.124 0.051-0.254 0.076-0.383 0.076z"></path></symbol><symbol id="icon-sound-up" viewBox="0 0 32 32"><path d="M22.485 25.985c-0.384 0-0.768-0.146-1.061-0.439-0.586-0.586-0.586-1.535 0-2.121 4.094-4.094 4.094-10.755 0-14.849-0.586-0.586-0.586-1.536 0-2.121s1.536-0.586 2.121 0c2.55 2.55 3.954 5.94 3.954 9.546s-1.404 6.996-3.954 9.546c-0.293 0.293-0.677 0.439-1.061 0.439v0zM17.157 23.157c-0.384 0-0.768-0.146-1.061-0.439-0.586-0.586-0.586-1.535 0-2.121 2.534-2.534 2.534-6.658 0-9.192-0.586-0.586-0.586-1.536 0-2.121s1.535-0.586 2.121 0c3.704 3.704 3.704 9.731 0 13.435-0.293 0.293-0.677 0.439-1.061 0.439z"></path><path d="M13 30c-0.26 0-0.516-0.102-0.707-0.293l-7.707-7.707h-3.586c-0.552 0-1-0.448-1-1v-10c0-0.552 0.448-1 1-1h3.586l7.707-7.707c0.286-0.286 0.716-0.372 1.090-0.217s0.617 0.519 0.617 0.924v26c0 0.404-0.244 0.769-0.617 0.924-0.124 0.051-0.254 0.076-0.383 0.076z"></path></symbol><symbol id="icon-info" viewBox="0 0 32 32"><path d="M14 9.5c0-0.825 0.675-1.5 1.5-1.5h1c0.825 0 1.5 0.675 1.5 1.5v1c0 0.825-0.675 1.5-1.5 1.5h-1c-0.825 0-1.5-0.675-1.5-1.5v-1z"></path><path d="M20 24h-8v-2h2v-6h-2v-2h6v8h2z"></path><path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13z"></path></symbol><symbol id="icon-timer" viewBox="0 0 32 32"><path d="M28.054 18.571c0 6.933-5.62 12.554-12.554 12.554s-12.554-5.621-12.554-12.554c0-6.722 5.286-12.192 11.927-12.521v-2.166h-0.941c-0.555 0-1.005-0.45-1.005-1.005s0.45-1.004 1.005-1.004h3.012c0.555 0 1.005 0.449 1.005 1.004s-0.45 1.005-1.005 1.005h-1.066v2.153c6.757 0.2 12.176 5.729 12.176 12.534zM14.873 9.909v-2.291c-3.109 0.176-5.866 1.64-7.766 3.858l1.653 1.653-0.71 0.711-1.565-1.566c-1.274 1.798-2.032 3.987-2.032 6.359 0 0.106 0.015 0.251 0.015 0.251h2.432v1.005h-2.36c0.244 2.052 1.057 3.987 2.268 5.534l1.243-1.243 0.71 0.71-1.296 1.297c1.879 1.996 4.488 3.297 7.408 3.462v-2.729h1.004v2.742c2.989-0.102 5.67-1.393 7.599-3.41l-1.424-1.424 0.71-0.71 1.377 1.376c1.24-1.56 2.074-3.521 2.322-5.604h-2.55v-1.005h2.621c0.003-0.104 0.016-0.145 0.016-0.251 0-2.438-0.8-4.681-2.138-6.505l-1.648 1.648-0.71-0.71 1.726-1.725c-1.947-2.203-4.753-3.631-7.9-3.737v2.304h-1.005zM15.939 18.885h3.516c0.277 0 0.502 0.226 0.502 0.502 0 0.277-0.225 0.503-0.502 0.503h-4.018c-0.277 0-0.502-0.226-0.502-0.503v-6.967c0-0.277 0.225-0.502 0.502-0.502s0.502 0.225 0.502 0.502v6.465z"></path></symbol><symbol id="icon-link" viewBox="0 0 32 32"><path d="M25.33 9.84l-3.5 6.062c-0.553 0.956-1.775 1.284-2.732 0.731l-0.865-0.5 1-1.731c0.478 0.275 1.090 0.112 1.365-0.366l2.5-4.33c0.276-0.479 0.112-1.090-0.365-1.366l-3.465-2c-0.479-0.276-1.090-0.112-1.365 0.366l-2.5 4.33c-0.277 0.479-0.113 1.090 0.365 1.366l-1 1.731-0.865-0.5c-0.957-0.552-1.285-1.775-0.732-2.731l3.5-6.062c0.553-0.957 1.775-1.284 2.732-0.732l5.195 3c0.957 0.552 1.285 1.775 0.732 2.732zM13.5 20.33c-0.479-0.276-0.643-0.888-0.366-1.366l4-6.928c0.276-0.479 0.888-0.643 1.366-0.366s0.643 0.888 0.365 1.366l-4 6.928c-0.275 0.478-0.886 0.641-1.365 0.366zM12.768 17.599v0c-0.479-0.276-1.090-0.112-1.366 0.365l-2.5 4.33c-0.276 0.479-0.112 1.090 0.366 1.366l3.465 2c0.478 0.276 1.090 0.112 1.365-0.366l2.5-4.33c0.276-0.478 0.112-1.090-0.365-1.366v0l1-1.731 0.865 0.5c0.957 0.552 1.285 1.774 0.732 2.731l-3.5 6.062c-0.553 0.957-1.775 1.284-2.732 0.732l-5.196-3c-0.957-0.553-1.285-1.775-0.732-2.732l3.5-6.062c0.553-0.957 1.776-1.285 2.733-0.732l0.865 0.5-1 1.733z"></path></symbol><symbol id="icon-check-square-o" viewBox="0 0 26 28"><path d="M22 14.531v4.969c0 2.484-2.016 4.5-4.5 4.5h-13c-2.484 0-4.5-2.016-4.5-4.5v-13c0-2.484 2.016-4.5 4.5-4.5h13c0.625 0 1.25 0.125 1.828 0.391 0.141 0.063 0.25 0.203 0.281 0.359 0.031 0.172-0.016 0.328-0.141 0.453l-0.766 0.766c-0.094 0.094-0.234 0.156-0.359 0.156-0.047 0-0.094-0.016-0.141-0.031-0.234-0.063-0.469-0.094-0.703-0.094h-13c-1.375 0-2.5 1.125-2.5 2.5v13c0 1.375 1.125 2.5 2.5 2.5h13c1.375 0 2.5-1.125 2.5-2.5v-3.969c0-0.125 0.047-0.25 0.141-0.344l1-1c0.109-0.109 0.234-0.156 0.359-0.156 0.063 0 0.125 0.016 0.187 0.047 0.187 0.078 0.313 0.25 0.313 0.453zM25.609 6.891l-12.719 12.719c-0.5 0.5-1.281 0.5-1.781 0l-6.719-6.719c-0.5-0.5-0.5-1.281 0-1.781l1.719-1.719c0.5-0.5 1.281-0.5 1.781 0l4.109 4.109 10.109-10.109c0.5-0.5 1.281-0.5 1.781 0l1.719 1.719c0.5 0.5 0.5 1.281 0 1.781z"></path></symbol><symbol id="icon-eye" viewBox="0 0 28 28"><path d="M26 15c-1.484-2.297-3.516-4.266-5.953-5.516 0.625 1.062 0.953 2.281 0.953 3.516 0 3.859-3.141 7-7 7s-7-3.141-7-7c0-1.234 0.328-2.453 0.953-3.516-2.438 1.25-4.469 3.219-5.953 5.516 2.672 4.125 6.984 7 12 7s9.328-2.875 12-7zM14.75 9c0-0.406-0.344-0.75-0.75-0.75-2.609 0-4.75 2.141-4.75 4.75 0 0.406 0.344 0.75 0.75 0.75s0.75-0.344 0.75-0.75c0-1.781 1.469-3.25 3.25-3.25 0.406 0 0.75-0.344 0.75-0.75zM28 15c0 0.391-0.125 0.75-0.313 1.078-2.875 4.734-8.141 7.922-13.687 7.922s-10.813-3.203-13.687-7.922c-0.187-0.328-0.313-0.688-0.313-1.078s0.125-0.75 0.313-1.078c2.875-4.719 8.141-7.922 13.687-7.922s10.813 3.203 13.687 7.922c0.187 0.328 0.313 0.688 0.313 1.078z"></path></symbol><symbol id="icon-square-o" viewBox="0 0 22 28"><path d="M17.5 4h-13c-1.375 0-2.5 1.125-2.5 2.5v13c0 1.375 1.125 2.5 2.5 2.5h13c1.375 0 2.5-1.125 2.5-2.5v-13c0-1.375-1.125-2.5-2.5-2.5zM22 6.5v13c0 2.484-2.016 4.5-4.5 4.5h-13c-2.484 0-4.5-2.016-4.5-4.5v-13c0-2.484 2.016-4.5 4.5-4.5h13c2.484 0 4.5 2.016 4.5 4.5z"></path></symbol><symbol id="icon-briefcase" viewBox="0 0 28 28"><path d="M10 4h8v-2h-8v2zM28 14v7.5c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-7.5h10.5v2.5c0 0.547 0.453 1 1 1h5c0.547 0 1-0.453 1-1v-2.5h10.5zM16 14v2h-4v-2h4zM28 6.5v6h-28v-6c0-1.375 1.125-2.5 2.5-2.5h5.5v-2.5c0-0.828 0.672-1.5 1.5-1.5h9c0.828 0 1.5 0.672 1.5 1.5v2.5h5.5c1.375 0 2.5 1.125 2.5 2.5z"></path></symbol><symbol id="icon-envelope" viewBox="0 0 28 28"><path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path></symbol><symbol id="icon-eur" viewBox="0 0 16 28"><path d="M15.25 20.422l0.547 2.484c0.063 0.25-0.078 0.5-0.313 0.578-0.063 0.016-1.516 0.516-3.391 0.516-4.875 0-8.797-2.938-10.109-7.531h-1.484c-0.281 0-0.5-0.234-0.5-0.5v-1.766c0-0.266 0.219-0.5 0.5-0.5h1.031c-0.016-0.5-0.016-1.094 0.016-1.641h-1.047c-0.281 0-0.5-0.219-0.5-0.5v-1.781c0-0.281 0.219-0.5 0.5-0.5h1.531c1.391-4.375 5.391-7.281 10.063-7.281 1.625 0 2.969 0.344 3.031 0.359 0.125 0.031 0.234 0.125 0.313 0.234 0.063 0.109 0.078 0.25 0.047 0.375l-0.672 2.484c-0.063 0.266-0.328 0.422-0.594 0.344-0.016 0-1.078-0.266-2.188-0.266-2.625 0-4.828 1.422-5.875 3.75h7.313c0.156 0 0.297 0.063 0.391 0.187 0.094 0.109 0.141 0.266 0.109 0.406l-0.375 1.781c-0.047 0.234-0.25 0.406-0.5 0.406h-7.625c-0.047 0.5-0.031 1.031 0 1.641h7.172c0.156 0 0.297 0.078 0.391 0.187 0.094 0.125 0.125 0.281 0.094 0.422l-0.375 1.75c-0.047 0.234-0.25 0.406-0.484 0.406h-6.047c1 2.438 3.25 3.969 5.906 3.969 1.359 0 2.469-0.375 2.484-0.375 0.125-0.047 0.281-0.031 0.406 0.031 0.125 0.078 0.203 0.203 0.234 0.328z"></path></symbol><symbol id="icon-usd" viewBox="0 0 16 28"><path d="M15.281 18.516c0 3.187-2.281 5.703-5.594 6.25v2.734c0 0.281-0.219 0.5-0.5 0.5h-2.109c-0.266 0-0.5-0.219-0.5-0.5v-2.734c-3.656-0.516-5.656-2.703-5.734-2.797-0.156-0.187-0.172-0.453-0.031-0.641l1.609-2.109c0.078-0.109 0.219-0.172 0.359-0.187s0.281 0.031 0.375 0.141c0.031 0.016 2.219 2.109 4.984 2.109 1.531 0 3.187-0.812 3.187-2.578 0-1.5-1.844-2.234-3.953-3.078-2.812-1.109-6.312-2.516-6.312-6.438 0-2.875 2.25-5.25 5.516-5.875v-2.812c0-0.281 0.234-0.5 0.5-0.5h2.109c0.281 0 0.5 0.219 0.5 0.5v2.75c3.172 0.359 4.859 2.078 4.922 2.141 0.156 0.172 0.187 0.406 0.078 0.594l-1.266 2.281c-0.078 0.141-0.203 0.234-0.359 0.25-0.156 0.031-0.297-0.016-0.422-0.109-0.016-0.016-1.906-1.687-4.25-1.687-1.984 0-3.359 0.984-3.359 2.406 0 1.656 1.906 2.391 4.125 3.25 2.875 1.109 6.125 2.375 6.125 6.141z"></path></symbol><symbol id="icon-google" viewBox="0 0 24 28"><path d="M12 12.281h11.328c0.109 0.609 0.187 1.203 0.187 2 0 6.844-4.594 11.719-11.516 11.719-6.641 0-12-5.359-12-12s5.359-12 12-12c3.234 0 5.953 1.188 8.047 3.141l-3.266 3.141c-0.891-0.859-2.453-1.859-4.781-1.859-4.094 0-7.438 3.391-7.438 7.578s3.344 7.578 7.438 7.578c4.75 0 6.531-3.406 6.813-5.172h-6.813v-4.125z"></path></symbol><symbol id="icon-odnoklassniki" viewBox="0 0 20 28"><path d="M10 14.172c-3.906 0-7.094-3.172-7.094-7.078 0-3.922 3.187-7.094 7.094-7.094s7.094 3.172 7.094 7.094c0 3.906-3.187 7.078-7.094 7.078zM10 3.594c-1.922 0-3.484 1.563-3.484 3.5 0 1.922 1.563 3.484 3.484 3.484s3.484-1.563 3.484-3.484c0-1.937-1.563-3.5-3.484-3.5zM18.172 15.031c0.688 1.406-0.094 2.078-1.875 3.234-1.5 0.953-3.563 1.328-4.922 1.469l1.141 1.125 4.172 4.172c0.625 0.641 0.625 1.672 0 2.297l-0.187 0.203c-0.641 0.625-1.672 0.625-2.312 0-1.047-1.062-2.578-2.594-4.172-4.188l-4.172 4.188c-0.641 0.625-1.672 0.625-2.297 0l-0.187-0.203c-0.641-0.625-0.641-1.656 0-2.297 1.062-1.062 2.578-2.594 4.172-4.172l1.125-1.125c-1.344-0.141-3.437-0.5-4.953-1.469-1.781-1.156-2.562-1.828-1.875-3.234 0.406-0.797 1.516-1.469 2.984-0.313 0 0 1.984 1.578 5.187 1.578s5.187-1.578 5.187-1.578c1.469-1.156 2.578-0.484 2.984 0.313z"></path></symbol><symbol id="icon-snow" viewBox="0 0 26 28"><path d="M24.469 17.453l-2.609 0.516 2.906 1.672c0.469 0.266 0.641 0.891 0.359 1.359s-0.891 0.641-1.359 0.359l-2.906-1.656 0.859 2.5c0.438 1.25-1.469 1.891-1.891 0.656l-1.594-4.688-4.234-2.438v4.891l3.25 3.719c0.875 0.984-0.641 2.312-1.5 1.313l-1.75-2v3.344c0 0.547-0.453 1-1 1s-1-0.453-1-1v-3.344l-1.75 2c-0.859 1-2.375-0.328-1.5-1.313l3.25-3.719v-4.891l-4.234 2.438-1.594 4.688c-0.422 1.234-2.328 0.594-1.891-0.656l0.859-2.5-2.906 1.656c-0.469 0.281-1.078 0.109-1.359-0.359s-0.109-1.094 0.359-1.359l2.906-1.672-2.609-0.516c-1.297-0.266-0.906-2.219 0.391-1.969l4.844 0.969 4.234-2.453-4.234-2.453-4.844 0.969c-0.063 0.016-0.141 0.016-0.203 0.016-1.188 0-1.359-1.75-0.187-1.984l2.609-0.516-2.906-1.672c-0.469-0.266-0.641-0.891-0.359-1.359 0.281-0.484 0.891-0.641 1.359-0.359l2.906 1.656-0.859-2.5c-0.438-1.25 1.469-1.891 1.891-0.656l1.594 4.688 4.234 2.438v-4.891l-3.25-3.719c-0.875-0.984 0.641-2.312 1.5-1.313l1.75 2v-3.344c0-0.547 0.453-1 1-1s1 0.453 1 1v3.344l1.75-2c0.859-1 2.375 0.328 1.5 1.313l-3.25 3.719v4.891l4.234-2.438 1.594-4.688c0.422-1.234 2.328-0.594 1.891 0.656l-0.859 2.5 2.906-1.656c0.469-0.281 1.078-0.109 1.359 0.359s0.109 1.094-0.359 1.359l-2.906 1.672 2.609 0.516c1.172 0.234 1 1.984-0.187 1.984-0.063 0-0.141 0-0.203-0.016l-4.844-0.969-4.234 2.453 4.234 2.453 4.844-0.969c1.297-0.25 1.687 1.703 0.391 1.969z"></path></symbol></defs></svg>
                        <div class="col-md">
                            <div class="card ecom-widget-sales" style="background:transparent">
                                <div class="">

                <div class="blackjack_blackjack__1ClL- card-body pb-5 pt-3" style="background:none">
    <div class="deck_container__2nZFt">
        <div class="deck_card__2Hdlm" style="width: 2.6em; height: 4em; transform: translateY(0%);"><img src="img/cardBack.svg" alt="" /></div>
        <div class="deck_card__2Hdlm" style="width: 2.6em; height: 4em; transform: translateY(-2%);"><img src="img/cardBack.svg" alt="" /></div>
        <div class="deck_card__2Hdlm" style="width: 2.6em; height: 4em; transform: translateY(-4%);"><img src="img/cardBack.svg" alt="" /></div>
        <div class="deck_card__2Hdlm" style="width: 2.6em; height: 4em; transform: translateY(-6%);"><img src="img/cardBack.svg" alt="" /></div>
    </div>
	<br>
	<br>
	<br>
    <div class="blackjack_header__1qRwc mb-5">
    <div class="stack_container__33UBQ stack_container_H_BH" style="width: 3.9em; transition: all 0.5s ease 0s;">
        <!--<div class="card_container__21YlE" style="transform: translate(calc(0px - 0%), 0px); top: 0%; transition: transform 0.5s ease 0s; opacity: 1;">-->
        <!--    <div class="card_card__cY3Uo card_inPlay__2zghE">-->
        <!--        <div class="card_face__3lBVA">-->
        <!--            <div class="card_faceInner__2nkbn">-->
        <!--                <span>K</span><svg class="icon icon-heart"><use xlink:href="#icon-heart"></use></svg>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card_back__2Hbhq"><img src="img/cardBack.svg" alt="" /></div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="card_container__21YlE" style="transform: translate(calc(0px - 50%), 0px); top: 7%; transition: transform 0.5s ease 0s; opacity: 1;">-->
        <!--    <div class="card_card__cY3Uo card_inPlay__2zghE">-->
        <!--        <div class="card_face__3lBVA card_hidden__vbF5g">-->
        <!--            <div class="card_faceInner__2nkbn"><span></span></div>-->
        <!--        </div>-->
        <!--        <div class="card_back__2Hbhq card_hidden__vbF5g"><img src="img/cardBack.svg" alt="" /></div>-->
        <!--    </div>-->
        <!--</div>-->
         <div class="card_container__21YlE" style="transform: translate(calc(-10%), -241.922px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;">
    <div class="card_card__cY3Uo card_inPlay__2zghE">
        <div class="card_face__3lBVA card_hidden__vbF5g">
            <div class="card_faceInner__2nkbn"><span></span></div>
        </div>
        <div class="card_back__2Hbhq card_hidden__vbF5g"><img src="/static/media/cardBack.0fcb6bf4.svg" alt=""></div>
    </div>
</div>

       </div>
</div>
		<br>
		<br>
		<br>
		<br>
    <div class="blackjack_footer__BHkz7">
    <div class="stack_container__33UBQ stack_container_F_BH" style="width: 3.9em; transition: all 0.5s ease 0s;">
        <!--<div class="card_container__21YlE" style="transform: translate(calc(0px - 0%), 0px); top: 0%; transition: transform 0.5s ease 0s; opacity: 1;">-->
        <!--    <div class="card_card__cY3Uo card_inPlay__2zghE">-->
        <!--        <div class="card_face__3lBVA">-->
        <!--            <div class="card_faceInner__2nkbn card_dark__1KpX3">-->
        <!--                <span>3</span><svg class="icon icon-spade"><use xlink:href="#icon-spade"></use></svg>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card_back__2Hbhq"><img src="img/cardBack.svg" alt="" /></div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="card_container__21YlE" style="transform: translate(calc(0px - 50%), 0px); top: 7%; transition: transform 0.5s ease 0s; opacity: 1;">-->
        <!--    <div class="card_card__cY3Uo card_inPlay__2zghE">-->
        <!--        <div class="card_face__3lBVA">-->
        <!--            <div class="card_faceInner__2nkbn">-->
        <!--                <span>2</span><svg class="icon icon-diamond"><use xlink:href="#icon-diamond"></use></svg>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="card_back__2Hbhq"><img src="img/cardBack.svg" alt="" /></div>-->
        <!--    </div>-->
        <!--</div>-->



    </div>

</div>

</div>









  <!--   <p>Диллер: <span id="diller"></span></p>-->
		<!--<p>Игрок: <span id="player"></span></p>-->


                                    <!-- end btn-tool-bar -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end ecom-widget-sales -->
                        </div>
                  <h5 class="text-xs-center">Сумма ставки:</h5>
                  <i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
                  <center>
                     <input id="inputBetAmount" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
                     <div style="margin-top:5px">
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#inputBetAmount').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#inputBetAmount').val('0.01')" class="tag tag-default"><span>Min</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#inputBetAmount').val()+1;$('#inputBetAmount').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#inputBetAmount').val()+10;$('#inputBetAmount').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+10</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#inputBetAmount').val()+100;$('#inputBetAmount').val(parseFloat(sum).toFixed(2));" class="tag tag-default"> <span>+100</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#inputBetAmount').val(parseFloat(Math.max(($('#inputBetAmount').val()/2), 0.01)).toFixed(2));" class="tag tag-default"> <span>1/2</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#inputBetAmount').val(parseFloat(Math.max(($('#inputBetAmount').val()*2), 0.01)).toFixed(2));" class="tag tag-default"> <span>X2</span></div>
                        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#inputBetAmount').val(Math.max(max,0.01));" class="tag tag-default"> <span>Max</span></div>
                     </div>
                  </center>
											
                            </div>
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
							
							           <div class="text-center btn-tool-bar">
                                    	 <button id="startbj" class="btn  btn-block" data-btn="game"  style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="startgame()">Играть</button>
                                      </div>
									  
                                      <div class="text-center btn-tool-bar" style="display:none" id="button-BJ">
                                    	 <button id="takebj"class="btn btn-theme" style="float:left;width:49%;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" data-btn="game" disabled onclick="take()">Еще</button>
            							 <button id="stoptbj"class="btn btn-theme " style="float:right;width:49%;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" data-btn="game" disabled onclick="stop()">Стоп</button>
            							 <button id="splitbj"class="btn btn-theme mt-1" style="float:left;width:49%;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" data-btn="game" disabled onclick="split()">Сплит</button>
            							 <button id="doublebj"class="btn btn-theme mt-1" style="float:right;width:49%;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" data-btn="game" disabled onclick="double()">Удвоить</button>
                                      </div>
									 
                            </div>
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>										
<div class="modal fade text-xs-left" id="cashback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кэшбек</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											<h5 class="text-xs-center" style="font-size:15px;">Получайте <b>2%</b> от каждой выигранной Вами ставки в <b>Dice</b>!</h5>
											<br>
											<h5 class="text-xs-center" style="font-size:15px;">Мин. сумма пополнений - <b>100 <i class='fas fa-coins'></i></b></h5>
											<h5 class="text-xs-center" style="font-size:15px;">Мин. сумма получения - <b>50 <i class='fas fa-coins'></i></b></h5>
											<br>
											<br>
										    <h5 class="text-xs-center" style="font-size:16px;">Доступно: <b><span id="cashhh">$cashback</span> <i class='fas fa-coins'></i></b></h5>
											<h5 class="text-xs-center" style="font-size:14px;">Чтобы получить кэшбек, нажмите на кнопку ниже</h5>
											
                            </div>
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_cashback" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_cashback" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="cashback()">
                                   <span>  Забрать кэшбек</span>

                                </a>
                            </div>
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>			
<div class="modal fade text-xs-left" id="getbonus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Бонусы</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											<h5 class="text-xs-center" style="font-size:17px;">Сумма ежедневной награды зависит от Вашего ранга:</h5>
											<br>
											<h5 class="text-xs-center">Без ранга</h5>
											<h5 class="text-xs-center"><span>- Бонус от 0.01 до 5.00 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span style="color:#ff0000">[V.I.P]</span></h5>
											<h5 class="text-xs-center"><span>- Бонус от 1.00 до 50.00 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span style="color:#5273CF">[PREMIUM]</span></h5>
											<h5 class="text-xs-center"><span>- Бонус от 1.00 до 100.00 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span style="color:#999966">[PRO]</span></h5>
											<h5 class="text-xs-center"><span>- Бонус от 1.00 до 250.00 <i class='fas fa-coins'></i></span></h5>
											<br>
											<br>
											<h5 class="text-xs-center" style="font-size:14px;">Чтобы получить бонус, нажмите на кнопку ниже</h5>									
                                          </div>
										  
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="getBonus()">
                                   <span>  Получить бонус</span>

                                </a>
                            </div>										  
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_getbonus" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_getbonus" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
							<div>	
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											<h5 class="text-xs-center" style="font-size:18px;">Бонус за лайки и репосты</h5>
											<h5 class="text-xs-center" style="font-size:14px">Учитываются 10 последних постов (откройте аккаунт VK)</h5>
											<h5 class="text-xs-center"><span>За лайк - 0.5 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span>За репост - 1 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span>Суммарно, за лайк и репост 10 последних постов в группе - 15 <i class='fas fa-coins'></i></span></h5>
											<br>
											<h5 class="text-xs-center" style="font-size:14px;">Чтобы получить бонус, нажмите на кнопку ниже</h5>									
                                          </div>	
										  									 

							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_getlikes" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_getlikes" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>										  
								
								
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="getLikes()">
                                   <span>  Получить бонус</span>

                                </a>
                            </div>
							</div>
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>	
</div>		
<div class="modal fade text-xs-left" id="bonusesbuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Покупка функции</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<h5 class="text-xs-center"><b>Каждое</b> вращение в этой сессии будет сыграно с выбранным Вами номиналом ставки.</h5><br>
											<h5 class="text-xs-center">Количество вращений: <b>от 15 до 20</b></h5>
											<br>
<h5 class="text-xs-center">Выберите функцию:</h5>
<center>
<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;margin-top:6px;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;width:80px;text-align: center;" onclick="bonusBuy7();">
    <span>100.00 <i class="fas fa-coins"></i></span></a>&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:83px;font-weight:600;text-align: center;" onclick="bonusBuy8();">
    <span>150.00 <i class="fas fa-coins"></i></span></a>&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:83px;font-weight:600;text-align: center;" onclick="bonusBuy9();">
    <span>180.00 <i class="fas fa-coins"></i></span></a>
<br>
<br>
<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;margin-top:6px;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;width:80px;text-align: center;" onclick="bonusBuy1();">
    <span>1000.00 <i class="fas fa-coins"></i></span></a>&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:83px;font-weight:600;text-align: center;" onclick="bonusBuy2();">
    <span>2000.00 <i class="fas fa-coins"></i></span></a>&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:83px;font-weight:600;text-align: center;" onclick="bonusBuy3();">
    <span>3000.00 <i class="fas fa-coins"></i></span></a>
	<br>
	<br>
	<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;margin-top:6px;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;width:80px;text-align: center;" onclick="bonusBuy4();">
    <span>5000.00 <i class="fas fa-coins"></i></span></a>&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:83px;font-weight:600;text-align: center;" onclick="bonusBuy5();">
    <span>10000.00 <i class="fas fa-coins"></i></span></a>&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:83px;font-weight:600;text-align: center;" onclick="bonusBuy6();">
    <span>15000.00 <i class="fas fa-coins"></i></span></a></center>
	<br>
	<br>
								</div>
								
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_bbuy" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_bbuy" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>								
<div class="modal fade text-xs-left" id="slot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="slotclose">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Слоты</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<h5 class="text-xs-center">Сделай ставку и <b>поймай</b> свою удачу!</h5>

$fs
											<br>
											<h5 class="text-xs-center" data-toggle="modal" style="cursor:pointer;" data-target="#slotCoeff"><u>Таблица выплат</u></h5>
											<br>
											<br>
                     						<center><span class="odometer" id="num1" style="font-size:55px;background-color: #ffa700;width: 70px;">7</span>&nbsp;&nbsp;&nbsp;&nbsp;<span id="num2" class="class="odometer" style="font-size:55px;background-color: #ffa700;width: 70px;">7</span>&nbsp;&nbsp;&nbsp;&nbsp;<span id="num3" class="class="odometer" style="font-size:55px;background-color: #ffa700;width: 70px;">7</span></center>
											<br>
											<br>								
<script>
function closeSlot(){
$('#slotclose').click();
}
</script>
<a data-toggle="modal" data-target="#bonusesbuy" class="bonusesbuy btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: white;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;width: 30px;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;margin-left: 400px;margin-top: -244px;position: absolute;" onclick="closeSlot();">
    <span><i class="fa fa-gift"></i></span></a>
$fsno
$fsyes
<br>
<br>
<div id="hashPanel-slot" style="display:none">
<center>HASH: <span id="hash-slot"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
								</div>
								
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_slot" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_slot" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<style>
.wrapper {
  overflow: hidden;
  width: 600px;
  margin-left: -115px;
}

.item7267s {
    background-size: 1125px 75px;
    background-image: url("files/double.png");
    height: 75px;
    position: relative;
    background-position-x: -262.5px;
}

.item7267s:before {
    content: "";
    position: absolute;
    background: #fff;
    height: 100%;
    width: 1px;
    margin: 0 auto;
    left: 0;
    right: 0;
}

.spin_animation {
    -webkit-transition: all 12000ms cubic-bezier(0.34, 0.87, 0.52, 1); 
   -moz-transition: all 12000ms cubic-bezier(0.34, 0.87, 0.52, 1); 
     -o-transition: all 12000ms cubic-bezier(0.34, 0.87, 0.52, 1); 
        transition: all 12000ms cubic-bezier(0.34, 0.87, 0.52, 1); /* custom */

-webkit-transition-timing-function: cubic-bezier(0.34, 0.87, 0.52, 1); 
   -moz-transition-timing-function: cubic-bezier(0.34, 0.87, 0.52, 1); 
     -o-transition-timing-function: cubic-bezier(0.34, 0.87, 0.52, 1); 
        transition-timing-function: cubic-bezier(0.34, 0.87, 0.52, 1); /* custom */
}
</style>

<style>
#coin {
  position: relative;
  margin: 0 auto;
  width: 100px;
  height: 100px;
}
#coin div {
  width: 100%;
  height: 100%;
  -webkit-border-radius: 50%;
     -moz-border-radius: 50%;
          border-radius: 50%;
  -webkit-box-shadow: inset 0 0 45px rgba(255,255,255,.3), 0 12px 20px -10px rgba(0,0,0,.4);
     -moz-box-shadow: inset 0 0 45px rgba(255,255,255,.3), 0 12px 20px -10px rgba(0,0,0,.4);
          box-shadow: inset 0 0 45px rgba(255,255,255,.3), 0 12px 20px -10px rgba(0,0,0,.4);
}
.side-a {
  background-image: url(files/coinflip/ct.png);
  width: 100px;
  height: 100px;
}
.side-b {
  background-image: url(files/coinflip/t.png);
  width: 100px;
  height: 100px;
}

#coin {
  transition: -webkit-transform 6s ease-in;
  -webkit-transform-style: preserve-3d;
}
#coin div {
  position: absolute;
  -webkit-backface-visibility: hidden;
}
.side-a {
  z-index: 100;
}
.side-b {
  -webkit-transform: rotateY(-180deg);

}

#coin.heads {
  -webkit-animation: flipHeads 6s ease-out forwards;
  -moz-animation: flipHeads 6s ease-out forwards;
    -o-animation: flipHeads 6s ease-out forwards;
       animation: flipHeads 6s ease-out forwards;
}
#coin.tails {
  -webkit-animation: flipTails 6s ease-out forwards;
  -moz-animation: flipTails 6s ease-out forwards;
    -o-animation: flipTails 6s ease-out forwards;
       animation: flipTails 6s ease-out forwards;
}

@-webkit-keyframes flipHeads {
  from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
  to { -webkit-transform: rotateY(1800deg); -moz-transform: rotateY(1800deg); transform: rotateY(1800deg); }
}
@-webkit-keyframes flipTails {
  from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
  to { -webkit-transform: rotateY(1980deg); -moz-transform: rotateY(1980deg); transform: rotateY(1980deg); }
}
.roulette {
    will-change: auto;
    -moz-user-select: none;
    pointer-events: none;
    -o-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
	width:85%
}
.roulette-pointer {
    position: absolute;
    top: 0;
    right: 0;
    margin-left: auto;
    margin-top: 14px;
    z-index: 1;
    width: 35px;
    transform: rotate(270deg);
    margin-right: auto;
    left: 0;
    bottom: 0;
}

</style>
<script>
function hideClass(){
$('#coin').removeClass();
}
</script>
<div class="modal fade text-xs-left" id="double" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Рулетка</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<h5 class="text-xs-center" style="color:red"><b>Красное</b> - выплачивает 2x</h5>
											<h5 class="text-xs-center" style="color:#228B22"><b>Зеленое</b> - выплачивает 14x</h5>
											<h5 class="text-xs-center" style="color:#383838"><b>Черное</b> - выплачивает 2x</h5>
											<br>
<center>
                                <img class="roulette-pointer" style="margin-top:90px" src="../files/double-arrow.png">
				                <img class="roulette" src="../files/double-row.png">
</center>

											<br>
											<br>
											<h5 class="text-xs-center">Сумма ставки:</h5>
											<center><input id="BetSizeRoll" onkeyup="validateBetSize(this);" value="10" class="rullinput form-control text-xs-center">
											<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRoll').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRoll').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeRoll').val()+1;$('#BetSizeRoll').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeRoll').val()+10;$('#BetSizeRoll').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeRoll').val()+100;$('#BetSizeRoll').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRoll').val(parseFloat(Math.max(($('#BetSizeRoll').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRoll').val(parseFloat(Math.max(($('#BetSizeRoll').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeRoll').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>
											</center>
											<br>
                                <center><a class="rullbtn btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: red; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="betred()">
								<span>(1-7)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="rullbtn btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #228B22; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;margin-top:-1px;font-weight:600;text-align: center;" id="rollgreen" onclick="betgreen()">
								<span>(0)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="rullbtn btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #383838; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;margin-top:-1px;text-align: center;" id="rollblack" onclick="betblack()">
								<span>(8-14)</span></a>
								
								<div id="hashPanel-roulette" style="margin-top:10px;display:none">
<center>HASH: <span id="hash-roulette">4683a4b0f21005dac78cf59db9462d0b</span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>

								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_roll" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_roll" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<style>
.choice {
    padding: 8px;
    display: inline-block;
    width: 25%;
    border: 1px solid #999;
    border-radius: 50%;
    margin: 20px 10px 20px 10px;
    background: #fff;
    outline: none;
    cursor: pointer;
}
.rpschs {
  font-size: 54px;
}
</style>
<div class="modal fade text-xs-left" id="rpsGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Камень, ножницы, бумага</h4></div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
<center>
<h4>Введите сумму ставки и сделайте выбор</h4>
<section class="selections">
  <button class="choice" id="rock" onclick="betRps('rock');"><i class="rpschs fa fa-hand-rock-o"></i></button>
  <button class="choice" id="scissors" onclick="betRps('scissors');"><i class="rpschs fa fa-hand-scissors-o"></i></button>
  <button class="choice" id="paper" onclick="betRps('paper');"><i class="rpschs fa fa-hand-paper-o" style=""></i>
</button>
</section>
</center>

											<br>
											
											<h5 class="text-xs-center">Сумма ставки:</h5>
											<center><input id="BetSizeRps" onkeyup="validateBetSize(this);" value="10" class="rullinput form-control text-xs-center">
											<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRps').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRps').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeRps').val()+1;$('#BetSizeRps').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeRps').val()+10;$('#BetSizeRps').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeRps').val()+100;$('#BetSizeRps').val(parseFloat(sum).toFixed(2));" class="tag tag-default"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRps').val(parseFloat(Math.max(($('#BetSizeRps').val()/2), 0.01)).toFixed(2));" class="tag tag-default"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeRps').val(parseFloat(Math.max(($('#BetSizeRps').val()*2), 0.01)).toFixed(2));" class="tag tag-default"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeRps').val(Math.max(max,0.01));" class="tag tag-default"> <span>Max</span></div>
</div>
											</center>
											<br>							
                                </div>
																									  
							 <div class="col-lg-8 offset-lg-2">
<div id="hashPanel-rps" style="display:none">
<center>HASH: <span id="hash-rps"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>					
                                <a id="error_rps" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_rps" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="thimblesGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Напёрстки</h4></div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
<center>
<h4>Введите сумму ставки и сделайте выбор</h4>
<div id="opened-th" style="display: none;">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div style="display: block;position:absolute">
<img src="https://world-coin-game.ru/static/media/thimble.f0c707dd.png" id="nap1" style="z-index: 99;position: absolute;transition: all 1s ease-in-out 0s;width: 120px;cursor: pointer;" onclick="betThimbles('1')">
<img src="https://world-coin-game.ru/static/media/coins.3c88533c.png" id="ball1" style="display:none;position:absolute;width: 80px;margin-top: 0px;z-index: 98;margin-left: 15px;">
<img src="https://world-coin-game.ru/static/media/thimble.f0c707dd.png" id="nap2" style="z-index: 99;position: absolute;transition: all 1s ease-in-out 0s;width: 120px;margin-left: 130px;cursor: pointer;" onclick="betThimbles('2')">
<img src="https://world-coin-game.ru/static/media/coins.3c88533c.png" id="ball2" style="display:none;position:absolute;width: 80px;margin-top: 0px;z-index: 98;margin-left: 148px;">
<img src="https://world-coin-game.ru/static/media/thimble.f0c707dd.png" id="nap3" style="z-index: 99;position: absolute;transition: all 1s ease-in-out 0s;width: 120px;margin-left: 260px;cursor: pointer;" onclick="betThimbles('3')">
<img src="https://world-coin-game.ru/static/media/coins.3c88533c.png" id="ball3" style="display:none;position:absolute;width: 80px;margin-top: 0px;z-index: 98;margin-left: 275px;">
</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<center>
<input type="checkbox" id="balls1_th" onclick="$('#balls2_th').prop('checked', false);"><label for="balls1_th">&nbsp;1 шарик (x2.9)</label>
<input type="checkbox" style="margin-left:20px" id="balls2_th" onclick="$('#balls1_th').prop('checked', false);"><label for="balls2_th">&nbsp;2 шарика (x1.45)</label>
<center>
<br>											
											<h5 class="text-xs-center">Сумма ставки:</h5>
											<center><input id="BetSizeThimbles" onkeyup="validateBetSize(this);" value="10" class="rullinput form-control text-xs-center">
											<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeThimbles').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeThimbles').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeThimbles').val()+1;$('#BetSizeThimbles').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeThimbles').val()+10;$('#BetSizeThimbles').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeThimbles').val()+100;$('#BetSizeThimbles').val(parseFloat(sum).toFixed(2));" class="tag tag-default"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeThimbles').val(parseFloat(Math.max(($('#BetSizeThimbles').val()/2), 0.01)).toFixed(2));" class="tag tag-default"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeThimbles').val(parseFloat(Math.max(($('#BetSizeThimbles').val()*2), 0.01)).toFixed(2));" class="tag tag-default"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeThimbles').val(Math.max(max,0.01));" class="tag tag-default"> <span>Max</span></div>
</div>
											</center>
											<br>							
                                </div>
																									  
							 <div class="col-lg-8 offset-lg-2">
<div id="hashPanel-thimbles" style="display:none">
<center>HASH: <span id="hash-thimbles"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>					
                                <a id="error_thimbles" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_thimbles" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="setmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Настройки</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<h5 class="text-xs-center" style="color:#000"><b>Звуки:</h5>
                                <center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="soundisable()">
								<span>ОТКЛЮЧИТЬ</span></a>
								<br>
								<br>
								<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="soundenable()">
								<span>ВКЛЮЧИТЬ</span></a>

								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_sets" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_sets" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="bj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Блекджек</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">		
									
								$bjactive 
								$bjnoactive 									
											<br>
											<br>
									
											<center>
											</center>
											<br>
											<br>
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeBj" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center"></center>
											<br>
											
								<br>
								<br>
								
                               $bjPanelnoactive					
							   $bjPanelactive
								<div id="bjActivePage" style="display:none">
								<div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
                                <center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="changeMore();betbj()">
								<span>ЕЩЕ</span></a>&nbsp;<a class="btn btn-block" style="margin-left:-1px;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="changeStop();betbj()">
								<span>СТОП</span></a>
								</div>
								</div>
										  
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_bj" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_bj" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
</div>
<div class="modal fade text-xs-left" id="coinsflip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x" onclick="hideClass();"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Коинфлип</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">		
											<h5 class="text-xs-center" style="color:#000">Кто победит? <b style="color:#5C7791">Counter-Terrorists</b> или <b style="color:#968558">Terrorists</b><span style="color:#000">?</span></h5>
											<h5 class="text-xs-center" style="color:#000">Все зависит от тебя!</h5>
											<h5 class="text-xs-center" style="color:#000">Коэффициент - <b>2.00x</b></h5>
											<br>
											<br>
											</b>
											<br>
											<div id="coin">
                                             <div class="side-a"></div>
                                             <div class="side-b"></div>
                                            </div>
											<br>
											<br>
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeCoin" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
											<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCoin').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCoin').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCoin').val()+1;$('#BetSizeCoin').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCoin').val()+10;$('#BetSizeCoin').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCoin').val()+100;$('#BetSizeCoin').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCoin').val(parseFloat(Math.max(($('#BetSizeCoin').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCoin').val(parseFloat(Math.max(($('#BetSizeCoin').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeCoin').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>											
											</center>
											<br>
											<div id="betbuttons">
											<h5 class="text-xs-center">Ваш выбор:</h5>
                                <center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #968558; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:170px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="bet_gray()">
								<span><img src="files/coinflip/t.png" style="width:24px;height:24px;"></img> Terrorists</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #5C7791; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:170px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;margin-top:-1px;font-weight:600;text-align: center;" id="rollgreen" onclick="bet_red()">
								<span><img src="files/coinflip/ct.png" style="width:24px;height:24px;"></img> Counter-Terrorists</span></a>
                                 </div>
								 <br>
<div id="hashPanel-coin" style="display:none">
<center>HASH: <span id="hash-coin"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_coin" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_coin" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="chests" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x" onclick="hideClass();"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Сундучки</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">		
											<h5 class="text-xs-center" style="color:#000">Макс. коэффициент - <b>x1000</b></h5>
											<br>
											<br>
											</b>
											<br>
											<h5 class="text-xs-center" id="chhs" style="color:#000"><b>Выберите сундук</b></h5>
											<br>
											<center><img id="openchest" class="opench" style="display:none;width:256px;height:256px;" src="https://thumbs.gfycat.com/DisguisedInsidiousAustraliansilkyterrier-small.gif"></img></center>
											<center><h1 id="multichest" class="chestx" style="display:none"></h1></center>
                                             <div id="brs"><img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Empty.png" style="display:none;width:256px;height:256px"></img></div>
										  <div id="playChest">
											<center>
                                             <img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img><img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img><img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img>
											 <br>
											 <img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img><img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img><img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img>
											 <br>
											 <img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img><img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img><img src="https://webstockreview.net/images/clipart-box-tresure-2.png" style="width:82px;height:82px;cursor:pointer" onclick="playChest();"></img>
                                             </center>
										  </div>
								            <br>
											<div id="betchest">
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeChest" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeChest').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeChest').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeChest').val()+1;$('#BetSizeChest').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeChest').val()+10;$('#BetSizeChest').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeChest').val()+100;$('#BetSizeChest').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeChest').val(parseFloat(Math.max(($('#BetSizeChest').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeChest').val(parseFloat(Math.max(($('#BetSizeChest').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeChest').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>													
											</center>
											</div>
											<br>
<div id="hashPanel-chest" style="display:none">
<center>HASH: <span id="hash-chest"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_chest" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_chest" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="upgradeGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Апгрейд</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">	
                                            <h5 class="text-xs-center">Выберите сумму ставки, затем желаемую сумму выигрыша</h5>								
											<br>
											<div style="float:left;width:45%">
											<h5 class="text-xs-center">Сумма ставки</h5>	
											<input id="BetSizeUpgrade" onkeyup="validateBetSize(this);updateProfit();" value="10" placeholder="Сумма ставки" class="form-control text-xs-center">
											</div>								
											<div style="float:right;width:45%;margin-top:-7px;">
											<h5 class="text-xs-center"><h5 class="text-xs-center">Возм. выигрыш</h5></h5>	
											<input id="upgradeWin" onkeyup="validateBetSize(this);updateProfit();" value="20" placeholder="Возм. выигрыш" class="form-control text-xs-center">
											</div>															
											<br>	
											<br>
											<br>
											<br>
<center>
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeUpgrade').val('');updateProfit();" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeUpgrade').val('0.01');updateProfit();" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeUpgrade').val()+1;$('#BetSizeUpgrade').val(parseFloat(sum).toFixed(2));updateProfit();" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeUpgrade').val()+10;$('#BetSizeUpgrade').val(parseFloat(sum).toFixed(2));updateProfit();" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeUpgrade').val()+100;$('#BetSizeUpgrade').val(parseFloat(sum).toFixed(2));updateProfit();" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeUpgrade').val(parseFloat(Math.max(($('#BetSizeUpgrade').val()/2), 0.01)).toFixed(2));updateProfit();" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeUpgrade').val(parseFloat(Math.max(($('#BetSizeUpgrade').val()*2), 0.01)).toFixed(2));updateProfit();" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeUpgrade').val(Math.max(max,0.01));updateProfit();" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>	
</center>											
											<br>
											<center><img id="status_upgrade" src="" style="display:none;width:64px!important"></center>
											<br>
											<br>
											<div id="betbuttonsCard">
											<h5 class="text-xs-center">Коэффициент:</h5>
                                <div style="display:flex;justify-content:center"><h5 class="text-xs-center" id="upgradeCef" style="font-weight:600;font-size:22px">2.00</h5><h5 class="text-xs-center" style="font-weight:600;font-size:22px">x</h5></div>
								<br>
											<h5 class="text-xs-center">Шанс:</h5>
                                 <div style="display:flex;justify-content:center"><h5 class="text-xs-center" id="upgradeChance" style="font-weight:600;font-size:22px">2.00</h5><h5 class="text-xs-center" style="font-weight:600;font-size:22px">%</h5></div>							
								<br>
								<button onclick="upgrade();" id="btnUpgrade" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1">Играть</button>
								<br>
<div id="hashPanel-upgrade" style="display:none">
<center>HASH: <span id="hash-upgrade"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
                                 </div>
								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_upgrade" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_upgrade" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="guessCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Угадай карту</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">	
                                            <h5 class="text-xs-center">Коэффициент угадывания цвета - <b>2.00x</b></h5>								
											<h5 class="text-xs-center">Коэффициент угадывания масти - <b>4.00x</b></h5>
											<br>
											<br>
											<br>
											<center><div id="betLoadCard" class="cssload-loader" style="background: none;display:none;">
												  <img src="files/cardShuffle.gif" style="width:45px;height:45px;-moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none;"></img>
											</div></center>
											<center><div id="playingCard">
                                             <img id="default" src="https://www.random.org/playing-cards/32.png"></img>
                                            </div></center>
											<br>
											<br>
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeCard" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
											<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCard').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCard').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCard').val()+1;$('#BetSizeCard').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCard').val()+10;$('#BetSizeCard').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCard').val()+100;$('#BetSizeCard').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCard').val(parseFloat(Math.max(($('#BetSizeCard').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCard').val(parseFloat(Math.max(($('#BetSizeCard').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeCard').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>														
											</center>
											<br>
											<div id="betbuttonsCard">
											<h5 class="text-xs-center">Ваш выбор:</h5>
                                <center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: red; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="cardbet_red();">
								<span>КРАСНОЕ</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #383838; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;margin-top:-1px;text-align: center;" id="rollblack" onclick="cardbet_black();">
								<span>ЧЕРНОЕ</span></a>
								<br>
								<br>
								Выберите масть:<br>
								<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="cardbet_spades();">
								<span><img src="files/cards/spades.png" style="width:32px;height:32px;"></img></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;margin-top:-1px;text-align: center;" id="rollblack" onclick="cardbet_clubs();">
								<span><img src="files/cards/clubs.png" style="width:32px;height:32px;"></img></span></a>
								<br>
								<br>
								<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="rollred" onclick="cardbet_hearts();">
								<span><img src="files/cards/hearts.png" style="width:32px;height:32px;"></img></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #fff; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:108px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;margin-top:-1px;text-align: center;" id="rollblack" onclick="cardbet_diamonds()">
								<span><img src="files/cards/diamonds.png" style="width:32px;height:32px;"></img></span></a>
								<br>
								<br>
<div id="hashPanel-card" style="display:none">
<center>HASH: <span id="hash-card"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
                                 </div>
								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_card" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_card" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="diceRoll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Бросок костей</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">		
											<h5 class="text-xs-center">Наберите больше очков, чем у диллера и выиграйте вашу ставку с коэффициентом <b>2X!</b></h5>
											<br>
											<br>
											<br>
											<center><div id="betLoadDice" class="cssload-loader" style="background: none;display:none;">
												  <img src="files/loaderdice.gif" style="width:80px;height:80px;-moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none;"></img>
											</div></center>
											<b><center><span>ВЫ:</span><span style="margin-left:25px">ДИЛЛЕР:</span></center></b>
											<center><div id="dices">
                                             <img id="myDice" src="https://www.random.org/dice/dice6.png"></img>&nbsp;&nbsp;&nbsp;&nbsp;<img id="enemyDice" src="https://www.random.org/dice/dice6.png"></img>
                                            </div></center>
											<br>
											<br>
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeDice" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeDice').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeDice').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeDice').val()+1;$('#BetSizeDice').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeDice').val()+10;$('#BetSizeDice').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeDice').val()+100;$('#BetSizeDice').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeDice').val(parseFloat(Math.max(($('#BetSizeDice').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeDice').val(parseFloat(Math.max(($('#BetSizeDice').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeDice').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>											
											</center>
											<br>
											<div id="betbuttonsDice">
								<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="dicedrop();">
								<span>БРОСИТЬ КОСТИ</span></a>
								<br>
								<br>
<div id="hashPanel-dice" style="display:none">
<center>HASH: <span id="hash-dice"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
                                 </div>
								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_dice" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_dice" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="lowerupper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Угадай число</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">		
											<h5 class="text-xs-center">Угадай верный <b>диапазон</b> чисел, и выиграй свою ставку с коэффициентом до <b>100X</b>!</h5>
											<br>
											<br>
											<br>
											<center>
											Число:<br>

											<b><span class="odometer" id="luNumber" style="font-size:48px">$numul</span></b>
											</center>
											<br>
											<br>
											<div id="betinputlu">
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeLu" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeLu').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeLu').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeLu').val()+1;$('#BetSizeLu').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeLu').val()+10;$('#BetSizeLu').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeLu').val()+100;$('#BetSizeLu').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeLu').val(parseFloat(Math.max(($('#BetSizeLu').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeLu').val(parseFloat(Math.max(($('#BetSizeLu').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeLu').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>												
											</center>
											</div>
											<br>
											
								$luactive 
								$lunoactive 
								<div id="activeGame" style="display:none">
	<center><a class="btn btn-block"
	style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="mensheChange();betLu();">
	<span>МЕНЬШЕ (<span id="mensheCoeff">$coefl</span>x)</a>&nbsp;&nbsp;<a class="btn btn-block" style="margin-top:-1px;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="bolsheChange();betLu();">
	<span>БОЛЬШЕ (<span id="bolsheCoeff">$coefu</span>x)</a>
	<br>
	<br>
	<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="evenChange();betLu();">
	<span>ЧЕТНОЕ (1.98x)</span></a>&nbsp;&nbsp;<a class="btn btn-block" style="margin-top:-1px;-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="oddChange();betLu();">
	<span>НЕЧЕТНОЕ (1.98x)</span></a>
	<br>
	<br>
	<a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:130px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="ravnoChange();betLu();">
	<span>РАВНО (98x)</span></a>
	</div>
								<br>
<div id="hashPanel-lu" style="display:none">
<center>HASH: <span id="hash-lu"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
                                 </div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_lu" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_lu" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>

<div class="modal fade text-xs-left" id="crashGame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true" onclick="hideClass();">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Краш</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">		
											<h5 class="text-xs-center">Угадайте, какой выпадет <b>x</b></h5>
											<br>
											<br>
											<br>
											<center>
											<span style="font-weight:600;font-size:36px;" id="crashX">1.00</span><span style="font-weight:600;font-size:20px;">x</span>
											</center>
											<br>
											<br>
											<br>
											<h5 class="text-xs-center">Сумма ставки:</h5><i class="fas fa-coins" style="margin-top: 12px;position: absolute;margin-left: 210px;"></i>
											<center><input id="BetSizeCrash" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
<div style="margin-top:5px">
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCrash').val('')" class="tag tag-default"><span><i class="fas fa-trash"></i></span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCrash').val('0.01')" class="tag tag-default"><span>Min</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCrash').val()+1;$('#BetSizeCrash').val(parseFloat(sum).toFixed(2));" class="tag tag-default"><span>+1</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCrash').val()+10;$('#BetSizeCrash').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"><span>+10</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeCrash').val()+100;$('#BetSizeCrash').val(parseFloat(sum).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>+100</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCrash').val(parseFloat(Math.max(($('#BetSizeCrash').val()/2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>1/2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeCrash').val(parseFloat(Math.max(($('#BetSizeCrash').val()*2), 0.01)).toFixed(2));" class="tag tag-default" style="display:inline-block;"> <span>X2</span></div>
<div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeCrash').val(Math.max(max,0.01));" class="tag tag-default" style="display:inline-block;"> <span>Max</span></div>
</div>																
											</center>
											<br>
											<h5 class="text-xs-center">Автовывод (x):</h5>
											<center><input id="cashoutCrash" onkeyup="validateBetSize(this);" style="width:100px" value="2.00" class="form-control text-xs-center"></center>
											<br>
											<div id="betbuttonsCrash">
								<center><a class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="crashBet();">
								<span>ИГРАТЬ</span></a>
								<br>
<br>
<div id="hashPanel-crash" style="display:none">
<center>HASH: <span id="hash-crash"><b>sdg9g049g4g</b></span><br></center>
<center><a data-toggle="modal" data-target="#checkGameHash">Проверить игру</a></center>
</div>
                                 </div>
								</div>
										  
							 <div class="col-lg-8 offset-lg-2">
                                <a id="error_crash" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_crash" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<span id="typebet" style="display:none"></span>
<span id="bjtypebet" style="display:none"></span>
<script>
function mensheChange(){
$('#typebet').html("betMenshe");
}
</script>
<script>
function bolsheChange(){
$('#typebet').html("betBolshe");
}
</script>
<script>
function evenChange(){
$('#typebet').html("betEven");
}
</script>
<script>
function oddChange(){
$('#typebet').html("betOdd");
}
</script>
<script>
function betluchange(){
$('#typebet').html("betlu");
}
</script>
<script>
function ravnoChange(){
$('#typebet').html("betRavno");
}
</script>
<script>
function changeMore(){
$('#bjtypebet').html("more");
}
</script>
<script>
function changeStop(){
$('#bjtypebet').html("stop");
}
</script>
<div class="modal fade text-xs-left" id="slotCoeff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Таблица выплат</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
								<h5 class="text-xs-center"><b>*</b> - любое число</h5>
								<br>
											<h5 class="text-xs-center"><b>0**</b> - выплачивает <b>1.5X</b></h5>
											<h5 class="text-xs-center"><b>7**</b> - выплачивает <b>2X</b></h5>
											<h5 class="text-xs-center"><b>*7*</b> - выплачивает <b>2X</b></h5>
											<h5 class="text-xs-center"><b>**7</b> - выплачивает <b>2X</b></h5>
											<h5 class="text-xs-center"><b>00*</b> - выплачивает <b>3X</b></h5>
											<h5 class="text-xs-center"><b>*00</b> - выплачивает <b>3X</b></h5>
											<h5 class="text-xs-center"><b>7*7</b> - выплачивает <b>4X</b></h5>
											<h5 class="text-xs-center"><b>*77</b> - выплачивает <b>5X</b></h5>
											<h5 class="text-xs-center"><b>123</b> - выплачивает <b>5X</b></h5>
											<h5 class="text-xs-center"><b>111</b> - выплачивает <b>20X</b></h5>
											<h5 class="text-xs-center"><b>555</b> - выплачивает <b>30X</b></h5>
											<h5 class="text-xs-center"><b>999</b> - выплачивает <b>50X</b></h5>
											<h5 class="text-xs-center"><b>000</b> - выплачивает <b>10X</b></h5>
											<h5 class="text-xs-center"><b>777</b> - выплачивает <b>100X</b></h5>
											<br>
											<h5 class="text-xs-center"><b>0*0</b> - запускает <b>бонусную игру</b>, выплачивает <b>1X</b></h5><br>
											<h5 class="text-xs-center"><b>Таблица выплат в бонусной игре:</b></h5>
											<h5 class="text-xs-center"><b>0**</b> - выплачивает <b>5X</b></h5>
											<h5 class="text-xs-center"><b>7**</b> - выплачивает <b>10X</b></h5>
											<h5 class="text-xs-center"><b>*7*</b> - выплачивает <b>10X</b></h5>
											<h5 class="text-xs-center"><b>**7</b> - выплачивает <b>10X</b></h5>						
                                            <h5 class="text-xs-center"><b>77*</b> - выплачивает <b>50X</b></h5>	
                                            <h5 class="text-xs-center"><b>7*7</b> - выплачивает <b>50X</b></h5>		
                                            <h5 class="text-xs-center"><b>*77</b> - выплачивает <b>50X</b></h5>				
                                            <h5 class="text-xs-center"><b>777</b> - выплачивает <b>1000X</b></h5>													
								 <br>
								 <br>
								 <br>
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>		
<div class="modal fade text-xs-left" id="cases" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кейсы</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<br>
											<center><h5><b>Выберите кейс:</b></h5>
                                            <br>
											
							<center>
							<a data-toggle="modal" data-target="#case_bomj" class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op">
								<span><i class="fas fa-cube"></i>&nbsp;Бомж</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#case_vip" class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;margin-top:-1px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op">
								<span><i class="fas fa-cube"></i>&nbsp;Вип</span></a></center>
								<br>
								<center><a data-toggle="modal" data-target="#case_prem" class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op">
								<span><i class="fas fa-cube"></i>&nbsp;Премиум</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#case_lucky" class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;margin-top:-1px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op">
								<span><i class="fas fa-cube"></i>&nbsp;Lucky test</span></a></center>
								<br>
								<center><a data-toggle="modal" data-target="#case_major" class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op">
								<span><i class="fas fa-cube"></i>&nbsp;Test</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#case_safe" class="btn btn-block" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:125px;margin-top:-1px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case1op">
								<span><i class="fas fa-cube"></i>&nbsp;Безопасный</span></a></center>
										  
										 
										</div>
									  </div>
									</div>									
</div>		
								
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>	
 <style>
  .leftimg {
    float:left; /* Выравнивание по левому краю */
    margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
   }
  </style>																				
<div class="modal fade text-xs-left" id="case_bomj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кейс Бомжа</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<br>
											<center><h5><b>Кейс Бомжа</b></h5>
                                            <h5><img src="files/case.png" style="width: 221px; height: 221px;" /></h5>
											<h5>Выигрыш до <b>50.00 <i class="fas fa-coins"></i></b></h5>
											<h5>Стоимость: <b>5.00 <i class="fas fa-coins"></i></b></h5>
											<br>
                               	<div class="pizdos" style="display:inline-block">
								<span style="font-size:20px;display:none" id="winLucky43">Ваш выигрыш:</b></span><br>
								<span id="winLucky44" style="font-size:36px;display:none">0</span> <span id="winLucky45" style="font-size:36px;display:none;margin-top:8px;">&nbsp;<i class="fas fa-coins"></i></span>
								</div>
                               <h5><a class="btn btn-block" id="gege71" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:100px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case4op" onclick="case1()">
								<span id="gege4">Открыть</span></a></h5></center>

										  </div>
										 
										  
								 <div class="col-lg-8 offset-lg-2">
                                <a id="error_cases1" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_cases1" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>	
										  
										 
										</div>
									  </div>
									</div>									
</div>		
								
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>											
<div class="modal fade text-xs-left" id="case_prem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кейс Премиума</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<br>
											<center><h5><b>Кейс Премиума</b></h5>
                                            <h5><img src="files/case.png" style="width: 221px; height: 221px;" /></h5>
											<h5>Выигрыш до <b>1000.00 <i class="fas fa-coins"></i></b></h5>
											<h5>Стоимость: <b>100.00 <i class="fas fa-coins"></i></b></h5>
											<br>
                              	<div class="pizdos" style="display:inline-block">
								<span style="font-size:20px;display:none" id="winLucky32">Ваш выигрыш:</b></span><br>
								<span id="winLucky33" style="font-size:36px;display:none">0</span> <span id="winLucky35" style="font-size:36px;display:none;margin-top:8px;">&nbsp;<i class="fas fa-coins"></i></span>
								</div>
                               <h5><a class="btn btn-block" id="gege44" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:100px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case4op" onclick="case3()">
								<span id="gege3">Открыть</span></a></h5></center>

										  </div>
										 
										  
									 <div class="col-lg-8 offset-lg-2">
                                <a id="error_cases3" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_cases3" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>	
										  
										 
										</div>
									  </div>
									</div>									
</div>		
								
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>	
<div class="modal fade text-xs-left" id="case_vip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кейс Випа</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<br>
											<center><h5><b>Кейс Випа</b></h5>
                                            <h5><img src="files/case.png" style="width: 221px; height: 221px;" /></h5>
											<h5>Выигрыш до <b>500.00 <i class="fas fa-coins"></i></b></h5>
											<h5>Стоимость: <b>50.00 <i class="fas fa-coins"></i></b></h5>
											<br>
								<div class="pizdos" style="display:inline-block">
								<span style="font-size:20px;display:none" id="winLucky23">Ваш выигрыш:</b></span><br>
								<span id="winLucky22" style="font-size:36px;display:none">0</span> <span id="winLucky25" style="font-size:36px;display:none;margin-top:8px;">&nbsp;<i class="fas fa-coins"></i></span>
								</div>
                               <h5><a class="btn btn-block" id="gege45" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:100px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case4op" onclick="case2()">
								<span id="gege233">Открыть</span></a></h5></center>

										  </div>
										 
										  
									 <div class="col-lg-8 offset-lg-2">
                                <a id="error_cases2" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_cases2" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>	
										  
										 
										</div>
									  </div>
									</div>									
</div>		
								
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>
<div class="modal fade text-xs-left" id="case_lucky" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кейс Lucky</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<br>
											<center><h5><b>Кейс Lucky</b></h5
											<h4 style="font-weight:300; color:#805900;"><i>Будьте внимательнее!</i><br> Этот кейс находится в категории "ALL IN"</h4>
                                            <div><h5><img src="files/case.png" style="width: 221px; height: 221px;" /></h5></div>
											<h5>Выигрыш до <b>300.00 <i class="fas fa-coins"></i></b></h5>
											<h5>Стоимость: <b>5.00 <i class="fas fa-coins"></i></b></h5>
											<br>
											<br>
											<br>
											<br>
								<div class="pizdos" style="display:inline-block">
								<span style="font-size:20px;display:none" id="winLucky1">Ваш выигрыш:</b></span><br>
								<span id="winLucky" style="font-size:36px;display:none">0</span> <span id="winLucky3" style="font-size:36px;display:none;margin-top:8px;">&nbsp;<i class="fas fa-coins"></i></span>
								</div>
                               <h5><a class="btn btn-block" id="gege2" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:100px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case4op" onclick="case_lucky()">
								<span id="gege">Открыть</span></a></h5></center>

										  </div>
										 
										  
									 <div class="col-lg-8 offset-lg-2">
                                <a id="error_cases4" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_cases4" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>	
										  
										 
										</div>
									  </div>
									</div>									
</div>		
								
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>	
<div class="modal fade text-xs-left" id="case_safe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Кейс Безопасный</h4>
										  </div>	
										  <div class="modal-body">
										  <div class="row">
                                <div class="col-lg-8 offset-lg-2" style="margin-top:8px;display:inline-block">
											<br>
											<center><h5><b>Кейс Безопасный</b></h5
											<h4 style="font-weight:300; color:#805900;"></h4>
                                            <div><h5><img src="files/case.png" style="width: 221px; height: 221px;" /></h5></div>
											<h5>Выигрыш до <b>10.00 <i class="fas fa-coins"></i></b></h5>
											<h5>Стоимость: <b>8.00 <i class="fas fa-coins"></i></b></h5>
											<br>
											<br>
											<br>
											<br>
								<div class="pizdos" style="display:inline-block">
								<span style="font-size:20px;display:none" id="winSafe2">Ваш выигрыш:</b></span><br>
								<span id="winSafe" style="font-size:36px;display:none">0</span> <span id="winSafe1" style="font-size:36px;display:none;margin-top:8px;">&nbsp;<i class="fas fa-coins"></i></span>
								</div>
                               <h5><a class="btn btn-block" id="gege265" style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: white; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;width:100px;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" id="case5op" onclick="case_safe()">
								<span id="openSafe">Открыть</span></a></h5></center>

										  </div>
										 
										  
									 <div class="col-lg-8 offset-lg-2">
                                <a id="error_cases5" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_cases5" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>	
										  
										 
										</div>
									  </div>
									</div>									
</div>		
								
								
										  </div>
										 
										</div>
									  </div>
									</div>		
</div>																													
<div class="modal fade text-xs-left" id="toperson" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true"><i class="ft-x"></i></span>
											</button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Передача баланса</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
<h6>Логин получателя:</h6>
                                <input type="text" id="toperson1" class="form-control"><br>
                                <h6>Сумма:</h6>
                                <input type="text" id="person" class="form-control" onkeyup="var yratext=/['А-я','A-z']/; if(yratext.test(this.value)) this.value=''">

                            </div>
							
                            <div class="col-lg-8 offset-lg-2">
                                <a id="error_person" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none;"></a>
								<a id="succes_person" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
								</div>
								
							
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>
<div class="modal fade text-xs-left" id="changeSecret" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
										                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Смена секретного кода</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											
<h6>Укажите ваш текущий пароль:</b></h6>
<h6><input class="form-control" id="currentPass" type="password"></h6>
<h6>Придумайте секретный код:</b></h6>
<h6><input class="form-control" id="secretCode" type="text"></h6>
<button style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; display:none; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:-1px;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1" onclick="changeCode();"><i class="fa fa-lock"></i>&nbsp;Применить изменения</button>


                            </div>
							
							<div class="col-lg-8 offset-lg-2">
                                <a id="error_code" class="btn  btn-block btnError" style="color:#fff;display:none;margin-top:15px;"></a>
                                <a id="succes_code" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
                            </div>							
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>										
<div class="modal fade text-xs-left" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
										                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Профиль пользователя $login</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											
<h6>Дата регистрации: <b>$datareg</b></h6>
<h6>Текущий баланс: <b>$balance</b> <i class="fas fa-coins"></i></h6>
<h6>Пополнено на сумму: <b>$deposit</b> <i class="fas fa-coins"></i></h6>
<br>
<div id="box-em">
<h6 id="cmm">Привяжите ваш E-Mail:</h6>
<input id="emConnect" type="email" class="form-control" placeholder="noreply@example.com">
<button style="-webkit-box-align: center;-ms-flex-align: center; align-items: center; margin-top:10px!important; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; display:none; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:-1px;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1" id="lemail" onclick="linkEmail()">Привязать</button>
</div>
<a id="error_cem" class="btn  btn-block btnError" style="color:#fff;display:none;margin-top:px;"></a>
<a id="succes_cem" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;margin-top:px;display:none;"></a>

                            </div>
								

													
							<div class="col-lg-8 offset-lg-2">
                                <a id="error_wager" class="btn  btn-block btnError" style="color:#fff;display:none;margin-top:15px;"></a>
                                <a id="succes_wager" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;"></a>
                            </div>
							
						
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>			
<style>
@keyframes spinxd {
    from {
        transform:rotate(0deg);
    }
    to {
        transform:rotate(360deg);
    }
}

</style>									
<div class="modal fade text-xs-left" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
                        <h4 class="modal-title" style="font-weight:600; color:#805900;">Вывод средств</h4>
                    </div>
				
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
							        <center><h6><b>Выводы полуавтоматические</b></h6></center>
									<center><h6>Минимальная сумма для вывода - <b>50 <i class="fas fa-coins"></i></b></h6></center>
									<center><h6>Комиссия на вывод  <b>5%</b></h6></center>
								
									<center><h6>Оставь отзыв со скрином о выплате в <a href="https://vk.com/hotskinsclub" target="_blank">нашей группе ВК</a> и получи <b>5%</b> от выплаты обратно на баланс</h6></center>
						<br>
                                <h6>Cумма (<i class="fas fa-coins"></i>): </h6><h6>
								<input onkeyup="validateWithdrawSize(this)" id="WithdrawSize" class="form-control" value="50">
								</h6></div>
								</div>
								<div class="row">

<div class="col-lg-8 offset-lg-2">
											<h6>Платежная система:</h6>
                                <select class="hide-search form-control select2-hidden-accessible" id="hide_search" onchange="withdrawSelect()" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Эл. деньги">
                                        <option value="1">Qiwi (от 50p)</option>
										<option value="2">Payeer (от 50p)</option>
										<option value="3">Yandex.Money (от 50p)</option>
									</optgroup>
									<optgroup label="Банк. карты">	
									    <option value="4">VISA (от 1050р)</option>
										<option value="5">MasterCard (от 1050р)</option>
                                    </optgroup>
									<optgroup label="Криптовалюта">	
									    <option value="6">Bitcoin (от 1600р)</option>
										<option value="7">Etherium (от 1600р)</option>
                                    </optgroup>									
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-8 offset-lg-2" style="margin-top:8px">
                                <h6 id="nameWithdraw">Номер кошелька:</h6>
                                <input id="walletNumber" class="form-control" placeholder="+79...">
								<div style="margin-top: 8px;display:none" id="code_wi">
                                      <h6 id="nameWithdraw">Код с почты:</h6>
									  Письма часто уходят в отдел «Спам», не забывайте проверять этот раздел
                                      <input id="codeWid" class="form-control" placeholder="******">
                                </div>
								<br>
								<input type="checkbox" id="conf_withdraw"><label for="conf_withdraw"> Я подтверждаю правильность введеных реквизитов</label>

                            </div>
                        </div>			 
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <a id="error_withdraw" class="btn  btn-block btnError" style="color:#fff;display:none;margin-top:15px;"></a>
                                <a id="succes_withdraw" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;  margin-top:15px;display:none;">Выплата успешно создана</a>
                            </div>											
                            <div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
                                <a id="cwbutton" class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="wEmail()">
									<center><span id="withdrawB" >  Выплата</span>

                                        <div id="loader" style="display:none">
                                            <div id="dot-container">
                                                <div id="left-dot" class="white-dot"></div>
                                                <div id="middle-dot" class="white-dot"></div>
                                                <div id="right-dot" class="white-dot"></div>
                                            </div>
                                        </div>

                                    </center>
                                </a>
                            </div>
                        </div>
						
						<br>
						<h5 class="text-xs-center"> Если хотите вернуть деньги обратно на баланс, нажмите на крестик</h5>
						<br>
<div class="table-responsive">
                        <table class="table mb-0" id="withdrawTable">
                            <thead>
<th style="width:1%">Дата</th>
                                    <th style="width:62%">Описание </th>
                                    <th style="width:100%">Сумма</th>
                                    <th>Статус</th>

                                </tr>
                            </thead>
                            <tbody id="withdrawT">
                               
                           
$payouts
                         </tbody>
                        </table>						</div>
						<div id="sh"></div>
                          
                            <div class="text-xs-center">
                                <svg id="withdrawHistoryLoad" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 100 100" style="background: none;display:none">
                                    <g transform="translate(50,50)">
                                        <circle cx="0" cy="0" r="7.142857142857143" fill="none" stroke="#31444f" stroke-width="2" stroke-dasharray="22.43994752564138 22.43994752564138" transform="rotate(15.8588)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="0" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="14.285714285714286" fill="none" stroke="#465e6b" stroke-width="2" stroke-dasharray="44.87989505128276 44.87989505128276" transform="rotate(50.6171)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.16666666666666666" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="21.428571428571427" fill="none" stroke="#4c6470" stroke-width="2" stroke-dasharray="67.31984257692413 67.31984257692413" transform="rotate(92.2943)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.3333333333333333" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="28.571428571428573" fill="none" stroke="#546E7A" stroke-width="2" stroke-dasharray="89.75979010256552 89.75979010256552" transform="rotate(137.453)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.5" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="35.714285714285715" fill="none" stroke="#fff" stroke-width="2" stroke-dasharray="108.1997376282069 108.1997376282069" transform="rotate(184.948)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.6666666666666666" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                        <circle cx="0" cy="0" r="42.857142857142854" fill="none" stroke="#fff" stroke-width="2" stroke-dasharray="134.63968515384826 134.63968515384826" transform="rotate(230.652)">
                                            <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1.6s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.8333333333333334" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                    </g>
                                </svg>
                            </div>

                    </div>

                </div>
            </div>
			
        </div>

HERE;
$sql_select23 = "SELECT * FROM `ddos` WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$ffaf = $row23['ddos'];
}
if($ffaf > 0 && empty($_COOKIE['verified']))
{
	header('Location: verify.php');
}
$sql_select23 = "SELECT * FROM `offline` WHERE id='1'";
$result23 = mysqli_query($conn, $sql_select23);
$row23 = mysqli_fetch_array($result23);
if($row23)
{	
$ffaf = $row23['online'];
}
if($ffaf > 1)
{
	header('Location: maintenance.php');
}
if($prava == 1)
{
	$adm = <<<HERE
                        </li>
<button data-toggle="modal" data-target="#cases" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-box"></i><p>&nbsp;</p>Кейсы</button>
                        </li>
HERE;
}
$panel = <<<HERE
<script>
updateBalance(0,$balance);
</script>
<script>
crashx(0);
</script>
<script>
updateNumber(0);
</script>
<script>
updateCase(0);
</script>
<div data-menu="menu-container" class="navbar-container main-menu-content container center-layout">
                    <!-- include ../../../includes/mixins-->
                    <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
							<li class="dropdown nav-item " id="gg1" onclick="$('.dsec').hide();$('#lastBets').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#lastBets').offset().top);">
                            <a class="dropdown-toggle nav-link"><span><i class="fa fa-home"></i> Главная</span></a>

                        </li>
						 <li class="dropdown nav-item " id="gg" onclick="$('.dsec').hide();$('#realGame').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#realGame').offset().top);">
                            <a class="dropdown-toggle nav-link"><span><i class="fas fa-industry"></i> Честная игра</span></a>

                        </li>
						
                        <li class="dropdown nav-item " onclick="$('.dsec').hide();$('#rules').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#rules').offset().top);">
                            <a class="dropdown-toggle nav-link"><span style="color:#454545"><i class="fa fa-question"></i> FAQ</span></a>
                        </li>
						
				


						<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();$('#referals').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#referals').offset().top);">
                            <a class="dropdown-toggle nav-link"><span style="color:#454545"><i class="fas fa-user-plus"></i> Рефералы</span></a>
                        </li> 
												<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();location.href = 'https://vk.com/im?media=&message=&sel=-196560794'">
                            <a class="dropdown-toggle nav-link"><span style="color:#454545"><i class="fas fa-clipboard-list"></i> Поддержка</span></a>
                        </li> 
						
						<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();location.href = 'https://tgme.pro/hotskinsclub'">
                            <a class="dropdown-toggle nav-link"><span style="color:#ff381b"><i class="fab fa-telegram-plane"></i> Телеграм (промокоды)</span></a>
                        </li> 
						
						<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();location.href = 'https://vk.com/im?media=&message=&sel=-196560794'">
                            <a class="dropdown-toggle nav-link"><span><i class="fas fa-user-check"></i> Сотрудничество</span></a>
                        </li>
						
							
						<li id="exit" class="dropdown nav-item  style="float:right!impotant" onclick="Cookies.set('sid', '');location.href = '/';">
                            <a class="dropdown-toggle nav-link"><span style="color:#454545"><i class="fas fa-sign-out-alt"></i> Выйти</span></a>
                        </li>
						                        <script>
                            $(function() {
                                $("#main-menu-navigation  li").click(function() {
                                    
									if ($(this).attr('id') !== 'setPop' && $(this).attr('id') !== 'exit'){
										$("#main-menu-navigation  li").removeClass("active");
										$(this).toggleClass("active");
									}
                                    
                                })
                            });
                        </script>
							<button style="margin-top:12px;margin-left:15px;float:right;" class="flat_button logo_button  color3_bg" onclick="window.open('https://vk.com/hotskinsclub');"><i class="fa fa-vk"></i>  Вконтакте</button>
	
                    </ul>
                </div>

HERE;
$hashh = $_COOKIE["sid"];
$sql_select1 = "SELECT * FROM `svuti_promo` WHERE daily='1'";
$result1 = mysqli_query($conn, $sql_select1);
$row1 = mysqli_fetch_array($result1);
$act = $row1['active'];
$actlimit = $row1['activelimit'];
$promodaily = $row1['promo'];
$left = $actlimit - $act;
if($yout == 1)
{
	$yts = '<i class="fab fa-youtube danger"></i>';
}
if($deposit >= 200)
{
	$status = '<span style="color:#ff0000">[V.I.P]</span>';
}
if($deposit >= 700)
{
	$status = '<span style="color:#5273CF">[PREMIUM]</span>';
}
if($deposit >= 1000){
	$status = '<span style="color:#999966">[PRO]</span>';
}
if($prava == 1)
{
	$status = '<em><span style="color:#E13ECC">[A]</span></em>';
}
$go = <<<HERE
<div class="row" id="coinflip">
$bonusrow
<div class="col-xs-12">
														
					
<div id="dicePanel">
                                        <div class="card" style="background-color: #ced202!important;">		
<div class="card" style="height: 50px;border-radius:25px!important;background-color: #ced202!important;">
										<div class="card-header" style="border-radius:25px!important;background-color: #ced202!important;">
                                                    
                                                   
                                                     
													<div class="heading-elements">
                                                        <ul class="list-inline mb-2 font-medium-4">
                                                        </ul>
                                                    </div>
													 
                                                </div>
                                            <div class="card-body" style="margin-top: -68px;border-radius:25px!important;">
                                                <div class="row">
													<div class="p-2 text-xs-center ">
													
														<center>
													
													
													<br>
													<a onclick="#" data-toggle="modal" data-target="#tournamentPage" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;font-size:11.1199px!important"><i class="fas fa-trophy"></i>&nbsp; ТУРНИР С ПРИЗОВЫМ ФОНДОМ 5000 &nbsp;<i class="fas fa-trophy"></i></a></center>
													
													
													</div>
												</div>
												
											</div>
										</div>										
                                            <div class="card-body" style="line-height:1.7;border-radius: 6px!important;box-shadow: grey 7px 10px 23px -11px;background-color:#ffca1c">
                                              <div style="padding: 34px;"><button style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #fff;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;margin-top:-0px;color: #805900;width: auto;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" onclick="$('#dicePanel').hide();$('#gamesMenu').show();var x = $('.balfirst').html();$('#balGames').prepend(x);$('.balfirst').html('');" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-angle-double-right"></i>&nbsp;К другим режимам</button>									
												<div class="row">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 ">
													
                                                        <div class="p-1 text-xs-center mt52">
                                                            <div class="card-body"></h3> 
                                                                <center>
<script>
function balancer(){
	var userbal = $('#userBalance').attr("mybalance");
	if(userbal > 10000){
		$('#userBalance').addClass('small');
	}
	else{
		$('#userBalance').removeClass('small');
	}	
}
</script>
	
	                                                            <h2 class="display-6 blue-grey darken-1" style="text-transform: capitalize!important;"><i class="fas fa-user" data-toggle="modal" data-target="#profile" style="cursor:pointer"></i>                                                
                                                                            $status $yts $login 	<h3 class="display-4 blue-grey darken-1 balfirst"><span id="userBalance" onchange="balancer();" mybalance=" $balance"></span> <i class="fas fa-coins" style="color:#999900"></i></h3>															</h2>
                                                                    <ul class="list-inline list-inline-pipe" style="font-size:15px">
																	<button data-toggle="modal" data-target="#deposit" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;margin-top:-0px;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1">Пополнить&nbsp;<i class="fa fa-plus-circle"></i></button><button data-toggle="modal" data-target="#withdraw" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;margin-top:-0px;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-minus-circle"></i>&nbsp;Вывести</button>
																	<br>
																	<button data-toggle="modal" data-target="#promomodal" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-money"></i>&nbsp;Промокоды</button>    		<button data-toggle="modal" data-target="#getbonus" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:-1px;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-gift"></i>&nbsp;Бонус</button>  
                                                                    <br>
						  		                                    <button data-toggle="modal" data-target="#cashback" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-exchange"></i>&nbsp;Кэшбек</button>    <button data-toggle="modal" data-target="#" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;margin-top:-1px!important" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1" onclick="$('#dicePanel').hide();$('#refsTable').show();"><i class="fa fa-trophy"></i>&nbsp;ТОП</button>
                                                                   <br>
																   <button data-toggle="modal" data-target="#faucet" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;margin-left:-1px;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-money"></i>&nbsp;Кран</button> <button data-toggle="modal" data-target="#giveaway" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:1px!important;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-bullhorn"></i>&nbsp;Раздача</button> 
																   </ul>

                                                                </center>
																	
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-12 border-right-blue-grey border-right-lighten-5 border-left-blue-grey border-left-lighten-5">
                                                        <div class="p-1">

                                                            <div class="card-body" style="margin-top:2px;">

                                                                <div id="controlBet" class="row">
                                                                    <div class="col-md-6 col-xs-6">
                                                                        <div class="form-group">
                                                                            <span class="blue-grey darken-1">Сумма ставки: </span>
                                                                            <input id="BetSize" onkeyup="validateBetSize(this); updateProfit();" value="10" class="form-control text-xs-center">
                                                                            <div style="margin-top:10px;-webkit-user-select: none;" class="text-xs-center">

                                                                                <div onclick="var x = ($('#BetSize').val()*2);$('#BetSize').val(parseFloat(x.toFixed(2)));updateProfit()" class="tag tag-default">

                                                                                    <span>Удвоить</span>
                                                                                </div>
                                                                                <div onclick="$('#BetSize').val(Math.max(($('#BetSize').val()/2).toFixed(2), 0.01));updateProfit()" class="tag tag-default" style="display:inline-block;">

                                                                                    <span>Половина</span></div>
                                                                                <div onclick="var max = $('#userBalance').attr('myBalance');$('#BetSize').val(Math.max(max,0.01));updateProfit()" class="tag tag-default" style="margin-left:-13px;margin-top:3px;">

                                                                                    <span>Макс</span>
                                                                                </div>
                                                                                <div onclick="$('#BetSize').val(0.01);updateProfit()" class="tag tag-default" style="display:inline-block;">

                                                                                    <span>Мин</span>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                function validateBetSize(inp) {
																					
                                                                                    inp.value = inp.value.replace(/[,]/g, '.')
                                                                                        .replace(/[^\d,.]*/g, '')
                                                                                        .replace(/([,.])[,.]+/g, '$1')
                                                                                        .replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
                                                                                }
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-6">

                                                                        <div class="form-group">
                                                                            <span class="blue-grey darken-1 text-xs-center">Шанс выигрыша:</span>
                                                                            <input id="BetPercent" onkeyup="validateBetPercent(this);updateProfit()"class="form-control text-xs-center" value="50">
                                                                            <div style="margin-top:10px;-webkit-user-select: none;" class="text-xs-center">
																			
                                                                                <div onclick="$('#BetPercent').val(Math.min(($('#BetPercent').val()*2).toFixed(2), 85));updateProfit()" class="tag tag-default">

                                                                                    <span>Удвоить</span>
                                                                                </div>
                                                                                <div onclick="$('#BetPercent').val(Math.max(($('#BetPercent').val()/2).toFixed(2).replace(/.00/g, ''), 1));updateProfit()" class="tag tag-default" style="display:inline-block;">

                                                                                    <span>Половина</span>
                                                                                </div>
                                                                                <div onclick="$('#BetPercent').val(85);updateProfit()" class="tag tag-default" style="margin-left:-14px;margin-top:3px;">

                                                                                    <span>Макс</span>
                                                                                </div>
                                                                                <div onclick="$('#BetPercent').val(1);updateProfit()" class="tag tag-default" style="display:inline-block;">

                                                                                    <span>Мин</span>
                                                                                </div>
                                                                            </div><script>
                                                                                function validateBetPercent(inp) {
                                                                                    if (inp.value > 85) {
                                                                                        inp.value = 85;
                                                                                    }
																					

                                                                                    inp.value = inp.value.replace(/[,]/g, '.')
                                                                                        .replace(/[^\d,.]*/g, '')
                                                                                        .replace(/([,.])[,.]+/g, '$1')
                                                                                        .replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
                                                                                }
                                                                            </script>
                                                                        </div>
                                                                    </div>

                                                                </div>
																<div class="hidden-xs-down">
                                                                <div class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-1 my-1 ">
                                                                    <span>Hash игры </span>
                                                                </div>

                                                                <center style="word-wrap:break-word;padding-bottom:5px"><b id="hashBet" hid="$hid">
																$hash																	</b>
                                                                    <div id="loader_hash" style="position:relative;display:none">
                                                                        <div id="dot-container_hash">
                                                                            <div id="left-dot_hash" class="black-dot"></div>
                                                                            <div id="middle-dot_hash" class="black-dot"></div>
                                                                            <div id="right-dot_hash" class="black-dot"></div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <center>
                                                                    <cite style="cursor:pointer" onclick="$('.dsec').hide();$('#realGame').show();$('#main-menu-navigation  li').removeClass('active');$('#gg').addClass('active');">Что это?</cite>
                                                                </center>
																</div>
                                                       
                                                            </div>

                                                        </div>

                                                    </div>
													
                                                    <div id="betStart" class="col-lg-4 col-md-6 col-sm-12 ">
                                                        <div class="p-1 text-xs-center" style="margin-top:16px;">
                                                            <div>
                                                                <h3 class="display-4" style="word-wrap:break-word;"><span id="BetProfit" class="display-4 success1 " >2</span> <i class="fas fa-coins" style="color:#2BDE6D"></i></h3>
                                                               
                                                            </div>
<span class="blue-grey darken-1 " style="font-size:17px">Возможный выигрыш</span>
                                                            <div>
                                                                <h3 class="display-4" style="word-wrap:break-word;"><span id="BetX" class="display-4 success1 " >2</span><span style="color:#2BDE6D">x</span></h3>
                                                               
                                                            </div>
<span class="blue-grey darken-1 " style="font-size:17px">Коэффициент</span>
                                                            <div class="card-body">
                                                                <div class="row text-xs-center" style="padding-top:10px">
                                                                    <div class="col-md-6 col-xs-6">
                                                                        <div class="form-group">
                                                                            <span style="-webkit-user-select: none;-moz-user-select: none;" class="blue-grey darken-1 ">0 - <span id="MinRange">499999</span></span>
                                                                            <button onclick="bet('betMin');balancer();" id="buttonMin" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1">Меньше</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-6">

                                                                        <div class="form-group">
                                                                            <span style="-webkit-user-select: none;-moz-user-select: none;" class="blue-grey darken-1  "><span id="MaxRange">500000</span> - 999999</span>
                                                                            <button onclick="bet('betMax');balancer();" type="button" id="buttonMax" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1">Больше</button>

                                                                        </div>
                                                                    </div>

                                                                </div>
																
												<center><div id="betLoad" class="cssload-loader" style="background: none;display:none;">
												  <div class="cssload-inner cssload-one"></div>
												  <div class="cssload-inner cssload-two"></div>
												  <div class="cssload-inner cssload-three"></div>
												</div></center>
                                                                <a id="error_bet" class="btn  btn-block btnError" style="color:#fff;display:none;"></a>
                                                                <a id="succes_bet" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;   margin-top: 0rem; display:none;"></a>

                                                            </div>
												  <center style="padding: 0.4rem!important;">
                                                                <a id="checkBet" data-toggle="modal" data-target="#checkDiceModal" style="display:none;-webkit-user-select: none;-moz-user-select: none;" class="blue-grey darken-1 " href="#">Проверить игру</a>
                                                            </center>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
						</div>
						</div>
<div id="gamesMenu" style="display:none">
<div class="card" style="background-color: transparent!important;">						
                                            <div class="card-body" style="line-height:1.7;border-radius: 6px!important;box-shadow: grey 7px 10px 23px -11px;direction: ltr;background: radial-gradient(circle farthest-side at 0 0,rgba(255,202,28,.3) 0,rgba(255,202,28,0) 100%);">
												<div class="row">
<br>
<br>												
    <center>
         <div style="justify-content: center;text-align: center;">
    <h4>Выберите режим</h4><br>
	<h3><b><div id="balGames"></div></b><h3>
<button style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #F5AB00;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900;margin-top:-1px;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width: 140px;font-weight:600;text-align: center;" onclick="$('#dicePanel').show();$('#gamesMenu').hide();var x = $('#balGames').html();$('.balfirst').prepend(x);$('#balGames').html('');" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-angle-double-left"></i>&nbsp;На главную</button><br>	
<br>
<button data-toggle="modal" data-target="#cases" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-box"></i><p>&nbsp;</p>Кейсы</button>
<button data-toggle="modal" data-target="#slot" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-trophy"></i><p>&nbsp;</p>Слоты</button>
<button data-toggle="modal" data-target="#double" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-circle-o"></i><p>&nbsp;</p>Рулетка</button>
<button data-toggle="modal" data-target="#coinsflip" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-dollar"></i><p>&nbsp;</p>Монетка</button><br>
<button data-toggle="modal" data-target="#guessCard" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-redo"></i><p>&nbsp;</p>Угадай карту</button>

<button data-toggle="modal" data-target="#diceRoll" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-dice-three"></i><p>&nbsp;</p>Кости</button>
<button data-toggle="modal" data-target="#crashGame" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-arrow-alt-circle-up"></i><p>&nbsp;</p>Краш</button>
<button data-toggle="modal" data-target="#chests" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-box"></i><p>&nbsp;</p>Сундучки</button><br>
<button data-toggle="modal" data-target="#lowerupper" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-arrows-alt-v"></i><p>&nbsp;</p>Угадай число</button>
<button data-toggle="modal" data-target="#upgradeGame" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-arrow-up"></i><p>&nbsp;</p>Upgrade</button>

<button data-toggle="modal" data-target="#rpsGame" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-hand-rock"></i><p>&nbsp;</p>КНБ</button>
<button data-toggle="modal" data-target="#thimblesGame" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-dot-circle"></i><p>&nbsp;</p>Наперстки</button>
<br>
<button data-toggle="modal" data-target="#bombaGame" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-bomb"></i><p>&nbsp;</p>Defuse</button>
<button data-toggle="modal" data-target="#bjGame" id="openGame" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #F5AB00; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; margin-top:-1px;cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width:108px;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-user-tie"></i><p>&nbsp;</p>Blackjack</button>

<br>
<br>
<br>
</div>
    </center>
</div>

                                                </div>
                                            </div>
                                        </div>										
                                    </div>
                                </div>                    
</div>	

<div id="refsTable" style="display:none">
<div class="card" style="background-color: transparent!important;">						
   <div class="card-body" style="line-height:1.7;border-radius: 6px!important;box-shadow: grey 7px 10px 23px -11px;direction: ltr;background: radial-gradient(circle farthest-side at 0 0,rgba(255,202,28,.3) 0,rgba(255,202,28,0) 100%);">
	<div class="row">
<br>	
<center><button style="-webkit-box-align: center;-ms-flex-align: center;align-items: center;background-color: #F5AB00;border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900;margin-top:-1px;cursor: pointer;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;height: 3rem;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;width: 140px;font-weight:600;text-align: center;" onclick="$('#dicePanel').show();$('#refsTable').hide();" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-angle-double-left"></i>&nbsp;На главную</button></center>
<br>	
<center><h4 style="font-size: 14px;font-weight:600">Зачисление призов и обнуление таблицы происходит каждый день в 21:00 по МСК</h4></center>	
<center><h4 style="font-size: 14px;font-weight:600">* считаются те рефы, которые привязали свой ВК</h4></center>	
<br>
<center><h4 style="font-size: 14px;font-weight:600">#1 Место - 150 <i class="fas fa-coins"></i><br>#2 Место - 125 <i class="fas fa-coins"></i><br>#3 Место - 100 <i class="fas fa-coins"></i></h4></center>	
<br>
<center><h4>До окончания: <span id="timer-ref"></span></h4></center>
<br>
<center><h3>Ежедневный ТОП Рефоводов</h3></center>
<table class="table table-responsive" style="border-radius:6px">
	<thead>
	<tr>
	    <td class="tabler">Место</td>
		<td class="tabler">Логин</td>
		<td class="tabler">Рефов</td>
		<td class="tabler">Приз</td>
	</tr>
	</thead>
	<tbody style="font-size:14px">
          $xd1
    </tbody>
</table>	
</div>
    </center>
</div>

      </div>
</div>								                                                
<div class="row" id="crash" style="display:none;">
																$bonusrow
									                                   <div class="col-xs-12">
$bonus10

                                        <div class="card-coin" style="">
                                            <div class="card-body" style="line-height:1.7;border-radius: 6px!important;box-shadow: grey 7px 10px 23px -11px;background-color:#ffca1c">
												<div class="row">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 ">  
                                                                    </ul>

                                                                </center>
																	
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="p-1 text-xs-center mt52">
                                                            <h2 class="display-6 blue-grey darken-1" style="text-transform: capitalize!important;"><i class="fas fa-user" data-toggle="modal" data-target="#profile" style="cursor:pointer"></i>                                                
                                                                            $status $yts $login </h2>
                                                            <h3 class="display-4 blue-grey darken-1"><button data-toggle="modal" data-target="#deposit" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:3px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1">+</button><span id="userBalance" mybalance=" $balance"> S</span> <button data-toggle="modal" data-target="#withdraw" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:3px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1">-</button></h3>
                                                            <div class="card-body">
                                                                <center>
															
                                                                    <ul class="list-inline list-inline-pipe" style="font-size:15px">
				 
																		<br>
		
		
                                                                    </ul>

                                                                </center>
																	
                                                            </div>
															<br>
															<br>
															<br>
																															<center><h4><b>АКТИВНЫЕ ИГРЫ</b></h4></center>
																															
												<center><div id="betLoad" class="cssload-loader" style="background: none;display:none;">
												  <div class="cssload-inner cssload-one"></div>
												  <div class="cssload-inner cssload-two"></div>
												  <div class="cssload-inner cssload-three"></div>
												</div></center>
                                                                <a id="error_bet" class="btn  btn-block btnError" style="color:#fff;display:none;"></a>
                                                                <a id="succes_bet" class="btn  btn-block btnSuccess" style="color:#fff; cursor:default;   margin-top: 0rem; display:none;"></a>

                                                            </div>
												  <center style="padding: 0.4rem!important;">
                                                                <a id="checkBet" data-toggle="modal" data-target="#checkDiceModal" style="display:none;-webkit-user-select: none;-moz-user-select: none;" class="blue-grey darken-1 " href="#" target="_blank">Проверить игру</a>
                                                            </center>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                       
                           
HERE;
}
else
{
	setcookie('sid', "login failed", time()- 10000);
	//setcookie('login', "", time()- 10000);
	$panel = <<<HERE

<div data-menu="menu-container" class="navbar-container main-menu-content container center-layout">
                    <!-- include ../../../includes/mixins-->
                    <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
                        <li class="dropdown nav-item active" onclick="$('.dsec').hide();$('#lastBets').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#lastBets').offset().top);">
                            <a class="dropdown-toggle nav-link"><span>Главная</span></a>

                        </li>

                        <li class="dropdown nav-item " onclick="$('.dsec').hide();$('#rules').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#rules').offset().top);">
                            <a class="dropdown-toggle nav-link"><span>Как играть</span></a>
                        </li>

												<li class="dropdown nav-item " onclick="$('.dsec').hide();$('#contacts').show();$(document.body).removeClass('menu-open');$(window).scrollTop($('#contacts').offset().top);">
                            <a class="dropdown-toggle nav-link"><span>Контакты</span></a>
                        </li>
						
						<li class="dropdown nav-item " style="float:right!impotant" onclick="$('.dsec').hide();location.href = 'https://tgme.pro/hotskinsclub'">
                            <a class="dropdown-toggle nav-link"><span style="color:#ff381b"><i class="fas fa-clipboard-list"></i> Телеграм (промокоды)</span></a>
                        </li> 
						
                    </ul>
                </div>

HERE;

$go = <<<HERE
	
					                         <div class="row">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-body" style="box-shadow: rgba(210, 215, 222, 0.5) 7px 10px 23px -11px">
                                        <div class="row">
                                            <div class="col-lg-6  col-md-12 col-sm-12 ">
                                                <div id="what-is" class="card"  style="background-color:#ffca1c">
                                                    <div  class="card-header"  style="background-color:#ffca1c">
                                                        <h4 class="card-title"><b>Что такое HOTSKINS?</b></h4>

                                                    </div>
                                                    <div class="card-body collapse in">
                                                        <div class="card-block">
                                                            <div class="card-text">
                                                                <p style="font-size:15.5px">Сервис мгновенных игр, где шанс выигрыша указываете сами. Вывод от 50р за 10 минут</p>
                                                                  <ul>
																    <li>Быстрые выплаты</li>
																	<li>5 р. за каждого реферала</li>
                                                                    <li>Денежный бонус каждые 15 минут</li>
																	<li>14 игровых режимов</li>
                                                                    <li>Проверяйте на честность любую игру</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6  col-md-12 col-sm-12 ">
                                                <div id="login">
                                                    
                                                    <div class="col-lg-10 offset-lg-1">
													<div class="card-header no-border pb-0" style="background-color:#ffca1c">
                                                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span style="font-size:17px"> Авторизация </span></h6>
                                                    </div>
                                                        <div class="card-body collapse in">
                                                            <div class="card-block">
                                                                <form class="form-horizontal">
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control form-control-md input-md" id="userLogin" value="" placeholder="Логин"  >
                                                                        <div class="form-control-position">
                                                                            <i class="ft-user"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="password" class="form-control form-control-md input-md" id="userPass" placeholder="Пароль">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
                                                                        </div>
                                                                    </fieldset>
																	<div style="padding-bottom:11px" class="g-recaptcha" data-sitekey=""></div>
																
                                                                    <a id="error_enter" class="btn  btn-block btnError" style="color:#fff;display:none"></a>

                                                                    <a id="enter_but" onclick="login()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px">
                                                                        <center><span id="text_enter"> <i class="ft-unlock"></i>  Войти</span>

                                                                            <div id="loader" style="position:absolute">
                                                                                <div id='dot-container' style='display:none'>
                                                                                    <div id="left-dot" class='white-dot'></div>
                                                                                    <div id='middle-dot' class='white-dot'></div>
                                                                                    <div id='right-dot' class='white-dot'></div>
                                                                                </div>
                                                                            </div>

                                                                        </center>
                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer no-border" style="margin-top:-12x">
                                                            <p class="float-sm-left text-xs-center"><a onclick="register_show()" class="card-link">Регистрация</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="register" style="display:none">
                                                   
                                                    <div class="col-lg-10 offset-lg-1">
													 <div class="card-header no-border pb-0" >
                                                        <h6  class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span style="font-size:17px">Регистрация </span></h6>
                                                    </div>
                                                        <div class="card-body collapse in">
                                                            <div class="card-block">
                                                                <form class="form-horizontal" >
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control form-control-md input-md" id="userLoginRegister" placeholder="Логин">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-user"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="email" class="form-control form-control-md input-md" id="userEmailRegister" placeholder="E-mail">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-mail"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="password" class="form-control form-control-md input-md" id="userPassRegister" placeholder="Пароль">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
                                                                        </div>
                                                                    </fieldset>
																	<fieldset style="padding-bottom: 7px;">
																		<label class="check1">
																		  <input id="rulesagree" type="checkbox"/>
																		  <div class="box1"></div>
																		 
																		 
																		</label>
																		 <div style="display:inline-block;padding-left:10px;position:absolute">Согласен c <u data-toggle="modal" data-target="#large" style="cursor:pointer">правилами</u></div>
																	</fieldset>
																	<div style="padding-bottom:11px" class="g-recaptcha" data-sitekey=" "></div> 
                                                                    <a id="error_register" class="btn  btn-block btnError" style="color:#fff;display:none"></a>
                                                                    <a onclick="emReg()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px">
                                                                        <center><span id="text_register"><i class="ft-check"></i> Зарегистрироваться</span>

                                                                            <div id="loader_register" style="position:absolute">
                                                                                <div id='dot-container_register' style='display:none'>
                                                                                    <div id="left-dot_register" class='white-dot'></div>
                                                                                    <div id='middle-dot_register' class='white-dot'></div>
                                                                                    <div id='right-dot_register' class='white-dot'></div>
                                                                                </div>
                                                                            </div>

                                                                        </center>
                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="card-footer no-border" style="margin-top:-12px">
                                                            <p class="float-sm-left text-xs-center"><a onclick="login_show()" class="card-link">Есть аккаунт</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="reset" style="display:none">
                                                    
                                                    <div class="col-lg-10 offset-lg-1">
													<div class="card-header no-border pb-0">
                                                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span style="font-size:17px">Вспомнить пароль</span></h6>
                                                    </div>
                                                        <div class="card-body collapse in">
                                                            <div class="card-block">
                                                             
                                                                    <fieldset class="form-group position-relative has-icon-left">
                                                                        <input type="text" class="form-control form-control-md input-md" id="loginemail" placeholder="Логин или E-mail">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-search"></i>
                                                                        </div>
                                                                    </fieldset>
																	<div style="padding-bottom:11px" class="g-recaptcha" data-sitekey=" "></div> 
                                                                    <a id="error_reset" class="btn  btn-block btnError" style="color:#fff;display:none"></a>
                                                                    <a id="reset_success" class="btn  btn-block btnSuccess" style="color:#fff;display:none"></a>
                                                                    <a  id="reset_but" onclick="reset_password()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px">

                                                                        <center><span id="text_reset"><i class="ft-check"></i> Вспомнить</span>

                                                                            <div id="loader_reset" style="position:absolute">
                                                                                <div id='dot-container_reset' style='display:none'>
                                                                                    <div id="left-dot_reset" class='white-dot'></div>
                                                                                    <div id='middle-dot_reset' class='white-dot'></div>
                                                                                    <div id='right-dot_reset' class='white-dot'></div>
                                                                                </div>
                                                                            </div>

                                                                        </center>
                                                                    </a>                                                               
                                                            </div>
                                                        </div>
 
                                                        <div class="card-footer no-border" style="margin-top:-12px;background-color:#ffca1c">
                                                            <p class="float-sm-left text-xs-center"><a onclick="login_show()" class="card-link">Есть аккаунт</a></p>
                                                            <p class="float-sm-right text-xs-center"><a onclick="register_show()" class="card-link">Регистрация </a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						       </div>
HERE;
	
}
}

?>