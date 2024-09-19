<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Hotel Miranda' }}</title>
    
    <!-- Global -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/toastify.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js" defer integrity="sha512-F5Ul1uuyFlGnIT1dk2c4kB4DBdi5wnBJjVhL7gQlGh46Xn0VhvD8kgxLtjdZ5YN83gybk/aASUAlpdoWUjRR3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/toastify.min.js"></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>

    <!-- Additional -->
    @stack('styles')
    @stack('scripts')
  </head> 
  <body>
    <nav class="navbar">
      <p class="navbar__message">We Make Your Feel Comfortable</p>
      <div class="navbar__wrapper">
        <button id="menu-button" class="navbar__button">
          <img id="menu-button-open" class="navbar__button__image show" src="/images/1 (1).svg" alt="">
          <img id="menu-button-close" class="navbar__button__image" src="/images/1 (2).svg" alt="">
        </button>
        <div class="navbar__brand">
          <img class="navbar__brand__logo" src="/images/H.svg" alt="">
          <img class="navbar__brand__title" src="/images/Hotel Miranda.svg" alt="">
        </div>
        <ul id="navbar-menu" class="navbar__menu">
          <li class="navbar__menu__link">
            <a href="/about.html">About Us</a>
          </li>
          <li class="navbar__menu__link">
            <a href="/rooms.html">Rooms</a>
          </li>
          <li class="navbar__menu__link">
            <a href="/offers.html">Offers</a>
          </li>
          <li class="navbar__menu__link">
            <a href="{{ route('contacts.create') }}">Contact</a>
          </li>
        </ul>
        <button class="navbar__button">
          <img src="/images/392531_account_friend_human_man_member_icon 1.svg" alt="">
        </button>
        <button class="navbar__button">
          <img src="/images/4092559_search_magnifier_mobile ui_zoom_icon 1.svg" alt="">
        </button>
      </div>
    </nav>
    <header class="header">
      <div class="header__info" style="padding-bottom: 6em;">
        <h6 class="header__info__subtitle">THE ULTIMATE LUXURY<br> EXPERIENCE</h6>
        <h4 class="header__info__title header__title--home">The Perfect<br>Base For You</h4>
        <button class="button button--primary">TAKE A TOUR</button>
        <button class="button button--black">LEARN MORE</button>
      </div>
    </header>
    {{ $slot }}
    <footer class="footer" style="background-image: url('/images/Rectángulo\ 2\ 1.svg');">
      <div class="footer__wrapper">
        <div class="footer__brand-media__wrapper">
          <article class="footer__brand">
            <div class="footer__brand__logo">
              <span class="footer__brand__logo__image">H</span>
              <div class="footer__brand__logo__title-wrapper">
                <h4 class="brand__title-wrapper__title hotel__title-wrapper__title--bold">hotel</h4>
                <h4 class="brand__title-wrapper__title">miranda</h4>
              </div>
            </div>
            <p class="footer__brand__description">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
          </article>
          <ul class="footer__social-media">
            <li class="footer__social-media__icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_54_1197)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H16.0771V14.9571H19.199L19.793 11.0843H16.0771V8.57095C16.0771 7.51144 16.5961 6.47864 18.2605 6.47864H19.95V3.18145C19.95 3.18145 18.4167 2.9198 16.9508 2.9198C13.8905 2.9198 11.8902 4.77459 11.8902 8.13248V11.0843H8.48836V14.9571H11.8902V24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z" fill="#777777"/>
                </g>
                <defs>
                <clipPath id="clip0_54_1197">
                <rect width="24" height="24" fill="white"/>
                </clipPath>
                </defs>
              </svg>
            </li>
            <li class="footer__social-media__icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_54_1199)">
                <path d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_54_1199">
                <rect width="24" height="24" fill="white"/>
                </clipPath>
                </defs>
                </svg>
            </li>
            <li class="footer__social-media__icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM21.3605 15.4995C21.4035 14.8515 21.3508 14.2328 21.2008 13.6404C21.0494 13.047 20.8066 12.518 20.4667 12.0556C20.1263 11.5922 19.6927 11.2221 19.1646 10.9487C18.6338 10.6718 18.0156 10.536 17.3091 10.536C16.6691 10.536 16.0912 10.6496 15.5671 10.8755C15.0435 11.1027 14.5939 11.4134 14.2144 11.8071C13.8359 12.1985 13.5474 12.6653 13.3397 13.2064C13.1355 13.7456 13.0312 14.3288 13.0312 14.9532C13.0312 15.5989 13.1316 16.1949 13.3308 16.7332C13.5323 17.2742 13.815 17.7349 14.1789 18.1245C14.5526 18.5129 14.9964 18.8102 15.5276 19.0228C16.0593 19.2323 16.6514 19.3388 17.3091 19.3388C18.253 19.3388 19.0625 19.1227 19.7269 18.6891C20.3993 18.2568 20.8914 17.5392 21.2163 16.534H19.1961C19.118 16.7923 18.9156 17.0413 18.5832 17.2742C18.2477 17.5077 17.8483 17.6244 17.3858 17.6244C16.7423 17.6244 16.2457 17.4558 15.9018 17.1203C15.5574 16.7847 15.3346 16.1599 15.3346 15.4995H21.3605ZM8.21423 19.1227C8.73173 19.1227 9.23634 19.0575 9.72225 18.9287C10.214 18.7996 10.652 18.6007 11.0341 18.3305C11.4132 18.0624 11.7207 17.715 11.9466 17.2862C12.1707 16.8624 12.2826 16.3591 12.2826 15.7742C12.2826 15.0526 12.1108 14.4375 11.7607 13.9231C11.4123 13.4123 10.8859 13.0532 10.1772 12.8491C10.6978 12.6023 11.0879 12.285 11.3532 11.898C11.6173 11.5102 11.7487 11.0251 11.7487 10.4446C11.7487 9.90802 11.6603 9.45403 11.485 9.09145C11.3048 8.72353 11.0532 8.4315 10.7319 8.2118C10.4053 7.99214 10.0196 7.83192 9.56695 7.73606C9.11203 7.63711 8.61408 7.58963 8.06245 7.58963H2.625V19.1227H8.21423ZM7.92487 13.9826C8.4712 13.9826 8.91544 14.1082 9.24919 14.3611C9.58158 14.6172 9.74934 15.0397 9.74934 15.6339C9.74934 15.9371 9.70008 16.1883 9.59756 16.3818C9.49547 16.5761 9.35437 16.7297 9.18483 16.8415C9.01439 16.9578 8.81334 17.0368 8.58614 17.0861C8.36245 17.1362 8.12456 17.1584 7.87472 17.1584H5.16398V13.9826H7.92487ZM18.5375 12.7324C18.2646 12.4311 17.8035 12.2677 17.2402 12.2677C16.8737 12.2677 16.5705 12.3294 16.3274 12.455C16.0895 12.5793 15.8951 12.7333 15.7464 12.9152C15.5982 13.0998 15.4979 13.2951 15.4389 13.5037C15.3803 13.707 15.3448 13.8911 15.3346 14.054H19.0661C19.0115 13.4691 18.8113 13.0364 18.5375 12.7324ZM7.54008 9.5543C7.76512 9.55434 7.98394 9.57028 8.19338 9.61111C8.40595 9.64795 8.5897 9.71541 8.75212 9.81352C8.91544 9.90802 9.04547 10.0425 9.14353 10.2147C9.23808 10.3869 9.28467 10.6088 9.28467 10.8768C9.28467 11.3606 9.14353 11.7125 8.85155 11.926C8.55642 12.1425 8.18363 12.2491 7.73405 12.2491H5.16398V9.5543H7.54008ZM19.54 9.50152V8.36358H14.865V9.50152H19.54Z" fill="#777777"/>
              </svg>
            </li>
            <li class="footer__social-media__icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6477 10.6753V10.6387C12.6401 10.651 12.632 10.6634 12.6239 10.6753H12.6477Z" fill="#777777"/>
                <path d="M21.782 0H1.73748C0.778081 0 0 0.759521 0 1.6956V21.9747C0 22.9103 0.778081 23.6698 1.73748 23.6698H21.782C22.7428 23.6698 23.5209 22.9098 23.5209 21.9747V1.6956C23.5209 0.759045 22.7423 0 21.782 0ZM7.12931 19.8146H3.57679V9.12662H7.12931V19.8146ZM5.35329 7.66659H5.32949C4.13787 7.66659 3.36692 6.84568 3.36692 5.82014C3.36692 4.77175 4.16166 3.97368 5.37661 3.97368C6.59203 3.97368 7.33965 4.77175 7.36345 5.82014C7.36345 6.84568 6.59156 7.66659 5.35329 7.66659ZM19.9398 19.8146H16.3873V14.0954C16.3873 12.6592 15.8733 11.6788 14.5879 11.6788C13.6067 11.6788 13.0223 12.3398 12.7648 12.9785C12.6711 13.2064 12.6482 13.5253 12.6482 13.8451V19.8142H9.09569C9.09569 19.8142 9.14233 10.1279 9.09569 9.12615H12.6482V10.639C13.1203 9.91089 13.9645 8.87393 15.8505 8.87393C18.1876 8.87393 19.9403 10.402 19.9403 13.6852V19.8146H19.9398Z" fill="#777777"/>
              </svg>
            </li>
            <li class="footer__social-media__icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_54_1189)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM20.085 8.23266C19.8909 7.50661 19.3192 6.93483 18.5931 6.74081C17.277 6.38812 12 6.38812 12 6.38812C12 6.38812 6.72305 6.38812 5.40689 6.74081C4.68098 6.93483 4.10911 7.50661 3.91505 8.23266C3.5625 9.54867 3.5625 12.2945 3.5625 12.2945C3.5625 12.2945 3.5625 15.0402 3.91505 16.3561C4.10911 17.0821 4.68098 17.6541 5.40689 17.8481C6.72305 18.2006 12 18.2006 12 18.2006C12 18.2006 17.277 18.2006 18.5931 17.8481C19.3192 17.6541 19.8909 17.0821 20.085 16.3561C20.4375 15.0402 20.4375 12.2945 20.4375 12.2945C20.4375 12.2945 20.4375 9.54867 20.085 8.23266ZM10.3124 14.8258V9.76317L14.6966 12.2945L10.3124 14.8258Z" fill="#777777"/>
                </g>
                <defs>
                <clipPath id="clip0_54_1189">
                <rect width="24" height="24" fill="white"/>
                </clipPath>
                </defs>
              </svg>
            </li>
          </ul>
        </div>
        <article class="footer__services">
          <h4 class="footer__services__title">Services.</h4>
          <ul class="footer__services__list">
            <li class="footer__services__list__item">+ Resturent & Bar</li>
            <li class="footer__services__list__item">+ Swimming Pool</li>
            <li class="footer__services__list__item">+ Wellness & Spa</li>
            <li class="footer__services__list__item">+ Restaurant</li>
            <li class="footer__services__list__item">+ Conference Room</li>
            <li class="footer__services__list__item">+ Coctail Party House</li>
            <li class="footer__services__list__item">+ Gaming Zone</li>
            <li class="footer__services__list__item">+ Marrige Party</li>
            <li class="footer__services__list__item">+ Party Planning</li>
            <li class="footer__services__list__item">+ Tour Consultancy</li>
          </ul>
        </article>
        <article class="footer__contact">
          <h4 class="footer__contact__title">Contact Us.</h4>
          <ul class="footer__contact__list">
            <li class="footer__contact__list__item">
              <img class="footer__contact__list__item__image" src="/images/svg-gobbler - 2022-03-02T152425.400 1.svg" alt="">
              <div class="contact__list__item__wrapper">
                <h6 class="contact__list__item__wrapper__title">Phone Number</h6>
                <p class="contact__list__item__wrapper__subtitle">+987 876 765 76 577</p>
              </div>
            </li>
            <li class="footer__contact__list__item">
              <img class="footer__contact__list__item__image" src="/images/icon 9.svg" alt="">
              <div class="contact__list__item__wrapper">
                <h6 class="contact__list__item__wrapper__title">Phone Number</h6>
                <p class="contact__list__item__wrapper__subtitle">+987 876 765 76 577</p>
              </div>
            </li>
            <li class="footer__contact__list__item">
              <img class="footer__contact__list__item__image" src="/images/icon 10.svg" alt="">
              <div class="contact__list__item__wrapper">
                <h6 class="contact__list__item__wrapper__title">Phone Number</h6>
                <p class="contact__list__item__wrapper__subtitle">+987 876 765 76 577</p>
              </div>
            </li>
          </ul>
        </article>
      </div>
      <article class="footer__copyright">
        <div class="footer__copyright__wrapper">
          <p class="footer__copyright__paragraph">Copyright By <a href="https://github.com/physiodevapp">@Edu Gamboa - 2024</a></p>
          <p class="footer__copyright__paragraph">Terms of use | Privacy Environmental Policy</p>
        </div>
      </article>
    </footer>
  </body>
</html>