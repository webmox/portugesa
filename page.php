<?php

if(is_page(4)){
	include(TEMPLATEPATH.'/page-about.php');
}else if(is_page(110)){
	include(TEMPLATEPATH.'/page-gold.php');
}else{
	include(TEMPLATEPATH.'/page-default.php');
}

 ?>