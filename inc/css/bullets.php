<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for bullets
?>

#bullets {
	column-fill: balance;
}

@media screen and (max-width: 1199px) {
	#bullets {
		columns: 1;
		column-gap: 0;
	}
}

@media screen and (min-width: 1200px) {
	#bullets {
		columns: 2;
		column-gap: 40px;
	}
}

#bullets p {
	font-size: 14px;
}

@media screen and (max-width: 1199px) {
	#bullets p {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	#bullets p {
		margin-bottom: 30px;
	}
}
	
#bullets ul, #bullets ol {
	font-size: 14px;
	margin-bottom: 40px;
}

#bullets li {
	font-size: 14px;
	margin-bottom: 10px;
}

.faq-item {
	display: inline-block;
}
