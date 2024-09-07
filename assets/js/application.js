var type_game = 0;
color = ["", "card_dark__1KpX3"];
let suit = ['icon-spade', 'icon-heart', 'icon-club', 'icon-diamond'];
var URL_SERVER = 'https://hotcase.club:8443';  
var socket = null;
window.onerror = null;

$(function() {

    window.history.replaceState(null, null, window.location.pathname);
    $('#MinRange').html(Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#MaxRange').html(999999 - Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#BetProfit').html(((100 / $('#BetPercent').val()) * $('#BetSize').val()).toFixed(2));
    $('#BetX').html(((100 / $('#BetPercent').val())).toFixed(2));
	$('#upgradeCef').html((($('#upgradeWin').val() / $('#BetSizeUpgrade').val())).toFixed(2));
	$('#upgradeChance').html(((100 / $('#upgradeCef').html())).toFixed(2));
	
	
    var socket = io.connect(URL_SERVER);
	socket.on('connect', function (socket) {
       console.log('РЎРѕРµРґРёРЅРµРЅРёРµ СѓСЃС‚Р°РЅРѕРІР»РµРЅРѕ!');	  	   
	});
	
	socket.on('getLenta', function(data) {
		var update = data.data;
		$('#pidor').prepend(update);
        $('#pidor').children().slice(10).remove();
    });
	
	socket.on('counter', function (data) {
        $(".oncount").html(data.data);
    });
	
	cont();
	
if(window.matchMedia("(max-width: 767px)").matches){
document.addEventListener('click', function() {
	
    if ($('#games-id').is(":hidden")) {
        var property = 'yes';
    } else {
        var property = 'no';
    }
    if (property == "yes") {
        $("#tyrik").hide();
    } else {
        $("#tyrik").show();
    }
});
}	
	
});


function userGetInfo(login) {
	    $("#checkUser").html(login);
        $.ajax({
            type: 'POST',
            url: 'checker.php',	
            beforeSend: function() {
				$("#betAmount-stat").html("<img src='https://hotskins.club/files/loader.gif'>");
				$("#bets-stat").html("<img src='https://hotskins.club/files/loader.gif'>");
				$("#bwin-stat").html("<img src='https://hotskins.club/files/loader.gif'>");
				$("#dreg").html("<img src='https://hotskins.club/files/loader.gif'>");
				$("#coeff-stat").html("<img src='https://hotskins.club/files/loader.gif'>");
			},					
            data: {
                login: login,
            },
            success: function(data) {
				console.log(data);
                var obj = jQuery.parseJSON(data);
                if (obj.success == "success") {
					$("#betAmount-stat").html(parseFloat(obj.betAmount).toFixed(2));
					$("#bets-stat").html(obj.gamesPlayed);
					$("#bwin-stat").html(obj.bestWin);
					$("#dreg").html(obj.dreg);
					$("#coeff-stat").html(obj.bestCoeff);
                }
				else {
					$("#betAmount-stat").html("ОШИБКА!");
					$("#bets-stat").html("ОШИБКА!");
					$("#dreg").html("ОШИБКА!");
					$("#bwin-stat").html("ОШИБКА!");
					$("#coeff-stat").html("ОШИБКА!");
                }
            }
        });
}

function lem(){
        $.ajax({
            type: 'POST',
            url: 'action.php',
            beforeSend: function() {
                 $('#error_cem').css('display', 'none');	
				 $('#succes_cem').css('display', 'none');	
			},				 
            data: {
                type: "lem",
                code: $("#emConnect").val(),
            },
            success: function(data) {
				console.log(data);
                var obj = jQuery.parseJSON(data);
                if (obj.success == "success") {
					$('#succes_cem').show();
					$('#succes_cem').html("Вы успешно подтвердили почту!");
					$("#box-em").hide();
                } else {
                    $('#error_cem').html(obj.error);
                    $('#error_cem').show();
                }
            }
        });
}

function pizdak(type) {

        $.ajax({
            type: 'POST',
            url: 'action.php',
            beforeSend: function() {
                 $('#succes_bomba').css('display', 'none');	
				 $('#error_bomba').css('display', 'none');	
				 $('#betbuttonsBomba').css('display', 'none');	
				 $("#hashPanel-bomba").css('display', 'none');	
			},				
            data: {
                type: "betBomba",
                sid: Cookies.get('sid'),
                where: type,
                bet: $("#BetSizeBomb").val(),
            },
            success: function(data) {
				console.log(data);
                var obj = jQuery.parseJSON(data);
                if (obj.success == "success") {
					$("#hashPanel-bomba").show();
				    $("#hash-bomba").html(obj.hashGame);
					$("#win_pos").html(obj.numberGame);
					$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);
				    $('#betbuttonsBomba').show();
					if(obj.winSum > 0){
					   $('#succes_bomba').show();			
					   $('#succes_bomba').html("Бомба обезврежена!<br>Вы выиграли <b>"+parseFloat(obj.winSum).toFixed(2)+" <i class='fas fa-coins'></i></b>");	
					}
					else{
					   $('#error_bomba').show();
					   $('#error_bomba').html("К сожалению, вы проиграли!");
					}
					$('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }
				else {
                    $('#error_bomba').show();
					$('#betbuttonsBomba').show();
                    $('#error_bomba').html(obj.error);
                }
            }
        });
}

function validateBetSize(inp) {																			
   inp.value = inp.value.replace(/[,]/g, '.')
   .replace(/[^\d,.]*/g, '')
   .replace(/([,.])[,.]+/g, '$1')
   .replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
}

function validateBetPercent(inp) {
     if (inp.value > 85) {
         inp.value = 85;
     }
																					
     inp.value = inp.value.replace(/[,]/g, '.')
       .replace(/[^\d,.]*/g, '')
       .replace(/([,.])[,.]+/g, '$1')
       .replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
}
																				
function linkEmail(){
	
        $.ajax({
            type: 'POST',
            url: 'action.php',
            beforeSend: function() {
                 $('#error_cem').css('display', 'none');	
				 $('#succes_cem').css('display', 'none');	
			},				 
            data: {
                type: "linkEm",
                email: $("#emConnect").val(),
            },
            success: function(data) {
				console.log(data);
                var obj = jQuery.parseJSON(data);
                if (obj.success == "success") {
					$('#succes_cem').show();
					$('#succes_cem').html("Проверочный код был отправлен на почту.");
					$("#lemail").attr("onclick", "lem()");
					$("#lemail").html("Подтвердить");
					$("#cmm").html("Введите код с почты:<br>(Письма часто уходят в отдел «Спам», не забывайте проверять этот раздел)");
					$("#emConnect").attr("placeholder", "******");
					$("#emConnect").val("");
                } else {
                    $('#error_cem').html(obj.error);
                    $('#error_cem').show();
                }
            }
        });
}

function emReg(){
	
    if ($('#userLoginRegister').val().length < 4) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Логин может состоять минимум из 4 символов', showConfirmButton: true, showCloseButton: true})
    }
    if ($('#userEmailRegister').val() == '') {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Введите Email!'})
    }
    if (!isValidEmailAddress($('#userEmailRegister').val())) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Введите корректный Email'})
    }
    if ($('#userPassRegister').val() == '') {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Введите пароль!'})
    }
    if ($('#userPassRegister').val().length < 5) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Пароль от 5 символов!'})
    }
    if (!$("#rulesagree").prop('checked')) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Согласитесь с правилами!'})
    }
    if ($('#userLoginRegister').val() == $('#userPassRegister').val()) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Пароль не может состоять из логина!'})
    }
	
	if ($("#g-recaptcha-response-1").val() == ""){
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Подтвердите капчу!'})
    } else {
        $.ajax({
            type: 'POST',
            url: 'action.php',
            beforeSend: function() {
                 $('#error_register').css('display', 'none');	
			},				 
            data: {
                type: "emReg",
                email: $("#userEmailRegister").val(),
				login: $("#userLoginRegister").val(),
            },
            success: function(data) {
				console.log(data);
                var obj = jQuery.parseJSON(data);
                if (obj.success == "success") {
					$("#mail-ad").html($("#userEmailRegister").val());
                    $("#verifyMail").modal("toggle");
					$("#createAccount").modal("hide");
                } else {
                    Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error})
                }
            }
        });
	}
}


function register_show() {
    $('#login').hide();
    $('#reset').hide();
    $("#register").fadeIn("slow", function() {});
}

function login_show() {
    $('#register').hide();
    $('#reset').hide();
    $("#login").fadeIn("slow", function() {});
}

function reset_show() {
    $('#login').hide();
    $('#register').hide();
    $("#reset").fadeIn("slow", function() {});
}			

function getContent(timestamp) {
    var queryString = {
        'timestamp': timestamp
    };

    $.ajax({
        type: 'GET',
        url: 'longpool/server/server.php?rr=',
        data: queryString,
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.data_from_file != "") {
                $('#response').html(obj.data_from_file);
            }

            getContent(obj.timestamp);
        }
    });
}
document.addEventListener("DOMContentLoaded", () => {
window.renderRecaptchas = function() {
    var recaptchas = document.querySelectorAll('.g-recaptcha');
    for (var i = 0; i < recaptchas.length; i++) {
        grecaptcha.render(recaptchas[i], {
            sitekey: recaptchas[i].getAttribute('data-sitekey')
        });
    }
}
});
$(function() {
    $("#main-menu-navigation  li").click(function() {

        if ($(this).attr('id') !== 'setPop' && $(this).attr('id') !== 'exit') {
            $("#main-menu-navigation  li").removeClass("active");
            $(this).toggleClass("active");
        }

    })
});
var input3 = document.getElementById('userLogin'),
    value = input3.value;

input3.addEventListener('input', onInput);

function onInput(e) {
    var newValue = e.target.value;
    if (newValue.match(/[^a-zA-Z0-9]/g)) {
        input3.value = value;
        return;
    }
    value = newValue;
}
$('#userLogin').keydown(function(event) {
    if (event.which === 13) {
        login();

    }
});
$('#userPass').keydown(function(event) {
    if (event.which === 13) {
        login();

    }
});

function updateBonusBank() {
    if (navigator.onLine) {
        $.ajax({
            url: 'bonrefresh.php',
            timeout: 10000,
            success: function(data) {
                var obj = jQuery.parseJSON(data);
				$(".spinxd").css("animation-name", "spin");
				$(".spinxd").css("animation-duration", "500ms");
				$(".spinxd").css("animation-iteration-count", "0.5s");
				$(".spinxd").css("animation-timing-function", "0.5s");
				setTimeout(function(){
				$(".spinxd").css("animation-name", "");
				$(".spinxd").css("animation-duration", "");
				$(".spinxd").css("animation-iteration-count", "");
				$(".spinxd").css("animation-timing-function", "");					
				}, 500);
                $("#refresh").html(obj.bank);
            },
            error: function() {}
        });
    } else {}
}


function historyw() {
    if (navigator.onLine) {
        $.ajax({
            url: 'cored.php',
            timeout: 10000,
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                $("#response2").prepend(obj.withdrawal);
                $('#response2').children().slice(20).remove();
            },
            error: function() {}
        });
    } else {}
}
document.addEventListener("DOMContentLoaded", () => {
   setTimeout(historys, 30000);
   //setInterval(historyw, 5000);
});

function login() {
    if ($('#userLogin').val().length < 4) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Логин от 4 символов!"})
    }
    if ($('#userPass').val() == '') {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Введите пароль!"})
    }
	
    var captcha = grecaptcha.getResponse();

    if (!captcha.length) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Пройдите капчу!"})
    } else {	
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_enter').css('display', 'none');
            $('#loader').css('position', '');
            $('#enter_but').css('pointer-events', 'none');
            $('#dot-container').css('display', '');
            $('#text_enter').css('display', 'none');
            $('#text_enter').css('display', 'none');
        },
        data: {
            type: "login",
            login: $('#userLogin').val(),
            pass: $('#userPass').val(),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                Cookies.set('sid', obj.sid, {
                    expires: 365,
                    path: '/',
                    secure: true
                });
                Cookies.set('uid', obj.uid, {
                    expires: 365,
                    path: '/',
                    secure: true
                });
                Cookies.set('login', $('#userLogin').val(), {
                    expires: 365,
                    path: '/',
                    secure: true
                });
                window.location.href = '';
                // return false;
            } else {
                $('#enter_but').css('pointer-events', '');
                $('#loader').css('position', 'absolute');
                $('#dot-container').css('display', 'none');
                $('#text_enter').css('display', 'block');
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error})
                $('#error_enter').show();
            }


        }
    });
	}

}
$('#userLoginRegister').keydown(function(event) {
    if (event.which === 13) {
        register1();

    }
});
$('#userEmailRegister').keydown(function(event) {
    if (event.which === 13) {
        register1();

    }
});
$('#userPassRegister').keydown(function(event) {
    if (event.which === 13) {
        register1();

    }
});
var input = document.getElementById('userLoginRegister'),
    value = input.value;

input.addEventListener('input', onInput);

function onInput(e) {
    var newValue = e.target.value;
    if (newValue.match(/[^a-zA-Z0-9]/g)) {
        input.value = value;
        return;
    }
    value = newValue;
}

var input2 = document.getElementById('userEmailRegister'),
    value = input2.value;

input2.addEventListener('input', onInput1);

function onInput1(e) {
    var newValue = e.target.value;
    if (newValue.match(/[^a-zA-Z0-9@.-_-]/g)) {
        input2.value = value;
        return;
    }
    value = newValue;
}

function isValidEmailAddress(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,5})(\]?)$/;
    return expr.test(email);
};

function register1() {
    if ($('#userLoginRegister').val().length < 4) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Логин может состоять минимум из 4 символов', showConfirmButton: true, showCloseButton: true})
    }
    if ($('#userEmailRegister').val() == '') {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Введите Email!'})
    }
    if (!isValidEmailAddress($('#userEmailRegister').val())) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Введите корректный Email'})
    }
    if ($('#userPassRegister').val() == '') {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Введите пароль!'})
    }
    if ($('#userPassRegister').val().length < 5) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Пароль от 5 символов!'})
    }
    if (!$("#rulesagree").prop('checked')) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Согласитесь с правилами!'})
    }
    if ($('#userLoginRegister').val() == $('#userPassRegister').val()) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Пароль не может состоять из логина!'})
    }
	
    var captcha = grecaptcha.getResponse();

    if ($("#g-recaptcha-response-1").val() == ""){
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:'Вы не прошли капчу!'})
    } else {
		$.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_register').css('display', 'none');
            $('#loader_register').css('position', '');
            $('#enter_but').css('pointer-events', 'none');
            $('#dot-container_register').css('display', '');
            $('#text_register').css('display', 'none');

        },
        data: {
            type: "register",
            login: $('#userLoginRegister').val(),
            pass: $('#userPassRegister').val(),
            email: $('#userEmailRegister').val(),
			emCode: $('#codeE').val(),
            ref: Cookies.get('ref')
        },
        success: function(data) {
			console.log(data);
            $('#enter_but').css('pointer-events', '');
            var obj = jQuery.parseJSON(data);
            if (obj.success == 'success') {
                Cookies.set('sid', obj.sid, {
                    expires: 365,
                    path: '/',
                    secure: true
                });
                Cookies.set('login', $('#userLoginRegister').val(), {
                    expires: 365,
                    path: '/',
                    secure: true
                });
                document.location.href = '';
                return false;
            } else {
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                $('#text_register').css('display', 'block');
                $('#loader_register').css('position', 'absolute');
                $('#dot-container_register').css('display', 'none');
            }



        }
    });
	}
}
var input22 = document.getElementById('loginemail'),
    value = input22.value;

input22.addEventListener('input', onInput1);

function onInput1(e) {
    var newValue = e.target.value;
    if (newValue.match(/[^a-zA-Z0-9@.-]/g)) {
        input22.value = value;
        return;
    }
    value = newValue;
}
$('#loginemail').keydown(function(event) {
    if (event.which === 13) {
        reset_password();

    }
});

function resDone() {

    if ($('#em_recover').val().length < 4) {
        $('#error_reset').css('display', 'block');
        return $('#error_reset').html('Заполните все поля');
    }
    if ($('#reset_pass1').val().length < 4) {
        $('#error_reset').css('display', 'block');
        return $('#error_reset').html('Заполните все поля');
    }
    if ($('#reset_pass2').val().length < 4) {
        $('#error_reset').css('display', 'block');
        return $('#error_reset').html('Заполните все поля');
    }	

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_reset').css('display', 'none');
            $('#loader_reset').css('position', '');
            $('#reset_success').css('display', 'none');
            $('#reset_but').hide();
        },
        data: {
            type: "resDone",
            email: $('#em_recover').val(),
			reset_pass1: $('#reset_pass1').val(),
			reset_pass2: $('#reset_pass2').val(),
			code: $('#emCode_reset').val(),
        },
        success: function(data) {
            $('#reset_but').css('pointer-events', '');
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#reset_success').show();
                $('#reset_success').html("Пароль успешно изменен!");
            }
			else {
                $('#loader_reset').css('position', 'absolute');
                $('#reset_but').css('display', '');
                $('#dot-container_reset').css('display', 'none');
                $('#text_reset').css('display', '');
                $('#error_reset').html(obj.error);
                $('#error_reset').css('display', 'block');
				$("#reset_but").css("margin-bottom", "0px");

            }




        }
    });
}

function reset_password() {

    if ($('#em_recover').val().length < 4) {
        $('#error_reset').css('display', 'block');
        return $('#error_reset').html('Заполните все поля');
    }
    if ($('#reset_pass1').val().length < 4) {
        $('#error_reset').css('display', 'block');
        return $('#error_reset').html('Заполните все поля');
    }
    if ($('#reset_pass2').val().length < 4) {
        $('#error_reset').css('display', 'block');
        return $('#error_reset').html('Заполните все поля');
    }	

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_reset').css('display', 'none');
            $('#loader_reset').css('position', '');
            $('#reset_success').css('display', 'none');
            $('#reset_but').css('pointer-events', 'none');
            //$('#dot-container_reset').css('display', '');         
        },
        data: {
            type: "resetPass",
            email: $('#em_recover').val(),
			reset_pass1: $('#reset_pass1').val(),
			reset_pass2: $('#reset_pass2').val(),
        },
        success: function(data) {
            $('#reset_but').css('pointer-events', '');
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#emBox-reset").show();
				$("#reset_but").css("margin-bottom", "-25px");
                $('#reset_success').show();
                $('#reset_success').html("Укажите код, отправленный на почту");
                $('#reset_but').attr('onclick', 'resDone()');
            }
			else {
                $('#loader_reset').css('position', 'absolute');
                $('#reset_but').css('display', '');
                $('#dot-container_reset').css('display', 'none');
                $('#text_reset').css('display', '');
                $('#error_reset').html(obj.error);
                $('#error_reset').css('display', 'block');
				$("#reset_but").css("margin-bottom", "0px");

            }




        }
    });
}



function resetPass() {
    if ($('#resetPass').val() == '') {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Введите пароль');
    }
    if ($('#resetPass').val().length < 5) {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароль от 5 символов');
    }
    if ($('#resetPass').val() == '12345') {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароль слишком простой!');
    }
    if ($('#resetPass').val() == '123456') {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароль слишком простой!');
    }
    if ($('#resetPass').val() == '1234567') {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароль слишком простой!');
    }
    if ($('#resetPass').val() == '12345678') {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароль слишком простой!');
    }
    if ($('#resetPass').val() == '123456789') {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароль слишком простой!');
    }
    if ($('#resetPass').val() != $('#resetPassRepeat').val()) {
        $('#error_resetPass').show();
        return $('#error_resetPass').html('Пароли не совпадают');
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_resetPass').hide();
            $('#succes_resetPass').hide();
        },
        data: {
            type: "resetPassPanel",
            sid: Cookies.get('sid'),
            newPass: $('#resetPass').val()
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_resetPass").show();
                Cookies.set('sid', obj.sid, {
                    path: '/',
                    secure: true
                });
                return false;
            } else {
                $('#error_resetPass').show();
                return $('#error_resetPass').html(obj.error);
            }
        }
    });

}

function active() {
    if ($('#promo').val() == '') {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Введите Промокод",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
    }

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_promo').hide();
            $('#succes_promo').hide();
        },
        data: {
            type: "PromoActive",
            sid: Cookies.get('sid'),
            promo: $('#promo').val()
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_promo").show();
                $('#promo').val("");
                if (obj.typePromo == "balance") {
                    Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Промокод активирован. Вы получили <b>" + obj.suma + " <i class='fas fa-coins'></i></b>",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }
                if (obj.typePromo == "deposit") {
                    Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Промокод активирован. Вы получили <b>" + obj.suma + "%</b> к депозиту",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                }
                if (obj.typePromo == "freespins") {
					Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Промокод активирован. Вы получили <b>" + obj.countfs + " вращений(я)!<br>Сумма ставки: <b>" + obj.suma + " <i class='fas fa-coins'></i></b>",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                    setTimeout(function() {
                        window.location = "http://hotskins.club";
                    }, 1500);
                }
                if (obj.typePromo == "") {
					Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Промокод активирован. Вы получили <b>" + obj.suma + " <i class='fas fa-coins'></i></b>",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                    $("#succes_promo").html("Промокод активирован. Вы получили <b>" + obj.suma + " <i class='fas fa-coins'></i></b>");
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }				
                return false;
            } else {
                    Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }
    });

}

function copyToClipboard(text) {

   var textArea = document.createElement( "textarea" );
   textArea.value = text;
   document.body.appendChild( textArea );       
   textArea.select();

   try {
      var successful = document.execCommand( 'copy' );
   } catch (err) {
   }    
   document.body.removeChild( textArea );
}

function joinGa() {
	
        $.ajax({
            type: 'POST',
            url: 'action.php',
            beforeSend: function() {
                $('#error_ga').hide();
                $('#succes_ga').hide();
            },
            data: {
                type: "joinGa",
                sid: Cookies.get('sid'),
                captcha: 'g-recaptcha-response',
            },
            success: function(data) {
				console.log(data);
                var obj = jQuery.parseJSON(data);
                if (obj.success == "success") {
                    grecaptcha.reset();
                    $("#usersga").html(obj.users);
                    $("#gabutton").hide();
					Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Получено в раздаче <b>" + obj.randAmount + " <i class='fas fa-coins'></b>",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                } else {
                    Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                }
            }
        });
}

function betThimbles(type) {
	$("#hashPanel-thimbles").hide();		
	$('#ball1').hide();
	$('#ball2').hide();
	$('#ball3').hide();	
    if($('#balls1_th').is(':checked')){
	   var balls = 1;
	}
    if($('#balls2_th').is(':checked')){
	   var balls = 2;
	}	
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_thimbles').hide(),
            $('#succes_thimbles').hide()
        },
        data: {
            type: "betThimbles",
			where: type,
			bet: $('#BetSizeThimbles').val(),
			balls: balls,
            sid: Cookies.get('sid')
        },
        success: function(data) {
			console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {			
			    $('#opened-th').show();
				if(balls == 1){
			       $("#ball"+obj.ballGen1+"").show();
				   console.log(balls,obj.ballGen1);
				}
				if(balls == 2){
			       $('#ball'+obj.ballGen1+'').show();
				   $('#ball'+obj.ballGen2+'').show();
				   console.log(balls,obj.ballGen1,obj.ballGen2);
				}				
				$('#nap1').css('margin-top', '-130px');
				$('#nap2').css('margin-top', '-130px');
				$('#nap3').css('margin-top', '-130px');
				setTimeout(function(){			
					$("#hashPanel-thimbles").show();
					$("#hash-thimbles").html(obj.hashGame);
				    $("#win_pos").html(obj.numberGame);
					$("#salt_game").html(obj.saltGame);
				    $("#hash_game").html(obj.hashGame);
				    $("#id_game").html(obj.idGame);
				    $("#id-check").html(obj.idGame);					
					$('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
				    $('#nap1').css('margin-top', '0px');
				    $('#nap2').css('margin-top', '0px');
				    $('#nap3').css('margin-top', '0px');		
					$('#ball1').hide();
					$('#ball2').hide();
					$('#ball3').hide();
					if(obj.win == 1){
					   $('#succes_thimbles').show();
                       $('#succes_thimbles').html("Поздравляем! Вы выиграли <b>"+parseFloat(obj.winSum).toFixed(2)+" <i class='fas fa-coins'></i></b>");
					}
					else{
					   $('#error_thimbles').show();
                       $('#error_thimbles').html("К сожалению, вы проиграли.");
					}					
				}, 3300);
				setTimeout(function(){
					$('#opened-th').hide();
				}, 4300);
            }
			else {
                $('#error_thimbles').show();
                $('#error_thimbles').html(obj.error);
            }
        }
    });
}

function betRps(type) {
    var xd = type;
	$("#rock").css("box-shadow", "");
	$("#paper").css("box-shadow", "");
	$("#scissors").css("box-shadow", "");
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_rps').hide(),
            $('#succes_rps').hide()
        },
        data: {
            type: "betRps",
			bet: $('#BetSizeRps').val(),
			where: type,
            sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
					$("#hashPanel-rps").show();
					$("#hash-rps").html(obj.hashGame);
				    $("#win_pos").html(obj.numberGame);
					$("#salt_game").html(obj.saltGame);
				    $("#hash_game").html(obj.hashGame);
				    $("#id_game").html(obj.idGame);
				    $("#id-check").html(obj.idGame);				
				if(obj.win == 1){
				   $("#"+xd+"").css("box-shadow", "0px 0px 25px 10px #3EC9A7");
				   $('#succes_rps').show();
				   $('#succes_rps').html("Поздравляем! Вы победили.");				   
				}
				if(obj.win == 0){
				   $("#"+xd+"").css("box-shadow", "0px 0px 25px 10px #E32B09");
				   $('#error_rps').show();
				   $('#error_rps').html("К сожалению, вы проиграли");				   
				}	
				if(obj.win == 2){
				   $("#"+xd+"").css("box-shadow", "0px 0px 25px 10px #a69695");
				   $('#succes_rps').show();
				   $('#succes_rps').html("Ничья! Сыграйте еще раз.");
				}				
            }
			else {
                $('#error_rps').show();
                $('#error_rps').html(obj.error);
            }
        }
    });
}

function clanCreate() {
    if ($('#clanName').val() == '') {
        $('#error_clan').show();
        return $('#error_clan').html('Введите название!');
    }

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_clan').hide();
            $('#succes_clan').hide();
        },
        data: {
            type: "ClanCreate",
            sid: Cookies.get('sid'),
            name: $('#clanName').val()
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_clan").show();
                $("#succes_clan").html("Клан <b>" + obj.clan + "</b> создан!");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            } else {
                $('#error_clan').show();
                $('#error_clan').html(obj.error);
            }
        }
    });

}


function soundisable() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_sets').hide();
            $('#succes_sets').hide();
        },
        data: {
            type: "soundDisable",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_sets").show();
                $("#succes_sets").html("Звуки выключены!");
                return false;
            } else {
                $('#error_sets').show();
                return $('#error_sets').html(obj.error);
            }
        }
    });

}

function soundenable() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_sets').hide();
            $('#succes_sets').hide();
        },
        data: {
            type: "soundEnable",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_sets").show();
                $("#succes_sets").html("Звуки включены!");
                return false;
            } else {
                $('#error_sets').show();
                return $('#error_sets').html(obj.error);
            }
        }
    });

}

function createPromo() {
    if ($('#promoName').val() == '') {
        $('#error_createpromo').show();
        return $('#error_createpromo').html('Введите промокод!');
    }
    if ($('#promoActive').val() == '') {
        $('#error_createpromo').show();
        return $('#error_createpromo').html('Введите кол-во активаций!');
    }
    if ($('#promoAmount').val() == '') {
        $('#error_createpromo').show();
        return $('#error_createpromo').html('Введите сумму промокода!');
    }

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_createpromo').hide();
            $('#succes_createpromo').hide();
        },
        data: {
            type: "PromoCreate",
            sid: Cookies.get('sid'),
            promo: $('#promoName').val(),
            promoact: $('#promoActive').val(),
            promosum: $('#promoAmount').val()
        },
        success: function(data) {
			console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_createpromo").show();
                $("#succes_createpromo").html("Промокод создан!");
                $('#promoActive').val("");
                $('#promoAmount').val("");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
                return false;
            } else {
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }
    });
}


function getBonus() {


    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_getbonus').hide();
            $('#succes_getbonus').hide();
        },
        data: {
            type: "getBonus",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Бонус зачислен",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            } else {
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }
    });

}

function cont() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {

        },
        data: {
            type: "cont_BJ",



        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                window.type_game = obj.split;
                split1 = obj.split
                $('#startbj').hide();
                $('#inputBetAmount').val(obj.bet);
                $('#startbj').removeAttr("disabled", "disabled")
                $('#button-BJ').show();

                if (split1 == 0) {


                    $('.stack_container__33UBQ').html('');



                    cards_player = JSON.parse(obj.cards_player);
                    cards_diller = JSON.parse(obj.cards_diller);

                    player_suit = JSON.parse(obj.player_suit);
                    diller_suit = JSON.parse(obj.diller_suit);




                    $('#diller').remove()
                    $('#player').remove()


                    //////////// 1-st diller /////////////
                    $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - 0%), 0px)');
                        $('.footer_BJ_H').css('top', '0%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        masti = player_suit[0];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_player[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');
                    }, 200);
                    ////////////// 1-st player ////////////
                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - 0%), 0px)');
                        $('.footer_BJ_H').css('top', '0%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        masti = diller_suit[0];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');
                    }, 400);

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                        $('.footer_BJ_H').css('top', '7%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        masti = player_suit[1];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_player[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');
                    }, 600);

                    setTimeout(function() {

                        cards_diller.splice(0, 1);
                        diller_suit.splice(0, 1);
                        cards_dillerl = cards_diller.length;
                        pos = 100
                        post = 14
                        razm = 0
                        if (cards_dillerl > 0) {
                            var timer = setInterval(function() {
                                cards_dillerl = cards_diller.length;
                                if (cards_dillerl == 0) {
                                    clearInterval(timer);
                                    pp = pos - 50;
                                    $('#startbj').removeAttr("disabled", "disabled")
                                    $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="transform: translate(' + pp + '%, ' + razm + '%);"></div>');
                                    diller.setAttribute('data-values', obj.diller);

                                } else {
                                    $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                    setTimeout(function() {
                                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                        $('.footer_BJ_H').css('top', '' + post + '%');
                                        $('.footer_BJ_H').css('opacity', '1');
                                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                                        masti = diller_suit[0];
                                        mast = suit[masti];
                                        $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                        pos = pos + 50;
                                        razm = razm + 100
                                        post = post + 7;
                                        cards_diller.splice(0, 1);
                                        diller_suit.splice(0, 1);
                                    }, 200);
                                }
                            }, 500);


                        } else {
                            $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                            $('.footer_BJ_H').css('top', '7%');
                            $('.footer_BJ_H').css('opacity', '1');

                            $('.footer_BJ_H').addClass('footer_BJ_H1')
                            $('.card_face_F_BJ').addClass('card_face_F_BJ1');
                            $('.card_faceInner_BJ').addClass('card_faceInner_BJ1');

                            $('.footer_BJ_H').removeClass('footer_BJ_H')
                            $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                            $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                            $('.stack_container_H_BH').append('  <div class="stack_valuation__1Om0O" id="diller"data-values="10" style="display:none;transform: translate(0%, -100%);"></div>');
                            $('#diller').show();
                            diller.setAttribute('data-values', obj.diller);
                        }

                    }, 800);




                    setTimeout(function() {

                        cards_player.splice(0, 1);
                        cards_player.splice(0, 1);
                        player_suit.splice(0, 1);
                        player_suit.splice(0, 1);
                        cards_playerl = cards_player.length;
                        pos = 100
                        post = 14
                        razm = 0
                        if (cards_playerl > 0) {
                            var timer = setInterval(function() {
                                cards_playerl = cards_player.length;
                                if (cards_playerl == 0) {
                                    clearInterval(timer);
                                    pp = pos - 50;
                                    $('#startbj').removeAttr("disabled", "disabled")
                                    $('.stack_container_F_BH').append('<div class="stack_valuation__1Om0O" id="player"data-values="10" style="transform: translate(' + pp + '%, ' + razm + '%);"></div>');
                                    player.setAttribute('data-values', obj.player);

                                } else {
                                    $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                    setTimeout(function() {
                                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                        $('.footer_BJ_H').css('top', '' + post + '%');
                                        $('.footer_BJ_H').css('opacity', '1');
                                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                                        masti = player_suit[0];
                                        mast = suit[masti];
                                        $('.card_faceInner_BJ').html('<span>' + cards_player[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                        pos = pos + 50;
                                        razm = razm + 100
                                        post = post + 7;
                                        cards_player.splice(0, 1);
                                        player_suit.splice(0, 1);
                                    }, 200);
                                }
                            }, 500);


                        } else {
                            pp = 50;
                            razm = 50;
                            $('.stack_container_F_BH').append('<div class="stack_valuation__1Om0O" id="player"data-values="10" style="transform: translate(' + pp + '%, ' + razm + '%);"></div>');
                            player.setAttribute('data-values', obj.player);
                        }



                    }, 800);
                    $('#button-BJ > button').removeAttr("disabled", "disabled");
                    $('#splitbj').attr("disabled", "disabled");
                    if (obj.can_split == 1) {
                        $('#splitbj').removeAttr("disabled", "disabled");
                    }
                } else {
                    /// split ///
                    $('.stack_container__33UBQ').html('');



                    // cards_player = JSON.parse(obj.cards_player);
                    cards_diller = JSON.parse(obj.cards_diller);



                    diller_suit = JSON.parse(obj.diller_suit);


                    $('#diller').remove()


                    //////////// 1-st diller /////////////
                    $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - 0%), 0px)');
                        $('.footer_BJ_H').css('top', '0%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        masti = diller_suit[0];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');
                    }, 200);

                    setTimeout(function() {

                        cards_diller.splice(0, 1);
                        diller_suit.splice(0, 1);
                        cards_dillerl = cards_diller.length;
                        pos = 100
                        post = 14
                        razm = 0
                        if (cards_dillerl > 0) {
                            var timer = setInterval(function() {
                                cards_dillerl = cards_diller.length;
                                if (cards_dillerl == 0) {
                                    clearInterval(timer);
                                    pp = pos - 50;
                                    $('#startbj').removeAttr("disabled", "disabled")
                                    $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="transform: translate(' + pp + '%, ' + razm + '%);"></div>');
                                    diller.setAttribute('data-values', obj.diller);

                                } else {
                                    $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                    setTimeout(function() {
                                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                        $('.footer_BJ_H').css('top', '' + post + '%');
                                        $('.footer_BJ_H').css('opacity', '1');
                                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                                        masti = diller_suit[0];
                                        mast = suit[masti];
                                        $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                        pos = pos + 50;
                                        razm = razm + 100
                                        post = post + 7;
                                        cards_diller.splice(0, 1);
                                        diller_suit.splice(0, 1);

                                    }, 200);
                                }
                            }, 500);


                        } else {
                            $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                            $('.footer_BJ_H').css('top', '7%');
                            $('.footer_BJ_H').css('opacity', '1');

                            $('.footer_BJ_H').addClass('footer_BJ_H1')
                            $('.card_face_F_BJ').addClass('card_face_F_BJ1');
                            $('.card_faceInner_BJ').addClass('card_faceInner_BJ1');

                            $('.footer_BJ_H').removeClass('footer_BJ_H')
                            $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                            $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                            $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="display:none;transform: translate(0%, -100%);"></div>');
                            $('#diller').show();
                            $('#player').show();
                            diller.setAttribute('data-values', obj.diller);
                            player.setAttribute('data-values', obj.player);
                        }

                    }, 500);
                    /// player split ////
                    setTimeout(function() {
                        $('.blackjack_footer__BHkz7').html('');
                        $('.blackjack_footer__BHkz7').addClass('blackjack_hasSplit__3LyQN');


                        $('.blackjack_footer__BHkz7').append('<div class="stack_container__33UBQ container_left" style="width: 3.9em; transition: all 0.5s ease 0s;"> <svg class="arrow_arrow__37nF2 svg_left" viewBox="0 0 77 77"> <polygon class="arrow_top__qqvdO" transform="translate(0 0)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_middle__mu2WV" transform="translate(0 7)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_bottom__1ZV_P" transform="translate(0 14)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> </svg></div><div class="stack_container__33UBQ container_right" style="width: 3.9em; transition: all 0.5s ease 0s;"> <svg class="arrow_arrow__37nF2 svg_right" style="display:none" viewBox="0 0 77 77"> <polygon class="arrow_top__qqvdO" transform="translate(0 0)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_middle__mu2WV" transform="translate(0 7)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_bottom__1ZV_P" transform="translate(0 14)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> </svg></div>');

                        cards_split_1 = JSON.parse(obj.cards_split_1);
                        cards_split_2 = JSON.parse(obj.cards_split_2);


                        split_suit_1 = JSON.parse(obj.split_suit_1);
                        split_suit_2 = JSON.parse(obj.split_suit_2);

                        masti = split_suit_1[0];
                        mast = suit[masti];
                        $('.container_left').append('<div class="card_container__21YlE" style="transform: translate(calc(0px - 0%), 0px); top: 0%; transition: transform 0.5s ease 0s; opacity: 1;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_isActive__20seD"><div class="card_faceInner__2nkbn "><span>' + cards_split_1[0] + '</span> <svg class="icon ' + mast + '"> <use xlink:href="#' + mast + '"></use> </svg></div></div><div class="card_back__2Hbhq"> <img src="img/cardBack.svg" alt=""></div></div></div>')

                        masti = split_suit_2[0];
                        mast = suit[masti];
                        $('.container_right').append('<div class="card_container__21YlE" style="transform: translate(calc(0px - 0%), 0px); top: 0%; transition: transform 0.5s ease 0s; opacity: 1;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_isActive__20seD"><div class="card_faceInner__2nkbn "><span>' + cards_split_2[0] + '</span> <svg class="icon ' + mast + '"> <use xlink:href="#' + mast + '"></use> </svg></div></div><div class="card_back__2Hbhq"> <img src="img/cardBack.svg" alt=""></div></div></div>')



                        $('.container_left').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                        setTimeout(function() {
                            $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                            $('.footer_BJ_H').css('top', '7%');
                            $('.footer_BJ_H').css('opacity', '1');
                            $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                            $('.card_face_F_BJ').addClass('card_isActive__20seD');

                            masti = split_suit_1[1];
                            mast = suit[masti];
                            $('.card_faceInner_BJ').html('<span>' + cards_split_1[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                            $('.footer_BJ_H').removeClass('footer_BJ_H')
                            $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                            $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                            $('.container_right').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');


                        }, 800);


                        setTimeout(function() {
                            $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                            $('.footer_BJ_H').css('top', '7%');
                            $('.footer_BJ_H').css('opacity', '1');
                            $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                            $('.card_face_F_BJ').addClass('card_isActive__20seD');
                            masti = split_suit_2[1];
                            mast = suit[masti];

                            $('.card_faceInner_BJ').html('<span>' + cards_split_2[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                            $('.footer_BJ_H').removeClass('footer_BJ_H')
                            $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                            $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                            //	$('.container_left').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/card.png" alt=""></div></div></div>');


                        }, 900);


                        setTimeout(function() {

                            split_suit_1.splice(0, 1);
                            split_suit_1.splice(0, 1);
                            cards_split_1.splice(0, 1);
                            cards_split_1.splice(0, 1);
                            cards_split_1l = cards_split_1.length;
                            pos = 100
                            post = 14
                            razm = 0
                            if (cards_split_1l > 0) {
                                var timer = setInterval(function() {
                                    cards_split_1l = cards_split_1.length;
                                    if (cards_split_1l == 0) {
                                        clearInterval(timer);
                                        pp = pos - 50;
                                        $('.container_left').append('<div class="stack_valuation__1Om0O" id="sum_split_1"data-values="5" style="transform: translate(50%, 0%);"></div>')
                                        right_spl();
                                        sum_split_1.setAttribute('data-values', obj.sum_cards_split_1);



                                    } else {
                                        $('.container_left').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                        setTimeout(function() {
                                            $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                            $('.footer_BJ_H').css('top', '' + post + '%');
                                            $('.footer_BJ_H').css('opacity', '1');
                                            $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                                            $('.card_face_F_BJ').addClass('card_isActive__20seD');
                                            masti = split_suit_1[0];
                                            mast = suit[masti];
                                            $('.card_faceInner_BJ').html('<span>' + cards_split_1[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                                            $('.footer_BJ_H').removeClass('footer_BJ_H')
                                            $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                            $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                            pos = pos + 50;
                                            razm = razm + 100
                                            post = post + 7;
                                            cards_split_1.splice(0, 1);
                                            split_suit_1.splice(0, 1);
                                        }, 300);
                                    }
                                }, 600);


                            } else {
                                pp = 50;
                                razm = 50;
                                $('.container_left').append('<div class="stack_valuation__1Om0O" id="sum_split_1"data-values="5" style="transform: translate(50%, 0%);"></div>')

                                sum_split_1.setAttribute('data-values', obj.sum_cards_split_1);
                                right_spl();

                            }



                        }, 1100);



                        function right_spl() {

                            split_suit_2.splice(0, 1);
                            split_suit_2.splice(0, 1);
                            cards_split_2.splice(0, 1);
                            cards_split_2.splice(0, 1);
                            cards_split_2l = cards_split_2.length;
                            pos = 100
                            post = 14
                            razm = 0
                            if (cards_split_2l > 0) {
                                var timer = setInterval(function() {
                                    cards_split_2l = cards_split_2.length;
                                    if (cards_split_2l == 0) {
                                        clearInterval(timer);
                                        pp = pos - 50;
                                        $('.container_right').append('<div class="stack_valuation__1Om0O" id="sum_split_2"data-values="5" style="transform: translate(50%, 0%);"></div>')
                                        ubbl();
                                        sum_split_2.setAttribute('data-values', obj.sum_cards_split_2);

                                    } else {
                                        $('.container_right').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                        setTimeout(function() {
                                            $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                            $('.footer_BJ_H').css('top', '' + post + '%');
                                            $('.footer_BJ_H').css('opacity', '1');
                                            $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                                            $('.card_face_F_BJ').addClass('card_isActive__20seD');
                                            masti = split_suit_2[0];
                                            mast = suit[masti];
                                            $('.card_faceInner_BJ').html('<span>' + cards_split_2[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                                            $('.footer_BJ_H').removeClass('footer_BJ_H')
                                            $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                            $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                            pos = pos + 50;
                                            razm = razm + 100
                                            post = post + 7;
                                            cards_split_2.splice(0, 1);
                                            split_suit_2.splice(0, 1);
                                        }, 300);
                                    }
                                }, 600);


                            } else {
                                pp = 50;
                                razm = 50;
                                $('.container_right').append('<div class="stack_valuation__1Om0O" id="sum_split_2"data-values="5" style="transform: translate(50%, 0%);"></div>')
                                ubbl();
                                sum_split_2.setAttribute('data-values', obj.sum_cards_split_2);
                            }

                        }


                        function ubbl() {
                            $('#button-BJ > button').removeAttr("disabled", "disabled");
                            $('#splitbj').attr("disabled", "disabled");
                            $('#doublebj').attr("disabled", "disabled");
                        }



                    }, 700);

                    if (obj.split == 0) {
                        $('#button-BJ > button').removeAttr("disabled", "disabled");
                        $('#splitbj').attr("disabled", "disabled");
                        $('#doublebj').attr("disabled", "disabled");

                    }
                }

            } else {

            }
        }
    });

}

function split() {
    $('#button-BJ > button').attr("disabled", "disabled")

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {

        },
        data: {
            type: "split_BJ",



        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {

                if (obj.split == 1) {

                    window.type_game = 1;

                    $('.blackjack_footer__BHkz7').html('');
                    $('.blackjack_footer__BHkz7').addClass('blackjack_hasSplit__3LyQN');


                    $('.blackjack_footer__BHkz7').append('<div class="stack_container__33UBQ container_left" style="width: 3.9em; transition: all 0.5s ease 0s;"> <svg class="arrow_arrow__37nF2 svg_left" viewBox="0 0 77 77"> <polygon class="arrow_top__qqvdO" transform="translate(0 0)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_middle__mu2WV" transform="translate(0 7)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_bottom__1ZV_P" transform="translate(0 14)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> </svg></div><div class="stack_container__33UBQ container_right" style="width: 3.9em; transition: all 0.5s ease 0s;"> <svg class="arrow_arrow__37nF2 svg_right" style="display:none" viewBox="0 0 77 77"> <polygon class="arrow_top__qqvdO" transform="translate(0 0)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_middle__mu2WV" transform="translate(0 7)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> <polygon class="arrow_bottom__1ZV_P" transform="translate(0 14)" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3"></polygon> </svg></div>');

                    cards_split_1 = JSON.parse(obj.cards_split_1);
                    cards_split_2 = JSON.parse(obj.cards_split_2);


                    split_suit_1 = JSON.parse(obj.split_suit_1);
                    split_suit_2 = JSON.parse(obj.split_suit_2);

                    masti = split_suit_1[0];
                    mast = suit[masti];
                    $('.container_left').append('<div class="card_container__21YlE" style="transform: translate(calc(0px - 0%), 0px); top: 0%; transition: transform 0.5s ease 0s; opacity: 1;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_isActive__20seD"><div class="card_faceInner__2nkbn "><span>' + cards_split_1[0] + '</span> <svg class="icon ' + mast + '"> <use xlink:href="#' + mast + '"></use> </svg></div></div><div class="card_back__2Hbhq"> <img src="img/cardBack.svg" alt=""></div></div></div>')
                    masti = split_suit_2[0];
                    mast = suit[masti];
                    $('.container_right').append('<div class="card_container__21YlE" style="transform: translate(calc(0px - 0%), 0px); top: 0%; transition: transform 0.5s ease 0s; opacity: 1;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_isActive__20seD"><div class="card_faceInner__2nkbn "><span>' + cards_split_2[0] + '</span> <svg class="icon ' + mast + '"> <use xlink:href="#' + mast + '"></use> </svg></div></div><div class="card_back__2Hbhq"> <img src="img/cardBack.svg" alt=""></div></div></div>')



                    $('.container_left').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                        $('.footer_BJ_H').css('top', '7%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        $('.card_face_F_BJ').addClass('card_isActive__20seD');

                        masti = split_suit_1[1];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_split_1[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.container_right').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');


                    }, 100);

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                        $('.footer_BJ_H').css('top', '7%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        $('.card_face_F_BJ').addClass('card_isActive__20seD');

                        masti = split_suit_2[1];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_split_2[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');


                        $('.container_left').append('<div class="stack_valuation__1Om0O" id="sum_split_1"data-values="5" style="transform: translate(50%, 0%);"></div>')

                        sum_split_1.setAttribute('data-values', obj.sum_cards_split_1);

                        $('.container_right').append('<div class="stack_valuation__1Om0O" id="sum_split_2"data-values="5" style="transform: translate(50%, 0%);"></div>')

                        sum_split_2.setAttribute('data-values', obj.sum_cards_split_2);
                        $('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
  
                    }, 300);



                }

                setTimeout(function() {
                    $('#button-BJ > button').removeAttr("disabled", "disabled")
                    $('#splitbj').attr("disabled", "disabled");
                    $('#doublebj').attr("disabled", "disabled");

                }, 500);
            } else {
                $('#button-BJ > button').removeAttr("disabled", "disabled")
                $('#splitbj').attr("disabled", "disabled");
                $('#doublebj').attr("disabled", "disabled");
                console.log(obj.error);


            }
        }
    });
}

function double() {
    $('#button-BJ > button').attr("disabled", "disabled")
    t_g = window.type_game
    $('#startbj').attr("disabled", "disabled")
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {

        },
        data: {
            type: "double_BJ",



        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {

                cards_player = JSON.parse(obj.cards_player);
                pos = (cards_player.length - 1) * 50
                post = (cards_player.length - 1) * 7
                $('#player').remove()
                $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                setTimeout(function() {
                    $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px ) rotate(90deg)');
                    $('.footer_BJ_H').css('top', '' + post + '%');
                    $('.footer_BJ_H').css('opacity', '1');
                    $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');

                    $('.card_faceInner_BJ').html('<span>' + cards_player[cards_player.length - 1] + '</span><svg class="icon icon-spade"><use xlink:href="#icon-spade"></use></svg>')

                    $('.footer_BJ_H').removeClass('footer_BJ_H')
                    $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                    $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                    $('.stack_container_F_BH').append('<div class="stack_valuation__1Om0O" id="player"data-values="5" style="transform: translate(100%, 100%);"></div>')

                    player.setAttribute('data-values', obj.player);

                }, 200);




                setTimeout(function() {

                    if (obj.game_off == 1) {

                        $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_lost__67uKQ');

                        $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_lost__mrXhE');


                        $('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
					     $("#salt_game").html(obj.saltGame);
						 $("#id_game").html(obj.idGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);						
                    }

                    if (obj.game_off == 2) {

                        $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_won__1Q-ZH');

                        $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_won__2tUrU');

                        $('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
					     $("#salt_game").html(obj.saltGame);
						 $("#id_game").html(obj.idGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);						
                    }


                    if (obj.game_off < 1) {
                        stop();
                    }


                    $('#startbj').show();
                    $('#button-BJ').hide();
                    $('#startbj').removeAttr("disabled", "disabled")
                    $('#button-BJ > button').removeAttr("disabled", "disabled");
                    $('#splitbj').attr("disabled", "disabled");
                    $('#doublebj').attr("disabled", "disabled");
                }, 400);

                 $('#userBalance').attr('myBalance', obj.new_balance);
                 updateBalance(obj.balance, obj.new_balance);
            } else {
                $('#button-BJ > button').removeAttr("disabled", "disabled");
                $('#splitbj').attr("disabled", "disabled");
                $('#doublebj').attr("disabled", "disabled");
                console.log(obj.error);
            }
        }
    });
}


function take() {
    t_g = window.type_game

    $('#button-BJ > button').attr("disabled", "disabled")
    $('#startbj').attr("disabled", "disabled")
    $('#splitbj').attr("disabled", "disabled");
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {

        },
        data: {
            type: "take_BJ",
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {



                if (t_g == 0) {

                    cards_player = JSON.parse(obj.cards_player);
                    player_suit = JSON.parse(obj.player_suit);
                    pos = (cards_player.length - 1) * 50
                    post = (cards_player.length - 1) * 7



                    $('#player').remove()
                    $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ "><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                        $('.footer_BJ_H').css('top', '' + post + '%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        masti = player_suit[0];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_player[cards_player.length - 1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.stack_container_F_BH').append('<div class="stack_valuation__1Om0O" id="player"data-values="5" style="transform: translate(50%, 0%);"></div>')

                        player.setAttribute('data-values', obj.player);

                    }, 200);

                    setTimeout(function() {
                        $('#button-BJ > button').removeAttr("disabled", "disabled");
                        $('#splitbj').attr("disabled", "disabled");
                    }, 400);


                    setTimeout(function() {

                        if (obj.game_off == 1) {
                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_lost__67uKQ');

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_lost__mrXhE');
                            $('#startbj').show();
                            $('#button-BJ').hide();
                            $('#startbj').removeAttr("disabled", "disabled")
					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
					     $("#salt_game").html(obj.saltGame);
						 $("#id_game").html(obj.idGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);
                            $('#userBalance').attr('myBalance', obj.new_balance);
                            updateBalance(obj.balance, obj.new_balance);
                        }

                        if (obj.game_off == 2) {
                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_won__1Q-ZH');
					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
					     $("#salt_game").html(obj.saltGame);
						 $("#id_game").html(obj.idGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);
                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_won__2tUrU');
                            $('#startbj').show();
                            $('#button-BJ').hide();
                            $('#startbj').removeAttr("disabled", "disabled")
                           	$('#userBalance').attr('myBalance', obj.new_balance);
                            updateBalance(obj.balance, obj.new_balance);
                        }




                    }, 400);

                }
                // LEFT SPLIT
                if (t_g == 1) {


                    cards_split_1 = JSON.parse(obj.cards_split_1);

                    split_suit_1 = JSON.parse(obj.split_suit_1);

                    pos = (cards_split_1.length - 1) * 50
                    post = (cards_split_1.length - 1) * 7



                    $('#sum_split_1').remove()
                    $('.container_left').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                        $('.footer_BJ_H').css('top', '' + post + '%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        $('.card_face_F_BJ').addClass('card_isActive__20seD');
                        masti = split_suit_1[split_suit_1.length - 1];
                        mast = suit[masti];
                        $('.card_faceInner_BJ').html('<span>' + cards_split_1[cards_split_1.length - 1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.container_left').append('<div class="stack_valuation__1Om0O" id="sum_split_1"data-values="5" style="transform: translate(50%, 0%);"></div>')

                        sum_split_1.setAttribute('data-values', obj.sum_cards_split_1);

                    }, 200);




                }

                // Right SPLIT
                if (t_g == 2) {


                    cards_split_2 = JSON.parse(obj.cards_split_2);
                    pos = (cards_split_2.length - 1) * 50
                    post = (cards_split_2.length - 1) * 7


                    $('#sum_split_2').remove()
                    $('.container_right').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                    setTimeout(function() {
                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                        $('.footer_BJ_H').css('top', '' + post + '%');
                        $('.footer_BJ_H').css('opacity', '1');
                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                        $('.card_face_F_BJ').addClass('card_isActive__20seD');

                        $('.card_faceInner_BJ').html('<span>' + cards_split_2[cards_split_2.length - 1] + '</span><svg class="icon icon-spade"><use xlink:href="#icon-spade"></use></svg>')

                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                        $('.container_right').append('<div class="stack_valuation__1Om0O" id="sum_split_2"data-values="5" style="transform: translate(50%, 0%);"></div>')

                        sum_split_2.setAttribute('data-values', obj.sum_cards_split_2);

                    }, 200);
                    setTimeout(function() {

                        if (obj.game_off == 1) {

                            stop();

                        }
                    }, 800);

                }

                setTimeout(function() {

                    window.type_game = obj.split;
                    sp = obj.split;
                    if (sp == "1") {
                        $('.svg_right').hide();
                        $('.svg_left').show();
                    }
                    if (sp == "2") {
                        $('.svg_right').show();
                        $('.svg_left').hide();
                    }

                    if (sp == "0") {
                        $('.svg_right').hide();
                        $('.svg_left').hide();
                    }

                    $('#button-BJ > button').removeAttr("disabled", "disabled");
                    $('#splitbj').attr("disabled", "disabled");
                    $('#doublebj').attr("disabled", "disabled");

                }, 400);

            } else {
                $('#button-BJ > button').removeAttr("disabled", "disabled");
                $('#splitbj').attr("disabled", "disabled");
                $('#doublebj').attr("disabled", "disabled");
                console.log(obj.error);
            }
        }
    });
}


/////////////////////////////////-   STOP   -//////////////////////////////////////////////////////////



function stop() {
    t_g = window.type_game
    $('#button-BJ > button').attr("disabled", "disabled");
    $('#startbj').attr("disabled", "disabled")
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {

        },
        data: {
            type: "stop_BJ",
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                if (t_g == 0) {
                    $('#startbj').show();
                    $('#button-BJ').hide();


                    diller_suit = JSON.parse(obj.diller_suit)
                    cards_diller = JSON.parse(obj.cards_diller);
                    $('#diller').remove()




                    $('.card_face_F_BJ1').removeClass('card_hidden__vbF5g');

                    masti = diller_suit[1];
                    mast = suit[masti];
                    $('.card_faceInner_BJ1').html('<span>' + cards_diller[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                    $('.footer_BJ_H1').removeClass('footer_BJ_H1')
                    $('.card_face_F_BJ1').removeClass('card_face_F_BJ1');
                    $('.card_faceInner_BJ1').removeClass('card_faceInner_BJ1');


                    cards_diller.splice(0, 1);
                    cards_diller.splice(0, 1);

                    diller_suit.splice(0, 1);
                    diller_suit.splice(0, 1);
                    cards_dillerl = cards_diller.length;
                    pos = 100
                    post = 14
                    razm = 0
                    if (cards_dillerl > 0) {
                        var timer = setInterval(function() {
                            cards_dillerl = cards_diller.length;
                            if (cards_dillerl == 0) {
                                clearInterval(timer);
                                pp = pos - 50;
                                $('#startbj').removeAttr("disabled", "disabled")
                                $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="transform: translate(' + pp + '%, ' + razm + '%);"></div>');
                                diller.setAttribute('data-values', obj.diller);

                            } else {
                                $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                setTimeout(function() {
                                    $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                    $('.footer_BJ_H').css('top', '' + post + '%');
                                    $('.footer_BJ_H').css('opacity', '1');
                                    $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                                    masti = diller_suit[0];
                                    mast = suit[masti];
                                    $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                                    $('.footer_BJ_H').removeClass('footer_BJ_H')
                                    $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                    $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                    pos = pos + 50;
                                    razm = razm + 100
                                    post = post + 7;
                                    cards_diller.splice(0, 1);

                                }, 200);
                            }
                        }, 500);


                    } else {
                        $('#startbj').removeAttr("disabled", "disabled")
                        pp = pos - 50;
                        $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="transform: translate(' + pp + '%, 0%);"></div>');
                        diller.setAttribute('data-values', obj.diller);

                    }

                    setTimeout(function() {
                        if (obj.game_off == 1) {

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_lost__67uKQ');

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_lost__mrXhE');

					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
					     $("#salt_game").html(obj.saltGame);
						 $("#id_game").html(obj.idGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);

                        }

                        if (obj.game_off == 2) {

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_won__1Q-ZH');

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_won__2tUrU');

					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
					     $("#salt_game").html(obj.saltGame);
						 $("#id_game").html(obj.idGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);

                        }


                        if (obj.game_off == 3) {

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .stack_valuation__1Om0O').addClass('stack_push__3K-cf');

                            $('.blackjack_footer__BHkz7 > .stack_container__33UBQ > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_push__358u_');

					     $("#hashPanel-blackjack").show();
					     $("#hash-blackjack").html(obj.hashGame);
				         $("#win_pos").html(obj.diller);
						 $("#id_game").html(obj.idGame);
					     $("#salt_game").html(obj.saltGame);
				         $("#hash_game").html(obj.hashGame);
						 $("#id-check").html(obj.idGame);

                        }




                       	$('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
                    }, 1000)


                }


                if (t_g == 1) {
                    ////

                }

                if (t_g == 2) {

                    $('#startbj').show();
                    $('#button-BJ').hide();

                    cards_diller = JSON.parse(obj.cards_diller);
                    $('#diller').remove()


                    if (obj.no_diller == 0) {

                        $('.card_face_F_BJ1').removeClass('card_hidden__vbF5g');

                        $('.card_faceInner_BJ1').html('<span>' + cards_diller[1] + '</span><svg class="icon icon-spade"><use xlink:href="#icon-spade"></use></svg>')

                        $('.footer_BJ_H1').removeClass('footer_BJ_H1')
                        $('.card_face_F_BJ1').removeClass('card_face_F_BJ1');
                        $('.card_faceInner_BJ1').removeClass('card_faceInner_BJ1');


                        cards_diller.splice(0, 1);
                        cards_diller.splice(0, 1);

                        cards_dillerl = cards_diller.length;
                        pos = 100
                        post = 14
                        razm = 0
                        if (cards_dillerl > 0) {
                            var timer = setInterval(function() {
                                cards_dillerl = cards_diller.length;
                                if (cards_dillerl == 0) {
                                    clearInterval(timer);
                                    pp = pos - 50;
                                    $('#startbj').removeAttr("disabled", "disabled")
                                    $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="transform: translate(' + pp + '%, ' + razm + '%);"></div>');
                                    diller.setAttribute('data-values', obj.diller);

                                } else {
                                    $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                                    setTimeout(function() {
                                        $('.footer_BJ_H').css('transform', 'translate(calc(0px - ' + pos + '%), 0px)');
                                        $('.footer_BJ_H').css('top', '' + post + '%');
                                        $('.footer_BJ_H').css('opacity', '1');
                                        $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');

                                        $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon icon-spade"><use xlink:href="#icon-spade"></use></svg>')

                                        $('.footer_BJ_H').removeClass('footer_BJ_H')
                                        $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                                        $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');
                                        pos = pos + 50;
                                        razm = razm + 100
                                        post = post + 7;
                                        cards_diller.splice(0, 1);

                                    }, 200);
                                }
                            }, 500);


                        } else {
                            $('#startbj').removeAttr("disabled", "disabled")
                            pp = pos - 50;
                            $('.stack_container_H_BH').append('<div class="stack_valuation__1Om0O" id="diller"data-values="10" style="transform: translate(' + pp + '%, 0%);"></div>');
                            diller.setAttribute('data-values', obj.diller);

                        }
                    }

                    setTimeout(function() {

                        if (obj.game_off_split_1 == 1) {


                            $('.blackjack_footer__BHkz7 > .container_left > .stack_valuation__1Om0O').addClass('stack_lost__67uKQ');

                            $('.blackjack_footer__BHkz7 > .container_left > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_lost__mrXhE');



                        }

                        if (obj.game_off_split_1 == 2) {

                            $('.blackjack_footer__BHkz7 > .container_left > .stack_valuation__1Om0O').addClass('stack_won__1Q-ZH');

                            $('.blackjack_footer__BHkz7 > .container_left > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_won__2tUrU');



                        }


                        if (obj.game_off_split_1 == 3) {

                            $('.blackjack_footer__BHkz7 > .container_left > .stack_valuation__1Om0O').addClass('stack_push__3K-cf');

                            $('.blackjack_footer__BHkz7 > .container_left > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_push__358u_');



                        }


                        if (obj.game_off_split_2 == 1) {


                            $('.blackjack_footer__BHkz7 > .container_right > .stack_valuation__1Om0O').addClass('stack_lost__67uKQ');

                            $('.blackjack_footer__BHkz7 > .container_right > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_lost__mrXhE');



                        }

                        if (obj.game_off_split_2 == 2) {

                            $('.blackjack_footer__BHkz7 > .container_right > .stack_valuation__1Om0O').addClass('stack_won__1Q-ZH');

                            $('.blackjack_footer__BHkz7 > .container_right > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_won__2tUrU');



                        }


                        if (obj.game_off_split_2 == 3) {

                            $('.blackjack_footer__BHkz7 > .container_right > .stack_valuation__1Om0O').addClass('stack_push__3K-cf');

                            $('.blackjack_footer__BHkz7 > .container_right > .card_container__21YlE > .card_card__cY3Uo > .card_face__3lBVA').addClass('card_push__358u_');



                        }


                        $('#startbj').removeAttr("disabled", "disabled")
                       	$('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
                    }, 1000)




                }

                setTimeout(function() {
                    $('#button-BJ > button').removeAttr("disabled", "disabled");
                    window.type_game = obj.split;
                    sp = obj.split;
                    if (sp == "1") {
                        $('.svg_right').hide();
                        $('.svg_left').show();
                    }
                    if (sp == "2") {
                        $('#splitbj').attr("disabled", "disabled");
                        $('#doublebj').attr("disabled", "disabled");
                        $('.svg_right').show();
                        $('.svg_left').hide();
                    }

                    if (sp == "0") {
                        $('.svg_right').hide();
                        $('.svg_left').hide();
                    }

                    $('#button-BJ > button').removeAttr("disabled", "disabled");


                }, 400);
            } else {

                console.log(obj.error);
            }
        }
    });
}

function startgame() {
    $('#startbj').attr("disabled", "disabled")
    $('#button-BJ > button').attr("disabled", "disabled");
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
        },
        data: {
            type: "start_BJ",
            bet: $('#inputBetAmount').val()
        },
        success: function(data) {
		    console.log(data);
			var obj = jQuery.parseJSON(data);
            //var obj = data;
            if (obj.success == "success") {
				$("#hashPanel-blackjack").hide();
                window.type_game = 0;
                $('#startbj').hide();
                $('#startbj').removeAttr("disabled", "disabled")
               	$('#userBalance').attr('myBalance', obj.new_balance);
                 updateBalance(obj.balance, obj.new_balance);
                $('#button-BJ').show();
                $('.stack_container__33UBQ').html('');
                $('.blackjack_footer__BHkz7').removeClass('blackjack_hasSplit__3LyQN').html('<div class="stack_container__33UBQ stack_container_F_BH" style="width: 3.9em; transition: all 0.5s ease 0s;"></div>');



                cards_player = JSON.parse(obj.cards_player);
                cards_diller = JSON.parse(obj.cards_diller);

                diller_suit = JSON.parse(obj.diller_suit);
                player_suit = JSON.parse(obj.player_suit);

                $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');

                setTimeout(function() {
                    $('.footer_BJ_H').css('transform', 'translate(calc(0px - 0%), 0px)');
                    $('.footer_BJ_H').css('top', '0%');
                    $('.footer_BJ_H').css('opacity', '1');
                    $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                    masti = player_suit[0];
                    mast = suit[masti];
                    $('.card_faceInner_BJ').html('<span>' + cards_player[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                    $('.footer_BJ_H').removeClass('footer_BJ_H')
                    $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                    $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                    $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');
                }, 200);

                setTimeout(function() {
                    $('.footer_BJ_H').css('transform', 'translate(calc(0px - 0%), 0px)');
                    $('.footer_BJ_H').css('top', '0%');
                    $('.footer_BJ_H').css('opacity', '1');
                    $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                    masti = diller_suit[0];
                    mast = suit[masti];
                    $('.card_faceInner_BJ').html('<span>' + cards_diller[0] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')

                    $('.footer_BJ_H').removeClass('footer_BJ_H')
                    $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                    $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                    $('.stack_container_F_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');
                }, 500);


                setTimeout(function() {
                    $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                    $('.footer_BJ_H').css('top', '7%');
                    $('.footer_BJ_H').css('opacity', '1');
                    $('.card_face_F_BJ').removeClass('card_hidden__vbF5g');
                    masti = player_suit[1];
                    console.log(masti)
                    mast = suit[masti];
                    $('.card_faceInner_BJ').html('<span>' + cards_player[1] + '</span><svg class="icon ' + mast + '"><use xlink:href="#' + mast + '"></use></svg>')


                    $('.footer_BJ_H').removeClass('footer_BJ_H')
                    $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                    $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                    $('.stack_container_H_BH').append('<div class="card_container__21YlE footer_BJ_H" style="transform: translate(calc(182.904px - 0%), -228.859px); top: -10%; transition: transform 0.5s ease 0s; opacity: 0;"><div class="card_card__cY3Uo card_inPlay__2zghE"><div class="card_face__3lBVA card_face_F_BJ card_hidden__vbF5g"><div class="card_faceInner__2nkbn card_faceInner_BJ"><span></span></div></div><div class="card_back__2Hbhq card_face_F_BJ card_hidden__vbF5g"><img src="img/cardBack.svg" alt=""></div></div></div>');



                }, 1000);


                setTimeout(function() {
                    $('.footer_BJ_H').css('transform', 'translate(calc(0px - 50%), 0px)');
                    $('.footer_BJ_H').css('top', '7%');
                    $('.footer_BJ_H').css('opacity', '1');

                    $('.footer_BJ_H').addClass('footer_BJ_H1')
                    $('.card_face_F_BJ').addClass('card_face_F_BJ1');
                    $('.card_faceInner_BJ').addClass('card_faceInner_BJ1');

                    $('.footer_BJ_H').removeClass('footer_BJ_H')
                    $('.card_face_F_BJ').removeClass('card_face_F_BJ');
                    $('.card_faceInner_BJ').removeClass('card_faceInner_BJ');

                    $('.stack_container_F_BH').append('<div class="stack_valuation__1Om0O" id="player"data-values="5" style="display:none;transform: translate(50%, 0%);"></div>')
                    $('.stack_container_H_BH').append('  <div class="stack_valuation__1Om0O" id="diller"data-values="10" style="display:none;transform: translate(0%, -100%);"></div>');
                    $('#diller').show();
                    $('#player').show()
                    diller.setAttribute('data-values', obj.diller);
                    player.setAttribute('data-values', obj.player);



                }, 1500);

                setTimeout(function() {
                    $('#button-BJ > button').removeAttr("disabled", "disabled");
                    $('#splitbj').attr("disabled", "disabled");
                    if (obj.can_split == 1) {
                        $('#splitbj').removeAttr("disabled", "disabled");
                    }
                }, 1800);




            } else {
                $('#startbj').removeAttr("disabled", "disabled");


                console.log(obj.error);
            }
        }
    });
}

function cashback() {


    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_cashback').hide();
            $('#succes_cashback').hide();
        },
        data: {
            type: "getCashback",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Кэшбек успешно зачислен!",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
                $('#cashhh').html("0.00");
                return false;
            } else {
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }
    });

}

function getLikes() {
	
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_getlikes').hide();
            $('#succes_getlikes').hide();
        },
        data: {
            type: "TakeBonus",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Вы получили <b>" + obj.coins + "</b> <i class='fas fa-coins'></i>",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                $('#userBalance').attr('myBalance', obj.ne_balance);
                updateBalance(obj.balance, obj.newbalance);
            } else {
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }
    });
}


function getFaucet() {
	
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_faucet').hide();
            $('#succes_faucet').hide();
        },
        data: {
            type: "faucet",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#cabutton").hide();
				grecaptcha.reset();
				Swal.fire({title: '<strong>Успешно!</u></strong>',icon: 'success',html:"Вы получили <b>" + obj.fauc + "</b> <i class='fas fa-coins'></i>",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
                grecaptcha.reset();
                setTimeout(function() {
                    $("#cabutton").show();
                }, 900000);
            } else {
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }
    });
}


function wager() {


    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_wager').hide();
            $('#succes_wager').hide();
        },
        data: {
            type: "wager",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_wager").show();
                $("#succes_wager").html("Действие выполнено");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
                $('#wagerok').html("0.00");
                $('#balik').html("0.00");
                return false;
            } else {
                $('#error_wager').show();
                return $('#error_wager').html(obj.error);
            }
        }
    });

}

function person() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_person').hide();
            $('#succes_person').hide();
        },
        data: {
            type: "PersonActive",
            sid: Cookies.get('sid'),
            person: $('#person').val(),
            toperson1: $('#toperson1').val()
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_person").show();
                $("#succes_person").html("Успешно передано.");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
                return false;
            } else {
                $('#error_person').show();
                return $('#error_person').html(obj.error);
            }
        }
    });

}

function otmena() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_withdraw').hide();
            $('#succes_withdraw').hide();
        },
        data: {
            type: "otmena",
            sid: Cookies.get('sid'),
            id: $('#otmina').attr('value')
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $("#succes_withdraw").show();
                $("#succes_withdraw").html("Выплата отменена.");
                document.getElementById($('#otmina').attr('value')).remove();
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            } else {
                $('#error_withdraw').show();
                $('#error_withdraw').html(obj.error);
            }
        }
    });

}

function updateBalance(start, end) {

    var el = document.getElementById('userBalance');

    od = new Odometer({
        el: el,
        value: start
    });

    od.update(end);
}

function updateCase(start, end) {

    var el44 = document.getElementById('winLucky');
    var el55 = document.getElementById('winLucky33');
    var el66 = document.getElementById('winLucky22');
    var el77 = document.getElementById('winLucky44');
    var el88 = document.getElementById('winSafe');

    od = new Odometer({
        el: el44,
        value: start
    });

    od.update(end);

    od = new Odometer({
        el: el55,
        value: start
    });
    od = new Odometer({
        el: el66,
        value: start
    });
    od = new Odometer({
        el: el77,
        value: start
    });
    od = new Odometer({
        el: el88,
        value: start
    });

    od.update(end);
}




function updateHash() {

    // var audio = new Audio();
    // audio.src = 'Notify.mp3';
    // audio.volume = 0.1;
    // audio.autoplay = true;

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#checkBet').css('display', 'none');
            $('#loader_hash').css('display', '');
            $('#betStart').css('opacity', '0.25');
            $('#controlBet').css('opacity', '0.25');
            $('#betStart').css('pointer-events', 'none');
            $('#controlBet').css('pointer-events', 'none');
            $('#hashBet').html('');
        },
        data: {
            type: "updateHash",
            hid: $('#hashBet').attr('hid'),
        },
        success: function(data) {

            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {

                $('#checkBet').css('display', '');
                Cookies.set('hid', obj.hid, {
                    path: '/',
                    secure: true
                });
                $('#hashBet').attr('hid', obj.hid);
                $('#hashBet').html(obj.hash);
                $('#loader_hash').css('display', 'none');
                $('#betStart').css('opacity', '');
                $('#controlBet').css('opacity', '');
                $('#betStart').css('pointer-events', '');
                $('#controlBet').css('pointer-events', '');

                // setTimeout(updateHash, 89000);
            }
            sss();

            if ('error' in obj) {
                return document.location.href = '';
            }

        }
    });
}

function case1() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        data: {
            type: "case1",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
							console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#cases-blocks").hide();
				$("#cases-win").fadeIn();
                $('#case_win').html(obj.profit);
                setTimeout(function() {
                    $("#cases-blocks").fadeIn();
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
					$("#cases-win").hide();
					$('#case_win').html('0');
					window.scrollTo({top: 0});
                }, 2300);
            }
            if (obj.success == 'error')
			{
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }		
        }

    });
}

function case2() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        data: {
            type: "case2",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#cases-blocks").hide();
				$("#cases-win").fadeIn();
                $('#case_win').html(obj.profit);
                setTimeout(function() {
                    $("#cases-blocks").fadeIn();
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
					$("#cases-win").hide();
					$('#case_win').html('0');
					window.scrollTo({top: 0});
                }, 2300);
            }
            if (obj.success == 'error')
			{
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }

    });
}

function case3() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        data: {
            type: "case3",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#cases-blocks").hide();
				$("#cases-win").fadeIn();
                $('#case_win').html(obj.profit);
                setTimeout(function() {
                    $("#cases-blocks").fadeIn();
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
					$("#cases-win").hide();
					$('#case_win').html(0);
					window.scrollTo({top: 0});
                }, 2300);
            }
            if (obj.success == 'error')
			{
                Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:obj.error,showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
            }
        }

    });
}

function case_safe() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#case5op').val("Открываем..");
            $('#error_cases5').hide();
            $('#succes_cases5').hide();
        },
        data: {
            type: "case_safe",
            sid: Cookies.get('sid'),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                document.getElementById('winSafe').style.display = 'inline-block';
                document.getElementById('winSafe2').style.display = 'inline-block';
                document.getElementById('winSafe1').style.display = 'inline-block';
                $('#gege265').hide();
                $('#openSafe').hide();
                $('#winSafe').html(obj.profit);
                setTimeout(function() {
                    $('#succes_cases5').css('display', '');
                    $("#succes_cases5").html("Кейс <b>SAFE</b> открыт!<br> Выигрыш: <b>" + parseFloat(obj.profit).toFixed(2) + " </b> <i class='fas fa-coins'></i>");
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                    $('#gege265').show();
                    $('#openSafe').show();
                    $('#winSafe').html("0");
                    document.getElementById('winSafe').style.display = 'none';
                    document.getElementById('winSafe2').style.display = 'none';
                    document.getElementById('winSafe1').style.display = 'none';
                }, 2300);
            }
            if (obj.success == 'error') {

                $('#error_cases5').css('display', '');
                $('#error_cases5').html(obj.error);
            }
        }

    });
}

function betred() {

    if ($('#BetSizeRoll').val() <= 0) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Ставки от 0.01",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#rollred').hide();
            $('#succes_roll').hide();
            $('#error_roll').hide();
            $('#rollgreen').hide();
            $('#rollblack').hide();
        },
        data: {
            type: "betRed",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeRoll').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#hashPanel-roulette").hide();
                $(".roulette").css({
                    transition: 'transform 0s ease'
                });
                $(".roulette").css({
                    transform: 'rotate(0deg)'
                });
                var min = 0;
                var max = 21;
                var randomPx = Math.floor(Math.random() * (+max - +min)) + +min;
                var red = Array(346, 299, 251, 203, 155, 107, 59);
                var green = Array(10, 10);
                var black = Array(323, 275, 227, 179, 131, 83, 35);
                if (obj.what == "red") {
                    what = red[Math.floor(Math.random() * red.length)];
                }
                if (obj.what == "green") {
                    what = green[Math.floor(Math.random() * green.length)];
                }
                if (obj.what == "black") {
                    what = black[Math.floor(Math.random() * black.length)];
                }				
				var minTime = 9;
                var maxTime = 11;
				var animdeg = what - randomPx - 1440;
                var timeRand = Math.floor(Math.random() * (+maxTime - +minTime)) + +minTime;
                setTimeout(function() {
                    $(".roulette").css({
                        transition: 'all ' + timeRand + 's cubic-bezier(.4,.1,0,1)'
                    });
                    $(".roulette").css({
                        transform: 'rotate(' + animdeg + 'deg)'
                    });
                }, 100);
                var timeout = timeRand * 1000;				
                setTimeout(function() {
					$("#hashPanel-roulette").show();
					$("#hash-roulette").html(obj.hashGame);
				    $("#win_pos").html(obj.numberGame);
					$("#salt_game").html(obj.saltGame);
				    $("#hash_game").html(obj.hashGame);
				    $("#id_game").html(obj.idGame);
				    $("#id-check").html(obj.idGame);
					if(obj.winroll > 0){
					  $('#succes_roll').css("display", "block");
					  $('#succes_roll').html("<b>Поздравляем!</b><br>Выигрыш: <b>" + parseFloat(obj.winroll).toFixed(2) + " <i class='fas fa-coins'></i></b>");						
					}
					else{
					  $('#error_roll').css("display", "block");
					  $('#error_roll').html("<b>Проигрыш!</b><br>К сожалению, вы проиграли");
					}
                    $('#rollred').show();
                    $('#rollgreen').show();
                    $('#rollblack').show();
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }, timeRand*1000);
            }
            if (obj.success == 'error') {
				$('#error_roll').show();
                $('#error_roll').html(obj.error);
                $('#rollred').show();
                $('#rollgreen').show();
                $('#rollblack').show();
            }
        }

    });

}

function betgreen() {

    if ($('#BetSizeRoll').val() <= 0) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Ставки от 0.01",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#rollred').hide();
            $('#succes_roll').hide();
            $('#error_roll').hide();
            $('#rollgreen').hide();
            $('#rollblack').hide();
        },
        data: {
            type: "betGreen",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeRoll').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#hashPanel-roulette").hide();
                $(".roulette").css({
                    transition: 'transform 0s ease'
                });
                $(".roulette").css({
                    transform: 'rotate(0deg)'
                });
                var min = 0;
                var max = 21;
                var randomPx = Math.floor(Math.random() * (+max - +min)) + +min;
                var red = Array(346, 299, 251, 203, 155, 107, 59);
                var green = Array(10, 10);
                var black = Array(323, 275, 227, 179, 131, 83, 35);
                if (obj.what == "red") {
                    what = red[Math.floor(Math.random() * red.length)];
                }
                if (obj.what == "green") {
                    what = green[Math.floor(Math.random() * green.length)];
                }
                if (obj.what == "black") {
                    what = black[Math.floor(Math.random() * black.length)];
                }				
				var minTime = 9;
                var maxTime = 11;
				var animdeg = what - randomPx - 1440;
                var timeRand = Math.floor(Math.random() * (+maxTime - +minTime)) + +minTime;
                setTimeout(function() {
                    $(".roulette").css({
                        transition: 'all ' + timeRand + 's cubic-bezier(.4,.1,0,1)'
                    });
                    $(".roulette").css({
                        transform: 'rotate(' + animdeg + 'deg)'
                    });
                }, 100);
                var timeout = timeRand * 1000;				
                setTimeout(function() {
					$("#hashPanel-roulette").show();
					$("#hash-roulette").html(obj.hashGame);
				    $("#win_pos").html(obj.numberGame);
					$("#salt_game").html(obj.saltGame);
				    $("#hash_game").html(obj.hashGame);
				    $("#id_game").html(obj.idGame);
				    $("#id-check").html(obj.idGame);
					if(obj.winroll > 0){
					  $('#succes_roll').css("display", "block");
					  $('#succes_roll').html("<b>Поздравляем!</b><br>Выигрыш: <b>" + parseFloat(obj.winroll).toFixed(2) + " <i class='fas fa-coins'></i></b>");						
					}
					else{
					  $('#error_roll').css("display", "block");
					  $('#error_roll').html("<b>Проигрыш!</b><br>К сожалению, вы проиграли");
					}
                    $('#rollred').show();
                    $('#rollgreen').show();
                    $('#rollblack').show();
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }, timeRand*1000);
            }
            if (obj.success == 'error') {
				$('#error_roll').show();
                $('#error_roll').html(obj.error);
                $('#rollred').show();
                $('#rollgreen').show();
                $('#rollblack').show();
            }
        }

    });

}

function betblack() {

    if ($('#BetSizeRoll').val() <= 0) {
        Swal.fire({title: '<strong>Ошибка!</u></strong>',icon: 'error',html:"Ставки от 0.01",showCloseButton: true,focusConfirm: false,confirmButtonText:'ХОРОШО!'})
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#rollred').hide();
            $('#succes_roll').hide();
            $('#error_roll').hide();
            $('#rollgreen').hide();
            $('#rollblack').hide();
        },
        data: {
            type: "betBlack",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeRoll').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#hashPanel-roulette").hide();
                $(".roulette").css({
                    transition: 'transform 0s ease'
                });
                $(".roulette").css({
                    transform: 'rotate(0deg)'
                });
                var min = 0;
                var max = 21;
                var randomPx = Math.floor(Math.random() * (+max - +min)) + +min;
                var red = Array(346, 299, 251, 203, 155, 107, 59);
                var green = Array(10, 10);
                var black = Array(323, 275, 227, 179, 131, 83, 35);
                if (obj.what == "red") {
                    what = red[Math.floor(Math.random() * red.length)];
                }
                if (obj.what == "green") {
                    what = green[Math.floor(Math.random() * green.length)];
                }
                if (obj.what == "black") {
                    what = black[Math.floor(Math.random() * black.length)];
                }				
				var minTime = 9;
                var maxTime = 11;
				var animdeg = what - randomPx - 1440;
                var timeRand = Math.floor(Math.random() * (+maxTime - +minTime)) + +minTime;
                setTimeout(function() {
                    $(".roulette").css({
                        transition: 'all ' + timeRand + 's cubic-bezier(.4,.1,0,1)'
                    });
                    $(".roulette").css({
                        transform: 'rotate(' + animdeg + 'deg)'
                    });
                }, 100);
                var timeout = timeRand * 1000;				
                setTimeout(function() {
					$("#hashPanel-roulette").show();
					$("#hash-roulette").html(obj.hashGame);
				    $("#win_pos").html(obj.numberGame);
					$("#salt_game").html(obj.saltGame);
				    $("#hash_game").html(obj.hashGame);
				    $("#id_game").html(obj.idGame);
				    $("#id-check").html(obj.idGame);
					if(obj.winroll > 0){
					  $('#succes_roll').css("display", "block");
					  $('#succes_roll').html("<b>Поздравляем!</b><br>Выигрыш: <b>" + parseFloat(obj.winroll).toFixed(2) + " <i class='fas fa-coins'></i></b>");						
					}
					else{
					  $('#error_roll').css("display", "block");
					  $('#error_roll').html("<b>Проигрыш!</b><br>К сожалению, вы проиграли");
					}
                    $('#rollred').show();
                    $('#rollgreen').show();
                    $('#rollblack').show();
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }, timeRand*1000);
            }
            if (obj.success == 'error') {
				$('#error_roll').show();
                $('#error_roll').html(obj.error);
                $('#rollred').show();
                $('#rollgreen').show();
                $('#rollblack').show();
            }
        }

    });

}

function spin() {

    if ($('#BetSizeSlot').val() <= 0) {
        $('#error_slot').html('Ставки от 0.01 <i class="fas fa-coins"></i>');
        return $('#error_slot').css('display', '');
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#case1op').hide();
            $('#error_slot').hide();
            $('#succes_slot').hide();
        },
        data: {
            type: "slot",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeSlot').val(),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#hashPanel-slot").hide();
                var f = parseInt($("#ccspin").html());
                $('#ccspin').html(f - 1);
                $('#num1').html(obj.num1);
                $('#num2').html(obj.num2);
                $('#num3').html(obj.num3);
                setTimeout(function() {
                    if (obj.fswin == 1) {
                        setTimeout(function() {
                            window.location = "http://hotskins.club";
                        }, 1500);
                        $('#succes_slot').css('display', '');
						$("#hashPanel-slot").show();
				        $("#hash-slot").html(obj.hashGame);
						$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
						$("#hash_game").html(obj.hashGame);
						$("#id_game").html(obj.idGame);
						$("#id-check").html(obj.idGame);
                        $("#succes_slot").html("Выиграно <b>10</b> бесплатных вращений!<br>По ставке: <b>" + parseFloat(obj.win).toFixed(2) + "</b> <i class='fas fa-coins'></i>");
                    } else {
						$("#hashPanel-slot").show();
				        $("#hash-slot").html(obj.hashGame);
						$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
						$("#hash_game").html(obj.hashGame);
						$("#id_game").html(obj.idGame);
                        $("#succes_slot").show();
						$("#hashPanel-slot").show();
						$("#id-check").html(obj.idGame);
				        $("#hash-slot").html(obj.hashGame);
                        $("#succes_slot").html("Число <b>" + obj.num1 + "" + obj.num2 + "" + obj.num3 + "</b> на барабане!<br>Коэффициент: <b>" + parseFloat(obj.kef).toFixed(2) + "X</b><br>Выигрыш: <b>" + parseFloat(obj.win).toFixed(2) + "</b> <i class='fas fa-coins'></i>");
                    }
                    $('#case1op').show();
                    if (obj.countspins <= 1) {
                        $('#case1op').html("ВРАЩАТЬ");
                    }
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }, 2300);
            }
            if (obj.success == 'error') {

                $('#error_slot').css('display', '');
                $('#error_slot').html(obj.error);
                $('#case1op').html("ВРАЩАТЬ");
                $('#case1op').show();
            }

        }

    });

}

function bet_red() {
    if ($('#BetSizeCoin').val() <= 0) {
        $('#error_coin').html('Ставки от 0.01 <i class="fas fa-coins"></i>');
        return $('#error_coin').css('display', '');
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#betbuttons').hide();
            $('#error_coin').hide();			
            $('#succes_coin').hide();
        },
        data: {
            type: "Coinbet_red",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCoin').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#hashPanel-coin").hide();
                if (obj.flipResult <= 1) {
                    $('#coin').addClass('heads');
                } else {
                    $('#coin').addClass('tails');
                }
                setTimeout(function() {
                    $('#succes_coin').css('display', '');
                    $("#succes_coin").html("Выиграли <b>" + obj.resultBet + "!<br>Ваш выигрыш: " + parseFloat(obj.cfwin).toFixed(2) + " <i class='fas fa-coins'></i>");
                    $('#betbuttons').show();
					$("#hashPanel-coin").show();
				    $("#hash-coin").html(obj.hashGame);
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
					$('#coin').removeClass();
                }, 6000);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function upgrade() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_upgrade').hide();
            $('#succes_upgrade').hide();
			$('#btnUpgrade').hide();
        },
        data: {
            type: "upgradeBet",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeUpgrade').val(),
            wantwin: $('#upgradeWin').val(),
        },
        success: function(data) {
			console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				document.getElementById('status_upgrade').src = 'https://hotskins.club/files/upgrade/load.gif';
				$('#status_upgrade').hide();
                $('#status_upgrade').show();
                $("#hashPanel-upgrade").hide();				
                setTimeout(function() {
					document.getElementById('status_upgrade').src = 'https://hotskins.club/files/upgrade/'+obj.result+'.png';
					$("#hashPanel-upgrade").show();
				    $("#hash-upgrade").html(obj.hashGame);
					$("#id-check").html(obj.idGame);
					$("#win_pos").html(obj.result);
					$("#salt_game").html(obj.saltGame);
					$("#id_game").html(obj.idGame);
					$('#btnUpgrade').show();
					$("#hash_game").html(obj.hashGame);					
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                    $('#betbuttonsCrash').show();
                }, 4500);
            }
            if (obj.success == 'error') {

                $('#error_upgrade').css('display', '');
				$('#btnUpgrade').show();
                $('#error_upgrade').html(obj.error);
            }

        }

    });

}

function crashBet() {
    $("#hashPanel-crash").hide();
    var cashout = $('#cashoutCrash').val();

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#betbuttonsCrash').hide();
            $('#error_crash').hide();
            $('#succes_crash').hide();
        },
        data: {
            type: "crashBet",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCrash').val(),
            cashout: $('#cashoutCrash').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#crashX').html("0");
                $('#crashX').html(parseFloat(obj.crashNum).toFixed(2));
                setTimeout(function() {
                    $('#succes_crash').css('display', '');
					$("#hashPanel-crash").show();
				    $("#hash-crash").html(obj.hashGame);
					$("#id-check").html(obj.idGame);
					$("#win_pos").html(obj.numberGame);
					$("#id_game").html(obj.idGame);
					$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);					
                    $("#succes_crash").html("Ваш коэффициент: <b>" + cashout + "x</b><br>Выпал коэффициент: <b>" + parseFloat(obj.crashNum).toFixed(2) + "x<br>Ваш выигрыш: " + parseFloat(obj.profitx).toFixed(2) + " <i class='fas fa-coins'></i>");
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                    $('#betbuttonsCrash').show();
                }, 1800);
            }
            if (obj.success == 'error') {

                $('#error_crash').css('display', '');
                $('#error_crash').html(obj.error);
				$("#hashPanel-crash").show();
                $('#betbuttonsCrash').show();
            }

        }

    });

}

function bonusBuy1() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus1",
			sid: Cookies.get('sid')
        },
        success: function(data) {
			console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy2() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus2",
			sid: Cookies.get('sid')
        },		
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy3() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus3",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy4() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus4",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy5() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus5",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy6() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus6",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy7() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus7",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy8() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus8",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function bonusBuy9() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bbuy').hide();
            $('#succes_bbuy').hide();
        },
        data: {
            type: "buybonus9",
			sid: Cookies.get('sid')
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#succes_bbuy').css('display', '');
                $("#succes_bbuy").html("Покупка функции успешна произведена!");
                setTimeout(function() {
                    document.location = "/";
                }, 2500);
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}

function dicedrop() {
$('#betbuttonsDice').hide();
$("#hashPanel-dice").hide();
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_dice').hide();
            $('#betLoadDice').show();
            $('#succes_dice').hide();
            $('#dices').hide();
        },
        data: {
            type: "diceBet",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeDice').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {			
				$("#hashPanel-dice").show();
				$("#hash-dice").html(obj.hashGame);
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                console.log(data);
                $('#dices').show();
                document.getElementById('myDice').src = 'https://www.random.org/dice/dice' + obj.myDice + '.png';
                document.getElementById('enemyDice').src = 'https://www.random.org/dice/dice' + obj.enemyDice + '.png';
                $('#succes_dice').css('display', '');
                $('#betLoadDice').hide();
				 $('#betbuttonsDice').show();
                $("#succes_dice").html("Ваши кости: <b>" + obj.myDice + "</b><br>Кости диллера: <b>" + obj.enemyDice + "</b><br>Результат: <b>" + obj.result + "</b><br>Выигрыш: <b>" + obj.betx + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_dice').css('display', '');
                $('#error_dice').html(obj.error);
				$("#hashPanel-dice").show();
                $('#betbuttonsDice').show();
                $('#dices').show();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betLoadDice').hide();
            }

        }

    });

}

function playChest() {
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_chest').hide();
            $('#betbuttonsChest').hide();
            $('#succes_chest').hide();
        },
        data: {
            type: "playChest",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeChest').val(),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {	
                $('#playChest').hide();
				$("#hashPanel-chest").hide();
                $('#betchest').hide();
                $('#betbuttonsChest').hide();
                $('#chhs').hide();
                $('#openchest').show().each(function() {
                    this.offsetHeight;
                }).prop('src', 'https://thumbs.gfycat.com/DisguisedInsidiousAustraliansilkyterrier-small.gif');
                setTimeout(function() {
                    $('#openchest').hide();
                    $('#brs').show();
                    $('#multichest').fadeIn();
                    $('#multichest').html(obj.multiplier + "<span style='font-size:24px'>X</span>");
                }, 2000);
                setTimeout(function() {
                    $('#multichest').hide();
                    $('#playChest').fadeIn();
                    $('#chhs').show();
                    $('#betchest').fadeIn();
                    $('#succes_chest').show();
                    $('#brs').hide();
					$("#hashPanel-chest").show();
				    $("#hash-chest").html(obj.hashGame);
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);					
                    $('#succes_chest').html("Ваш выигрыш: <b>" + obj.res + "</b> <i class='fas fa-coins' style='color:gold'></i>");
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                }, 3600);
            }
            if (obj.success == 'error') {

                $('#error_chest').css('display', '');
                $('#error_chest').html(obj.error);
            }

        }

    });

}

function betLu() {

    var podtype = $('#typebet').html();

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_lu').hide();
            $('#succes_lu').hide();
        },
        data: {
            type: "betlu",
            podtype: podtype,
            sid: Cookies.get('sid'),
            bet: $('#BetSizeLu').val(),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#hashPanel-lu").hide();
                if (obj.ingame == "no") {
                    $('#activeGame').hide();
                    $('#createGamos').hide();
                    $('#mensheCoeff').html(obj.cef1);
                    $('#bolsheCoeff').html(obj.cef2);
                    $('#luNumber').html(obj.number);
                    $('#createGame').hide();
                    $("#betinputlu").hide();
                    $("#betinputlus").hide();
                    setTimeout(function() {
                        $('#activeGame').show();
                        $('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
                        $("#succes_lu").show();
                        $("#succes_lu").html("<b>Ставка сделана!</b><br>Выберите диапазон числа");
                    }, 2000);
                } else {
                    $('#activeGame').hide();
					$('#activePhp').hide();
                    setTimeout(function() {
                        $('#createGame').show();
                        $('#activePhp').hide();
                        $('#createGamos').show();
                    }, 2000);
                    $('#luNumber').html(obj.number);
                    setTimeout(function() {
                        $('#userBalance').attr('myBalance', obj.new_balance);
                        updateBalance(obj.balance, obj.new_balance);
                        $("#succes_lu").show();
						$("#hashPanel-lu").show();
					    $("#win_pos").html(obj.number);
					    $("#hash_game").html(obj.hashGame);
						$("#salt_game").html(obj.saltGame);	
					    $("#id_game").html(obj.idGame);
					    $("#id-check").html(obj.idGame);						
				        $("#hash-lu").html(obj.hashGame);
                        $("#betinputlu").show();
                        $("#succes_lu").html("Число: <b>" + obj.numprev + "</b><br>Выпавшее число: <b>" + obj.number + "</b><br>Ставка: <b>" + obj.betact + " <i class='fas fa-coins'></i></b><br>Выигрыш: <b>" + obj.actualcf + "</b> <i class='fas fa-coins'></i>");
                    }, 2000);
                }
            }
            if (obj.success == 'error') {

                $('#error_lu').css('display', '');
                $('#error_lu').html(obj.error);
            }

        }

    });

}

function betbj() {

    var podtype = $('#bjtypebet').html();

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_bj').hide();
            $('#succes_bj').hide();
        },
        data: {
            type: "betbj",
            podtype: podtype,
            sid: Cookies.get('sid'),
            bet: $('#BetSizeBj').val(),
        },
        success: function(data) {
            console.log(data);
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                if (obj.ingame == "no") {
                    document.getElementById("myCard1").style.backgroundImage = "url(files/bjcards/" + obj.playercard1 + ".png)";
                    document.getElementById("myCard2").style.backgroundImage = "url(files/bjcards/" + obj.playercard2 + ".png)";
                    document.getElementById("enemyCard1").style.backgroundImage = "url(files/bjcards/" + obj.dealercard1 + ".png)";
                    document.getElementById("enemyCard2").style.backgroundImage = "url(files/bjcards/" + obj.dealercard2 + ".png)";
                    $('#myCards').html(obj.playercards);
                    $('#bjActivePage').show();
                    $('#bjCreate').hide();
                    $('#dealerCards').html(obj.dealercards);
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
                    $('#succes_bj').show();
                    $('#succes_bj').html("<b>Успешно!</b><br>Игра создана");
                    if (obj.res == "win") {
                        $('#succes_bj').hide();
                        $('#succes_bj').show();
                        $('#succes_bj').html("<b>Вы выиграли!</b><br>Выигрыш: <b>" + obj.profit + " <i class='fas fa-coins'></i></b>");
                        $('#bjActivePage').hide();
                        $('#bjCreate').show();
                    }
                    if (obj.res == "no") {
                        $('#error_bj').hide();
                        $('#error_bj').show();
                        $('#error_bj').html("<b>Вы проиграли!</b><br>Попробуйте сыграть еще раз!");
                        $('#bjActivePage').hide();
                        $('#bjCreate').show();
                    }
                    if (obj.res == "draw") {
                        $('#succes_bj').hide();
                        $('#succes_bj').show();
                        $('#succes_bj').html("<b>Ничья!</b><br>Попробуйте сыграть еще раз!");
                        $('#bjActivePage').hide();
                        $('#bjCreate').show();
                    }
                }
            }
            if (obj.podtype == "stop") {

                document.getElementById("enemyCard3").style.backgroundImage = "url(files/bjcards/" + obj.dealerGen1 + ".png)";
                document.getElementById("enemyCard4").style.backgroundImage = "url(files/bjcards/" + obj.dealerGen2 + ".png)";
                document.getElementById("enemyCard5").style.backgroundImage = "url(files/bjcards/" + obj.dealerGen3 + ".png)";
                $('#dealerCards').html(obj.dealerSum);
                if (obj.res == "win") {
                    $('#succes_bj').hide();
                    $('#succes_bj').show();
                    $('#succes_bj').html("<b>Вы выиграли!</b><br>Выигрыш: <b>" + obj.profit + " <i class='fas fa-coins'></i></b>");
                    $('#bjActivePage').hide();
                    $('#bjCreate').show();
                }
                if (obj.res == "no") {
                    $('#error_bj').hide();
                    $('#error_bj').show();
                    $('#error_bj').html("<b>Вы проиграли!</b><br>Попробуйте сыграть еще раз!");
                    $('#bjActivePage').hide();
                    $('#bjCreate').show();
                }
                if (obj.res == "draw") {
                    $('#succes_bj').hide();
                    $('#succes_bj').show();
                    $('#succes_bj').html("<b>Ничья!</b><br>Попробуйте сыграть еще раз!");
                    $('#bjActivePage').hide();
                    $('#bjCreate').show();
                }
            }
            if (obj.success == 'error') {

                $('#error_bj').css('display', '');
                $('#error_bj').html(obj.error);
            }

        }

    });

}

function changeCode() {
	
    $.ajax({
        type: 'POST',
        url: 'action.php',
	    beforeSend: function() {
			$("#error_code").hide();
			$("#succes_code").hide();
		},
        data: {
            type: "changeCode",
            sid: Cookies.get('sid'),
            pass: $('#currentPass').val(),
			code: $('#secretCode').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") 
			{    
		        $("#succes_code").show();
                $("#succes_code").html("Изменения сохранены.");
            }
            if (obj.success == 'error') 
			{
                $("#error_code").show();
                $('#error_code').html(obj.error);
            }

        }

    });

}

function cardbet_red() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_card').hide();
            $('#betLoadCard').show();
            $('#succes_card').hide();
            $('#playingCard').hide();
        },
        data: {
            type: "cardbet_red",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCard').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                console.log(data);
                $('#playingCard').show();
                if (obj.card == "black") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/2.png';
                    var card = "Черная";
                }
                if (obj.card == "red") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/3.png';
                    var card = "Красная";
                }
                $('#succes_card').css('display', '');
                $('#betLoadCard').hide();
				$("#hashPanel-card").show();
				$("#hash-card").html(obj.hashGame);
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                $("#succes_card").html("Цвет карты: <b>" + card + "</b><br>Коэффициент: <b>" + obj.win + "x</b><br>Выигрыш: <b>" + obj.resultBet + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_card').css('display', '');
                $('#error_card').html(obj.error);
                $('#betbuttonsCard').show();
                $('#playingCard').show();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betLoadCard').hide();
            }

        }

    });

}

function cardbet_black() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_card').hide();
            $('#succes_card').hide();
            $('#betLoadCard').show();
            $('#playingCard').hide();
        },
        data: {
            type: "cardbet_black",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCard').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                console.log(data);
                $('#playingCard').show();
                if (obj.card == "black") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/2.png';
                    var card = "Черная";
                }
                if (obj.card == "red") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/3.png';
                    var card = "Красная";
                }
                $('#succes_card').css('display', '');
                $('#betLoadCard').hide();
				$("#hashPanel-card").show();
				$("#hash-card").html(obj.hashGame);		
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                $("#succes_card").html("Цвет карты: <b>" + card + "</b><br>Коэффициент: <b>" + obj.win + "x</b><br>Выигрыш: <b>" + obj.resultBet + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_card').css('display', '');
                $('#error_card').html(obj.error);
                $('#playingCard').show();
                $('#betLoadCard').hide();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betbuttonsCard').show();
            }

        }

    });

}

function cardbet_spades() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_card').hide();
            $('#succes_card').hide();
            $('#betLoadCard').show();
            $('#playingCard').hide();
        },
        data: {
            type: "cardbet_spades",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCard').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                console.log(data);
                $('#playingCard').show();
                if (obj.rand == "1") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/2.png';
                    var mast = "Пики";
                }
                if (obj.rand == "2") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/1.png';
                    var mast = "Трефы";
                }
                if (obj.rand == "3") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/3.png';
                    var mast = "Черви";
                }
                if (obj.rand == "4") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/4.png';
                    var mast = "Бубны";
                }
                $('#succes_card').css('display', '');
                $('#betLoadCard').hide();
				$("#hashPanel-card").show();
				$("#hash-card").html(obj.hashGame);	
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                $("#succes_card").html("Масть карты: <b>" + mast + "</b><br>Коэффициент: <b>" + obj.win + "x</b><br>Выигрыш: <b>" + obj.resultBet + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_card').css('display', '');
                $('#error_card').html(obj.error);
                $('#betLoadCard').hide();
                $('#playingCard').show();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betbuttonsCard').show();
            }

        }

    });

}

function cardbet_clubs() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_card').hide();
            $('#succes_card').hide();
            $('#betLoadCard').show();
            $('#playingCard').hide();
        },
        data: {
            type: "cardbet_clubs",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCard').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                console.log(data);
                $('#playingCard').show();
                if (obj.rand == "1") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/2.png';
                    var mast = "Пики";
                }
                if (obj.rand == "2") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/1.png';
                    var mast = "Трефы";
                }
                if (obj.rand == "3") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/3.png';
                    var mast = "Черви";
                }
                if (obj.rand == "4") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/4.png';
                    var mast = "Бубны";
                }
                $('#succes_card').css('display', '');
                $('#betLoadCard').hide();
				$("#hashPanel-card").show();
				$("#hash-card").html(obj.hashGame);		
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                $("#succes_card").html("Масть карты: <b>" + mast + "</b><br>Коэффициент: <b>" + obj.win + "x</b><br>Выигрыш: <b>" + obj.resultBet + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_card').css('display', '');
                $('#error_card').html(obj.error);
                $('#betLoadCard').hide();
                $('#playingCard').show();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betbuttonsCard').show();
            }

        }

    });

}

function cardbet_hearts() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_card').hide();
            $('#succes_card').hide();
            $('#betLoadCard').show();
            $('#playingCard').hide();
        },
        data: {
            type: "cardbet_hearts",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCard').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                console.log(data);
                $('#playingCard').show();
                if (obj.rand == "1") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/2.png';
                    var mast = "Пики";
                }
                if (obj.rand == "2") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/1.png';
                    var mast = "Трефы";
                }
                if (obj.rand == "3") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/3.png';
                    var mast = "Черви";
                }
                if (obj.rand == "4") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/4.png';
                    var mast = "Бубны";
                }
                $('#succes_card').css('display', '');
                $('#betLoadCard').hide();
				$("#hashPanel-card").show();
				$("#hash-card").html(obj.hashGame);	
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                $("#succes_card").html("Масть карты: <b>" + mast + "</b><br>Коэффициент: <b>" + obj.win + "x</b><br>Выигрыш: <b>" + obj.resultBet + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_card').css('display', '');
                $('#error_card').html(obj.error);
                $('#betLoadCard').hide();
                $('#playingCard').show();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betbuttonsCard').show();
            }

        }

    });

}

function cardbet_diamonds() {

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#error_card').hide();
            $('#succes_card').hide();
            $('#betLoadCard').show();
            $('#playingCard').hide();
        },
        data: {
            type: "cardbet_diamonds",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCard').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                console.log(data);
                $('#playingCard').show();
                if (obj.rand == "1") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/2.png';
                    var mast = "Пики";
                }
                if (obj.rand == "2") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/1.png';
                    var mast = "Трефы";
                }
                if (obj.rand == "3") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/3.png';
                    var mast = "Черви";
                }
                if (obj.rand == "4") {
                    document.getElementById('default').src = 'https://www.random.org/playing-cards/4.png';
                    var mast = "Бубны";
                }
                $('#succes_card').css('display', '');
                $('#betLoadCard').hide();
				$("#hashPanel-card").show();
				$("#hash-card").html(obj.hashGame);	
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);				
                $("#succes_card").html("Масть карты: <b>" + mast + "</b><br>Коэффициент: <b>" + obj.win + "x</b><br>Выигрыш: <b>" + obj.resultBet + " <i class='fas fa-coins'></i></b>");
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == 'error') {

                $('#error_card').css('display', '');
                $('#error_card').html(obj.error);
                $('#betLoadCard').hide();
                $('#playingCard').show();
                document.getElementById('default').src = 'files/cards/errorb.png';
                $('#betbuttonsCard').show();
            }

        }

    });

}

function bet_gray() {
    if ($('#BetSizeCoin').val() <= 0) {
        $('#error_coin').html('Ставки от 0.01 <i class="fas fa-coins"></i>');
        return $('#error_coin').css('display', '');
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#betbuttons').hide();
            $('#error_coin').hide();
            $('#succes_coin').hide();
        },
        data: {
            type: "Coinbet_gray",
            sid: Cookies.get('sid'),
            bet: $('#BetSizeCoin').val(),
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                if (obj.flipResult <= 1) {
                    $('#coin').addClass('heads');
                } else {
                    $('#coin').addClass('tails');
                }
                setTimeout(function() {
                    $('#succes_coin').css('display', '');
                    $("#succes_coin").html("Выиграли <b>" + obj.resultBet + "!<br>Ваш выигрыш: " + parseFloat(obj.cfwin).toFixed(2) + " <i class='fas fa-coins'></i>");
                    $('#betbuttons').show();
					$("#hashPanel-coin").show();
				    $("#hash-coin").html(obj.hashGame);
					$("#win_pos").html(obj.numberGame);$("#salt_game").html(obj.saltGame);
					$("#hash_game").html(obj.hashGame);
					$("#id_game").html(obj.idGame);
					$("#id-check").html(obj.idGame);
                    $('#userBalance').attr('myBalance', obj.new_balance);
                    updateBalance(obj.balance, obj.new_balance);
					$('#coin').removeClass();
                }, 6000);
            }
            if (obj.success == 'error') {

                $('#error_coin').css('display', '');
                $('#error_coin').html(obj.error);
                $('#betbuttons').show();
            }

        }

    });

}




function updateNumber(start, end) {

    var el1 = document.getElementById('num1');
    var el2 = document.getElementById('num2');
    var el3 = document.getElementById('num3');
    od = new Odometer({
        el: el1,
        value: start
    });
    od.update(end);
    od = new Odometer({
        el: el2,
        value: start
    });
    od.update(end);
    od = new Odometer({
        el: el3,
        value: start
    });
    od.update(end);
}

function roulette(start, end) {

    var roll = document.getElementById('rollnum');
    od = new Odometer({
        el: roll,
        value: start
    });
    od.update(end);
}

function crashx(start, end) {

    var roll = document.getElementById('crashX');
    od = new Odometer({
        el: roll,
        value: start
    });
    od.update(end);
}

function updateLu(start, end) {

    var ffff = document.getElementById('luNumber');
    od = new Odometer({
        el: ffff,
        value: start
    });
    od.update(end);
}


function bet(type) {
	var sum = $('#BetSize').val();
    if ($('#BetPercent').val() > 85 || $('#BetPercent').val() < 1) {
        $('#error_bet').html('% Шанс от 1 до 85');
        return $('#error_bet').css('display', '');
    }
    if ($('#BetSize').val() <= 0) {
        $('#error_bet').html('Ставки от 0.01 <i class="fas fa-coins"></i>');
        return $('#error_bet').css('display', '');
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#checkBet').css('display', 'none');
            $('#error_bet').css('display', 'none')
            $('#succes_bet').css('display', 'none')
            $('#betLoad').css('display', '');
            $('#buttonMax').css('pointer-events', 'none');
            $('#buttonMin').css('pointer-events', 'none');
        },
        data: {
            type: type,
            sid: Cookies.get('sid'),
            hid: $('#hashBet').attr('hid'),
            betSize: $('#BetSize').val(),
            betPercent: $('#BetPercent').val(),
        },
        success: function(data) {
            $('#buttonMax').css('pointer-events', '');
            $('#buttonMin').css('pointer-events', '');
            $('#betLoad').css('display', 'none');
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				
			   // $("#hash_check").html(obj.hash);
			   // $("#amount_check").html(parseFloat(sum).toFixed(2));
			    //$("#num_check").html("<b>"+obj.number+"</b>");
			   // $("#percent_check").html(""+obj.chance+"% ("+obj.cel+")");
			    //$("#result_check").html(parseFloat(obj.profit).toFixed(2));
				
               var chash = $("#hashBet").html();
				         $("#win_pos").html(obj.number);
					     $("#salt_game").html(obj.saltall);
						 $("#id_game").html(obj.check_bet);
				         $("#hash_game").html(chash);
						 $("#id-check").html(obj.check_bet);	
						 
                $('#checkBet').css('display', '');

                $('#checkBet').attr('href', 'game.php?id=' + obj.check_bet);
                if (obj.type == 'win') {
                    $('#succes_bet').css('display', '');
                    $("#succes_bet").html("<b>Выиграли " + parseFloat(obj.profit).toFixed(2) + " <i class='fas fa-coins'></i></b>");
                }
                if (obj.type == 'lose') {

                    $('#error_bet').css('display', '');
                    $("#error_bet").html("Выпало " + obj.number + "");
                }
                $("#hashBet").html(obj.hash);
                Cookies.set('hid', obj.hid, {
                    path: '/',
                    secure: true
                });
                $('#hashBet').attr('hid', obj.hid);
                sss();
                //updateHash();
                $('#userBalance').attr('myBalance', obj.new_balance);
                updateBalance(obj.balance, obj.new_balance);
            }
            if (obj.success == "error") {
                $('#error_bet').html(obj.error);
                return $('#error_bet').css('display', '');
            }

        }
    });

}

function autoclick() {
    myVar = setInterval(function() {
        click1()
    }, 900);
}


function click1() {
    $('#autoclick').hide();
    $('#stopauto').show();
    $('#buttonMax').click();
}

function autoclickstop() {
    $('#autoclick').show();
    $('#stopauto').hide();
    clearInterval(myVar);
}

function updateProfit() {
    $('#BetProfit').html(((100 / $('#BetPercent').val()) * $('#BetSize').val()).toFixed(2));
    $('#MinRange').html(Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#MaxRange').html(999999 - Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#BetX').html(((100 / $('#BetPercent').val())).toFixed(2));
	$('#upgradeCef').html((($('#upgradeWin').val() / $('#BetSizeUpgrade').val())).toFixed(2));
	$('#upgradeChance').html(((100 / $('#upgradeCef').html())).toFixed(2));
    if ($('#BetPercent').val() == '') {
        $('#BetProfit').html(0);
    }
    if ($('#BetSize').val() == '') {
        $('#BetProfit').html(0);
    }
    if ($('#BetPercent').val() <= 0) {
        $('#BetProfit').html(0);
    }
    if ($('#BetSize').val() <= 0) {
        $('#BetProfit').html(0);
    }
}

function sss() {
    $('#hashBet').fadeOut('slow', function() {
        $('#hashBet').fadeIn('slow', function() {

        });
    });
}
$('#BetPercent').keyup(function() {
    $('#BetProfit').html(((100 / $('#BetPercent').val()) * $('#BetSize').val()).toFixed(2));
    $('#MinRange').html(Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#MaxRange').html(999999 - Math.floor(($('#BetPercent').val() / 100) * 999999));
});
$('#BetSize').keyup(function() {
    $('#MinRange').html(Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#MaxRange').html(999999 - Math.floor(($('#BetPercent').val() / 100) * 999999));
    $('#BetProfit').html(((100 / $('#BetPercent').val()) * $('#BetSize').val()).toFixed(2));
});

function deposit() {
    if ($('#depositSize').val() == '') {
        $('#error_deposit').show();
        return $('#error_deposit').html('Введите сумму');
    }

    if (!$.isNumeric($('#depositSize').val())) {
        $('#error_deposit').show();
        return $('#error_deposit').html('Введите корректную сумму');
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        data: {
            type: "deposit",
            sid: Cookies.get('sid'),
            system: $('#systemPay').val(),
            size: $('#depositSize').val()
        },
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
                $('#depositLoad').show();
                window.location.href = obj.locations;
            }

            if (obj.success == "error") {
                $('#error_deposit').show();
                return $('#error_deposit').html(obj.text);
            }

        }
    });

}

function wEmail() {
    if ($('#WithdrawSize').val() == '' || $('#walletNumber').val() == '' || $('#hide_search').val() == '') {
        $('#error_withdraw').show();
        return $('#error_withdraw').html('Заполните все поля');
    }
	if($("#conf_withdraw").is(":not(:checked)")){
		$('#error_withdraw').show();
        return $('#error_withdraw').html('Поставьте галочку');
	}

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#withdrawB').html('');
            $('#error_withdraw').hide();
            $('#succes_withdraw').hide();
            $('#loader').css('display', '');
        },
        data: {
            type: "wEmail",
            sid: Cookies.get('sid'),
            system: $('#hide_search').val(),
            size: $('#WithdrawSize').val(),
            wallet: $('#walletNumber').val()
        },
        success: function(data) {
            $('#withdrawB').html('Выплата');
         
            $('#loader').css('display', 'none');
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$("#cwbutton").attr("onclick", "withdraw()");
				$('#succes_withdraw').show();
				$('#succes_withdraw').html("Код подтверждения отправлен на почту!");
				$("#code_wi").show();
            }

            if (obj.success == "error") {
                $('#error_withdraw').show();
                return $('#error_withdraw').html(obj.error);
            }

        }
    });
}

function withdraw() {
    if ($('#WithdrawSize').val() == '' || $('#walletNumber').val() == '' || $('#hide_search').val() == '') {
        $('#error_withdraw').show();
        return $('#error_withdraw').html('Заполните все поля');
    }
	if($("#conf_withdraw").is(":not(:checked)")){
		$('#error_withdraw').show();
        return $('#error_withdraw').html('Поставьте галочку');
	}

    $.ajax({
        type: 'POST',
        url: 'action.php',
        beforeSend: function() {
            $('#withdrawB').html('');
            $('#error_withdraw').hide();
            $('#succes_withdraw').hide();
            $('#loader').css('display', '');
        },
        data: {
            type: "withdraw",
            sid: Cookies.get('sid'),
            system: $('#hide_search').val(),
			code: $('#codeWid').val(),
            size: $('#WithdrawSize').val(),
            wallet: $('#walletNumber').val()
        },
        success: function(data) {


            $('#withdrawB').html('Выплата');

            $('#loader').css('display', 'none');
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
				$('#succes_withdraw').html("Выплата успешно создана!");
                $('#emptyHistory').hide();
                $('#succes_withdraw').show();
                var tt = $('#withdrawT').html();
                $('#withdrawT').html(obj.add_bd + tt);
                updateBalance(obj.balance, obj.new_balance);
            }

            if (obj.success == "error") {
                $('#error_withdraw').show();
                return $('#error_withdraw').html(obj.error);
            }

        }
    });
}

function withdrawSelect() {
    $('#walletNumber').val('');
    var e = $('#hide_search').val();
    if (e == 1) {
        $('#walletNumber').attr('placeholder', '+79..');
    }
    if (e == 2) {
        $('#walletNumber').attr('placeholder', 'P1939677..');
    }
    if (e == 3) {
        $('#walletNumber').attr('placeholder', '41005236...');
    }
    if (e == 4) {
        $('#walletNumber').attr('placeholder', '2202..');
    }
    if (e == 5) {
        $('#walletNumber').attr('placeholder', '2202..');
    }	
    if (e == 6) {
        $('#walletNumber').attr('placeholder', '1BcjM48F...');
    }	
    if (e == 7) {
        $('#walletNumber').attr('placeholder', '0x83l381vmm..');
    }	
	
};
