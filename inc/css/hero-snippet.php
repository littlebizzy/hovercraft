<?php
// styles for hero snippet
?>

@media screen and (max-width: 1200px) {
.hero-snippet {
	font-size: 16px;
	color: <?php echo $hero_snippet_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.hero-snippet {
	font-size: 18px;
	color: <?php echo $hero_snippet_text_color; ?>;
	}
}

.hero-snippet a {
	color: <?php echo $hero_snippet_link_color; ?>;
}

@media screen and (max-width: 1200px) {
.hero-snippet .tagcloud {
	margin-top: 20px;
	}
}	

@media screen and (min-width: 1200px) {
.hero-snippet .tagcloud {
	margin-top: 30px;
	}
}
