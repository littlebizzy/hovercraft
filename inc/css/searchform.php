<?php
// styles for search form
?>

.input-container {
	display: inline-flex;
	align-items: stretch;
	border-radius: 8px;
	overflow: hidden;
	transition: box-shadow 0.18s ease;
}

.input-container:hover {
	box-shadow: 0 0 14px rgba(0, 0, 0, 0.10);
}

.input-container:focus-within {
	box-shadow: 0 0 16px rgba(171, 71, 188, 0.45);
}

.search-input {
	width: min(420px, 70vw);
	min-width: 0;
	height: 46px;
	padding: 0 16px;
	border: 1px solid <?php echo $search_bar_border_color; ?>;
	border-right: 0;
	border-radius: 8px 0 0 8px;
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $search_input_text_color; ?>;
	font-size: 16px;
	appearance: none;
	-webkit-appearance: none;
}

.input-container:hover .search-input,
.input-container:focus-within .search-input {
	border-color: <?php echo $search_bar_border_color; ?>;
}

.search-input::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
	opacity: 1;
}

.search-input:focus {
	outline: none;
}

.search-submit {
	width: 64px;
	height: 46px;
	border: 0;
	border-radius: 0 8px 8px 0;
	background: <?php echo $default_link_color; ?>;
	color: #ffffff;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	cursor: pointer;
	transition: background-color 0.15s ease;
	appearance: none;
	-webkit-appearance: none;
}

.search-submit:hover {
	background: <?php echo $default_hover_color; ?>;
}

.search-submit:focus {
	outline: none;
}

.search-submit svg {
	width: 20px;
	height: 20px;
	display: block;
}
