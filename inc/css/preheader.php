<?php
// styles for preheader
?>

@media screen and (max-width: 1200px) {
#preheader {
	width: 100%;
	padding: 0px 20px 20px 20px;
	font-size: 14px;
	line-height: 1.5;
	}
}

@media screen and (min-width: 1200px) {
#preheader {
	width: 100%;
	padding: 0px 0px 40px 0px;
	font-size: 14px;
	line-height: 1.5;
	display: table;
	}
}

#preheader p {
	margin-bottom: 0;
}
	
@media screen and (max-width: 1200px) {
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

@media screen and (max-width: 1200px) {
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
	
@media screen and (max-width: 1200px) {
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
