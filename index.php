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
</head>

<body class="relative" data-spy="scroll" data-target=".navbar-landing">
<header>
    <div class="container">
        <div class="header__progress-box">
            <div class="header__progress-box__percent">
                <p class="bg-percent">0%</p>
                <p class="main-percent">прогресс регистрации <span>0%</span></p>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                         role="progressbar"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="header__content row d-flex align-items-start justify-content-between m-0">
            <div class="col-12 col-lg-6 header__content__title mt-4">
                <h2>ЗАВЕРШИТЕ РЕГИСТРАЦИЮ <br><span>НА ОНЛАЙН МАСТЕР-КЛАСС</span></h2>
                <h1>"Как запустить бизнес на посуточной аренде и зарабатывать от $5'000 в месяц"</h1>
                <img alt="" src="./img/person.png">
            </div>
            <div class="col-12 col-lg-5 header__content__form-box d-flex flex-column align-items-center justify-content-center">
                <div class="header__content__bonus-box mb-5">
                    <p class="bonus__main-title">и получите на ваш e-mail в подарок</p>
                    <p class="bonus__subtitle">видео-урок:"бизнес на салфетке"</p>
                    <img alt="" src="./img/book.png">
                </div>
                <form id="main_form" action="./thankspage.php" method="POST" novalidate="novalidate">
                    <h3 class="mb-4">ЗАВЕРШИТЕ РЕГИСТРАЦИЮ
                        Оставьте свои контактные данные </h3>
                    <input class="fio" type="text" name="fio" required placeholder="Ваше имя">
                    <input class="email"  type="email" name="email" required placeholder="ВАШ EMAIL">
                    <input class="phone" type="text" name="phone" required placeholder="Ваш номер телефона">

                    <input type="hidden" name="c2cFormId" value="coursestndart"/>
                    <input type="hidden" name="packet" class="form-packet" id="packet-all-form" value="Стандарт"/>
                    <input type="hidden" name="price" class="form-price" value="537"/>
                    <input type="hidden" name="convert_rub" class="form-price-rub" value="36000"/>
                    <?php if (!empty($tag)) echo '<input type="hidden" name="add_tag" value="' . $tag . '" />' ?>
                    <button class="my-btn" type="submit"><span>ЗАВЕРШИТЬ</span>ЗАВЕРШИТЬ РЕГИСТРАЦИЮ</button>
                </form>
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

        $('#main_form').submit(function (event) {
            event.preventDefault();
            let current_progress = 0;
            let interval = setInterval(function () {
                current_progress += 1;
                $(".bg-percent, .main-percent span").html(current_progress + "%");
                $(".progress-bar").width(current_progress + "%")
                if (current_progress >= 100) {
                    $.ajax({
                        url: "./thankspage.php",
                        type: "POST",
                        data: {
                            fio: $('#main_form .fio').val(),
                            email: $('#main_form .email').val(),
                            phone: $('#main_form .phone').val(),
                        },
                        dataType: "html",
                        cache: false,

                        complete: function () {
                            window.location.href = "./thankspage.php";
                        }
                    });
                    clearInterval(interval);
                }
            }, 44);

        });
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

    })
    ;


</script>
</body>

</html>
