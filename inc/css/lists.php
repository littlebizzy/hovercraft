<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for unordered and ordered lists
?>

ul,
ol {
	list-style-position: outside;
	padding-left: 1.25em;
}

li {
	line-height: 1.7;
	margin-bottom: 0.5em;
}

ol > li::marker {
	font-weight: 700;
}
