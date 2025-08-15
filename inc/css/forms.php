<?php
// styles for forms
?>

/* forms */

form {
	margin: 0 !important;
	padding: 0 !important;
}

input, select, textarea {
	appearance: none;
	width: 100%;
	height: auto;
	vertical-align: middle;
	font-weight: 400;
	line-height: 2;
	padding: 10px 20px !important;
	border: 0;
	outline: none;
	font-size: 16px;
	background: #ffffff;
	display: inline-block;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?>;
	font-family: inherit;
	transition: all 0.15s ease-in-out;
}

button {
	height: auto;
	vertical-align: middle;
	font-weight: 400;
	line-height: 2;
	padding: 10px 20px !important;
	border: 0;
	outline: none;
	font-size: 16px;
	background: #ffffff;
	display: inline-block;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?>;
	font-family: inherit;
	transition: all 0.15s ease-in-out;
}

select {
	appearance: none;
	-webkit-appearance: none;
	-moz-appearance: none;
	background-image: url('data:image/svg+xml;utf8,<svg fill="%23666" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
	background-repeat: no-repeat;
	background-position: right 15px center;
	background-size: 16px;
	padding-right: 45px !important;
	border-radius: 0;
}

option {
	line-height: 1.5;
	padding: 0 !important;
	white-space: nowrap;
	font-family: inherit;
}

textarea {
	font-size: 16px;
	font-weight: 400;
	padding: 10px 20px !important;
	border-radius: 0;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?>;
	resize: vertical;
	font-family: inherit;
}

input[type="checkbox"], input[type="radio"] {
	width: auto;
	height: auto;
	display: inline-block;
	margin-right: 10px;
	margin-top: 2px;
	box-shadow: none;
	cursor: pointer;
}

input[type="file"] {
	padding: 10px 0 !important;
	box-shadow: none;
	background: transparent;
	transition: none;
}

input[type="range"] {
	width: 100%;
	padding: 0 !important;
	background: transparent;
	cursor: pointer;
	box-shadow: none;
	appearance: none;
	-webkit-appearance: none;
}

input[type="range"]::-webkit-slider-thumb {
	appearance: none;
	height: 16px;
	width: 16px;
	border-radius: 50%;
	background: <?php echo $default_link_color; ?>;
	cursor: pointer;
	margin-top: -6px;
	border: none;
}

input[type="range"]::-moz-range-thumb {
	height: 16px;
	width: 16px;
	border-radius: 50%;
	background: <?php echo $default_link_color; ?>;
	cursor: pointer;
	border: none;
}

input[type="range"]::-webkit-slider-runnable-track {
	height: 4px;
	background: #cccccc;
	border-radius: 2px;
}

input[type="range"]::-moz-range-track {
	height: 4px;
	background: #cccccc;
	border-radius: 2px;
}

input[type="submit"], button[type="submit"] {
	font-size: 18px;
	font-weight: 600;
	padding: 10px 20px !important;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0;
	cursor: pointer;
	box-shadow: none;
	transition: background 0.15s ease-in-out;
}

input[type="submit"]:hover, button[type="submit"]:hover {
	background: <?php echo $default_hover_color; ?> !important;
}

#topbar input, .hero-half input {
	box-shadow: none;
}

label {
	display: block;
	margin-bottom: 5px;
	font-weight: 600;
	font-size: 15px;
}

fieldset {
	border: 1px solid #e0e0e0;
	padding: 20px;
	margin-bottom: 20px;
}

legend {
	font-weight: 600;
	font-size: 16px;
	padding: 0 5px;
}

input:focus, select:focus, textarea:focus, button:focus {
	box-shadow: 0 0 0 2px rgba(100, 100, 100, 0.15);
}

input::placeholder, textarea::placeholder {
	color: #999999;
	font-style: italic;
	opacity: 1;
}

input:disabled, select:disabled, textarea:disabled, button:disabled {
	background: #f5f5f5;
	color: #999999;
	cursor: not-allowed;
	box-shadow: inset 0px 0px 0px 1px #dddddd;
}

input[readonly], textarea[readonly] {
	background: #f5f5f5;
	color: #333333;
	box-shadow: inset 0px 0px 0px 1px #cccccc;
}

[dir="rtl"] input, [dir="rtl"] select, [dir="rtl"] textarea {
	text-align: right;
}

[dir="rtl"] select {
	background-position: left 15px center;
	padding-left: 45px !important;
	padding-right: 20px !important;
}

input:invalid, select:invalid, textarea:invalid {
	background-color: #fff8f8;
	box-shadow: inset 0px 0px 0px 1px #e57373;
}

/* responsive button widths */

@media (max-width: 1199px) {
	input[type="submit"], button[type="submit"] {
		width: 100%;
	}
	button {
		width: 100%;
	}
	button.button, input.button {
		width: 100%;
	}
}

@media (min-width: 1200px) {
	input[type="submit"], button[type="submit"] {
		width: 100%;
	}
	button {
		width: auto;
	}
	button.button, input.button {
		width: auto;
	}
}
