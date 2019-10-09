(function($) {
    'use strict';  


    $(document).load(function(){
    });

    $(document).ready(function(){

	    $('[data-toggle="tooltip"]').tooltip();
	    $('[data-toggle="popover"]').popover();


	    // alert();
	    let myTypeItInstance = new TypeIt('#typeit', {
		  // strings: "This will be typed!"
		  // strings: ["This will be typed!", "And this will be typed too."], //new line
		  loop:true

		});

		myTypeItInstance.pause(1000);
		myTypeItInstance.type('My name is nikko.');
		myTypeItInstance.go();


    	// MMenu
  //   	new Mmenu('#mmenu',{
		// 	extensions : [
	 //        	"pagedim-black",
		//         "position-front",
		//         // "fullscreen"
	 //        ],
	 //        "navbars": [
	 //        	{
  //                "position": "bottom",
  //                "content": [
	 //                    "<a href='#/'></a>",
	 //                    "<a href='#/'></a>"
	 //                ]
  //             	}
  //          	]
		// });

		// Popover
		// $('.btn-search').popover({
		// 	animation: true,
		// 	delay: 300,
		// 	container: 'body',
		// 	html: true,
		// 	content: 'test',
		// 	placement: 'bottom',
		// 	trigger: 'click'
		// });


    	// Owl carousel
  //   	$('.carousel').owlCarousel({
		//     nav:true,
		//     items: 1,
		//     navText: [
		//     	'<i class="fas fa-chevron-left"></i>',
		//     	'<i class="fas fa-chevron-right"></i>'
		//     ]
		// });

    	

    });

    $(window).scroll(function() {
    	
	    // Add class on menu
	   	// if( $('.el-container').length > 0 ){
			// var scroll = $(".el-container").offset().top-100;
	    // }
	   	if ( $(this).scrollTop() > 200 ) {   
	   		$('header').addClass('scroll');
	    } else {
	   		$('header').removeClass('scroll');
	    }

	});

})(jQuery);