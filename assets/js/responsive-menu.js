(function($) {

$(document).ready(function()
{
 /* Function 1: Toggle menu. Confirmed working. */
 $('.nav-icon').click(function()
  { $('.mobile-nav').toggle(0); });

 /* Function 3: Toggle submenus. */
 $('.menu-item-has-children').click(function()
 { $(this).children('ul').toggle(0);
   $(this).siblings('.menu-item-has-children').children('ul').hide(0);
 });
 /* Function 4: Prevent default events from clicking the parent menu. */
 $('.menu-item-has-children').children('a').click(function(event)
 { event.preventDefault(); });
 /* Functions 5 and 6: Handle menu roll on and roll off */
 $('.menu-item-has-children').mouseenter(function()
 { if( $(window).width() > 650 ){ $(this).children('ul').show(0); } });
 $('.menu-item-has-children').mouseleave(function()
 { if( $(window).width() > 650 ){ $(this).children('ul').hide(0); } });
});

})( jQuery );

// https://codepen.io/nitronova/pen/ONYQbZ
// alt https://codepen.io/joshuaaron/pen/QgdLpB
// alt https://codepen.io/jigneshpanchalmj/pen/Qevqjp
// alt https://codepen.io/kpree/pen/Oeaqxa
