	// PROJECTS FLEXSLIDER
	// The slider being synced must be initialized first
	$(window).load(function(){

	  $('#carousel').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth: 140,
	    itemMargin: 0,
	    asNavFor: '#slider'
	  });

	  $('#carousel2').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    directionNav: false,
	    slideshow: false,
	    itemWidth: 15,
	    itemMargin: 0,
	    asNavFor: '#carousel'
	  });
	   
	  $('#slider').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel",
	    start: function ( slider ) {
		$('#plus').removeClass( 'invisible' );
		}
	  });




		// PROJECTS DESCRIPTION
	$('.project-description-trigger').click(function(e){
		e.preventDefault();
		$(this).toggleClass('on');
		$('.project-description').toggleClass('on');
	});

	$('.project-description .scroll-down').click(function(e){
		e.preventDefault();
		$('.project-description .content').velocity({
			top: '-80%'
		}, {
			duration: 400,
	    easing: "swing",
	    queue: "",
	    begin: null,
	    progress: null,
	    complete: null,
	    loop: false,
	    delay: false,
	    display: false,
	    mobileHA: true
		});
	});
	$('.project-description .scroll-up').click(function(e){
		e.preventDefault();
		$('.project-description .content').velocity({
			top: '0'
		}, {
			duration: 400,
	    easing: "swing",
	    queue: "",
	    begin: null,
	    progress: null,
	    complete: null,
	    loop: false,
	    delay: false,
	    display: false,
	    mobileHA: true
		});
	});
		});