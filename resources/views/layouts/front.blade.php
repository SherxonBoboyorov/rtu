<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/foto/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/foto/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/foto/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/foto/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/foto/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fancybox-main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <title>Renessans Ta'lim universiteti</title>
</head>
<body>

    <!-- header start -->

    <header>
        <div class="header">
            <section class="container">
                <div class="header__cart">
                    <div class="header__list">

                        <div class="header__logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('front/foto/logo.svg') }}" alt="logo">
                                <h2 class="header__title__logo">Renessans Ta'lim universiteti</h2>
                            </a>
                        </div>

                        <section class="header__bottom__burger__menu sidenav" id="slide-out">
                            <ul class="header__bottom__menu">
                                <li>
                                    <h4 class="header__bottom__links">
                                        University
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="{{ route('about') }}" class="header__bottom__link">
                                                    About university
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('leadership') }}" class="header__bottom__link">
                                                    Leadership
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('structure') }}" class="header__bottom__link">
                                                    Structure
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('normsstatements') }}" class="header__bottom__link">
                                                    Norms & statements
                                                </a>
                                            </li>

                                            <li>
                                                <a href="departmentsStaff.html" class="header__bottom__link">
                                                    Departments & staff
                                                </a>
                                            </li>

                                            <li>
                                                <a href="labourUnion.html" class="header__bottom__link">
                                                    Labour union
                                                </a>
                                            </li>

                                        </ul>

                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="partners.html" class="header__bottom__link">
                                                    Partners
                                                </a>
                                            </li>

                                            <li>
                                                <a href="jobVacancies.html" class="header__bottom__link">
                                                    Job vacancies
                                                </a>
                                            </li>

                                            <li>
                                                <a href="e_reception.html" class="header__bottom__link">
                                                    E-reception
                                                </a>
                                            </li>

                                            <li>
                                                <a href="academicCouncil.html" class="header__bottom__link">
                                                    Academic Council
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        Academics
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="bachelor.html" class="header__bottom__link">
                                                    Bachelor
                                                </a>
                                            </li>

                                            <li>
                                                <a href="bachelor.html" class="header__bottom__link">
                                                    Master
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        Admissions
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="admissionsBachelor.html" class="header__bottom__link">
                                                    Bachelor
                                                </a>
                                            </li>

                                            <li>
                                                <a href="admissionsMaster.html" class="header__bottom__link">
                                                    Master
                                                </a>
                                            </li>

                                            <li>
                                                <a href="eveningEducation.html" class="header__bottom__link">
                                                    Evening education
                                                </a>
                                            </li>

                                            <li>
                                                <a href="extramuralEducation.html" class="header__bottom__link">
                                                    Extramural education
                                                </a>
                                            </li>

                                            <li>
                                                <a href="transfer.html" class="header__bottom__link">
                                                    Transfer
                                                </a>
                                            </li>

                                            <li>
                                                <a href="tuitionFees.html" class="header__bottom__link">
                                                    Tuition fees
                                                </a>
                                            </li>

                                            <li>
                                                <a href="scholarships.html" class="header__bottom__link">
                                                    Scholarships
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <a href="research.html " class="header__bottom__link">Research</a>
                                </li>

                                <li>
                                    <a href="international.html" class="header__bottom__link">International</a>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        Students
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="studentsStudio.html" class="header__bottom__link">
                                                    Students studio
                                                </a>
                                            </li>

                                            <li>
                                                <a href="careers.html" class="header__bottom__link">
                                                    Careers
                                                </a>
                                            </li>

                                            <li>
                                                <a href="dormitory.html" class="header__bottom__link">
                                                    Dormitory
                                                </a>
                                            </li>

                                            <li>
                                                <a href="foreignPartners.html" class="header__bottom__link">
                                                    Foreign partners
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        News
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="news.html" class="header__bottom__link">
                                                    news
                                                </a>
                                            </li>

                                            <li>
                                                <a href="events.html" class="header__bottom__link">
                                                    Events
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>
                            </ul>
                        </section>

                        <section class="header__ru__list__caer">

                            <!-- language start -->

                            <div class="header__ru">

                                <div class="header__ru_cart dropdown-trigger"data-target='dropdown1'>
                                    <a data-target='dropdown1' class="header__en__link">Ru</a>
                                    <span><i class="fas fa-angle-down"></i></span>
                                </div>

                                <div class="header__ru_none dropdown-content" id='dropdown1'>
                                    <div class="header__ru_list active">
                                        <a href="#!-1" class="header__en__link">Ru</a>
                                    </div>

                                    <div class="header__ru_list">
                                        <a href="#!-2" class="header__en__link">En</a>
                                    </div>

                                    <div class="header__ru_list">
                                        <a href="#!-3" class="header__en__link">O’z</a>
                                    </div>
                                </div>

                                <!-- language start -->

                            </div>

                            <button class="header__burger__none sidenav-trigger" data-target="slide-out"><i class="fas fa-bars"></i></button>

                        </section>

                    </div>
                </div>
            </section>
        </div>
    </header>

    <!-- header end -->

    @yield('content')

    <!-- footer start -->

    <footer>
        <div class="footer">
            <section class="container">
                <div class="footer__cart">
                    <div class="footer__list">
                        <div class="footer__item__menu">
                            <ul class="footer__menu">
                                <li>
                                    <a href="aboutUniversity.html" class="footer__menu__link">University</a>
                                </li>

                                <li>
                                    <a href="bachelor.html" class="footer__menu__link">BACHELOR</a>
                                </li>

                                <li>
                                    <a href="bachelor.html" class="footer__menu__link">MASTER</a>
                                </li>

                                <li>
                                    <a href="research.html" class="footer__menu__link">Research</a>
                                </li>
                            </ul>

                            <ul class="footer__menu">
                                <li>
                                    <a href="international.html" class="footer__menu__link">International</a>
                                </li>

                                <li>
                                    <a href="studentsStudio.html" class="footer__menu__link">Students</a>
                                </li>

                                <li>
                                    <a href="news.html" class="footer__menu__link">News</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer__item__address">
                            <ul class="footer__list__address">
                                <li>
                                    <a class="footer__link__address">
                                        <span>Address:</span>
                                        68 Sadik Azimov St., Tashkent city, Uzbekistan
                                    </a>
                                </li>

                                <li>
                                    <a href="tel:+99 893 505 45 05" class="footer__link__address">
                                        <span>Phone number:</span>
                                        +99 893 505 45 05
                                    </a>
                                </li>

                                <li>
                                    <a href="mailto:info@rtu.uz" class="footer__link__address">
                                        <span>Email:</span>
                                        info@rtu.uz
                                    </a>
                                </li>
                            </ul>

                            <ul class="footer__icons__menu">
                                <li>
                                    <a href="#!" class="footer__icons__link"><i class="fab fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a href="#!" class="footer__icons__link"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li>
                                    <a href="#!" class="footer__icons__link"><i class="fab fa-telegram-plane"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer__bottom">
                <section class="container">
                    <div class="footer__bottom__list">
                        <h4 class="footer__bottom__title">«Renessans Ta'lim universiteti» Все права защищены</h4>
                        <h4 class="footer__bottom__title">© Copyright 2021 - Web developed by <a href="http://sos.uz" target="_blank">SOS Group</a></h4>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <!-- footer end -->


    <script src="{{ asset('front/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('front/js/fancyapps-ui.js') }}"></script>
    <script src="{{ asset('front/js/fancybox_main.js') }}"></script>
    <script src="{{ asset('front/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/slic.js') }}"></script>
    <script src="{{ asset('front/js/mar_ru.js') }}"></script>
    <script src="{{ asset('front/js/index.js') }}"></script>
</body>
</html>

