// var _gaq = [['_setAccount', '<%= pkg.analytics %>'], ['_trackPageview']];

$(document).ready(function() {
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
