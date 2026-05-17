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
	font-size: 12px;
	line-height: 1.5 !important;
	overflow: hidden;
}

#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-search-results {
	border: 0;
}

#bbpress-forums li.bbp-header {
	margin: 0 !important;
	background: <?php echo $search_bar_background_color; ?> !important;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	font-weight: 600 !important;
	line-height: 1.5 !important;
	text-transform: uppercase !important;
}

#bbpress-forums li.bbp-body {
	margin: 0 !important;
	padding: 0 !important;
	background: #ffffff !important;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5 !important;
}

#bbpress-forums li.bbp-footer {
	display: none;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic, #bbpress-forums li.bbp-body div.reply {
	border-top: 0;
}

#bbpress-forums ul.forum, #bbpress-forums ul.topic, #bbpress-forums div.reply {
	background: #ffffff !important;
}

#bbpress-forums ul.topic {
	padding: 20px !important;
}

#bbpress-forums ul.forum-titles {
	font-size: 16px !important;
}

#bbpress-forums div.bbp-forum-header, #bbpress-forums div.bbp-topic-header, #bbpress-forums div.bbp-reply-header {
	clear: both;
	border-top: 0;
}

#bbpress-forums .bbp-forum-title, #bbpress-forums .bbp-topic-permalink, #bbpress-forums .bbp-reply-permalink {
	font-weight: 600;
}

#bbpress-forums .bbp-topic-title {
	font-size: 16px !important;
}

#bbpress-forums .bbp-forum-content, #bbpress-forums .bbp-topic-content, #bbpress-forums .bbp-reply-content {
	color: <?php echo $default_text_color; ?>;
	font-size: 16px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-forum-content p, #bbpress-forums .bbp-topic-content p, #bbpress-forums .bbp-reply-content p {
	font-size: 16px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-author-name, #bbpress-forums .bbp-topic-meta, #bbpress-forums .bbp-reply-post-date, #bbpress-forums .bbp-topic-started-by, #bbpress-forums .bbp-topic-started-in, #bbpress-forums .bbp-forum-freshness, #bbpress-forums .bbp-topic-freshness {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums .bbp-template-notice, #bbpress-forums .bbp-pagination-count {
	display: none;
}

#bbpress-forums .bbp-topic-voice-count {
	visibility: hidden;
}

#bbpress-forums fieldset.bbp-form {
	margin: 0 0 30px !important;
	padding: 0 !important;
	border: 0 !important;
}

#bbpress-forums fieldset.bbp-form legend {
	padding: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 18px;
	font-weight: 600;
	line-height: 1.4;
}

#bbpress-forums fieldset.bbp-form label {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums fieldset.bbp-form p {
	margin-bottom: 16px;
}

#bbpress-forums .bbp-the-content-wrapper {
	margin-bottom: 16px;
}

#bbpress-forums .quicktags-toolbar {
	padding: 10px !important;
	background: <?php echo $search_bar_background_color; ?>;
}

#bbpress-forums .quicktags-toolbar input {
	display: inline-block !important;
	width: auto !important;
	height: 20px !important;
	min-height: 20px !important;
	padding: 0 10px !important;
	margin: 0 !important;
	background: transparent !important;
	border: 0 !important;
	box-shadow: none !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-family: inherit;
	font-size: 12px !important;
	line-height: 1 !important;
	text-decoration: none !important;
	text-transform: uppercase !important;
	white-space: nowrap !important;
}

#bbpress-forums .quicktags-toolbar input:hover {
	background: <?php echo $default_link_color; ?> !important;
	color: #ffffff !important;
}

#bbpress-forums textarea.bbp-the-content, #bbpress-forums textarea.wp-editor-area {
	min-height: 180px;
}

#bbpress-forums .bbp-topics-widget div {
	color: <?php echo $default_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#bbpress-forums textarea.bbp-the-content, #bbpress-forums textarea.wp-editor-area {
		min-height: 180px;
	}
}

@media screen and (min-width: 1200px) {
	#bbpress-forums textarea.bbp-the-content, #bbpress-forums textarea.wp-editor-area {
		min-height: 180px;
	}
}
