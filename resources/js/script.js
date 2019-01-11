// main page review
$slick_sliderReview = $('.review-slider');
settings_sliderReview = {
  dots: true,
  arrows: true,
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  swipeToSlide: true,
  fade: true,
  cssEase: 'linear',
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }]
}
slick_on_mobile($slick_sliderReview, settings_sliderReview);

// slick on mobile
function slick_on_mobile(slider, settings) {
  $(window).on('load resize', function() {
    if ($(window).width() > 768) {
      if (slider.hasClass('slick-initialized')) {
        slider.slick('unslick');
      }
      $('.review-item').removeAttr('style');
      return
    }
    if (!slider.hasClass('slick-initialized')) {
      return slider.slick(settings);
    }
  });
};


// mobile menu
$(document).ready(function(){
    $(".mobile-menu").click(function(){

        $('body').toggleClass('body--no-scroll');
        if($(this).hasClass('mobile-menu--close')){
            $(this)
                .removeClass('mobile-menu--close')
                .stop()
            ;
            $('.menu').animate({ right: '-0px' }, 300);
            $(this).addClass('mobile-menu--open');
            $('.overlay').show();
        }
        else{
            $(this)
                .addClass('mobile-menu--close')
                .stop()
            ;
            $('.menu').animate({ right: '-300px' }, 300);
            $(this).removeClass('mobile-menu--open');
            $('.overlay').hide();
        }
    });
});

$(window).on('resize', function() {
  var win = $(this);
  if (win.width() >= 992) {
    $('.header-menu').removeAttr('style');
    $('.menu').removeAttr('style');
    $('.overlay').removeAttr('style');
  }
});

$('.overlay').click(function () {
  $('.menu').animate({ right: '-300px' }, 300);
  $('.mobile-menu').removeClass('mobile-menu--open');
  $('.mobile-menu').addClass('mobile-menu--close');
  $(this).hide();
  $('body').removeClass('body--no-scroll');
});

//mobile submenu
if ($(window).width() < 992) {
  $('.menu-item').click(function() {
    $(this).find('.menu-submenu').toggle(300);
  });
}



// similar slider
$(document).ready(function () {
    $('.similar-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        // slidesToShow: 3,
        variableWidth: true,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
})



// dictionary
$('.dictionary-menu__item').click(function() {
  $(this).find('.dictionary-menu__submenu').toggle(400);
});


// svg
$(function() {
  jQuery('img.svg').each(function() {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Check if the viewport is set, else we gonna set it if we can.
      if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }

      // Replace image with new SVG
      $img.replaceWith($svg);

    }, 'xml');

  });
});



// modals - remove browser scroll
if ($(window).width() > 992) {
  $('.modal__restore-link').click(function() {
    $('body').addClass('body--modal-open');
  });
  $('.modal-bottom__link').click(function() {
    $('body').addClass('body--modal-open');
  });
  $('.modal .close').click(function() {
    $('body').addClass('body--modal-open');
  });

  jQuery(function($) {
    $(document).mouseup(function(e) {
      var div = $('.modal-content');
      if (!div.is(e.target) &&
        div.has(e.target).length === 0) {
        $('body').removeClass('body--modal-open');
      }
    });
  });
}

// modal - scroll big modal
$('.modal-login .modal-bottom__link').click(function () {
  function func() {
    $('body').addClass('modal-open');
  }
  setTimeout(func, 500);
});
