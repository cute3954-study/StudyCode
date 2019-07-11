<?php
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/db/db.php';
$houseKind_php = $_POST['houseKind'];
$sql = "select * from houseInfo where houseKind='$houseKind_php' order by houseSeq desc limit 1";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$houseSeq = $row['houseSeq'];
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
$houseImg = $row['houseImg'];
$houseKind = $row['houseKind'];
?>
<div class="card bg-light mb-3">
	<div class="card-header text-uppercase lastProduct_title">おすすめの物件</div>
	<div class="card-body">
		<img class="img-fluid"
			src="/HomepageError/images/<?php echo $houseImg ?>" />
		<h5 class="card-title listTitle">
			<a href="resultListDetail?houseSeq=<?php echo $houseSeq ?>"
				title="View Product"><?php echo $houseName ?></a>
		</h5>
		<p class="card-text listContent"><?php echo $houseText ?></p>
		<h5 class="bloc_left_price"><?php echo $housePriceMin ?>万円~<?php echo $housePriceMax ?>万円</h5>
	</div>
</div>