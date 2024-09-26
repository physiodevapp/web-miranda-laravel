
const swiperRooms = new Swiper(".swiper.home__rooms__popular-rooms__slider", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    100: {
      slidesPerView: 1, 
      grid: {
        fill:	'row',
        rows: 1,
      },
    },
    1000: {
      spaceBetween: 20,
      slidesPerView: 3, 
      grid: {
        fill:	'row',
        rows: 1,
      },
    }
  },
});
const swiperFacilities = new Swiper(".swiper.home__facilities__slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  breakpoints: {
    100: {
      slidesPerView: 1, 
      grid: {
        fill:	'row',
        rows: 1,
      },
    },
    1000: {
      spaceBetween: 20,
      slidesPerView: 3, 
      grid: {
        fill:	'row',
        rows: 2,
      },
    }
  },
});
const swiperMenu = new Swiper(".swiper.home__menu__slider", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    100: {
      slidesPerView: 1, 
      grid: {
        fill:	'row',
        rows: 3,
      },
    },
    1000: {
      spaceBetween: 20,
      slidesPerView: 2, 
      grid: {
        fill:	'row',
        rows: 3,
      },
    }
  },
});
const swiperGallery = new Swiper(".swiper.home__gallery__slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  breakpoints: {
  100: {
    slidesPerView: 1, 
    grid: {
      fill:	'row',
      rows: 1,
    },
  },
  1000: {
    spaceBetween: 20,
    slidesPerView: 3, 
    grid: {
      fill:	'row',
      rows: 1,
    },
  }
},
});

const locales = "en-US";

const todayDate = new Date().toLocaleDateString(locales, {
  day: "numeric",
  year: "numeric",
  month: "short"
});
const nextDate = new Date(new Date().setDate(new Date().getDate() + 7)).toLocaleDateString(locales, {
  day: "numeric",
  year: "numeric",
  month: "short"
});

const arrivalButton = document.getElementById("arrival-date-button");
const arrivalDateInput = document.getElementById("arrival-date-input"); 
const arrivalTextInput = document.getElementById("arrival-text-input");
arrivalTextInput.setAttribute("placeholder", todayDate);

const departureButton = document.getElementById("departure-date-button");
const departureDateInput = document.getElementById("departure-date-input"); 
const departureTextInput = document.getElementById("departure-text-input");
departureTextInput.setAttribute("placeholder", nextDate);

const setDefaultDepartureDate = () => {
  const today = new Date();

  // Add 7 days to today's date
  today.setDate(today.getDate() + 7);

  // Format the date as YYYY-MM-DD
  const year = today.getFullYear();
  const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
  const day = String(today.getDate()).padStart(2, '0');

  const formattedDate = `${year}-${month}-${day}`;

  // Set the default value of the date input
  departureDateInput.value = formattedDate;
}

const formatDate = (datePicker, formattedDateInput) => {

  const date = new Date(datePicker.value);

  if (isNaN(date)) return;
  
  const options = { year: 'numeric', month: 'short', day: 'numeric' };
  const formattedDate = date.toLocaleDateString(locales, options);

  formattedDateInput.placeholder = formattedDate;
}

const handleClickArrivalButton = (event) => {
  event.preventDefault();
  
  try {
    arrivalDateInput.showPicker();
  } catch (error) {
    console.log(error)
  }
};
const handleArrivalDateInputChange = () => {
  formatDate(arrivalDateInput, arrivalTextInput)
}

arrivalButton.addEventListener("click", handleClickArrivalButton);
arrivalDateInput.addEventListener("change", handleArrivalDateInputChange);

const handleClickDepartureButton = (event) => {
  event.preventDefault();

  try {
    departureDateInput.showPicker();
  } catch (error) {
    console.log(error)
  }
};
const handleDepartureDateInputChange = () => {
  formatDate(departureDateInput, departureTextInput)
};

departureButton.addEventListener("click", handleClickDepartureButton);
departureDateInput.addEventListener("change", handleDepartureDateInputChange);

const facilitiesSliders = document.querySelectorAll(".home__facilities__slider .swiper-wrapper .facilities__slider__number");
facilitiesSliders.forEach((htmlElement, index) => htmlElement.innerHTML = index < 10 ? `0${index + 1}` : index);

window.onload = setDefaultDepartureDate;