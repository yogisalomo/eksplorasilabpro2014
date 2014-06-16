$("#category-select").click(function(event) {
	if ($(this).val() === "Create new category") {
		$("#category").attr("type", "text");
		$("#category").attr("placeholder", "New Category");
		$("#category").val("");
	}
	else {
		$("#category").attr("type", "hidden");
		$("#category").val($("#category_select").val());
	}
});
