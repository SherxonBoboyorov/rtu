@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">{{ $event->{'title_' . app()->getLocale()} }}</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('events') }}" class="aboutUniversity__menu__link">@lang('main.events')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">{{ $event->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- eventsIn start -->

    <div class="eventsIn">
        <section class="container">
            <div class="eventsIn__cart">

                <ul class="eventsIn__contacts">
                    <li class="newsIn__contacts__item">
                        <span>
                            <img src="{{ asset('front/foto/calendar.svg') }}" alt="calendar">
                        </span>
                        <h4 class="newsIn__data">
                            {{  date('d.m.Y', strtotime($event->created_at)) }}
                        </h4>
                    </li>

                    <li class="newsIn__contacts__item">
                        <span>
                            <img src="{{ asset('front/foto/eyes.svg') }}" alt="eyes">
                        </span>
                        <h4 class="newsIn__data">
                            {{ $event->views }}
                        </h4>
                    </li>
                </ul>

                <h3 class="newsIn__title__h3">{{ $event->{'title_' . app()->getLocale()} }}</h3>

                <div class="aboutContint__text">
                    <p>
                        {!! $event->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- eventsIn end -->

   @endsection
