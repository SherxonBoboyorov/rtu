@extends('layouts.front')

@section('content')

    <!-- slider start -->

    <div class="slider">
        <div class="slider__list">
          @foreach ($sliders as $slider)
            <div class="slider__item" style="background: linear-gradient(0deg, rgba(19, 54, 84, 0.2), rgba(19, 54, 84, 0.2)),  url({{ asset($slider->image) }});">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">{{ $slider->{'title_' . app()->getLocale()} }}</h1>
                        <div class="slider__text">
                            <p>{{ $slider->{'description_' . app()->getLocale()} }}</p>
                        </div>
                        <a href="{{ $slider->link }}" class="slider__link">Read more <i class="fas fa-chevron-right"></i></a>
                    </div>
                </section>
            </div>
           @endforeach
        </div>
    </div>

    <!-- slider end -->


    <!-- About Rtu start -->

    <div class="about">
        <section class="container">
            <div class="about__cart">
                <div class="about__list">
                    @foreach ($pages as $page)
                    <div class="about__item__text">
                        <h2 class="about__title__h2">{{ $page->{'title_' . app()->getLocale()} }}</h2>
                        <h3 class="about__title__h3">A little about our university</h3>
                        <div class="about__text">
                            <p>
                                {!! $page->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <a href="{{ route('about') }}" class="about__link">more <i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="about__item">
                        <p class="text-center">
                            <a data-fancybox class="about__item__video" href="{{ $page->frame }}">
                                <section>
                                    <img class="inline" alt="" src="{{ asset($page->image) }}"/>
                                    <!-- play start -->

                                    <div class="button__min is-play">
                                        <div class="button-outer-circle has-scale-animation"></div>
                                        <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                        <div class="button-icon is-play">
                                            <img class="about__item__img__play" alt="All" src="{{ asset('front/foto/pley.svg') }}">
                                        </div>
                                    </div>

                                    <!-- play end -->
                                </section>
                            </a>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- About Rtu end -->


    <!-- advantages start -->

    <div class="advantages">
        <section class="container">
            <div class="advantages__cart">
                <div class="advantages__list">
                    <div class="advantages__item">
                        <h2 class="about__title__h2">advantages</h2>
                        <h3 class="about__title__h3">how we are better than our competitors</h3>

                        <ul class="advantages__list__menu">
                          @foreach ($advantages as $advantage)
                            <li>
                                <h2 class="advantages__title__h2 numbers">{{ $advantage->result }}</h2>
                                <div class="advantages__text">
                                    <p>{{ $advantage->{'description_' . app()->getLocale()} }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="advantages__item__img">
                        <img src="{{ asset('front/foto/advantages.png') }}" alt="advantages">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- advantages end -->


    <!-- Educational directions start -->

    <div class="educational">
        <section class="container">
            <div class="educational__cart">
                <h2 class="about__title__h2">Educational directions</h2>
                <h3 class="about__title__h3">List of directions of our university</h3>

                <div class="educational__list">
                    <div class="educational__item">
                        <a href="bachelor_in.html">
                            <div class="educational__img">
                                <img src="foto/educational_1.png" alt="educational">
                            </div>

                            <section>
                                <h3 class="educational__title__h3">
                                    Banking and auditing
                                </h3>
                                <div class="educational__text">
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </section>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </h4>
                        </a>
                    </div>

                    <div class="educational__item">
                        <a href="bachelor_in.html">
                            <div class="educational__img">
                                <img src="foto/educational_2.png" alt="educational">
                            </div>

                            <section>
                                <h3 class="educational__title__h3">
                                    Banking and auditing
                                </h3>
                                <div class="educational__text">
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </section>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </h4>
                        </a>
                    </div>

                    <div class="educational__item">
                        <a href="bachelor_in.html">
                            <div class="educational__img">
                                <img src="foto/educational_3.png" alt="educational">
                            </div>

                            <section>
                                <h3 class="educational__title__h3">
                                    School management
                                </h3>
                                <div class="educational__text">
                                    <p>Sed do eiusmod tempor</p>
                                </div>
                            </section>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </h4>
                        </a>
                    </div>

                    <div class="educational__item">
                        <a href="bachelor_in.html">
                            <div class="educational__img">
                                <img src="foto/educational_4.png" alt="educational">
                            </div>

                            <section>
                                <h3 class="educational__title__h3">
                                    Management (by industries and sectors)
                                </h3>
                                <div class="educational__text">
                                    <p>Incididunt ut labore et</p>
                                </div>
                            </section>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </h4>
                        </a>
                    </div>
                </div>

                <div class="educational__bootom__link">
                    <a href="bachelor.html" class="educational__all__link">
                        view all directions
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Educational directions end -->


    <!-- connect with us start -->

    <div class="connect_us">
        <section class="container">
            <div class="connect_us__cart">
                <h2 class="about__title__h2">connect with us</h2>
                <h3 class="about__title__h3">Write to us and we will contact you</h3>

                <form action="#!" class="connect_us__form">
                    <input type="text" placeholder="Your name" class="connect_us__input">
                    <input type="tel" placeholder="Phone number" class="connect_us__input">
                    <textarea  placeholder="Comment" class="connect_us__textarea"></textarea>
                    <button class="connect_us__button">
                        Send
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
        </section>
    </div>

    <!-- connect with us end -->


    <!-- News start -->

    <div class="news">
        <section class="container">
            <div class="news__cart">
                <h2 class="about__title__h2">News</h2>
                <h3 class="about__title__h3">Latest events of our university</h3>

                <div class="news__list">
                    <div class="news__item">
                        <a href="news_in.html">
                            <div class="news__img">
                                <img src="foto/news_1.png" alt="news">
                            </div>
                            <h4 class="news__title__h4">12.04.2022</h4>
                            <h3 class="news__title__h3">Ut enim ad minim veniam, quis nostrud</h3>
                        </a>
                    </div>

                    <div class="news__item">
                        <a href="news_in.html">
                            <div class="news__img">
                                <img src="foto/news_2.png" alt="news">
                            </div>
                            <h4 class="news__title__h4">08.04.2022</h4>
                            <h3 class="news__title__h3">Exercitation ullamco laboris nisi ut aliquip ex ea</h3>
                        </a>
                    </div>

                    <div class="news__item">
                        <a href="news_in.html">
                            <div class="news__img">
                                <img src="foto/news_3.png" alt="news">
                            </div>
                            <h4 class="news__title__h4">04.04.2022</h4>
                            <h3 class="news__title__h3">Duis aute irure dolor in reprehenderit in voluptate</h3>
                        </a>
                    </div>
                </div>

                <div class="educational__bootom__link">
                    <a href="news.html" class="educational__all__link">
                        view all directions
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- News end -->


    <!-- Our partners start -->

    <div class="our_partners">
        <section class="container">
            <div class="our_partners__cart">

                <h2 class="about__title__h2">Our partners</h2>
                <h3 class="about__title__h3">Companies that trust us</h3>

                <div class="our_partners__list owl-carousel">

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_1.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_2.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_3.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_4.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_5.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_3.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a href="#!">
                                <img src="foto/our_partners_4.png" alt="our_partners">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Our partners end -->

@endsection
