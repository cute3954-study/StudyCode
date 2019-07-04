function attrSearchDisabled() {
	$('#searchBtn').attr('disabled', 'disabled');
}

function removeSearchDisabled() {
	$('#searchBtn').removeAttr('disabled');
}
function searchCheck() {
	searchList = $('#searchList').val();
	if (searchList == null || searchList == "") {
		attrSearchDisabled();
	} else {
		removeSearchDisabled();
	}
}
function regionPart() {
	var regionSep = $('class').val();
	$.ajax({
		url : 'list/db/regionListPart.php',
		type : 'POST',
		data : {
			'regionSep' : regionSep
		},
		success : function(data) {
		}
	});
}
