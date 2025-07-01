<?php
// styles for half hero
?>

#hero-half-container {
	width: 100%; /* correct */
	height: 100%; /* correct */
	padding: 0; /* correct */
	display: table; /* correct */
	position: relative; /* required to keep video background from escaping esp on mobile */
}

.hero-half-wrapper {
	display: table-row; /* correct */
}

.hero-half {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}

@media screen and (max-width: 1200px) {
#header-half-hero {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: #ffffff;
	color: <?php echo $half_hero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-half-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: #ffffff;
	color: <?php echo $half_hero_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
h1.half-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
h1.half-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}
