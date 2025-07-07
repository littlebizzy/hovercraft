<?php
// styles for bbpress
?>

/* bbpress */

.forums {
	border-radius: 0px;
}

#bbpress-forums {
	background: 0 0;
    clear: both;
    margin: 0 !important;
	padding: 0 !important;
    overflow: hidden;
    font-size: 12px;
    line-height: 1.5 !important;
}


#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-search-results, #bbpress-forums ul.bbp-topics {
	border: none;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
	border-top: none;
}

div.bbp-forum-header, div.bbp-reply-header, div.bbp-topic-header {
    border-top: none;
    clear: both;
}

.bbp-template-notice {
	display: none;
}

.bbp-pagination-count {
	display: none;
}

li.bbp-header {
	margin: 0 !important;
	background: #ECEFF1 !important;
	font-size: 12px !important;
	font-weight: 600 !important;
	text-transform: uppercase !important;
	color: <?php echo $default_text_color; ?>;
}

li.bbp-body {
	margin: 0 !important;
	padding: 0 !important;
	line-height: 1.5 !important;
	background: #ffffff !important;
	color: <?php echo $default_text_color; ?>;
}

li.bbp-footer {
	display: none;
}

	
.bbp-topic-title {
	font-size: 16px !important;
}

.bbp-reply-content p {
	font-size: 16px !important;
	line-height: 1.5 !important;
}

ul.forum {
	background: #ffffff !important;
}

ul.topic {
	background: #ffffff !important;
	padding: 20px !important;
}

ul.forum-titles {
	font-size: 16px !important;
}

.bbp-topic-voice-count {
visibility: hidden;
}

.bbp-topics-widget div {
	color: #607D8B;
}

.quicktags-toolbar {
	padding: 10px 10px !important;
}

.quicktags-toolbar input  {
	display: inline-block !important;
	width: auto !important;
	height: 20px !important;
	min-height: 20px !important;
	padding: 0 10px !important;
	margin: 0 !important;
	font-size: 12px !important;
	text-transform: uppercase !important;
	text-decoration: none !important;
	cursor: pointer !important;
	white-space: nowrap !important;
	line-height: 0 !important;
	background-color: transparent;
	border: 0 !important;
	color: <?php echo $default_text_color; ?>;
}

.quicktags-toolbar input:hover  {
	background-color: rgba(0, 0, 0, 0.3);	
}
