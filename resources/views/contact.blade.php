<x-miranda-layout  title="Contact">
  @if (session('success'))
      <script>
          document.addEventListener('DOMContentLoaded', function () {
              Toastify({
                  text: "{{ session('success') }}",
                  duration: 3000,
                  close: false,
                  gravity: "top",
                  position: 'right',
                  style: {
                    background: "#BDAC8D",
                  }
              }).showToast();
          });
      </script>
  @endif

  <main class="contact">
    <ul class="contact__list">
      <li class="contact__list__item">
        <img class="contact__list__item__image" src="./assets/images/icon 9.svg" alt="">
        <div class="list__item__wrapper">
          <h6 class="list__item__wrapper__title">Hotel Address</h6>
          <p class="list__item__wrapper__subtitle">19/A, Cirikon City hall Tower New York, NYC</p>
          <p class="list__item__wrapper__number">01</p>
        </div>
      </li>
      <li class="contact__list__item">
        <img class="contact__list__item__image" src="./assets/images/svg-gobbler - 2022-03-02T152425.400 1.svg" alt="">
        <div class="list__item__wrapper">
          <h6 class="list__item__wrapper__title">Phone Number</h6>
          <p class="list__item__wrapper__subtitle">+ 97656 8675 7864 7 </p>
          <p class="list__item__wrapper__subtitle">+ 97656 8675 7864 7 </p>
          <p class="list__item__wrapper__number">02</p>
        </div>
      </li>
      <li class="contact__list__item">
        <img class="contact__list__item__image" src="./assets/images/icon 10.svg" alt="">
        <div class="list__item__wrapper">
          <h6 class="list__item__wrapper__title">Email</h6>
          <p class="list__item__wrapper__subtitle">info@webmail.com </p>
          <p class="list__item__wrapper__subtitle">info@webmail.com </p>
          <p class="list__item__wrapper__number">03</p>
        </div>
      </li>
    </ul>
    <section class="contact__maps">
      <div class="swiper contact__maps__slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <article class="maps__slider">
              <figure class="maps__slider__image">
                <img src="https://miro.medium.com/v2/resize:fit:1400/1*qYUvh-EtES8dtgKiBRiLsA.png" alt="" />
              </figure>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="maps__slider">
              <figure class="maps__slider__image">
                <img src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/191:100/w_1280,c_limit/GoogleMapTA.jpg" alt="" />
              </figure>
            </article>
          </div>
        </div> 
  
        <div class="swiper-pagination"></div> 
      </div>
    </section>
    <form id="contact-form" class="contact__form" method="post" action="{{ route('contacts.store') }}">
      @csrf

      <input class="contact__form__name" type="text" name="first_name" id="" placeholder="Your full name" style="background-image: url('./assets/images/392531_account_friend_human_man_member_icon\ 1 (1).svg');">
      <input class="contact__form__phone" type="number" name="phone" id="" placeholder="Add phone number" style="background-image: url('./assets/images/2703069_phone_cell_contact_telephone_icon\ 1.svg');">
      <input class="contact__form__email" type="email" name="email" id="" placeholder="Enter email address" style="background-image: url('./assets/images/1904660_email_envelope_letter_mail_message_icon\ 1.svg');">
      <input class="contact__form__subject" type="text" name="subject" id="" placeholder="Enter subject" style="background-image: url('./assets/images/svg-gobbler\ -\ 2022-03-03T212453.252\ 2.svg');">
      <textarea name="message" id="" placeholder="Enter message" rows="4" style="background-image: url('./assets/images/622400_pen_pencil_edit_write_writing_icon\ 1.svg');"></textarea>
      <button class="contact__form__button" type="submit">Send</button>
    </form>
  </main>

  @push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
  @endpush
</x-miranda-layout>