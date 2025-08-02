<?php
// styles for footer layout
?>

/* footer */

@media screen and (max-width: 1200px) {
#footer {
	width: 100%;
	padding: 20px 20px;
	font-size: <?php echo $footer_mobile_font_size; ?>px;
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#footer {
	width: 100%;
	margin: 0px auto;
	padding: 40px 0px;
	font-size: <?php echo $footer_desktop_font_size; ?>px;
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
	}
}

#footer .widget-wrapper{
    margin-bottom: 30px;
}
#footer .widget-wrapper:last-child{
    margin-bottom: 0;
}

#footer a {
	color: <?php echo $footer_link_color; ?>;
	text-decoration: <?php echo $footer_link_decoration; ?>;
}


/* footer column one (four unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-four-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-four-unequal {
	float: left;
	width: 420px;
	display: inline-block;
    vertical-align: top;
	padding-right: 30px;
	}
}


/* footer column two, three, and four (four unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal {
	float: left;
	width: 260px;
	display: inline-block;
	vertical-align: top;
	padding-left: 60px;
	}
}


/* footer column one (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column two (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column three (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-three-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-three-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column four (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-four-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-four-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 0;
	}
}


/* footer column one (three unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-three-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-three-unequal {
	float: left;
	width: 440px;
	display: inline-block;
    vertical-align: top;
	margin-right: 30px;
	}
}


/* footer column two (three unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-three-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-three-unequal {
	float: left;
	width: 350px;
	display: inline-block;
	vertical-align: top;
	margin-right: 30px;
	}
}


/* footer column three (three unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-three-three-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-three-three-unequal {
	float: left;
	width: 350px;
	display: inline-block;
	vertical-align: top;
	margin-right: 0;
	}
}


/* footer column one (three equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-three-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-three-equal {
	float: left;
	width: 360px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column two (three equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-three-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-three-equal {
	float: left;
	width: 360px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column three (three equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-three-three-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-three-three-equal {
	float: left;
	width: 360px;
	display: inline-block;
    vertical-align: top;
	margin-right: 0;
	}
}


/* footer ul */

#footer ul {
	margin-left: 10px;
}
