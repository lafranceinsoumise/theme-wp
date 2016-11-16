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
  var initMasonry = function() {
    $elem = $('.blog, .archive, .category, .search')
      .find('.page-content')
      .add('.widget_siteorigin-panels-postloop');
    $elem.each(function(index, elem) {
      var $grid = new Masonry(elem, {
        itemSelector: 'article',
        percentPosition: true
      });
      $elem.imagesLoaded().progress(function() {
        $grid.layout();
      });
    });
  };

  // from https://css-tricks.com/NetMag/FluidWidthVideo/Article-FluidWidthVideo.php
  var responsiveVideo = function() {
    // Find all YouTube videos
    var $allVideos = $("iframe[src*='//www.youtube.com'], " +
      "iframe[src*='//www.facebook.com'], " +
      "iframe[src*='//www.dailymotion.com']");
    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {
      $(this)
        .data('aspectRatio', this.height / this.width)
        // and remove the hard coded width/height
        .removeAttr('height')
        .removeAttr('width');
    });
    // When the window is resized
    $(window).resize(function() {
      // Resize all videos according to their own aspect ratio
      $allVideos.each(function() {
        var $el = $(this);
        var newWidth = $el.parent().width();

        $el
          .width(newWidth)
          .height(newWidth * $el.data('aspectRatio'));
      });
    // Kick off one resize to fix all videos on page load
    }).resize();
  };

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        initMasonry();
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
        responsiveVideo();
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
    },
    'blog': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  Sage.archive = Sage.blog;
  Sage.category = Sage.blog;
  Sage.search = Sage.blog;

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
