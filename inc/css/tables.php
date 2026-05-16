<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for tables
?>

/* tables */

@media screen and (max-width: 1199px) {
	table {
		width: 100%;
		margin-bottom: 20px;
		border: 1px solid #dddddd;
		border-collapse: collapse;
	}
}

@media screen and (min-width: 1200px) {
	table {
		width: 100%;
		margin-bottom: 30px;
		border: 1px solid #dddddd;
		border-collapse: collapse;
	}
}

table tr:first-child {
	background: #f5f5f5;
}

table th,
table td {
	padding: 10px;
	border: 1px solid #dddddd;
	vertical-align: top;
}
