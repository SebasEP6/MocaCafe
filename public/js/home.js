$(document).ready(function () {
  var one = $('#heart-one');
  var two = $('#heart-two');
  var three = $('#heart-three');
  var sizeH = $('#s-header').find('.s-element').length;
  var sizeP = $('#s-prom').find('.element').length;

	setTimeout(firstIcon, 1000);

  setInterval(changeHeader,7000);

  $('#prev').click(function (e) {
    e.preventDefault();
    $('#s-prom').find('.element').each(function (index, value) {
      if($(value).hasClass('s-active'))
      {
        $(value).removeClass('s-active');
        $(value).removeClass('animated bounceInLeft');

        if ((index) > 0)
        {
          $($('#s-prom').find('.element').get(index - 1)).addClass('s-active');
          $($('#s-prom').find('.element').get(index - 1)).addClass('animated bounceInLeft');

          return false;
        }
        else
        {
          $($('#s-prom').find('.element').get(sizeP - 1)).addClass('s-active');
          $($('#s-prom').find('.element').get(sizeP - 1)).addClass('animated bounceInLeft');

          return false;
        }
      }
    });
  });

  $('#next').click(function (e) {
    e.preventDefault();
    $('#s-prom').find('.element').each(function (index, value) {
      if($(value).hasClass('s-active'))
      {
        $(value).removeClass('s-active');
        $(value).removeClass('animated bounceInRight');

        if ((index + 1) < sizeP)
        {
          $($('#s-prom').find('.element').get(index + 1)).addClass('s-active');
          $($('#s-prom').find('.element').get(index + 1)).addClass('animated bounceInRight');

          return false;
        }
        else
        {
          $($('#s-prom').find('.element').get(0)).addClass('s-active');
          $($('#s-prom').find('.element').get(0)).addClass('animated bounceInRight');

          return false;
        }
      }
    });
  });

  function firstIcon() {
    one.removeClass('animated pulse');
    one.fadeOut(200);
    two.fadeIn(600);
    two.addClass('animated pulse');
    setTimeout(secondIcon,1000);
  }

  function secondIcon() {
    two.removeClass('animated pulse');
    two.fadeOut(200);
    three.fadeIn(600);
    three.addClass('animated pulse');
    setTimeout(thirdIcon,1000);
  }

  function thirdIcon() {
    three.removeClass('animated pulse');
    three.fadeOut(200);
    one.fadeIn(600);
    one.addClass('animated pulse');
    setTimeout(firstIcon,1000);
  }

  function changeHeader() {
    $('#s-header').find('.s-element').each(function (index, value) {
      if ($(value).hasClass('s-active'))
      {
        setTimeout(delClass, 900);
        $(value).removeClass('animated slideInRight');

        if ((index + 1) < sizeH)
        {
          $($('#s-header').find('.s-element').get(index + 1)).addClass('s-active');
          $($('#s-header').find('.s-element').get(index + 1)).addClass('animated slideInRight');

          return false;
        }
        else
        {
          $($('#s-header').find('.s-element').get(0)).addClass('s-active');
          $($('#s-header').find('.s-element').get(0)).addClass('animated slideInRight');

          return false;
        }
      }

      function delClass() {
        $(value).removeClass('s-active');
      }
    });
  }
});