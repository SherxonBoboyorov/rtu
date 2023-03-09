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
                                <h2 class="header__title__logo">@lang('main.renaissance_university_of_education')</h2>
                            </a>
                        </div>

                        <section class="header__bottom__burger__menu sidenav" id="slide-out">
                            <ul class="header__bottom__menu">
                                <li>
                                    <h4 class="header__bottom__links">
                                        @lang('main.university')
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="{{ route('about') }}" class="header__bottom__link">
                                                    @lang('main.about_university')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('leadership') }}" class="header__bottom__link">
                                                    @lang('main.leadership')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('structure') }}" class="header__bottom__link">
                                                    @lang('main.structure')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('normsstatements') }}" class="header__bottom__link">
                                                    @lang('main.regulations_acts')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('departmentsstaffs') }}" class="header__bottom__link">
                                                   @lang('main.departments_and_employees')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('labourUnion') }}" class="header__bottom__link">
                                                    @lang('main.labour_union')
                                                </a>
                                            </li>

                                        </ul>

                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="{{ route('partners') }}" class="header__bottom__link">
                                                    @lang('main.partners')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('jobVacancies') }}" class="header__bottom__link">
                                                    @lang('main.jobs')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('E_reception') }}" class="header__bottom__link">
                                                    @lang('main.electronic_reception')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('academicCouncil') }}" class="header__bottom__link">
                                                    @lang('main.academic_council')
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        @lang('main.academics')
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="{{ route('bachelor') }}" class="header__bottom__link">
                                                    @lang('main.bachelor')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('master') }}" class="header__bottom__link">
                                                    @lang('main.master')
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        @lang('main.admissions')
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="{{ route('admissionBachelor') }}" class="header__bottom__link">
                                                    @lang('main.bachelor')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('admissionMaster') }}" class="header__bottom__link">
                                                    @lang('main.master')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('eveninglEducation') }}" class="header__bottom__link">
                                                    @lang('main.evening_education')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('extramuralEducation') }}" class="header__bottom__link">
                                                    @lang('main.extramural_education')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('transfer') }}" class="header__bottom__link">
                                                    @lang('main.transfer')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('tuitionfees') }}" class="header__bottom__link">
                                                    @lang('main.tuition_fees')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('scholarships') }}" class="header__bottom__link">
                                                    @lang('main.scholarships')
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <a href="{{ route('research') }}" class="header__bottom__link">@lang('main.research')</a>
                                </li>

                                <li>
                                    <a href="{{ route('international') }}" class="header__bottom__link">@lang('main.international')</a>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        @lang('main.students')
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">
                                            <li>
                                                <a href="{{ route('studentsStudio') }}" class="header__bottom__link">
                                                    @lang('main.students_studio')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('careers') }}" class="header__bottom__link">
                                                    @lang('main.careers')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('dormitory') }}" class="header__bottom__link">
                                                    @lang('main.dormitory')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('foreignPartners') }}" class="header__bottom__link">
                                                    @lang('main.foreign_partners')
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </li>

                                <li>
                                    <h4 class="header__bottom__links">
                                        @lang('main.news')
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </h4>

                                    <nav class="header__bottom__none">
                                        <ul class="header__bottom__none__menu">

                                            <li>
                                                <a href="{{ route('articles') }}" class="header__bottom__link">
                                                    @lang('main.news')
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('events') }}" class="header__bottom__link">
                                                    @lang('main.events')
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
                                <ul>

                                <div class="header__ru_cart dropdown-trigger"data-target='dropdown1'>
                                    <a data-target='dropdown1' class="header__en__link">{{ strtoupper(app()->getLocale()) }}</a>
                                    <span><i class="fas fa-angle-down"></i></span>
                                </div>

                                <div class="header__ru_none dropdown-content" id='dropdown1'>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if($localeCode != app()->getLocale())
                                        <div class="header__ru_list @if($localeCode == app()->getLocale()) active @endif">
                                            <a rel="alternate" class="header__en__link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ strtoupper($localeCode) }}
                                            </a>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                            </div>

                            <!-- language start -->


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
                                    <a href="{{ route('about') }}" class="footer__menu__link">@lang('main.university')</a>
                                </li>

                                <li>
                                    <a href="{{ route('bachelor') }}" class="footer__menu__link">@lang('main.bachelor')</a>
                                </li>

                                <li>
                                    <a href="{{ route('master') }}" class="footer__menu__link">@lang('main.master')</a>
                                </li>

                                <li>
                                    <a href="{{ route('research') }}" class="footer__menu__link">@lang('main.research')</a>
                                </li>
                            </ul>

                            <ul class="footer__menu">
                                <li>
                                    <a href="{{ route('international') }}" class="footer__menu__link">@lang('main.international')</a>
                                </li>

                                <li>
                                    <a href="{{ route('studentsStudio') }}" class="footer__menu__link">@lang('main.students')</a>
                                </li>

                                <li>
                                    <a href="{{ route('articles') }}" class="footer__menu__link">@lang('main.news')</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer__item__address">
                            <ul class="footer__list__address">
                                <li>
                                    <a class="footer__link__address">
                                        <span>@lang('main.address'):</span>
                                        {{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}
                                    </a>
                                </li>

                                <li>
                                    <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="footer__link__address">
                                        <span>@lang('main.phone'):</span>
                                        {{ $options->where('key', 'phone')->first()->value }}
                                    </a>
                                </li>

                                <li>
                                    <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="footer__link__address">
                                        <span>@lang('main.email'):</span>
                                        {{ $options->where('key', 'email')->first()->value }}
                                    </a>
                                </li>
                            </ul>

                            <ul class="footer__icons__menu">
                                <li>
                                    <a href="{{ $options->where('key', 'instagram')->first()->value }}" class="footer__icons__link"><i class="fab fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a href="{{ $options->where('key', 'facebook')->first()->value }}" class="footer__icons__link"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li>
                                    <a href="{{ $options->where('key', 'telegram')->first()->value }}" class="footer__icons__link"><i class="fab fa-telegram-plane"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer__bottom">
                <section class="container">
                    <div class="footer__bottom__list">
                        <h4 class="footer__bottom__title">«Renessans Ta'lim universiteti» @lang('main.all_rights_reserved')</h4>
                        <h4 class="footer__bottom__title">© Copyright {{ date("Y") }} - Web developed by <a href="http://sos.uz" target="_blank">SOS Group</a></h4>
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
    
    @yield('pageScripts')
</body>
</html>

