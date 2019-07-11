<?php
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/db/db.php';
$reregionSelect = $_POST['reregionSelect'];
$houseKind_php = $_POST['houseKind'];
$searchKeyword = $_POST['searchKeyword'];
// reason of error: 'like=' -> 'like '
/* error:
Warning
: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in
C:\Users\cute3\git\repository\HomepageError\list\db\resultList.php */
$sql = "select * from houseInfo where houseAdd1='$reregionSelect' and houseKind='$houseKind_php' and (houseTraffic like='%$searchKeyword%'
or houseName like='%$searchKeyword%' or houseAdd2 like='%$searchKeyword%' or houseAdd3 like='%$searchKeyword%' or houseAdd4 like='%$searchKeyword%')order by houseSeq desc";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $houseSeq = $row['houseSeq'];
    $houseSep = $row['houseSep'];
    $houseName = $row['houseName'];
    $housePriceMin = $row['housePriceMin'];
    $housePriceMax = $row['housePriceMax'];
    $houseAdd1 = $row['houseAdd1'];
    $houseAdd2 = $row['houseAdd2'];
    $houseAdd3 = $row['houseAdd3'];
    $houseAdd4 = $row['houseAdd4'];
    $houseTraffic = $row['houseTraffic'];
    $houseSpace = $row['houseSpace'];
    $houseAreaMin = $row['houseAreaMin'];
    $houseAreaMax = $row['houseAreaMax'];
    $housePeriodYear = $row['housePeriodYear'];
    $housePeriodMonth = $row['housePeriodMonth'];
    $houseText = $row['houseText'];
    $houseKind = $row['houseKind'];
    $houseImg = $row['houseImg'];
    ?>
<div class="col-12 col-md-6 col-lg-6">
	<div class="list_card">
		<img class="card-img-top listImg"
			src="/HomepageError/images/<?php echo $houseImg ?>">
		<div class="card-body">
			<h5 class="card-title listTitle">
				<a href="resultListDetail?houseSeq=<?php echo $houseSeq ?>"
					title="View Product"><?php echo $houseName ?></a>
			</h5>
			<p class="card-text listContent"><?php echo $houseText ?></p>
			<div class="row">
				<div class="col" align="left">
					<a class="btn btn-primary btn-model" href="#">モデルルームを見学する</a>
				</div>
				<div class="col" align="left">
					<a href="#" class="btn btn-primary btn-paper">資料をもらう（無料）</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>