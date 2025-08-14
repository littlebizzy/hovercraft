<?php
// styles for woocommerce ordering
?>

/*
https://codepen.io/jpdanks/pen/KKBarq 
https://codepen.io/rabakilgur/pen/zyggOe
*/

@media screen and (max-width: 1200px) {
	form.woocommerce-ordering {
		float: none !important;
		width: 100%;
		max-width: 100%;
	} 
}


@media screen and (min-width: 1200px) {
	form.woocommerce-ordering {
		float: right !important;
		width: auto;
  		max-width: 100%;
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
.woocommerce-ordering:after {
	position: relative;
	margin: 0px 0px 0px -10px; 
        left: 95%;
        bottom: 1.6ch;
        pointer-events: none;
        font-family: "Material Icons";
        font-size: 24px;
        content: ' \e5cf';
}
*/
