$('document').ready(function(){
	
	/*-----------------------------add icon for home link---------------*/
	$('.main-menu .header-menu > li:first-child a').html('<i class="fa fa-home"></i>');


	 /*////////////////////////////////////////////////////////////////////////////////////////////*/
	 //$('.list-services-content .row > div:nth-child(2n)').after('<div class="clearfix"></div>');

	 //$('.list-services-content .service-item').last().addClass('last');


	/*--------------main slider--------------*/
    $('.header_carousel').bxSlider({
	  infiniteLoop: true,
	  auto:false,
	  speed:1500,
	  controls: true,
	  adaptiveHeight: true,
	  pager: true
	});


	/*------------------------------------------------------*/
	 $(".list-advantages").owlCarousel({
	 	  
	 	  slideSpeed: 1000,
	      autoPlay: 9000, //Set AutoPlay to 3 seconds
	      navigation: true,
	      pagination: false,
	 
	      items : 4,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3]
	 
	  });



	 /*----------------------order product popup----------------*/
	  $('.call-center').magnificPopup({
	        type: 'inline',
	        preloader: false,
	        

	        fixedContentPos: false,
	        fixedBgPos: true,

	        overflowY: 'auto',

	        closeBtnInside: true,
	        preloader: false,
	        
	        midClick: true,
	        removalDelay: 300,
	        mainClass: 'my-mfp-zoom-in'
	    });

});