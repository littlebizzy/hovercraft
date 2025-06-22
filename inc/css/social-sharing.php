<?php
// styles for social sharing
?>

@media screen and (max-width: 1200px) {
.social-sharing {
	margin: 40px 0px;
	line-height: 1;
	}
}

@media screen and (min-width: 1200px) {
.social-sharing {
	margin: 60px 0px;
	line-height: 1;
	}
}

.social-sharing i {
	font-size: <?php echo $social_sharing_font_size; ?>px;
	line-height: 1;
	margin-right: 20px !important;
	vertical-align: middle;
}

.social-sharing-label {
	margin-right: 10px;
	vertical-align: middle;
	color: <?php echo $breadcrumbs_text_color; ?>;
}
