var swiper = new Swiper(".claire-service-small", {
  loop: true,
  autoplay: false,
  spaceBetween: 10,
  slidesPerView: 3,
 
  breakpoints: {
    500: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 15,
    },
  },
});

var swiper = new Swiper(".claire-service-full", {
  loop: true,
  zoom: false,
  autoplay: false,
  spaceBetween: 0,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },

});

var swiper = new Swiper(".claire-project", {
  slidesPerView: 2,
  loop: true,
  autoplay: false,
  spaceBetween: 10,
  centeredSlides: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },

});


var swiper = new Swiper(".claire_team", {
  slidesPerView: 3,
  spaceBetween: 20,
  autoplay: true,
  infinite: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },

    360: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    768: {
      slidesPerView: 4,
      spaceBetween: 20,
    },


    1024: {
      slidesPerView: 4,
      spaceBetween: 20,

    },
  },
});



const toggleMenuClicked = () => {
  const body = document.body;
  const openIcon = document.getElementById("open-icon");
  const closeIcon = document.getElementById("close-icon");

  body.classList.toggle("open");

  if (body.classList.contains("open")) {
    openIcon.style.display = "none";
    closeIcon.style.display = "flex";
  } else {
    openIcon.style.display = "flex";
    closeIcon.style.display = "none";
  }
};