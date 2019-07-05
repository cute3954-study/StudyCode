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

	var hmAry = new Array();
	hmAry[0] = $("#新築マンション").val();
	hmAry[1] = $("#中古マンション").val();
	hmAry[2] = $("#新規一戸建て").val();
	hmAry[3] = $("#中古一戸建て").val();
	hmAry[4] = $("#注文住宅").val();
	hmAry[5] = $("#土地").val();
	for (var i = 0; i < hmAry.length; i++) {
//		hmAry[i].click(function() {
//
//		});
	}

function regionChange() {
	$('#regionSelect').change(regionPart);
}

function regionPart() {
	var regionSep = $('#regionSelect option:selected').val();
	if (regionSep != '全国' && regionSep != '------') {
		$.get('list/db/regionPartCheck.php?regionSep=' + regionSep,
				show_reregion);
	} else if (regionSep == '全国') {
		$
				.get('list/db/regionListAll.php?regionSep=' + regionSep,
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
