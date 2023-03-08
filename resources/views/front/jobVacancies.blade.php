@extends('layouts.front')

@section('content')


    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.jobs')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.jobs')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- vacancies start -->

    <div class="vacancies">
        <section class="container">
            <div class="vacancies__cart">
                <div class="vacancies__list">
                  @foreach ($vacancies as $vacancy)
                    <div class="vacancies__item">
                        <h3 class="vacancies__title__h3">
                            {{ $vacancy->{'title_' . app()->getLocale()} }}
                            <span><i class="fas fa-chevron-down"></i></span>
                        </h3>

                        <div class="vacancies__text">
                            <p>
                               {!! $vacancy->{'description_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- vacancies end -->


  @endsection
