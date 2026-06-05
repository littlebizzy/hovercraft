<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for byline
?>

/* post byline */

.post-byline {
	margin-bottom: 24px;
}

.post-byline-archive {
	margin-bottom: 24px;
}

/* byline photo */

.byline-photo {
	border-radius: 999px;
	display: inline-block;
	height: 24px;
	line-height: 0;
	margin-right: 4px;
	overflow: hidden;
	vertical-align: middle;
	width: 24px;
}

.byline-photo img,
.byline-avatar {
	border-radius: inherit;
	display: inline-block;
	height: 100%;
	object-fit: cover;
	width: 100%;
}

/* post author */

.post-author {
	display: inline;
}

/* avatars */

.avatar {
	border-radius: 999px;
}

/* author name */

.author-name {
	font-weight: 600;
}

/* byline dates */

.date-published,
.date-updated {
	display: inline;
}
