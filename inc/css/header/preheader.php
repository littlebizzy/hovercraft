<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for preheader
?>

#preheader {
	width: 100%;
	font-size: 14px;
	line-height: 1.5;
}

@media screen and (max-width: 1199px) {
	#preheader {
		padding: 0 20px 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#preheader {
		padding: 0 0 40px 0;
		display: table;
	}
}

#preheader p {
	margin-bottom: 0;
}

@media screen and (max-width: 1199px) {
	.preheader-left {
		vertical-align: middle;
		text-align: center;
		<?php if ( $mobile_preheader_widget == 'preheader_right') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
	.preheader-left {
		display: table-cell;
		vertical-align: middle;
		height: inherit;
		white-space: nowrap;
		width: auto;
		text-align: left;
	}
}

@media screen and (max-width: 1199px) {
	.preheader-right {
		vertical-align: middle;
		text-align: center;
		<?php if ( $mobile_preheader_widget == 'preheader_left') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
	.preheader-right {
		display: table-cell;
		vertical-align: middle;
		height: inherit;
		text-align: right;
		width: 100%;
	}
}

@media screen and (max-width: 1199px) {
	.preheader-center {
		text-align: center;
	}
}

@media screen and (min-width: 1200px) {
	.preheader-center {
		vertical-align: middle;
		height: inherit;
		text-align: center;
	}
}
