(function($) {

    'use strict';  

    $(document).load(function(){

    });

    $(document).ready(function(){
		var ajax_url = ajax_object.ajax_url;
		var ajax_nonce = ajax_object.ajax_nonce;

    	
    	$.ajax({
			url: ajax_url,
			method: 'POST',
			data: {
				post_id : post_id,
				related_products : related,
	        	security: ajax_nonce,
				action : 'ajax_action'
			},
			beforeSend: function(){
			},
			success: function(response){
				console.log(response);
			},
			error: function(response){
				console.log(response)
			}
		});
    });

})(jQuery);