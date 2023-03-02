@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Tuition fees</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Tuition fees</a>
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
              @foreach ($tuitions as $tuition)
                <div class="aboutContint__text">
                    <p>
                        {!! $tuition->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
              @endforeach
            </div>
        </section>
    </div>

    <!-- aboutContint end -->


    <!-- tuitionFees start -->

    <div class="tuitionFees">
        <section class="container">
            <div class="tuitionFees__cart">
              @foreach ($tuitions as $tuition)

                <div class="tuitionFees__table">
                    <table>
                        {!! $tuition->{'content_table_' . app()->getLocale()} !!}
                    </table>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- tuitionFees end -->

@endsection
