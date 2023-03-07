@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.research')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.research')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->


    <!-- research start -->

    <div class="research">
        <section class="container">
            <div class="research__cart">
              @foreach ($researchs as $research)
                <div class="research__list__text clearfix">
                    <div class="aboutContint__text">
                        <p>
                            {!! $research->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                </div>
              @endforeach
            </div>
        </section>
    </div>

    <!-- research end -->


    <!-- researchStatistics start -->

    <div class="researchStatistics">
        <section class="container">
            <div class="aboutStatistics__cart">
                <ul class="aboutStatistics__menu">
                    @foreach ($researchstatistics as $researchstatistic)

                    <li>
                        <h2 class="advantages__title__h2 numbers">{{ $researchstatistic->result }}</h2>
                        <div class="advantages__text">
                            <p>{{ $researchstatistic->{'description_' . app()->getLocale()} }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>

    <!-- researchStatistics end -->


    <!-- research start -->

    {{-- <div class="researchAll">
        <section class="container">
            <div class="researchAll__cart">
                <div class="researchAll__cart__item clearfix">
                    <div class="researchAll__imgs">
                        <img src="foto/research_01.png" alt="researchAll">
                    </div>

                    <div class="aboutContint__text">
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi
                        </p>
                    </div>
                </div>

                <div class="research__list">
                    <div class="research__item">
                        <div class="research__item__img">
                            <img src="foto/research_4.png" alt="research">
                        </div>
                        <h3 class="research__title">Research Publications</h3>
                    </div>

                    <div class="research__item">
                        <div class="research__item__img">
                            <img src="foto/research_5.png" alt="research">
                        </div>
                        <h3 class="research__title">Research Seminars</h3>
                    </div>

                    <div class="research__item">
                        <div class="research__item__img">
                            <img src="foto/research_6.png" alt="research">
                        </div>
                        <h3 class="research__title">Research Clusters</h3>
                    </div>
                </div>

                <div class="researchAll__cart__item clearfix">
                    <div class="researchAll__imgsTo">
                        <img src="foto/research_02.png" alt="researchAll">
                    </div>

                    <div class="aboutContint__text">
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}

    <!-- research end -->

@endsection
