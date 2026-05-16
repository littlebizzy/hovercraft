<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress
?>

/* bbpress */

.forums {
	border-radius: 0;
}

#bbpress-forums {
	clear: both;
	margin: 0 !important;
	padding: 0 !important;
	background: transparent;
	color: <?php echo $default_text_color; ?>;
	font-size: 16px;
	line-height: 1.5 !important;
	overflow: hidden;
}

#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-search-results, #bbpress-forums ul.bbp-topics {
	border: 0;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
	border-top: 0;
}

#bbpress-forums div.bbp-forum-header, #bbpress-forums div.bbp-reply-header, #bbpress-forums div.bbp-topic-header {
	clear: both;
	border-top: 0;
}

#bbpress-forums .bbp-template-notice,
#bbpress-forums .bbp-pagination-count,
#bbpress-forums li.bbp-footer {
	display: none;
}

#bbpress-forums li.bbp-header {
	margin: 0 !important;
	padding: 12px 16px !important;
	background: <?php echo $search_bar_background_color; ?> !important;
	color: <?php echo $default_text_color; ?>;
	font-size: 13px !important;
	font-weight: 600 !important;
	line-height: 1.4 !important;
	text-transform: uppercase !important;
}

#bbpress-forums li.bbp-body {
	margin: 0 !important;
	padding: 0 !important;
	background: #ffffff !important;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-topic-title {
	font-size: 16px !important;
}

#bbpress-forums .bbp-reply-content p {
	font-size: 16px !important;
	line-height: 1.5 !important;
}

#bbpress-forums ul.forum {
	background: #ffffff !important;
}

#bbpress-forums ul.topic {
	padding: 20px !important;
	background: #ffffff !important;
}

#bbpress-forums ul.forum-titles {
	font-size: 16px !important;
}

#bbpress-forums .bbp-topic-voice-count {
	visibility: hidden;
}

#bbpress-forums .bbp-topics-widget div {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums fieldset.bbp-form {
	margin: 0 0 30px !important;
	padding: 24px !important;
	background: #ffffff;
	border: 1px solid <?php echo $default_text_color; ?> !important;
}

#bbpress-forums fieldset.bbp-form legend {
	padding: 0 8px;
	color: <?php echo $default_text_color; ?>;
	font-size: 18px;
	font-weight: 700;
	line-height: 1.4;
}

#bbpress-forums fieldset.bbp-form label {
	margin-bottom: 6px;
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	font-weight: 600;
	line-height: 1.4;
}

#bbpress-forums fieldset.bbp-form p {
	margin-bottom: 16px;
}

#bbpress-forums input[type="text"],
#bbpress-forums input[type="password"],
#bbpress-forums input[type="email"],
#bbpress-forums input[type="url"],
#bbpress-forums select,
#bbpress-forums textarea {
	max-width: 100%;
}

#bbpress-forums .bbp-the-content-wrapper {
	margin-bottom: 16px;
	background: #ffffff;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?>;
}

#bbpress-forums .quicktags-toolbar {
	padding: 8px !important;
	background: <?php echo $search_bar_background_color; ?>;
	border-bottom: 1px solid <?php echo $default_text_color; ?>;
}

#bbpress-forums .quicktags-toolbar input {
	display: inline-block !important;
	width: auto !important;
	height: auto !important;
	min-height: 0 !important;
	margin: 0 4px 4px 0 !important;
	padding: 4px 8px !important;
	background: transparent !important;
	border: 0 !important;
	box-shadow: none !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-family: inherit;
	font-size: 12px !important;
	font-weight: 600;
	line-height: 1.2 !important;
	text-decoration: none !important;
	text-transform: uppercase !important;
	white-space: nowrap !important;
}

#bbpress-forums .quicktags-toolbar input:hover {
	background: <?php echo $default_link_color; ?> !important;
	color: #ffffff !important;
}

#bbpress-forums .bbp-the-content-wrapper textarea.bbp-the-content,
#bbpress-forums .bbp-the-content-wrapper textarea.wp-editor-area {
	min-height: 220px;
	border: 0 !important;
	box-shadow: none !important;
}

#bbpress-forums div.bbp-submit-wrapper {
	float: none;
	clear: both;
	margin-top: 16px;
	text-align: right;
}

#bbpress-forums div.bbp-submit-wrapper button,
#bbpress-forums div.bbp-submit-wrapper input[type="submit"] {
	min-width: 140px;
}

@media screen and (max-width: 1199px) {
	#bbpress-forums fieldset.bbp-form {
		padding: 20px !important;
	}

	#bbpress-forums div.bbp-submit-wrapper {
		text-align: stretch;
	}

	#bbpress-forums div.bbp-submit-wrapper button,
	#bbpress-forums div.bbp-submit-wrapper input[type="submit"] {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	#bbpress-forums fieldset.bbp-form {
		padding: 24px !important;
	}

	#bbpress-forums div.bbp-submit-wrapper button,
	#bbpress-forums div.bbp-submit-wrapper input[type="submit"] {
		width: auto;
	}
}
