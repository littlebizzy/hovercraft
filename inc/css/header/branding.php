<?php

// block direct access
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

@media screen and (max-width: 1199px) {
	#branding {
		column-gap: 8px;
	}
}

@media screen and (min-width: 1200px) {
	#branding {
		column-gap: 16px;
	}
}
