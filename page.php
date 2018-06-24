<?php
header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'ИнвестКонсалт';
$desc = 'Продажа недвижимости';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

//https://sypexgeo.net/ru/about/
if (file_exists('SxGeo.php')) {
    include 'SxGeo.php';
    $web_time = '';

    $SxGeo = new SxGeo('SxGeo.dat');
    $SxGeoCity = new SxGeo('SxGeoCity.dat');
    $ip = $_SERVER['REMOTE_ADDR'];
    $country = $SxGeo->getCountry($ip);
    $region = $SxGeoCity->getCityFull($ip);
    $regionCity = $region["city"]["name_ru"];

    if ($country == "RU") {
        $web_time = '12:00';
        switch ($regionCity) {
            case 'Калининград':
                $web_time = '10:00';
                break;
            case 'Москва':
                $web_time = '11:00';
                break;
            case 'Санкт-Петербург':
                $web_time = '11:00';
                break;
        }
    } else if ($country == "UA") {
        $web_time = '10:00';
    } else if ($country == "BY") {
        $web_time = '11:00';
    } else {
        $web_time = '12:00 по Москве';
    }
}
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon"  type="image/png">
    <link rel="shortcut icon" href="images/icons.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jquery.formstyler.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style-fix.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>


<body id="main">
<div id="global-wrapper">

<!--===================================================== Loader -->
<div class="loader">
    <div class="pseudo-table">
        <div class="pseudo-table-cell align-center">

            <div class="a-loader a-loader-2">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
                <div class="bar-4"></div>
                <div class="bar-5"></div>
                <div class="bar-6"></div>
                <div class="bar-7"></div>
                <div class="bar-8"></div>
            </div>

            <div class="loader-text">
                <img src="images/logo.png" alt=" "/>
            </div>

        </div>
    </div>
</div>

<!--===================================================== Header -->
<header class="section-header cre-animate" data-animation="scale-up" data-speed="1200" data-delay="400" data-offset="90%" data-easing="easeInOutBack">
    <div class="container">
        <div class="row">
            <div class="col-1-1">
                <!-- Logo на разрешении tablet -->
                <div class="logo-tablet">
                    <a href="#" class="logo">
                    </a>
                        <span class="logo_subtext">
                            Продажа недвижимости
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Logo -->
            <div class="col-1-5">
                <a href="#" class="logo">
                </a>
                    <span class="logo_subtext">
                        Продажа недвижимости
                    </span>
            </div>

            <div class="col-2-5 col-2-4-tablet col-1-5-xs header-block-info">
                <!-- Выберите регион -->
                <div class="region">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="18" height="24" viewBox="0 0 18 24"><g><g transform="translate(-698 -63)"><image width="18" height="24" transform="translate(698 63)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAYCAYAAAD3Va0xAAADUElEQVQ4T42VX2gcVRTGf99s524TaxH/PPhSBBEjVEVcRNqmId1J/A8VsbZWhIANiKAPKoog9kFEYvVBBWurVgSx+lJB1KY7MZSkrVhFUSOKIDUvgmKNtqbZO9k5MrObSZpki/ftzj33m++c75zvikXLdhKw3m1GbAU2AJe2Qn4DxjH2c8R/qJ2kC69q4cZq7mrEO0AAtodSMMwf9ck85pLyGhppP2gQMIz71ee/m7tfAFm8MoJ0P9hTjCdvLP7j3IWc8YbwAdBzEGxVNBNnZzlQi8koaXqX+mcPL053ub3FK7ohOIDRmzGTGWLEfYHsTVWT3YtSvQrZRgjKpJognDmsXmYLdnE4CNpB1d8gGynfAjbEmL92Lh0bZRUNtxesF/Qp2L+g9YiVpHav+pKv80zyNN03SE/IYrcP2VeqJq/mhznDcBj0O2f8oO5gep6Buw/ZS1jpRkUzv+TxcfgQqJIBTZKqqv76z80Dtxl4hpO+oi00lrRH7J5GdKnqt+fxI+XLMRvNgIyTvqwt+BbQPrBjipI9yxeZi8BNKvLn5fFfEjLl6hlQnXHfUdQndgdBLyqq19qpZ7GbouQvUy9TrTpNZ0A/YLa9KGBWM+xzRcnryzIa5WIa7oQiv6rZOuF1SO/Kau4FZIGi5NFmauXbwZ6l5CsLpS4KXnOZVlcUNYrDXZhMNuy6KNkYnckareNMq68+Bv6m5Heol9PzIOEAYgiVKqrO/GpH6WA6PEFDPc3Ojt0B4JgiP5TvP6KTDvca2M2gQ8hOYcoGOMDYNjdjVis/jmydIn9nE+iz8pWk6TgkXYr4s2CQSZumPa1GnODo7FghykEuJAx/REG3NtV/mh/akfBlTOcr8gP/a9Zq7i0CO61q8nAxtDmrT1iNcxMQDMxNdFv5R1ZswoK38X6tbuWfs4CaUpZvQ7absr9G3fzVRv4LaLhvMT2ovnomSr7OMraW/HuRrVbV37N8Z7v3MJ1SXz0zuGItBWoqdhzZK0tspWkbj9DpK1mrnBMoZzXs1lLicCa/ouR4U9nwelIdokGPbvLfL2a7hFEhfewy899FKazk3xo54GOK/PvLpdwWqNWozwMbc7OHMUX+yXZKnhuo6YAfkJndEX93uwchA/8P0n12dhWMkNkAAAAASUVORK5CYII="/></g></g></svg>
                    <a href="#">Выберите регион</a>
                </div>
                <div class="time-block">
                    <!-- Время работы -->
                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="21" viewBox="0 0 20 21"><g><g transform="translate(-915 -65)"><image width="20" height="21" transform="translate(915 65)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAYAAABG1c6oAAACx0lEQVQ4T6XUXYiUVRzH8e/vmZkzaBe+QPRCwV4qSyLiSrVptvvMKmJYvuzF3hhdiPaGG1R6l9ASvd2UUUJgBLrtKiipF7vzjAu+bRIqEkZkF0KbN8VGEOKcZ/f5x7PjTDs7s7biuTwvn/M/53/OXzRpZohSdi2mzaA2xMOAgX4DGyWwQXXEl5qt1cxOG862EwT7geUYF5GdQ8EYRoCSFkwdQCvYCIFeV4e/Nt2oAy1ybwPvA6eAPQr9T01PEGWfguBjYAXiZXX6/uq8GmhFtwfRB/aGwvjz6ZCNsJB/8HqeW9V+GyTDYtcHvIPoqaJToA1nnyUIToO9ojA+0HANkTuCcUMF/1aTsQ+A10i0XF3l66okwF0FflHotzY/ojsOdkNhvLsBrET6PcZNFfwmWZRfD3aSjJboufKv9wpOnbCYXYuCESZZKovcQeARhX59M2xqQTR7hLU7jdzPiH5Z0V1H+lJh+ZP7Aku5T7FKhBNIL6qzfOK+wCj3Kqg3BY0kCNV1u3QX8CjGY9z2HdOfTt3TKuVewtSXgmVgu0L/7axg0S1Fdga4wni8Ud34hmwX873IdqbgVYwjKvj3ZgMrmXRPIDsNGmXcb52JWpT/CrMHZcXcZ2kBUME/eTewku1cGyjCdFiF8q5aht8l4Bk3hukjWSm3CtNFSNYonDg7J1S0qjP+ugaW3DaMQyTZlsrXK+XSXecz7lerm8n/Q+uSMcQDZNyPmCIVyjsq4JBbQobLwH6FPq04c2p3CsQA0I73y7SBP/6rNpFL//EA2BeMx282y2RdZEUWIJceex1JUlDXxPl0vL4eFt0mxDfAnxh7WeSPaSVxHXSBedzK9YD2AQEkWxROjFbnNFbsoXmPk5n8EOgG/sb4ATEGSiBpAT1dgewA+XifVvPX9A0bwFrmhuc/ShC/gGkl8BAiAf0OySj5+LuZUHXdv1pyNCQPZuBuAAAAAElFTkSuQmCC"/></g></g></svg>
                    <span>09:00 - 21:00</span>
                </div>
            </div>


            <!-- Phone block -->
            <div class="col-2-5 col-2-4-tablet col-4-5-xs">
                <div class="si-phone">
                    <a href="tel:+78002005009" class="phone-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g transform="translate(-1091 -65)"><image width="20" height="20" transform="translate(1091 65)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAADH0lEQVQ4T42Ub4hUVRjGf8/M3HNdjf5YQYSkQREJGYGUhUEze2ehZZf8YJKFRkm1tUvRZpiCRUkQZh8qqLQoRMIyCioZrLmzW7gftL4kFERf24LIsoJc596Z+8adO7PNqLvs/XZezvmd533P81yxwM9CbxS0Dfga6QClelXCzj6uTsFCfwjYBjZNUnhKA6d/7d5sFS7EuUGMQcQG4AewEQXxt937WkAL3X3Ae8Ae0FqwK8nn71BxZvp8DViFy3HuJWATZqMqx2939smq7i7ER8ADCqL37RCOpe5T4NpuqFXdDZBcSqExpSKNXiE2piDel9ZkofsJ8aH6o52z7X/OYvrcB8B15KMbVeSMhe5ZYAfwB9gOBfH+FrTq7kXsJ2drVYqPp0AjZ2vSRc/MJrmApvsb2a3qj79pHf6CJeT9EbBdmO1VOX4yg/r7kN3CVHRTCvyXnO5WqV6ZVWiImvcyaAv56GoV+avnsqq3BmkCszGV43ftCEspuJ+R7pGFXhU4oSDeOguseq8jbSZnA2cr73LFONhW/oxWaAORhf47YBfJat4Ipp1cHK3QauL2sE8CuxVEu+eyada+Owm5YQVnQgvderA3ZdmspjEbT+W3gekDPYwfrdLtnJoTGrrt5KyiUnzC0odc7G3u+HA7MEoUrdQg/1gFH+eOAb+Rj4Y6NllIqDLgJItouu9ARxXUH2rVaouWY8kxxAS56P5uqE0uuYJm/XpmGsc1zOlzkpIBvJsxTXUM3m59JfAlsh+pxxs1yO9W84cxOwjkMaYp5IvdiZrNcgbwHgPtQcmQ+hsTmfq+ZTSbH4MtB6VmTr33HDPRq/R5h0FXdSeqB9hW9SIwBsmQgsbR9kgKNP0nwNIL31BQf6VVzxL1CXBNB3oOsA1Ngz+ObIv64wPzPUaWfe8I6BcF0abzAtvtPwJ6DTiEHz0+v338t9KRKIjunBPYVroKSBUuQ9pFX32vbmOmN4buGcQLWFJSuTE1L/D/+XkPgp4HfLCDmGooOQVaB3qUROs1UP+s9ftaiFlb4HRWl7h1iI3AauAy4HsseVrlxlcdzn+ccVX1e6K7pgAAAABJRU5ErkJggg=="/></g></g></svg>
                        <span>8 (800) 200 50 09</span>
                    </a>
                    <div class="block_button-orange">
                        <a href="#" class="button-orange open-phone-modal" data-extra="1">
                            Заказать звонок
                        </a>
                    </div>
                    <div class="si-overlay"></div>
                    <div class="si-modals-wrapper">
                        <div class="si-success-modal si-success-modal-1">
                            <a href="#" class="si-close"></a>

                            <div class="modal-container align-center">
                                <div class="modal-thanks-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="57" height="57" viewBox="0 0 57 57"><g><g transform="translate(-944 -261)"><image width="57" height="57" transform="translate(944 261)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                                </div>
                                <div class="si-success-modal-title">
                                    <div class="title">
                                        Спасибо!<Br>
                                        Ваша заявка отправлена
                                    </div>
                                    <div class="modal_sub_title">
                                        Наш менеджер свяжется с Вами
                                        в ближайшее время.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="si-modal phone-modal">
                            <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

                            <div class="modal-container align-center">

                                <div class="modal-form-title">
                                    Закажите консультацию
                                </div>

                                <div class="modal-time">
                                    Наш менеджер свяжется
                                    с Вами в ближайшее время
                                </div>

                                <form action="send.php" method="post" class="send-form" autocomplete="off">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-1-1">
                                                <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                                <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                                <input type="email" name="client_email" class="client-email" placeholder="Ваш email">
                                                <input type="hidden" name="send_type" class="send-type" value="1">
                                                <input type="hidden" name="send_extra" class="send-extra" value="1">

                                                <div class="btn-holder block_button-orange-modal">
                                                    <button type="submit" class="btn button-orange-modal">Заказать консультацию</button>
                                                    <div class="g-recaptcha" id="g-recaptcha"></div>
                                                </div>
                                                <!--                                                     Agreement -->
                                                <div class="form-agree align-left">
                                                    <label class="checkbox-label form-agree-check checked">
                                                        <input type="checkbox" checked>
                                                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                                        в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<!--===================================================== section select -->
<section class="section-select">
    <div class="container">
        <div class="row">
            <div class="col-1-1">
                <!-- Просто блоки без выпадающих списков -->
                <a class="select_option">
                    Купить квартиру
                    <svg xmlns="http://www.w3.org/2000/svg"  width="34" height="36" viewBox="0 0 34 36"><defs><path id="amyga" d="M530 188h31a3 3 0 0 1 3 3v30a3 3 0 0 1-3 3h-31z"/></defs><g><g opacity=".35" transform="translate(-530 -188)"><use fill="#e8e8e8" xlink:href="#amyga"/></g><g transform="translate(-530 -188)"><image width="8" height="5" transform="translate(543 204)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAgUlEQVQYV02LMQoCMRBF/wSErT2FZ7D1LrLbmRmwsQmI5UyKRQQ7j+EdvEyKxUYyElnF1/3H+8TMN3fvc85P/JFS6kopVxKRlbvvzGwA4HNDzHyutY7UBDNvAKzN7DjvAxE9VPX+CRoisgUwufsLwNLMLs3/gjZijKcQwkJV99/jG1UxMHQZIVmmAAAAAElFTkSuQmCC"/></g></g></svg>
                </a>
                <a class="select_option">
                    Вторичное жилье
                    <svg xmlns="http://www.w3.org/2000/svg"  width="34" height="36" viewBox="0 0 34 36"><defs><path id="amyga" d="M530 188h31a3 3 0 0 1 3 3v30a3 3 0 0 1-3 3h-31z"/></defs><g><g opacity=".35" transform="translate(-530 -188)"><use fill="#e8e8e8" xlink:href="#amyga"/></g><g transform="translate(-530 -188)"><image width="8" height="5" transform="translate(543 204)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAgUlEQVQYV02LMQoCMRBF/wSErT2FZ7D1LrLbmRmwsQmI5UyKRQQ7j+EdvEyKxUYyElnF1/3H+8TMN3fvc85P/JFS6kopVxKRlbvvzGwA4HNDzHyutY7UBDNvAKzN7DjvAxE9VPX+CRoisgUwufsLwNLMLs3/gjZijKcQwkJV99/jG1UxMHQZIVmmAAAAAElFTkSuQmCC"/></g></g></svg>
                </a>
                <a class="select_option">
                    Тип дома
                    <svg xmlns="http://www.w3.org/2000/svg"  width="34" height="36" viewBox="0 0 34 36"><defs><path id="amyga" d="M530 188h31a3 3 0 0 1 3 3v30a3 3 0 0 1-3 3h-31z"/></defs><g><g opacity=".35" transform="translate(-530 -188)"><use fill="#e8e8e8" xlink:href="#amyga"/></g><g transform="translate(-530 -188)"><image width="8" height="5" transform="translate(543 204)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAgUlEQVQYV02LMQoCMRBF/wSErT2FZ7D1LrLbmRmwsQmI5UyKRQQ7j+EdvEyKxUYyElnF1/3H+8TMN3fvc85P/JFS6kopVxKRlbvvzGwA4HNDzHyutY7UBDNvAKzN7DjvAxE9VPX+CRoisgUwufsLwNLMLs3/gjZijKcQwkJV99/jG1UxMHQZIVmmAAAAAElFTkSuQmCC"/></g></g></svg>
                </a>
                <a class="select_option big-width">
                    1 комнатная квартира
                    <svg xmlns="http://www.w3.org/2000/svg"  width="34" height="36" viewBox="0 0 34 36"><defs><path id="amyga" d="M530 188h31a3 3 0 0 1 3 3v30a3 3 0 0 1-3 3h-31z"/></defs><g><g opacity=".35" transform="translate(-530 -188)"><use fill="#e8e8e8" xlink:href="#amyga"/></g><g transform="translate(-530 -188)"><image width="8" height="5" transform="translate(543 204)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAgUlEQVQYV02LMQoCMRBF/wSErT2FZ7D1LrLbmRmwsQmI5UyKRQQ7j+EdvEyKxUYyElnF1/3H+8TMN3fvc85P/JFS6kopVxKRlbvvzGwA4HNDzHyutY7UBDNvAKzN7DjvAxE9VPX+CRoisgUwufsLwNLMLs3/gjZijKcQwkJV99/jG1UxMHQZIVmmAAAAAElFTkSuQmCC"/></g></g></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!--===================================================== map-2 -->
<section class="section-map-2" id="map-2">
    <div class="block-review-apartment">
        <p class="title">
            г. Москва, ул. Кирова
        </p>
        <div class="gray-line"></div>
        <div class="review-apartment_data">
            <img class="apartment-foto" src="images/review-block.jpg" alt=" "/>
            <!-- Картинка на мобилке -->
            <img class="apartment-foto mobile-img" src="images/review-block-mobile.jpg" alt=" "/>
            <!-- Блок для мобилки -->
            <div class="block-apartment-footer-mobile">
                <div class="number">
                    1/8
                </div>
                <div class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="margin-right" width="26" height="12" viewBox="0 0 26 12"><g><g transform="translate(-1203 -814)"><image width="26" height="12" transform="translate(1203 814)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAMCAYAAAB8xa1IAAAA1ElEQVQ4T73TsQrCQAwG4D8dXH0NF99BBEVQcHL1LUrXLkIb+gTuLuLiJFRQXER9BBfdfIJ2K5E7bLl2LHdmOcKRfFzIERoRBEFXRPYAjsy8at63zcks/CEpEfVEZMTMj7aNm3UVZCJFUYyTJLnbQlQfDZUIgD6AITPfbCIaMhHP82ZRFJ1sIxryff9MRAMAHwBPFwiAt3rRVkQWKgFwcQS9KAzDTpZlOyKaAlgy88YFppfhH1i13q6x2oc1sAkRzeM4PtgaYw0qx5jn+RrAlZnVaSW+EJRi8Gxwvo4AAAAASUVORK5CYII="/></g></g></svg>

                    <svg xmlns="http://www.w3.org/2000/svg"  width="26" height="12" viewBox="0 0 26 12"><g><g transform="translate(-1246 -814)"><image width="26" height="12" transform="translate(1246 814)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAMCAYAAAB8xa1IAAAAv0lEQVQ4T7XSPQrCQBAF4DdLXM9gI4LgIbQQhAhWNmJjn0vYeQ8bSztBwfyAh/AiSbuSPEmhLBK72TnAfMO8J1AcFr2kaWRqSpfIFs5fLYoOmPZXNLyAuEvpNj6mCrVHs7A7EicQNx9Th/5hQaBOrM7sAcBQM6vPLgHmEIwInKXO7VHAcQgIkAmAAcBHuNel0YLGXEE8RdwyCMRfJEalDnUhbSyqELNoRjH5910xKq8YejWoc7sXMBa81uIhrfAGK0BdaCaZXAEAAAAASUVORK5CYII="/></g></g></svg>
                </div>

            </div>
            <div class="apartment_text">
                <p class="price-text">
                    1 650 000 Р
                </p>
                <div class="room">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"><g><g transform="translate(-1295 -683)"><image width="19" height="19" transform="translate(1295 683)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAzklEQVQ4T9WUPw4BQRjF31vZKelVjqByAbsHcAGFA4gDiOhdRm9cQCHiBEtCiXoVT0hWxI7N2ERip5v5Xn7z/aes2QM4wedQTYhHp5SoUdZsGKVtH1aR9mGrHkzLsMPudfUafukwZU3CKG29wRIAl+ebsGWc9u/3wpy5YEVF+gnsAHKW+1UavYfp49ke1CQP47QMzNm0f5Ezb8+0CAcIgrozd9Lw4zg5m3ZpeoAabhjHX82mTzW9t0a1YTsAZ5/lCGHNOB1kWlkzB5AtA94Ae7nA9vk3q9kAAAAASUVORK5CYII="/></g></g></svg>
                    2 комнаты
                </div>
                <div class="area">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="18" viewBox="0 0 23 18"><g><g transform="translate(-1293 -718)"><image width="23" height="18" transform="translate(1293 718)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAASCAYAAACw50UTAAADJklEQVQ4T42UXYhUZRjHf/9zZs7Z6UN0+5Kw0Gi9CwpMKWpjnDPbsmYY1NKFEIUWBZV9sTfdlJEUXojBXgaBFO0WWiJlc2z6EEmxXST6UqKSiFLYrYjVeWfOeeLM7K7Lzu7Yc/k+z/N7vl/RQWyEgG6WMcGkBnGZqR0KhjCewuhX2X3TyV/zlVYNbyRJnwRtBFbN0Z8CvgXuBkbBBjCt7xRgFm4j+HQH24FngQ+Bt0n8r+HcBF7hCpSsBTYD/RivIC4He6RTgCZ8GvwucCuyB1SqH7NK4Xq8xl2k5FWuvzlTgcW5O8EbwfgIcbZTgBY8Dl4CHqaRW0duyqFgGON+YAx0glJtq4TNBqh2rSRJjoL3GrKtmL5QVHtsfotlBwvX4Sc/YmkfaeMkfnAEOIXvPa7i+V/mOtin4QCp7cBcLwpvA3sP2TbS+qjK/N0OrwRZ/25W5O6xONgH+Ey4TRokaRt2c3vyB0GnFbmHrBIeRnZAkdux0NbI4mAMs11Ix4Fx0twq9U39bnF+F+jpOU5Ditzr9knYg2ff4/srSRubSL0HVa7dsRj8X+B2UBHSDYrqfc057OcSCl3LId2HUQC3ZqZ0i4OjYMOY/YS0V1H9qsXgRuKuwQ+2ga5WVNsyO7hmG4K3gPuwtF/lxmfTC5Btyxim9/HsB0XOXxzuu2U0wi3IehW5e6cBLyPGVXJ77VB+OHtTqf5ES5f/HGMPOb9Ckv6syLUdY9Pe4sDI4Em+B1TFdytU5C+rBC8iBoFXMbYjvaGottuqly4nqZ/G001Itf8FbwHDw8B3KtcetSMUmMrvBK3D7Esm60PZ/2Jx8A7GEpXdBmvu+4XMzRBx+BzYZWB/ZpmnOLdUA/zT+lfsK0yj5GovqEg27KZYlaU0gt2ICN9fq+K539rgmU0STAL7gY2yOFytqHbywnmHq8H2AD3Ax5j9gbSi9WHpBNJmlc7/2go4L/MZeGq34Gl8wUE0y6vkevG89Zh1I51FaaxSI7veWZmBIz3TKs8K0zPaiXheFnfdQJosWWiVLvqW864ltQPAB222pjOtC4UrLwpa3OCMIrdmIfV/opF+5fqb3BAAAAAASUVORK5CYII="/></g></g></svg>
                    47 м2 общая площадь
                </div>
                <div class="floor">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" viewBox="0 0 23 23"><g><g transform="translate(-1293 -751)"><image width="23" height="23" transform="translate(1293 751)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAABWklEQVRIS+2VMUtCYRSGn6P3SkaDNAVBUASt0pYthkZtCUJBgzQEbdHQD2iIaChoLGhob9E1FesPhGOB5BRt0hBY93bviYhKu1podyjwW1++h4/3nPd7RYtGDJUcyC2+HR1GdEE0b8QRSUnS3vjK1kLfGOouA8aHFpB7wk9HEqPe7i1aMA9QzX4Pz4dyiFyA3jSAlhAtSsI+/iXczCCyCbgNIAuHjMxZVx3BtWiuQCDSsfWuU5bZ5/P3ey1t0UKogui2B670g6wjuuvVZASYlKSV+glelqQV9Qy2RATXzErCjnu0MzNKQLZ68CZn9N/bQs1KM2iuUbdPCJs7noRqIdT1tgCXKNOIVMF99Bdes9KyiKMlDBxzz1847j7B4B0O4+DO+wyXQ9BTYBV0ylf4a0K1xIDM8NDub+l6oL34/5X4N7f/BHDtKQQhiDIKVFq0VBgYAqqf2lv7vwD7XNLxyRID1wAAAABJRU5ErkJggg=="/></g></g></svg>
                    5 этаж
                </div>
            </div>
        </div>
        <!-- Блок на десктопе -->
        <div class="block-apartment-footer">
            <div class="number">
                1/8
            </div>
            <div class="arrow">
                <svg xmlns="http://www.w3.org/2000/svg"  class="margin-right" width="26" height="12" viewBox="0 0 26 12"><g><g transform="translate(-1203 -814)"><image width="26" height="12" transform="translate(1203 814)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAMCAYAAAB8xa1IAAAA1ElEQVQ4T73TsQrCQAwG4D8dXH0NF99BBEVQcHL1LUrXLkIb+gTuLuLiJFRQXER9BBfdfIJ2K5E7bLl2LHdmOcKRfFzIERoRBEFXRPYAjsy8at63zcks/CEpEfVEZMTMj7aNm3UVZCJFUYyTJLnbQlQfDZUIgD6AITPfbCIaMhHP82ZRFJ1sIxryff9MRAMAHwBPFwiAt3rRVkQWKgFwcQS9KAzDTpZlOyKaAlgy88YFppfhH1i13q6x2oc1sAkRzeM4PtgaYw0qx5jn+RrAlZnVaSW+EJRi8Gxwvo4AAAAASUVORK5CYII="/></g></g></svg>

                <svg xmlns="http://www.w3.org/2000/svg"  width="26" height="12" viewBox="0 0 26 12"><g><g transform="translate(-1246 -814)"><image width="26" height="12" transform="translate(1246 814)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAMCAYAAAB8xa1IAAAAv0lEQVQ4T7XSPQrCQBAF4DdLXM9gI4LgIbQQhAhWNmJjn0vYeQ8bSztBwfyAh/AiSbuSPEmhLBK72TnAfMO8J1AcFr2kaWRqSpfIFs5fLYoOmPZXNLyAuEvpNj6mCrVHs7A7EicQNx9Th/5hQaBOrM7sAcBQM6vPLgHmEIwInKXO7VHAcQgIkAmAAcBHuNel0YLGXEE8RdwyCMRfJEalDnUhbSyqELNoRjH5910xKq8YejWoc7sXMBa81uIhrfAGK0BdaCaZXAEAAAAASUVORK5CYII="/></g></g></svg>
            </div>
            <a class="more-link" href="#">Узнать подробнее</a>
        </div>
        <a class="more-link-mobile" href="#">Узнать подробнее</a>
    </div>
    <article id="map">
        <div id="ya-map"></div>
    </article>
</section>

<!--===================================================== company -->
<section class="section-company" id="company">
    <div class="container">
        <div class="row">
            <div class="col-1-1">
                <div class="orange-line"></div>
                <h2>О компании</h2>
                <p class="sub_h2">
                    Компания "Инвестконсалт" работает с 2016 года и успешно развивается на рынке недвижимости. Большой опыт компании увеличивает число объявлений на сайте и помогает быстро найти людям квартиру и дом, о котором они мечтают.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-3 col-1-xs cre-animate" data-animation="scale-up" data-speed="1200" data-delay="800" data-offset="90%" data-easing="easeInOutBack">
                <div class="company-block">
                    <div class="company-fon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="227" height="78" viewBox="0 0 227 78"><g><g transform="translate(-433 -1401)"><image width="227" height="78" transform="translate(433 1401)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                    </div>
                    <div class="award">
                        <svg xmlns="http://www.w3.org/2000/svg"width="63" height="80" viewBox="0 0 63 80"><g><g transform="translate(-456 -1382)"><image width="63" height="80" transform="translate(456 1382)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                    </div>
                    <div class="company-block_text">
                        <h6>С 2016 года</h6>
                        <p class="sub_h6">опыт работы</p>
                    </div>
                </div>
            </div>
            <div class="col-1-3 col-1-xs cre-animate" data-animation="scale-up" data-speed="1200" data-delay="400" data-offset="90%" data-easing="easeInOutBack">
                <div class="company-block">
                    <div class="company-fon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="258" height="84" viewBox="0 0 258 84"><g><g transform="translate(-809 -1403)"><image width="258" height="84" transform="translate(809 1403)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                    </div>
                    <div class="shopping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="64" viewBox="0 0 62 64"><g><g transform="translate(-844 -1383)"><image width="62" height="64" transform="translate(844 1383)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                    </div>
                    <div class="company-block_text">
                        <h6>2150</h6>
                        <p class="sub_h6">постоянных клиентов</p>
                    </div>
                </div>
            </div>
            <div class="col-1-3 col-1-xs cre-animate" data-animation="scale-up" data-speed="1200" data-delay="600" data-offset="90%" data-easing="easeInOutBack">
                <div class="company-block">
                    <div class="company-fon">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="246" height="87" viewBox="0 0 246 87"><g><g transform="translate(-1229 -1398)"><image width="246" height="87" transform="translate(1229 1398)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                    </div>
                    <div class="town">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="65" viewBox="0 0 72 65"><g><g transform="translate(-1258 -1382)"><image width="72" height="65" transform="translate(1258 1382)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                    </div>
                    <div class="company-block_text">
                        <h6>1200</h6>
                        <p class="sub_h6">продано квартир
                            в новостройках</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--===================================================== footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-1-2 col-1-xs">
                <div class="footer_logo-block">
                    <a href="#">
                        <img src="images/footer-logo.png" alt=" "/>
                    </a>
                    <span class="logo_subtext">
                        Продажа недвижимости
                    </span>
                </div>
                <div class="time-block">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="20" height="21" viewBox="0 0 20 21"><g><g transform="translate(-915 -65)"><image width="20" height="21" transform="translate(915 65)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAYAAABG1c6oAAACx0lEQVQ4T6XUXYiUVRzH8e/vmZkzaBe+QPRCwV4qSyLiSrVptvvMKmJYvuzF3hhdiPaGG1R6l9ASvd2UUUJgBLrtKiipF7vzjAu+bRIqEkZkF0KbN8VGEOKcZ/f5x7PjTDs7s7biuTwvn/M/53/OXzRpZohSdi2mzaA2xMOAgX4DGyWwQXXEl5qt1cxOG862EwT7geUYF5GdQ8EYRoCSFkwdQCvYCIFeV4e/Nt2oAy1ybwPvA6eAPQr9T01PEGWfguBjYAXiZXX6/uq8GmhFtwfRB/aGwvjz6ZCNsJB/8HqeW9V+GyTDYtcHvIPoqaJToA1nnyUIToO9ojA+0HANkTuCcUMF/1aTsQ+A10i0XF3l66okwF0FflHotzY/ojsOdkNhvLsBrET6PcZNFfwmWZRfD3aSjJboufKv9wpOnbCYXYuCESZZKovcQeARhX59M2xqQTR7hLU7jdzPiH5Z0V1H+lJh+ZP7Aku5T7FKhBNIL6qzfOK+wCj3Kqg3BY0kCNV1u3QX8CjGY9z2HdOfTt3TKuVewtSXgmVgu0L/7axg0S1Fdga4wni8Ud34hmwX873IdqbgVYwjKvj3ZgMrmXRPIDsNGmXcb52JWpT/CrMHZcXcZ2kBUME/eTewku1cGyjCdFiF8q5aht8l4Bk3hukjWSm3CtNFSNYonDg7J1S0qjP+ugaW3DaMQyTZlsrXK+XSXecz7lerm8n/Q+uSMcQDZNyPmCIVyjsq4JBbQobLwH6FPq04c2p3CsQA0I73y7SBP/6rNpFL//EA2BeMx282y2RdZEUWIJceex1JUlDXxPl0vL4eFt0mxDfAnxh7WeSPaSVxHXSBedzK9YD2AQEkWxROjFbnNFbsoXmPk5n8EOgG/sb4ATEGSiBpAT1dgewA+XifVvPX9A0bwFrmhuc/ShC/gGkl8BAiAf0OySj5+LuZUHXdv1pyNCQPZuBuAAAAAElFTkSuQmCC"/></g></g></svg>
                    Режим работы с 09:00 - 21:00
                </div>
            </div>
            <div class="col-1-2 col-1-xs">
                <div class="footer_si-phone">
                    <a href="tel:+78002005009" class="phone-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g transform="translate(-1091 -65)"><image width="20" height="20" transform="translate(1091 65)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAADH0lEQVQ4T42Ub4hUVRjGf8/M3HNdjf5YQYSkQREJGYGUhUEze2ehZZf8YJKFRkm1tUvRZpiCRUkQZh8qqLQoRMIyCioZrLmzW7gftL4kFERf24LIsoJc596Z+8adO7PNqLvs/XZezvmd533P81yxwM9CbxS0Dfga6QClelXCzj6uTsFCfwjYBjZNUnhKA6d/7d5sFS7EuUGMQcQG4AewEQXxt937WkAL3X3Ae8Ae0FqwK8nn71BxZvp8DViFy3HuJWATZqMqx2939smq7i7ER8ADCqL37RCOpe5T4NpuqFXdDZBcSqExpSKNXiE2piDel9ZkofsJ8aH6o52z7X/OYvrcB8B15KMbVeSMhe5ZYAfwB9gOBfH+FrTq7kXsJ2drVYqPp0AjZ2vSRc/MJrmApvsb2a3qj79pHf6CJeT9EbBdmO1VOX4yg/r7kN3CVHRTCvyXnO5WqV6ZVWiImvcyaAv56GoV+avnsqq3BmkCszGV43ftCEspuJ+R7pGFXhU4oSDeOguseq8jbSZnA2cr73LFONhW/oxWaAORhf47YBfJat4Ipp1cHK3QauL2sE8CuxVEu+eyada+Owm5YQVnQgvderA3ZdmspjEbT+W3gekDPYwfrdLtnJoTGrrt5KyiUnzC0odc7G3u+HA7MEoUrdQg/1gFH+eOAb+Rj4Y6NllIqDLgJItouu9ARxXUH2rVaouWY8kxxAS56P5uqE0uuYJm/XpmGsc1zOlzkpIBvJsxTXUM3m59JfAlsh+pxxs1yO9W84cxOwjkMaYp5IvdiZrNcgbwHgPtQcmQ+hsTmfq+ZTSbH4MtB6VmTr33HDPRq/R5h0FXdSeqB9hW9SIwBsmQgsbR9kgKNP0nwNIL31BQf6VVzxL1CXBNB3oOsA1Ngz+ObIv64wPzPUaWfe8I6BcF0abzAtvtPwJ6DTiEHz0+v338t9KRKIjunBPYVroKSBUuQ9pFX32vbmOmN4buGcQLWFJSuTE1L/D/+XkPgp4HfLCDmGooOQVaB3qUROs1UP+s9ftaiFlb4HRWl7h1iI3AauAy4HsseVrlxlcdzn+ccVX1e6K7pgAAAABJRU5ErkJggg=="/></g></g></svg>
                        8 (800) 200 50 09
                    </a>
                    <a href="#" class="button footer_button-orange open-phone-modal" data-extra="1">
                        <span class="bg-booton"></span>
                        Заказать звонок
                    </a>
                    <div class="si-overlay"></div>
                    <div class="si-modals-wrapper">
                        <div class="si-success-modal si-success-modal-1">
                            <a href="#" class="si-close"></a>

                            <div class="modal-container align-center">
                                <div class="modal-thanks-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="57" height="57" viewBox="0 0 57 57"><g><g transform="translate(-944 -261)"><image width="57" height="57" transform="translate(944 261)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                                </div>
                                <div class="si-success-modal-title">
                                    <div class="title">
                                        Спасибо!<Br>
                                        Ваша заявка отправлена
                                    </div>
                                    <div class="modal_sub_title">
                                        Наш менеджер свяжется с Вами
                                        в ближайшее время.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="si-modal phone-modal">
                            <a href="#" class="si-close"></a>

                            <div class="modal-container align-center">

                                <div class="modal-form-title">
                                    Закажите консультацию
                                </div>

                                <div class="modal-time">
                                    Наш менеджер свяжется
                                    с Вами в ближайшее время
                                </div>

                                <form action="send.php" method="post" class="send-form" autocomplete="off">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-1-1">
                                                <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                                                <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                                <input type="email" name="client_email" class="client-email" placeholder="Ваш email">
                                            </div>
                                        </div>
                                    </div>


                                    <input type="hidden" name="send_type" class="send-type" value="1">
                                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                                    <div class="btn-holder block_button-orange-modal">
                                        <button type="submit" class="button-orange-modal">Позвоните мне</button>
                                        <div class="g-recaptcha" id="g-recaptcha"></div>
                                    </div>
                                    <!--                                                     Agreement -->
                                    <div class="form-agree align-left">
                                        <label class="checkbox-label form-agree-check checked">
                                            <input type="checkbox" checked>
                                            Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку
                                            моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом
                                            от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",
                                            на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых
                                            в&nbsp;Согласии на&nbsp;обработку персональных данных.
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--===================================================== section form-x -->
<!--    <section class="section-form form-x" id="form-x">-->
<!--        <div class="container align-center">-->
<!---->
<!--            <h2>-->
<!---->
<!--            </h2>-->
<!---->
<!--            <p>-->
<!---->
<!--            </p>-->
<!---->
<!--            <form action="send.php" method="post" class="send-form" autocomplete="off">-->
<!--                <div class="row">-->
<!--                    <div class="col-1-3">-->
<!--                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-1-3">-->
<!--                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-1-3">-->
<!--                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <input type="hidden" name="send_type" class="send-type" value="2">-->
<!--                <input type="hidden" name="send_extra" class="send-extra" value="1">-->
<!---->
<!--                <div class="btn-holder">-->
<!--                    <button type="submit" class="btn">Позвоните мне</button>-->
<!--                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
<!--                </div>-->
<!---->
<!--                <!-- Agreement -->
<!--                <div class="form-agree align-left">-->
<!--                    <label class="checkbox-label form-agree-check checked">-->
<!--                        <input type="checkbox" checked>-->
<!--                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
<!--                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
<!--                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
<!--                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
<!--                        в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
<!--                    </label>-->
<!--                </div>-->
<!--            </form>-->
<!---->
<!--        </div>-->
<!--    </section>-->

<!--===================================================== section map -->
<!--    <div class="section-map">-->
<!--        <div class="map-holder" id="map"></div>-->
<!--    </div>-->


<!--===================================================== Footer -->
<!--    <footer class="layout-footer">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!--                <!-- company info block -->
<!--                <div class="col-1-2">-->
<!--                    <div class="company-info-block">-->
<!--                        <address>-->
<!--                            <dl>-->
<!--                                <dt>Адрес:</dt>-->
<!--                                <dd></dd>-->
<!--                            </dl>-->
<!--                        </address>-->
<!---->
<!--                        <dl>-->
<!--                            <dt>ИНН:</dt>-->
<!--                            <dd></dd>-->
<!--                        </dl>-->
<!---->
<!--                        <dl>-->
<!--                            <dt>ОГРН:</dt>-->
<!--                            <dd></dd>-->
<!--                        </dl>-->
<!---->
<!--                        <p>-->
<!--                            <a href="mailto:info@domen.ru">info@domen.ru</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <!-- Phone block -->
<!--                <div class="col-1-2 align-right">-->
<!--                    <div class="si-phone">-->
<!--                        <div class="si-phone-text">Звонок бесплатный</div>-->
<!--                        <a href="tel:+78009001111" class="phone-link dark">8 (800) 900-11-11</a>-->
<!--                        <a href="#" class="open-phone-modal" data-extra="2">Заказать консультацию</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="copyright-holder row">-->
<!--                <div class="col-1-2">-->
<!--                    <a href="#" class="dark open-text-modal" data-id="1">-->
<!--                        Согласие на обработку персональных данных-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!--                <!-- copyright block -->
<!--                <div class="col-1-2 align-right">-->
<!--                    <a href="http://hello-brand.ru/" class="dark" target="_blank" rel="nofollow noopener">-->
<!--                        Разработано в "Hello, brand!"-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </footer>-->


<!--===================================================== Modals -->
<!-- Overlay(s) -->
<!--    <div class="si-overlay"></div>-->
<!--    <div class="si-overlay-2"></div>-->
<!---->
<!--     Wrappers-->
<!--    <div class="si-modals-wrapper-2"></div>-->
<!---->
<!--    <div class="si-modals-wrapper">-->

<!--============================================== success modal -->
<!--        <div class="si-success-modal si-success-modal-1">-->
<!--            <a href="#" class="si-close"></a>-->
<!---->
<!--            <div class="modal-container align-center">-->
<!---->
<!--                <div class="si-success-modal-title">-->
<!--                    Спасибо!-->
<!--                </div>-->
<!---->
<!--                <div class="success-time">-->
<!--                    Наш менеджер свяжется с вами в течение 15 минут-->
<!--                </div>-->
<!---->
<!--                <p>-->
<!--                    <strong>Время работы отдела продаж:</strong>-->
<!--                    пн-пт с 10.00 до 20.00 (по Москве)-->
<!--                </p>-->
<!---->
<!--            </div>-->
<!--        </div>-->

<!--============================================== phone modal -->
<!--        <div class="si-modal phone-modal">-->
<!--            <a href="#" class="si-close"></a>-->
<!---->
<!--            <div class="modal-container align-center">-->
<!---->
<!--                <div class="modal-form-title">-->
<!--                    Закажите консультацию-->
<!--                </div>-->
<!---->
<!--                <div class="modal-time">-->
<!--                    Ответ в течение 15 минут-->
<!--                </div>-->
<!---->
<!--                <form action="send.php" method="post" class="send-form" autocomplete="off">-->
<!--                    <div class="row">-->
<!--                        <div class="col-1-2">-->
<!--                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-1-2">-->
<!--                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>-->
<!---->
<!--                    <input type="hidden" name="send_type" class="send-type" value="1">-->
<!--                    <input type="hidden" name="send_extra" class="send-extra" value="1">-->
<!---->
<!--                    <div class="btn-holder">-->
<!--                        <button type="submit" class="btn">Позвоните мне</button>-->
<!--                        <div class="g-recaptcha" id="g-recaptcha"></div>-->
<!--                    </div>-->
<!---->
<!--<!--                     Agreement -->
<!--                    <div class="form-agree align-left">-->
<!--                        <label class="checkbox-label form-agree-check checked">-->
<!--                            <input type="checkbox" checked>-->
<!--                            Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
<!--                            моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
<!--                            от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
<!--                            на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
<!--                            в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </form>-->
<!---->
<!--            </div>-->
<!--        </div>-->

<!--============================================== text modal 1 -->
<!--        <div class="si-modal text-modal text-modal-1">-->
<!--            <a href="#" class="si-close"></a>-->
<!---->
<!--            <div class="modal-container">-->
<!---->
<!--                <div class="modal-form-title align-center">-->
<!--                    Согласие на обработку персональных данных-->
<!--                </div>-->
<!---->
<!--                <div class="modal-text-block">-->
<!--                    <p>-->
<!--                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ-->
<!--                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём-->
<!--                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных-->
<!--                        НАЗВАНИЕ КОМПАНИИ,-->
<!--                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:-->
<!--                        АДРЕС КОМПАНИИ-->
<!--                        (далее по&nbsp;тексту&nbsp;- Оператор).-->
<!--                    </p>-->
<!---->
<!--                    <p>-->
<!--                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому-->
<!--                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.-->
<!--                    </p>-->
<!---->
<!--                    <p>-->
<!--                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:-->
<!--                    </p>-->
<!---->
<!--                    <ul class="marked">-->
<!--                        <li>-->
<!--                            Имя;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Телефон;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            E-mail;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Комментарий.-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                    <p>-->
<!--                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными-->
<!--                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких-->
<!--                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),-->
<!--                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,-->
<!--                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим-->
<!--                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными-->
<!--                        способами.-->
<!--                    </p>-->
<!---->
<!--                    <p>-->
<!--                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)-->
<!--                        ТРЕТЬИ ЛИЦА-->
<!--                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:-->
<!--                    </p>-->
<!---->
<!--                    <ul class="marked">-->
<!--                        <li>-->
<!--                            предоставление мне услуг/работ;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,-->
<!--                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                    <p>-->
<!--                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего-->
<!--                        уведомления на&nbsp;электронный адрес-->
<!--                        <a href="mailto:">ЕМЕЙЛ</a>.-->
<!--                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе-->
<!--                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,-->
<!--                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10-->
<!--                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ-->
<!--                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.-->
<!--                    </p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->

<script type="text/javascript">
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>