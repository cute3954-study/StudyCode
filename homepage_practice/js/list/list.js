function attrSearchDisabled() {
	$('#searchBtn').attr('disabled', 'disabled');
}

function removeSearchDisabled() {
	$('#searchBtn').removeAttr('disabled');
}
function searchCheck() {
	var searchList = $('#searchList').val();
	var regionSep = $('#regionSelect option:selected').val();
	var reregionSep = $('#reregionSelect option:selected').val();
	if (regionSep != '------' && reregionSep != '------') {
		if (searchList == null || searchList == "") {
			attrSearchDisabled();
		} else {
			removeSearchDisabled();
		}
	} else {
		attrSearchDisabled();
	}
}

$("#新築マンション").click(function() {
	$('#topMsg').innerHTML("新築マンション");
});

function regionChange() {
	$('#regionSelect').change(regionPart);
}

function regionPart() {
	var regionSep = $('#regionSelect option:selected').val();
	if (regionSep != '全国' && regionSep != '------') {
		$.get('/homepage_practice/list/db/regionPartCheck.php?regionSep=' + regionSep,
				show_reregion);
	} else if (regionSep == '全国') {
		$
				.get('/homepage_practice/list/db/regionListAll.php?regionSep=' + regionSep,
						show_reregion);
	} else if (regionSep == '------') {
		$('#reregionSelect')
				.html(
						'<option value="0" class="noSelect" selected="selected">------</option>');
	}
	if (regionSep != '全国' && regionSep != '------') {
		$('#selectRegionName').html('キーワードから探す - ' + regionSep);
	} else {
		$('#selectRegionName').html('キーワードから探す - ' + '全国');
	}
}

function show_reregion(res) {
	$('#reregionSelect').html(res);
}
$(document).ready(regionChange);

// backbone.js 練習--------------------------
(function($) {
	var houseInformation = Backbone.Model.extend({
		defaults:{
			houseSeq = "1",
			houseSep = "1",
			houseName = "1",
			housePriceMin = "1",
			housePriceMax = "1",
			houseAdd1 = "1",
			houseAdd2 = "1",
			houseAdd3 = "1",
			houseAdd4 = "1",
			houseTraffic = "1",
			houseSpace = "1",
			houseAreaMin = "1",
			houseAreaMax = "1",
			housePeriodYear = "1",
			housePeriodMonth = "1",
			houseText = "1",
			houseKind = "1",
			houseImg = "apartment-architectural-design-architecture-1115804.jpg"
		}
	});
	var houseInfoView = Backbone.View.extend({
		tagName:"div",
		className: "card-body",
		template: $("#").html();
	});
})(jQuery);
