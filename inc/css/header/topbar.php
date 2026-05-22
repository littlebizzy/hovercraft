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
	}
}

#topbar a {
	color: <?php echo $topbar_link_color; ?>;
	text-decoration: <?php echo $topbar_link_decoration; ?>;
}

#topbar p {
	margin-bottom: 0;
}

#topbar .inner {
	display: flex;
	align-items: center;
	justify-content: center;
}

.topbar-left,
.topbar-right,
.topbar-center {
	width: 100%;
}

.topbar-center {
	text-align: center;
}

@media screen and (max-width: 1199px) {
	.topbar-left,
	.topbar-right {
		text-align: center;
	}
}

<?php if ( $mobile_topbar_widget == 'topbar_right' ) : ?>
@media screen and (max-width: 1199px) {
	.topbar-left {
		display: none;
	}
}
<?php endif; ?>

@media screen and (min-width: 1200px) {
	.topbar-left {
		white-space: nowrap;
		text-align: left;
	}
}

<?php if ( $mobile_topbar_widget == 'topbar_left' ) : ?>
@media screen and (max-width: 1199px) {
	.topbar-right {
		display: none;
	}
}
<?php endif; ?>

@media screen and (min-width: 1200px) {
	.topbar-right {
		text-align: right;
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

#topbar ul li:first-child {
	margin-left: 0;
}
