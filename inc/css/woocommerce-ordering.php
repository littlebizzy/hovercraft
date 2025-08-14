<?php
// styles for woocommerce ordering
?>

form.woocommerce-ordering {
	margin: 0 !important;
	padding: 0 !important;
	position: relative;
	background-color: #eeeeee;
}

form.woocommerce-ordering select {
	appearance: none;
	max-width: 100%;
	vertical-align: middle !important;
	outline: none;
	border: none;
	box-shadow: none;
	line-height: 1.5 !important;
	font-size: 16px;
	color: #757575;
	padding: 5px 40px 5px 10px !important;
	background-color: transparent;
}

form.woocommerce-ordering select:active, form.woocommerce-ordering select:focus {
	outline: none;
	box-shadow: none;
}

@media screen and (max-width: 1200px) {
	form.woocommerce-ordering {
		float: none !important;
		width: 100%;
	} 
}

@media screen and (min-width: 1200px) {
	form.woocommerce-ordering {
		float: right !important;
		width: auto;
	} 
}

/*
https://codepen.io/jpdanks/pen/KKBarq 
https://codepen.io/rabakilgur/pen/zyggOe
*/
