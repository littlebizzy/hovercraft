<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for general cta (a.k.a. buttons)
?>

button {
	font-size: 16px;
	font-weight: 400;
	padding: 10px 20px;
	text-decoration: none;
	background: #ECEFF1;
	border: 0 !important;
	border-radius: 4px !important;
	cursor: pointer;
}

ul.cta {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

.button {
	border: 0 !important;
	border-radius: 4px !important;
}

.button-link,
.button-outline,
.button-outline-white,
.button-wide-dark,
.button-wide-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	padding: 10px 0;
	text-decoration: none;
	display: block;
}

.button-link {
	color: #ffffff;
	background: <?php echo $default_link_color; ?>;
}

.button-outline {
	color: <?php echo $default_text_color; ?>;
	background: transparent;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
}

.button-outline-white {
	color: #ffffff;
	background: transparent;
	box-shadow: inset 0 0 0 1px #ffffff;
}

.button-wide-dark {
	color: #ffffff;
	background: <?php echo $default_text_color; ?>;
}

.button-wide-white {
	color: <?php echo $default_text_color; ?>;
	background: #ffffff;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
}