@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.dormitory')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.dormitory')</a>
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
              @foreach ($dormitories as $dormitory)
                <div class="aboutContint__text">
                    <p>
                        {!! $dormitory->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- aboutContint end -->

@endsection
