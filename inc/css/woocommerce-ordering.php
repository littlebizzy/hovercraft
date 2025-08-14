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

form.woocommerce-ordering {
	margin: 0 !important;
	padding: 0 !important;
  	position: relative;
  	background-color: #eeeeee;
  	select {
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
    	&:active,
    	&:focus {
      		outline: none;
      		box-shadow: none;
    	}
  	}
  &:after {
    content: " ";
    position: absolute;
    top: 50%;
    margin-top: -2px;
    right: 10px;
    width: 0; 
    height: 0; 
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #aaa;
  }
}

/*
https://codepen.io/jpdanks/pen/KKBarq 
https://codepen.io/rabakilgur/pen/zyggOe
*/
