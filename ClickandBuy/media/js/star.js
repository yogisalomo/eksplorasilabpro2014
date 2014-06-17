$(".star").hover(function() {
	$(this).parent().prevAll().andSelf().children().attr({
		"src" : "/ClickandBuy/media/image/star_high.png"
	});
	$(this).parent().nextAll().children().attr({
		"src" : "/ClickandBuy/media/image/star_low.png"
	});
});
console.log("Successful");