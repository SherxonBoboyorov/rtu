@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">{{ $norm->{'title_' . app()->getLocale()} }}</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.regulations_acts')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">{{ $norm->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- normsStatements_in start -->

    <div class="normsStatements_in">
        <section class="container">
            <div class="normsStatements_in__cart">
                <div class="aboutContint__text">
                    <p>
                        {!! $norm->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- normsStatements_in end -->

@endsection
