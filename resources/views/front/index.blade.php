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
                        <a href="{{ $slider->link }}" class="slider__link">@lang('main.read_more') <i class="fas fa-chevron-right"></i></a>
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
                        <h3 class="about__title__h3">@lang('main.a_little_about_our_university')</h3>
                        <div class="about__text">
                            <p>
                                {!! $page->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <a href="{{ route('about') }}" class="about__link">@lang('main.moew') <i class="fas fa-chevron-right"></i></a>
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
                        <h2 class="about__title__h2">@lang('main.advantages')</h2>
                        <h3 class="about__title__h3">@lang('main.how_we_are_better_than_our_competitors')</h3>

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
                <h2 class="about__title__h2">@lang('main.educational_directions')</h2>
                <h3 class="about__title__h3">@lang('main.list_of_directions_of_our_university')</h3>

                <div class="educational__list">
                    @foreach ($bachelorins as $bachelorin)
                    <div class="educational__item">
                        <a href="{{ route('bachelorin', $bachelorin->id) }}}">
                            <div class="educational__img">
                                <img src="{{ asset($bachelorin->image) }}" alt="educational">
                            </div>

                            <section>
                                <h3 class="educational__title__h3">
                                    {{ $bachelorin->{'title_' . app()->getLocale()} }}
                                </h3>
                                <div class="educational__text">
                                    <p>{!! $bachelorin->{'content_' . app()->getLocale()} !!}</p>
                                </div>
                            </section>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </h4>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="educational__bootom__link">
                    <a href="{{ route('bachelor') }}" class="educational__all__link">
                        @lang('main.view_all_directions')
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Educational directions end -->


    <!-- connect with us start -->
    @include('alert')

    <div class="connect_us">
        <section class="container">
            <div class="connect_us__cart">
                <h2 class="about__title__h2">@lang('main.connect_with_us')</h2>
                <h3 class="about__title__h3">@lang('main.write_to_us_and_we_will_contact_you')</h3>

                <form action="{{ route('yourSave') }}" class="connect_us__form" method="POST">
                    @csrf
                    <input type="text" name="fullname" placeholder="@lang('main.your_name')" class="connect_us__input" required>
                    <input type="tel" name="phone_number" placeholder="@lang('main.phone_number')" class="connect_us__input" required>
                    <textarea  placeholder="@lang('main.comment')" name="comment" class="connect_us__textarea"></textarea>
                    <button class="connect_us__button">
                        @lang('main.send')
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
                <h2 class="about__title__h2">@lang('main.news')</h2>
                <h3 class="about__title__h3">@lang('main.latest_events_of_our_university')</h3>

                <div class="news__list">
                    @foreach ($articles as $article)

                    <div class="news__item">
                        <a href="{{ route('article', $article->{'slug_' . app()->getLocale()}) }}">
                            <div class="news__img">
                                <img src="{{ asset($article->image) }}" alt="news">
                            </div>
                            <h4 class="news__title__h4">{{  date('d.m.Y', strtotime($article->created_at)) }}</h4>
                            <h3 class="news__title__h3">{{ $article->{'title_' . app()->getLocale()} }}</h3>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="educational__bootom__link">
                    <a href="{{ route('articles') }}" class="educational__all__link">
                        @lang('main.view_all_news')
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

                <h2 class="about__title__h2">@lang('main.our_partners')</h2>
                <h3 class="about__title__h3">@lang('main.companies_that_trust_us')</h3>

                <div class="our_partners__list owl-carousel">
                   @foreach ($ourpartners as $ourpartner)
                    <div class="our_partners__item">
                        <div class="our_partners__img">
                            <a>
                                <img src="{{ asset($ourpartner->image) }}" alt="our_partners">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Our partners end -->

@endsection
