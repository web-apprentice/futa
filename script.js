
$(function() {
    var $nav   = $('#navArea');
    var $btn   = $('.toggle_btn');
    var $mask  = $('#mask');
    var open   = 'open'; // class
    // menu open close
    $btn.on( 'click', function() {
      if ( ! $nav.hasClass( open ) ) {
        $nav.addClass( open );
      } else {
        $nav.removeClass( open );
      }
    });
    // mask close
    $mask.on('click', function() {
      $nav.removeClass( open );
    });

    $('header h1').click(function() {
        var $answer = $('.mainVidual');
        if($answer.hasClass('openimage')) { 
        $answer.removeClass('openimage');
        $answer.fadeOut(1000);
        } else {
        $answer.addClass('openimage'); 
        $answer.fadeIn(1000);
        }
    });

  } )(jQuery);
  
