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
