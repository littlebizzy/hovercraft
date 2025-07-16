<?php
// styles for forms
?>

/* forms */

form {
	margin: 0 !important;
	padding: 0 !important;
}

input, select, textarea, button {
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
	font-family: inherit;
}

select {
	appearance: none;
	-webkit-appearance: none;
	-moz-appearance: none;
	background-image: url('data:image/svg+xml;utf8,<svg fill="%23666" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
	background-repeat: no-repeat;
	background-position: right 15px center;
	background-size: 16px;
	padding-right: 45px !important;
	border-radius: 0;
}

option {
	line-height: 1.5;
	padding: 0 !important;
	display: block;
	white-space: nowrap;
	font-family: inherit;
}

textarea {
	font-size: 18px;
	font-weight: 400;
	padding: 10px 20px !important;
	border-radius: 0;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
	resize: vertical;
}

input[type="checkbox"], input[type="radio"] {
	width: auto;
	display: inline-block;
	margin-right: 10px;
	box-shadow: none;
}

input[type="file"] {
	padding: 10px 0 !important;
	box-shadow: none;
	background: transparent;
}

input[type="submit"], button, button[type="submit"] {
	font-size: 18px;
	font-weight: 600;
	padding: 10px 20px !important;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0;
	cursor: pointer;
	box-shadow: none;
}

input[type="submit"]:hover, button:hover, button[type="submit"]:hover {
	background: <?php echo $default_hover_color; ?> !important;
}

#topbar input, .hero-half input {
	box-shadow: none;
}

label {
	display: block;
	margin-bottom: 5px;
	font-weight: 600;
	font-size: 15px;
}

fieldset {
	border: 1px solid #e0e0e0;
	padding: 20px;
	margin-bottom: 20px;
}

legend {
	font-weight: 600;
	font-size: 16px;
	padding: 0 5px;
}

input:focus, select:focus, textarea:focus, button:focus {
	box-shadow: 0 0 0 2px rgba(100, 100, 100, 0.15);
}
