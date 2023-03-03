@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Careers</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Careers</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- Careers start -->

    <div class="careers">
        <section class="container">
            <div class="careers__cart">
                <div class="careers__list">
                  @foreach ($careers as $career)
                    <div class="careers__item">
                        <div class="aboutContint__text">
                            <p>
                                {!! $career->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Careers start -->

 @endsection
