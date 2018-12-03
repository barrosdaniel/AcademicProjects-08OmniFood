$(document).ready(function() {
  // Sticky Navigation (waypointJS)
  // ======================================================================
  $('.js--section-features').waypoint(
    function(direction) {
      if (direction == 'down') {
        $('.nav-bar-container').addClass('sticky');
      } else {
        $('.nav-bar-container').removeClass('sticky');
      }
    },
    {
      offset: '60px'
    }
  );

  // Scroll on Buttons (jQuery only using classes)
  // ======================================================================
  // "I'm hungry"
  $('.js--scroll-to-plans').click(function() {
    $('html, body').animate(
      {
        scrollTop: $('.js--section-plans').offset().top
      },
      1000
    );
  });

  // "Show me more"
  $('.js--scroll-to-start').click(function() {
    $('html, body').animate(
      {
        scrollTop: $('.js--section-features').offset().top
      },
      1000
    );
  });

  // Navigation Scroll (jQuery only using ids)
  // ======================================================================
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate(
            {
              scrollTop: target.offset().top
            },
            1000,
            function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(':focus')) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });

  // Animations AnimateCSS
  // ======================================================================

  // Features Animation
  $('.js--waypoint-features-animation').waypoint(
    function(direction) {
      $('.js--waypoint-features-animation').addClass('animated fadeIn');
    },
    {
      offset: '50%'
    }
  );

  // Works Animation
  $('.js--waypoint-works-animation').waypoint(
    function(direction) {
      $('.js--waypoint-works-animation').addClass('animated fadeInLeft');
    },
    {
      offset: '50%'
    }
  );

  // Cities Animation
  $('.js--waypoint-cities-animation').waypoint(
    function(direction) {
      $('.js--waypoint-cities-animation').addClass('animated fadeIn');
    },
    {
      offset: '50%'
    }
  );

  // Plans Animation
  $('.js--waypoint-plans-animation').waypoint(
    function(direction) {
      $('.js--waypoint-plans-animation').addClass('animated pulse');
    },
    {
      offset: '50%'
    }
  );

  // Navigation Icon (jQuery only using ids)
  // ======================================================================
  $('.js--nav-icon').click(function() {
    var nav = $('.js--main-nav');
    nav.slideToggle(200);
  });
});
