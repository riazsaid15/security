/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {
      $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        if (!$('#superfish-main--2-accordion').hasClass('sf-expanded')) {
          $('#superfish-main--2-toggle').click().hide();
        }
        if (!$('#superfish-main-navigation-2--2-accordion').hasClass('sf-expanded')) {
          $('#superfish-main-navigation-2--2-toggle').click().hide();
        }
      });
      $('button.navbar-toggler').click(function () {
        if (!$('#superfish-main-accordion').hasClass('sf-expanded')) {
          $('#superfish-main-toggle').click().hide();
        }
      });
      $('button.navbar-toggler').click(function () {
        if (!$('#superfish-main-navigation-2-accordion').hasClass('sf-expanded')) {
          $('#superfish-main-navigation-2-toggle').click().hide();
        }
      });
      



    }
  };

})(jQuery, Drupal);
;
