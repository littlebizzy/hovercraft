<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for topbar
?>

#topbar {
	width: 100%;
	font-weight: <?php echo $topbar_font_weight; ?>;
	text-transform: <?php echo $topbar_text_transform; ?>;
	line-height: 1.5;
	background: <?php echo $topbar_background_color; ?>;
	color: <?php echo $topbar_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#topbar {
		padding: 10px 20px;
		font-size: <?php echo $topbar_mobile_font_size; ?>px;
	}
}

@media screen and (min-width: 1200px) {
	#topbar {
		padding: 10px 0;
		font-size: <?php echo $topbar_desktop_font_size; ?>px;
		display: table;
	}
}

#topbar a {
	color: <?php echo $topbar_link_color; ?>;
	text-decoration: <?php echo $topbar_link_decoration; ?>;
}

#topbar p {
	margin-bottom: 0;
}

.topbar-left,
.topbar-right,
.topbar-center {
	vertical-align: middle;
}

.topbar-center {
	text-align: center;
}

@media screen and (max-width: 1199px) {
	.topbar-left {
		text-align: center;
		<?php if ( $mobile_topbar_widget == 'topbar_right') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
	.topbar-left {
		display: table-cell;
		height: inherit;
		white-space: nowrap;
		width: auto;
		text-align: left;
	}
}

@media screen and (max-width: 1199px) {
	.topbar-right {
		text-align: center;
		<?php if ( $mobile_topbar_widget == 'topbar_left') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
	.topbar-right {
		display: table-cell;
		height: inherit;
		text-align: right;
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	.topbar-center {
		height: inherit;
	}
}

/* topbar ul */

#topbar ul {
	margin: 0;
	list-style-type: none;
}

#topbar ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0 0 0 10px;
}
