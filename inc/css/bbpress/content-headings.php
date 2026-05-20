<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress content headings
?>

/* bbpress heading fallback reset in case native plugin output leaks through */

#bbpress-forums div.bbp-topic-content h1, #bbpress-forums div.bbp-topic-content h2, #bbpress-forums div.bbp-topic-content h3, #bbpress-forums div.bbp-topic-content h4, #bbpress-forums div.bbp-topic-content h5, #bbpress-forums div.bbp-topic-content h6, #bbpress-forums div.bbp-reply-content h1, #bbpress-forums div.bbp-reply-content h2, #bbpress-forums div.bbp-reply-content h3, #bbpress-forums div.bbp-reply-content h4, #bbpress-forums div.bbp-reply-content h5, #bbpress-forums div.bbp-reply-content h6 {
	color: <?php echo $default_text_color; ?>;
	line-height: 1.3;
}

#bbpress-forums div.bbp-topic-content ul, #bbpress-forums div.bbp-topic-content ol, #bbpress-forums div.bbp-reply-content ul, #bbpress-forums div.bbp-reply-content ol {
	margin: 0 0 20px 20px;
	padding: 0;
	list-style-position: outside;
}

#bbpress-forums div.bbp-topic-content ul, #bbpress-forums div.bbp-reply-content ul {
	list-style-type: disc;
}

#bbpress-forums div.bbp-topic-content ol, #bbpress-forums div.bbp-reply-content ol {
	list-style-type: decimal;
}

#bbpress-forums div.bbp-topic-content li, #bbpress-forums div.bbp-reply-content li {
	margin-bottom: 8px;
}

#bbpress-forums div.bbp-topic-content code, #bbpress-forums div.bbp-reply-content code {
	padding: 2px 5px;
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums div.bbp-topic-content pre, #bbpress-forums div.bbp-reply-content pre {
	padding: 16px 20px;
	margin-bottom: 20px;
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $default_text_color; ?>;
	overflow-x: auto;
	white-space: pre;
}

#bbpress-forums div.bbp-topic-content pre code, #bbpress-forums div.bbp-reply-content pre code {
	padding: 0;
	background: transparent;
}

#bbpress-forums div.bbp-topic-content img, #bbpress-forums div.bbp-reply-content img, #bbpress-forums div.bbp-topic-content iframe.wp-embedded-content, #bbpress-forums div.bbp-reply-content iframe.wp-embedded-content {
	max-width: 100%;
}

#bbpress-forums div.bbp-topic-content img, #bbpress-forums div.bbp-reply-content img {
	height: auto;
}

#bbpress-forums div.bbp-topic-content p:last-child, #bbpress-forums div.bbp-reply-content p:last-child {
	margin-bottom: 0;
}

#bbpress-forums .bbp-author-name, #bbpress-forums .bbp-author-role, #bbpress-forums .bbp-author-ip, #bbpress-forums .bbp-topic-meta, #bbpress-forums .bbp-reply-post-date, #bbpress-forums .bbp-topic-started-by, #bbpress-forums .bbp-topic-started-in, #bbpress-forums .bbp-forum-freshness, #bbpress-forums .bbp-topic-freshness, #bbpress-forums .bbp-reply-header, #bbpress-forums .bbp-topic-header, #bbpress-forums span.bbp-author-ip {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums .bbp-topic-author, #bbpress-forums .bbp-reply-author, #bbpress-forums div.bbp-forum-author, #bbpress-forums div.bbp-topic-author, #bbpress-forums div.bbp-reply-author {
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
	text-align: center;
	word-wrap: break-word;
	overflow-wrap: break-word;
}

#bbpress-forums .bbp-topic-author .bbp-author-name, #bbpress-forums .bbp-reply-author .bbp-author-name, #bbpress-forums div.bbp-forum-author .bbp-author-name, #bbpress-forums div.bbp-topic-author .bbp-author-name, #bbpress-forums div.bbp-reply-author .bbp-author-name {
	display: block;
	clear: both;
	margin: 0;
	font-weight: 600;
	word-wrap: break-word;
	overflow-wrap: break-word;
}

#bbpress-forums div.bbp-forum-author .bbp-author-role, #bbpress-forums div.bbp-topic-author .bbp-author-role, #bbpress-forums div.bbp-reply-author .bbp-author-role {
	display: block;
	font-size: 12px !important;
	font-style: normal;
	line-height: 1.5 !important;
}

#bbpress-forums div.bbp-forum-author img.avatar, #bbpress-forums div.bbp-topic-author img.avatar, #bbpress-forums div.bbp-reply-author img.avatar, #bbpress-forums p.bbp-topic-meta img.avatar, #bbpress-forums ul.bbp-reply-revision-log img.avatar, #bbpress-forums ul.bbp-topic-revision-log img.avatar {
	display: block;
	max-width: 80px;
	height: auto;
	margin: 0 auto 10px;
	padding: 0;
	border: 0;
	float: none;
}

#bbpress-forums .bbp-admin-links, #bbpress-forums .bbp-row-actions, #bbpress-forums .bbp-topic-revision-log, #bbpress-forums .bbp-reply-revision-log, #bbpress-forums span.bbp-admin-links, #bbpress-forums td.bbp-topic-admin-links, #bbpress-forums td.bbp-topic-counts {
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums span.bbp-admin-links {
	float: right;
}

#bbpress-forums .bbp-reply-content ul.bbp-topic-revision-log, #bbpress-forums .bbp-reply-content ul.bbp-reply-revision-log {
	margin: 20px 0 0;
	padding: 0;
	border-top: 0;
	list-style: none;
}

#bbpress-forums .bbp-reply-content ul.bbp-topic-revision-log li, #bbpress-forums .bbp-reply-content ul.bbp-reply-revision-log li {
	margin: 0 0 8px;
	padding: 0;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .status-trash, #bbpress-forums .status-spam, #bbpress-forums .status-pending, #bbpress-forums .status-closed, #bbpress-forums .sticky, #bbpress-forums .super-sticky, #bbpress-forums ul.status-closed {
	background: #ffffff !important;
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums ul.status-pending a, #bbpress-forums ul.status-closed a {
	color: <?php echo $default_link_color; ?>;
}

