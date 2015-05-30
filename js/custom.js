$("html").niceScroll({cursorcolor:"#0097a7",cursorborder:"#006064"});

$('.modal-trigger').leanModal({
      dismissible: true, 
      opacity: .5, 
      in_duration: 300, 
      out_duration: 200
    }
  );

$(document).ready(function() {
  var navpos = $('#mainnav').offset();
  //console.log(navpos.top);
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > navpos.top) {
        $('#mainnav').addClass('navbar-fixed');
        $('#custom-nav').addClass('custom-nav-fixed');
       }
       else {
         $('#mainnav').removeClass('navbar-fixed');
       }
    });
});