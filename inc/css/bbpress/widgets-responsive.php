<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bbpress widgets responsive
?>

/* widgets */

.widget_display_forums ul, .widget_display_topics ul, .widget_display_replies ul, .widget_display_views ul, .widget_display_stats dl, .widget_display_search form, .widget_display_topics form, .widget_display_replies form {
	margin: 0;
	padding: 0;
	list-style: none;
}

.widget_display_forums li, .widget_display_topics li, .widget_display_replies li, .widget_display_views li {
	margin: 0 0 8px;
	padding: 0;
	line-height: 1.5;
	list-style: none;
}

.widget_display_forums li:last-child, .widget_display_topics li:last-child, .widget_display_replies li:last-child, .widget_display_views li:last-child {
	margin-bottom: 0;
}

.widget_display_forums a, .widget_display_topics a, .widget_display_replies a, .widget_display_views a {
	color: <?php echo $sidebar_widget_link_color; ?>;
}

.widget_display_stats dl {
	display: grid;
	grid-template-columns: 1fr auto;
	gap: 8px 12px;
}

.widget_display_stats dt, .widget_display_stats dd {
	margin: 0;
	color: <?php echo $sidebar_widget_text_color; ?>;
	line-height: 1.5;
}

.widget_display_search #bbp_search, .widget_display_search .button, .widget_display_topics .button, .widget_display_replies .button {
	width: 100%;
}

/* responsive */

@media screen and (max-width: 1199px) {
	#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-search-results {
		border: 0;
	}

	#bbpress-forums li.bbp-header {
		display: none;
	}

	#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic, #bbpress-forums li.bbp-body div.reply, #bbpress-forums li.bbp-body div.hentry {
		margin: 0 0 20px !important;
		border: 1px solid #e0e0e0;
	}

	#bbpress-forums .bbp-forum-info, #bbpress-forums .bbp-topic-title, #bbpress-forums li.bbp-forum-info, #bbpress-forums li.bbp-topic-title, #bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count, #bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
		display: block;
		width: 100%;
		margin: 0 0 10px;
		text-align: left;
	}

	#bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
		margin-bottom: 0;
	}

	#bbpress-forums .bbp-topic-author, #bbpress-forums .bbp-reply-author, #bbpress-forums div.bbp-topic-author, #bbpress-forums div.bbp-reply-author {
		float: none;
		width: 100%;
		margin: 0 0 15px;
		text-align: left;
	}

	#bbpress-forums .bbp-topic-content, #bbpress-forums .bbp-reply-content {
		margin-left: 0;
		padding: 0;
	}

	#bbpress-forums div.bbp-forum-author img.avatar, #bbpress-forums div.bbp-topic-author img.avatar, #bbpress-forums div.bbp-reply-author img.avatar {
		margin: 0 0 10px;
	}

	#bbpress-forums .bbp-pagination-links {
		float: none;
		display: block;
	}

	#bbpress-forums #bbp-single-user-details, #bbpress-forums #bbp-user-body {
		float: none;
		width: 100%;
	}

	#bbpress-forums #bbp-single-user-details {
		margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
	#bbpress-forums li.bbp-forum-info, #bbpress-forums li.bbp-topic-title {
		float: left;
		width: 55%;
	}

	#bbpress-forums li.bbp-forum-topic-count, #bbpress-forums li.bbp-topic-voice-count, #bbpress-forums li.bbp-forum-reply-count, #bbpress-forums li.bbp-topic-reply-count {
		float: left;
		width: 10%;
	}

	#bbpress-forums li.bbp-forum-freshness, #bbpress-forums li.bbp-topic-freshness {
		float: left;
		width: 25%;
	}

	#bbpress-forums .bbp-topic-author, #bbpress-forums .bbp-reply-author, #bbpress-forums div.bbp-topic-author, #bbpress-forums div.bbp-reply-author {
		float: left;
		width: 18%;
	}

	#bbpress-forums .bbp-topic-content, #bbpress-forums .bbp-reply-content {
		margin-left: 20%;
		padding: 0;
	}

	#bbpress-forums #bbp-single-user-details {
		float: left;
		width: 25%;
	}

	#bbpress-forums #bbp-user-body {
		float: right;
		width: 70%;
	}
}
