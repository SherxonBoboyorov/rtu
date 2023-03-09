@extends('layouts.front')

@php
    $months = [
        1 => 'yanvar',
        2 => 'fevral',
        3 => 'mart',
        4 => 'aprel'
    ]
@endphp

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.news')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.news')</a>
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
                        @foreach ($years as $value)
                        <ul class="newsAll__filter">
                            <li id="filterForm">
                                @csrf
                                <h3 class="newsAll__filter__title" >{{ $value }}<span><i class="fas fa-angle-down"></i></span></h3>
                                <ul class="newsAll__filter__data">
                                    @foreach ($months as $k=>$item)
                                    <li>
                                         <a href="{{ route('articles', ["month" => $k]) }}" class="filter_show_more newsAll__filter__link" name="month">{{ $item }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        @endforeach
                    </aside>

                    <div id="result_section">
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

                        {{ $articles->links("vendor.pagination.pagination")}}
                    </section>
                </div>
            </div>
        </div>
        </section>
    </div>

    <!-- newsAll end -->

@endsection
@section('pageScripts')
    <!-- flot charts scripts-->
    <script src="{{ asset('front/js/filter.js') }}"></script>
@endsection
