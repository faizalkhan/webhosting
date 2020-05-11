$(function () {
     // start the ticker 
	$('#js-news').ticker();
	
	// hide the release history when the page loads
	//$('#release-wrapper').css('margin-top', '-' + ($('#release-wrapper').height() + 60) + 'px');

	// show/hide the release history on click
	$('a[href="#release-history"]').toggle(function () {	
		$('#release-wrapper').animate({
			marginTop: '0px'
		}, 6000, 'linear');
	}, function () {
		$('#release-wrapper').animate({
		//	marginTop: '-' + ($('#release-wrapper').height() + 60) + 'px'
		}, 6000, 'linear');
	});	
	
	$('#download a').mousedown(function () {
		_gaq.push(['_trackEvent', 'download-button', 'clicked'])		
	});
});

