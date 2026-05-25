<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for forms
$select_arrow_color = rawurlencode( $default_text_color );
?>

/* forms */

form {
	margin: 0;
	padding: 0;
}

label {
	display: block;
	margin-bottom: 6px;
	color: <?php echo $default_text_color; ?>;
	font-size: 15px;
	font-weight: 600;
	line-height: 1.4;
}

fieldset {
	margin: 0 0 20px;
	padding: 20px;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

legend {
	padding: 0 6px;
	color: <?php echo $default_text_color; ?>;
	font-size: 16px;
	font-weight: 600;
	line-height: 1.4;
}

input:not([type="button"]):not([type="checkbox"]):not([type="file"]):not([type="hidden"]):not([type="radio"]):not([type="range"]):not([type="reset"]):not([type="submit"]), select, textarea {
	appearance: none;
	-webkit-appearance: none;
	-moz-appearance: none;
	display: inline-block;
	width: 100%;
	min-height: 46px;
	padding: 10px 16px !important;
	background: #ffffff;
	border: 0 !important;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	font-family: inherit;
	font-size: 16px;
	font-weight: 400;
	line-height: 1.5;
	vertical-align: middle;
	transition: background-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, color 0.15s ease-in-out;
}

input:not([type="button"]):not([type="checkbox"]):not([type="file"]):not([type="hidden"]):not([type="radio"]):not([type="range"]):not([type="reset"]):not([type="submit"]):focus, select:focus, textarea:focus {
	background: #ffffff;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?>;
	color: <?php echo $default_text_color; ?>;
	outline: 0;
}

select {
	padding-right: 44px !important;
	background-image: url('data:image/svg+xml;utf8,<svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" fill="none" stroke="<?php echo $select_arrow_color; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>');
	background-position: right 14px center;
	background-repeat: no-repeat;
	background-size: 16px;
}

option {
	padding: 0 !important;
	font-family: inherit;
	line-height: 1.5;
	white-space: nowrap;
}

textarea {
	min-height: 140px;
	resize: vertical;
}

input[type="checkbox"], input[type="radio"] {
	appearance: auto;
	-webkit-appearance: auto;
	-moz-appearance: auto;
	display: inline-block;
	width: auto;
	height: auto;
	margin: 2px 10px 0 0;
	box-shadow: none;
	cursor: pointer;
	vertical-align: middle;
}

input[type="checkbox"]:focus, input[type="radio"]:focus {
	outline: 1px solid <?php echo $default_link_color; ?>;
	outline-offset: 2px;
}

input[type="file"] {
	width: 100%;
	padding: 10px 0 !important;
	background: transparent;
	box-shadow: none;
	font-family: inherit;
	font-size: 16px;
	line-height: 1.5;
	transition: none;
}

input[type="range"] {
	appearance: none;
	-webkit-appearance: none;
	width: 100%;
	padding: 0 !important;
	background: transparent;
	box-shadow: none;
	cursor: pointer;
}

input[type="range"]::-webkit-slider-runnable-track {
	height: 4px;
	background: <?php echo $default_text_color; ?>;
	border-radius: 4px;
}

input[type="range"]::-moz-range-track {
	height: 4px;
	background: <?php echo $default_text_color; ?>;
	border-radius: 4px;
}

input[type="range"]::-webkit-slider-thumb {
	appearance: none;
	-webkit-appearance: none;
	width: 16px;
	height: 16px;
	margin-top: -6px;
	background: <?php echo $default_link_color; ?>;
	border: 0;
	border-radius: 999px;
	cursor: pointer;
}

input[type="range"]::-moz-range-thumb {
	width: 16px;
	height: 16px;
	background: <?php echo $default_link_color; ?>;
	border: 0;
	border-radius: 999px;
	cursor: pointer;
}

form button, input[type="button"], input[type="reset"], input[type="submit"] {
	display: inline-block;
	height: auto;
	padding: 12px 20px !important;
	background: <?php echo $default_link_color; ?>;
	border: 0;
	border-radius: 4px;
	box-shadow: none;
	color: #ffffff;
	cursor: pointer;
	font-family: inherit;
	font-size: 16px;
	font-weight: 600;
	line-height: 1.2;
	text-align: center;
	text-decoration: none;
	vertical-align: middle;
	transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

form button:hover, form button:focus, form button:active, input[type="button"]:hover, input[type="button"]:focus, input[type="button"]:active, input[type="reset"]:hover, input[type="reset"]:focus, input[type="reset"]:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
	background: <?php echo $default_hover_color; ?> !important;
	color: #ffffff;
	outline: 0;
}

input::placeholder, textarea::placeholder {
	color: <?php echo $default_text_color; ?>;
	opacity: 0.65;
}

input:disabled, select:disabled, textarea:disabled, button:disabled, input[type="button"]:disabled, input[type="reset"]:disabled, input[type="submit"]:disabled {
	background: <?php echo $search_bar_background_color; ?>;
	box-shadow: inset 0 0 0 1px #e0e0e0;
	color: <?php echo $default_text_color; ?>;
	cursor: not-allowed;
	opacity: 0.65;
}

input[readonly], textarea[readonly] {
	background: <?php echo $search_bar_background_color; ?>;
	box-shadow: inset 0 0 0 1px #e0e0e0;
	color: <?php echo $default_text_color; ?>;
}

#topbar input,
.hero-half input {
	box-shadow: none;
}

[dir="rtl"] input,
[dir="rtl"] select,
[dir="rtl"] textarea {
	text-align: right;
}

[dir="rtl"] select {
	padding-right: 16px !important;
	padding-left: 44px !important;
	background-position: left 14px center;
}

/* responsive button widths */

@media screen and (max-width: 1199px) {
	form button, input[type="button"], input[type="reset"], input[type="submit"] {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	form button, input[type="button"], input[type="reset"], input[type="submit"] {
		width: auto;
	}
}
