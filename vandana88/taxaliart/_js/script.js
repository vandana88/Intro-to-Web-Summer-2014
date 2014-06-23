$(document).ready(function() {
	
	// Show Images Masonry
	$('#galboxleft').masonry({
  	itemSelector: '.box'
	});

	$("a[rel=group]").fancybox({
		'titlePosition': 'inside'
	});

})

// Load image in fullscreen
// $(window).load(function() {
// 	Fullscreen();
// })

// Refresh image during resizing
// $(window).resize(function() {
// 	Fullscreen();
// })

/* Make an image fullscreen
function Fullscreen() {

	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var imageWidth = $(".attachment-full").width();
	var imageHeight = $(".attachment-full").height();
	var picHeight = imageHeight / imageWidth;
	var picWidth = imageWidth / imageHeight;
	if ((winHeight / winWidth) < picHeight) {
		$(".attachment-full").css("width", winWidth);
		$(".attachment-full").css("height", picHeight * winWidth);
	} else {
		$(".attachment-full").css("height", winHeight);
		$(".attachment-full").css("width", picWidth * winHeight);
	}
	$(".attachment-full").css("margin-left",(winWidth - $(".attachment-full").width()) / 2);
	$(".attachment-full").css("margin-top",(winHeight - $(".attachment-full").height()) / 2);

} */