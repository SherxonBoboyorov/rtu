@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">International</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">International</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- International start -->

    <div class="international">
        <section class="container">
            <div class="aboutVideo__cart">
                <div class="aboutVideo__list clearfix">
                  @foreach ($internationals as $international)
                    <div class="aboutContint__text">
                         {!! $international->{'content_' . app()->getLocale()} !!}
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- International end -->

@endsection
