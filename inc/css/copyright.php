<?php
// styles for copyright
?>

/* base */
#copyright {
	width: 100%;
}

/* mobile ≤1199px */
@media screen and (max-width: 1199px) {

	#copyright {
		width: 100%;
		padding: 20px 20px;
		font-size: <?php echo $copyright_mobile_font_size; ?>px;
		line-height: 1;
		background: <?php echo $copyright_background_color; ?>;
		color: <?php echo $copyright_text_color; ?>;
	}

	#copyright .inner {
		max-width: none;
	}

	.copyright-left {
		width: 100%;
		display: block;
		vertical-align: top;
		text-align: center;
	}

	.copyright-right {
		width: 100%;
		margin-top: 30px;
		display: block;
		vertical-align: top;
		text-align: center;
	}
}

/* desktop ≥1200px */
@media screen and (min-width: 1200px) {

	#copyright {
		display: table;
		width: 100%;
		padding: 20px 0;
		font-size: <?php echo $copyright_desktop_font_size; ?>px;
		line-height: 1;
		background: <?php echo $copyright_background_color; ?>;
		color: <?php echo $copyright_text_color; ?>;
	}

	#copyright.is-fixed .inner {
		max-width: 1200px;
	}

	#copyright.is-full .inner {
		max-width: none;
		padding: 0 40px;
	}

	.copyright-left {
		display: table-cell;
		vertical-align: middle;
		height: inherit;
		min-width: auto;
		white-space: nowrap;
	}

	.copyright-right {
		width: 100%;
		display: table-cell;
		vertical-align: middle;
		height: inherit;
		text-align: right;
	}
}

/* links */
#copyright a {
	color: <?php echo $copyright_link_color; ?>;
	text-decoration: <?php echo $copyright_link_decoration; ?>;
}

/* icons */
#copyright i {
	font-size: 20px;
	margin-left: 20px !important;
}

#copyright i:first-child {
	margin-left: 0;
}

/* lists */
#copyright ul {
	margin: 0;
	list-style-type: none;
}

#copyright ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0 0 0 10px;
}
