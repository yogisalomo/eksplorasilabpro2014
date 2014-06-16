$(".jumbotron:first").css({
	"width" : "708px"
});
$(".jumbotron").on("mouseenter", function(event) {
	$(".jumbotron").not($(this)).stop().animate({
		"width" : "30px"
	});
	$(".jumbotron").not($(this)).css({
		"background-color" : "#000"
	});
	$(this).stop().animate({
		"width" : "708px"
	});
	$(this).css({
		"background-color" : "#EEE"
	});
});
console.log("Compiled success");