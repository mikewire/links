$(document).ready(function() {		
		
		
		$(".home-hero .slide-wrapper").cycle({
		
			fx:     'scrollHorz', 
			speed: 	1000,
			timeout: 5000,
		    next:   '.move-right', 
		    prev:   '.move-left' 
		
		});
		
		var $posts = $('.articles');
		$posts.imagesLoaded(function(){
	  		$posts.masonry({
	    		itemSelector : '.box'
	 	 	});
	
		});
});