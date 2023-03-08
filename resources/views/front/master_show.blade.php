@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">{{ $masterin->{'title_' . app()->getLocale()} }}</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('master') }}" class="aboutUniversity__menu__link">@lang('main.master')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">{{ $masterin->{'title_' . app()->getLocale()} }}</a>
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
                <div class="aboutContint__text">
                    <p>
                        {!! $masterin->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- aboutContint end -->

@endsection
