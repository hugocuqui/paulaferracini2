jQuery(function($) {

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: false
		});
	});



	// delegate calls to data-toggle="lightbox"
	$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
			event.preventDefault();
			return $(this).ekkoLightbox({
				  //left_arrow_class: 'icon-angle-left',
					//right_arrow_class: 'icon-angle-right',
					onShown: function() {
							if (window.console) {
									return console.log('Checking our the events huh?');
							}
					},
					onNavigate: function(direction, itemIndex) {
							if (window.console) {
									return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
					}
			});
	});

	//Programatically call
	$('#open-image').click(function (e) {
			e.preventDefault();
			$(this).ekkoLightbox();
	});
	$('#open-youtube').click(function (e) {
			e.preventDefault();
			$(this).ekkoLightbox();
	});
// navigateTo
	$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
			event.preventDefault();
			var lb;
			return $(this).ekkoLightbox({
					onShown: function() {
							lb = this;
							$(lb.modal_content).on('click', '.modal-footer a', function(e) {
								e.preventDefault();
								lb.navigateTo(2);
							});
					}
			});
	});




	$( '.centered' ).each(function( e ) {
		$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
	});

	$(window).resize(function(){
		$( '.centered' ).each(function( e ) {
			$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
		});
	});

	//portfolio
	$(window).load(function(){
		$portfolio_selectors = $('.portfolio-filter >li>a');
		if($portfolio_selectors!='undefined'){
			$portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : 'li',
				layoutMode : 'fitRows'
			});
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}
	});

	//contact form
	var form = $('.contact-form');
	form.submit(function () {
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});
});
