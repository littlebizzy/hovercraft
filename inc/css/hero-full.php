<?php
// styles for full hero
?>

#hero-full-container {
	width: 100%; /* correct */
	height: 100%; /* correct */
	padding: 0; /* correct */
	display: table; /* correct */
	position: relative; /* required to keep video background from escaping esp on mobile */
}

.hero-full-wrapper {
	display: table-row; /* correct */
}

.hero-full {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}

.hero-full-main {
	position: relative; /* required when using video background on splash-wide */
}

@media screen and (max-width: 1200px) {
#header-full-hero {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: <?php list($r1, $g1, $b1) = sscanf($full_hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
	position: relative; /* required when using video background on splash-wide */
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
#header-full-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php list($r1, $g1, $b1) = sscanf($full_hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
	position: relative; /* required when using video background on splash-wide */
	color: #ffffff;
	}
}

@media screen and (max-width: 1200px) {
h1.full-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
h1.full-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}
