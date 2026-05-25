<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress content
?>

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

