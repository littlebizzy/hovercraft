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
	background: #ECEFF1;
	border: 0 !important;
	border-radius: 0 !important;
}

.button {
	border: 0 !important;
	border-radius: 0 !important;
}

button,
.button,
.button-link,
.button-outline,
.button-outline-white,
.button-wide-dark,
.button-wide-white {
	box-sizing: border-box;
	cursor: pointer;
	text-decoration: none;
	transition: background-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
}

@media screen and (max-width: 1199px) {
.button-link {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	display: block;
	background: <?php echo $default_link_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-link {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	display: block;
	background: <?php echo $default_link_color; ?>;
	}
}

@media screen and (max-width: 1199px) {
.button-outline {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	display: block;
	background: transparent;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-outline {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	display: block;
	background: transparent;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (max-width: 1199px) {
.button-outline-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	display: block;
	background: transparent;
	box-shadow: inset 0 0 0 1px #ffffff;
	}
}

@media screen and (min-width: 1200px) {
.button-outline-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	display: block;
	background: transparent;
	box-shadow: inset 0 0 0 1px #ffffff;
	}
}

@media screen and (max-width: 1199px) {
.button-wide-dark {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	display: block;
	background: <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-wide-dark {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	display: block;
	background: <?php echo $default_text_color; ?>;
	}
}

@media screen and (max-width: 1199px) {
.button-wide-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	display: block;
	background: #ffffff;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-wide-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	display: block;
	background: #ffffff;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
	}
}
