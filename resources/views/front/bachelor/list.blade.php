
@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.bachelor')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.bachelor')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- Bachelor start -->

    <div class="bachelor">
        <section class="container">
            <div class="bachelor__cart">

                <div class="aboutContint__text">
                    @foreach ($bachelors as $bachelor)
                    <p>
                        {!! $bachelor->{'content_' . app()->getLocale()} !!}
                    </p>
                    @endforeach
                </div>

                <div class="bachelor__list">
                    @foreach ($bachalorcategories as $bachelorcategory)
                    <section class="bachelor__item">
                        <h2 class="about__title__h2">{{ $bachelorcategory->{'title_' . app()->getLocale()} }}</h2>

                        <div class="educational__list">
                            @foreach ($bachelorcategory->bachelorins as $bachelorin)

                            <div class="educational__item">
                                <a href="{{ route('bachelorin', $bachelorin->id) }}">
                                    <div class="educational__img">
                                        <img src="{{ asset($bachelorin->image) }}" alt="educational">
                                    </div>

                                    <section>
                                        <h3 class="educational__title__h3">
                                           {{ $bachelorin->{'title_' . app()->getLocale()} }}
                                        </h3>
                                        <div class="educational__text">
                                            <p>
                                                {!! $bachelorin->{'content_' . app()->getLocale()} !!}
                                            </p>
                                        </div>
                                    </section>

                                    <h4 class="educational__icons">
                                        <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </h4>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Bachelor end -->


   @endsection
