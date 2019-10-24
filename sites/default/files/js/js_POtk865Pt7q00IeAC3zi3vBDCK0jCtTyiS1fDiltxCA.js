/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {
      $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
      });

    }
  };

})(jQuery, Drupal);
;
