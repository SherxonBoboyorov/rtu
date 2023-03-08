@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">{{ $article->{'title_' . app()->getLocale()} }}</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('articles') }}" class="aboutUniversity__menu__link">@lang('main.news')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">{{ $article->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- newsIn start -->

    <div class="newsIn">
        <section class="container">
            <div class="newsIn__cart">
                <div class="newsIn__list">
                    <aside>
                        <ul class="newsIn__contacts">
                            <li class="newsIn__contacts__item">
                                <span>
                                    <img src="{{ asset('front/foto/calendar.svg') }}" alt="calendar">
                                </span>
                                <h4 class="newsIn__data">
                                    {{  date('d.m.Y', strtotime($article->created_at)) }}
                                </h4>
                            </li>

                            <li class="newsIn__contacts__item">
                                <span>
                                    <img src="{{ asset('front/foto/eyes.svg') }}" alt="eyes">
                                </span>
                                <h4 class="newsIn__data">
                                    {{ $article->views }}
                                </h4>
                            </li>

                            <li class="newsIn__contacts__item">
                                <span>
                                    <img src="{{ asset('front/foto/share.svg') }}" alt="share">
                                </span>

                                <ul class="newsIn__contacts__list">
                                    <li>
                                        <a class="newsIn__contacts__link">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="newsIn__contacts__link">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="newsIn__contacts__link">
                                            <i class="fa-solid fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <h3 class="newsIn__title__news">@lang('main.related_news')</h3>

                        <div class="newsIn__aside__list">
                            @foreach ($articles_list_alls as $articles_list_all)

                            <div class="newsIn__aside__item">
                                <a href="{{ route('article', $articles_list_all->{'slug_' . app()->getLocale()}) }}">
                                    <div class="newsIn__aside__img">
                                        <img src="{{ asset($articles_list_all->image) }}" alt="news">
                                    </div>

                                    <h4 class="newsAll__data">{{  date('d.m.Y', strtotime($articles_list_all->created_at)) }}</h4>
                                    <h3 class="newsAll__title__h3">
                                        {{ $articles_list_all->{'title_' . app()->getLocale()} }}
                                    </h3>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </aside>

                    <div class="newsIn__cart__list">
                        <div class="newsIn__imgs">
                            <img src="{{ asset($article->image) }}" alt="newsIn">
                        </div>

                        <h3 class="newsIn__title__h3">{{ $article->{'title_' . app()->getLocale()} }}</h3>

                        <div class="aboutContint__text">
                            <p>
                                {!! $article->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- newsIn end -->

@endsection
