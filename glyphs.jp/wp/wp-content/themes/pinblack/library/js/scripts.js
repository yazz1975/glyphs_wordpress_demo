(function($){	 

		var $pinblack_container = $('#boxes');
		$pinblack_container.imagesLoaded(function(){
		  $pinblack_container.masonry({
			itemSelector : '.item',
			isFitWidth: 'true'
		  });
		});
	
})(jQuery); 