<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Детализация товара</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    
   <!-- ======= All CSS Plugins here ======== -->
   <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
 
   <!-- Plugin css -->
   <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
 
   <!-- Custom Style CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    
<!-- Start header area -->
<header class="header__section">
    <div class="header__topbar border-bottom">
        <div class="container">
            <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                <ul class="header__topbar--info d-none d-lg-flex">
                    <li class="header__info--list">
                        <a class="header__info--link" href="#">ГЛАВНАЯ</a>
                    </li>
                </ul>
                <div class="header__top--right d-flex align-items-center">
                    <ul class="header__top--link d-flex align-items-center">
                        <li class="header__link--menu"><a class="header__link--menu__text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Таблица</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="main__header header__sticky">
        <div class="container">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">

                </div>
                <div class="main__logo">
                    <h2 class="main__logo--title"><a>Детализация товара</a></h2>
                </div>                                                          
            </div>
        </div>
    </div>
    <div class="header__bottom bg__primary">
        <div class="container">
            <div class="header__bottom--inner position__relative d-flex align-items-center">

                <div class="header__right--area d-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                            </ul>
                        </nav>
                    </div>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>             
</header>
<!-- End header area -->

<main class="main__content_wrapper">
    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <form id="filters" method="get"> 
        <section class="shipping__section">
            <div class="container">

                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            <p><u>Детализация товара</u></p>

                            <div class="account__table--area">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Название</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Цена</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Категория</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Описание</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['product']['id'] }}">
                                            <td><input style="min-width: 150px; width: 150px;" type="text" name="name" class="name" value="{{ $info['product']['name'] }}"></td>
                                            <td><input style="min-width: 150px; width: 150px;" type="text" name="price" class="price" value="{{ $info['product']['price'] }}"></td>
                                            <td>   
                                                <select id="category" style="min-width: 130px; width: 130px;" name="category" class="category">
                                                    <option selected value="{{ $info['product']['category_id'] }}">{{ $info['product']['category']['name'] }}</option>
                                                    @foreach ($info['category'] as $value) 
                                                        <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>  
                                            <td class="col-id-no" scope="row"><textarea rows='3' cols='20' type=text name="description" class="description">{{ $info['product']['description'] }}</textarea></td>
                                            <td>
                                                <button class="primary__btn price__filter--btn" id='update' type="button">Обновить</button>
                                            </td>  
                                        </tr>                                                                             
                                    </tbody>
                                </table>
                                
                                </br>
                                <p><b>*Для информации:</b> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                   
        </section>
    </section>
    <!-- my account section end -->
</main>

<!-- Start footer section -->
<footer class="footer__section footer__bg">
    <div class="container">
        <div class="newsletter__area">
            <div class="newsletter__inner d-flex justify-content-between align-items-center">
                <div class="newsletter__content">
                    <h2 class="newsletter__title">WEB приложение <span class="text__secondary"></span></h2>
                    <p class="newsletter__desc">Товары</p>
                </div>
            </div>
        </div>
        <div class="main__footer">
            <div class="row ">
                <div class="col-lg-4 col-md-10">
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">                    
                <p class="copyright__content"><span class="text__secondary">© 2025</span> Тестовое задание</p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer section -->

<!-- Scroll top bar -->
<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

<!-- All Script JS Plugins here  -->
<script src="{{ asset('assets/js/vendor/popper.js') }}" defer="defer"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/glightbox.min.js') }}"></script>

<!-- Customscript js -->
<script src="{{ asset('assets/js/script.js') }}"></script>
  
</body>
</html>

