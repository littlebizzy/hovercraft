<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for byline
?>

.post-byline {
	margin-bottom: 30px;
	line-height: 16px;
}

.post-byline-archive {
	margin-bottom: 20px;
	line-height: 1;
}

.byline-photo {
	border-radius: 999px;
	display: inline-block;
	height: 25px;
	margin-right: 5px;
	overflow: hidden;
	vertical-align: middle;
	width: 25px;
}

.byline-photo img,
.byline-avatar {
	border-radius: 999px;
	display: block;
	height: 100%;
	object-fit: cover;
	width: 100%;
}

.avatar {
	border-radius: 999px;
}

.post-author {
	display: inline;
}

.author-name {
	font-weight: 600;
}

.date-published {
	display: inline;
}

.date-updated {
	display: inline;
}
