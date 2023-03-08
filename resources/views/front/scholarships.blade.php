@extends('layouts.front')

@section('content')


    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.scholarships')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.scholarships')</a>
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
                  @foreach ($scholarships as $scholarship)
                    <p>
                        {!! $scholarship->{'content_' . app()->getLocale()} !!}
                    </p>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- aboutContint end -->

@endsection
