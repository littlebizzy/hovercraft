<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for hero snippet
?>

.hero-snippet {
	color: <?php echo $hero_snippet_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	.hero-snippet {
		font-size: 16px;
	}
}

@media screen and (min-width: 1200px) {
	.hero-snippet {
		font-size: 18px;
	}
}

.hero-snippet a {
	color: <?php echo $hero_snippet_link_color; ?>;
}

@media screen and (max-width: 1199px) {
	.hero-snippet .tagcloud {
		margin-top: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.hero-snippet .tagcloud {
		margin-top: 30px;
	}
}
