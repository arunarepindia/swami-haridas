$(document).ready(function(){
	var options = "";
	$('#navigationIcon').hammer(options).bind("tap", myPanHandler);
	function myPanHandler(event){
		$('#navigation').css({'left':'0px','-webkit-transform':'translateZ(0)','-webkit-transition-duration':'.4s','position':'fixed'})
		console.log('Expand');
		$('#layerOver').removeClass('none');
		$('#layerOver').addClass('display');
	}
	$('.split50').hammer(options).bind("tap", collapse);
	$('#close').hammer(options).bind("tap", collapse);
	function collapse(){
		$('#navigation').css({'left':'-200px'})
		console.log('Collapse')
	}
})