@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Departments & staff</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Departments & staff</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- normsStatements start -->

    <div class="normsStatements">
        <section class="container">
            <div class="normsStatements__cart">
                <div class="educational__list">
                   @foreach ($departments as $department)
                    <div class="educational__item">
                        <a href="{{ url('departmentsstaffs', $department->{'slug_' . app()->getLocale()}) }}">
                            <div class="educational__img">
                                <h2 class="about__title__h2">{{ $department->id }}</h2>
                            </div>

                            <h3 class="educational__title__h3">
                                {{ $department->{'title_' . app()->getLocale()} }}
                            </h3>

                            <h4 class="educational__icons">
                                <svg width="21" height="38" viewBox="0 0 21 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 36L19.0711 19L2 2" stroke="#133654" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </h4>
                        </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- normsStatements end -->

@endsection
