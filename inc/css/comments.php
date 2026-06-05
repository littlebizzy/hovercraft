<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for comments
?>

/* comments */

@media screen and (max-width: 1199px) {
	.comments-area {
		margin-top: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.comments-area {
		margin-top: 30px;
	}
}

/* remove bullets from comment lists */
.comment-list,
.comment-list .children {
	list-style: none;
	margin: 0;
	padding: 0;
}

.comment-list > li,
.comment-list .children > li {
	list-style: none;
	margin: 0;
	padding: 0;
}

/* comment body styling */
.comment-body {
	border-bottom: 1px solid rgba(0, 0, 0, 0.12);
	border-radius: 0;
	margin-bottom: 30px;
	padding-bottom: 20px;
}

/* author name */
.comment-author {
	font-weight: 600;
	margin-bottom: 4px;
}

/* comment meta */
.comment-meta {
	color: rgba(0, 0, 0, 0.62);
	font-size: 14px;
	margin-bottom: 10px;
}

/* comment content */
.comment-content {
	font-size: 16px;
	line-height: 1.6;
}

.comment-content ul,
.comment-content ol {
	margin: 0 0 1.5em 1.5em;
	padding-left: 1.5em;
}

.comment-content ul {
	list-style: disc;
}

.comment-content ol {
	list-style: decimal;
}

.comment-content li {
	margin-bottom: 0.5em;
	padding: 0;
}

/* reply link */
.comment-reply-link,
#cancel-comment-reply-link {
	border-radius: 0;
	color: <?php echo $default_link_color; ?>;
	display: inline-block;
	font-size: 14px;
	margin-top: 10px;
	text-decoration: none;
	transition: color 0.2s ease;
}

/* cancel reply link */
#cancel-comment-reply-link {
	text-decoration: <?php echo $default_link_decoration; ?>;
}

.comment-reply-link:hover,
#cancel-comment-reply-link:hover {
	color: <?php echo $default_hover_color; ?>;
	text-decoration: underline;
}

/* reply title */
.comment-reply-title small {
	display: inline-block;
	font-size: 14px;
	font-weight: 400;
	margin-left: 8px;
}

.comment-reply-title #cancel-comment-reply-link {
	margin-top: 0;
	vertical-align: baseline;
}

/* nested comments */
.comment-list .children {
	border-left: 1px solid rgba(0, 0, 0, 0.08);
	border-radius: 0;
	margin-left: 2rem;
	margin-top: 1rem;
	padding-left: 1rem;
}

/* comment anchors */
.comment-list .comment,
.comment-list .pingback,
.comment-list .trackback,
#respond {
	scroll-margin-top: 120px;
}

/* pagination */
.comment-navigation {
	font-size: 14px;
	margin-top: 20px;
}

.comment-navigation .nav-links {
	display: flex;
	gap: 20px;
	justify-content: space-between;
}

.comment-navigation .nav-previous,
.comment-navigation .nav-next {
	flex: 1;
}

.comment-navigation .nav-next {
	text-align: right;
}

/* moderation notice */
.comment-awaiting-moderation {
	font-style: italic;
	margin-bottom: 10px;
}

/* post author comments */
.bypostauthor .comment-body {
	border-left: 3px solid rgba(0, 0, 0, 0.12);
	padding-left: 16px;
}

/* comment form */
.logged-in-as,
.comment-notes {
	font-size: 14px;
}

.logged-in-as .required-field-message,
.comment-notes .required-field-message {
	display: block;
	margin-top: 4px;
}

#respond textarea,
#respond input[type="text"],
#respond input[type="email"] {
	max-width: 100%;
	border-radius: 4px;
	width: 100%;
}

#respond input[type="submit"] {
	border-radius: 4px;
	cursor: pointer;
}

.comment-form-cookies-consent {
	display: flex;
	align-items: flex-start;
	gap: 8px;
}

.comment-form-cookies-consent input[type="checkbox"] {
	margin-top: 0.35em;
}

.comment-form-cookies-consent label {
	display: inline;
}
