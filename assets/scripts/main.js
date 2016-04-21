/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        $(document).ready(function($){
            var $lateral_menu_trigger = $('#cd-menu-trigger'),
              $content_wrapper = $('.cd-main-content'),
              $navigation = $('header');

            //open-close lateral menu clicking on the menu icon
            $lateral_menu_trigger.on('click', function(event){
              event.preventDefault();
              
              $lateral_menu_trigger.toggleClass('is-clicked');
              $navigation.toggleClass('lateral-menu-is-open');
              $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                $('body').toggleClass('overflow-hidden');
              });
              $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
              
              //check if transitions are not supported - i.e. in IE9
              if($('html').hasClass('no-csstransitions')) {
                $('body').toggleClass('overflow-hidden');
              }
            });

            //close lateral menu clicking outside the menu itself
            $content_wrapper.on('click', function(event){
              if( !$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span') ) {
                $lateral_menu_trigger.removeClass('is-clicked');
                $navigation.removeClass('lateral-menu-is-open');
                $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                  $('body').removeClass('overflow-hidden');
                });
                $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
                //check if transitions are not supported
                if($('html').hasClass('no-csstransitions')) {
                  $('body').removeClass('overflow-hidden');
                }

              }
            });

            //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
            $('.item-has-children').children('a').on('click', function(event){
              event.preventDefault();
              $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
            });
            $('.menu-item-has-children').children('a').on('click', function(event){
              event.preventDefault();
              $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
            });
          });
        $('.owl-carousel').owlCarousel({
            items:1,
            lazyLoad:true,
            loop:true,
            margin:0,
            nav: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        });
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){  
                $('header').addClass("sticky");
              }
              else{
                $('header').removeClass("sticky");
              }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
