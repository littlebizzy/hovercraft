<?php
// styles for woocommerce ordering
?>

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

form.woocommerce-ordering select {
	vertical-align: middle !important;
	outline: none !important;
	border: none !important;
	line-height: 1.5 !important;
	font-size: 16px;
	color: #757575;
	padding: 5px 40px 5px 10px !important;
	background-color: transparent;
	box-shadow: inset 0 0 0 1px #cccccc !important;
}

form.woocommerce-ordering select:active, form.woocommerce-ordering select:focus {
	outline: none !important;
	border: none !important;
	box-shadow: inset 0 0 0 1px #cccccc !important;
}

/*
https://codepen.io/jpdanks/pen/KKBarq 
https://codepen.io/rabakilgur/pen/zyggOe
*/
