@extends('layouts.front')

@php
    $months = [
        1 =>  app('translator')->get('main.january'),
        2 =>  app('translator')->get('main.february'),
        3 =>  app('translator')->get('main.march'),
        4 =>  app('translator')->get('main.april'),
        5 =>  app('translator')->get('main.may'),
        6 =>  app('translator')->get('main.june'),
        7 =>  app('translator')->get('main.july'),
        8 =>  app('translator')->get('main.august'),
        9 =>  app('translator')->get('main.september'),
        10 =>  app('translator')->get('main.october'),
        11 =>  app('translator')->get('main.november'),
        12 =>  app('translator')->get('main.december'),
    ];
@endphp

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
                        @foreach ($years as $value)
                        <ul class="newsAll__filter">
                            <li id="filterForm">
                                @csrf
                                <h3 class="newsAll__filter__title" >{{ $value }}<span><i class="fas fa-angle-down"></i></span></h3>
                                <ul class="newsAll__filter__data">
                                    @foreach ($months as $k=>$item)
                                    <li>
                                         <a href="{{ route('events', ["month" => $k]) }}" class="filter_show_more newsAll__filter__link" name="month">{{ $item }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        @endforeach
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
