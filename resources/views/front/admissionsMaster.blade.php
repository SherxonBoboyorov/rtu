@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">Master</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">Master</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->

  <!-- admissionsBachelor start -->

  <div class="admissionsBachelor">
    <section class="container">
        <div class="admissionsBachelor__cart">

            <div class="aboutContint__text">
                @foreach ($admissionmasters as $admissionmaster)
                <p>
                    {!! $admissionmaster->{'content_' . app()->getLocale()} !!}
                </p>
                @endforeach
            </div>

            <div class="admissionsBachelor__list">
               @foreach ($admissionmastercategories as $admissionmastercategory)
                <section class="admissionsBachelor__ietm__cart">
                    <h2 class="about__title__h2">{{ $admissionmastercategory->{'title_' . app()->getLocale()} }}</h2>

                    <div class="admissionsBachelor__list__item">
                        @foreach ($admissionmastercategory->admissionmasterins as $admissionmasterin)

                        <div class="admissionsBachelor__item">
                            <div class="educational__img">
                                <img src="{{ asset($admissionmasterin->image) }}" alt="educational">
                            </div>

                            <section class="admissionsBachelor__list__text">
                                <h3 class="educational__title__h3">
                                    {{ $admissionmasterin->{'title_' . app()->getLocale()} }}
                                </h3>

                                <ul class="admissionsBachelor__menu">
                                    <li>
                                        <h4 class="admissionsBachelor__title__h4">
                                            To’lov miqdori (kunduzgi shakl)
                                        </h4>
                                        <h3 class="admissionsBachelor__title__h3"><s>{{ $admissionmasterin->daytime_shalk_before }} so’m</s></h3>
                                        <h3 class="admissionsBachelor__title__h3">{{ $admissionmasterin->daytime_shalk_now }} so’m</h3>
                                    </li>

                                    <li>
                                        <h4 class="admissionsBachelor__title__h4">
                                            To’lov miqdori (kunduzgi shakl)
                                        </h4>
                                        <h3 class="admissionsBachelor__title__h3"><s>{{ $admissionmasterin->evening_shalk_before }} so’m</s></h3>
                                        <h3 class="admissionsBachelor__title__h3">{{ $admissionmasterin->evening_shalk_now }} so’m</h3>
                                    </li>

                                    <li>
                                        <h4 class="admissionsBachelor__title__h4">
                                            To’lov miqdori (kunduzgi shakl)
                                        </h4>
                                        <h3 class="admissionsBachelor__title__h3"><s>{{ $admissionmasterin->external_shalk_before }}so’m</s></h3>
                                        <h3 class="admissionsBachelor__title__h3">{{ $admissionmasterin->external_shalk_now }} so’m</h3>
                                    </li>
                                </ul>

                                <a href="{{ route('E_reception') }}" class="admissionsBachelor__link">
                                    Ro’yxatdan o’ting
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </section>
                        </div>
                        @endforeach
                    </div>
                 </section>
                @endforeach
            </div>
        </div>
    </section>
</div>

<!-- admissionsBachelor end -->

@endsection
