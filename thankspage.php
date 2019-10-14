<?php
error_reporting(0);
@header("Content-Type: text/html; charset=utf-8");

/*========================================= супер скрипт ладыгина ======================*/

$api_key="65kqtxgghq1x7zxaqne69j6kxiaxig91h4yyp3mo"; //API-ключ к вашему кабинету
$user_email = mb_strtolower(trim($_POST['email']));
$user_phone = preg_replace('/[^0-9]/', '', $_POST['phone']);

$utm_source = urlencode($_POST['utm']);
$user_name = urlencode($_POST['fio']);
$user_lists = "18838229";  // ID группы

if (isset($_POST['bGO'])) {

// Создаём GET-запрос
    $api_url = "https://api.unisender.com/ru/api/subscribe?format=json".
        "&api_key=$api_key&list_ids=$user_lists".
        "&fields[email]=$user_email&fields[texttel]=$user_phone&fields[utm]=$utm_source".
        "&double_optin=3";


// Делаем запрос на API-сервер

    $result = file_get_contents($api_url);
    if ($result) {
        // Раскодируем ответ API-сервера
        $jsonObj = json_decode($result);

        if(null===$jsonObj) {
            // Ошибка в полученном ответе
            var_dump($jsonObj);

        }
        elseif(!empty($jsonObj->error)) {
            // Ошибка добавления пользователя
            echo "<script>alert('Введите корректные данные');</script>";

        } else {
            // Новый пользователь успешно добавлен

            //header('Location: http://4.lpbpa.bz/success/?email='.$user_email.'&time='.$time_day);


            //echo "<script>alert('Ваша заявка принята!');</script>";

        }

    } else {
        // Ошибка соединения с API-сервером

        echo "<script>alert('Ошибка данных');</script>";
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Прибыльный бизнес на посуточной аренде</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/first.css">
    <link rel="stylesheet" href="css/second.css">
</head>

<body class="relative" data-spy="scroll" data-target=".navbar-landing">
<header>
    <div class="container p-0">
        <div class="header__progress-box">
            <div class="header__progress-box__percent">
                <p class="bg-percent bg-percent__second">100%</p>
                <p class="main-percent">регистрация заверешена!</p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="header__content row d-flex align-items-start justify-content-between m-0">
            <div class="col-12 col-lg-6 header__content__title mt-4 d-flex flex-column align-items-center">
                <img alt="" class="mb-5" src="./img/tick.png">
                <h2>СУПЕР, ВЫ В СПИСКЕ УЧАСТНИКОВ<br></h2>
                <span>прямо сейчас перейдите на свою почту</span>
                <p class="mt-3">и заберите бонус "Бизнес на салфетке"</p>

            </div>
            <div class="col-12 col-lg-6 header__content__images">
                <img alt="" src="./img/bigbook.png">
                <img class="sub-image" alt="" src="./img/mail.png">
            </div>
        </div>
    </div>
</header> <!-- section-header.// -->


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript"
        src="//api.webds.net/client2crm_v2/sdk/v2/Contact2Amo/js/jquery.dsClient2CrmServer.v1.min.js"></script>
<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="//chitau.api.webds.net/plgform/js/dsPhoneFormatInput_min.js"></script>
<script type="text/javascript" src="//chitau.api.webds.net/plgform/js/userAgent.0.0.1.min.js"></script>


<script>
    $(document).ready(function () {

        FormIDs_collection = FormIDs.split(',');
        $.each(FormIDs_collection, function (k, FormID) {
            $("#" + FormID).validate({
                rules: {
                    firstname: {required: true, minlength: 2},
                    phone: {required: true, minlength: 12},
                    email: {required: true, email: true},
                    agree: {required: true},
                },
                messages: {
                    firstname: {required: "", minlength: ""},
                    phone: {required: "", minlength: ""},
                    email: "",
                    agree: ""
                },
                errorPlacement: function (error, element) {
                    $(element).closest('div').addClass('valid-error');
                }

            });
        });

    });

</script>
<script>
    $(document).ready(function () {

        $('#customRadio1').change(function () {
            $('[name="c2cFormId"]').val('coursestndart');
            $('[name="packet"]').val('Стандарт');
            $('[name="price"]').val('537');
            $('[name="convert_rub"]').val('36000');
        });
        $('#customRadio2').change(function () {
            $('[name="c2cFormId"]').val('coursevip');
            $('[name="packet"]').val('VIP');
            $('[name="price"]').val('1437');
            $('[name="convert_rub"]').val('96000');
        });

    });


</script>
</body>

</html>
