<?php
// styles for mobile menu
?>

/* hide default focus outline on nav icon */
.nav-icon {
	outline: none !important;
}

.nav-icon:focus {
	outline: none !important;
}

/* mobile nav container and styling */
@media screen and (max-width: 1200px) {
.mobile-nav {
	display: none;
	clear: both;
	width: 100%;
	list-style: none;
	background: #212121;
	padding: 20px;
	}

/* top-level mobile menu items */
.mobile-nav ul li {
	font-size: 18px;
	list-style-type: none;
 	vertical-align: middle;
	display: block;
	margin: 0px;
	padding: 0px;
	border-bottom: 1px solid rgba(255,255,255, 0.2);
}

/* remove border on last menu item */
.mobile-nav ul li:last-child {
	border-bottom: 0;
}
	
/* mobile nav links */
.mobile-nav a {
	display: block;
	width: 100%;
	line-height: 40px;
	color: #ffffff !important;
	font-size: 18px;
	text-decoration: none;
}

/* nested submenus hidden by default */
 .mobile-nav li > ul { display: none; width: 100%; position: relative; }

}

/* force-hide mobile nav on desktop */
@media screen and (min-width: 1200px) {
.mobile-nav {
	display: none !important;
	}
}

/* hamburger icon wrapper styles */
@media screen and (max-width: 1200px) {
.menu-mobile-wrapper {
	display: inline-block;
	text-align: right;
 	vertical-align: middle;
	}
}
	
/* hide hamburger wrapper on desktop */
@media screen and (min-width: 1200px) {
.menu-mobile-wrapper {
 	display: none;	
	}
}

/* hamburger menu icon styles */
#header-full-hero .menu-mobile-wrapper i {
	font-size: 36px; /* good for visibility on mobile */
	color: #ffffff; /* matches menu background */
}
