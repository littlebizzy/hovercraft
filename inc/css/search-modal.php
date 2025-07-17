<?php
// styles for search modal
?>

/* container styling */
.search-icon-wrapper {
	display: inline-block;
	padding-left: 30px;
	vertical-align: middle;
	text-align: center;
	cursor: pointer;
}

.search-icon-wrapper i {
	padding: 10px 0;
	font-size: 24px;
	text-decoration: none !important;
}

#sidebar ul li {
	line-height: 2;
}

/* base hidden state */
#full-screen-search {
	visibility: hidden;
	opacity: 0;
	position: static;
	width: 100%;
	height: 0;
	background: rgba(0, 0, 0, 0.7);
	transition: opacity 0.1s linear;
	top: 0;
	left: 0;
	z-index: -1;
}

/* open state */
#full-screen-search.open {
	height: 100%;
	visibility: visible;
	opacity: 1;
	position: fixed;
	z-index: 999998;
}

/* form container */
#full-screen-search form {
	position: relative;
	width: 100%;
	height: 100%;
}

/* form content div */
#full-screen-search form div {
	position: absolute;
	width: 50%;
	height: 100px;
	top: 50%;
	left: 50%;
	margin: -50px 0 0 -25%;
}

/* input field */
#full-screen-search form div input {
	width: 100%;
	height: 100px;
	background: #ffffff;
	padding: 20px;
	font-size: 36px;
	line-height: 60px;
	box-shadow: none;
}

/* input placeholder */
#full-screen-search form div input::placeholder {
	color: #ccc;
}

/* close button */
#full-screen-search button.close {
	position: absolute;
	top: 20px;
	right: 20px;
	z-index: 999999;
	padding: 0 !important;
	background: transparent;
	color: #ffffff;
	cursor: pointer;
}

#full-screen-search button.close i {
	font-size: 48px;
}
