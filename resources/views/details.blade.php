@php
    $facilityImages = [
        'Air conditioner' => '/images/svg-gobbler - 2022-03-03T180356.761 1 (1).svg',
        'High speed WiFi' => '/images/svg-gobbler - 2022-03-03T180356.761 1.svg',
        'Breakfast' => '/images/svg-gobbler - 2022-03-03T175828.668 1.svg',
        'Kitchen' => '/images/svg-gobbler - 2022-03-03T180356.761 1 (2).svg',
        'Cleaning' => '/images/svg-gobbler - 2022-03-03T175907.963 1.svg',
        'Shower' => '/images/svg-gobbler - 2022-03-03T180356.761 1 (3).svg',
        'Grocery' => '/images/svg-gobbler - 2022-03-03T175828.668 1 (1).svg',
        'Single bed' => '/images/svg-gobbler - 2022-03-03T182946.721 1.svg',
        'Shop near' => '/images/svg-gobbler - 2022-03-03T175828.668 1 (2).svg',
        'Towels' => '/images/svg-gobbler - 2022-03-03T180356.761 1 (4).svg',
        '24/7 Online Support' => '/images/svg-gobbler - 2022-03-03T183514.620 1.svg',
        'Strong Locker' => '/images/svg-gobbler - 2022-03-03T183336.988 1.svg',
        'Smart Security' => '/images/svg-gobbler - 2022-03-03T183435.137 1.svg',
        'Expert Team' => '/images/svg-gobbler - 2022-03-03T183600.191 1.svg',
    ];
@endphp

@php
  $similarFacilityImages = [
    'Bed' => '/images/8725460_bed_icon 1.svg',
    'High speed WiFi' => '/images/925808_wifi_icon 1.svg',
    'Car' => '/images/4920723_automobile_car_transport_transportation_travel_icon 1.svg',
    'Snowflake' => '/images/384878_cold_new year_snowflake_wheather_winter_icon 1.svg',
    'Gym' => '/images/9042522_gym_icon 1.svg',
    'No Smoking' => '/images/9081473_smoking_no_icon 1.svg',
    'Cocktail' => '/images/6623006_cocktail_drink_holidays_summer_vacation_icon 1.svg',
  ];
@endphp

<x-miranda-layout title="Room Details">
  <main class="details">
    <section class="details__room">
      <div class="details__room__info">
        <h6 class="details__room__info__subtitle">{{ $room->type }}</h6>
        <h4 class="details__room__info__title">{{ $room->name }}</h4>
        <h5 class="details__room__info__price">${{ $room->finalPrice() }}<span class="details__room__info__price__time">/Night</span></h5>
      </div>
      <div class="details__room__booking">
        <figure class="details__room__booking__image">
          <img src="{{ $room->photos[0] }}" alt="">
        </figure>
        <form action="" class="details__room__booking__form">
          <label for="arrival-date-input" class="details__room__booking__form__label">Check In</label>
          <div class="date-wrapper">
            <input id="arrival-date-input" name="arrival-date" class="date-wrapper__date-input" type="date">
            <input id="arrival-text-input" name="arrival-text" class="date-wrapper__text-input" type="text">
            <button id="arrival-date-button" class="date-wrapper__button-picker">
              <img src="/images/7853753_event_kashifarif_calendar_schedule_appoinment_icon 1 (1).svg" alt="">
            </button>
          </div>
          <label for="departure-date-input" class="details__room__booking__form__label">Check Out</label>
          <div class="date-wrapper">
            <input id="departure-date-input" name="departure-date" class="date-wrapper__date-input" type="date">
            <input id="departure-text-input" name="departure-text" class="date-wrapper__text-input" type="text">
            <button id="departure-date-button" class="date-wrapper__button-picker">
              <img src="/images/7853753_event_kashifarif_calendar_schedule_appoinment_icon 1 (1).svg" alt="">
            </button>
          </div>
          <button class="details__room__booking__form__button">Check Availability</button>
        </form>
      </div>
    </section>
    <section class="details__availability">
      <p class="details__availability__terms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </section>
    <section class="details__amenities">
      <h4 class="details__amenities__title">Amenities</h4>
      <ul class="details__amenities__list">
        @foreach ($room->facilities as $facility)
          <li class="details__amenities__list__item">
            <img src="{{ $facilityImages[$facility['name']] ?? '/images/default.svg' }}" alt="{{ $facility['name'] }}">
            {{ $facility['name'] }}
          </li>
        @endforeach
      </ul>
    </section>
    <section class="details__founder">
      <div class="details__founder__image-wrapper">
        <div class="founder__badge-wrapper">
          <img class="founder__badge-wrapper__image" src="/images/8665019_check_mark_icon 1.svg" alt="">
        </div>
        <img class="founder__image" src="https://avatars.githubusercontent.com/u/69968873?v=4" alt="">
      </div>
      <h4 class="details__founder__title">Eduardo G. Rodríguez</h4>
      <h6 class="details__founder__subtitle">Founder, Qux Co.</h6>
      <p class="details__founder__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </section>
    <section class="details__policy">
      <h4 class="details__policy__title">Cancellation</h4>
      <p class="details__policy__description">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </section>
    <section class="details__related-rooms">
      <h4 class="details__related-rooms__title">Related Rooms</h4>
      <div class="swiper details__related-rooms__slider">
        <div class="swiper-wrapper">
          @foreach($similarRooms as $similarRoom)
            <div class="swiper-slide">
              <article class="related-rooms__slider__room-card">
                <figure class="related-rooms__slider__room-card__image">
                  <img src="{{ $similarRoom->photos[0] }}" alt="" />
                </figure>
                <ul class="related-rooms__slider__room-card__features">
                  @foreach ($similarFacilityImages as $facilityName => $facilityImage)
                    @if (in_array($facilityName, array_column($similarRoom['facilities'], 'name')) || $facilityName === 'Bed' || $facilityName === 'No Smoking')
                      <li class="feature feature--included">
                        <img src="{{ $facilityImage }}" alt="{{ $facilityName }}">
                      </li>
                    @else
                      <li class="feature">
                        <img src="{{ $facilityImage }}" alt="{{ $facilityName }}">
                      </li>
                    @endif
                  @endforeach                  
                </ul>
                <h4 class="related-rooms__slider__room-card__title" data-field="title">{{ $similarRoom->name }}</h4>
                <h6 class="related-rooms__slider__room-card__subtitle" data-field="subtitle">{{ $similarRoom->description }}</h6>
                <span class="related-rooms__slider__room-card__price" data-field="price">${{ $similarRoom->finalPrice() }}/Night</span>
                <button class="related-rooms__slider__room-card__button">Booking Now</button>
              </article>
            </div>
          @endforeach
        </div>
        <div class="swiper-button-prev slider__button slider__button--prev"><img src="/images/2849832_arrows_navigation_arrow_left_back_icon 1.svg" alt=""></div>
        <div class="swiper-button-next slider__button slider__button--next"><img src="/images/1.svg" alt=""></div>
      </div>
    </section>
  </main>

  @push('scripts')
    <script src="{{ asset('js/details.js') }}" defer></script>
  @endpush
</x-miranda-layout>