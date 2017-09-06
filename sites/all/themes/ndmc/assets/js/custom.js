$(document).ready(function(){
	
	 $('.content-item').css('background', function () { 
      return "url(" + $(this).attr('data-bg') + ")"
    });
	
	$( ".page-image img" ).addClass( "img-responsive" );
	$( ".latest-news-image img" ).addClass( "img-circle" );
	//
	//parallax
	//
	// init controller
						var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

						// build scenes
						new ScrollMagic.Scene({triggerElement: "#parallax1"})
										.setTween("#parallax1 > div >  div > div > img ", {y: "100%", ease: Linear.easeNone})
										
										.addTo(controller);

						new ScrollMagic.Scene({triggerElement: "#parallax2"})
										.setTween("#parallax2 > div", {y: "90%", ease: Linear.easeNone})
										
										.addTo(controller);

						new ScrollMagic.Scene({triggerElement: "#parallax3"})
										.setTween("#parallax3 > div", {y: "80%", ease: Linear.easeNone})
							
										.addTo(controller);
										
	//animate
	$('.animate').scrolla({
		mobile: false,
		once: false
	});
	//back_to_top
	
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
