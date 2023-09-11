(function($) {

$(function(){
  $btnToggle = $('.btn--toggle');
  $submenuTrigger = $('.submenu--trigger');
  $thirdSubmenuTrigger = $('.third-submenu--trigger');
  
  $btnToggle.on('click', function(e) {
    // e.preventDefault();
    let $target = $( $(e.currentTarget).attr('data-target') );
    $target.toggleClass('showing');
  });
  
  
  $submenuTrigger.on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('active');
  });
  
  $thirdSubmenuTrigger.on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).toggleClass('active');
  })
});

})( jQuery );

// https://codepen.io/joshuaaron/pen/QgdLpB
// alt https://codepen.io/jigneshpanchalmj/pen/Qevqjp
// alt https://codepen.io/kpree/pen/Oeaqxa
