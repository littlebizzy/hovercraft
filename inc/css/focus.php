<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for focus states
?>

/* focus states */

a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible, textarea:focus-visible, summary:focus-visible, [tabindex]:focus-visible {
	outline: 2px solid <?php echo $default_link_color; ?> !important;
	outline-offset: 2px;
}

input:focus-visible, select:focus-visible, textarea:focus-visible {
	box-shadow: inset 0 0 0 1px <?php echo $default_link_color; ?> !important;
}

/* avatar radius overrides */

#bbpress-forums img.avatar, #bbpress-forums img.bbp-author-avatar, #bbpress-forums div.bbp-template-notice img.avatar, #bbpress-forums .widget_display_topics img.avatar, #bbpress-forums .widget_display_replies img.avatar, #bbpress-forums div.bbp-forum-author img.avatar, #bbpress-forums div.bbp-topic-author img.avatar, #bbpress-forums div.bbp-reply-author img.avatar, #bbpress-forums p.bbp-topic-meta img.avatar, #bbpress-forums ul.bbp-reply-revision-log img.avatar, #bbpress-forums ul.bbp-topic-revision-log img.avatar, #bbpress-forums .bbp-logged-in img.avatar, #bbpress-forums #bbp-single-user-details #bbp-user-avatar img.avatar, #bbpress-forums #bbp-user-avatar img.avatar {
	border-radius: 999px;
}
