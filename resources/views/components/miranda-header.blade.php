<header class="header">
  <div class="header__info" style="{{ $activePage === 'home' ? 'padding-bottom: 6em;' : '' }}">
    @if($activePage === 'home')
      <h6 class="header__info__subtitle">THE ULTIMATE LUXURY<br> EXPERIENCE</h6>
    @else
      <h6 class="header__info__subtitle">THE ULTIMATE LUXURY EXPERIENCE</h6>
    @endif
    @switch($activePage)
      @case('about')
        <h4 class="header__info__title header__title--home">About Us</h4>
        @break
      @case('rooms.index')
        <h4 class="header__info__title header__title--home">Our Rooms</h4>
        @break
      @case('rooms.show')
        <h4 class="header__info__title header__title--home">Ultimate Room</h4>
        @break
      @case('rooms.indexOffers')
        <h4 class="header__info__title header__title--home">Our Offers</h4>
        @break
      @case('contacts.create')
        <h4 class="header__info__title header__title--home">Get in touch</h4>
        @break
      @default
        <h4 class="header__info__title header__title--home">The Perfect<br>Base For You</h4>
    @endswitch

    @if($activePage === 'home')
      <button class="button button--primary">TAKE A TOUR</button>
      <button class="button button--black">LEARN MORE</button>
    @endif
        
    @if(Route::currentRouteName() !== 'home')
      <nav class="header__info__navbar">
        <ul class="header__info__navbar__pages">
          <li class="page">
            <a href="{{ route('home') }}">Home</a>
          </li>
          <li class="page page--divisor">|</li>
          <li class="page page--active">
            @switch($activePage)
              @case('about')
                About
                @break
              @case('rooms.index')
                Rooms
                @break
              @case('rooms.show')
                Room details
                @break
              @case('rooms.indexOffers')
                Offers
                @break
              @case('contacts.create')
                Contact
                @break
              @default
                {{ $activePage }}
            @endswitch
          </li>
        </ul>
      </nav>
    @endif
  </div>
</header>
