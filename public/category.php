<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html lang="zh-Tw">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/dreaming-attribute.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <title>Akasha - HTML Template </title>
</head>

<body>

    <?php include(TEMPLATES_FORNT . DS . "header.php"); ?>


    <?php

    $query = query(" SELECT * FROM categories WHERE cat_id = " . escage_string($_GET['id']) . ""); //查詢資料

    confirm($query);

    while ($row = fetch_array($query)) :


    ?>


        <div class="banner-wrapper has_background">
            <img src="assets/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
            <div class="banner-wrapper-inner">
                <h1 class="page-title">Shop</h1>
                <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                        <li class="trail-item trail-end active"><span><?php echo $row['cat_title']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="main-container shop-page no-sidebar">
            <div class="container">
                <div class="row">
                    <div class="main-content col-md-12">
                        <div class="shop-control shop-before-control">
                            <div class="grid-view-mode">
                                <form>
                                    <a href="shop.html" data-toggle="tooltip" data-placement="top" class="modes-mode mode-grid display-mode active" value="grid">
                                        <span class="button-inner">
                                            Shop Grid
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </span>
                                    </a>
                                    <a href="shop-list.html" data-toggle="tooltip" data-placement="top" class="modes-mode mode-list display-mode " value="list">
                                        <span class="button-inner">
                                            Shop List
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </span>
                                    </a>
                                </form>
                            </div>
                            <form class="akasha-ordering" method="get">
                                <select title="product_cat" name="orderby" class="orderby">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                            <form class="per-page-form">
                                <label>
                                    <select class="option-perpage">
                                        <option value="12" selected="">
                                            Show 12
                                        </option>
                                        <option value="5">
                                            Show 05
                                        </option>
                                        <option value="10">
                                            Show 10
                                        </option>
                                        <option value="12">
                                            Show 12
                                        </option>
                                        <option value="15">
                                            Show 15
                                        </option>
                                        <option value="20">
                                            Show All
                                        </option>
                                    </select>
                                </label>
                            </form>
                        </div>
                        <div class="auto-clear equal-container better-height akasha-products">
                            <ul class="row products columns-3">

                                <?php get_products_in_cat_page(); ?>



                            </ul>
                        </div>
                        <div class="shop-control shop-after-control">
                            <nav class="akasha-pagination">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#">Next</a>
                            </nav>
                            <p class="akasha-result-count">Showing 1–12 of 20 results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
    <?php include(TEMPLATES_FORNT . DS . "footer.php"); ?>
</body>

</html>