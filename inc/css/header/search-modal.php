<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for search modal
?>

/* search modal trigger */
.search-icon-wrapper {
	appearance: none;
	-webkit-appearance: none;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	padding: 0 0 0 30px !important;
	background: transparent !important;
	border: 0;
	border-radius: 0;
	box-shadow: none;
	color: inherit;
	line-height: 1;
	text-align: center;
	text-decoration: none;
	vertical-align: middle;
	cursor: pointer;
}

.search-icon-wrapper:hover,
.search-icon-wrapper:focus,
.search-icon-wrapper:active {
	background: transparent !important;
	box-shadow: none;
	color: inherit;
	outline: 0;
}

.search-icon-wrapper:focus-visible {
	outline: 2px solid currentColor;
	outline-offset: 4px;
}

.search-icon-wrapper i {
	display: block;
	padding: 10px 0;
	font-size: 24px;
	line-height: 1;
	text-decoration: none !important;
}

body.search-modal-open {
	overflow: hidden;
}

/* search modal */
#full-screen-search {
	visibility: hidden;
	opacity: 0;
	pointer-events: none;
	position: fixed;
	inset: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100vh;
	height: 100dvh;
	background: rgba(0, 0, 0, 0.72);
	z-index: 999998;
	transition: opacity 0.15s ease, visibility 0.15s ease;
}

#full-screen-search.open {
	visibility: visible;
	opacity: 1;
	pointer-events: auto;
}

#full-screen-search .search-modal-panel {
	position: relative;
	width: 100%;
	max-width: 760px;
}

#full-screen-search .searchform {
	width: 100%;
}

#full-screen-search .input-container {
	display: flex;
	align-items: stretch;
	width: 100%;
	border-radius: 4px;
	box-shadow: 0 10px 30px rgba(0, 0, 0, 0.22);
	overflow: hidden;
	transition: box-shadow 0.15s ease;
}

#full-screen-search .input-container:hover {
	box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28);
}

#full-screen-search .input-container:focus-within {
	box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28), 0 0 0 2px <?php echo $default_link_color; ?>;
}

#full-screen-search .search-input {
	flex: 1 1 auto;
	min-width: 0;
	border: 0 !important;
	border-radius: 4px 0 0 4px !important;
	box-shadow: none !important;
	background: #ffffff;
	color: <?php echo $search_input_text_color; ?>;
	font-weight: 400;
	appearance: none;
	-webkit-appearance: none;
}

#full-screen-search .search-input:focus {
	box-shadow: none !important;
	outline: 0;
}

#full-screen-search .search-input::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
	opacity: 1;
}

#full-screen-search .search-submit {
	flex: 0 0 72px;
	width: auto;
	border: 0;
	border-radius: 0 4px 4px 0 !important;
	box-shadow: none;
	background: <?php echo $default_link_color; ?>;
	color: #ffffff;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	cursor: pointer;
	transition: background-color 0.15s ease;
	appearance: none;
	-webkit-appearance: none;
}

#full-screen-search .search-submit:hover,
#full-screen-search .search-submit:focus,
#full-screen-search .search-submit:active {
	background: <?php echo $default_hover_color; ?> !important;
	color: #ffffff;
	outline: 0;
}

#full-screen-search .search-submit svg,
#full-screen-search .search-submit i {
	display: block;
	width: 24px;
	height: 24px;
	font-size: 24px;
	line-height: 1;
}

#full-screen-search .search-modal-close {
	appearance: none;
	-webkit-appearance: none;
	position: absolute;
	top: 20px;
	right: 20px;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	width: 48px;
	height: 48px;
	padding: 0 !important;
	background: rgba(255, 255, 255, 0.08) !important;
	border: 0;
	border-radius: 4px;
	box-shadow: none;
	color: #ffffff;
	cursor: pointer;
	z-index: 999999;
	transition: background-color 0.15s ease, box-shadow 0.15s ease;
}

#full-screen-search .search-modal-close:hover,
#full-screen-search .search-modal-close:focus,
#full-screen-search .search-modal-close:active {
	background: rgba(255, 255, 255, 0.16) !important;
	box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.35);
	color: #ffffff;
	outline: 0;
}

#full-screen-search .search-modal-close i {
	display: block;
	font-size: 32px;
	line-height: 1;
}

@media screen and (max-width: 1199px) {
	#full-screen-search {
		padding: 20px;
	}

	#full-screen-search .search-input {
		height: 56px;
		min-height: 56px;
		padding: 0 16px !important;
		font-size: 18px;
		line-height: 1.3;
	}

	#full-screen-search .search-submit {
		flex-basis: 60px;
		height: 56px;
	}

	#full-screen-search .search-modal-close {
		top: 16px;
		right: 16px;
		width: 44px;
		height: 44px;
	}
}

@media screen and (min-width: 1200px) {
	#full-screen-search {
		padding: 40px;
	}

	#full-screen-search .search-input {
		height: 68px;
		min-height: 68px;
		padding: 0 22px !important;
		font-size: 26px;
		line-height: 1.3;
	}

	#full-screen-search .search-submit {
		height: 68px;
	}
}
