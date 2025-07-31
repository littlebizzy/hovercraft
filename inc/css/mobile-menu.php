<?php
// styles for mobile menu
?>

/* remove default focus outline from nav icon */
.nav-icon {
	outline: none !important;
}

.nav-icon:focus {
	outline: none !important;
}

/* mobile nav container */
@media screen and (max-width: 1200px) {
.mobile-nav {
	display: none;
	clear: both;
	width: 100%;
	list-style: none;
	background: #212121;
	padding: 20px;
	}

/* mobile nav list items */
.mobile-nav ul li {
	font-size: 18px;
	list-style-type: none;
 	vertical-align: middle;
	display: block;
	margin: 0px;
	padding: 0px;
	border-bottom: 1px solid rgba(255,255,255, 0.2);
}

/* remove border on last item */
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

/* hide submenus by default */
 .mobile-nav li > ul { display: none; width: 100%; position: relative; }

}

/* hide mobile nav on desktop */
@media screen and (min-width: 1200px) {
.mobile-nav {
	display: none !important;
	}
}

/* hamburger icon wrapper with touch-safe area */
@media screen and (max-width: 1200px) {
.menu-mobile-wrapper {
	display: inline-flex;
	justify-content: center;
	align-items: center;
	padding: 10px;
	min-width: 44px;
	min-height: 44px;
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

/* menu icon styling for font awesome and material icons */
#header-full-hero .menu-mobile-wrapper i,
#header-full-hero .menu-mobile-wrapper .material-icons,
#header-full-hero .menu-mobile-wrapper .fa,
#header-full-hero .menu-mobile-wrapper .fa-solid {
	font-size: 28px;
	color: #ffffff;
}

/***************************/
/*start mobile menu overlay*/
/***************************/
.mobile-menu-trig {
	/*display: none;*/
}

.mobile-menu-trig:hover {
	cursor: pointer;
}

.overlay {   
	position: fixed; 
	overflow-x: hidden;
   	overflow-y: scroll;
   	overscroll-behavior: contain;
   	top: 0; right: 0; bottom: 0; left: 0; 

	height: 0;
  	z-index: 999999; 
  	background-color: rgba(0,0,0, 0.9); 
  	transition: 0.5s; 
}

.overlay-content {
	max-width: 768px;
	width: 100%; 
	height: 100%;
	
  	position: relative;
  	text-align: center; 
}

.overlay ul.menu {
	list-style: none;
	margin: 0;
	padding: 40px 0px;
}

.overlay ul a {
	display: block;
  	padding: 5px 0;
	font-size: 18px;
}

.overlay ul.sub-menu {
	list-style: none;
	margin-left: 0px;
	padding-left: 0px;
	font-style: italic;
}
	
.overlay a {
  	text-decoration: none;
  	color: #818181;
  	transition: 0.3s;
}

.overlay li.current-menu-item a {
	color: #ffffff;
}

.overlay a:hover, 
.overlay a:focus {
  	color: #f1f1f1;
  	text-decoration: none;
}

.overlay .closebtn i {
  	position: absolute;
  	top: 20px;
  	right: 20px;
  	font-size: 36px;
	z-index: 999999;
}

.overlay .closebtn i:hover,
.overlay .closebtn i:focus {
	text-decoration: none;
	outline: none;
}


	
@media screen and (max-width: 800px) {
	nav#site-navigation{
		display: none;
	}
	.mobile-menu-trig{
		display: inline;
	}

}
/*************************/
/*end mobile menu overlay*/
/*************************/
	
#offcanvas {
	top: 0;
	left: -100%;
	width: 100%;
	max-width: 75vw;
	background: <?php echo $offcanvas_background_color; ?>;
	color: <?php echo $default_text_color; ?>;
	height: 100%;
	position: fixed;
	z-index: 9997;
	overflow-y: auto;
	transform: translate3d(0, 0, 205px);
	transition: all 500ms ease-in-out;
	padding: 20px 0 0 0;

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		font-weight: <?php echo $offcanvas_font_weight; ?>;
		font-size: <?php echo $offcanvas_font_size; ?>px;
		text-transform: <?php echo $offcanvas_menu_text_transform; ?>;

	li {
		border-top: 1px dotted rgba(0, 0, 0, 0.0980392);
		position: relative;
		width: 100%;
		user-select: none;
		margin: 0;
		padding: 0;

	a {
		color: rgba(0, 0, 0, 0.701961);
		padding: 7px 0 7px 20px;
		display: inline-block;
		width: calc(100% - 50px);
		text-decoration: none;
		vertical-align: middle;

		&:hover {
		text-decoration: none;
		}
	}
	
	&.current-menu-item a {
		font-weight: 600;
	}
		
	&.current-menu-item ul a {
		font-weight: 400;
	}
	
	a.menu-toggle {
		position: relative;
		width: 50px;
		text-align: center;
		vertical-align: middle;
		background: <?php echo $offcanvas_toggle_background_color; ?>;
		padding-left: 0;

	&:after {
		position: relative;
		right: 0;
		text-align: center;
		vertical-align: middle;
		font-family: FontAwesome;
		font-size: 12px;
		content: "\f078";
	}
	
	&:focus,
	&:hover,
	&:visited,
	&:link{
		border-bottom: 0;
		text-decoration: none;
		}
	
	&.rotate {
		transform: rotate(180deg);
		/* right: 1px; */
		}
	}
	}
	}

	ul.sub-menu {
		display: none;
		text-transform: <?php echo $offcanvas_submenu_text_transform; ?>;
		font-weight: <?php echo $offcanvas_font_weight; ?>;
		font-size: <?php echo $offcanvas_submenu_font_size; ?>px;
		background: <?php echo $offcanvas_toggle_background_color; ?>;
	}
	
	ul.sub-menu li {
		padding-left: 0px;
	}
}

#offcanvas.active {
	left: 0;
	transform: translate3d(0, 0, 0);
	transition: all 500ms ease-in-out;
}

.overlay-main {
	background-color: #000000c2;
	position: absolute;
	visibility: hidden;
	opacity: 0;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	transition: all 0.3s;
	z-index: 99;
}
	
.overlay-main.active {
	visibility: visible;
	opacity: 1;
}

