@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.events')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.events')</a>
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
                                        <a href="#!" class="newsAll__filter__link active">March</a>
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

                       {{ $events->links("vendor.pagination.pagination")}}
                    </section>
                </div>
            </div>
        </section>
    </div>

    <!-- Events end -->


   @endsection
