@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.extramural_education')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.main')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.extramural_education')</a>
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
                @foreach ($edications as $edication)
                <p>
                    {!! $edication->{'content_' . app()->getLocale()} !!}
                </p>
                @endforeach
            </div>

            <div class="admissionsBachelor__list">
               @foreach ($edicationcategories as $edicationcategory)
                <section class="admissionsBachelor__ietm__cart">
                    <h2 class="about__title__h2">{{ $edicationcategory->{'title_' . app()->getLocale()} }}</h2>

                    <div class="admissionsBachelor__list__item">
                        @foreach ($edicationcategory->edicationins as $edicationin)

                        <div class="admissionsBachelor__item">
                            <div class="educational__img">
                                <img src="{{ asset($edicationin->image) }}" alt="educational">
                            </div>

                            <section class="admissionsBachelor__list__text">
                                <h3 class="educational__title__h3">
                                    {{ $edicationin->{'title_' . app()->getLocale()} }}
                                </h3>

                                <ul class="admissionsBachelor__menu">
                                    <li>
                                        <h4 class="admissionsBachelor__title__h4">
                                            @lang('main.payment_amount_correspondence_course')
                                        </h4>
                                        <h3 class="admissionsBachelor__title__h3"><s>{{ $edicationin->external_shalk_before }}</s></h3>
                                        <h3 class="admissionsBachelor__title__h3">{{ $edicationin->external_shalk_now }}</h3>
                                    </li>
                                </ul>

                                <a href="{{ route('E_reception') }}" class="admissionsBachelor__link">
                                    @lang('main.sign_up')
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
