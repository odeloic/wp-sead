import Swiper from "swiper";
import lightbox from "iframe-lightbox";
var mySwiper = new Swiper(".slider", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination"
    },

    // Navigation arrows
    navigation: {
        nextEl: ".slider-control-button--next",
        prevEl: ".slider-control-button--prev"
    },

    effect: "coverflow",
    autoplay: {
        delay: 5000
    }

    // on: {
    //     slideChange: function () {
    //         /* do something */
    //         console.log(this.slideActiveClass);
    //     },
    // }
});

var activitiesSwiper = new Swiper(".activities-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".slider-control-button--next",
        prevEl: ".slider-control-button--prev"
    },
    breakpoints: {
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        }
      }
});

/* locations hover */

let locations = document.querySelectorAll(".location"),
    locationDataClass = ".location__data",
    locationDataTarget = document.querySelector(".details-placeholder");
// location.addEventListener('mouseover', function () {
//     console.log('Oh okay!');
// })

locations.forEach(function (element, index) {
    let locationData = element.querySelector(locationDataClass);
    element.addEventListener("mouseover", function () {
        locationDataTarget.innerHTML = locationData.innerHTML;
        // locationDataTarget.innerHTML = '';
    });

    element.addEventListener("mouseout", function () {
        locationDataTarget.innerHTML =
            "<p>Hover over province for more information</p>";
        // locationDataTarget.innerHTML = '';
    });
});

[].forEach.call(
    document.getElementsByClassName("iframe-lightbox-link"),
    function (el) {
        el.lightbox = new IframeLightbox(el);
    }
);


/* menu */
const menuIcon = document.querySelector('.menu-icon');
const mobileNavigation = document.querySelector('.mobile-navigation');
const submenu = document.querySelector('.mobile-navigation li.has-sub-menu a');
function closeSubMenu() {
    // eslint-disable-next-line max-len
    const openEl = document.querySelector('.mobile-navigation ul.navigation__sub-menu.expanded');
    // close all expanded menus
    if (openEl) {
        openEl.classList.remove('expanded');
    }
}
if (menuIcon) {
    menuIcon.addEventListener('click', function (e) {
        e.preventDefault();
        closeSubMenu();
        this.classList.toggle('mobile-menu-open');
        mobileNavigation.classList.toggle('mobile-menu-open');
    });
}

if (submenu) {
    submenu.addEventListener('click', function(e) {
        e.preventDefault();
        // expand this el
        const {target: {nextElementSibling: {classList}}} = e;
        classList.toggle('expanded');
        e.stopPropagation();
    });
}

