<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for branding
?>

#branding {
	display: flex;
	align-items: center;
}

#branding a {
	text-decoration: none !important;
}

.branding-media {
	flex: 0 0 auto;
	min-width: auto;
	white-space: nowrap;
}

/* branding text */

.branding-text {
	flex: 1 1 auto;
	min-width: 0;
	text-align: left;
}
