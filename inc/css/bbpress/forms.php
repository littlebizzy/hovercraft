<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress forms
?>

/* forms */

#bbpress-forums .bbp-topic-form, #bbpress-forums .bbp-reply-form, #bbpress-forums .bbp-topic-tag-form, #bbpress-forums .bbp-login-form, #bbpress-forums .bbp-user-form, #bbpress-forums .bbp-replies .bbp-reply-form {
	clear: both;
	margin: 0 0 30px;
}

#bbpress-forums fieldset.bbp-form {
	clear: both;
	margin: 0 0 30px !important;
	padding: 0 !important;
	background: transparent;
	border: 0 !important;
}

#bbpress-forums fieldset.bbp-form legend, .bbp-login-form fieldset legend {
	width: auto;
	padding: 0;
	border: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 18px;
	font-weight: 600;
	line-height: 1.4;
}

#bbpress-forums fieldset.bbp-form label, #bbp-login fieldset label, #bbp-register fieldset label, #bbp-lost-pass fieldset label, .bbp-login-form label, #sidebar .bbp-login-form label {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums fieldset.bbp-form p {
	margin-bottom: 16px;
}

#bbpress-forums fieldset.bbp-form input, #bbpress-forums fieldset.bbp-form textarea, #bbpress-forums fieldset.bbp-form select, #bbpress-forums fieldset.bbp-form input[type="text"], #bbpress-forums fieldset.bbp-form input[type="password"], #bbpress-forums #bbp_topic_title, #bbpress-forums #bbp_topic_tags, #bbpress-forums #bbp_reply_content, #bbpress-forums #bbp_topic_content, #bbpress-forums #bbp_anonymous_author, #bbpress-forums #bbp_anonymous_email, #bbpress-forums #bbp_anonymous_website, #bbpress-forums textarea#bbp_forum_content, #bbpress-forums fieldset select#bbp_forum_id, .bbp-login-form .bbp-username input, .bbp-login-form .bbp-email input, .bbp-login-form .bbp-password input {
	max-width: 100%;
}

#bbpress-forums fieldset.bbp-forum-form-attributes {
	margin: 0 0 30px !important;
	padding: 0 !important;
	border: 0 !important;
}

