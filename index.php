<?php
header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'Sporto';
$desc = 'Резиновая плитка';
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
    <link rel="shortcut icon" href="images/logo-icon.png" type="image/png">


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
    <section class="section-header" id="header">
        <nav class="menu open-mobile-nav">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg"  width="91" height="92" viewBox="0 0 91 92"><defs><path id="d3qba" d="M83 48a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="d3qbd" d="M70 74v-3h27v3zm0 9v-3h27v3zm0 9v-3h27v3z"/><mask id="d3qbc" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M50 48h66v66H50z"/><use xlink:href="#d3qba"/></mask><filter id="d3qbb" width="122" height="122" x="22" y="20" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1048Out"/><feGaussianBlur in="FeOffset1048Out" result="FeGaussianBlur1049Out" stdDeviation="7.2 7.2"/></filter></defs><g><g transform="translate(-38 -35)"><g filter="url(#d3qbb)"><use fill="none" stroke-opacity=".1" stroke-width="0" mask="url(&quot;#d3qbc&quot;)" xlink:href="#d3qba"/><use fill="#3a66bc" fill-opacity=".1" xlink:href="#d3qba"/></g><use fill="#4574d1" xlink:href="#d3qba"/></g><g transform="translate(-38 -35)"><use fill="#fff" xlink:href="#d3qbd"/></g></g></svg>
            </a>
            <div class="menu_text">
                открыть меню
            </div>
        </nav>



        <div class="scroll">
            <div class="scroll_text">
                скрольте ниже
            </div>
            <svg xmlns="http://www.w3.org/2000/svg"  width="119" height="120" viewBox="0 0 119 120"><defs><path id="qelwa" d="M83 663a32 32 0 1 1 0 64 32 32 0 0 1 0-64z"/><path id="qelwd" d="M92 691.49v6.87c0 4.2-3.56 7.64-7.91 7.64h-.56c-4.35 0-7.92-3.44-7.92-7.64v-6.87a7.7 7.7 0 0 1 5.92-7.37c-.11.35-.18.71-.18 1.1v5.16c0 1.63 1.1 2.96 2.46 2.96 1.35 0 2.46-1.33 2.46-2.96v-5.16c0-.39-.07-.75-.18-1.1A7.7 7.7 0 0 1 92 691.5zm-8.2-6.06c.69 0 1.24 1.06 1.24 2.37s-.55 2.38-1.23 2.38c-.68 0-1.23-1.07-1.23-2.38 0-1.3.55-2.37 1.23-2.37z"/><mask id="qelwc" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M51 663h64v64H51z"/><use xlink:href="#qelwa"/></mask><filter id="qelwb" width="164" height="164" x="1" y="613" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1073Out"/><feGaussianBlur in="FeOffset1073Out" result="FeGaussianBlur1074Out" stdDeviation="16 16"/></filter></defs><g><g transform="translate(-24 -635)"><g filter="url(#qelwb)"><use fill="none" stroke-opacity=".11" stroke-width="0" mask="url(&quot;#qelwc&quot;)" xlink:href="#qelwa"/><use fill="#5b667b" fill-opacity=".11" xlink:href="#qelwa"/></g><use fill="#fff" xlink:href="#qelwa"/></g><g transform="translate(-24 -635)"><use fill="#de9123" xlink:href="#qelwd"/></g></g></svg>

        </div>
        <div class="si-phone">
            <a href="tel:+78902000600" class="phone-link dark"><svg xmlns="http://www.w3.org/2000/svg"  width="128" height="130" viewBox="0 0 128 130"><defs><path id="lljza" d="M1687 48a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="lljzd" d="M1694.6 84.01l-2.1-2.1c-.74-.74-2.02-.44-2.32.53a1.43 1.43 0 0 1-1.65.9c-1.5-.37-3.52-2.32-3.9-3.89-.22-.67.23-1.42.9-1.64.98-.3 1.28-1.57.53-2.32l-2.1-2.1c-.6-.51-1.5-.51-2.03 0l-1.42 1.43c-1.43 1.5.15 5.45 3.67 8.97 3.53 3.5 7.5 5.15 9 3.66l1.43-1.42c.52-.6.52-1.5 0-2.02z"/><mask id="lljzc" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M1654 48h66v66h-66z"/><use xlink:href="#lljza"/></mask><filter id="lljzb" width="166" height="166" x="1604" y="-2" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1023Out"/><feGaussianBlur in="FeOffset1023Out" result="FeGaussianBlur1024Out" stdDeviation="16 16"/></filter></defs><g><g transform="translate(-1624 -16)"><g filter="url(#lljzb)"><use fill="none" stroke-opacity=".22" stroke-width="0" mask="url(&quot;#lljzc&quot;)" xlink:href="#lljza"/><use fill="#5b667b" fill-opacity=".22" xlink:href="#lljza"/></g><use fill="#fff" xlink:href="#lljza"/></g><g transform="translate(-1624 -16)"><use fill="#de9123" xlink:href="#lljzd"/></g></g></svg>8(890) 200 06 00</a>
            <a href="#" class="button si-phone_button open-phone-modal" data-extra="1">Заказать консультацию</a>
        </div>

        <div class="container cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
            <div class="menu-block-mobile">
                <div class="row">
                    <div class="col-1-5-xs col-1-2-xxs">
                        <nav class="menu open-mobile-nav">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="91" height="92" viewBox="0 0 91 92"><defs><path id="d3qba" d="M83 48a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="d3qbd" d="M70 74v-3h27v3zm0 9v-3h27v3zm0 9v-3h27v3z"/><mask id="d3qbc" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M50 48h66v66H50z"/><use xlink:href="#d3qba"/></mask><filter id="d3qbb" width="122" height="122" x="22" y="20" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1048Out"/><feGaussianBlur in="FeOffset1048Out" result="FeGaussianBlur1049Out" stdDeviation="7.2 7.2"/></filter></defs><g><g transform="translate(-38 -35)"><g filter="url(#d3qbb)"><use fill="none" stroke-opacity=".1" stroke-width="0" mask="url(&quot;#d3qbc&quot;)" xlink:href="#d3qba"/><use fill="#3a66bc" fill-opacity=".1" xlink:href="#d3qba"/></g><use fill="#4574d1" xlink:href="#d3qba"/></g><g transform="translate(-38 -35)"><use fill="#fff" xlink:href="#d3qbd"/></g></g></svg>
                            </a>
                        </nav>
                    </div>
                    <div class="col-2-5-xs col-1-2-xxs">
                        <a class="logo-img" href="#"><img src="images/logo.png" alt=" "/></a>
                    </div>
                    <div class="col-2-5-xs">
                        <div class="logo_text-mobile">
                            Резиновая<Br>
                            плитка напрямую<br>
                            от производителя
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">

                    <a class="logo-img" href="#"><img src="images/logo.png" alt=" "/></a>
                    <div class="logo_text">
                        Резиновая плитка 50*50 cм. толщиной
                        15-16 мм. напрямую от производителя
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="header-basic-text">
                        <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                            Резиновая плитка 50х50 см<Br>
                            толщиной 15–60 мм
                        </h1>
                        <h1 class="h1_mobile">
                            Резиновая плитка 50х50 см
                            толщиной<Br> 15–60 мм
                        </h1>

                        <div class="sub_h1">
                            Напрямую от производителя <span>с 8-летним стажем</span>
                            и отправкой по России в день заказа
                        </div>
                        <div class="header-slider-video mobile-block">
                            <div class="block-slider-holder">
                                <div class="block-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Товарный запас на складе более - 5000 м2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Более 8 лет на рынке
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Гарантия 5 лет
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Бесплатная доставка
                                                        на объект по Москве и СПб
                                                        при заказе от 1 000 м2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Работа на европейском оборудовании методом горячего прессования
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-pagination"></div>
                                <div class="block-next swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="14" viewBox="0 0 22 14"><defs><path id="bzx4a" d="M534.24 625.28a1 1 0 0 0-1.37 0 .88.88 0 0 0 0 1.28l4.84 4.53h-17.75c-.54 0-.96.4-.96.9s.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/></defs><g><g transform="translate(-519 -625)"><use fill="#de9123" xlink:href="#bzx4a"/></g></g></svg>
                                </div>
                                <div class="block-prev swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="14" viewBox="0 0 22 14"><defs><path id="li1wa" d="M392.76 625.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.28l-4.84 4.53h17.75c.54 0 .96.4.96.9s-.42.92-.96.92H389.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/></defs><g><g transform="translate(-386 -625)"><use fill="#3f72d4" xlink:href="#li1wa"/></g></g></svg>
                                </div>
                            </div>
                            <a href="https://www.youtube.com/embed/jDM-x8Nz0d0?rel=0&loop=1&autoplay=1" class="header-video video-link video-play fancybox.iframe" data-rel="fancybox[main-video]" rel="fancybox[main-video]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="201" height="215" viewBox="0 0 201 215"><defs><path id="van0a" d="M907 641a59 59 0 1 1 0 118 59 59 0 0 1 0-118z"/><path id="van0b" d="M907 787a87 87 0 1 1 0-174"/><path id="van0g" d="M907 666a34 34 0 1 1 0 68 34 34 0 0 1 0-68z"/><path id="van0h" d="M925.05 700.42a18.47 18.47 0 1 1-36.94 0 18.47 18.47 0 0 1 36.94 0zm-7.12-4.36c-.13-1.54-1.04-3.47-2.93-3.54a117.4 117.4 0 0 0-16.84 0c-1.66.18-2.8 2.2-2.92 3.74a43.76 43.76 0 0 0 0 8.3c.12 1.53 1.23 3.57 2.92 3.78 5.42.35 11.62.4 16.84 0 1.64-.29 2.8-2.25 2.93-3.79a46.5 46.5 0 0 0 0-8.49zm-13.66-.26l6.93 4.62-6.93 4.62z"/><mask id="van0d" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M848 641h118v118H848z"/><use xlink:href="#van0a"/></mask><filter id="van0c" width="230" height="230" x="792" y="585" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1098Out"/><feGaussianBlur in="FeOffset1098Out" result="FeGaussianBlur1099Out" stdDeviation="18.4 18.4"/></filter><filter id="van0e" width="161" height="248" x="783" y="576" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1113Out"/><feGaussianBlur in="FeOffset1113Out" result="FeGaussianBlur1114Out" stdDeviation="10.8 10.8"/></filter><clipPath id="van0f"><use fill="#fff" xlink:href="#van0b"/></clipPath></defs><g><g transform="translate(-801 -593)"><g filter="url(#van0c)"><use fill="none" stroke-opacity=".17" stroke-width="0" mask="url(&quot;#van0d&quot;)" xlink:href="#van0a"/><use fill="#3a66bc" fill-opacity=".17" xlink:href="#van0a"/></g><use fill="#fff" xlink:href="#van0a"/></g><g transform="translate(-801 -593)"><g filter="url(#van0e)"><use fill="none" stroke="#3a66bc" stroke-opacity=".11" stroke-width="12" xlink:href="#van0b"/></g><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="24" clip-path="url(&quot;#van0f&quot;)" xlink:href="#van0b"/></g><g transform="translate(-801 -593)"><use fill="#4574d1" xlink:href="#van0g"/></g><g transform="translate(-801 -593)"><use fill="#fff" xlink:href="#van0h"/></g></g></svg>
                                <div class="header-video_text">
                                    <p>Смотреть
                                        видео о компании</p>
                                </div>
                            </a>
                        </div>
                        <div class="block-consultation">
                            <a class="consultation_button si-phone_button open-phone-modal" href="#">
                                Задать вопрос специалисту
                            </a>
                            <div class="consultation_text">
                                Гарантия качества
                                и сроки  зафиксированы
                                в договоре
                            </div>
                        </div>
                        <div class="header-slider-video">
                            <div class="block-slider-holder">
                                <div class="block-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Товарный запас на складе более - 5000 м2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Более 8 лет на рынке
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Гарантия 5 лет
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Бесплатная доставка
                                                        на объект по Москве и СПб
                                                        при заказе от 1 000 м2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide_block">
                                                <div class="slide_text">
                                                    <div class="slider_title">03 <span>/ 6</span></div>
                                                    <div class="slider_text">
                                                        Работа на европейском оборудовании методом горячего прессования
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-pagination"></div>
                                <div class="block-next swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="14" viewBox="0 0 22 14"><defs><path id="bzx4a" d="M534.24 625.28a1 1 0 0 0-1.37 0 .88.88 0 0 0 0 1.28l4.84 4.53h-17.75c-.54 0-.96.4-.96.9s.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/></defs><g><g transform="translate(-519 -625)"><use fill="#de9123" xlink:href="#bzx4a"/></g></g></svg>
                                </div>
                                <div class="block-prev swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="14" viewBox="0 0 22 14"><defs><path id="li1wa" d="M392.76 625.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.28l-4.84 4.53h17.75c.54 0 .96.4.96.9s-.42.92-.96.92H389.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/></defs><g><g transform="translate(-386 -625)"><use fill="#3f72d4" xlink:href="#li1wa"/></g></g></svg>
                                </div>
                            </div>

                            <a href="https://www.youtube.com/watch?v=ti3Ejrmkl_U&amp;autoplay=1" class="header-video show-video fancybox" data-rel="fancybox[video]" rel="fancybox[video]" data-rel="media" rel="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="201" height="215" viewBox="0 0 201 215"><defs><path id="van0a" d="M907 641a59 59 0 1 1 0 118 59 59 0 0 1 0-118z"/><path id="van0b" d="M907 787a87 87 0 1 1 0-174"/><path id="van0g" d="M907 666a34 34 0 1 1 0 68 34 34 0 0 1 0-68z"/><path id="van0h" d="M925.05 700.42a18.47 18.47 0 1 1-36.94 0 18.47 18.47 0 0 1 36.94 0zm-7.12-4.36c-.13-1.54-1.04-3.47-2.93-3.54a117.4 117.4 0 0 0-16.84 0c-1.66.18-2.8 2.2-2.92 3.74a43.76 43.76 0 0 0 0 8.3c.12 1.53 1.23 3.57 2.92 3.78 5.42.35 11.62.4 16.84 0 1.64-.29 2.8-2.25 2.93-3.79a46.5 46.5 0 0 0 0-8.49zm-13.66-.26l6.93 4.62-6.93 4.62z"/><mask id="van0d" width="2" height="2" x="-1" y="-1"><path fill="#fff" d="M848 641h118v118H848z"/><use xlink:href="#van0a"/></mask><filter id="van0c" width="230" height="230" x="792" y="585" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1098Out"/><feGaussianBlur in="FeOffset1098Out" result="FeGaussianBlur1099Out" stdDeviation="18.4 18.4"/></filter><filter id="van0e" width="161" height="248" x="783" y="576" filterUnits="userSpaceOnUse"><feOffset in="SourceGraphic" result="FeOffset1113Out"/><feGaussianBlur in="FeOffset1113Out" result="FeGaussianBlur1114Out" stdDeviation="10.8 10.8"/></filter><clipPath id="van0f"><use fill="#fff" xlink:href="#van0b"/></clipPath></defs><g><g transform="translate(-801 -593)"><g filter="url(#van0c)"><use fill="none" stroke-opacity=".17" stroke-width="0" mask="url(&quot;#van0d&quot;)" xlink:href="#van0a"/><use fill="#3a66bc" fill-opacity=".17" xlink:href="#van0a"/></g><use fill="#fff" xlink:href="#van0a"/></g><g transform="translate(-801 -593)"><g filter="url(#van0e)"><use fill="none" stroke="#3a66bc" stroke-opacity=".11" stroke-width="12" xlink:href="#van0b"/></g><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="24" clip-path="url(&quot;#van0f&quot;)" xlink:href="#van0b"/></g><g transform="translate(-801 -593)"><use fill="#4574d1" xlink:href="#van0g"/></g><g transform="translate(-801 -593)"><use fill="#fff" xlink:href="#van0h"/></g></g></svg>
                                <div class="header-video_text">
                                    Смотреть
                                        видео о компании
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="rubber-block">
                        <div class="rubber-header-fon-text">
                            Пример текста который
                            легко можно заменить
                        </div>
                        <img src="images/rubber-header-fon.png" alt=" "/>
                    </div>
                </div>
<!--                <div class="col-1-2">-->
<!--                    -->
<!--                </div>-->
            </div>
        </div>
    <div class="vertical-line">
        <img src="images/line-vertical.png" alt=" "/>
    </div>
    </section>


    <!--===================================================== section 01 -->
    <section class="section-01" id="01">
        <div class="container">
            <div class="row">
                <div class="vertical-line">
                    <img src="images/line-vertical-small.png" alt=" "/>
                </div>
                <div class="number-orange">01</div>
                <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                    7000 м2 всегда в наличии в Москве и СПб
                </h1>
                <h6 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="900" data-offset="90%" data-easing="easeOutBack">
                    по лучшей цене на рынке
                </h6>
                <div class="line-block"></div>
                <div class="basic-text cre-animate" data-animation="scale-up" data-speed="1600" data-delay="1000" data-offset="90%" data-easing="easeOutBack">
                    Предлагаем широкий ассортимент продукции под различные цели.
                    Специалист поможет в подборе и расчете потребности.

                </div>
                <div class="col-1-1">
                    <div class="mobile-block">
                        <div class="block-slider-holder">
                            <div class="block-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="block-rubber-product">
                                            <div class="product_title">
                                                Плитка Sporto
                                            </div>
                                            <img src="images/tile-red.png" alt=" "/>
                                            <div class="product_text-size">
                                                Габариты: 500х500 мм, Толщина: 15 мм,
                                                Количество штук: 4 шт./м2 +
                                            </div>
                                            <div class="product_text-review">
                                                Подойдет для проведения внутренних работ по обеспечению
                                                безопасности объектов  с небольшой проходимостью.
                                                + от 990 руб./м2
                                            </div>
                                            <div class="product_buttons">
                                                <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                                                <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="block-rubber-product">
                                            <div class="product_title">
                                                Плитка Sporto
                                            </div>
                                            <img src="images/tile-red.png" alt=" "/>
                                            <div class="product_text-size">
                                                Габариты: 500х500 мм, толщина: 20 мм,
                                                количество штук: 4 шт./м2
                                            </div>
                                            <div class="product_text-review">
                                                Идеально подходит для наружного использования в виде отделки
                                                пола входной группы частных домов, магазинов, АБК и т. д.
                                            </div>
                                            <div class="product_buttons">
                                                <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                                                <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="block-rubber-product">
                                            <div class="product_title">
                                                Плитка Sporto
                                            </div>
                                            <img src="images/tile-red.png" alt=" "/>
                                            <div class="product_text-size">
                                                Габариты: 500х500 мм, толщина: 30 мм,
                                                количество штук: 4 шт./м2
                                            </div>
                                            <div class="product_text-review">
                                                Покрытие используется в раздевалках катков, спортивных залах,
                                                наружных игровых площадках.
                                                от 1050 руб./м2 (популярная позиция)
                                            </div>
                                            <div class="product_buttons">
                                                <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                                                <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="block-rubber-product">
                                            <div class="product_title">
                                                Плитка Sporto
                                            </div>
                                            <img src="images/tile-red.png" alt=" "/>
                                            <div class="product_text-size">
                                                Габариты: 500х500 мм, толщина: 40 мм,
                                                количество штук: 4 шт./м2
                                            </div>
                                            <div class="product_text-review">
                                                Рекомендована для наружного и внутреннего применения в местах
                                                с повышенными эксплуатационными нагрузками.
                                                от 1190 руб./м2 (популярная позиция)
                                            </div>
                                            <div class="product_buttons">
                                                <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                                                <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-pagination"></div>
                            <div class="block-next swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                            </div>
                            <div class="block-prev swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-1-2 col-1-xs">
                    <div class="block-rubber-product cre-animate" data-animation="scale-up" data-speed="1600" data-delay="900" data-offset="90%" data-easing="easeOutBack">
                        <div class="product_title">
                            Плитка Sporto
                        </div>
                        <img src="images/tile-red.png" alt=" "/>
                        <div class="product_text-size">
                            Габариты: 500х500 мм, Толщина: 15 мм,
                            Количество штук: 4 шт./м2 +
                        </div>
                        <div class="product_text-review">
                            Подойдет для проведения внутренних работ по обеспечению
                            безопасности объектов  с небольшой проходимостью.<Br>
                            + от 990 руб./м2
                        </div>
                        <div class="product_buttons">
                            <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                            <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                        </div>
                    </div>
                </div>


                <div class="col-1-2 col-1-xs">
                    <div class="block-rubber-product cre-animate" data-animation="scale-up" data-speed="1600" data-delay="700" data-offset="90%" data-easing="easeOutBack">
                        <div class="product_title">
                            Плитка Sporto
                        </div>
                        <img src="images/tile-green.png" alt=" "/>
                        <div class="product_text-size">
                            Габариты: 500х500 мм, толщина: 20 мм,
                            количество штук: 4 шт./м2
                        </div>
                        <div class="product_text-review">
                            Идеально подходит для наружного использования в виде отделки пола
                            входной группы частных домов, магазинов, АБК и т. д.
                            от 1050 руб./м2
                        </div>
                        <div class="product_buttons">
                            <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                            <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-1-xs">
                    <div class="block-rubber-product cre-animate" data-animation="scale-up" data-speed="1600" data-delay="900" data-offset="90%" data-easing="easeOutBack">
                        <div class="product_title">
                            Плитка Sporto
                        </div>
                        <img src="images/tile-green.png" alt=" "/>
                        <div class="product_text-size">
                            Габариты: 500х500 мм, толщина: 30 мм,
                            количество штук: 4 шт./м2
                        </div>
                        <div class="product_text-review">
                            Покрытие используется в раздевалках катков, спортивных залах,
                            наружных игровых площадках.<Br>
                            от 1050 руб./м2 (популярная позиция)
                        </div>
                        <div class="product_buttons">
                            <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                            <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-1-xs">
                    <div class="block-rubber-product cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                        <div class="product_title">
                            Плитка Sporto
                        </div>
                        <img src="images/tile-red.png" alt=" "/>
                        <div class="product_text-size">
                            Габариты: 500х500 мм, толщина: 40 мм,
                            количество штук: 4 шт./м2
                        </div>
                        <div class="product_text-review">
                            Рекомендована для наружного и внутреннего применения в местах
                            с повышенными эксплуатационными нагрузками.<Br>
                            от 1190 руб./м2 (популярная позиция)
                        </div>
                        <div class="product_buttons">
                            <a class="product_consultation si-phone_button open-phone-modal" href="#">Получить консультацию</a>
                            <a class="product_orange-button si-phone_button open-orange-modal" href="#">Заказать по лучшей цене</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--===================================================== section 02 -->
    <section class="section-02" id="02">
        <div class="vertical-line">
            <img src="images/line-vertical-small.png" alt=" "/>
        </div>
        <div class="number-orange">02</div>
        <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
            Собственное производство
        </h1>
        <h6 clas="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
            с 2009 года
        </h6>
        <div class="container">
            <div class="row">
                <div class="col-1-2 col-1-xs mobile-fon-player">
                    <div class="block-video-02">
                        <a href="https://www.youtube.com/watch?v=ti3Ejrmkl_U" class="block-video_link show-video fancybox" data-rel="fancybox[video]" rel="fancybox[video]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="118" height="118" viewBox="0 0 118 118"><defs><path id="gnxfa" d="M655 3201a59 59 0 1 1 0 117.99 59 59 0 0 1 0-117.99z"/><path id="gnxfb" d="M655.5 3219a40.5 40.5 0 1 1 0 81 40.5 40.5 0 0 1 0-81z"/><path id="gnxfc" d="M681 3260.5a25.5 25.5 0 1 1-51 0 25.5 25.5 0 0 1 51 0zm-9.83-6.02c-.17-2.12-1.44-4.8-4.04-4.89-7.26-.49-15.86-.62-23.25 0-2.3.25-3.87 3.05-4.04 5.17-.37 4.46-.37 7 0 11.45.17 2.12 1.7 4.93 4.04 5.22 7.47.5 16.03.56 23.25 0 2.25-.39 3.87-3.1 4.04-5.22.35-4.46.35-7.27 0-11.73zm-18.86-.35l9.57 6.37-9.57 6.38z"/></defs><g><g opacity=".3" transform="translate(-596 -3201)"><use xlink:href="#gnxfa"/></g><g transform="translate(-596 -3201)"><use fill="#fff" xlink:href="#gnxfb"/></g><g transform="translate(-596 -3201)"><use fill="#3a66bc" xlink:href="#gnxfc"/></g></g></svg>
                            <span>Смотреть
                                видео о компании</span>
                        </a>

                    </div>
                </div>
                <div class="col-1-2 col-1-xs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                    <div class="block-text-basic-02">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="31" height="23" viewBox="0 0 31 23"><defs><path id="jtxoa" d="M1085.98 3069.04c-5.34 1.98-8.3 3.97-8.3 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2zm-16.61 0c-5.35 1.98-8.31 3.97-8.31 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2z"/></defs><g><g transform="translate(-1055 -3068)"><use fill="#ff8227" xlink:href="#jtxoa"/></g></g></svg>
                        <div class="block-text">
                            Создаем резиновую плитку высочайшего качества
                            на европейском оборудовании. Применяем сырье
                            с минимальным содержанием примесей.
                            <Br> <Br>
                            Товар обладает устойчивостью к ударным воздействиям, истиранию, точными геометрическими параметрами.
                            4 базовых цвета с возможностью создания
                            индивидуальных цветовых решений.
                        </div>
                        <div class="orange-line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="block-slider-holder">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                       <div class="fancybox-block-basic fancybox">
                                           <div class="block-basic_left">
                                               <a class="link-img" href="images/big-img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/big-img-fancybox.png" alt=" "/></a>
                                               <span class="icon zoom-icon"></span>
                                           </div>
                                           <div class="block-basic_right">
                                               <div class="basic_right_top">
                                                   <a class="link-img" href="images/img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox.png" alt=" "/></a>
                                                   <span class="icon zoom-icon"></span>
                                                   <a class="link-img" href="images/img-fancybox-1.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-1.png" alt=" "/></a>
                                                   <span class="icon zoom-icon"></span>
                                               </div>
                                               <div class="basic_right_bottom">
                                                   <a class="link-img" href="images/img-fancybox-2.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-2.png" alt=" "/></a>
                                                   <span class="icon zoom-icon"></span>
                                                   <a class="link-img" href="images/img-fancybox-3.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-3.png" alt=" "/></a>
                                                   <span class="icon zoom-icon"></span>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                            <div class="slide_block">
                                <div class="fancybox-block-basic fancybox">
                                    <div class="block-basic_left">
                                        <a class="link-img" href="images/big-img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/big-img-fancybox.png" alt=" "/></a>
                                        <span class="icon zoom-icon"></span>
                                    </div>
                                    <div class="block-basic_right">
                                        <div class="basic_right_top">
                                            <a class="link-img" href="images/img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                            <a class="link-img" href="images/img-fancybox-1.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-1.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                        </div>
                                        <div class="basic_right_bottom">
                                            <a class="link-img" href="images/img-fancybox-2.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-2.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                            <a class="link-img" href="images/img-fancybox-3.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-3.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="swiper-slide">
                            <div class="slide_block">
                                <div class="fancybox-block-basic fancybox">
                                    <div class="block-basic_left">
                                        <a class="link-img" href="images/big-img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/big-img-fancybox.png" alt=" "/></a>
                                        <span class="icon zoom-icon"></span>
                                    </div>
                                    <div class="block-basic_right">
                                        <div class="basic_right_top">
                                            <a class="link-img" href="images/img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                            <a class="link-img" href="images/img-fancybox-1.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-1.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                        </div>
                                        <div class="basic_right_bottom">
                                            <a class="link-img" href="images/img-fancybox-2.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-2.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                            <a class="link-img" href="images/img-fancybox-3.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-3.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="swiper-slide">
                            <div class="slide_block">
                                <div class="fancybox-block-basic fancybox">
                                    <div class="block-basic_left">
                                        <a class="link-img" href="images/big-img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/big-img-fancybox.png" alt=" "/></a>
                                        <span class="icon zoom-icon"></span>
                                    </div>
                                    <div class="block-basic_right">
                                        <div class="basic_right_top">
                                            <a class="link-img" href="images/img-fancybox.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                            <a class="link-img" href="images/img-fancybox-1.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-1.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                        </div>
                                        <div class="basic_right_bottom">
                                            <a class="link-img" href="images/img-fancybox-2.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-2.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                            <a class="link-img" href="images/img-fancybox-3.png" data-fancybox="fancybox[group]"><img src="images/img-fancybox-3.png" alt=" "/></a>
                                            <span class="icon zoom-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                         </div>
                        <div class="block-pagination"></div>
                        <div class="block-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                            <img src="images/next.png" alt=" "/>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                            <img src="images/prev.png" alt=" "/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sertificate-slider">
                <div class="col-1-5 col-1-xs">
                    <div class="orange-line"></div>
                    <h3>
                        Наши
                        награды
                    </h3>
                </div>
                <div class="col-4-5 col-1-xs">
                    <div class="sertificate-slider-holder">
                        <div class="sertificate-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-pagination"></div>
                        <div class="block-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                            <img src="images/next.png" alt=" "/>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                            <img src="images/prev.png" alt=" "/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vertical-line-bottom">
            <img src="images/line-vertical-average.png" alt=" "/>
        </div>
        <div class="vertical-line-bottom-mobile">
            <img src="images/line-vertical-small.png" alt=" "/>
        </div>
    </section>

    <!--===================================================== section 03 -->
    <section class="section-03" id="03">
        <div class="number-orange">
            03
        </div>
        <h1 clas="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
            Наш товар вне конкуренции
        </h1>
        <div class="line-block"></div>
        <div class="comparison_left-text-mobile">
            Наша плитка
        </div>
        <div class="comparison_right-text-mobile">
            плитка другой компании
        </div>

        <div class="block-slider-holder mobile-block">
            <div class="block-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide_block">
                            <div class="block-comparison">
                                <div class="comparison_left">

                                </div>
                                <div class="comparison_right">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide_block">
                            <div class="block-comparison">
                                <div class="comparison_left">

                                </div>
                                <div class="comparison_right">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-pagination"></div>
            <div class="block-next swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                <img src="images/next.png" alt=" "/>
            </div>
            <div class="block-prev swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                <img src="images/prev.png" alt=" "/>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-1-1">
                    <div class="block-slider-holder">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="block-comparison">
                                            <div class="comparison_left">
                                                <div class="comparison_left-text">
                                                    Наша плитка
                                                </div>
                                            </div>
                                            <div class="comparison_right">
                                                <div class="comparison_right-text">
                                                    плитка другой компании
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="block-comparison">
                                            <div class="comparison_left">
                                                <div class="comparison_left-text">
                                                    Наша плитка
                                                </div>
                                            </div>
                                            <div class="comparison_right">
                                                <div class="comparison_right-text">
                                                    плитка другой компании
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-pagination"></div>
                        <div class="block-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>
                            <img src="images/next.png" alt=" "/>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>
                            <img src="images/prev.png" alt=" "/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-3 col-1-xs">
                    <div class="advantages time-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                        <svg xmlns="http://www.w3.org/2000/svg"width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>
                        <div class="advantages_title">
                            Долговечность
                        </div>
                        <div class="advantages_text">
                            Даем официальную гарантию<br>
                            на 5 лет работы.
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="advantages button-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="700" data-offset="90%" data-easing="easeOutBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="61" viewBox="0 0 43 61"><defs><path id="t576a" d="M966 5651.68a6.5 6.5 0 0 1-6.45 6.53h-7l-5.99 20.24a2.15 2.15 0 0 1-4.12 0l-5.99-20.24h-7a6.5 6.5 0 0 1-6.45-6.53 6.5 6.5 0 0 1 6.45-6.54h2.48l3.58-21.78h-3.91a2.16 2.16 0 0 1-2.15-2.18c0-1.2.96-2.18 2.15-2.18h25.8c1.19 0 2.15.98 2.15 2.18 0 1.2-.96 2.18-2.15 2.18h-3.91l3.58 21.78h2.48a6.5 6.5 0 0 1 6.45 6.54zm-29.71-6.54h16.42l-3.58-21.78h-9.26zm11.77 13.07h-7.12l3.56 12.03zm13.64-6.53c0-1.2-.96-2.18-2.15-2.18h-30.1c-1.19 0-2.15.98-2.15 2.18 0 1.2.96 2.18 2.15 2.18h30.1c1.19 0 2.15-.98 2.15-2.18z"/></defs><g><g transform="translate(-923 -5619)"><use fill="#de9123" xlink:href="#t576a"/></g></g></svg>
                    <div class="advantages_title">
                        прочность
                    </div>
                    <div class="advantages_text">
                        Даже после 8 лет эксплуатации<br>
                        товар сохраняет отличный<br>
                        внешний вид
                    </div>
                     </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="advantages">

                    <div class="advantages_title ideal cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                        <svg xmlns="http://www.w3.org/2000/svg" width="63" height="60" viewBox="0 0 63 60"><defs><path id="nc0qa" d="M1346.62 5619H1370v23.4h-10.5v13.2h10.5v23.4h-23.38v-9h-16.24v9H1307v-23.4h10.5v-13.2H1307V5619h23.38v9h16.24zm19 4.39H1351V5638h14.6zm-54.23 14.61h14.6v-14.61h-14.6zm0 36.61h14.6V5660h-14.6zm54.22-14.61h-14.6v14.61h14.6zm-10.5-17.6h-8.5v-10.02h-16.23v10.01h-8.49v13.22h8.5v10h16.23v-10h8.49z"/></defs><g><g transform="translate(-1307 -5619)"><use fill="#de9123" xlink:href="#nc0qa"/></g></g></svg>
                        Идеальная геометрия
                    </div>
                    <div class="advantages_text cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                        Благодаря нарезке на профессиональном<br>
                        оборудовании обеспечено соблюдение<br>
                        всех размеров до ±1 мм.
                    </div>
                </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-1-3 col-1-xs">
                    <div class="advantages time-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                        <svg xmlns="http://www.w3.org/2000/svg"width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>
                        <div class="advantages_title">
                            Эластичность
                        </div>
                        <div class="advantages_text">
                            Даже при сильном сгибании<br>
                            плитка сохранит целостность
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="advantages button-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="700" data-offset="90%" data-easing="easeOutBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="61" viewBox="0 0 43 61"><defs><path id="t576a" d="M966 5651.68a6.5 6.5 0 0 1-6.45 6.53h-7l-5.99 20.24a2.15 2.15 0 0 1-4.12 0l-5.99-20.24h-7a6.5 6.5 0 0 1-6.45-6.53 6.5 6.5 0 0 1 6.45-6.54h2.48l3.58-21.78h-3.91a2.16 2.16 0 0 1-2.15-2.18c0-1.2.96-2.18 2.15-2.18h25.8c1.19 0 2.15.98 2.15 2.18 0 1.2-.96 2.18-2.15 2.18h-3.91l3.58 21.78h2.48a6.5 6.5 0 0 1 6.45 6.54zm-29.71-6.54h16.42l-3.58-21.78h-9.26zm11.77 13.07h-7.12l3.56 12.03zm13.64-6.53c0-1.2-.96-2.18-2.15-2.18h-30.1c-1.19 0-2.15.98-2.15 2.18 0 1.2.96 2.18 2.15 2.18h30.1c1.19 0 2.15-.98 2.15-2.18z"/></defs><g><g transform="translate(-923 -5619)"><use fill="#de9123" xlink:href="#t576a"/></g></g></svg>
                    <div class="advantages_title">
                        Ремонтопригодность
                    </div>
                    <div class="advantages_text">
                        При истирании или повреждении<br>
                        часть покрытия можно нарастить
                    </div>
                        </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="advantages cube-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="63" height="60" viewBox="0 0 63 60"><defs><path id="nc0qa" d="M1346.62 5619H1370v23.4h-10.5v13.2h10.5v23.4h-23.38v-9h-16.24v9H1307v-23.4h10.5v-13.2H1307V5619h23.38v9h16.24zm19 4.39H1351V5638h14.6zm-54.23 14.61h14.6v-14.61h-14.6zm0 36.61h14.6V5660h-14.6zm54.22-14.61h-14.6v14.61h14.6zm-10.5-17.6h-8.5v-10.02h-16.23v10.01h-8.49v13.22h8.5v10h16.23v-10h8.49z"/></defs><g><g transform="translate(-1307 -5619)"><use fill="#de9123" xlink:href="#nc0qa"/></g></g></svg>
                    <div class="advantages_title">
                        Устойчивость<br>
                        к перепадам температур
                    </div>
                    <div class="advantages_text">
                        Рабочий диапазон температур<br>
                        от –40°С до +60°С.

                    </div>
                </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-1-3 col-1-xs">
                    <div class="advantages time-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="700" data-offset="90%" data-easing="easeOutBack">
                        <svg xmlns="http://www.w3.org/2000/svg"width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>
                        <div class="advantages_title">
                            Водонепроницаемость
                        </div>
                        <div class="advantages_text">
                            Изделия не впитывают влагу,<br>
                            препятствуя ее просачиванию<br>
                            к конструкциям
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="advantages button-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="61" viewBox="0 0 43 61"><defs><path id="t576a" d="M966 5651.68a6.5 6.5 0 0 1-6.45 6.53h-7l-5.99 20.24a2.15 2.15 0 0 1-4.12 0l-5.99-20.24h-7a6.5 6.5 0 0 1-6.45-6.53 6.5 6.5 0 0 1 6.45-6.54h2.48l3.58-21.78h-3.91a2.16 2.16 0 0 1-2.15-2.18c0-1.2.96-2.18 2.15-2.18h25.8c1.19 0 2.15.98 2.15 2.18 0 1.2-.96 2.18-2.15 2.18h-3.91l3.58 21.78h2.48a6.5 6.5 0 0 1 6.45 6.54zm-29.71-6.54h16.42l-3.58-21.78h-9.26zm11.77 13.07h-7.12l3.56 12.03zm13.64-6.53c0-1.2-.96-2.18-2.15-2.18h-30.1c-1.19 0-2.15.98-2.15 2.18 0 1.2.96 2.18 2.15 2.18h30.1c1.19 0 2.15-.98 2.15-2.18z"/></defs><g><g transform="translate(-923 -5619)"><use fill="#de9123" xlink:href="#t576a"/></g></g></svg>
                    <div class="advantages_title">
                        Биологическая<br>
                        устойчивость
                    </div>
                    <div class="advantages_text">
                        Не подвержены воздействию<br>
                        плесени и грибка
                    </div>
                        </div>
                </div>
                <div class="col-1-3 col-1-xs">
                    <div class="advantages cube-icon cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="63" height="60" viewBox="0 0 63 60"><defs><path id="nc0qa" d="M1346.62 5619H1370v23.4h-10.5v13.2h10.5v23.4h-23.38v-9h-16.24v9H1307v-23.4h10.5v-13.2H1307V5619h23.38v9h16.24zm19 4.39H1351V5638h14.6zm-54.23 14.61h14.6v-14.61h-14.6zm0 36.61h14.6V5660h-14.6zm54.22-14.61h-14.6v14.61h14.6zm-10.5-17.6h-8.5v-10.02h-16.23v10.01h-8.49v13.22h8.5v10h16.23v-10h8.49z"/></defs><g><g transform="translate(-1307 -5619)"><use fill="#de9123" xlink:href="#nc0qa"/></g></g></svg>
                    <div class="advantages_title">
                        Не скользит
                    </div>
                    <div class="advantages_text">
                        Рельефная поверхность исключает<br>
                        травмы из-за падений на мокром<br>
                        основании.

                    </div>
                </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="sertificate-slider-holder">
                        <div class="sertificate-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-pagination"></div>
                        <div class="block-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                            <img src="images/next.png" alt=" "/>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                            <img src="images/prev.png" alt=" "/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section 04 -->
    <section class="section-04" id="04">
        <div class="container">
        <div class="vertical-line-mobile">
            <img src="images/line-vertical-small.png" alt=" "/>
        </div>
            <h1 class="h1-white cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                <div class="vertical-line">
                    <img src="images/line-vertical-average.png" alt=" "/>
                </div>
                кейсы
            </h1>
            <div class="number-orange">
                04
            </div>
            <h1 class="h1-black cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                Работаем с лидерами рынка

            </h1>
            <div class="row">
                <div class="col-1-1">
                    <div class="block-slider-holder">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="block-slider-leaders">
                                            <div class="leaders-top">
                                                <div class="slider-leaders_left">
                                                    <div class="leaders_left_title">
                                                        Заказчик: <span>“Форд Санрайз Индастрис”</span>
                                                    </div>
                                                    <img src="images/piles.png" alt=" "/>
                                                </div>
                                                <div class="slider-leaders_right">
                                                    <div class="leaders_right_title">
                                                        Задачи
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">01</div>
                                                        <span>/</span>
                                                        Даем официальную гарантию на 5 лет работы.
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">02</div>
                                                        <span>/</span>
                                                        Создать коммуникацию, выявить минусы
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">03</div>
                                                        <span>/</span>
                                                        <p>Даем официальную гарантию на 5 лет работы.
                                                            Участники докладывают</p>
                                                    </div>
                                                    <div class="leaders_right_title">
                                                        Решения
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">01</div>
                                                        <span>/</span>
                                                        Даем официальную гарантию на 5 лет работы.
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">02</div>
                                                        <span>/</span>
                                                        Создать коммуникацию, выявить минусы
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">03</div>
                                                        <span>/</span>
                                                        <p>Даем официальную гарантию на 5 лет работы.
                                                            Участники докладывают</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leaders-bottom">
                                                <div class="results">
                                                    Результаты работы
                                                </div>
                                                <div class="long-line-grey"></div>

                                            </div>
                                            <div class="leaders-block-footer">
                                                <div class="block-footer-1">
                                                    <div class="orange-title">
                                                        2 года
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Изделия не впитывают влагу,
                                                        препятствуя ее просачиванию
                                                        к конструкциям
                                                    </div>
                                                </div>
                                                <div class="block-footer-2">
                                                    <div class="orange-title">
                                                        3 тыс. плиток
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Не подвержен
                                                        воздействию
                                                        плесени и грибка
                                                    </div>
                                                </div>
                                                <div class="block-footer-3">
                                                    <div class="orange-title">
                                                        26 недель
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Рельефная поверхность исключает
                                                        травмы из-за падений на мокром
                                                        основании.
                                                    </div>
                                                </div>
                                                <div class="block-footer-4">
                                                    <div class="orange-title">
                                                        3 тыс. плиток
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Не подвержен
                                                        воздействию
                                                        плесени и грибка
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block-slider-leaders-mobile">
                                            <div class="leaders_left_title-mobile">
                                                Заказчик: <span>“Форд Санрайз Индастрис” </span>
                                            </div>
                                            <img src="images/piles-mobile.png" alt=" "/>
                                            <div class="leaders_right_title-mobile">
                                                Задачи
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">01</div>
                                                <span>/</span>
                                                Создать коммуникацию, выявить минусы
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">02</div>
                                                <span>/</span>
                                                Даем официальную гарантию на 5 лет работы.
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">03</div>
                                                <span>/</span>
                                                <p>
                                                    Даем официальную гарантию на 5 лет работы.
                                                    Участники докладывают
                                                </p>
                                            </div>
                                            <div class="leaders_right_title-mobile">
                                                Решения
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">01</div>
                                                <span>/</span>
                                                Даем официальную гарантию на 5 лет работы.
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">02</div>
                                                <span>/</span>
                                                Создать коммуникацию, выявить минусы
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">03</div>
                                                <span>/</span>
                                                <p>
                                                    Даем официальную гарантию на 5 лет работы.
                                                    Участники докладывают
                                                </p>
                                            </div>
                                            <div class="leaders_right_title-mobile">
                                                Результаты работы
                                            </div>
                                            <div class="orange-title-mobile">
                                                2 года
                                            </div>
                                            <div class="block-footer-text-mobile">
                                                Изделия не впитывают влагу, препятствуя ее
                                                просачиванию к конструкциям
                                            </div>
                                            <div class="orange-title-mobile">
                                                3 тыс. плиток
                                            </div>
                                            <div class="block-footer-text">
                                                Не подвержен
                                                воздействию
                                                плесени и грибка
                                            </div>
                                            <div class="orange-title-mobile">
                                                3 тыс. плиток
                                            </div>
                                            <div class="block-footer-text">
                                                Не подвержен
                                                воздействию
                                                плесени и грибка
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="block-slider-leaders">
                                            <div class="leaders-top">
                                                <div class="slider-leaders_left">
                                                    <div class="leaders_left_title">
                                                        Заказчик: <span>“Форд Санрайз Индастрис”</span>
                                                    </div>
                                                    <img src="images/piles.png" alt=" "/>
                                                </div>
                                                <div class="slider-leaders_right">
                                                    <div class="leaders_right_title">
                                                        Задачи
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">01</div>
                                                        <span>/</span>
                                                        Даем официальную гарантию на 5 лет работы.
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">02</div>
                                                        <span>/</span>
                                                        Создать коммуникацию, выявить минусы
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">03</div>
                                                        <span>/</span>
                                                        <p>Даем официальную гарантию на 5 лет работы.
                                                            Участники докладывают</p>
                                                    </div>
                                                    <div class="leaders_right_title">
                                                        Решения
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">01</div>
                                                        <span>/</span>
                                                        Даем официальную гарантию на 5 лет работы.
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">02</div>
                                                        <span>/</span>
                                                        Создать коммуникацию, выявить минусы
                                                    </div>
                                                    <div class="leaders_right_text">
                                                        <div class="number-orange">03</div>
                                                        <span>/</span>
                                                        <p>Даем официальную гарантию на 5 лет работы.
                                                            Участники докладывают</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leaders-bottom">
                                                <div class="results">
                                                    Результаты работы
                                                </div>
                                                <div class="long-line-grey"></div>

                                            </div>
                                            <div class="leaders-block-footer">
                                                <div class="block-footer-1">
                                                    <div class="orange-title">
                                                        2 года
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Изделия не впитывают влагу,
                                                        препятствуя ее просачиванию
                                                        к конструкциям
                                                    </div>
                                                </div>
                                                <div class="block-footer-2">
                                                    <div class="orange-title">
                                                        3 тыс. плиток
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Не подвержен
                                                        воздействию
                                                        плесени и грибка
                                                    </div>
                                                </div>
                                                <div class="block-footer-3">
                                                    <div class="orange-title">
                                                        26 недель
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Рельефная поверхность исключает
                                                        травмы из-за падений на мокром
                                                        основании.
                                                    </div>
                                                </div>
                                                <div class="block-footer-4">
                                                    <div class="orange-title">
                                                        3 тыс. плиток
                                                    </div>
                                                    <div class="block-footer-text">
                                                        Не подвержен
                                                        воздействию
                                                        плесени и грибка
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-slider-leaders-mobile">
                                            <div class="leaders_left_title-mobile">
                                                Заказчик: <span>“Форд Санрайз Индастрис” </span>
                                            </div>
                                            <img src="images/piles-mobile.png" alt=" "/>
                                            <div class="leaders_right_title-mobile">
                                                Задачи
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">01</div>
                                                <span>/</span>
                                                Создать коммуникацию, выявить минусы
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">02</div>
                                                <span>/</span>
                                                Даем официальную гарантию на 5 лет работы.
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">03</div>
                                                <span>/</span>
                                                <p>
                                                    Даем официальную гарантию на 5 лет работы.
                                                    Участники докладывают
                                                </p>
                                            </div>
                                            <div class="leaders_right_title-mobile">
                                                Решения
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">01</div>
                                                <span>/</span>
                                                Даем официальную гарантию на 5 лет работы.
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">02</div>
                                                <span>/</span>
                                                Создать коммуникацию, выявить минусы
                                            </div>
                                            <div class="leaders_right_text-mobile">
                                                <div class="number-orange">03</div>
                                                <span>/</span>
                                                <p>
                                                    Даем официальную гарантию на 5 лет работы.
                                                    Участники докладывают
                                                </p>
                                            </div>
                                            <div class="leaders_right_title-mobile">
                                                Результаты работы
                                            </div>
                                            <div class="orange-title-mobile">
                                                2 года
                                            </div>
                                            <div class="block-footer-text-mobile">
                                                Изделия не впитывают влагу, препятствуя ее
                                                просачиванию к конструкциям
                                            </div>
                                            <div class="orange-title-mobile">
                                                3 тыс. плиток
                                            </div>
                                            <div class="block-footer-text">
                                                Не подвержен
                                                воздействию
                                                плесени и грибка
                                            </div>
                                            <div class="orange-title-mobile">
                                                3 тыс. плиток
                                            </div>
                                            <div class="block-footer-text">
                                                Не подвержен
                                                воздействию
                                                плесени и грибка
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="block-pagination"></div>
                <div class="block-next swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                    <img src="images/next.png" alt=" "/>
                </div>
                <div class="block-prev swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                    <img src="images/prev.png" alt=" "/>
                </div>
                    </div>
                </div>
            </div>

            <div class="row desktop-block">
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">
                            Посмотреть кейс
                        </a>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image_1"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="900" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image_2"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="200" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image_3"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
            </div>
            <div class="row desktop-block">
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image_2"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image_5"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="mini-block-products cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                        <div class="bg-keis_block_image_6"></div>
                        <div class="mini-block_title">
                            Заголовок
                        </div>
                        <div class="mini-block_text">
                            Даем официальную
                            гарантию на 5 лет работы.
                            Участники докладывают
                        </div>
                        <a class="mini-block_link" href="#">Посмотреть кейс</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-desktop-mobile">
        <div class="container">
            <div class="row desktop-mobile">
                <div class="col-1-1">
                    <div class="block-slider-holder">
                        <div class="block-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="mini-block-products">
                                            <div class="bg-keis_block_image"></div>
                                            <div class="mini-block_title">
                                                Заголовок
                                            </div>
                                            <div class="mini-block_text">
                                                Даем официальную
                                                гарантию на 5 лет работы.
                                                Участники докладывают
                                            </div>
                                            <a class="mini-block_link" href="#">Посмотреть кейс</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="mini-block-products">
                                            <div class="bg-keis_block_image_1"></div>
                                            <div class="mini-block_title">
                                                Заголовок
                                            </div>
                                            <div class="mini-block_text">
                                                Даем официальную
                                                гарантию на 5 лет работы.
                                                Участники докладывают
                                            </div>
                                            <a class="mini-block_link" href="#">Посмотреть кейс</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 05 -->
    <section class="section-05" id="05">
        <div class="container">
            <div class="vertical-line">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <div class="number-orange">
                05
            </div>
            <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                Гарантия лучшей цены или
                <span>сделаем скидку!</span>
            </h1>
            <div class="row">
                <div class="col-1-2 col-1-xs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                    <svg xmlns="http://www.w3.org/2000/svg" class="quotes-orange" width="31" height="23" viewBox="0 0 31 23"><defs><path id="jtxoa" d="M1085.98 3069.04c-5.34 1.98-8.3 3.97-8.3 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2zm-16.61 0c-5.35 1.98-8.31 3.97-8.31 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2z"/></defs><g><g transform="translate(-1055 -3068)"><use fill="#ff8227" xlink:href="#jtxoa"/></g></g></svg>
                    <div class="blue-line"></div>
                    <div class="block-left-text">
                        Наш ежемесячный мониторинг рынка<br>
                        ни разу не показал конкурентов с таким же
                        качеством товара по меньшей стоимости.
                    </div>
                    <div class="blue-line-long"></div>

                    <div class="list-block">
                        <ul>
                            <li>
                                Если вы нашли подобное предложение,<br>
                                это должно вас насторожить.
                            </li>
                            <li>
                                Прикрепите нашему специалисту
                                заинтересовавший прайс для анализа.
                                Покажем подводные камни предложения
                                или сделаем  свою цену более интересной
                                для Вас.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-2 col-1-xs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="700" data-offset="90%" data-easing="easeOutBack">
                    <section class="section-form form-send" id="form-send">
                        <div class="container align-center">
                            <form action="send.php" method="post" class="send-form" autocomplete="off">

                                <input type="tel" name="client_phone" class="client-phone" placeholder="Укажите ваш телефон">
                                <input type="email" name="client_mail" class="client-mail" placeholder="Загрузить прайс">

                                <input type="hidden" name="send_type" class="send-type" value="2">
                                <input type="hidden" name="send_extra" class="send-extra" value="1">

                                <div class="btn-holder">
                                    <button type="submit" class="btn">Оставить заявку</button>
                                    <div class="g-recaptcha" id="g-recaptcha"></div>
                                </div>

                                <!--                 Agreement -->
<!--                                <div class="form-agree align-left">-->
<!--                                    <label class="checkbox-label form-agree-check checked">-->
<!--                                        <input type="checkbox" checked>-->
<!--                                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
<!--                                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
<!--                                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
<!--                                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
<!--                                        в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
<!--                                    </label>-->
<!--                                </div>-->
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 06 -->
    <section class="section-06" id="06">
        <div class="container">
            <div class="vertical-line-mobile">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <h1 class="h1-white cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                <div class="vertical-line">
                    <img src="images/line-vertical-average.png" alt=" "/>
                </div>
                Доставка
            </h1>
            <div class="number-orange">
                06
            </div>
            <div class="h1-black cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                Работаем с заказчиками
                со всей России
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="delivery-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                        <svg xmlns="http://www.w3.org/2000/svg" class="geo-icon" width="120" height="154" viewBox="0 0 120 154"><defs><path id="lbh1a" d="M479.77 10169c-42.4 0-76.77-34.48-76.77-77s34.37-77 76.77-77"/><path id="lbh1b" d="M478 10045.98c24.85 0 45 20.2 45 45.13a45.07 45.07 0 0 1-45 45.14c-24.85 0-45-20.2-45-45.14a45.07 45.07 0 0 1 45-45.13z"/><path id="lbh1c" d="M493.33 10086.69c0 4.97-2.79 9.71-5.37 13.8a58.23 58.23 0 0 1-8.51 10.5c-.83.81-2.13.81-2.93 0a63.29 63.29 0 0 1-9.5-12.42c-2.17-3.62-4.38-7.55-4.38-11.88 0-8.32 6.86-15.06 15.33-15.06 8.47 0 15.33 6.77 15.36 15.06zm-6.06-.4a9.2 9.2 0 0 0-9.3-9.14c-5.13 0-9.3 4.1-9.3 9.13a9.22 9.22 0 0 0 9.3 9.14 9.2 9.2 0 0 0 9.3-9.14z"/><clipPath id="lbh1d"><use fill="#fff" xlink:href="#lbh1a"/></clipPath></defs><g><g transform="translate(-403 -10015)"><use fill="#ff8227" xlink:href="#lbh1b"/></g><g transform="translate(-403 -10015)"><use fill="#fff" xlink:href="#lbh1c"/></g><g transform="translate(-403 -10015)"><use fill="#fff" fill-opacity="0" stroke="#527fd9" stroke-miterlimit="50" stroke-width="24" clip-path="url(&quot;#lbh1d&quot;)" xlink:href="#lbh1a"/></g></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="geo-icon-mobile" width="85" height="109" viewBox="0 0 85 109"><defs><path id="kat9a" d="M1212.38 2676a54.44 54.44 0 0 1-54.38-54.5c0-30.1 24.35-54.5 54.38-54.5"/><path id="kat9b" d="M1211.13 2588.93c17.6 0 31.87 14.3 31.87 31.94a31.91 31.91 0 0 1-31.87 31.95 31.91 31.91 0 0 1-31.88-31.95 31.91 31.91 0 0 1 31.88-31.94z"/><path id="kat9c" d="M1221.98 2617.74c0 3.52-1.97 6.88-3.8 9.77a41.23 41.23 0 0 1-6.03 7.43c-.58.58-1.51.58-2.07 0a44.79 44.79 0 0 1-6.73-8.8c-1.54-2.55-3.1-5.33-3.1-8.4 0-5.9 4.85-10.66 10.85-10.66s10.86 4.8 10.88 10.66zm-4.29-.29c0-3.59-2.95-6.46-6.59-6.46a6.53 6.53 0 0 0-6.58 6.46 6.53 6.53 0 0 0 6.58 6.47 6.52 6.52 0 0 0 6.59-6.47z"/><clipPath id="kat9d"><use fill="#fff" xlink:href="#kat9a"/></clipPath></defs><g><g transform="translate(-1158 -2567)"><use fill="#ff8314" xlink:href="#kat9b"/></g><g transform="translate(-1158 -2567)"><use fill="#fff" xlink:href="#kat9c"/></g><g transform="translate(-1158 -2567)"><use fill="#fff" fill-opacity="0" stroke="#3080dd" stroke-miterlimit="50" stroke-width="8" clip-path="url(&quot;#kat9d&quot;)" xlink:href="#kat9a"/></g></g></svg>
                        <div class="delivery-title">
                            Производим бесплатную доставку на объекты в Москве
                            и СПБ при заказе от 1 000 м2 плитки.
                        </div>
                        <div class="delivery-text">
                            В остальных случаях транспортировка проводится проверенными компаниями <span>по всей РФ по их тарифам</span>. Гарантируем точное соблюдение сроков поставки, правильность объема товара и исключение повреждения изделий в пути
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 07 -->
    <section class="section-07" id="07">
        <div class="container">
            <div class="vertical-line-mobile">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <h1 class="h1-white cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                <div class="vertical-line">
                    <img src="images/line-vertical-average.png" alt=" "/>
                </div>
                гарантии
            </h1>
            <div class="number-orange">
                07
            </div>
            <div class="h1-black cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                100% соблюдение сроков и уровня качества —
                все указано в договоре
            </div>
            <div class="block-line"></div>
            <div class="block-text cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                Заключение договора — естественное начало плодотворного сотрудничества.<Br>
                В официальном документе прописаны пункты относительно:
            </div>
            <div class="row desktop-block-mobile">
                <div class="col-1-2 col-1-xxs">
                        <div class="clock-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="98" height="99" viewBox="0 0 98 99"><defs><path id="kneoa" d="M1244.61 3537.87a3.95 3.95 0 0 1-2.86 4.79c-.96.24-1.93.45-2.9.64a3.9 3.9 0 0 1-4.58-3.17 3.96 3.96 0 0 1 3.15-4.6c.81-.16 1.63-.34 2.44-.54 2.1-.53 4.23.76 4.75 2.88zm23.4-58.22a3.96 3.96 0 0 1 2.19-5.14c2.01-.8 4.3.18 5.1 2.2.37.93.71 1.88 1.02 2.82a3.96 3.96 0 0 1-2.5 5 3.9 3.9 0 0 1-4.95-2.52c-.26-.79-.55-1.58-.86-2.36zm-9.97 50.81c1.2 1.83.7 4.28-1.1 5.48-.83.55-1.68 1.08-2.54 1.58a3.9 3.9 0 0 1-5.36-1.45 3.97 3.97 0 0 1 1.44-5.4c.72-.42 1.43-.86 2.13-1.32a3.9 3.9 0 0 1 5.43 1.11zm20.74-34.4a3.93 3.93 0 0 1-6.17 3.14 3.95 3.95 0 0 1-1.67-3.32c.02-.83.01-1.68-.02-2.51a3.94 3.94 0 0 1 3.76-4.1 3.93 3.93 0 0 1 4.08 3.78c.04 1 .05 2 .02 3zm-9.77 28.42c-.6.8-1.22 1.6-1.86 2.35a3.9 3.9 0 0 1-5.53.45 3.98 3.98 0 0 1-.44-5.57c.53-.64 1.06-1.3 1.56-1.97a3.9 3.9 0 0 1 5.5-.79 3.97 3.97 0 0 1 .77 5.53zm7.56-14.86c-.3.94-.63 1.9-.98 2.83a3.91 3.91 0 0 1-5.93 1.82 3.97 3.97 0 0 1-1.4-4.64c.3-.78.57-1.58.82-2.38a3.92 3.92 0 1 1 7.49 2.37zm-50.66 30.53a3.93 3.93 0 0 1-4.56 3.19 48.2 48.2 0 0 1-19.45-8.2 49.66 49.66 0 0 1-6.25-5.26l-.02-.02-.05-.05a48.9 48.9 0 0 1-14.07-29.44c-.01-.07-.03-.13-.03-.2-.1-.98-.19-1.98-.23-2.98v-.1a48.98 48.98 0 0 1 7.73-28.74l.11-.19a48.37 48.37 0 0 1 1.7-2.46c.05-.07.1-.14.17-.2a48.37 48.37 0 0 1 26.82-18.12l.14-.04h.03a48.16 48.16 0 0 1 39.22 6.8l3.07-4.47c.85-1.24 1.88-1.07 2.28.39l3.57 12.97a2.2 2.2 0 0 1-1.98 2.9l-13.32 1.2c-1.49.13-2.01-.77-1.16-2.01l3.07-4.47a40.76 40.76 0 0 0-45.97.38l-.14.1a40.88 40.88 0 0 0-10.06 10.08c-13 18.59-8.57 44.37 9.89 57.47 1.27.9 2.57 1.71 3.9 2.45h.01c.73.4 1.48.79 2.23 1.15l.12.06c3.19 1.5 6.55 2.59 10.06 3.22a3.95 3.95 0 0 1 3.17 4.59zm4.85-73.92v27.96l25.5 13.28a3.2 3.2 0 0 1-1.47 6.03c-.49 0-.99-.11-1.45-.35l-28.93-15.07v-31.85c0-1.77 1.43-3.2 3.18-3.2a3.19 3.19 0 0 1 3.17 3.2z"/></defs><g><g transform="translate(-1181 -3445)"><use fill="#f59203" xlink:href="#kneoa"/></g></g></svg>
                            <div class="time-block-text">
                                Сроков поставки
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 col-1-xxs">
                        <div class="clock-block margin-left">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="98" height="99" viewBox="0 0 98 99"><defs><path id="kneoa" d="M1244.61 3537.87a3.95 3.95 0 0 1-2.86 4.79c-.96.24-1.93.45-2.9.64a3.9 3.9 0 0 1-4.58-3.17 3.96 3.96 0 0 1 3.15-4.6c.81-.16 1.63-.34 2.44-.54 2.1-.53 4.23.76 4.75 2.88zm23.4-58.22a3.96 3.96 0 0 1 2.19-5.14c2.01-.8 4.3.18 5.1 2.2.37.93.71 1.88 1.02 2.82a3.96 3.96 0 0 1-2.5 5 3.9 3.9 0 0 1-4.95-2.52c-.26-.79-.55-1.58-.86-2.36zm-9.97 50.81c1.2 1.83.7 4.28-1.1 5.48-.83.55-1.68 1.08-2.54 1.58a3.9 3.9 0 0 1-5.36-1.45 3.97 3.97 0 0 1 1.44-5.4c.72-.42 1.43-.86 2.13-1.32a3.9 3.9 0 0 1 5.43 1.11zm20.74-34.4a3.93 3.93 0 0 1-6.17 3.14 3.95 3.95 0 0 1-1.67-3.32c.02-.83.01-1.68-.02-2.51a3.94 3.94 0 0 1 3.76-4.1 3.93 3.93 0 0 1 4.08 3.78c.04 1 .05 2 .02 3zm-9.77 28.42c-.6.8-1.22 1.6-1.86 2.35a3.9 3.9 0 0 1-5.53.45 3.98 3.98 0 0 1-.44-5.57c.53-.64 1.06-1.3 1.56-1.97a3.9 3.9 0 0 1 5.5-.79 3.97 3.97 0 0 1 .77 5.53zm7.56-14.86c-.3.94-.63 1.9-.98 2.83a3.91 3.91 0 0 1-5.93 1.82 3.97 3.97 0 0 1-1.4-4.64c.3-.78.57-1.58.82-2.38a3.92 3.92 0 1 1 7.49 2.37zm-50.66 30.53a3.93 3.93 0 0 1-4.56 3.19 48.2 48.2 0 0 1-19.45-8.2 49.66 49.66 0 0 1-6.25-5.26l-.02-.02-.05-.05a48.9 48.9 0 0 1-14.07-29.44c-.01-.07-.03-.13-.03-.2-.1-.98-.19-1.98-.23-2.98v-.1a48.98 48.98 0 0 1 7.73-28.74l.11-.19a48.37 48.37 0 0 1 1.7-2.46c.05-.07.1-.14.17-.2a48.37 48.37 0 0 1 26.82-18.12l.14-.04h.03a48.16 48.16 0 0 1 39.22 6.8l3.07-4.47c.85-1.24 1.88-1.07 2.28.39l3.57 12.97a2.2 2.2 0 0 1-1.98 2.9l-13.32 1.2c-1.49.13-2.01-.77-1.16-2.01l3.07-4.47a40.76 40.76 0 0 0-45.97.38l-.14.1a40.88 40.88 0 0 0-10.06 10.08c-13 18.59-8.57 44.37 9.89 57.47 1.27.9 2.57 1.71 3.9 2.45h.01c.73.4 1.48.79 2.23 1.15l.12.06c3.19 1.5 6.55 2.59 10.06 3.22a3.95 3.95 0 0 1 3.17 4.59zm4.85-73.92v27.96l25.5 13.28a3.2 3.2 0 0 1-1.47 6.03c-.49 0-.99-.11-1.45-.35l-28.93-15.07v-31.85c0-1.77 1.43-3.2 3.18-3.2a3.19 3.19 0 0 1 3.17 3.2z"/></defs><g><g transform="translate(-1181 -3445)"><use fill="#f59203" xlink:href="#kneoa"/></g></g></svg>
                            <div class="time-block-text">
                                гарантий
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row desktop-block-mobile">
                <div class="col-1-2 col-1-xxs">
                    <div class="clock-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="98" height="99" viewBox="0 0 98 99"><defs><path id="kneoa" d="M1244.61 3537.87a3.95 3.95 0 0 1-2.86 4.79c-.96.24-1.93.45-2.9.64a3.9 3.9 0 0 1-4.58-3.17 3.96 3.96 0 0 1 3.15-4.6c.81-.16 1.63-.34 2.44-.54 2.1-.53 4.23.76 4.75 2.88zm23.4-58.22a3.96 3.96 0 0 1 2.19-5.14c2.01-.8 4.3.18 5.1 2.2.37.93.71 1.88 1.02 2.82a3.96 3.96 0 0 1-2.5 5 3.9 3.9 0 0 1-4.95-2.52c-.26-.79-.55-1.58-.86-2.36zm-9.97 50.81c1.2 1.83.7 4.28-1.1 5.48-.83.55-1.68 1.08-2.54 1.58a3.9 3.9 0 0 1-5.36-1.45 3.97 3.97 0 0 1 1.44-5.4c.72-.42 1.43-.86 2.13-1.32a3.9 3.9 0 0 1 5.43 1.11zm20.74-34.4a3.93 3.93 0 0 1-6.17 3.14 3.95 3.95 0 0 1-1.67-3.32c.02-.83.01-1.68-.02-2.51a3.94 3.94 0 0 1 3.76-4.1 3.93 3.93 0 0 1 4.08 3.78c.04 1 .05 2 .02 3zm-9.77 28.42c-.6.8-1.22 1.6-1.86 2.35a3.9 3.9 0 0 1-5.53.45 3.98 3.98 0 0 1-.44-5.57c.53-.64 1.06-1.3 1.56-1.97a3.9 3.9 0 0 1 5.5-.79 3.97 3.97 0 0 1 .77 5.53zm7.56-14.86c-.3.94-.63 1.9-.98 2.83a3.91 3.91 0 0 1-5.93 1.82 3.97 3.97 0 0 1-1.4-4.64c.3-.78.57-1.58.82-2.38a3.92 3.92 0 1 1 7.49 2.37zm-50.66 30.53a3.93 3.93 0 0 1-4.56 3.19 48.2 48.2 0 0 1-19.45-8.2 49.66 49.66 0 0 1-6.25-5.26l-.02-.02-.05-.05a48.9 48.9 0 0 1-14.07-29.44c-.01-.07-.03-.13-.03-.2-.1-.98-.19-1.98-.23-2.98v-.1a48.98 48.98 0 0 1 7.73-28.74l.11-.19a48.37 48.37 0 0 1 1.7-2.46c.05-.07.1-.14.17-.2a48.37 48.37 0 0 1 26.82-18.12l.14-.04h.03a48.16 48.16 0 0 1 39.22 6.8l3.07-4.47c.85-1.24 1.88-1.07 2.28.39l3.57 12.97a2.2 2.2 0 0 1-1.98 2.9l-13.32 1.2c-1.49.13-2.01-.77-1.16-2.01l3.07-4.47a40.76 40.76 0 0 0-45.97.38l-.14.1a40.88 40.88 0 0 0-10.06 10.08c-13 18.59-8.57 44.37 9.89 57.47 1.27.9 2.57 1.71 3.9 2.45h.01c.73.4 1.48.79 2.23 1.15l.12.06c3.19 1.5 6.55 2.59 10.06 3.22a3.95 3.95 0 0 1 3.17 4.59zm4.85-73.92v27.96l25.5 13.28a3.2 3.2 0 0 1-1.47 6.03c-.49 0-.99-.11-1.45-.35l-28.93-15.07v-31.85c0-1.77 1.43-3.2 3.18-3.2a3.19 3.19 0 0 1 3.17 3.2z"/></defs><g><g transform="translate(-1181 -3445)"><use fill="#f59203" xlink:href="#kneoa"/></g></g></svg>
                        <div class="time-block-text">
                            характеристик
                            продукции
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-1-xxs">
                    <div class="clock-block margin-left">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="98" height="99" viewBox="0 0 98 99"><defs><path id="kneoa" d="M1244.61 3537.87a3.95 3.95 0 0 1-2.86 4.79c-.96.24-1.93.45-2.9.64a3.9 3.9 0 0 1-4.58-3.17 3.96 3.96 0 0 1 3.15-4.6c.81-.16 1.63-.34 2.44-.54 2.1-.53 4.23.76 4.75 2.88zm23.4-58.22a3.96 3.96 0 0 1 2.19-5.14c2.01-.8 4.3.18 5.1 2.2.37.93.71 1.88 1.02 2.82a3.96 3.96 0 0 1-2.5 5 3.9 3.9 0 0 1-4.95-2.52c-.26-.79-.55-1.58-.86-2.36zm-9.97 50.81c1.2 1.83.7 4.28-1.1 5.48-.83.55-1.68 1.08-2.54 1.58a3.9 3.9 0 0 1-5.36-1.45 3.97 3.97 0 0 1 1.44-5.4c.72-.42 1.43-.86 2.13-1.32a3.9 3.9 0 0 1 5.43 1.11zm20.74-34.4a3.93 3.93 0 0 1-6.17 3.14 3.95 3.95 0 0 1-1.67-3.32c.02-.83.01-1.68-.02-2.51a3.94 3.94 0 0 1 3.76-4.1 3.93 3.93 0 0 1 4.08 3.78c.04 1 .05 2 .02 3zm-9.77 28.42c-.6.8-1.22 1.6-1.86 2.35a3.9 3.9 0 0 1-5.53.45 3.98 3.98 0 0 1-.44-5.57c.53-.64 1.06-1.3 1.56-1.97a3.9 3.9 0 0 1 5.5-.79 3.97 3.97 0 0 1 .77 5.53zm7.56-14.86c-.3.94-.63 1.9-.98 2.83a3.91 3.91 0 0 1-5.93 1.82 3.97 3.97 0 0 1-1.4-4.64c.3-.78.57-1.58.82-2.38a3.92 3.92 0 1 1 7.49 2.37zm-50.66 30.53a3.93 3.93 0 0 1-4.56 3.19 48.2 48.2 0 0 1-19.45-8.2 49.66 49.66 0 0 1-6.25-5.26l-.02-.02-.05-.05a48.9 48.9 0 0 1-14.07-29.44c-.01-.07-.03-.13-.03-.2-.1-.98-.19-1.98-.23-2.98v-.1a48.98 48.98 0 0 1 7.73-28.74l.11-.19a48.37 48.37 0 0 1 1.7-2.46c.05-.07.1-.14.17-.2a48.37 48.37 0 0 1 26.82-18.12l.14-.04h.03a48.16 48.16 0 0 1 39.22 6.8l3.07-4.47c.85-1.24 1.88-1.07 2.28.39l3.57 12.97a2.2 2.2 0 0 1-1.98 2.9l-13.32 1.2c-1.49.13-2.01-.77-1.16-2.01l3.07-4.47a40.76 40.76 0 0 0-45.97.38l-.14.1a40.88 40.88 0 0 0-10.06 10.08c-13 18.59-8.57 44.37 9.89 57.47 1.27.9 2.57 1.71 3.9 2.45h.01c.73.4 1.48.79 2.23 1.15l.12.06c3.19 1.5 6.55 2.59 10.06 3.22a3.95 3.95 0 0 1 3.17 4.59zm4.85-73.92v27.96l25.5 13.28a3.2 3.2 0 0 1-1.47 6.03c-.49 0-.99-.11-1.45-.35l-28.93-15.07v-31.85c0-1.77 1.43-3.2 3.18-3.2a3.19 3.19 0 0 1 3.17 3.2z"/></defs><g><g transform="translate(-1181 -3445)"><use fill="#f59203" xlink:href="#kneoa"/></g></g></svg>
                        <div class="time-block-text">
                            ответственности
                            компании перед
                            заказчиком и т. д.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row desktop-block-mobile text-align">
                <div class="col-1-1">
                    <div class="clock-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="98" height="99" viewBox="0 0 98 99"><defs><path id="kneoa" d="M1244.61 3537.87a3.95 3.95 0 0 1-2.86 4.79c-.96.24-1.93.45-2.9.64a3.9 3.9 0 0 1-4.58-3.17 3.96 3.96 0 0 1 3.15-4.6c.81-.16 1.63-.34 2.44-.54 2.1-.53 4.23.76 4.75 2.88zm23.4-58.22a3.96 3.96 0 0 1 2.19-5.14c2.01-.8 4.3.18 5.1 2.2.37.93.71 1.88 1.02 2.82a3.96 3.96 0 0 1-2.5 5 3.9 3.9 0 0 1-4.95-2.52c-.26-.79-.55-1.58-.86-2.36zm-9.97 50.81c1.2 1.83.7 4.28-1.1 5.48-.83.55-1.68 1.08-2.54 1.58a3.9 3.9 0 0 1-5.36-1.45 3.97 3.97 0 0 1 1.44-5.4c.72-.42 1.43-.86 2.13-1.32a3.9 3.9 0 0 1 5.43 1.11zm20.74-34.4a3.93 3.93 0 0 1-6.17 3.14 3.95 3.95 0 0 1-1.67-3.32c.02-.83.01-1.68-.02-2.51a3.94 3.94 0 0 1 3.76-4.1 3.93 3.93 0 0 1 4.08 3.78c.04 1 .05 2 .02 3zm-9.77 28.42c-.6.8-1.22 1.6-1.86 2.35a3.9 3.9 0 0 1-5.53.45 3.98 3.98 0 0 1-.44-5.57c.53-.64 1.06-1.3 1.56-1.97a3.9 3.9 0 0 1 5.5-.79 3.97 3.97 0 0 1 .77 5.53zm7.56-14.86c-.3.94-.63 1.9-.98 2.83a3.91 3.91 0 0 1-5.93 1.82 3.97 3.97 0 0 1-1.4-4.64c.3-.78.57-1.58.82-2.38a3.92 3.92 0 1 1 7.49 2.37zm-50.66 30.53a3.93 3.93 0 0 1-4.56 3.19 48.2 48.2 0 0 1-19.45-8.2 49.66 49.66 0 0 1-6.25-5.26l-.02-.02-.05-.05a48.9 48.9 0 0 1-14.07-29.44c-.01-.07-.03-.13-.03-.2-.1-.98-.19-1.98-.23-2.98v-.1a48.98 48.98 0 0 1 7.73-28.74l.11-.19a48.37 48.37 0 0 1 1.7-2.46c.05-.07.1-.14.17-.2a48.37 48.37 0 0 1 26.82-18.12l.14-.04h.03a48.16 48.16 0 0 1 39.22 6.8l3.07-4.47c.85-1.24 1.88-1.07 2.28.39l3.57 12.97a2.2 2.2 0 0 1-1.98 2.9l-13.32 1.2c-1.49.13-2.01-.77-1.16-2.01l3.07-4.47a40.76 40.76 0 0 0-45.97.38l-.14.1a40.88 40.88 0 0 0-10.06 10.08c-13 18.59-8.57 44.37 9.89 57.47 1.27.9 2.57 1.71 3.9 2.45h.01c.73.4 1.48.79 2.23 1.15l.12.06c3.19 1.5 6.55 2.59 10.06 3.22a3.95 3.95 0 0 1 3.17 4.59zm4.85-73.92v27.96l25.5 13.28a3.2 3.2 0 0 1-1.47 6.03c-.49 0-.99-.11-1.45-.35l-28.93-15.07v-31.85c0-1.77 1.43-3.2 3.18-3.2a3.19 3.19 0 0 1 3.17 3.2z"/></defs><g><g transform="translate(-1181 -3445)"><use fill="#f59203" xlink:href="#kneoa"/></g></g></svg>
                        <div class="time-block-text">
                            суммы предоплаты
                            в размере 5–10% стоимости
                        </div>
                    </div>
                </div>
            </div>
            <div class="row desktop-block">
                <div class="col-1-1 cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                    <div class="clock-block-row">
                        <div class="clock-block-big">
                            <svg xmlns="http://www.w3.org/2000/svg" class="time-block" width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="time-hover" width="61" height="61" viewBox="0 0 61 61"><defs><path id="yyd3a" d="M782.63 11766.55a2.47 2.47 0 0 1-1.78 2.99c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.4a2.45 2.45 0 1 1 4.55-1.83c.23.58.45 1.17.64 1.76a2.47 2.47 0 0 1-1.56 3.12 2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.77a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.47 2.47 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.2-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.48.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.96l.07-.12a28.9 28.9 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.1 30.1 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.9-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79c-8.92-5.99-20.32-5.6-28.72.24l-.1.06a25.93 25.93 0 0 0 2.33 43.75h.02c.45.26.92.5 1.4.72a25.19 25.19 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.97 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-743 -11709)"><use fill="#fff" xlink:href="#yyd3a"/></g></g></svg>
                            <div class="time-block-text">
                                суммы предоплаты<Br>
                                в размере 5–10% стоимости
                            </div>
                        </div>
                        <div class="clock-block-big">
                            <svg xmlns="http://www.w3.org/2000/svg" class="time-block" width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="time-hover" width="61" height="61" viewBox="0 0 61 61"><defs><path id="yyd3a" d="M782.63 11766.55a2.47 2.47 0 0 1-1.78 2.99c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.4a2.45 2.45 0 1 1 4.55-1.83c.23.58.45 1.17.64 1.76a2.47 2.47 0 0 1-1.56 3.12 2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.77a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.47 2.47 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.2-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.48.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.96l.07-.12a28.9 28.9 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.1 30.1 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.9-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79c-8.92-5.99-20.32-5.6-28.72.24l-.1.06a25.93 25.93 0 0 0 2.33 43.75h.02c.45.26.92.5 1.4.72a25.19 25.19 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.97 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-743 -11709)"><use fill="#fff" xlink:href="#yyd3a"/></g></g></svg>
                            <div class="time-block-text">
                                ответственности компании<Br>
                                перед заказчиком и т. д.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row desktop-block">
                <div class="col-1-1 cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="clock-block-row">
                        <div class="clock-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="time-block" width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="time-hover" width="61" height="61" viewBox="0 0 61 61"><defs><path id="yyd3a" d="M782.63 11766.55a2.47 2.47 0 0 1-1.78 2.99c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.4a2.45 2.45 0 1 1 4.55-1.83c.23.58.45 1.17.64 1.76a2.47 2.47 0 0 1-1.56 3.12 2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.77a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.47 2.47 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.2-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.48.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.96l.07-.12a28.9 28.9 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.1 30.1 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.9-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79c-8.92-5.99-20.32-5.6-28.72.24l-.1.06a25.93 25.93 0 0 0 2.33 43.75h.02c.45.26.92.5 1.4.72a25.19 25.19 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.97 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-743 -11709)"><use fill="#fff" xlink:href="#yyd3a"/></g></g></svg>
                            <div class="time-block-text">
                                Сроков поставки
                            </div>
                        </div>
                        <div class="clock-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="time-block" width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="time-hover" width="61" height="61" viewBox="0 0 61 61"><defs><path id="yyd3a" d="M782.63 11766.55a2.47 2.47 0 0 1-1.78 2.99c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.4a2.45 2.45 0 1 1 4.55-1.83c.23.58.45 1.17.64 1.76a2.47 2.47 0 0 1-1.56 3.12 2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.77a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.47 2.47 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.2-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.48.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.96l.07-.12a28.9 28.9 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.1 30.1 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.9-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79c-8.92-5.99-20.32-5.6-28.72.24l-.1.06a25.93 25.93 0 0 0 2.33 43.75h.02c.45.26.92.5 1.4.72a25.19 25.19 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.97 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-743 -11709)"><use fill="#fff" xlink:href="#yyd3a"/></g></g></svg>
                            <div class="time-block-text">
                                гарантий
                            </div>
                        </div>
                        <div class="clock-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="time-block" width="61" height="61" viewBox="0 0 61 61"><defs><path id="rkvua" d="M555.63 5675.54a2.47 2.47 0 0 1-1.78 3c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.38a2.45 2.45 0 1 1 4.55-1.83c.23.57.45 1.16.64 1.75.43 1.3-.27 2.7-1.56 3.12a2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.76a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.48 2.48 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.19-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.49.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.97l.07-.11a26.73 26.73 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.12 30.12 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.91-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79a25.48 25.48 0 0 0-35.1 6.6 25.93 25.93 0 0 0 8.62 37.45c.46.26.93.5 1.4.72a25.18 25.18 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.98 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-516 -5618)"><use fill="#de9123" xlink:href="#rkvua"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="time-hover" width="61" height="61" viewBox="0 0 61 61"><defs><path id="yyd3a" d="M782.63 11766.55a2.47 2.47 0 0 1-1.78 2.99c-.6.15-1.21.28-1.82.4a2.46 2.46 0 0 1-2.86-1.98 2.47 2.47 0 0 1 1.97-2.88c.5-.1 1.02-.21 1.52-.34a2.45 2.45 0 0 1 2.97 1.8zm14.63-36.4a2.45 2.45 0 1 1 4.55-1.83c.23.58.45 1.17.64 1.76a2.47 2.47 0 0 1-1.56 3.12 2.44 2.44 0 0 1-3.1-1.56c-.16-.5-.34-1-.53-1.48zm-6.23 31.77a2.48 2.48 0 0 1-.7 3.42c-.51.34-1.04.67-1.58.98a2.44 2.44 0 0 1-3.35-.9 2.48 2.48 0 0 1 .9-3.38c.45-.26.9-.54 1.33-.82a2.44 2.44 0 0 1 3.4.7zm12.96-21.51a2.46 2.46 0 0 1-3.86 1.96 2.47 2.47 0 0 1-1.04-2.07c.01-.52 0-1.05-.02-1.57a2.46 2.46 0 0 1 2.36-2.57c1.35-.05 2.5 1.01 2.54 2.37.03.62.03 1.26.02 1.88zm-6.1 17.77c-.38.5-.77.99-1.17 1.46a2.44 2.44 0 0 1-3.46.28 2.48 2.48 0 0 1-.27-3.48c.33-.4.66-.81.97-1.23a2.44 2.44 0 0 1 3.43-.5c1.09.83 1.3 2.38.5 3.47zm4.71-9.3c-.18.6-.38 1.2-.6 1.77a2.45 2.45 0 0 1-3.71 1.14 2.48 2.48 0 0 1-.88-2.9c.19-.48.36-.98.52-1.48a2.45 2.45 0 1 1 4.67 1.48zm-31.66 19.09a2.45 2.45 0 0 1-2.84 2 30.13 30.13 0 0 1-16.07-8.42l-.01-.01-.03-.04a30.56 30.56 0 0 1-8.8-18.4l-.02-.11c-.06-.62-.11-1.25-.14-1.87v-.06a30.62 30.62 0 0 1 4.83-17.96l.07-.12a28.9 28.9 0 0 1 1.06-1.54l.1-.13a30.22 30.22 0 0 1 16.77-11.32l.1-.03a30.1 30.1 0 0 1 24.51 4.25l1.93-2.8c.53-.77 1.17-.66 1.42.25l2.24 8.11c.25.9-.3 1.72-1.24 1.8l-8.32.76c-.94.08-1.26-.48-.73-1.26l1.91-2.79c-8.92-5.99-20.32-5.6-28.72.24l-.1.06a25.93 25.93 0 0 0 2.33 43.75h.02c.45.26.92.5 1.4.72a25.19 25.19 0 0 0 6.36 2.05 2.47 2.47 0 0 1 1.97 2.87zm3.04-46.2v17.47l15.93 8.3a2 2 0 0 1-.91 3.77c-.31 0-.62-.07-.91-.22l-18.08-9.41v-19.91a2 2 0 0 1 1.98-2c1.1 0 1.99.9 1.99 2z"/></defs><g><g transform="translate(-743 -11709)"><use fill="#fff" xlink:href="#yyd3a"/></g></g></svg>
                            <div class="time-block-text">
                                характеристик<Br>
                                продукции
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="line-grey-quotes">
                        <div class="line-grey"></div>
                        <svg xmlns="http://www.w3.org/2000/svg"  width="31" height="23" viewBox="0 0 31 23"><defs><path id="jtxoa" d="M1085.98 3069.04c-5.34 1.98-8.3 3.97-8.3 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2zm-16.61 0c-5.35 1.98-8.31 3.97-8.31 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2z"/></defs><g><g transform="translate(-1055 -3068)"><use fill="#ff8227" xlink:href="#jtxoa"/></g></g></svg>
                        <div class="line-grey"></div>
                    </div>
                    <div class="mini-block-text">
                        По желанию клиента можем дополнить договор пунктами,<Br>
                        не противоречащими политике компании и законодательству.

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="sertificate-slider-holder">
                        <div class="sertificate-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-pagination"></div>
                        <div class="block-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                            <img src="images/next.png" alt=" "/>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                            <img src="images/prev.png" alt=" "/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 08 -->
    <section class="section-08" id="08">
        <div class="container">
            <div class="vertical-line">
                <img src="images/line-vertical.png" alt=" "/>
            </div>
            <div class="vertical-line-mobile">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <div class="number-orange">
                08
            </div>
            <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                На голову обгоняем другие компании:<Br>
                10 доказательств
            </h1>
            <div class="row">
                <div class="col-1-2 col-1-xs padding-left cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            01
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Запас на складе
                            </div>
                            <div class="evidence-text">
                                5000+ м2 плитки всегда есть<Br>
                                на складах в СПб и Москве
                            </div>
                            <div class="evidence-text-mobile">
                                5000+ м2 плитки всегда есть
                                на складах<Br> в СПб и Москве
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            02
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Опыт работы
                            </div>
                            <div class="evidence-text">
                                Работаем более 8 лет, являясь
                                основателями рынка резиновой
                                плитки в РФ
                            </div>
                            <div class="evidence-text-mobile">
                                Работаем более 8 лет, являясь
                                основателями<Br> рынка резиновой
                                плитки в РФ
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            03
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Низкие цены
                            </div>
                            <div class="evidence-text">
                                За счет собственного производства и<Br>
                                отсутствия посредников <Br>
                                предоставляем самые выгодные цены.
                            </div>
                            <div class="evidence-text-mobile">
                                За счет собственного производства и
                                отсутствия посредников <Br>
                                предоставляем самые выгодные цены.
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            04
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Только метод горячего<Br> прессования
                            </div>
                            <div class="evidence-text">
                                Применяем при производстве самую<br> выигрышную технологию.
                            </div>
                            <div class="evidence-text-mobile">
                                Применяем при производстве самую<br> выигрышную технологию.
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            05
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Добровольная <br> сертификация
                            </div>
                            <div class="evidence-text">
                                Провели сертификацию продукции для<Br>
                                убежденности клиентов в правильности их выбора.
                            </div>
                            <div class="evidence-text-mobile">
                                Провели сертификацию продукции для<Br>
                                убежденности клиентов в правильности их выбора.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-1-xs padding-right cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            06
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                               Лучшее сырье
                            </div>
                            <div class="evidence-text">
                                Применяем проверенную резиновую<Br>
                                крошку и французские связующие.
                            </div>
                            <div class="evidence-text-mobile">
                                Применяем проверенную резиновую<Br>
                                крошку и французские связующие.
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            07
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Высокие мощности
                            </div>
                            <div class="evidence-text">
                                Способны производить 80 000+ м<sup>2</sup> плитки в год
                            </div>
                            <div class="evidence-text-mobile">
                                Способны производить 80 000+ м<sup>2</sup> плитки в год
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block margin-top">
                        <div class="evidence-orange">
                            08
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                               Широкий спектр клиентов
                            </div>
                            <div class="evidence-text">
                                Работаем с частными и юридическими<Br>
                                лицами, государственными организациями.
                            </div>
                            <div class="evidence-text-mobile">
                                Работаем с частными и юридическими<Br>
                                лицами, государственными организациями.
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            09
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Собственная лаборатория
                            </div>
                            <div class="evidence-text">
                                Сами контролируем образцы материалов.

                            </div>
                            <div class="evidence-text-mobile">
                                Сами контролируем образцы материалов.
                            </div>
                        </div>
                    </div>
                    <div class="evidence-block">
                        <div class="evidence-orange">
                            10
                        </div>
                        <div class="evidence-text-block">
                            <div class="evidence-title">
                                Качество оценено самим В.В. Путиным
                            </div>
                            <div class="evidence-text">
                                Президент РФ и «Ночная хоккейная лига»<Br>
                                регулярно проводят матчи на катке<Br>
                                на Красной площади, где в раздевалке<Br>
                                уложена наша плитка.

                            </div>
                            <div class="evidence-text-mobile">
                                Президент РФ и «Ночная хоккейная лига»<Br>
                                регулярно проводят матчи на катке<Br>
                                на Красной площади, где в раздевалке<Br>
                                уложена наша плитка.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <a href="#" class="evidence-button si-phone_button open-phone-modal">
                        Оставить заявку
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 09 -->
    <section class="section-09" id="09">
        <div class="container">
            <div class="row">
                <div class="col-1-1">
                    <div class="section-09-block">
                        <div class="section-09_text">
                            <div class="number-orange">
                                09
                            </div>
                            <div class="white-text">
                                Посетить объект,
                                где уже уложена
                                наша плитка
                            </div>
                            <div class="white-line"></div>
                        </div>
                        <a class="section-09-button si-phone_button open-phone-modal" href="#">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-09-mobile" id="09-mobile">
        <div class="container">
            <div class="row">
                <div class="col-1-1">
                    <div class="section-09_text">
                        <div class="number-orange">
                            09
                        </div>
                        <div class="white-text">
                            Посетить объект,
                            где уже уложена
                            наша плитка
                        </div>
                        <a class="section-09-button si-phone_button open-phone-modal" href="#">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 10 -->
    <section class="section-10" id="10">
        <div class="container">
            <div class="vertical-line">
                <img src="images/line-vertical.png" alt=" "/>
            </div>
            <div class="vertical-line-mobile">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <div class="number-orange">
                10
            </div>
            <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                Устанавливаем планку —
                другие лишь следуют за нами
            </h1>
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <div class="about-block">
                        <div class="about-block-title">
                            о нас
                        </div>
                        <div class="about-block-text cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="23" viewBox="0 0 31 23"><defs><path id="jtxoa" d="M1085.98 3069.04c-5.34 1.98-8.3 3.97-8.3 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2zm-16.61 0c-5.35 1.98-8.31 3.97-8.31 7.13 0 1.05.11 1.98.35 2.34 3.56.58 6.17 2.92 6.17 6.9 0 3.03-2.73 5.6-5.81 5.6-3.8 0-6.77-2.57-6.77-7.83 0-8.3 6.17-12.74 14-15.2z"/></defs><g><g transform="translate(-1055 -3068)"><use fill="#ff8227" xlink:href="#jtxoa"/></g></g></svg>
                            Компания «Спорто Групп» стоит у истоков производства резиновой плитки. Именно мы 8 лет назад стали основателями этого рынка, и 63% всего товара выходит с наших станков. Наши материалы защищают полы и стены известных спортзалов, тиров, спортивных площадок, таких как ледовый каток на Красной площади
                            <br><Br>
                            <span>В штате трудится 20 человек, работающих на отличный результат. Благодаря профессионализму сотрудников наша плитка получила одобрение по всей РФ и стала победителем многих конкурсов, участницей международных выставок.</span>
                            <div class="orange-line"></div>
                        </div>
                    </div>

                    <div class="about-block-two">
                        <div class="target cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                            <div class="target-title">
                                Цель
                            </div>
                            <div class="grey-line"></div>
                            <div class="target-text">
                                Расширить рынок сбыта, охватив<Br>
                                не только российских потребителей,<Br>
                                но и заказчиков из СНГ.
                            </div>
                            <div class="target-text-mobile">
                                Расширить рынок сбыта, охватив
                                не только российских потребителей,
                                но и заказчиков из СНГ.
                            </div>
                        </div>
                        <div class="task cre-animate" data-animation="scale-up" data-speed="1600" data-delay="700" data-offset="90%" data-easing="easeOutBack">
                            <div class="target-title">
                                Задачи
                            </div>
                            <div class="grey-line"></div>
                            <div class="target-text">
                                Сделать продукт, изготовленный<Br>
                                по мировым стандартам качества,<Br> доступным для отечественного<Br> потребителя как по стоимости,<Br>
                                так и по срокам доставки.
                            </div>
                            <div class="target-text-mobile">
                                Сделать продукт, изготовленный<Br>
                                по мировым стандартам качества, доступным для отечественного потребителя как по стоимости,
                                так и по срокам доставки.
                            </div>
                        </div>
                        <div class="mission cre-animate" data-animation="scale-up" data-speed="1600" data-delay="900" data-offset="90%" data-easing="easeOutBack">
                            <div class="mission-title">
                                Миссия
                            </div>
                            <div class="grey-line"></div>
                            <div class="mission-text">
                                Повысить общий спортивный уровень<br> населения за счет обеспечения комфорта<br>
                                и ебезопасности во время занятий.
                            </div>
                            <div class="mission-text-mobile">
                                Повысить общий спортивный уровень населения за счет обеспечения комфорта
                                и ебезопасности во время занятий.
                            </div>
                        </div>
                    </div>

                    <div class="numbers-block">
                        <div class="numbers-block-title">
                            цифры
                        </div>
                        <div class="numbers-block-text">
                            <div class="numbers-mini-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                                <div class="grey-line"></div>
                                <div class="number-orange-title">
                                    73 000
                                </div>
                                <div class="number-text">
                                    квадратов плитки<Br>
                                    отгружено за 2017 год
                                </div>
                            </div>
                            <div class="numbers-mini-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="300" data-offset="90%" data-easing="easeOutBack">
                                <div class="grey-line-small"></div>
                                <div class="number-orange-title">
                                    30
                                </div>
                                <div class="number-text">
                                    постоянных<Br>
                                    клиентов
                                </div>
                            </div>
                            <div class="numbers-mini-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                                <div class="grey-line-small"></div>
                                <div class="number-orange-title">
                                    3
                                </div>
                                <div class="number-text">
                                    заказа в день<Br>
                                    стабильно
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="numbers-block-text-2">
                        <div class="numbers-mini-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="500" data-offset="90%" data-easing="easeOutBack">
                            <div class="grey-line-small"></div>
                            <div class="number-orange-title">
                                990 <span>руб./м2</span>
                            </div>
                            <div class="number-text">
                                самая низкая цена<Br>
                                по РФ
                            </div>
                            <div class="grey-line-small"></div>
                        </div>
                        <div class="numbers-mini-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="800" data-offset="90%" data-easing="easeOutBack">
                            <div class="grey-line-average"></div>
                            <div class="number-orange-title">
                                5
                            </div>
                            <div class="number-text">
                                международных<Br>
                                выставок посетили
                            </div>
                            <div class="grey-line-average"></div>
                        </div>
                        <div class="numbers-mini-block cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                            <div class="grey-line-small"></div>
                            <div class="number-orange-title">
                                10
                            </div>
                            <div class="number-text">
                                официальных<Br>
                                дилеров
                            </div>
                            <div class="grey-line-small"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mobile-block">
                <div class="numbers-block-title">
                    цифры
                </div>
                <div class="col-1-2 col-1-xs">
                    <div class="numbers-mini-block">
                        <div class="grey-line"></div>
                        <div class="number-orange-title">
                            73 000
                        </div>
                        <div class="number-text">
                            квадратов плитки<Br>
                            отгружено за 2017 год
                        </div>
                    </div>
                    <div class="numbers-mini-block">
                        <div class="grey-line"></div>
                        <div class="number-orange-title">
                            990 <span>руб./м2</span>
                        </div>
                        <div class="number-text">
                            самая низкая цена<Br>
                            по РФ
                        </div>
                    </div>
                    <div class="numbers-mini-block">
                        <div class="grey-line"></div>
                        <div class="number-orange-title">
                            3
                        </div>
                        <div class="number-text">
                            заказа в день<Br>
                            стабильно
                        </div>
                        <div class="grey-line-small small-block-mobile"></div>
                    </div>
                </div>
                <div class="col-1-2 col-1-xs">
                    <div class="numbers-mini-block margin-left">
                        <div class="grey-line"></div>
                        <div class="number-orange-title">
                            30
                        </div>
                        <div class="number-text">
                            постоянных<Br>
                            клиентов
                        </div>
                    </div>
                    <div class="numbers-mini-block margin-left">
                        <div class="grey-line"></div>
                        <div class="number-orange-title">
                            5
                        </div>
                        <div class="number-text">
                            международных<Br>
                            выставок посетили
                        </div>
                    </div>
                    <div class="numbers-mini-block margin-left">
                        <div class="grey-line"></div>
                        <div class="number-orange-title">
                            10
                        </div>
                        <div class="number-text">
                            официальных<Br>
                            дилеров
                        </div>
                        <div class="grey-line-small"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section 11 -->
    <section class="section-11" id="11">
        <div class="container">
            <div class="vertical-line">
                <img src="images/line-vertical.png" alt=" "/>
            </div>
            <div class="vertical-line-mobile">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <div class="number-orange">
                11
            </div>
            <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="400" data-offset="90%" data-easing="easeOutBack">
                Сотрудничество с нами
                оценивают наши заказчики
            </h1>
            </div>
</section>
    <section>
        <div class="block-player-big-mobile">
            <div class="block-player">

            </div>

            <div class="block-player margin-bottom">

            </div>
        </div>
    </section>
    <section class="section-11" id="11">
        <div class="container">
            <div class="row mobile-block">
                <div class="col-1-1">
                    <div class="block-player-big">
                        <a href="https://www.youtube.com/watch?v=ti3Ejrmkl_U" class="block-player show-video fancybox" data-rel="fancybox[video]" rel="fancybox[video]">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="118" height="118" viewBox="0 0 118 118"><defs><path id="gnxfa" d="M655 3201a59 59 0 1 1 0 117.99 59 59 0 0 1 0-117.99z"/><path id="gnxfb" d="M655.5 3219a40.5 40.5 0 1 1 0 81 40.5 40.5 0 0 1 0-81z"/><path id="gnxfc" d="M681 3260.5a25.5 25.5 0 1 1-51 0 25.5 25.5 0 0 1 51 0zm-9.83-6.02c-.17-2.12-1.44-4.8-4.04-4.89-7.26-.49-15.86-.62-23.25 0-2.3.25-3.87 3.05-4.04 5.17-.37 4.46-.37 7 0 11.45.17 2.12 1.7 4.93 4.04 5.22 7.47.5 16.03.56 23.25 0 2.25-.39 3.87-3.1 4.04-5.22.35-4.46.35-7.27 0-11.73zm-18.86-.35l9.57 6.37-9.57 6.38z"/></defs><g><g opacity=".3" transform="translate(-596 -3201)"><use xlink:href="#gnxfa"/></g><g transform="translate(-596 -3201)"><use fill="#fff" xlink:href="#gnxfb"/></g><g transform="translate(-596 -3201)"><use fill="#3a66bc" xlink:href="#gnxfc"/></g></g></svg>
                        </a>

                        <a href="https://www.youtube.com/watch?v=ti3Ejrmkl_U" class="block-player show-video fancybox" data-rel="fancybox[video]" rel="fancybox[video]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="118" height="118" viewBox="0 0 118 118"><defs><path id="gnxfa" d="M655 3201a59 59 0 1 1 0 117.99 59 59 0 0 1 0-117.99z"/><path id="gnxfb" d="M655.5 3219a40.5 40.5 0 1 1 0 81 40.5 40.5 0 0 1 0-81z"/><path id="gnxfc" d="M681 3260.5a25.5 25.5 0 1 1-51 0 25.5 25.5 0 0 1 51 0zm-9.83-6.02c-.17-2.12-1.44-4.8-4.04-4.89-7.26-.49-15.86-.62-23.25 0-2.3.25-3.87 3.05-4.04 5.17-.37 4.46-.37 7 0 11.45.17 2.12 1.7 4.93 4.04 5.22 7.47.5 16.03.56 23.25 0 2.25-.39 3.87-3.1 4.04-5.22.35-4.46.35-7.27 0-11.73zm-18.86-.35l9.57 6.37-9.57 6.38z"/></defs><g><g opacity=".3" transform="translate(-596 -3201)"><use xlink:href="#gnxfa"/></g><g transform="translate(-596 -3201)"><use fill="#fff" xlink:href="#gnxfb"/></g><g transform="translate(-596 -3201)"><use fill="#3a66bc" xlink:href="#gnxfc"/></g></g></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-4 col-1-2-xs col-1-xxs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="white-player">
                        <svg xmlns="http://www.w3.org/2000/svg" class="orange-play"  width="45" height="45" viewBox="0 0 45 45"><defs><path id="gsxha" d="M504 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-459 -17050)"><use fill="#ff8227" xlink:href="#gsxha"/></g></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="white-play" width="45" height="45" viewBox="0 0 45 45"><defs><path id="cr73a" d="M798 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-753 -17050)"><use fill="#fff" xlink:href="#cr73a"/></g></g></svg>
                        <a href="#" class="white-player-text">
                            Прослушать
                            отзыв
                        </a>
                    </div>
                </div>
                <div class="col-1-4 col-1-2-xs col-1-xxs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="white-player">
                        <svg xmlns="http://www.w3.org/2000/svg" class="orange-play"  width="45" height="45" viewBox="0 0 45 45"><defs><path id="gsxha" d="M504 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-459 -17050)"><use fill="#ff8227" xlink:href="#gsxha"/></g></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="white-play" width="45" height="45" viewBox="0 0 45 45"><defs><path id="cr73a" d="M798 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-753 -17050)"><use fill="#fff" xlink:href="#cr73a"/></g></g></svg>
                        <a href="#" class="white-player-text">
                            Прослушать
                            отзыв
                        </a>
                    </div>
                </div>
                <div class="col-1-4 col-1-2-xs col-1-xxs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="white-player">
                        <svg xmlns="http://www.w3.org/2000/svg" class="orange-play"  width="45" height="45" viewBox="0 0 45 45"><defs><path id="gsxha" d="M504 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-459 -17050)"><use fill="#ff8227" xlink:href="#gsxha"/></g></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="white-play" width="45" height="45" viewBox="0 0 45 45"><defs><path id="cr73a" d="M798 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-753 -17050)"><use fill="#fff" xlink:href="#cr73a"/></g></g></svg>
                        <a href="#" class="white-player-text">
                            Прослушать
                            отзыв
                        </a>
                    </div>
                </div>
                <div class="col-1-4 col-1-2-xs col-1-xxs cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                    <div class="white-player">
                        <svg xmlns="http://www.w3.org/2000/svg" class="orange-play"  width="45" height="45" viewBox="0 0 45 45"><defs><path id="gsxha" d="M504 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-459 -17050)"><use fill="#ff8227" xlink:href="#gsxha"/></g></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="white-play" width="45" height="45" viewBox="0 0 45 45"><defs><path id="cr73a" d="M798 17072.5a22.5 22.5 0 1 1-45 0 22.5 22.5 0 0 1 45 0zm-14.06 0c0-.49-.25-.94-.66-1.2l-11.25-7.02a1.4 1.4 0 1 0-2.15 1.2v14.05a1.4 1.4 0 0 0 2.15 1.2l11.25-7.04c.4-.26.66-.7.66-1.19z"/></defs><g><g transform="translate(-753 -17050)"><use fill="#fff" xlink:href="#cr73a"/></g></g></svg>
                        <a href="#" class="white-player-text">
                            Прослушать
                            отзыв
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1">
                    <div class="sertificate-slider-holder">
                        <div class="sertificate-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_block">
                                        <div class="rewards-img fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_3">
                                                <a href="images/sertificate_3.jpg" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_3.jpg" alt=" "/>
                                                </a>
                                            </div>
                                            <div class="certificate_2">
                                                <a href="images/sertificate_2.jpg"  data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate_2.jpg" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="rewards-img-mobile fancybox">
                                            <div class="certificate">
                                                <a href="images/sertificate-mobile.png" data-fancybox="fancybox[group]">
                                                    <img src="images/sertificate-mobile.png" alt=" "/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-pagination"></div>
                        <div class="block-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="x9ita" d="M541 4441a33 33 0 1 1 0 66 33 33 0 0 1 0-66z"/><path id="x9itc" d="M545.24 4467.28a1 1 0 0 0-1.37 0 .87.87 0 0 0 0 1.27l4.84 4.54h-17.75c-.54 0-.96.4-.96.9 0 .51.42.92.96.92h17.75l-4.84 4.53a.89.89 0 0 0 0 1.29 1 1 0 0 0 1.37 0l6.47-6.09a.85.85 0 0 0 0-1.27z"/><clipPath id="x9itb"><use fill="#fff" xlink:href="#x9ita"/></clipPath></defs><g><g transform="translate(-508 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#x9itb&quot;)" xlink:href="#x9ita"/></g><g transform="translate(-508 -4441)"><use fill="#ff8227" xlink:href="#x9itc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile" width="37" height="23" viewBox="0 0 37 23"><defs><path id="fpvaa" d="M632.63 2501.42a1.7 1.7 0 0 0-2.3 0 1.42 1.42 0 0 0 0 2.1l8.14 7.46H608.6c-.9 0-1.61.66-1.61 1.48 0 .83.71 1.5 1.6 1.5h29.87l-8.14 7.45c-.62.59-.62 1.54 0 2.12a1.7 1.7 0 0 0 2.3 0l10.89-10c.64-.58.64-1.53 0-2.1z"/></defs><g><g transform="translate(-607 -2501)"><use fill="#006ed7" xlink:href="#fpvaa"/></g></g></svg>
                            <img src="images/next.png" alt=" "/>
                        </div>
                        <div class="block-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="desktop-icon" width="66" height="66" viewBox="0 0 66 66"><defs><path id="kfspa" d="M461 4441a33 33 0 1 0 0 66 33 33 0 0 0 0-66z"/><path id="kfspc" d="M456.76 4467.28a1 1 0 0 1 1.37 0c.37.35.37.93 0 1.27l-4.84 4.54h17.75c.54 0 .96.4.96.9 0 .51-.42.92-.96.92H453.3l4.84 4.53c.37.36.37.94 0 1.29a1 1 0 0 1-1.37 0l-6.47-6.09a.85.85 0 0 1 0-1.27z"/><clipPath id="kfspb"><use fill="#fff" xlink:href="#kfspa"/></clipPath></defs><g><g transform="translate(-428 -4441)"><use fill="#fff" fill-opacity="0" stroke="#4770c0" stroke-miterlimit="50" stroke-width="4" clip-path="url(&quot;#kfspb&quot;)" xlink:href="#kfspa"/></g><g transform="translate(-428 -4441)"><use fill="#ff8227" xlink:href="#kfspc"/></g></g></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="next-mobile"  width="37" height="23" viewBox="0 0 37 23"><defs><path id="aeyea" d="M321.37 2501.42a1.7 1.7 0 0 1 2.3 0c.62.58.62 1.53 0 2.1l-8.14 7.46h29.86c.9 0 1.61.66 1.61 1.48 0 .83-.71 1.5-1.6 1.5h-29.87l8.14 7.45c.62.59.62 1.54 0 2.12a1.7 1.7 0 0 1-2.3 0l-10.89-10a1.38 1.38 0 0 1 0-2.1z"/></defs><g><g transform="translate(-310 -2501)"><use fill="#006ed7" xlink:href="#aeyea"/></g></g></svg>
                            <img src="images/prev.png" alt=" "/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-1 col-1-xs">
                    <div class="block-inquiry-mobile">
                        <div class="inquiry_text">
                            <div class="inquiry-number">
                                13
                            </div>
                            <div class="inquiry-text">
                                Запросить
                                Коммерческое
                                предложение
                            </div>
                            <div class="white-line"></div>
                        </div>
                        <section class="section-form form-send" id="form-send">
                            <div class="container align-center">
                                <form action="send.php" method="post" class="send-form" autocomplete="off">

                                    <input type="tel" name="client_phone" class="client-phone" placeholder="Укажите ваш телефон">
                                    <input type="email" name="client_mail" class="client-mail" placeholder="Загрузить прайс">

                                    <input type="hidden" name="send_type" class="send-type" value="2">
                                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                                    <div class="btn-holder">
                                        <button type="submit" class="btn">Оставить заявку</button>
                                        <div class="g-recaptcha" id="g-recaptcha"></div>
                                    </div>

                                    <!--                 Agreement -->
                                    <!--                                <div class="form-agree align-left">-->
                                    <!--                                    <label class="checkbox-label form-agree-check checked">-->
                                    <!--                                        <input type="checkbox" checked>-->
                                    <!--                                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
                                    <!--                                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
                                    <!--                                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
                                    <!--                                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
                                    <!--                                        в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
                                    <!--                                    </label>-->
                                    <!--                                </div>-->
                                </form>
                            </div>
                        </section>
                    </div>
                    <div class="block-inquiry">
                        <div class="inquiry_text">
                            <div class="inquiry-number">
                                13
                            </div>
                            <div class="inquiry-text">
                                Запросить
                                Коммерческое
                                предложение
                            </div>
                            <div class="white-line"></div>
                        </div>
                        <section class="section-form form-send" id="form-send">
                            <div class="container align-center">
                                <form action="send.php" method="post" class="send-form" autocomplete="off">

                                    <input type="tel" name="client_phone" class="client-phone" placeholder="Укажите ваш телефон">
                                    <input type="email" name="client_mail" class="client-mail" placeholder="Загрузить прайс">

                                    <input type="hidden" name="send_type" class="send-type" value="2">
                                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                                    <div class="btn-holder">
                                        <button type="submit" class="btn">Оставить заявку</button>
                                        <div class="g-recaptcha" id="g-recaptcha"></div>
                                    </div>

                                    <!--                 Agreement -->
                                    <!--                                <div class="form-agree align-left">-->
                                    <!--                                    <label class="checkbox-label form-agree-check checked">-->
                                    <!--                                        <input type="checkbox" checked>-->
                                    <!--                                        Нажимая кнопку "ПОЗВОНИТЕ МНЕ", я&nbsp;даю своё согласие на&nbsp;обработку-->
                                    <!--                                        моих персональных данных в&nbsp;соответствии с&nbsp;Федеральным законом-->
                                    <!--                                        от&nbsp;27.07.2006&nbsp;года №152&#8209;ФЗ "О&nbsp;персональных данных",-->
                                    <!--                                        на&nbsp;условиях и&nbsp;для&nbsp;целей, определённых-->
                                    <!--                                        в&nbsp;Согласии на&nbsp;обработку персональных данных.-->
                                    <!--                                    </label>-->
                                    <!--                                </div>-->
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section map -->
    <footer>
        <div class="container">
            <div class="vertical-line">
                <img src="images/line-vertical-small.png" alt=" "/>
            </div>
            <div class="number-orange">
                12
            </div>
            <h1 class="cre-animate" data-animation="scale-up" data-speed="1600" data-delay="600" data-offset="90%" data-easing="easeOutBack">
                Наши контакты
            </h1>
            <div class="row">
                <div class="col-1-1">
                    <div class="footer-block">
                        <h5>Вы можете <span>найти
                            нас:</span></h5>
                        <div class="footer-tel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18"><defs><path id="veqfa" d="M444.5 18763l-2.67-2.47c-.94-.89-2.56-.53-2.94.62-.28.8-1.23 1.24-2.09 1.06-1.9-.44-4.46-2.74-4.93-4.6-.29-.8.28-1.68 1.14-1.95a1.6 1.6 0 0 0 .66-2.74l-2.66-2.48c-.76-.62-1.9-.62-2.56 0l-1.8 1.68c-1.8 1.77.19 6.46 4.65 10.62 4.46 4.16 9.5 6.1 11.39 4.34l1.8-1.68c.67-.71.67-1.78 0-2.4z"/></defs><g><g transform="translate(-426 -18750)"><use fill="#4574d1" xlink:href="#veqfa"/></g></g></svg>
                            <a href="tel:+74991253225">+7 (499)-125-32-25</a>
                        </div>
                        <div class="address">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="17" height="24" viewBox="0 0 17 24"><defs><path id="2wira" d="M444.05 18808.12c0 5.78-7.65 14.27-7.98 14.62a.78.78 0 0 1-1.14 0c-.33-.35-7.98-8.84-7.98-14.62a8.51 8.51 0 0 1 8.55-8.45c4.71 0 8.55 3.79 8.55 8.45zm-4.25 0a4.28 4.28 0 0 0-4.3-4.25c-2.37 0-4.3 1.9-4.3 4.25a4.28 4.28 0 0 0 4.3 4.25c2.37 0 4.3-1.91 4.3-4.25z"/></defs><g><g transform="translate(-427 -18799)"><use fill="#4574d1" xlink:href="#2wira"/></g></g></svg>
                            Москва, Звенигородское
                            шоссе, 3
                        </div>
                        <div class="email-footer">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="16" viewBox="0 0 23 16"><defs><path id="xck5a" d="M426.77 18867.5l9.58 5.55c.32.2.73.28 1.15.28.42 0 .84-.09 1.16-.28l9.58-5.55c.63-.36 1.22-1.5.07-1.5H426.7c-1.15 0-.56 1.14.07 1.5zm21.74 2.76l-9.85 5.55c-.43.25-.74.28-1.16.28-.42 0-.72-.03-1.15-.28l-9.85-5.55c-.5-.28-.5.05-.5.3v10.12c0 .58.72 1.32 1.27 1.32h20.46c.56 0 1.27-.74 1.27-1.32v-10.12c0-.25 0-.58-.5-.3z"/></defs><g><g transform="translate(-426 -18866)"><use fill="#4574d1" xlink:href="#xck5a"/></g></g></svg>
                            <a href="mailto:info@domain.ru">info@domain.ru</a>
                        </div>
                        <div class="time-footer">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24"><defs><path id="xqpba" d="M450 18928c0 6.62-5.38 12-12 12-6.61 0-12-5.38-12-12 0-6.61 5.38-12 12-12 6.61 0 12 5.38 12 12zm-2.24 1.08h-1.03a1.08 1.08 0 1 1 0-2.17h1.03a9.77 9.77 0 0 0-2.1-5.03l-.72.72a1.09 1.09 0 1 1-1.54-1.54l.72-.73a9.77 9.77 0 0 0-5.03-2.09v1.03a1.09 1.09 0 1 1-2.18 0v-1.03c-1.9.21-3.62.96-5.03 2.1l.72.72a1.09 1.09 0 1 1-1.54 1.54l-.73-.72a9.77 9.77 0 0 0-2.09 5.03h1.03a1.1 1.1 0 1 1 0 2.18h-1.03c.21 1.9.96 3.62 2.1 5.03l.72-.72a1.09 1.09 0 1 1 1.54 1.54l-.72.73a9.78 9.78 0 0 0 5.03 2.09v-1.03a1.1 1.1 0 0 1 2.18 0v1.03a9.78 9.78 0 0 0 5.03-2.1l-.72-.72a1.09 1.09 0 1 1 1.54-1.54l.73.72a9.8 9.8 0 0 0 2.09-5.04zm-6.8 1.87a1.1 1.1 0 0 1-1.55 0l-2.18-2.18c-.2-.2-.32-.48-.32-.77v-4.36a1.1 1.1 0 1 1 2.18 0v3.9l1.86 1.87a1.1 1.1 0 0 1 0 1.54z"/></defs><g><g transform="translate(-426 -18916)"><use fill="#4574d1" xlink:href="#xqpba"/></g></g></svg>
                            Время работы: 10:00-20:00
                            (в выходные 10:00-17:00)
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="footer-map"></div>
    </footer>
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
<!--     Overlay(s)-->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>


    <div class="si-modals-wrapper-2"></div>
    <div class="si-modals-wrapper">
        <nav class="mobile-nav">
            <div class="pseudo-table">
                <div class="pseudo-table-cell align-center nav-overlay">
                    <ul class="nav">
                        <li>
                            <a class="menu-point" href="#">Каталог</a>
                            <a class="menu-point" href="#">Портфолио</a>
                            <a class="menu-point" href="#">Награды и дипломы</a>
                            <a class="menu-point" href="#">Преимущества плитки</a>
                            <a class="menu-point" href="#">Сертификаты</a>
                            <a class="menu-point" href="#">Кейсы</a>
                            <a class="menu-point" href="#">Доставка</a>
                            <a class="menu-point" href="#">Гарантии</a>
                            <a class="menu-point" href="#">Преимущества компании</a>
                            <a class="menu-point" href="#">О компании</a>
                            <a class="menu-point" href="#">Отзывы</a>
                            <a class="menu-point" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

            <div class="modal-container align-center">

                <div class="si-success-modal-title">
                    <div class="title">
                        Спасибо!
                    </div>
                    <div class="modal_sub_title">
                        Наш менеджер свяжется
                        с Вами в течение 15 мин
                    </div>
                </div>
            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal phone-modal">
            <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

            <div class="modal-container align-center">


                <form action="send.php" method="post" class="send-form" autocomplete="off">
                    <div class="container">
                        <div class="row">
                            <div class="col-1-1 col-1-xs">
                                <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                    <div class="btn-holder">
                        <button type="submit" class="btn">Оставить заявку</button>
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

        <!--============================================== orange modal -->
        <div class="si-modal orange-modal">
            <a href="#" class="si-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4928a" d="M1144.15 325.8l5.4 5.27c.6.58.6 1.53 0 2.11-.59.58-1.56.58-2.15 0l-5.37-5.23-5.52 5.6c-.58.58-1.5.58-2.08 0a1.5 1.5 0 0 1 0-2.1l5.2-5.29-5.2-5.27a1.5 1.5 0 0 1 0-2.12c.57-.58 1.5-.58 2.08 0l5.16 5.24 5.73-5.59c.6-.58 1.56-.58 2.16 0 .6.59.6 1.53 0 2.11z"/></defs><g><g transform="translate(-1132 -316)"><use fill="#626365" xlink:href="#4928a"/></g></g></svg></a>

            <div class="modal-container align-center margin-top">

                <div class="modal-form-title">
                    Получите скидку на заказ
                </div>
                <form action="send.php" method="post" class="send-form" autocomplete="off">
                    <div class="container">
                        <div class="row">
                            <div class="col-1-1 col-1-xs">
                                <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                                <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">

                    <div class="btn-holder">
                        <button type="submit" class="btn">Оставить заявку</button>
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