<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce login
?>

.woocommerce form.login, .woocommerce form.register, .woocommerce form.lost_reset_password, .woocommerce .woocommerce-form-login, .woocommerce .woocommerce-form-register {
	clear: both;
	padding: 30px;
	margin: 0 0 30px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	border-radius: 8px;
}

.woocommerce form.login::after, .woocommerce form.register::after, .woocommerce form.lost_reset_password::after, .woocommerce .woocommerce-form-login::after, .woocommerce .woocommerce-form-register::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce form.login p:last-child, .woocommerce form.register p:last-child, .woocommerce form.lost_reset_password p:last-child {
	margin-bottom: 0;
}

.woocommerce form.login .form-row, .woocommerce form.register .form-row, .woocommerce form.lost_reset_password .form-row, .woocommerce .woocommerce-form-login .form-row, .woocommerce .woocommerce-form-register .form-row {
	clear: both;
	margin: 0 0 16px;
	padding: 0;
}

.woocommerce form.login .form-row::after, .woocommerce form.register .form-row::after, .woocommerce form.lost_reset_password .form-row::after, .woocommerce .woocommerce-form-login .form-row::after, .woocommerce .woocommerce-form-register .form-row::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce form.login label, .woocommerce form.register label, .woocommerce form.lost_reset_password label, .woocommerce .woocommerce-form-login label, .woocommerce .woocommerce-form-register label {
	display: block;
	margin: 0 0 6px;
	color: <?php echo $default_text_color; ?>;
	font-weight: 600;
	line-height: 1.5;
}

.woocommerce form.login label.woocommerce-form-login__rememberme, .woocommerce .woocommerce-form-login label.woocommerce-form-login__rememberme {
	display: inline-block;
	margin: 0 0 16px;
	font-weight: 400;
}

.woocommerce form.login input.input-text, .woocommerce form.register input.input-text, .woocommerce form.lost_reset_password input.input-text, .woocommerce .woocommerce-form-login input.input-text, .woocommerce .woocommerce-form-register input.input-text {
	width: 100%;
	max-width: 100%;
	min-height: 46px;
	box-sizing: border-box;
	padding: 10px 16px !important;
	background: #ffffff !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
	color: <?php echo $default_text_color; ?> !important;
	font-size: 16px !important;
	line-height: 1.5 !important;
}

.woocommerce form.login input.input-text:focus, .woocommerce form.register input.input-text:focus, .woocommerce form.lost_reset_password input.input-text:focus, .woocommerce .woocommerce-form-login input.input-text:focus, .woocommerce .woocommerce-form-register input.input-text:focus {
	background: #ffffff !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	outline: 0 !important;
}

.woocommerce form.login input[type="checkbox"], .woocommerce form.register input[type="checkbox"], .woocommerce .woocommerce-form-login input[type="checkbox"], .woocommerce .woocommerce-form-register input[type="checkbox"], .woocommerce-form__input-checkbox {
	width: auto;
	height: auto;
	margin: 2px 10px 0 0;
	box-shadow: none !important;
	appearance: auto;
	-webkit-appearance: auto;
	-moz-appearance: auto;
}

.woocommerce form.login .button, .woocommerce form.register .button, .woocommerce form.lost_reset_password .button, .woocommerce .woocommerce-form-login .button, .woocommerce .woocommerce-form-register .button {
	display: inline-block;
}

.woocommerce .woocommerce-LostPassword, .woocommerce .lost_password {
	clear: both;
	margin: 16px 0 0;
	font-size: 14px;
	line-height: 1.5;
}

.woocommerce .show-password-input {
	position: absolute !important;
	top: 0.4em !important;
	right: 0.7em;
	color: <?php echo $default_link_color; ?>;
	cursor: pointer;
}

.woocommerce .show-password-input:hover {
	color: <?php echo $default_hover_color; ?>;
}

@media screen and (max-width: 1199px) {
	.woocommerce form.login, .woocommerce form.register, .woocommerce form.lost_reset_password, .woocommerce .woocommerce-form-login, .woocommerce .woocommerce-form-register {
		padding: 20px;
	}

	.woocommerce form.login .button, .woocommerce form.register .button, .woocommerce form.lost_reset_password .button, .woocommerce .woocommerce-form-login .button, .woocommerce .woocommerce-form-register .button {
		display: block;
		width: 100%;
		text-align: center;
	}
}
