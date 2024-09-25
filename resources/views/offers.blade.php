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

<x-miranda-layout title="Offers">
  <main class="offers">
    <section class="offers__rooms">
      @foreach ($rooms as $room)
        <article class="offers__rooms__offer">
          <figure class="offer__image">
            <img src="{{ $room->photos[0] }}" alt="">
          </figure>
          <div class="offer__info">
            <h5 class="offer__info__price offer__info__price--before"><span class="offer__info__price__value">${{ $room->price_night }}</span><span class="offer__info__price__time">/Night</span></h5>
            <h5 class="offer__info__price offer__info__price--after">${{ $room->finalPrice() }}<span class="offer__info__price__time">/Night</span></h5>
            <h5 class="offer__info__subtitle">{{ $room->type }}</h5>
            <h4 class="offer__info__title">{{ $room->name }}</h4>
            <h6 class="offer__info__description">{{ $room->description }}</h6>
            <ul class="offer__info__amenities">
              @foreach ($room->facilities as $facility)
                <li class="offer__info__amenities__item"><img src="{{ $facilityImages[$facility['name']] ?? '/images/default.svg' }}" alt="{{ $facility['name'] }}">{{ $facility['name'] }}</li>
              @endforeach
            </ul>
            <button class="offer__info__button">
              <a href="{{ route('rooms.show', $room->id) }}">Booking Now</a>
            </button>
          </div>
        </article>
      @endforeach
    </section>
    <section class="offers__popular-rooms">
      <h6 class="offers__popular-rooms__subtitle">Popular list</h6>
      <h4 class="offers__popular-rooms__title">Popular Rooms</h4>
      <div class="swiper offers__popular-rooms__slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <article class="popular-rooms__slider__room-card">
              <figure class="popular-rooms__slider__room-card__image">
                <img src="/images/photo_1718983348838.jpg" alt="" />
              </figure>
              <ul class="popular-rooms__slider__room-card__features">
                <li class="feature">
                  <img
                    src="/images/8725460_bed_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/925808_wifi_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/4920723_automobile_car_transport_transportation_travel_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/384878_cold_new year_snowflake_wheather_winter_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/9042522_gym_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/9081473_smoking_no_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/6623006_cocktail_drink_holidays_summer_vacation_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
              </ul>
              <h4 class="popular-rooms__slider__room-card__title" data-field="title">Minimal Duplex Room</h4>
              <h6 class="popular-rooms__slider__room-card__subtitle" data-field="subtitle">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h6>
              <span class="popular-rooms__slider__room-card__price" data-field="price">$345/Night</span>
              <button class="popular-rooms__slider__room-card__button">Booking Now</button>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="popular-rooms__slider__room-card">
              <figure class="popular-rooms__slider__room-card__image">
                <img src="/images/photo_1718983706784.jpg" alt="" />
              </figure>
              <ul class="popular-rooms__slider__room-card__features">
                <li class="feature">
                  <img
                    src="/images/8725460_bed_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/925808_wifi_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/4920723_automobile_car_transport_transportation_travel_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/384878_cold_new year_snowflake_wheather_winter_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/9042522_gym_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/9081473_smoking_no_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/6623006_cocktail_drink_holidays_summer_vacation_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
              </ul>
              <h4 class="popular-rooms__slider__room-card__title" data-field="title">Minimal Duplex Room</h4>
              <h6 class="popular-rooms__slider__room-card__subtitle" data-field="subtitle">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h6>
              <span class="popular-rooms__slider__room-card__price" data-field="price">$345/Night</span>
              <button class="popular-rooms__slider__room-card__button">Booking Now</button>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="popular-rooms__slider__room-card">
              <figure class="popular-rooms__slider__room-card__image">
                <img src="/images/photo_1718982740187.jpg" alt="" />
              </figure>
              <ul class="popular-rooms__slider__room-card__features">
                <li class="feature">
                  <img
                    src="/images/8725460_bed_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/925808_wifi_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/4920723_automobile_car_transport_transportation_travel_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/384878_cold_new year_snowflake_wheather_winter_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/9042522_gym_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature--included">
                  <img
                    src="/images/9081473_smoking_no_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
                <li class="feature feature">
                  <img
                    src="/images/6623006_cocktail_drink_holidays_summer_vacation_icon 1.svg"
                    alt="includes-bed"
                  />
                </li>
              </ul>
              <h4 class="popular-rooms__slider__room-card__title" data-field="title">Minimal Duplex Room</h4>
              <h6 class="popular-rooms__slider__room-card__subtitle" data-field="subtitle">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</h6>
              <span class="popular-rooms__slider__room-card__price" data-field="price">$345/Night</span>
              <button class="popular-rooms__slider__room-card__button">Booking Now</button>
            </article>
          </div>
        </div>
    
        <div class="swiper-button-prev slider__button slider__button--prev"><img src="/images/2849832_arrows_navigation_arrow_left_back_icon 1.svg" alt=""></div>
        <div class="swiper-button-next slider__button slider__button--next"><img src="/images/1.svg" alt=""></div>
      </div>
    </section>
  </main>

  @push('scripts')
    <script src="{{ asset('js/offers.js') }}" defer></script>
  @endpush
</x-miranda-layout>