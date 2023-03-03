@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Foreign partners</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Foreign partners</a>
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
              @foreach ($foreigns as $foreign)
                <div class="aboutContint__text">
                    <p>
                        {!! $foreign->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- aboutContint end -->


    <!-- Partners start -->

    <div class="partners">
        <section class="container">
            <div class="partners__cart">
                <div class="partners__list">
                   @foreach ($foreignpartners as $foreignpartner)
                    <div class="partners__item">
                        <a href="{{ $foreignpartner->link }}">
                            <div class="partners__img">
                                <img src="{{ asset($foreignpartner->image) }}" alt="partners">
                            </div>
                        </a>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Partners end -->

@endsection
