// var _gaq = [['_setAccount', '<%= pkg.analytics %>'], ['_trackPageview']];

$(document).ready(function() {
  var audio = new Audio('/assets/lighttttt.mp3');

  var timeout = function(selector, addingClass, delay, sound) {
    setTimeout(function() {
      if (typeof sound !== 'undefined') { sound.load(); }
      document.querySelector(selector).classList.add(addingClass);
      if (typeof sound !== 'undefined') { sound.play(); }
    }, delay);
  };

  var flag = document.querySelector('.flag');

  if (window.innerWidth < 960 && flag !== null) {
    flag.onmouseover = function() { flag.classList.add('down'); };
    flag.onmouseout = function() { flag.classList.remove('down'); };
  } else {
    timeout('.flag', 'down', 3500);
  }

  timeout('.rocket-container .light', 'active', 500);
  timeout('.rocket-start', 'active', 500);
  timeout('.middle', 'visible', 2000, audio);
  timeout('.left-side', 'visible', 2600, audio);
  timeout('.right-side', 'visible', 3200, audio);


  var respMenu = $('.resp-menu');
  var section = $('.section');

  $('.menu-icon').on('click', function() {
    if(respMenu.hasClass('visible')) {
      respMenu.removeClass('visible');
      section.removeClass('menu-active');
    } else {
      respMenu.addClass('visible');
      section.addClass('menu-active');
    }
  });


  var menu = $('.menu');
  var lastScrollTop = 0;
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > lastScrollTop) {
      menu.addClass('invisible');
    } else {
      menu.removeClass('invisible');
    }

    if (scrollTop > 20) {
      setTimeout(function() {
        menu.addClass('white');
      }, 400);
    } else {
      menu.removeClass('invisible');
      setTimeout(function() {
        menu.removeClass('white');
      }, 400);
    }

    if (scrollTop < 550) {
      $('.right').removeClass('visible');
    } else {
      $('.right').addClass('visible');
    }

    lastScrollTop = scrollTop;
  });
});

// tweet button
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");

// facebook like button
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));
