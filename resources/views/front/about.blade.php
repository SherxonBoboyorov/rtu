@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">About university</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">About university</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- aboutContint start -->

    <div class="aboutContint">
        <section class="container">
            <div class="aboutContint__cart">
                @foreach ($pages as $page)
                 <div class="aboutContint__text">
                    <p>
                        {!! $page->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- aboutContint end -->


    <!-- aboutStatistics start -->

    <div class="aboutStatistics">
        <section class="container">
            <div class="aboutStatistics__cart">
                <h2 class="about__title__h2">Statistics</h2>

                <ul class="aboutStatistics__menu">
                    @foreach ($statistics as $statistic)
                     <li>
                        <h2 class="advantages__title__h2 numbers">{{ $statistic->result }}</h2>
                        <div class="advantages__text">
                            <p>{{ $statistic->{'description_' . app()->getLocale()} }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutStatistics end -->


    <!-- aboutVideo start -->

     {{-- <div class="aboutVideo">
        <section class="container">
            <div class="aboutVideo__cart">
                <div class="aboutVideo__list clearfix">
                    @foreach ($pages as $page)
                     <section class="aboutVideo__video">
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
                    </section>

                    <div class="aboutContint__text">
                        <p>
                            {!! $page->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div> --}}

    <!-- aboutVideo end -->

   @endsection
