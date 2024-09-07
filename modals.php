<div class="modal fade" id="loginAccount" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Авторизация</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="md-form mb-2">
               <div class="input-icons"> 
                  <i class="fas fa-user icon"></i> 
                  <input class="form-control" style="text-align:center" type="text" id="userLogin" placeholder="Логин"> 
               </div>
            </div>
            <div class="md-form mb-2">
               <div class="input-icons"> 
                  <i class="fas fa-lock icon"></i> 
                  <input class="form-control" style="text-align:center" type="password" id="userPass" placeholder="Пароль"> 
               </div>
            </div>
            <br>		 
            <div class="md-form mb-2">
               <div class="g-recaptcha" data-sitekey="6Lfus-8ZAAAAADVZk2HFyo58fOrxNIQUIJdAcWzA"></div>
            </div>
            <p class="text-primary" style="cursor:pointer" data-toggle="modal" data-dismiss="modal" data-target="#createAccount">Нет аккаунта? <span style="text-decoration:underline">Зарегистрируйте!</span></p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="login()"><i class="fas fa-check"></i>&nbsp;Войти в аккаунт</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade text-xs-left" id="slotCoeff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" style="font-weight:600">Таблица выплат</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-12" style="margin-top:8px;display:inline-block">
                  <center>
                     <span class="text-muted"><b>*</b> - любое число</span>
                     <br>
                     <span class="text-muted"><b>0**</b> - выплачивает <b>1.5X</b></span><br>
                     <span class="text-muted"><b>7**</b> - выплачивает <b>2X</b></span><br>
                     <span class="text-muted"><b>*7*</b> - выплачивает <b>2X</b></span><br>
                     <span class="text-muted"><b>**7</b> - выплачивает <b>2X</b></span><br>
                     <span class="text-muted"><b>00*</b> - выплачивает <b>3X</b></span><br>
                     <span class="text-muted"><b>*00</b> - выплачивает <b>3X</b></span><br>
                     <span class="text-muted"><b>7*7</b> - выплачивает <b>4X</b></span><br>
                     <span class="text-muted"><b>*77</b> - выплачивает <b>5X</b></span><br>
                     <span class="text-muted"><b>123</b> - выплачивает <b>5X</b></span><br>
                     <span class="text-muted"><b>111</b> - выплачивает <b>20X</b></span><br>
                     <span class="text-muted"><b>555</b> - выплачивает <b>30X</b></span><br>
                     <span class="text-muted"><b>999</b> - выплачивает <b>50X</b></span><br>
                     <span class="text-muted"><b>000</b> - выплачивает <b>10X</b></span><br>
                     <span class="text-muted"><b>777</b> - выплачивает <b>100X</b></span><br>
                     <br>
                     <span class="text-muted"><b>0*0</b> - запускает <b>бонусную игру</b>, выплачивает <b>1X</b></span>
                     <br>
                     <br>
                     <span class="text-muted"><b>Таблица выплат в бонусной игре:</b></span><br>
                     <span class="text-muted"><b>0**</b> - выплачивает <b>5X</b></span><br>
                     <span class="text-muted"><b>7**</b> - выплачивает <b>10X</b></span><br>
                     <span class="text-muted"><b>*7*</b> - выплачивает <b>10X</b></span><br>
                     <span class="text-muted"><b>**7</b> - выплачивает <b>10X</b></span><br>
                     <span class="text-muted"><b>77*</b> - выплачивает <b>50X</b></span><br>
                     <span class="text-muted"><b>7*7</b> - выплачивает <b>50X</b></span><br>
                     <span class="text-muted"><b>*77</b> - выплачивает <b>50X</b></span><br>
                     <span class="text-muted"><b>777</b> - выплачивает <b>1000X</b></span><br>
                  </center>
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
            <h4 class="modal-title" style="font-weight:600">Проверка Hash игры #<span id="id-check"></span></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row" style="padding-bottom:15px">
               <div class="col-lg-8 offset-lg-2" style="padding-bottom:5px">
                  <br>
                  <h5 style="color:#4bb543;font-weight:600;font-size:16px">
                     <center><i class="fas fa-check"></i> HASH VERIFIED!<br><Br>WINNING POS: <span id="win_pos"></span><br>HASH: <span id="hash_game" style="overflow-wrap: break-word;"></span><br>SALT: <span id="salt_game"></span><br>ID GAME: <span id="id_game"></span></center>
                  </h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="createAccount" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Регистрация аккаунта</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p class="text-muted" style="font-size:16px">Зарегистрируйте аккаунт и получите бонус на свой счет!</p>
            <div class="md-form mb-2">
               <div class="input-icons"> 
                  <i class="fas fa-user icon"></i> 
                  <input class="form-control" style="text-align:center" type="text" id="userLoginRegister" placeholder="Логин"> 
               </div>
            </div>
            <div class="md-form mb-2">
               <div class="input-icons"> 
                  <i class="fas fa-envelope icon"></i> 
                  <input class="form-control" style="text-align:center" type="email" id="userEmailRegister" placeholder="E-mail"> 
               </div>
            </div>
            <div class="md-form mb-2">
               <div class="input-icons"> 
                  <i class="fas fa-lock icon"></i> 
                  <input class="form-control" style="text-align:center" type="password" id="userPassRegister" placeholder="Пароль"> 
               </div>
            </div>
            <br>
            <div class="md-form mb-2">
               <label class="ui-check m-0 ui-check-rounded ui-check-md" style=""><input type="checkbox" name="id" id="rulesagree" value="8"><i></i><span class="item-except text-muted text-sm h-1x" style="font-size: 16px;FLOAT: RIGHT;MARGIN-LEFT: 4PX;">Согласен с <span style="text-decoration:underline" data-toggle="modal" data-target="#tos">правилами</span></span></label>
            </div>
            <div class="md-form mb-2">
               <div class="g-recaptcha" data-sitekey="6Lfus-8ZAAAAADVZk2HFyo58fOrxNIQUIJdAcWzA
"></div>
            </div>
            <p class="text-primary" style="cursor:pointer" data-toggle="modal" data-dismiss="modal" data-target="#loginAccount">Есть аккаунт? <span style="text-decoration:underline">Авторизируйтесь</span></p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="emReg()"><i class="fas fa-check"></i>&nbsp;Создать аккаунт</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade text-xs-left in" id="tos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" style="display: none; ">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Правила</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <h5>1. ОБЩИЕ ПОЛОЖЕНИЯ. ТЕРМИНЫ.</h5>
            <p>1.1. Настоящее соглашение – официальный договор на пользование услугами сервиса HOTSKINS. Ниже приведены основные условия пользования услугами сервиса. Пожалуйста, прежде чем принять участие в проекте внимательно изучите правила.</p>
            <p>1.2. Услугами сервиса могут пользоваться исключительно лица, достигшие совершеннолетия (18 лет) и старше. </p>
            <p>1.3. On-line проект под названием HOTSKINS представляет собой систему добровольных пожертвований, принадлежит его организатору и находится в сети Интернет непосредственно по адресу – <em>hotskins.club</em>. </p>
            <p>1.4. Участие пользователей в проекте является исключительно добровольным.</p>
            <p>1.5. Основной валютой сайта являются монеты <br><b>1 <i class="fas fa-coins"></i> - 1 RUB</b></p>
            <p>1.6. Курс основной валюты может независимо меняться.</p>
            <hr>
            <h5>2. УЧЁТНАЯ ЗАПИСЬ УЧАСТНИКА ПРОЕКТА (ПОЛЬЗОВАТЕЛЯ СИСТЕМЫ).</h5>
            <p>2.1. Способом непосредственной регистрации учетной записи является авторизация участников проекта с помощью логина и пароля.</p>
            <p>2.3. Кроме того, участник проекта несет непосредственную ответственность за любые предпринятые им действия в рамках проекта. </p>
            <p>2.4. Участник проекта обязуется своевременно сообщить о противозаконном доступе к его учетной записи, противозаконном использовании его учетной записи, по средствам технической поддержки сервиса. </p>
            <p>2.5. Сервис, а также его правообладатель не несут ответственность за любые предпринятые действия участником проекта касательно третьих лиц. </p>
            <p>2.6. При использовании несколькими участниками проекта одно и тоже устройство или выход в интернет для игры, необходимо согласование с администрацией. </p>
            <p>2.7. В целях безопасности, для предотвращения несанкционированного доступа к Вашему аккаунту, на почту, которую Вы указали при регистрации будут приходить письма при попытке выплаты средств, а так же письмо, подтверждающее регистрацию аккаунта на нашем сайте. Вы будете получать только необходимые письма для полноценного пользования нашим сайтом, мы не будем производить лишних рассылок на Вашу почту.</p>
            <hr>
            <h5>3. КОНФИДЕНЦИАЛЬНОСТЬ</h5>
            <p>3.1. В рамках проекта гарантируется абсолютная конфиденциальность информации, предоставленной участником проекта сервису. </p>
            <p>3.2. В рамках проекта гарантируется шифрование личных паролей участников. </p>
            <p>3.3	Личные данные участника проекта могут быть представлены третьим лицам исключительно в случаях непосредственного нарушения действующих законов РФ, в случаях оскорбительного поведения, клеветы в отношении третьих лиц. </p>
            <hr>
            <h5>4. УЧАСТНИК ПРОЕКТА (ПОЛЬЗОВАТЕЛЬ СИСТЕМЫ).</h5>
            <p>4.1. В случае непосредственного нарушения участником проекта изложенных условий и правил настоящего соглашения, а также действующих законов РФ, учетная запись может быть заблокирована. </p>
            <p>4.2. Недопустимы попытки противозаконного доступа, нанесения вреда работе системы сервиса. </p>
            <p>4.3. Недопустима любая агрессия, сообщения, запрограммированные на причинение ущерба сервису (вирусы), информация, способная повлечь за собой несущественный, или существенный вред третьим лицам.</p>
            <hr>
            <h5>5. КАТЕГОРИЧЕСКИ ЗАПРЕЩЕНО</h5>
            <p>5.1. Размещение информации, содержащей поддельные (неправдивые) данные. 
            <p>5.2. Проводить попыток взлома сайта и использовать возможные ошибки в скриптах. Нарушители будут немедленно забанены и удалены. 
            <p>5.3. Регистрация более чем одной учетной записи индивидуального участника проекта. 
            <p>5.4. Передача информации иным, третьим лицам, содержащей данные для доступа к личной учетной записи участника проекта. 
            <p>5.5. Выплата на одинаковые реквизиты с разных аккаунтов. 
            <p>5.6. Махинации с реферальной системой.
            <p>5.7. Иметь больше 1 аккаунта.
            <p>5.8. Любой вид автоматизации ставок.
            <hr>
            <h5>6. Выплаты и пополнения.</h5>
            <p>6.1 Выплаты производятся в ручном режиме.</p>
            <p>6.1.2 Выплаты происходят от 1 минуты до 24ч. </p>
            <p>6.2 Если сумма последних пополнений равна сумме вывода, комиссию оплачивает пользователь. </p>
            <p>6.3 Администрация сайта может потребовать скан или фото паспорта для верификации.</p>
            <p>6.4 При отказе предоставить дополнительную информацию или верификации кошелька аккаунт может быть заблокирован.</p>
            <p>6.5 При нарушении правил баланс аккаунта может быть заморожен.</p>
            <p>6.6 Если вы имеете больше 1 аккаунта & более 1 аккаунта зарегистрировано на Ваш IP, то администрация в праве отказать в выплате.</p>
            <p>6.7 Логинам состоящим из набора случайных букв (знаков) может быть отказано в выплате.</p>
            <p>6.8 Максимальная сумма вывода для бонусного счета - 50 <i class="fas fa-coins"></i>.</p>
            <p>6.9 Для вывода бонусного/реферального баланса вы должны отыграть сумму - (сумма промокода*4/награда за рефа*0.5), сумма начинает отыгрыватся только в том условии, если шанс выигрыша равен или меньше 40%. </p>
            <p>6.9.1 После пополнения баланса Вам нужно будет отыграть сумму равную сумме пополнения в режиме Dice. (сумма начинает отыгрыватся только в том условии, если шанс выигрыша равен или меньше 40%).</p>
            <p>6.9.2 При использовании VPN & прокси и любой смены IP ваш аккаунт может быть заблокирован вместе с активными выплатами & балансом. При проблемах с доступом сообщите в ЛС группы. </p>
            <p>6.9.3 После выплаты Ваш аккаунт может быть отправлен на проверку. На почту, указанную при регистрации мы вышлем код, сообщите этот код в диалог с нашим сообществом ВКонтакте </p>
            <hr>
            <h5>7. ПРИНЯТИЕ ПОЛЬЗОВАТЕЛЬСКОГО СОГЛАШЕНИЯ.</h5>
            <p>7.1. Непосредственная регистрация в системе данного проекта предполагает полное принятие участником проекта условий и правил настоящего пользовательского соглашения.</p>
            <p>7.2. При нарушении правил учетная запись может быть заблокирована вместе с балансом.</p>
            <p>7.3. Администрация в праве менять правила в одностороннем порядке.</p>
            <hr>
            <h5>8. СИСТЕМА РАНГОВ.</h5>
            <p><span style="color:#ff0000">[V.I.P]</span>: Общая сумма пополнений от <b>200</b> <i class="fas fa-coins"></i>
            <p> - Вы избавляетесь от комиссии при выводе
            <p> - Получаете соответствующий префикс
            <p><span style="color:#5273CF">[PREMIUM]</span>: Общая сумма пополнений от <b>700</b> <i class="fas fa-coins"></i>
            <p> - Вы избавляетесь от комиссии при выводе
            <p> - <b>Приоритетная</b> обработка выплат
            <p> - Получаете соответствующий префикс
            <p><span style="color:#999966">[PRO]</span>: Общая сумма пополнений от <b>1000</b> <i class="fas fa-coins"></i>
            <p> - Вы избавляетесь от комиссии при выводе
            <p> - <b>Приоритетная</b> обработка выплат
            <p> - Получаете доступ к <b>максимальному</b> ежедневному бонусу
            <p> - Получаете соответствующий префикс
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="verifyMail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Подтвержение</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="md-form mb-2" style="margin-top:8px;display:inline-block">
               <span>
               На ваш адрес <b id="mail-ad">admin@example.com</b> было отправлено письмо с кодом, для завершения регистрации.<br><br>
               <span>Укажитее этот код ниже, чтобы подтвердить Ваш аккаунт</span><br>
               Письма часто уходят в отдел «Спам», не забывайте проверять этот раздел
               </span>
            </div>
         </div>
         <div class="modal-footer">
            <div style="display:inline-flex;float:right">
               <input class="form-control" placeholder="****" style="" id="codeE">
               <button class="btn btn-success" style=" margin-left: 10px;" onclick="register1()">Подтвердить</button>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade text-xs-left" id="deposit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" style="display: none;" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Пополнение счета</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row" style="padding-bottom:15px">
               <div class="col-lg-8 offset-lg-2" style="padding-bottom:5px">
                  <br>
                  <p class="text-muted">Минимальная сумма пополнения - 1р</p>
                  <br>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <span class="text-muted">Cумма:</span>
                  <input onkeyup="validateWithdrawSize(this)" id="depositSize" class="form-control " value="1">
                  <a id="error_deposit" class="btn  btn-block btnError" style="color:#fff;margin-top:15px;display:none"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 offset-lg-4" style="margin-top:8px;margin-bottom:18px">
                  <button class="btn btn-outline-info" style="width:100%" onclick="deposit()">Пополнить</button>
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
               <table class="table mb-0" style="color: #838aa0!important;">
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
                     <?php echo $paymentss; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="checkDiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
   <div class="modal-dialog" role="document">
      <div class="modal-content" style="padding:30px;">
         <div class="modal-header" style="BACKGROUND: NONE!IMPORTANT;padding:0px!important">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ft-x"></i></span></button>
         </div>
         <div class="popup-body" id="modalDice">
            <h3 class="popup-title">Проверка игры</h3>
            <ul class="data-details-list" style="padding: 32px;">
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
<div class="modal fade text-xs-left" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Профиль пользователя <?php echo $login; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-8 offset-lg-2" style="margin-top:8px">
                  <h6>Дата регистрации: <b><?php echo $datareg; ?></b></h6>
                  <h6>Текущий баланс: <b><?php echo $balance; ?></b> <i class="fas fa-coins"></i></h6>
                  <h6>Пополнено на сумму: <b><?php echo $deposit; ?></b> <i class="fas fa-coins"></i></h6>
                  <br>
                  <div id="box-em">
                     <h6 id="cmm">Привяжите ваш E-Mail:</h6>
                     <input id="emConnect" type="email" class="form-control" placeholder="noreply@example.com">
                     <button type="button" class="btn btn-info" id="lemail" style="margin-top:5px;width:100%" onclick="linkEmail()">Привязать</button>
                  </div>
                  <a id="error_cem" class="btn red btn-raised btnError" style="cursor:default;padding:10px;color: rgb(255, 255, 255);display:none;margin-top:10px"></a>
                  <a id="succes_cem" class="btn green btn-raised btnSuccess" style="cursor:default;padding:10px;color: rgb(255, 255, 255);display:none;margin-top:10px"></a>				  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade text-xs-left in" id="aProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Профиль пользователя <span id="checkUser">???</span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>		 
         <div class="modal-body">
            <center>
               <div class="box-profile">
                  <div class="widthp" style="padding: 16px;width: 200px;font-size: 18px;text-align: center;border:1px solid #000;white-space: nowrap;border-radius:6px;white-space: pre-wrap;">Ставок на<br><b><span id="betAmount-stat">183.27</span> <i class="fas fa-coins"></i></b></div>
                  <div class="widthp" style="margin-left: 30px;padding: 16px;font-size: 18px;text-align: center;white-space: nowrap;width: 200px;border:1px solid #000;border-radius:6px;white-space: pre-wrap;">Всего игр<br><b><span id="bets-stat">6827</span></b></div>
               </div>
               <br><br id="xbr36">
               <div class="box-profile">
                  <div class="widthp" style="padding: 16px;width: 200px;font-size: 18px;text-align: center;white-space: nowrap;border:1px solid #000;border-radius:6px;white-space: pre-wrap;">Лучший коэфф.<br><b><span id="coeff-stat">x526.61</span></b></div>
                  <div class="widthp" style="margin-left: 30px;padding: 16px;font-size: 18px;white-space: nowrap;text-align: center;width: 200px;border:1px solid #000;border-radius:6px;white-space: pre-wrap;">Лучший выигрыш<br><b><span id="bwin-stat">28.48</span> <i class="fas fa-coins"></i></b></div>
               </div>
			   <br>
			   <br>
			   <h4 class="text-xs-center">Дата регистрации: <span id="dreg"></span></h4>
            </center>
            <div class="row">
               <div style="margin-top:8px" class="col-lg-8 offset-lg-2">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" style="display: none;" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Вывод средств</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <center><span class="text-muted">Выводы автоматические</span></center>
                  <center><span class="text-muted">Минимальная сумма для вывода - <b>5 <i class="fas fa-coins"></i></b></span></center>
                  <center><span class="text-muted">Комиссия на вывод <b>5%</b></span></center>
                  <br>
                  <center><span class="text-muted">Оставь отзыв со скрином о выплате в <a href="https://vk.com/hotskinsclub" target="_blank">нашей группе ВК</a> и получи <b>5%</b> от выплаты обратно на баланс</span></center>
                  <br>
                  <span class="text-muted">Cумма (<i class="fas fa-coins"></i>): </span>
                  <input onkeyup="validateWithdrawSize(this)" id="WithdrawSize" class="form-control" value="5">
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2" style="margin-top:8px">
                  <span class="text-muted">Платежная система:</span>
                  <select class="hide-search form-control select2-hidden-accessible" id="hide_search" onchange="withdrawSelect()" tabindex="-1" aria-hidden="true">
                     <optgroup label="Эл. деньги">
                        <option value="1">Qiwi (от 5p)</option>
                        <option value="2">Payeer (от 5p)</option>
                        <option value="3">Yandex.Money (от 5p)</option>
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
                  <span class="text-muted" id="nameWithdraw">Номер кошелька:</span>
                  <input id="walletNumber" class="form-control" placeholder="+79...">
                  <div style="margin-top: 8px;display:none" id="code_wi">
                     <h6 id="nameWithdraw">Код с почты:</h6>
                     Письма часто уходят в отдел «Спам», не забывайте проверять этот раздел
                     <input id="codeWid" class="form-control" placeholder="******">
                  </div>
                  <br>
                  <label class="ui-check m-0 ui-check-rounded ui-check-md" style=""><input type="checkbox" name="id" id="conf_withdraw" value="8"><i></i><span class="item-except text-muted text-sm h-1x" style="font-size: 14px;float: right;margin-left: 5px;">Подтверждаю правильность реквизитов</span></label>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2" style="margin-top:8px">
                  <a id="error_withdraw" class="btn red btn-raised btnError" style="color: rgb(255, 255, 255);width: 100%;display:none;"></a>
                  <a id="succes_withdraw" class="btn green btn-raised btnSuccess" style="color: rgb(255, 255, 255);width: 100%;display:none;">Выплата успешно создана</a>
               </div>
               <div class="col-lg-8 offset-lg-2" style="margin-top:15px;margin-bottom:18px">
                  <button class="btn btn-outline-primary" id="withdrawB" onclick="wEmail()" style="width:100%;padding:8px">Выплата</button>
               </div>
            </div>
            <br>					
            <div class="table-responsive">
               <table class="table mb-0" id="withdrawTable" style="color:#838aa0!important">
                  <thead>
                     <th style="width:1%">Дата</th>
                     <th style="width:62%">Описание </th>
                     <th style="width:100%">Сумма</th>
                     <th>Статус</th>
                     </tr>
                  </thead>
                  <tbody id="withdrawT">
                     <?php echo $payouts; ?>
                  </tbody>
               </table>
            </div>
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




<?php if(!isset($_COOKIE['m1-open'])){ ?>
<div class="modal fade text-xs-left in" id="m1-open" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="document.cookie = 'm1-open=1; max-age=360000'">Не показывать</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $("#m1-open").modal("toggle");
});
</script>
<?php } ?>