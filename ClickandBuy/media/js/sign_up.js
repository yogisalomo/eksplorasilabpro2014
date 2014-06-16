$("button").click(function(event) {
	var pass = true;
	$(".ui-state-error").hide();
	$(".jumbotron input").each(function(index) {
		if ($(this).val() === "") {
			var error = $("<div/>", {
					"class" : "ui-state-error ui-corner-all",
				}).css({
					"text-align":"center", 
					"width": "500px",
					"margin-left":"auto", 
					"margin-right":"auto",
				});
			error.text("Please fill "+$(this).attr("placeholder")+" form").appendTo($("#error")).fadeIn(800);
			pass = false;
		}
	});
	if (!pass)
		event.preventDefault();
});
console.log("Successful");