$("#wishlist-form").hide();
$("#wishlist-select option").click(function(event) {
	if ($(this).val() !== "") {
		$("#upload-form input").not("#grant").prop('disabled', true);
		$("#category-select").prop('disabled', true);
		$("#title-item").val($(this).val());
		$category = $('#category-select option:contains("'+$(this).attr("category")+'")');
		if ($category.length)
			$category.prop('selected', true);
		else {
			$('#category-select option').last().prop('selected', true);
			$("#category").attr("type", "text");
		}

		// for wishlist
		$("#username-wish").val($(this).attr("username"));
		$("#item-wish").val($(this).attr("item"));


		// for animation
		$("#price").val($(this).attr("price"));
		$("#category").val($(this).attr("category"));
		$("#description").val('Granting '+$(this).attr("username")+'\'s wish');
		$("#file").hide();
		$("#upload").hide();
		$("#wishlist-form").show();
	}
	else {
		$("#upload-form input").not("#grant").prop('disabled', false);

		$("#category-select").prop('disabled', false);
		$("#title-item").val("");
		$("#price").val("");
		$("#category").val("");
		$("#description").val("");
		$("#file").show();
		$("#upload").show();
		$("#wishlist-form").hide();
	}
});
console.log("Successful");	