@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Leadership</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a  class="aboutUniversity__menu__link">Leadership</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- Leadership start -->

    <div class="leadership">
        <section class="container">
            <div class="leadership__cart">

                <div class="leadership__list">
                    @foreach ($leaderships as $leadership)

                    <div class="leadership__item">

                        <div class="leadership__item__list">

                            <div class="leadership__img">
                                <img src="{{ asset($leadership->image) }}" alt="leadership">
                            </div>

                            <section class="leadership__item__text">
                                <h2 class="leadership__title__h2">{{ $leadership->{'name_' . app()->getLocale()} }}</h2>
                                <ul class="leadership__menu__contacts">
                                    <li>
                                        <span>Должность:</span>
                                        <h4 class="leadership__link__contacts">{{ $leadership->{'job_title_' . app()->getLocale()} }}</h4>
                                    </li>

                                    <li>
                                        <span>Телефон:</span>
                                        <a href="tel:{{ $leadership->phone_number }}" class="leadership__link__contacts">{{ $leadership->phone_number }}</a>
                                    </li>

                                    <li>
                                        <span>Дни приема:</span>
                                        <h4 class="leadership__link__contacts">{{ $leadership->{'reception_days_' . app()->getLocale()} }}</h4>
                                    </li>

                                    <li>
                                        <span>Электронная почта:</span>
                                        <a href="mailto:{{ $leadership->email }}" class="leadership__link__contacts">{{ $leadership->email }}</a>
                                    </li>
                                </ul>
                                <button class="leadership__button__open">Подробнее</button>
                            </section>

                        </div>

                        <section class="leadership__item__cart">
                            <div class="leadership__item">

                                <div class="leadership__item__list">

                                    <div class="leadership__img">
                                        <img src="{{ asset($leadership->image) }}" alt="leadership">
                                    </div>

                                    <section class="leadership__item__text">
                                        <h2 class="leadership__title__h2">{{ $leadership->{'name_' . app()->getLocale()} }}</h2>
                                        <ul class="leadership__menu__contacts">
                                            <li>
                                                <span>Должность:</span>
                                                <h4 class="leadership__link__contacts">{{ $leadership->{'job_title_' . app()->getLocale()} }}</h4>
                                            </li>

                                            <li>
                                                <span>Телефон:</span>
                                                <a href="tel:{{ $leadership->phone_number }}" class="leadership__link__contacts">{{ $leadership->phone_number }}</a>
                                            </li>

                                            <li>
                                                <span>Дни приема:</span>
                                                <h4 class="leadership__link__contacts">{{ $leadership->{'reception_days_' . app()->getLocale()} }}</h4>
                                            </li>

                                            <li>
                                                <span>Электронная почта:</span>
                                                <a href="mailto:{{ $leadership->email }}" class="leadership__link__contacts">{{ $leadership->email }}</a>
                                            </li>
                                        </ul>
                                    </section>

                                </div>

                                <section class="leadership__text__next">
                                    <div class="aboutContint__text clearfix">
                                        <p>
                                            {!! $leadership->{'description_' . app()->getLocale()} !!}
                                        </p>
                                    </div>
                                </section>

                            </div>
                        </section>
                        <section class="leadership__fixed"></section>

                    </div>
                  @endforeach
                </div>

            </div>
        </section>
    </div>

    <!-- Leadership end -->


 @endsection
