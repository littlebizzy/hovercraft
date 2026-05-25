<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for footer layout
?>

/* footer */

#footer {
	width: 100%;
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#footer {
		padding: 20px 20px;
		font-size: <?php echo $footer_mobile_font_size; ?>px;
	}

	#footer .widget-wrapper ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}

	#footer .widget-wrapper ul li {
		display: block;
		margin: 0;
		padding: 0;
		border-bottom: 1px solid rgba(128, 128, 128, 0.25);
		list-style: none;
	}

	#footer .widget-wrapper ul ul li:first-child {
		border-top: 1px solid rgba(128, 128, 128, 0.25);
	}

	#footer .widget-wrapper ul li a {
		display: block;
		padding: 8px 0;
	}

	#footer .widget-wrapper ul ul li a {
		padding-left: 16px;
	}
}

@media screen and (min-width: 1200px) {
	#footer {
		margin: 0 auto;
		padding: 40px 0;
		font-size: <?php echo $footer_desktop_font_size; ?>px;
	}
}

#footer .widget-wrapper {
	margin-bottom: 30px;
}

#footer .widget-wrapper:last-child {
	margin-bottom: 0;
}

#footer a {
	color: <?php echo $footer_link_color; ?>;
	text-decoration: <?php echo $footer_link_decoration; ?>;
}

/* footer columns mobile */

@media screen and (max-width: 1199px) {
	.footer-column-one-four-unequal, .footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal, .footer-column-one-four-equal, .footer-column-two-four-equal, .footer-column-three-four-equal, .footer-column-four-four-equal, .footer-column-one-three-unequal, .footer-column-two-three-unequal, .footer-column-three-three-unequal, .footer-column-one-three-equal, .footer-column-two-three-equal, .footer-column-three-three-equal {
		width: 100%;
		display: block;
		vertical-align: top;
		margin-bottom: 30px;
	}

	.footer-column-one-four-unequal, .footer-column-one-four-equal, .footer-column-two-four-equal, .footer-column-three-four-equal, .footer-column-four-four-equal, .footer-column-one-three-unequal, .footer-column-one-three-equal, .footer-column-two-three-equal, .footer-column-three-three-equal {
		padding: 0;
	}
}

/* footer columns desktop */

@media screen and (min-width: 1200px) {
	.footer-column-one-four-unequal, .footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal, .footer-column-one-four-equal, .footer-column-two-four-equal, .footer-column-three-four-equal, .footer-column-four-four-equal, .footer-column-one-three-unequal, .footer-column-two-three-unequal, .footer-column-three-three-unequal, .footer-column-one-three-equal, .footer-column-two-three-equal, .footer-column-three-three-equal {
		float: left;
		display: inline-block;
		vertical-align: top;
	}
}

/* footer column one (four unequal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-four-unequal {
		width: 420px;
		padding-right: 30px;
	}
}

/* footer column two, three, and four (four unequal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal {
		width: 260px;
		padding-left: 60px;
	}
}

/* footer columns (four equal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-four-equal, .footer-column-two-four-equal, .footer-column-three-four-equal, .footer-column-four-four-equal {
		width: 255px;
	}
}

/* footer column one, two, and three (four equal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-four-equal, .footer-column-two-four-equal, .footer-column-three-four-equal {
		margin-right: 60px;
	}
}

/* footer column four (four equal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-four-four-equal {
		margin-right: 0;
	}
}

/* footer column one (three unequal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-three-unequal {
		width: 440px;
	}
}

/* footer column two and three (three unequal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-two-three-unequal, .footer-column-three-three-unequal {
		width: 350px;
	}
}

/* footer column one and two (three unequal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-three-unequal, .footer-column-two-three-unequal {
		margin-right: 30px;
	}
}

/* footer column three (three unequal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-three-three-unequal {
		margin-right: 0;
	}
}

/* footer columns (three equal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-three-equal, .footer-column-two-three-equal, .footer-column-three-three-equal {
		width: 360px;
	}
}

/* footer column one and two (three equal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-one-three-equal, .footer-column-two-three-equal {
		margin-right: 60px;
	}
}

/* footer column three (three equal columns) */

@media screen and (min-width: 1200px) {
	.footer-column-three-three-equal {
		margin-right: 0;
	}
}

/* footer ul */

#footer ul {
	margin-left: 10px;
}
