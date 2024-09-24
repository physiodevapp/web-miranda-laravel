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

<x-miranda-layout>
  <main class="rooms">
    <div class="swiper rooms__slider">
      <div class="swiper-wrapper">
        @foreach ($rooms as $room)
          <div class="swiper-slide">
            <article class="rooms__slider__room-card">
              <figure class="rooms__slider__room-card__image">
                <img src="{{ $room->photos[0] }}" alt="">
              </figure>
              <ul class="rooms__slider__room-card__features">
              @foreach ($similarFacilityImages as $facilityName => $facilityImage)
                @if (in_array($facilityName, array_column($room['facilities'], 'name')) || $facilityName === 'Bed' || $facilityName === 'No Smoking')
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
              <div class="room-card-wrapper">
                <h4 class="rooms__slider__room-card__title" data-field="title">{{ $room->name }}</h4>
                <h6 class="rooms__slider__room-card__subtitle" data-field="subtitle">{{ $room->description }}</h6>
                <h5 class="rooms__slider__room-card__price">${{ $room->price_night }}<span class="room-card__price__time">/Night</span></h5>
                <button class="rooms__slider__room-card__button">
                  <a href="{{ route('rooms.show', $room->id) }}">Booking Now</a>
                </button>
              </div>
            </article>            
          </div>
        @endforeach
      </div>

      <div class="pag-nav-wrapper">
        <div class="swiper-button-prev navigation">
          <img src="/images/Double_Chevron_Left.svg" alt="">
        </div>

        <div class="swiper-pagination pagination"></div>

        <div class="swiper-button-next navigation">
          <img src="/images/Double_Chevron_Right.svg" alt="">
        </div>      
      </div>
    </div>
  </main>

  @push('scripts')
    <script src="{{ asset('js/rooms.js') }}" defer></script>
  @endpush
</x-miranda-layout>