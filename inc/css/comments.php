<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for comments
?>

/* comments */

/* remove bullets from comment lists */
.comment-list,
.comment-list ol,
.comment-list ul,
.comment-list .children,
.comment-list li {
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

.comment-reply-link:hover,
#cancel-comment-reply-link:hover {
	color: <?php echo $default_hover_color; ?>;
	text-decoration: underline;
}

/* nested comments */
.comment-list .children {
	border-left: 1px solid rgba(0, 0, 0, 0.08);
	border-radius: 0;
	margin-left: 2rem;
	margin-top: 1rem;
	padding-left: 1rem;
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
#respond textarea,
#respond input[type="text"],
#respond input[type="email"],
#respond input[type="url"] {
	max-width: 100%;
	border-radius: 4px;
	width: 100%;
}

#respond input[type="submit"] {
	border-radius: 4px;
	cursor: pointer;
}
