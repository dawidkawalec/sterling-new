"use strict";

jQuery(function ($) {
  // Add custom script here. Please backup the file before editing/modifying. Thanks
  // Run the script once the document is ready
  $(document).ready(function () {
    // jQuery('.collapse').collapse();
    $('.site-hamburger').click(function () {
      $('#nav-icon3').toggleClass('open');
      $('header#hamburger .container .navbar').toggle();
      $('div#main-nav').toggleClass('show');
    });
    $('.produkty-pakiety__switcher .year-tab').on('click', function () {
      $('.produkty-pakiety__switcher .year-tab').addClass('active');
      $('.produkty-pakiety__switcher .month-tab').removeClass('active');
      $('.row-year').show();
      $('.row-month').hide();
    });
    $('.produkty-pakiety__switcher .month-tab').on('click', function () {
      $('.produkty-pakiety__switcher .month-tab').addClass('active');
      $('.produkty-pakiety__switcher .year-tab').removeClass('active');
      $('.row-year').hide();
      $('.row-month').show();
    });
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 35,
      nav: true,
      dots: false,
      navText: ['<img src="/wp-content/themes/sterlink/inc/assets/images/arrow-black.svg" />', '<img src="/wp-content/themes/sterlink/inc/assets/images/arrow-black.svg" />'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 2
        }
      }
    });
  }); // Run the script once the window finishes loading
});