<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for primary
?>

/* primary layout */
/* primary is 768px, primary-wide is 1200px, and primary-center is centered 768px */

#primary {
	padding: 0 0;
}

@media screen and (max-width: 1199px) {
	#primary {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	#primary {
		float: left;
		width: 768px;
	}
}

/* primary-wide */

#primary-wide {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#primary-wide {
		padding: 0 0;
	}
}

/* primary-center */

@media screen and (max-width: 1199px) {
	#primary-center {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	#primary-center {
		width: 768px;
		margin: 0 auto;
	}
}
