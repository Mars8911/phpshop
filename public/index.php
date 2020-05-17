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




    <div class="fullwidth-template">
        <!-- slider -->
        <?php include(TEMPLATES_FORNT . DS . "slider.php"); ?>
        <!-- slider over-->
        <div class="section-003 section-002">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="akasha-banner style-01 left-center">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="assets/images/banner11.jpg" class="attachment-full size-full" alt="img"></figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="_self" href="#">Hoodie</a>
                                            </h6>
                                        </div>
                                        <div class="button-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="akasha-banner style-01 right-top">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="assets/images/banner12.jpg" class="attachment-full size-full" alt="img"></figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="_self" href="#">Glasses</a>
                                            </h6>
                                        </div>
                                        <div class="button-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="akasha-banner style-01 left-bottom">
                            <div class="banner-inner">
                                <figure class="banner-thumb">
                                    <img src="assets/images/banner13.jpg" class="attachment-full size-full" alt="img"></figure>
                                <div class="banner-info ">
                                    <div class="banner-content">
                                        <div class="title-wrap">
                                            <h6 class="title">
                                                <a target="_self" href="#">Beanie</a>
                                            </h6>
                                        </div>
                                        <div class="button-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-001">
            <div class="container">
                <div class="akasha-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">Best Seller</h3>
                        <div class="subtitle">Made with care for your little ones, our products are perfect for every
                            occasion. Check it out.
                        </div>
                    </div>
                </div>
                <div class="akasha-products style-02">
                    <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">

                        <!-- 商品 -->
                        <?php get_products();  ?>




                        <!-- 商品 over-->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="akasha-banner style-02 left-center">
                <div class="banner-inner">
                    <figure class="banner-thumb">
                        <img src="assets/images/banner101.jpg" class="attachment-full size-full" alt="img"></figure>
                    <div class="banner-info container">
                        <div class="banner-content">
                            <div class="title-wrap">
                                <div class="banner-label">
                                    Modern Glasses
                                </div>
                                <h6 class="title">
                                    Best Seller </h6>
                            </div>
                            <div class="button-wrap">
                                <div class="subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit justo
                                </div>
                                <a class="button" target="_self" href="#"><span>Shop now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-001">
            <div class="container">
                <div class="akasha-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">New Arrival</h3>
                        <div class="subtitle">
                            Made with care for your little ones, our products are perfect for every occasion. Check it out.
                        </div>
                    </div>
                </div>
                <div class="akasha-products style-01">
                    <div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="assets/images/apro13-1-270x350.jpg" alt="Black Shirt" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Black Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>109.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="assets/images/apro302-270x350.jpg" alt="Smock Dress" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Smock Dress</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>79.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="assets/images/apro31-1-270x350.jpg" alt="Shirred Front" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Shirred Front</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>120.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="assets/images/apro41-1-270x350.jpg" alt="Brown Shirt" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Brown Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>134.00</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="assets/images/apro51012-1-270x350.jpg" alt="Print In White" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-21%</span></span>
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Print In White</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><del><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>125.00</span></del> <ins><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>99.00</span></ins></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="assets/images/apro61-1-270x350.jpg" alt="Maternity Shoulder" width="270" height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span></div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Maternity Shoulder</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>79.00</span> – <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-038">
            <div class="akasha-banner style-07 left-center">
                <div class="banner-inner">
                    <figure class="banner-thumb">
                        <img src="assets/images/banner28.jpg" class="attachment-full size-full" alt="img"></figure>
                    <div class="banner-info container">
                        <div class="banner-content">
                            <div class="title-wrap">
                                <div class="banner-label">
                                    30 Nov - 03 Dec
                                </div>
                                <h6 class="title">
                                    New Collection </h6>
                            </div>
                            <div class="cate">
                                50% Off / Selected items
                            </div>
                            <div class="button-wrap">
                                <div class="subtitle">
                                    Mus venenatis habitasse leo malesuada lacus commodo faucibus torquent donec
                                </div>
                                <a class="button" target="_self" href="#"><span>Shop now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-001">
            <div class="container">
                <div class="akasha-heading style-01">
                    <div class="heading-inner">
                        <h3 class="title">
                            From Our Blog </h3>
                        <div class="subtitle">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                            vulputate
                        </div>
                    </div>
                </div>
                <div class="akasha-blog style-01">
                    <div class="blog-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                        <article class="post-item post-grid rows-space-0 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="0">
                                        <img src="assets/images/blogpost1-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="0">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="0">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="0">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="0">Not your ordinary multi service.</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-item post-grid rows-space-0 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="0">
                                        <img src="assets/images/blogpost5-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="0">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="0">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="0">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="0">We bring you the best by working</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-item post-grid rows-space-0 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="0">
                                        <img src="assets/images/blogpost9-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="0">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="0">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="0">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="0">We design functional best multi</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-item post-grid rows-space-0 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="-1">
                                        <img src="assets/images/blogpost4-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="-1">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="-1">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="-1">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="-1">The child is swimming with a buoy</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-item post-grid rows-space-0 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-multi">
                            <div class="post-inner blog-grid">
                                <div class="post-thumb">
                                    <a href="#" tabindex="-1">
                                        <img src="assets/images/blogpost2-370x330.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330"> </a>
                                    <a class="datebox" href="#" tabindex="-1">
                                        <span>19</span>
                                        <span>Dec</span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            By:<a href="#" tabindex="-1">
                                                admin </a>
                                        </div>
                                        <div class="post-comment-icon">
                                            <a href="#" tabindex="-1">
                                                0 </a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="#" tabindex="-1">Collection hiding beside beige wall</a></h2>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                        quisque litora dapibus primis lacinia
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-014">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="akasha-iconbox style-02">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-rocket-ship"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">Worldwide Delivery</h4>
                                    <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                        regions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="akasha-iconbox style-02">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-padlock"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">Safe Shipping</h4>
                                    <div class="desc">Pay with the world’s most popular and secure payment methods.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="akasha-iconbox style-02">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-recycle"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">365 Days Return</h4>
                                    <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="akasha-iconbox style-02">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">Shop Confidence</h4>
                                    <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-008">
            <div class="akasha-instagram style-01">
                <div class="instagram-owl owl-slick" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta1.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta2.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta3.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta4.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta5.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="-1">
                            <img class="img-responsive lazy" src="assets/images/insta6.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="-1">
                            <img class="img-responsive lazy" src="assets/images/insta7.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="-1">
                            <img class="img-responsive lazy" src="assets/images/insta8.jpg" alt="Home 01">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include(TEMPLATES_FORNT . DS . "footer.php"); ?>
</body>

</html>