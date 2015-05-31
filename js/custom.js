$("html").niceScroll({cursorcolor:"#0097a7",cursorborder:"#006064"});

$('.modal-trigger').leanModal({
      dismissible: true, 
      opacity: .5, 
      in_duration: 300, 
      out_duration: 200
    }
  );

if($(".dropdown-button").length)
{
  $(".dropdown-button").dropdown();
}

/*if($('#send').length)
{
  $('#send').click(function()
    {
      $('#chatbox').append('<div class="row" style="margin-bottom:0"><div class="col s12 m9 l9"><div class="card-panel grey lighten-5 z-depth-1"  style="padding-bottom: 2px;"><div class="col s2"><img src="images/yuna.jpg" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s10">
                              <span class="black-text">
                                This is a square image. Add the "circle" class to it to make it appear circular.
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>');
    });
}*/

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

  if($(".slider" ).length)
  {
    $('.slider').slider({height:300, indicators:false});
  }
  if($('select').length)
  {
    $('select').material_select();
  }

  $('#all-cat').click(function()
  {
    if($('#all-cat:checked').val()=='on')
    {
      $('#all-cat').prop('checked',true);
      $('#learning').prop('checked',true);
      $('#content-writing').prop('checked',true);
      $('#photography').prop('checked',true);
      $('#online').prop('checked',true);
      $('#management').prop('checked',true);      
    }
    else
    {
      console.log('finished');
      $('#learning').removeAttr('checked');
      $('#content-writing').removeAttr('checked');
      $('#photography').removeAttr('checked');
      $('#online').removeAttr('checked');
      $('#management').removeAttr('checked');
    }
  });

});