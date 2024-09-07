<?php
// Получаем значение cookie 'sid' с помощью функции cookie()
$hashA = cookie('sid');
// Проверяем, существует ли значение 'sid'
if ($hashA !== null) {
    // Подготавливаем SQL-запрос
    $sql_select = "SELECT * FROM `svuti_users` WHERE hash = :hash";
    // Выполняем запрос и получаем результат через ваш класс db
    $user = db::fetchRow($sql_select, ['hash' => $hashA]);
    // Проверяем, найден ли пользователь
    if ($user) {
        // Извлечение данных пользователя
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

        // Генерация первых двух символов логина
        $b11 = $user['login'][0];
        $b21 = $user['login'][1];
        $ava1 = $b11 . $b21;

        // Генерация соли для хэша
        $chr = array("q", "Q", "e", "E", "r", "R", "t", "T", "y", "Y", "u", "U", "i", "I", "o", "O", "p", "P", "a", "A", "s", "S", "d", "D", "f", "F", "g", "G", "h", "H", "{", "}", "[", "]", "(", ")", "!", "@", "#", "$", "^", "%", "*", "&", "-", "+", "=");
        $salt1 = $salt2 = '';
        for ($i = 0; $i < 8; $i++) {
            $salt1 .= $chr[array_rand($chr)];
            $salt2 .= $chr[array_rand($chr)];
        }
        $number = rand(0, 999999);
        $hash = hash('sha512', $salt1 . $number . $salt2);

        if (empty($bon)) {
            $bonusrow = <<<HERE
            <div class="col-md-12" id="bonusRow">
                <div class="card" style="box-shadow: rgb(210, 215, 222) 7px 10px 23px -11px; border-radius: 25px !important;">
                    <div class="card-header" style="border-radius: 25px !important; border-bottom: 0 !important;">
                        <div class="heading-elements">
                            <ul class="list-inline mb-2 font-medium-4"></ul>
                        </div>
                    </div>
                    <div class="card-body" style="margin-top: -35px; border-radius: 25px !important;">
                        <div class="row justify-content-center">
                            <div class="p-2 text-xs-center">
                                <h5>Для активации бонусов на нашем сайте</h5>
                                1. Подписаться на наш паблик, <a target="_blank" href="https://vk.com/hotskinsclub">ссылка</a><br>
                                2. Нажать на кнопку ниже, для верификации аккаунта
                                <a id="error_bonus" class="btn red btn-raised btnError" style="cursor: default; padding: 10px; color: rgb(255, 255, 255); width: 100%; display: none;"></a>
                                <a id="success_bonus" class="btn red btn-raised btnError" style="cursor: default; padding: 10px; color: rgb(255, 255, 255); width: 100%; display: none;"></a>
                                <br><br>
                                <center><button class="btn btn-success" id="enter_but" onclick="vkBonus()">Получить бонус</button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function vkBonus() {
                    const cid = '7521733';
                    const redir_url = "https://hotskins.club/vklogin.php";
                    document.location.href = "https://oauth.vk.com/authorize?client_id=" + cid + "&redirect_uri=" + encodeURIComponent(redir_url) + "&response_type=code";
                }
            </script>
        HERE;
        }
        // Установка cookie с отформатированным кодом
        $code = 12;
        $hid = implode("-", str_split($code, 4));
        cookie('hid', $hid);

        // Подсчет количества записей в таблице `slim_zakidi`
        $sql_select = "SELECT COUNT(*) FROM `slim_zakidi` WHERE user_id = :userid";
        $count = db::fetchColumn($sql_select, ['userid' => $userid]);

        if ($count == 0) {
            $paymentss = '<tr><td colspan="6" class="text-xs-center">История пополнений пуста</td></tr>';
        } else {
            // Получение истории пополнений пользователя
            $sql_select33 = "SELECT * FROM `slim_zakidi` WHERE user_id = :userid ORDER BY data DESC";
            $rows33 = db::fetchAllRows($sql_select33, ['userid' => $userid]);

            $paymentss = '';
            foreach ($rows33 as $row33) {
                $paymentss .= '<tr style="cursor:default!important;">
                    <td></td><td></td>
                    <td>' . htmlspecialchars($row33['data']) . '</td>
                    <td>' . number_format($row33['suma'], 2, '.', '') . ' <i class="fas fa-coins"></i></td>
                    <td></td><td></td>
                </tr>';
            }
        }
        // Подсчет количества записей в таблице `svuti_payout`
        $sql_select = "SELECT COUNT(*) FROM `svuti_payout` WHERE user_id = :userid";
        $count = db::fetchColumn($sql_select, ['userid' => $userid]);

        if ($count == 0) {
            $payouts = '<tr><td id="emptyHistory" colspan="4" class="text-xs-center">История пуста</td></tr>';
        } else {
            // Получение истории выплат пользователя
            $sql_select3 = "SELECT * FROM `svuti_payout` WHERE user_id = :userid ORDER BY id DESC";
            $rows3 = db::fetchAllRows($sql_select3, ['userid' => $userid]);

            $payouts = '';
            foreach ($rows3 as $row3) {
                $status = $row3['status'];
                $tag = '';
                $icon = '';
                $action = '';

                switch ($status) {
                    case "Ожидание":
                        $tag = "warning";
                        $icon = '<i class="fa fa-clock-o"></i> ';
                        $action = '<i class="fa fa-times" onclick="otmena()" value="' . htmlspecialchars($row3['id']) . '" id="otmina"></i>';
                        break;
                    case "Выплачиваем":
                        $tag = "info";
                        $icon = '<i class="fa fa-clock-o"></i> ';
                        break;
                    case "Выплачено":
                    case "Выплачено (A)":
                        $tag = "success";
                        $icon = '<i class="fa fa-check"></i> ';
                        $status = "Выплачено";
                        break;
                    case "Возврат":
                        $tag = "info";
                        $icon = '<i class="fa fa-times"></i> ';
                        break;
                    case "Отменен":
                        $tag = "danger";
                        $icon = '<i class="fa fa-times"></i> ';
                        break;
                }

                $payouts .= '<tr style="cursor:default!important;" id="' . htmlspecialchars($row3['id']) . '">
            <td>' . $action . htmlspecialchars($row3['data']) . '</td>
            <td>' . htmlspecialchars($row3['wallet']) . '</td>
            <td>' . number_format($row3['suma'], 2, '.', '') . ' <i class="fas fa-coins"></i></td>
            <td><div class="badge badge-' . $tag . '">' . $icon . $status . ' </div></td>
        </tr>';
            }
        }
        // Определение статуса на основе депозита
        if ($deposit >= 1000) {
            $status = '<span class="text-info">[PRO]</span>';
        } elseif ($deposit >= 700) {
            $status = '<span class="text-danger">[PREMIUM]</span>';
        } elseif ($deposit >= 200) {
            $status = '<span class="text-success">[V.I.P]</span>';
        }

        // Получение данных о бесплатных вращениях
        $sql_select = "SELECT * FROM `freespins` WHERE user_id = :userid AND freespins >= freespinsleft ORDER BY id DESC LIMIT 1";
        $row = db::fetchRow($sql_select, ['userid' => $userid]);

        $countspins = $row['freespinsleft'] ?? 0; // Используем значение по умолчанию, если нет данных
        $betspins = $row['bet'] ?? 10; // Значение по умолчанию для ставки

        if ($countspins > 0) {
            $fsyes = <<<HERE
    <h5 class="text-xs-center">Сумма ставки:</h5>
    <center><input id="BetSizeSlot" onkeyup="validateBetSize(this);" value="$betspins" class="form-control text-xs-center" readonly></center>
    <br>
    <center><button class="btn btn-info" onclick="spin()" style="margin-top:-15px" id="case1op">ВРАЩАТЬ БЕСПЛАТНО (<span id="ccspin">$countspins</span>)</button></center>
HERE;
        } else {
            $fsno = <<<HERE
    <h5 class="text-xs-center">Сумма ставки:</h5>
    <center><input id="BetSizeSlot" onkeyup="validateBetSize(this);" value="10" class="form-control text-xs-center">
    <div style="margin-top:5px">
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val('')" class="btn btn-white"><span><i class="fas fa-trash"></i></span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val('0.01')" class="btn btn-white"><span>Min</span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+1;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="btn btn-white"><span>+1</span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+10;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="btn btn-white" style="display:inline-block;"><span>+10</span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var sum = +$('#BetSizeSlot').val()+100;$('#BetSizeSlot').val(parseFloat(sum).toFixed(2));" class="btn btn-white" style="display:inline-block;"><span>+100</span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val(parseFloat(Math.max(($('#BetSizeSlot').val()/2), 0.01)).toFixed(2));" class="btn btn-white" style="display:inline-block;"><span>1/2</span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="$('#BetSizeSlot').val(parseFloat(Math.max(($('#BetSizeSlot').val()*2), 0.01)).toFixed(2));" class="btn btn-white" style="display:inline-block;"><span>X2</span></div>
        <div style="cursor:pointer;-moz-user-select: none;-khtml-user-select: none;user-select: none;" onclick="var max = $('#userBalance').attr('myBalance');$('#BetSizeSlot').val(Math.max(max,0.01));" class="btn btn-white" style="display:inline-block;"><span>Max</span></div>
    </div>
    </center>
    <center><button class="btn btn-info" onclick="spin()" style="margin-top:-15px" id="case1op">ВРАЩАТЬ</button></center>
HERE;
        }
        // Проверка наличия значения $idref
        if (!empty($idref)) {
            // Получение всех пользователей с указанным реферером
            $sql_select221 = "SELECT * FROM `svuti_users` WHERE referer = :idref ORDER BY `data_reg` DESC";
            $users = db::fetchAllRows($sql_select221, ['idref' => $idref]);

            // Подсчет количества пользователей с указанным реферером
            $sql_select4 = "SELECT COUNT(*) AS user_count FROM `svuti_users` WHERE referer = :idref";
            $countResult = db::fetchRow($sql_select4, ['idref' => $idref]);
            $count = $countResult['user_count'];

            $sumapey = 0;

            // Итерация по всем пользователям и подсчет суммы из таблицы `slim_zakidi`
            foreach ($users as $user) {
                $sql_select423 = "SELECT SUM(suma) AS total_suma FROM `slim_zakidi` WHERE user_id = :user_id";
                $result423 = db::fetchRow($sql_select423, ['user_id' => $user['id']]);
                $sumapey += $result423['total_suma'] ?? 0;
            }

            // Расчет комиссии
            $sumapeys = ($sumapey / 100) * 10;
        }

        // Проверяем, есть ли активные записи для текущего пользователя
        $sql_select = "SELECT * FROM `lowerupper` WHERE user_id = :userid AND active = '1' ORDER BY id DESC LIMIT 1";
        $result = db::fetchRow($sql_select, ['userid' => $userid]);

        // Инициализация переменных по умолчанию
        $coefl = $result['coeff_lower'] ?? '';
        $coefu = $result['coeff_upper'] ?? '';
        $numul = $result['number'] ?? '';

        // Проверяем, существует ли результат
        if ($result) {
            $luactive = <<<HERE
    <div id="activePhp">    
        <center>
            <button class="btn btn-info" onclick="mensheChange();betLu();">МЕНЬШЕ (<span>$coefl</span>x)</button>
            <button style="margin-left:5px" class="btn btn-info" onclick="bolsheChange();betLu();">БОЛЬШЕ (<span>$coefu</span>x)</button>
        </center>           
        <center>
            <button class="btn btn-info" style="margin-top:5px" onclick="evenChange();betLu();">ЧЕТНОЕ (1.98x)</button>
            <button style="margin-left:5px;margin-top:5px" class="btn btn-info" onclick="oddChange();betLu();">НЕЧЕТНОЕ (1.98x)</button>
        </center>
        <center>
            <button class="btn btn-info" style="margin-top:5px" onclick="ravnoChange();betLu();">РАВНО (98x)</button>
        </center>    
    </div>
    <div id="createGamos" style="display:none">
        <center><button class="btn btn-info" onclick="betluchange();betLu();">Создать игру</button></center>
    </div>
HERE;
        } else {
            $lunoactive = <<<HERE
    <div id="createGame">
        <center><button class="btn btn-info" onclick="betluchange();betLu();">Создать игру</button></center>
    </div>
HERE;
        }
        // Получаем последнюю запись из таблицы `giveaway`
        $sql_select = "SELECT * FROM `giveaway` ORDER BY id DESC LIMIT 1";
        $result = db::fetchRow($sql_select);
        $rands = $result['randTo'];
        $usersga = $result['users'];
        $usersgaleft = $result['usersleft'];
        $randAmount = $rands / 100;
        $randga = number_format($randAmount, 2, '.', ' ');

        // Определение статуса и блока информации о раздаче
        if ($usersga >= $usersgaleft) {
            $statusga = '<span style="color:#ff0000">[OFFLINE]</span>';
            $gablock = <<<HERE
            <center><h5 class="text-xs-center" style="font-size:18px;color:red">Раздача не активна!</h5></center>
        HERE;
        } else {
            $statusga = '<span style="color:#4BB543">[ACTIVE!]</span>';
            $gablock = <<<HERE
            <center><h5 class="text-xs-center" style="font-size:15px;">Максимальный приз: <b>$randga <i class="fas fa-coins"></i></b></h5>
            <h5 class="text-xs-center" style="font-size:15px;">Участников: <b><span id="usersga">$usersga</span> / $usersgaleft</b></h5></center>
        HERE;
        }

        // Получаем дату из таблицы `tournamentTimer`
        $sql_select = "SELECT date FROM `tournamentTimer` WHERE id = '1'";
        $tourTime = db::fetchColumn($sql_select);

        // Получаем топ 10 пользователей с наибольшим количеством ставок
        $sql_select111 = "SELECT * FROM svuti_users WHERE betsAmount > 0 AND ban != '1' ORDER BY betsAmount DESC LIMIT 10";
        $results111 = db::fetchAllRows($sql_select111);
        $num = 1;
        $xd11 = '';

        foreach ($results111 as $row111) {
            $deposit = $row111['deposit'];
            $color = '';
            if ($deposit >= 200) {
                $color = '#ff0000';
            }
            if ($deposit >= 700) {
                $color = '#5273CF';
            }
            if ($deposit >= 1000) {
                $color = '#999966';
            }

            $prize = '-';
            if ($num == 1) {
                $prize = '<b>2500 <i class="fas fa-coins"></i></b>';
            }
            if ($num == 2) {
                $prize = '<b>1500 <i class="fas fa-coins"></i></b>';
            }
            if ($num == 3) {
                $prize = '<b>500 <i class="fas fa-coins"></i></b>';
            }

            $nck = "'" . $row111['login'] . "'";
            $xd11 .= '<tr>';
            $xd11 .= "<td>#$num</td>";
            $xd11 .= '<td style="color:' . $color . '" onclick="userGetInfo(' . $nck . ');" data-dismiss="modal" data-toggle="modal" data-target="#aProfile">' . $row111['login'] . '</td>';
            $xd11 .= "<td>" . $row111['betsAmount'] . "</td>";
            $xd11 .= "<td>$prize</td>";
            $xd11 .= '</tr>';
            $num++;
        }
        // Получаем дату из таблицы `refTimer`
        $sql_select = "SELECT date FROM `refTimer` WHERE id = '1'";
        $refTime = db::fetchColumn($sql_select);

        // Получаем топ 10 пользователей по количеству рефералов за сегодня
        $sql_select11 = "SELECT * FROM svuti_users WHERE refsToday > 0 AND ban != '1' ORDER BY refsToday DESC LIMIT 10";
        $results11 = db::fetchAllRows($sql_select11);
        $num = 1;
        $xd1 = '';

        foreach ($results11 as $row11) {
            $deposit = $row11['deposit'];
            $color = '';
            if ($deposit >= 200) {
                $color = '#ff0000';
            }
            if ($deposit >= 700) {
                $color = '#5273CF';
            }
            if ($deposit >= 1000) {
                $color = '#999966';
            }

            $prize = '-';
            if ($num == 1) {
                $prize = '<b>150 <i class="fas fa-coins"></i></b>';
            }
            if ($num == 2) {
                $prize = '<b>125 <i class="fas fa-coins"></i></b>';
            }
            if ($num == 3) {
                $prize = '<b>100 <i class="fas fa-coins"></i></b>';
            }

            $nck = "'" . $row11['login'] . "'";
            $xd1 .= '<tr>';
            $xd1 .= "<td>#$num</td>";
            $xd1 .= '<td style="color:' . $color . '" onclick="userGetInfo(' . $nck . ');" data-toggle="modal" data-target="#aProfile">' . $row11['login'] . '</td>';
            $xd1 .= "<td>" . $row11['refsToday'] . "</td>";
            $xd1 .= "<td>$prize</td>";
            $xd1 .= '</tr>';
            $num++;
        }

        // Проверяем наличие пополнений для пользователя
        $sql_select = "SELECT COUNT(*) AS count FROM `slim_zakidi` WHERE user_id = :userid";
        $count = db::fetchColumn($sql_select, ['userid' => $userid]);

        if ($count == 0) {
            $paymentss = '<tr><td colspan="6" class="text-xs-center">История пополнений пуста</td></tr>';
        } else {
            $sql_select33 = "SELECT * FROM `slim_zakidi` WHERE user_id = :userid ORDER BY data DESC";
            $results33 = db::fetchAllRows($sql_select33, ['userid' => $userid]);
            $paymentss = '';

            foreach ($results33 as $row33) {
                $paymentss .= '<tr style="cursor:default!important;">
            <td></td>
            <td></td>
            <td>' . $row33['data'] . '</td>
            <td>' . number_format($row33['suma'], 2, '.', '') . ' <i class="fas fa-coins"></i></td>
            <td></td>
            <td></td>
        </tr>';
            }
        }

    }
}

// Установка класса фона с использованием функции cookie
$bgclass = cookie('background') ? 'light' : 'light';

// Выполнение запроса с использованием библиотеки
$sql_select = "SELECT * FROM `liveGames` ORDER BY id DESC LIMIT 10";
$rows = db::fetchAllRows($sql_select);

if ($rows === null) {
    die('Ошибка запроса или нет данных');
}

// Начало строки для игр
$game = '';

foreach ($rows as $row) {
    $login = htmlspecialchars($row['login']);  // Экранируем специальные символы
    $b1 = $login[0];
    $b2 = $login[1];
    $ava = $b1 . $b2;

    $game .= <<<HERE
<tr>
    <td data-toggle="modal" id="userpclick" onclick="userGetInfo('$login');" data-target="#aProfile">
        <div style="display:inline-flex;text-align:center;text-transform:uppercase;padding:8px;border-radius:99px;background:#3f51b5;color:#fff;font-weight:600">$ava</div>
        <span style="margin-left:5px">$login</span>
    </td>
    <td>{$row['mode']}</td>
    <td style="font-weight:600">{$row['amount']}</td>
    <td style="font-weight:600">x{$row['coeff']}</td>
    <td style="font-weight:600">{$row['profit']}</td>
</tr>
HERE;
}

require ROOT . '/assets/view/header.php';