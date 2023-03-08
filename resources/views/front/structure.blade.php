@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.structure')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.structure')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- Structure start -->

    <div class="structure">
        <section class="container">
            <div class="structure__cart">
              @foreach ($structures as $structure)
                <div class="structure__imgs">
                    <img src="{{ asset($structure->image) }}" alt="structure">
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Structure end -->


 @endsection
