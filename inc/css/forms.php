<?php
// styles for forms
?>

/* forms */
	
form {
	margin: 0 !important;
	padding: 0 !important;
}
	
input, select {
	width: 100%;
	max-width: 100%;
	height: auto;
	min-height: auto;
	vertical-align: middle;
	font-weight: 400;
	line-height: 2;
	padding: 10px 20px !important;
	border: 0;
	outline: none;
	font-size: 16px;
	background: #ffffff;
	display: inline-block;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?>;
}

option {
	line-height: 1.5;
	padding: 0 !important;
	display: block;
	white-space: nowrap;
}

#topbar input, .hero-half input {
	box-shadow: none;
}

textarea {
	width: 100%;
	font-size: 18px;
	font-weight: 400;
	display: inline-block;
	padding: 10px 20px !important;
	background: #ffffff;
	border-radius: 0px;
	border: 0;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
}

input[type="checkbox"] {
	width: auto;
	font-size: 18px;
	display: inline-block;
	outline: none;
	box-shadow: none;
}

input[type="submit"] {
	width: 100%;
	font-size: 18px;
	font-weight: 600;
	display: inline-block;
	padding: 10px 20px !important;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0px;
	border: 0;
	cursor: pointer;
	box-shadow: none;
}
	
button[type="submit"]:hover, input[type="submit"]:hover {
	background: <?php echo $default_hover_color; ?> !important;
}
