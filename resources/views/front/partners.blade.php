@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Partners</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Partners</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- Partners start -->

    <div class="partners">
        <section class="container">
            <div class="partners__cart">
                <div class="partners__list">
                  @foreach ($partners as $partner)
                    <div class="partners__item">
                        <a href="{{ $partner->link }}">
                            <div class="partners__img">
                                <img src="{{ asset($partner->image) }}" alt="partners">
                            </div>
                            <h3 class="partners__title__h3">{{ $partner->{'title_' . app()->getLocale()} }}</h3>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Partners end -->

   @endsection
