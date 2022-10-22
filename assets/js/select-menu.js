jQuery(".menu").click(function() {
  var is_open = jQuery(this).hasClass("open");
  if (is_open) {
    jQuery(this).removeClass("open");
  } else {
    jQuery(this).addClass("open");
  }
});

jQuery(".select li").click(function() {

  var selected_value = jQuery(this).html();
  var first_li = jQuery(".select li:first-child").html();

  jQuery(".select li:first-child").html(selected_value);
  jQuery(this).html(first_li);

});

jQuery(document).mouseup(function(event) {

  var target = event.target;
  var select = jQuery(".select");

  if (!select.is(target) && select.has(target).length === 0) {
    select.removeClass("open");
  }

});
