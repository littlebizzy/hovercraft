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
	}
}

#preheader p {
	margin-bottom: 0;
}

#preheader .inner {
	display: flex;
	align-items: center;
	justify-content: center;
}

.preheader-left,
.preheader-right,
.preheader-center {
	width: 100%;
}

.preheader-center {
	text-align: center;
}

@media screen and (max-width: 1199px) {
	#preheader .inner {
		flex-direction: column;
	}

	.preheader-left,
	.preheader-right {
		text-align: center;
	}
}

<?php if ( $mobile_preheader_widget == 'preheader_right' ) : ?>
@media screen and (max-width: 1199px) {
	.preheader-left {
		display: none;
	}
}
<?php endif; ?>

@media screen and (min-width: 1200px) {
	.preheader-left {
		flex: 0 0 auto;
		width: auto;
		white-space: nowrap;
		text-align: left;
	}
}

<?php if ( $mobile_preheader_widget == 'preheader_left' ) : ?>
@media screen and (max-width: 1199px) {
	.preheader-right {
		display: none;
	}
}
<?php endif; ?>

@media screen and (min-width: 1200px) {
	.preheader-right {
		flex: 1 1 auto;
		width: 100%;
		text-align: right;
	}
}
