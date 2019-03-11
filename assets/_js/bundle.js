import Swiper from 'swiper';
import lightbox from 'iframe-lightbox';
import IframeLightbox from 'iframe-lightbox';

// initialize home slider
new Swiper('.slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.slider-control-button--next',
    prevEl: '.slider-control-button--prev',
  },

  effect: 'coverflow',
  autoplay: {
    delay: 5000,
  },

  // on: {
  //     slideChange: function () {
  //         /* do something */
  //         console.log(this.slideActiveClass);
  //     },
  // }
});

new Swiper('.activities-slider', {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.slider-control-button--next',
    prevEl: '.slider-control-button--prev',
  },
});

/* locations hover */

let locations = document.querySelectorAll('.location');
let locationDataClass = '.location__data';
let locationDataTarget = document.querySelector('.details-placeholder');
// location.addEventListener('mouseover', function () {
//     console.log('Oh okay!');
// })

locations.forEach(function (element, index) {
  let locationData = element.querySelector(locationDataClass);
  element.addEventListener('mouseover', function () {
    locationDataTarget.innerHTML = locationData.innerHTML;
    // locationDataTarget.innerHTML = '';
  });

  element.addEventListener('mouseout', function () {
    locationDataTarget.innerHTML =
      '<p>Hover Over Province for more information</p>';
    // locationDataTarget.innerHTML = '';
  });
});

[].forEach.call(
  document.getElementsByClassName('iframe-lightbox-link'),
  function (el) {
    el.lightbox = new IframeLightbox(el);
  }
);
