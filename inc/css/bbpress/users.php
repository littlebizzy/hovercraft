<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress users
?>

/* user forms and profiles */

#bbpress-forums #bbp-login, #bbpress-forums #bbp-register, #bbpress-forums #bbp-lost-pass, #bbpress-forums #bbp-edit-topic-tag {
	margin: 0 0 30px;
}

#bbpress-forums .bbp-login-form .bbp-username, #bbpress-forums .bbp-login-form .bbp-email, #bbpress-forums .bbp-login-form .bbp-password, #bbpress-forums .bbp-login-form .bbp-remember-me, #bbpress-forums .bbp-login-form .bbp-submit-wrapper {
	margin-bottom: 16px;
}

#bbpress-forums .bbp-login-form .bbp-login-links a {
	color: <?php echo $default_link_color; ?>;
}

#bbpress-forums .bbp-logged-in img.avatar {
	max-width: 100%;
	height: auto;
	border: 0;
}

#bbpress-forums .bbp-logged-in h4 {
	margin: 0 0 10px;
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums #bbp-single-user-details, #bbpress-forums #bbp-user-wrapper, #bbpress-forums #bbp-user-body, #bbpress-forums #bbp-user-avatar, #bbpress-forums #bbp-user-navigation, body.my-account #bbpress-forums {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums #bbp-user-wrapper h2.entry-title {
	clear: none;
	margin: 0 0 10px;
	padding: 0;
	font-size: 20px;
	line-height: 1.3;
}

#bbpress-forums #bbp-user-wrapper ul.bbp-lead-topic, #bbpress-forums #bbp-user-wrapper ul.bbp-topics, #bbpress-forums #bbp-user-wrapper ul.bbp-forums, #bbpress-forums #bbp-user-wrapper ul.bbp-replies, #bbpress-forums #bbp-user-wrapper fieldset.bbp-form {
	clear: none;
}

#bbpress-forums #bbp-single-user-details {
	margin: 0 0 30px;
	overflow: hidden;
}

#bbpress-forums #bbp-single-user-details #bbp-user-avatar {
	margin: 0 0 20px;
}

#bbpress-forums #bbp-single-user-details #bbp-user-avatar img.avatar, #bbpress-forums #bbp-user-avatar img.avatar {
	display: block;
	max-width: 150px;
	height: auto;
	margin: 0;
	padding: 0;
	border: 0;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation {
	margin: 0;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation li {
	margin: 0 0 5px;
	padding: 0;
	list-style: none;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation li a {
	display: block;
	padding: 8px 12px;
	background: #ffffff;
	border: 0;
	color: <?php echo $default_link_color; ?>;
	font-size: 14px;
	font-weight: 600;
	line-height: 1.5;
	text-decoration: none;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a, #bbpress-forums #bbp-single-user-details #bbp-user-navigation li a:hover {
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $default_hover_color; ?>;
}

#bbpress-forums #bbp-user-body {
	overflow: hidden;
}

#bbpress-forums #bbp-user-body h2.entry-title {
	margin: 0 0 20px;
}

#bbpress-forums #bbp-user-body .bbp-user-section {
	margin: 0 0 30px;
}

#bbpress-forums #bbp-user-body .bbp-user-section p:last-child {
	margin-bottom: 0;
}

