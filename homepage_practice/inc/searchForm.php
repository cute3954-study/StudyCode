<div class="serach-w3agile py-5" id="searchArea">
	<div class="container py-xl-4 py-lg-3">
		<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold"
			id="selectRegionName" align="center">キーワードから探す - 全国</h3>
		<div class="place-grids">
			<form action="/homepage_practice/list/resultList.php" method="post">
				<div class="row">
					<div class="col-sm-2 col-6 place-grid mt-sm-0 mt-3"
						style="margin: 0 !important;">
						<select class="sel" id="regionSelect" name="regionSelect">
							<option id="------" class="noSelect" selected="selected">------</option>
							<option id="全国">全国</option>
								<?php
        include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/db/db.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/list/db/regionSepAll.php';
        ?>
							</select>
					</div>
					<div class="col-sm-2 col-6 place-grid mt-sm-0 mt-3"
						style="margin: 0 !important;">
						<select class="sel" id="reregionSelect"  name="reregionSelect">
							<option value="------" class="noSelect" selected="selected">------</option>
						</select>
					</div>
					<div class="col-sm-3 col-6 place-grid">
						<select class="sel" name="houseKind">
							<option value="新築マンション" selected="selected">新築マンション</option>
							<option value="新築一戸建て">新築一戸建て</option>
							<option value="中古マンション">中古マンション</option>
							<option value="中古一戸建て">中古一戸建て</option>
							<option value="土地">土地</option>
							<option value="賃貸住宅">賃貸住宅</option>
						</select>
					</div>
					<div class="col-sm-4 col-6 place-grid">
						<input type="text" class="form-control" name="searchKeyword"
							placeholder="物件名、 路線名、 駅名などを入力" id="searchList"
							onkeyup="searchCheck();">
					</div>
					<div class="col-sm-1 col-6 place-grid">
						<button type="submit" disabled="disabled"
							class="btn btn-primary submit padding_sub mb-4" id="searchBtn">検索</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- //banner-bottom -->