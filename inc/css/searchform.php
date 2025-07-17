<?php
// styles for search form
?>

.input-container {
	display: flex;
}

::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
	opacity: 1;
}

.search-input {
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $search_input_text_color; ?>;
	vertical-align: middle;
	font-size: 16px;
	line-height: 2;
	padding: 10px 20px;
	border: 0;
	outline: none;
	box-shadow: inset 0 -1px 1px -1px <?php echo $search_bar_border_color; ?>, inset 0 1px 1px -1px <?php echo $search_bar_border_color; ?>, inset 1px 0 1px -1px <?php echo $search_bar_border_color; ?>;
}

.search-submit {
	background: #D500F9;
	color: #ffffff;
	vertical-align: middle;
	padding: 0 20px;
	border: 0;
	outline: none;
	cursor: pointer;
}

.search-submit:hover {
	background: #AB47BC;
}

.search-submit i {
	font-size: 24px;
}

.searchinput::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
}

.searchinput:focus {
  outline: none;
}
