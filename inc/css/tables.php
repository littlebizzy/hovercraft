<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for tables
?>

/* tables */

table {
	width: 100%;
	border: 1px solid #dddddd;
	border-collapse: collapse;
	border-radius: 0;
}

@media screen and (max-width: 1199px) {
	table {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	table {
		margin-bottom: 30px;
	}
}

table tr:first-child {
	background: #f5f5f5;
}

table th,
table td {
	padding: 10px;
	border: 1px solid #dddddd;
	border-radius: 0;
	vertical-align: top;
}
