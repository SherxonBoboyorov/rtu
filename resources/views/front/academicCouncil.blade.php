
@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.academic_council')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.academic_council')</a>
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
                  @foreach ($councils as $council)
                    <div class="leadership__item">

                        <div class="leadership__item__list">

                            <div class="leadership__img">
                                <img src="{{ asset($council->image) }}" alt="leadership">
                            </div>

                            <section class="leadership__item__text">
                                <h2 class="leadership__title__h2">{{ $council->{'name_' . app()->getLocale()} }}</h2>
                                <ul class="leadership__menu__contacts">
                                    <li>
                                        <span>@lang('main.job_title'):</span>
                                        <h4 class="leadership__link__contacts">{{ $council->{'job_title_' . app()->getLocale()} }}</h4>
                                    </li>

                                    <li>
                                        <span>@lang('main.phone'):</span>
                                        <a href="tel:{{ $council->phone_number }}" class="leadership__link__contacts">{{ $council->phone_number }}</a>
                                    </li>

                                    <li>
                                        <span>@lang('main.reception_days'):</span>
                                        <h4 class="leadership__link__contacts">{{ $council->{'reception_days_' . app()->getLocale()} }}</h4>
                                    </li>

                                    <li>
                                        <span>@lang('main.email'):</span>
                                        <a href="mailto:{{ $council->email }}" class="leadership__link__contacts">{{ $council->email }}</a>
                                    </li>
                                </ul>
                                <button class="leadership__button__open">@lang('main.more')</button>
                            </section>

                        </div>

                        <section class="leadership__item__cart">
                            <div class="leadership__item">

                                <div class="leadership__item__list">

                                    <div class="leadership__img">
                                        <img src="{{ asset($council->image) }}" alt="leadership">
                                    </div>

                                    <section class="leadership__item__text">
                                        <h2 class="leadership__title__h2">{{ $council->{'name_' . app()->getLocale()} }}</h2>
                                        <ul class="leadership__menu__contacts">
                                            <li>
                                                <span>@lang('main.job_title'):</span>
                                                <h4 class="leadership__link__contacts">{{ $council->{'job_title_' . app()->getLocale()} }}</h4>
                                            </li>

                                            <li>
                                                <span>@lang('main.phone'):</span>
                                                <a href="tel:{{ $council->phone_number }}" class="leadership__link__contacts">{{ $council->phone_number }}</a>
                                            </li>

                                            <li>
                                                <span>@lang('main.reception_days'):</span>
                                                <h4 class="leadership__link__contacts">{{ $council->{'reception_days_' . app()->getLocale()} }}</h4>
                                            </li>

                                            <li>
                                                <span>@lang('main.email'):</span>
                                                <a href="mailto:{{ $council->email }}" class="leadership__link__contacts">{{ $council->email }}</a>
                                            </li>
                                        </ul>
                                    </section>

                                </div>

                                <section class="leadership__text__next">
                                    <div class="aboutContint__text clearfix">
                                        <p>
                                            {!! $council->{'description_' . app()->getLocale()} !!}
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
