<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress foundation
?>

/* bbpress */

#bbpress-forums img, #bbpress-forums iframe, #bbpress-forums table, #bbpress-forums tbody, #bbpress-forums tr, #bbpress-forums th, #bbpress-forums td, #bbpress-forums hr {
	border-radius: 0;
}

#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-search-results, #bbpress-forums ul.bbp-threaded-replies, #bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic, #bbpress-forums li.bbp-body div.reply, body.reply-edit #bbpress-forums li.bbp-body div.reply, body.reply-edit #bbpress-forums .reply, #bbpress-forums li.bbp-body div.hentry {
	border-radius: 8px;
}

#bbpress-forums input:not([type="checkbox"]):not([type="hidden"]):not([type="radio"]), #bbpress-forums select, #bbpress-forums textarea, #bbpress-forums button, #bbpress-forums .button, #bbpress-forums .bbp-pagination-links a, #bbpress-forums .bbp-pagination-links span.current, #bbpress-forums .bbp-pagination-links span.dots, #bbpress-forums .bbp-topic-pagination a, #bbpress-forums .bbp-topic-pagination span, #bbpress-forums .bbp-template-notice, #bbpress-forums .bbp-alert-outer, #bbpress-forums .bbp-alert-inner, #bbpress-forums .bbp-alert-actions {
	border-radius: 4px;
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

#bbpress-forums a, #bbpress-forums a:hover, #bbpress-forums a:focus {
	color: <?php echo $default_link_color; ?>;
}

#bbpress-forums ul, #bbpress-forums ol, #bbpress-forums.bbpress-wrapper ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#bbpress-forums li {
	margin: 0;
	padding: 0;
	line-height: 1.5 !important;
}

#bbpress-forums hr {
	height: 1px;
	margin: 20px 0;
	background: <?php echo $default_text_color; ?>;
	border: 0;
}

#bbpress-forums img.avatar, #bbpress-forums img.wp-smiley, #bbpress-forums img.bbp-author-avatar, #bbpress-forums div.bbp-template-notice img.avatar, #bbpress-forums .widget_display_topics img.avatar, #bbpress-forums .widget_display_replies img.avatar {
	max-width: 100%;
	height: auto;
	border: 0;
	box-shadow: none;
}

#bbpress-forums .hidden, #bbpress-forums .bbp-no-js .hide-if-no-js, #bbpress-forums .bbp-js .hide-if-js {
	display: none !important;
}

#bbpress-forums .screen-reader-text, #bbpress-forums .screen-reader-text span, #bbpress-forums .ui-helper-hidden-accessible {
	position: absolute !important;
	width: 1px;
	height: 1px;
	padding: 0;
	margin: -1px;
	overflow: hidden;
	clip: rect(0, 0, 0, 0);
	white-space: nowrap;
	border: 0;
}

#bbpress-forums .clear, #bbpress-forums .bbp-clearfix, #bbpress-forums .bbp-clear {
	clear: both;
}

#bbpress-forums::after, #bbpress-forums ul.bbp-forums::after, #bbpress-forums ul.bbp-topics::after, #bbpress-forums ul.bbp-replies::after, #bbpress-forums ul.bbp-search-results::after, #bbpress-forums li.bbp-header::after, #bbpress-forums li.bbp-body::after, #bbpress-forums ul.forum::after, #bbpress-forums ul.topic::after, #bbpress-forums div.reply::after, #bbpress-forums div.bbp-forum-header::after, #bbpress-forums div.bbp-topic-header::after, #bbpress-forums div.bbp-reply-header::after, #bbpress-forums .bbp-pagination::after, #bbpress-forums #bbp-user-wrapper::after {
	clear: both;
	content: "";
	display: table;
}

/* lists */

#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-search-results, #bbpress-forums ul.bbp-threaded-replies {
	margin: 0 0 30px;
	padding: 0;
	background: transparent;
	border: 0;
}

#bbpress-forums li.bbp-header {
	clear: both;
	margin: 0 !important;
	padding: 10px 20px !important;
	background: <?php echo $search_bar_background_color; ?> !important;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	font-weight: 600 !important;
	line-height: 1.5 !important;
	text-transform: uppercase !important;
	overflow: hidden;
}

#bbpress-forums li.bbp-header ul {
	margin: 0;
	padding: 0;
	overflow: hidden;
}

#bbpress-forums li.bbp-body {
	clear: both;
	margin: 0 !important;
	padding: 0 !important;
	background: #ffffff !important;
	color: <?php echo $default_text_color; ?>;
	line-height: 1.5 !important;
}

#bbpress-forums li.bbp-footer {
	display: none;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic, #bbpress-forums li.bbp-body div.reply, body.reply-edit #bbpress-forums li.bbp-body div.reply, body.reply-edit #bbpress-forums .reply, #bbpress-forums li.bbp-body div.hentry {
	clear: both;
	padding: 20px !important;
	background: #ffffff !important;
	border-top: 0;
	overflow: hidden;
}

#bbpress-forums ul.forum, #bbpress-forums ul.topic, #bbpress-forums div.reply, #bbpress-forums div.even, #bbpress-forums div.odd, #bbpress-forums ul.even, #bbpress-forums ul.odd, #bbpress-forums .status-trash.even, #bbpress-forums .status-trash.odd, #bbpress-forums .status-spam.even, #bbpress-forums .status-spam.odd, #bbpress-forums .status-pending.even, #bbpress-forums .status-pending.odd {
	background: #ffffff !important;
}

#bbpress-forums ul.forum-titles {
	font-size: 16px !important;
}

#bbpress-forums div.bbp-forum-header, #bbpress-forums div.bbp-topic-header, #bbpress-forums div.bbp-reply-header {
	clear: both;
	margin: 0;
	padding: 10px 20px;
	background: <?php echo $search_bar_background_color; ?>;
	border-top: 0;
	color: <?php echo $default_text_color; ?>;
	overflow: hidden;
}

#bbpress-forums .bbp-forum-info, #bbpress-forums .bbp-topic-title, #bbpress-forums li.bbp-forum-info, #bbpress-forums li.bbp-topic-title {
	font-size: 16px !important;
	line-height: 1.5 !important;
	text-align: left;
}

#bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count, #bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
	text-align: center;
}

#bbpress-forums .bbp-forum-topic-count, #bbpress-forums .bbp-forum-reply-count, #bbpress-forums .bbp-forum-freshness, #bbpress-forums .bbp-topic-voice-count, #bbpress-forums .bbp-topic-reply-count, #bbpress-forums .bbp-topic-freshness, #bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count, #bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-topic-voice-count {
	visibility: hidden;
}

#bbpress-forums .bbp-forum-title, #bbpress-forums .bbp-topic-permalink, #bbpress-forums .bbp-reply-permalink, #bbpress-forums div.bbp-forum-title h3, #bbpress-forums div.bbp-topic-title h3, #bbpress-forums div.bbp-reply-title h3 {
	font-weight: 600;
}

#bbpress-forums div.bbp-forum-title h3, #bbpress-forums div.bbp-topic-title h3, #bbpress-forums div.bbp-reply-title h3 {
	margin: 0 0 8px;
	padding: 0;
	background: transparent;
	border: 0;
	font-size: 16px;
	line-height: 1.3;
	text-transform: none;
}

#bbpress-forums .bbp-forum-info .bbp-forum-content, #bbpress-forums p.bbp-topic-meta {
	margin: 5px 0;
	padding: 0;
	font-size: 12px !important;
	word-wrap: break-word;
	overflow-wrap: break-word;
}

#bbpress-forums p.bbp-topic-meta span {
	white-space: nowrap;
}

#bbpress-forums .bbp-forums-list {
	margin: 8px 0 0;
	padding: 0;
	border: 0;
}

#bbpress-forums .bbp-forums-list li, #bbpress-forums .bbp-forums-list .bbp-forum {
	display: inline;
	margin: 0;
	padding: 0;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-forums-list .bbp-forum.css-sep:not(:last-child)::after {
	content: ", ";
}
