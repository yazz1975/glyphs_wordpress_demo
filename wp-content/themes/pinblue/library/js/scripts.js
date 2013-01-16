(function($){	 

		var $pinblue_container = $('#boxes');
		$pinblue_container.imagesLoaded(function(){
		  $pinblue_container.masonry({
			itemSelector : '.item',
			isFitWidth: 'true'
		  });
		});
	
})(jQuery); 