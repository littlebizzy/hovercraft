<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress editor
?>

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

#bbpress-forums textarea.bbp-the-content, #bbpress-forums textarea.wp-editor-area {
	min-height: 180px;
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

