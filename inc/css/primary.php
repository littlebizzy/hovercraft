<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for primary
?>

/* primary */

@media screen and (max-width: 1199px) {
#primary {
	width: 100%;
	padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
#primary {
	float: left;
	padding: 0 0;
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "width: 768px;\n"; 
		} else { 
			echo "width: 768px;\n"; 
		}  ?>
	}
}
	
/* primary-wide */

@media screen and (max-width: 1199px) {
#primary-wide {
	width: 100%;
	padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
#primary-wide {
	width: 100%;
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
