jQuery(document).ready(function($){
	if ( ! Modernizr.objectfit ) {
	  $('.service-thumb a').each(function () {
	    var $container = $(this),
	        imgUrl = $container.find('img').prop('src');
	    if (imgUrl) {
	      $container
	        .css('backgroundImage', 'url(' + imgUrl + ')')
	        .addClass('compat-object-fit');
	    }  
	  });
	}
});
