<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for comments
?>

/* comments */

/* remove bullets from all comment lists */
ul.comments-list,
ul.comment-list,
ul.comment-list ul,
ul.children,
ul.comment-list .children,
ul.comment-list li {
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
.comment-reply-link {
	border-radius: 0;
	color: <?php echo $default_link_color; ?>;
	display: inline-block;
	font-size: 14px;
	margin-top: 10px;
	text-decoration: none;
	transition: color 0.2s ease;
}

.comment-reply-link:hover {
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
	display: flex;
	font-size: 14px;
	gap: 20px;
	justify-content: space-between;
	margin-top: 20px;
}

.comment-nav-prev,
.comment-nav-next {
	flex: 1;
}

.comment-nav-next {
	text-align: right;
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
