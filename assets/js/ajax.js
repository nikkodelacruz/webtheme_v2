(function($){
	'use strict';

	$(document).ready(function(){

		var ajax_url = ajax_object.ajax_url;
		var ajax_nonce = ajax_object.ajax_nonce;

		$.ajax({
    		url : ajax_url,
    		method : 'POST',
    		async: false,
    		dataType : 'json',
    		data : {
        		security: ajax_nonce,
    			action : 'ajax_function'
    		},
    		beforeSend: function(){
    		},
    		success: function(response){
    			console.log(response);
    		},
    		error: function(reponse){
    			console.log(response);
    			alert('Something went wrong, Please reload the page');
    		}
    	});

	});
	
})(jQuery);