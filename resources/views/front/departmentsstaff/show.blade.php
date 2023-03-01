@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2"> {{ $department->{'title_' . app()->getLocale()} }}</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a  class="aboutUniversity__menu__link"> {{ $department->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- normsStatements_in start -->

    <div class="normsStatements_in">
        <section class="container">
            <div class="normsStatements_in__cart">
                <div class="aboutContint__text">
                    <p>
                        {!! $department->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- normsStatements_in end -->


    <!-- departmentsStaff_in start -->

    <div class="departmentsStaff_in">
        <section class="container">
            <div class="departmentsStaff_in__cart">
                <h2 class="departmentsStaff_in__title__h2">Team</h2>

                <div class="departmentsStaff_in__list">
                  @foreach ($teams as $team)
                    <div class="departmentsStaff_in__item">
                        <a href="{{ route('team', $team->{'slug_' . app()->getLocale()}) }}">
                            <div class="departmentsStaff_in__imgs">
                                <img src="{{ asset($team->image) }}" alt="departmentsStaff">
                            </div>

                            <section>
                                <h2 class="departmentsStaff_in__title__item">{{ $team->{'name_' . app()->getLocale()} }}</h2>
                                <h4 class="departmentsStaff_in__title__h4">{{ $team->{'job_title_' . app()->getLocale()} }}</h4>
                            </section>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </h4>
                        </a>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- departmentsStaff_in end -->

@endsection
