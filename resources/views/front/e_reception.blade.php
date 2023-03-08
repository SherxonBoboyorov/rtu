@extends('layouts.front')

@section('content')

    <!-- aboutUniversity start -->

    <div class="aboutUniversity">
        <section class="container">
            <div class="aboutUniversity__cart">
                <h2 class="about__title__h2">@lang('main.electronic_reception')</h2>
                <ul class="aboutUniversity__menu">
                    <li>
                        <a href="{{ route('/') }}" class="aboutUniversity__menu__link">@lang('main.dormitory')</a>
                    </li>

                    <li>
                        <a class="aboutUniversity__menu__link">@lang('main.electronic_reception')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- aboutUniversity end -->

      <!-- E-reception start -->
      @include('alert')

      <div class="e_reception">
          <section class="container">
              <div class="e_reception__cart">
                  <form action="{{ route('quotecallbackSave') }}" method="POST" class="e_reception__form">
                      @csrf
                      <input type="text" name="fullname" placeholder="@lang('main.full_name')" class="e_reception__input" required>
                      <input type="date" name="date_of_birth" placeholder="@lang('main.date_of_birth')" class="e_reception__input" required>
                      <input type="text" name="passport_data" placeholder="@lang('main.passport_data')" class="e_reception__input" required>
                      <input type="text" name="address" placeholder="@lang('main.address')" class="e_reception__input" required>
                      <input type="text" name="index" placeholder="@lang('main.index')" class="e_reception__input" required>
                      <input type="email" name="email" placeholder="@lang('main.email')" class="e_reception__input" required>
                      <input type="tel" name="phone_number" placeholder="@lang('main.phone')" class="e_reception__input" required>
                      <textarea class="e_reception__textarea" name="question_text" placeholder="@lang('main.question_text')"></textarea>
                      <label class="input-wrap">
                          <input type="checkbox" class="checkboxNone">
                          <span class="checkmark"></span>
                          <h3 class="e_reception__title__h3">@lang('main.my_personal_data_is_provided_by_me_independently_I_consent_to_their_processing')</h3>
                      </label>
                      <button type="submit" class="e_reception__button buttonDisabled">@lang('main.send')</button>
                  </form>
              </div>
          </section>
      </div>

      <!-- E-reception end -->


    @endsection
