<!DOCTYPE html>
<html lang="zxx">
<head>
<title>まるまる不動産 | 検索リスト</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="keywords"
	content="District Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/linkCSS.php';
?>
</head>
<head>
<body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/header.php';
?>
<div class="container">
    <div class="row resultList">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.html">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="category.html">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item"><a href="category.html">Morbi leo risus</a></li>
                    <li class="list-group-item"><a href="category.html">Porta ac consectetur ac</a></li>
                    <li class="list-group-item"><a href="category.html">Vestibulum at eros</a></li>
                </ul>
            </div>
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/list/db/resultListOne.php';
            ?>
        </div>
        <div class="col">
            <div class="row">
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/list/db/resultList.php';
            ?>
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/linkJS.php';
?>
</html>