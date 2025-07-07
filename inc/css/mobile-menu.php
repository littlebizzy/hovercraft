<?php
// styles for mobile menu
?>

/* mobile menu */

.nav-icon {
    outline: none !important;
}

.nav-icon:focus {
    outline: none !important;
}

@media screen and (max-width: 1200px) {
.mobile-nav {
	display: none;
	clear: both;
	width: 100%;
	list-style:none;
	background: #212121;
	padding: 20px;
	}

.mobile-nav ul li {
	font-size: 18px;
	list-style-type: none;
 	vertical-align: middle;
	display: block;
	margin: 0px;
	padding: 0px;
	border-bottom: 1px solid rgba(255,255,255, 0.2);
}

.mobile-nav ul li:last-child {
	border-bottom: 0;
}
	
.mobile-nav a {
	display: block;
	width: 100%;
	line-height:40px;
	color: #ffffff !important;
	font-size: 18px;
	text-decoration: none;
}

/* js will toggle this to display: block */
 .mobile-nav li > ul { display:none; width: 100%; position:relative; }

}

@media screen and (min-width: 1200px) {
.mobile-nav {
	display: none !important;
	}
}

@media screen and (max-width: 1200px) {
.menu-mobile-wrapper {
	display: inline-block;
	text-align: right;
 	vertical-align: middle;
	}
}
	
@media screen and (min-width: 1200px) {
.menu-mobile-wrapper {
 	display: none;	
	}
}

#header-full-hero .menu-mobile-wrapper i {
	font-size: 36px; /* correct */
	color: #ffffff; /* correct */
}
