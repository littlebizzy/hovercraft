<?php

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
	border-radius: 0 !important;
	cursor: pointer;
}

.button {
	border: 0 !important;
	border-radius: 0 !important;
}

.button-link {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: <?php echo $default_link_color; ?>;
}

.button-outline {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
}

.button-outline-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0 0 0 1px #ffffff;
}

.button-wide-dark {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: <?php echo $default_text_color; ?>;
}

.button-wide-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: #ffffff;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
}
