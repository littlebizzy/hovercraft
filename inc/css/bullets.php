<?php
// styles for bullets
?>

@media screen and (max-width: 1200px) {
	#bullets {
	columns: 1;
  column-fill: balance;
	column-gap: 0;
	}
}

@media screen and (min-width: 1200px) {
	#bullets {
	columns: 2;
  column-fill: balance;
	column-gap: 40px;
	}
}

@media screen and (max-width: 1200px) {
#bullets p {
	font-size: 14px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
#bullets p {
	font-size: 14px;
	margin-bottom: 30px;
	}
}
	
#bullets ul, #bullets ol {
	font-size: 14px;
	margin-bottom: 40px;
}

#bullets li {
	font-size: 14px;
	margin-bottom: 10px;
}

.faq-item {
	display: inline-block;
}
