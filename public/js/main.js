var menu = $("#menu");
var active = $('#fix-menu-show');
var btnMenu = $('#opt-menu');
var menuOpt = $('#opt');
var secondAbout = $('#second-about');
var thirdAbout = $('#third-about');
var fourthAbout = $('#fourth-about');
var logo = $('#about-logo');
var box = $('#first-box');
var coffee = $('#coffe-about');

$(document).ready(function () {
  var show = 0;

  // Responsive Menu...
  active.click(function () {
    if (show === 0)
    {
      menu.animate({
        height: "100%"
      });
      show++;
    } else {
      menu.animate({
        height: "50px"
      });
      show--;
    }
  });

  // Items Menu...
  btnMenu.click(function () {
    if (show === 0) {
      menuOpt.animate({
        right: "0"
      });
      show++;
    } else {
      menuOpt.animate({
        right: "-300px"
      });
      show--;
    }
  });

  $('.slick-slide').click(function () {
    
  });

});

$(document).on('scroll', function () {
  var top = $(document).scrollTop();

  // Fixed Menu...
  if ($(window).width() > 810) {
    if (top >= 650 && menu.css('display') == 'none') {
      menu.fadeIn(200);
    }

    if (top < 650 && menu.css('display') != 'none') {
      menu.fadeOut(200);
    }
  }

  // Home Section...
  if (top >= 400 && logo.css('display') == 'none') {
    box.removeClass('box-right');
    logo.fadeIn(1000);
  } else if (top >= 900 && !coffee.hasClass('animated')) {
    coffee.addClass('animated bounce');
  }

  if (top < 400 && logo.css('display')  != 'none') {
    logo.fadeOut(1000);
    box.addClass('box-right');
  } else if (top < 900 && coffee.hasClass('animated')) {
    coffee.removeClass('animated bounce');
  }

  // About Section...
  if (top >= 1050 && fourthAbout.hasClass('bounceOutLeft')) {
    fourthAbout.removeClass('bounceOutLeft');
    fourthAbout.addClass('bounceInLeft');
  } else if (top >= 850 && thirdAbout.hasClass('bounceOutRight')) {
    thirdAbout.removeClass('bounceOutRight');
    thirdAbout.addClass('bounceInRight');
  } else if (top >= 650 && secondAbout.hasClass('bounceOutLeft')) {
    secondAbout.removeClass('bounceOutLeft');
    secondAbout.addClass('bounceInLeft');
  }

  if (top < 1050 && !fourthAbout.hasClass('bounceOutLeft')) {
    fourthAbout.removeClass('bounceInLeft');
    fourthAbout.addClass('bounceOutLeft');
  } else if (top < 850 && !thirdAbout.hasClass('bounceOutRight')) {
    thirdAbout.removeClass('bounceInRight');
    thirdAbout.addClass('bounceOutRight');
  } else if (top < 650 && !secondAbout.hasClass('bounceOutLeft')) {
    secondAbout.removeClass('bounceInLeft');
    secondAbout.addClass('bounceOutLeft');
  }
});

