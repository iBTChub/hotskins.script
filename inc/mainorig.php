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
                                                                <p style="font-size:15.5px">Сервис мгновенных игр, где шанс выигрыша указываете сами. Вывод от 50р </p>
                                                                <ul>
																    <li>Быстрые выплаты без депозита</li>
																	<li>2.5 р. за каждого реферала</li>
                                                                    <li>Денежный бонус каждые 15 минут</li>
																	<li>13 игровых режимов</li>
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
                                                                    <a onclick="register1()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px;">   
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
                                                                        <input type="text" class="form-control form-control-md input-md" id="loginemail" placeholder="Логин аккаунта">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-search"></i>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="form-group position-relative has-icon-left" style="margin-top:5px">
                                                                        <input type="password" class="form-control form-control-md input-md" id="reset_secretcode" placeholder="Секретный код">
                                                                        <div class="form-control-position">
                                                                            <i class="ft-lock"></i>
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

$code = strToHex(encode($salt1.$number.$salt2, '2Q$8s('));
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

if($secretC == ""){
$security_modal = <<< HERE
<div class="modal fade text-xs-left" id="securityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header" style="">
										                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ft-x"></i></span>
                        </button>
											<h4 class="modal-title" style="font-weight:600; color:#805900;">Обезопасьте ваш аккаунт!</h4>
										  </div>
										  <div class="modal-body">
										  <div class="row">
											<div class="col-lg-8 offset-lg-2" style="margin-top:8px">
											
<h6>В случае утери аккаунта, Вы сможете восстановить данные с помощью <b>секретного кода</b></h6>
<h6>Установив секретный код, вы сможете обезопасить Ваш аккаунт от нежелательных попыток взлома.</b></h6>
<h6>Пожалуйста, установите код безопасности в профиле.</b></h6>
<br>
<h6><b><center>Профиль находится здесь</center></b></h6>
<center><img src="https://cdn.discordapp.com/attachments/583417546317758484/659431727554494467/unknown.png"></img></center>
                            </div>						
										  </div>
										  
										  </div>
										 
										</div>
									  </div>
									</div>	
<script>
setTimeout(function(){
$('#securityModal').modal('toggle');
}, 100);
</script>									
HERE;
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
	$sql_select3 = "SELECT * FROM `svuti_payout` WHERE user_id='".$userid."' ORDER BY data DESC";
$result3 = mysqli_query($conn, $sql_select3);
$row3 = mysqli_fetch_array($result3);
do
{
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
	if($row3['status'] == "Выплачено")
	{
		$tag = "success";
		$s = "";
		$i = '<i class="fa fa-check"></i> ';
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
							<td><div class="tag tag-'.$tag.'">'.$i.$row3['status'].' </div></td>

							</tr>';
							$tag = "";
}
while($row3 = mysqli_fetch_array($result3));

}
//go
$modal = <<<HERE
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
											<h5 class="text-xs-center"><span>- Бонус от 1.00 до 10.00 <i class='fas fa-coins'></i></span></h5>
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
											<h5 class="text-xs-center" style="font-size:14px">Учитываются 5 последних постов (откройте аккаунт VK)</h5>
											<h5 class="text-xs-center"><span>За лайк - 1.25 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span>За репост - 2.55 <i class='fas fa-coins'></i></span></h5>
											<h5 class="text-xs-center"><span>Суммарно, за лайк и репост 5 последних постов в группе - 19 <i class='fas fa-coins'></i></span></h5>
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
								
							<div class="col-lg-4 offset-lg-4" style="margin-top:15px;margin-bottom:18px">
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="person()">
                                   <span>  Передать</span>
                                </a>
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
<button data-toggle="modal" data-dismiss="modal" data-target="#changeSecret" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; display:none; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:-1px;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-lock"></i>&nbsp;Сменить секретный код</button>


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
									<center><h6>Минимальная сумма для вывода - <b>50 <i class="fas fa-coins"></i></b></h6></center>
									<center><h6>Комиссия на вывод  <b>5%</b></h6></center>
									<center><h6>Депозит для вывода составляет - <b>50 <i class="fas fa-coins"></i></b></h6></center>
									<center><h6>Банк для бездепозитных выплат - <b><span id="refresh">$bonbank</span> <i class="fas fa-coins"></i> <i class="fa fa-refresh spinxd" style="cursor:pointer" onclick="updateBonusBank();"></i></b></h6></center>
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
                                <a class="btn  btn-block  " style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;border-radius: 1.125rem;color: #805900; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;padding: 0 2rem;font-weight:600;text-align: center;" onclick="withdraw()">
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
                                        <div class="card" style="">						
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
						  		                                    <button data-toggle="modal" data-target="#cashback" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fa fa-exchange"></i>&nbsp;Кэшбек</button>   		<button data-toggle="modal" data-target="#toperson" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:-1px;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-arrow-right"></i>&nbsp;Передать</button>  
                                                                   <br>
																   <button data-toggle="modal" data-target="#faucet" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;margin-left:-1px;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-money"></i>&nbsp;Кран</button> <button data-toggle="modal" data-target="#giveaway" style="    -webkit-box-align: center;-ms-flex-align: center; align-items: center; background-color: #fff; border: none;-webkit-box-shadow: 0 0.25rem 0 0 #f5ab00;box-shadow: 0 0.25rem 0 0 #f5ab00;color: #805900; width:108px; cursor: pointer; display: -webkit-inline-box;display: -ms-inline-flexbox; display: inline-flex;height: 3rem; -webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;font-weight:600;margin-top:-1px;text-align: center;" type="button" class="bg-blue-grey bg-lighten-2  btn  btn-block mr-1 mb-1"><i class="fas fa-bullhorn"></i>&nbsp;Раздача</button> 
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
                                                                <a id="checkBet" style="display:none;-webkit-user-select: none;-moz-user-select: none;" class="blue-grey darken-1 " href="" target="_blank">Проверить игру</a>
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
                                                                <a id="checkBet" style="display:none;-webkit-user-select: none;-moz-user-select: none;" class="blue-grey darken-1 " href="" target="_blank">Проверить игру</a>
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
                                                                <p style="font-size:15.5px">Сервис мгновенных игр, где шанс выигрыша указываете сами. Вывод от 50р </p>
                                                                  <ul>
																    <li>Быстрые выплаты без депозита</li>
																	<li>2.5 р. за каждого реферала</li>
                                                                    <li>Денежный бонус каждые 15 минут</li>
																	<li>13 игровых режимов</li>
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
                                                                    <a onclick="register1()" class="btn   btn-block btnEnter" style="color:#fff;margin-bottom:5px">
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