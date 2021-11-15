function getHouses() {
	$.ajax({
		type: "GET",
		dataType: "json",
		url: "http://127.0.0.1:8000/api/houses",

		success: function (houses) {
			console.log(houses)
			var template = $("#all-houses-template").html();
			console.log(template)
			var renderTemplate = Mustache.render(template, houses);
			console.log(renderTemplate)
			$("#all-houses").append(renderTemplate);
		}
	});
}

function getObjectInfo(selectedButton) {
	propId = $(selectedButton).attr("id");
	$.ajax({
		type: "GET",
		dataType: "json",
		url: "http://127.0.0.1:8000/api/houses/" + propId,

		success: function (objects) {
			var template = $("#detail-objects-template").html();
			console.log(template)
			var renderTemplate = Mustache.render(template, objects);
			console.log(renderTemplate)
			$("#object-details").html(renderTemplate);
		}
	});
}

$(document).ready(function () {
	getHouses();

	$(document).on('click', '.objects-info-btn', function () {
		getObjectInfo(this);
	});
});