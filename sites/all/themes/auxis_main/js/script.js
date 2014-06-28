/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.

      jQuery(function () {
          jQuery('nav#main-mmenu').mmenu({
          });
      });

      jQuery('nav#main-dkp-menu').accessibleMegaMenu({
          /* prefix for generated unique id attributes, which are required
           to indicate aria-owns, aria-controls and aria-labelledby */
          uuidPrefix: "accessible-megamenu",

          /* css class used to define the megamenu styling */
          menuClass: "nav-menu",

          /* css class for a top-level navigation item in the megamenu */
          topNavItemClass: "nav-item",

          /* css class for a megamenu panel */
          panelClass: "sub-nav",

          /* css class for a group of items within a megamenu panel */
          panelGroupClass: "sub-nav-group",

          /* css class for the hover state */
          hoverClass: "hover",

          /* css class for the focus state */
          focusClass: "focus",

          /* css class for the open state */
          openClass: "open"
      });

      jQuery('.carousel').carousel();

      // Function to load the title and sub tile in the front end slider
      jQuery( '#carousel-slider-generic' ).each(function( index ) {
          var title = jQuery(this).find("img").attr("title");
          var sub_title = jQuery(this).find("img").attr("alt");
          if (title.length > 0) {
              jQuery(this).find("h1").html(title);
              jQuery(this).find("h2").html(sub_title);
          } else {
              jQuery(this).find(".carousel-caption").addClass('hide');
          }
      });
  }
};

})(jQuery, Drupal, this, this.document);
