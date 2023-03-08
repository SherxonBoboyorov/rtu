@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">{{ $team->{'name_' . app()->getLocale()} }}</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ url('departmentsstaffs') }}" class="aboutUniversity__menu__link">@lang('main.departments_and_employees')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">{{ $team->{'name_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- command start -->

    <div class="command">
        <section class="container">
            <div class="command__cart">

                <div class="leadership__item leadership__active">
                    <div class="leadership__item__list">

                        <div class="leadership__img">
                            <img src="{{ asset($team->image) }}" alt="leadership">
                        </div>

                        <section class="leadership__item__text">
                            <h2 class="leadership__title__h2">{{ $team->{'name_' . app()->getLocale()} }}</h2>
                            <ul class="leadership__menu__contacts">
                                <li>
                                    <span>Position:</span>
                                    <h4 class="leadership__link__contacts">{{ $team->{'job_title_' . app()->getLocale()} }}</h4>
                                </li>

                                <li>
                                    <span>Teaching work experience:</span>
                                    <a class="leadership__link__contacts">{{ $team->{'reception_days_' . app()->getLocale()} }}</a>
                                </li>

                                <li>
                                    <span>Specialties:</span>
                                    <h4 class="leadership__link__contacts">{{ $team->{'specialties_' . app()->getLocale()} }}</h4>
                                </li>
                            </ul>
                        </section>

                    </div>

                    <section class="leadership__text__next">
                        <div class="aboutContint__text clearfix">
                            <p>
                                {!! $team->{'description_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>

    <!-- command end -->


   @endsection
