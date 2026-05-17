<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress
?>

/* bbpress */

.forums, #bbpress-forums, #bbpress-forums div, #bbpress-forums span, #bbpress-forums ul, #bbpress-forums ol, #bbpress-forums li, #bbpress-forums p, #bbpress-forums a, #bbpress-forums img, #bbpress-forums fieldset, #bbpress-forums form, #bbpress-forums label, #bbpress-forums legend, #bbpress-forums table, #bbpress-forums tbody, #bbpress-forums tr, #bbpress-forums th, #bbpress-forums td {
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

/* topics and replies */

#bbpress-forums .bbp-forum-content, #bbpress-forums .bbp-topic-content, #bbpress-forums .bbp-reply-content {
	position: relative;
	color: <?php echo $default_text_color; ?>;
	font-size: 16px !important;
	line-height: 1.5 !important;
	text-align: left;
	word-wrap: break-word;
	overflow-wrap: break-word;
}

#bbpress-forums .bbp-forum-content p, #bbpress-forums .bbp-topic-content p, #bbpress-forums .bbp-reply-content p {
	font-size: 16px !important;
	line-height: 1.5 !important;
}

#bbpress-forums div.bbp-forum-content::after, #bbpress-forums div.bbp-topic-content::after, #bbpress-forums div.bbp-reply-content::after {
	clear: both;
	content: "";
	display: table;
}

#bbpress-forums div.bbp-topic-content a, #bbpress-forums div.bbp-reply-content a {
	display: inline;
	margin: 0;
	padding: 0;
	background: transparent;
	border: 0;
	color: <?php echo $default_link_color; ?>;
	font-weight: 400;
	text-decoration: underline;
}

#bbpress-forums div.bbp-topic-content a.bbp-user-mention, #bbpress-forums div.bbp-reply-content a.bbp-user-mention {
	background: transparent;
	border: 0;
	color: <?php echo $default_link_color; ?>;
	font-weight: 600;
	text-decoration: none;
	text-shadow: none;
}

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

/* breadcrumbs and tags */

div.bbp-breadcrumb, div.bbp-topic-tags, #bbp-topic-hot-tags, #bbpress-forums div.bbp-breadcrumb p, #bbpress-forums div.bbp-topic-tags, #bbpress-forums div.bbp-topic-tags p {
	margin: 0 0 20px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

div.bbp-breadcrumb a, div.bbp-topic-tags a, #bbp-topic-hot-tags a {
	color: <?php echo $default_link_color; ?>;
}

#bbpress-forums div.bbp-topic-tags {
	clear: both;
}

/* pagination */

#bbpress-forums .bbp-pagination, #bbpress-forums .bbp-topic-pagination {
	clear: both;
	margin: 0 0 20px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-pagination {
	float: left;
	width: 100%;
}

#bbpress-forums .bbp-pagination-count {
	display: none;
	float: left;
}

#bbpress-forums .bbp-pagination-links {
	float: right;
	list-style: none;
	display: inline;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
}

#bbpress-forums .bbp-pagination-links a, #bbpress-forums .bbp-pagination-links span.current, #bbpress-forums .bbp-pagination-links span.dots {
	display: block;
	float: left;
	padding: 4px 8px;
	margin-left: 5px;
	background: #ffffff;
	border: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	line-height: 1.5 !important;
	text-decoration: none;
}

#bbpress-forums .bbp-pagination-links span.current, #bbpress-forums .bbp-pagination-links a:hover {
	background: <?php echo $search_bar_background_color; ?>;
}

#bbpress-forums .bbp-topic-pagination {
	display: inline-block;
	margin-left: 5px;
	margin-bottom: 2px;
}

#bbpress-forums .bbp-topic-pagination a, #bbpress-forums .bbp-topic-pagination span {
	display: inline-block;
	padding: 1px 4px;
	background: #ffffff;
	border: 0;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px !important;
	font-weight: 400;
	line-height: 1.5 !important;
	text-decoration: none;
}

/* search and notices */

#bbpress-forums .bbp-search-form, #bbpress-forums #bbp-search-form, div.bbp-search-form {
	clear: both;
	margin: 0 0 20px;
}

#bbpress-forums #bbp_search, #bbpress-forums .bbp-search-form input[type="text"], div.bbp-search-form input, div.bbp-search-form button {
	max-width: 100%;
}

#bbpress-forums .bbp-template-notice, #bbpress-forums .bbp-template-notice.info, #bbpress-forums .bbp-template-notice.warning, #bbpress-forums .bbp-template-notice.error, #bbpress-forums .bbp-template-notice.important, div.bbp-template-notice {
	display: none;
}

#bbpress-forums .bbp-alert-outer, #bbpress-forums .bbp-alert-inner, #bbpress-forums .bbp-alert-actions {
	background: #ffffff;
	border: 0;
	color: <?php echo $default_text_color; ?>;
}

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

#merge_tag, #delete_tag, #bbpress-forums p.form-allowed-tags, body.page #bbpress-forums .bbp-reply-form code, body.page #bbpress-forums .bbp-topic-form code, body.single-topic #bbpress-forums .bbp-reply-form code, body.single-forum #bbpress-forums .bbp-topic-form code, body.topic-edit #bbpress-forums .bbp-topic-form code, body.reply-edit #bbpress-forums .bbp-reply-form code {
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

#bbpress-forums .bbp-the-content-wrapper {
	margin-bottom: 16px;
}

#bbpress-forums div.wp-editor-container, #bbpress-forums div.bbp-the-content-wrapper table, #bbpress-forums div.bbp-the-content-wrapper tbody, #bbpress-forums div.bbp-the-content-wrapper tr, #bbpress-forums div.bbp-the-content-wrapper td {
	border: 0;
}

#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content, #bbpress-forums div.bbp-the-content-wrapper textarea.wp-editor-area {
	width: 100%;
}

#bbpress-forums div.bbp-the-content-wrapper input[type="button"] {
	box-shadow: none !important;
}

#bbpress-forums div.bbp-the-content-wrapper td.mceToolbar, #bbpress-forums div.bbp-the-content-wrapper td.mceStatusbar {
	background: <?php echo $search_bar_background_color; ?>;
	border: 0;
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

#bbpress-forums div.bbp-submit-wrapper {
	clear: both;
	margin-top: 16px;
}

#bbpress-forums div.bbp-reply-to, #bbpress-forums div#bbp-cancel-reply-to {
	margin: 0 0 20px;
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

#bbpress-forums div#bbp-cancel-reply-to a {
	color: <?php echo $default_link_color; ?>;
}

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

#bbpress-forums #bbp-single-user-details #bbp-user-description {
	float: none;
}

#bbpress-forums #bbp-user-navigation ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#bbpress-forums #bbp-user-navigation li, #bbpress-forums #bbp-single-user-details #bbp-user-navigation li {
	margin: 0;
	padding: 0;
}

#bbpress-forums #bbp-user-navigation a, #bbpress-forums #bbp-single-user-details #bbp-user-navigation a {
	display: block;
	padding: 8px 0;
	border: 0;
	color: <?php echo $default_link_color; ?>;
	text-decoration: none;
}

#bbpress-forums #bbp-user-navigation li.current a, #bbpress-forums #bbp-user-navigation a:hover, #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a, #bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover {
	color: <?php echo $default_hover_color; ?>;
}

#bbpress-forums #bbp-user-body .bbp-user-section, #bbpress-forums #bbp-user-body .bbp-user-profile, #bbpress-forums #bbp-user-body .bbp-user-topics-started, #bbpress-forums #bbp-user-body .bbp-user-replies-created, #bbpress-forums #bbp-user-body .bbp-user-favorites, #bbpress-forums #bbp-user-body .bbp-user-subscriptions {
	margin: 0 0 30px;
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums dl.bbp-user-capabilities {
	display: inline-block;
	margin: 0 0 30px;
	color: <?php echo $default_text_color; ?>;
	vertical-align: top;
}

#bbpress-forums dl.bbp-user-capabilities dt, #bbpress-forums dl.bbp-user-capabilities dd {
	margin: 0 0 8px;
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums #bbp-your-profile fieldset {
	margin: 0 0 30px;
	padding: 0;
	border: 0;
}

#bbpress-forums #bbp-your-profile fieldset div {
	margin-bottom: 16px;
}

#bbpress-forums #bbp-your-profile label, #bbpress-forums #bbp-your-profile fieldset label[for], #bbpress-forums #bbp-your-profile fieldset dl label[for] {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums #bbp-your-profile fieldset input, #bbpress-forums #bbp-your-profile fieldset select, #bbpress-forums #bbp-your-profile fieldset textarea, #bbpress-forums #bbp-your-profile fieldset input:focus, #bbpress-forums #bbp-your-profile fieldset textarea:focus, #bbpress-forums #bbp-your-profile fieldset.bbp-form input.checkbox {
	max-width: 100%;
}

#bbpress-forums #bbp-your-profile .description, #bbpress-forums #bbp-your-profile .indicator-hint, #bbpress-forums #bbp-your-profile fieldset p.description, #bbpress-forums div.indicator-hint {
	color: <?php echo $default_text_color; ?>;
	font-size: 12px;
	line-height: 1.5;
}

#bbpress-forums #password, #bbpress-forums #pass1, #bbpress-forums #pass1-text, #bbpress-forums #pass-strength-result, #bbpress-forums .password-input-wrapper, #bbpress-forums .password-button-wrapper, #bbpress-forums .pw-weak, #bbpress-forums .show-password {
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums #pass-strength-result, #bbpress-forums #password #pass-strength-result.short, #bbpress-forums #password #pass-strength-result.bad, #bbpress-forums #password #pass-strength-result.good, #bbpress-forums #password #pass-strength-result.strong {
	margin: 8px 0 0;
	padding: 8px;
	background: <?php echo $search_bar_background_color; ?>;
	border: 0;
	color: <?php echo $default_text_color; ?>;
}

#bbpress-forums #password #pass1.short, #bbpress-forums #password #pass1.bad, #bbpress-forums #password #pass1.good, #bbpress-forums #password #pass1.strong {
	color: <?php echo $default_text_color; ?>;
}

/* actions and widgets */

#bbpress-forums #favorite-toggle, #bbpress-forums #subscription-toggle, #bbpress-forums #favorite-toggle span, #bbpress-forums #subscription-toggle span, #bbpress-forums #favorite-toggle a, #bbpress-forums #subscription-toggle a, #bbpress-forums .is-favorite, #bbpress-forums .is-subscribed {
	color: <?php echo $default_link_color; ?>;
}

#bbpress-forums .bbp-row-actions #favorite-toggle, #bbpress-forums .bbp-row-actions #subscription-toggle {
	float: none;
}

#bbpress-forums #subscription-toggle, #bbpress-forums #favorite-toggle {
	float: right;
}

.widget_display_forums ul, .widget_display_topics ul, .widget_display_replies ul, .widget_display_views ul, .widget_display_stats dl, .bbp_widget_login ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.widget_display_forums li, .widget_display_topics li, .widget_display_replies li, .widget_display_views li, .bbp_widget_login li {
	margin: 0 0 8px;
	padding: 0;
	color: <?php echo $default_text_color; ?>;
}

.widget_display_topics div, .widget_display_replies div, #bbpress-forums .bbp-topics-widget div {
	color: <?php echo $default_text_color; ?>;
}

.activity-list li.bbp_topic_create .activity-content .activity-inner, .activity-list li.bbp_reply_create .activity-content .activity-inner {
	color: <?php echo $default_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#bbpress-forums li.bbp-forum-info, #bbpress-forums li.bbp-topic-title, #bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count, #bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
		float: none;
		width: 100%;
		text-align: left;
	}

	#bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count, #bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
		margin-top: 8px;
	}

	#bbpress-forums li.bbp-header li.bbp-forum-topic-count, #bbpress-forums li.bbp-header li.bbp-topic-voice-count, #bbpress-forums li.bbp-header li.bbp-forum-reply-count, #bbpress-forums li.bbp-header li.bbp-topic-reply-count, #bbpress-forums li.bbp-header li.bbp-forum-freshness, #bbpress-forums li.bbp-header li.bbp-topic-freshness {
		display: none;
	}

	#bbpress-forums .bbp-forums-list li, #bbpress-forums .bbp-forums-list span, #bbpress-forums .bbp-forums-list .bbp-forum {
		display: block;
	}

	#bbpress-forums div.bbp-forum-author, #bbpress-forums div.bbp-topic-author, #bbpress-forums div.bbp-reply-author {
		float: none;
		position: relative;
		width: auto;
		min-height: 80px;
		padding-left: 80px;
		margin: 0 0 20px;
		text-align: left;
	}

	#bbpress-forums div.bbp-forum-author img.avatar, #bbpress-forums div.bbp-topic-author img.avatar, #bbpress-forums div.bbp-reply-author img.avatar {
		position: absolute;
		top: 0;
		left: 0;
		width: 60px;
		max-width: 60px;
		margin: 0;
	}

	#bbpress-forums div.bbp-forum-author .bbp-author-name, #bbpress-forums div.bbp-topic-author .bbp-author-name, #bbpress-forums div.bbp-reply-author .bbp-author-name {
		clear: none;
		display: inline-block;
	}

	#bbpress-forums div.bbp-forum-content, #bbpress-forums div.bbp-topic-content, #bbpress-forums div.bbp-reply-content {
		clear: both;
		margin: 0;
		padding: 0;
	}

	#bbpress-forums li.bbp-header .bbp-search-author, #bbpress-forums li.bbp-header .bbp-forum-author, #bbpress-forums li.bbp-header .bbp-topic-author, #bbpress-forums li.bbp-header .bbp-reply-author, #bbpress-forums li.bbp-header .bbp-search-content, #bbpress-forums li.bbp-header .bbp-forum-content, #bbpress-forums li.bbp-header .bbp-topic-content, #bbpress-forums li.bbp-header .bbp-reply-content {
		float: none;
		width: auto;
		margin: 0;
		padding: 0;
	}

	#bbpress-forums span.bbp-topic-post-date, #bbpress-forums span.bbp-reply-post-date, #bbpress-forums span.bbp-admin-links {
		float: none;
		clear: both;
	}

	#bbpress-forums .bbp-pagination-links {
		float: none;
		display: block;
		clear: both;
	}

	#bbpress-forums .bbp-pagination-links a, #bbpress-forums .bbp-pagination-links span.current, #bbpress-forums .bbp-pagination-links span.dots {
		margin: 0 5px 5px 0;
	}

	#bbpress-forums div.bbp-submit-wrapper {
		float: none;
	}

	#bbpress-forums #bbp-single-user-details {
		float: none;
		width: 100%;
	}

	#bbpress-forums #bbp-single-user-details #bbp-user-avatar, #bbpress-forums #bbp-single-user-details #bbp-user-navigation, #bbpress-forums #bbp-user-body {
		float: none;
		width: 100%;
		margin-left: 0;
	}
}

@media screen and (min-width: 1200px) {
	#bbpress-forums li.bbp-forum-info, #bbpress-forums li.bbp-topic-title {
		float: left;
		width: 55%;
		text-align: left;
	}

	#bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count {
		float: left;
		width: 10%;
		text-align: center;
	}

	#bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
		float: left;
		width: 22%;
		text-align: center;
	}

	#bbpress-forums div.bbp-forum-author, #bbpress-forums div.bbp-topic-author, #bbpress-forums div.bbp-reply-author {
		float: left;
		width: 115px;
		text-align: center;
	}

	#bbpress-forums li.bbp-header .bbp-search-author, #bbpress-forums li.bbp-header .bbp-forum-author, #bbpress-forums li.bbp-header .bbp-topic-author, #bbpress-forums li.bbp-header .bbp-reply-author {
		float: left;
		width: 120px;
		margin: 0;
		padding: 0;
	}

	#bbpress-forums li.bbp-header .bbp-search-content, #bbpress-forums li.bbp-header .bbp-forum-content, #bbpress-forums li.bbp-header .bbp-topic-content, #bbpress-forums li.bbp-header .bbp-reply-content {
		margin-left: 140px;
		padding: 0;
		text-align: left;
	}

	#bbpress-forums div.bbp-forum-content, #bbpress-forums div.bbp-topic-content, #bbpress-forums div.bbp-reply-content {
		margin-left: 130px;
		padding: 0 0 0 20px;
	}

	#bbpress-forums div.bbp-submit-wrapper {
		float: right;
	}

	#bbpress-forums textarea.bbp-the-content, #bbpress-forums textarea.wp-editor-area {
		min-height: 180px;
	}

	#bbpress-forums #bbp-single-user-details {
		float: left;
		width: 150px;
		margin: 0;
	}

	#bbpress-forums #bbp-single-user-details #bbp-user-avatar {
		width: 150px;
	}

	#bbpress-forums #bbp-single-user-details #bbp-user-navigation {
		float: none;
		margin: 0;
	}

	#bbpress-forums #bbp-user-body {
		margin-left: 180px;
	}
}
