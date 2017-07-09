<?php

if(is_category(2)){
	include(TEMPLATEPATH.'/category-services.php');
}else if(is_category(3)){
	include(TEMPLATEPATH.'/category-property.php');
}else if(is_category(7)){
	include(TEMPLATEPATH.'/category-news.php');
}else if(is_category(8)){
	include(TEMPLATEPATH.'/category-reviews.php');
}else{
	include(TEMPLATEPATH.'/category-default.php');
}

 ?>