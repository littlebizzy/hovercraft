<?php
// styles for pagination
?>

/* pagination */

.navigation {
	padding-top: 30px;
}

.navigation ul {
	margin: 0 !important;
}

.navigation li {
    display: inline-block;
}
  
.navigation li a,
.navigation li a:hover,
.navigation li.active a,
.navigation li.disabled {
    background-color: #ECEFF1;
	color: #263238;
    cursor: pointer;
    padding: 5px 10px;
	text-decoration: none;
	font-size: 14px;
	line-height: 1;
}
  
.navigation li a:hover,
.navigation li.active a {
	background-color: <?php echo $default_text_color; ?>;
	color: #ffffff;
}
