jQuery(".menu").click(function() {
  var is_open = jQuery(this).hasClass("open");
  if (is_open) {
    jQuery(this).removeClass("open");
  } else {
    jQuery(this).addClass("open");
  }
});

jQuery(".menu li").click(function() {

  var selected_value = jQuery(this).html();
  var first_li = jQuery(".menu li:first-child").html();

  jQuery(".menu li:first-child").html(selected_value);
  jQuery(this).html(first_li);

});

jQuery(document).mouseup(function(event) {

  var target = event.target;
  var select = jQuery(".menu");

  if (!select.is(target) && select.has(target).length === 0) {
    select.removeClass("open");
  }

});
