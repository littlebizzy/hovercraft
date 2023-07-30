jQuery(function(){
  $btnToggle = jQuery('.btn--toggle');
  $submenuTrigger = jQuery('.submenu--trigger');
  $thirdSubmenuTrigger = jQuery('.third-submenu--trigger');
  
  $btnToggle.on('click', function(e) {
    // e.preventDefault();
    let $target = jQuery( jQuery(e.currentTarget).attr('data-target') );
    $target.toggleClass('showing');
  });
  
  
  $submenuTrigger.on('click', function(e) {
    e.preventDefault();
    jQuery(this).toggleClass('active');
  });
  
  $thirdSubmenuTrigger.on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    jQuery(this).toggleClass('active');
  })
});


// https://codepen.io/joshuaaron/pen/QgdLpB
// alt https://codepen.io/jigneshpanchalmj/pen/Qevqjp
// alt https://codepen.io/semikola/pen/ggONzz
