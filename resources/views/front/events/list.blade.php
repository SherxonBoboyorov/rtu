@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Events</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Events</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- Events start -->

    <div class="events">
        <section class="container">
            <div class="events__cart">
                <div class="newsAll__list">
                    <aside>
                        <ul class="newsAll__filter">

                            <li>
                                <h3 class="newsAll__filter__title">2022 <span><i class="fas fa-angle-down"></i></span></h3>
                                <ul class="newsAll__filter__data">
                                    <li>
                                        <a href="#!" class="newsAll__filter__link active">Январь</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Февраль</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Март</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Апрель</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Май</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Июнь</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Июль</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Август</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Сентябрь</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Октябрь</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Ноябрь</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Декабрь</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>

                    <section>

                        <div class="events__list">
                          @foreach ($events as $event)
                            <div class="events__item">
                                <a href="{{ route('event', $event->{'slug_' . app()->getLocale()}) }}">
                                    <h4 class="newsAll__data">{{  date('d.m.Y', strtotime($event->created_at)) }}</h4>
                                    <h3 class="newsAll__title__h3">
                                        {{ $event->{'title_' . app()->getLocale()} }}
                                    </h3>
                                    <div class="newsAll__text">
                                        <p>
                                            {!! $event->{'content_' . app()->getLocale()} !!}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        {{-- <ul class="newsAll__pagination">
                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-angle-double-left"></i></a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-chevron-left"></i></a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__link active">
                                    1
                                </a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__link">
                                    2
                                </a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__link">
                                    3
                                </a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-chevron-right"></i></a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul> --}}
                    </section>
                </div>
            </div>
        </section>
    </div>

    <!-- Events end -->


   @endsection
