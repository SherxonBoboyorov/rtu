@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">News</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">Main</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">News</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- newsAll start -->

    <div class="newsAll">
        <section class="container">
            <div class="newsAll__cart">
                <div class="newsAll__list">
                    <aside>
                        <ul class="newsAll__filter">

                            <li>
                                <h3 class="newsAll__filter__title">2022 <span><i class="fas fa-angle-down"></i></span></h3>
                                <ul class="newsAll__filter__data">
                                    <li>
                                        <a href="#!" class="newsAll__filter__link active">Январь</a>
                                    </li>

                                    <li>
                                        <a href="#!" class="newsAll__filter__link">Декабрь</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>

                    <section>
                        <div class="newsAll__list__item">
                            @foreach ($articles as $article)
                            <div class="newsAll__item">
                                <a href="{{ route('article', $article->{'slug_' . app()->getLocale()}) }}">
                                    <div class="newsAll__imgs">
                                        <img src="{{ asset($article->image) }}" alt="newsAll">
                                    </div>

                                    <section>
                                        <h4 class="newsAll__data">{{  date('d.m.Y', strtotime($article->created_at)) }}</h4>
                                        <h3 class="newsAll__title__h3">
                                            {{ $article->{'title_' . app()->getLocale()} }}
                                        </h3>
                                        <div class="newsAll__text">
                                            <p>
                                                {!! $article->{'content_' . app()->getLocale()} !!}
                                            </p>
                                        </div>
                                    </section>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        {{-- <ul class="newsAll__pagination">
                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-angle-double-left"></i></a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-chevron-left"></i></a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__link active">
                                    1
                                </a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__link">
                                    2
                                </a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__link">
                                    3
                                </a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-chevron-right"></i></a>
                            </li>

                            <li>
                                <a href="#!" class="newsAll__pagination__next"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul> --}}
                    </section>
                </div>
            </div>
        </section>
    </div>

    <!-- newsAll end -->

@endsection
