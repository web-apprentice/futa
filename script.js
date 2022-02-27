
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
  } )(jQuery);
  
  
  $(function(){
    $('header h1').click(function() {
        var $answer = $('.mainVidual');
        if($answer.hasClass('open1')) { 
          $answer.removeClass('open1');
          // slideUpメソッドを用いて、$answerを隠してください
          $answer.fadeOut(1000);
        } else {
          $answer.addClass('open1'); 
          // slideDownメソッドを用いて、$answerを表示してください
          $answer.fadeIn(1000);
        }
      });
  });



