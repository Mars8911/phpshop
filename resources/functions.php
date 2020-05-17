<?php

function redirect($location)
{
    header("Location:$location");
}


function query($sql)
{
    global $connection;

    return mysqli_query($connection, $sql);
}


function confirm($result)
{
    global $connection;

    if (!$result) {
        die("沒連到資料庫喔!" . mysqli_errno($connection));
    }
}




function escage_string($string)
{
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}



function fetch_array($result)
{

    return mysqli_fetch_array($result);
}


function get_products()
{
    $query = query(" SELECT * FROM products "); //查詢資料

    confirm($query);

    while ($row = fetch_array($query)) {  // mysqli_fetch_assoc取得一筆值


        echo      "<div class='product-item featured_products style-02 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped'>
                        <div class='product-inner tooltip-top'>
                            <div class='product-thumb'>
                                <a class='thumb-link'
                                   href='#' tabindex='0'>
                                    <img class='img-responsive'
                                         src='{$row['products_image']}'
                                         alt='{$row['products_title']}' width='270' height='350'>
                                </a>
                                <div class='flash'>
                                    <span class='onnew'><span class='text'>New</span></span></div>
                                <a href='#' class='button yith-wcqv-button'>Quick View</a></div>
                            <div class='product-info'>
                                <div class='rating-wapper nostar'>
                                    <div class='star-rating'><span style='width:0%'>Rated <strong
                                            class='rating'>0</strong> out of 5</span></div>
                                    <span class='review'>(0)</span></div>
                                <h3 class='product-name product_title'>
                                    <a href='item.php?id={$row['products_id']}'
                                       tabindex='0'>{$row['products_title']}</a>
                                </h3>
                                <span class='price'><span class='akasha-Price-amount amount'><span
                                        class='akasha-Price-currencySymbol'>NT.</span> {$row['products_price']}</span>
                            </div>
                            <div class='group-button clearfix'>
                                <div class='yith-wcwl-add-to-wishlist'>
                                    <div class='yith-wcwl-add-button show'>
                                        <a href='#' class='add_to_wishlist'>Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class='add-to-cart'>
                                    <a href='#' class='button product_type_grouped'>
                                        View products</a></div>
                                <div class='akasha product compare-button'>
                                    <a href='#' class='compare button'>Compare</a></div>
                            </div>
                        </div>
                    </div>";
    }
}




function get_products_in_cat_page()
{
    $query = query(" SELECT * FROM products WHERE products_id  " . escage_string($_GET['id']) . ""); //查詢資料

    confirm($query);

    while ($row = fetch_array($query)) {  // mysqli_fetch_assoc取得一筆值


        echo    "<li class='product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple' data-wow-duration='1s' data-wow-delay='0ms' data-wow='fadeInUp'>
                                    <div class='product-inner tooltip-left'>
                                        <div class='product-thumb'>
                                            <a class='thumb-link' href='#'>
                                                <img class='img-responsive' src='assets/images/apro101-1-600x778.jpg' alt='Long Oversized' width='600' height='778'>
                                            </a>
                                            <div class='flash'>
                                                <span class='onnew'><span class='text'>New</span></span></div>
                                            <div class='group-button'>
                                                <div class='yith-wcwl-add-to-wishlist'>
                                                    <div class='yith-wcwl-add-button show'>
                                                        <a href='#' class='add_to_wishlist'>Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class='akasha product compare-button'>
                                                    <a href='#' class='compare button'>Compare</a>
                                                </div>
                                                <a href='#' class='button yith-wcqv-button'>Quick View</a>
                                                <div class='add-to-cart'>
                                                    <a href='#' class='button product_type_simple add_to_cart_button'>Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='product-info equal-elem'>
                                            <h3 class='product-name product_title'>
                                                <a href='#'>Long Oversized</a>
                                            </h3>
                                            <div class='rating-wapper nostar'>
                                                <div class='star-rating'><span style='width:0%'>Rated <strong class='rating'>0</strong> out of 5</span></div>
                                                <span class='review'>(0)</span>
                                            </div>
                                            <span class='price'><span class='akasha-Price-amount amount'>
                                                    <span class='akasha-Price-currencySymbol'>$</span>60.00</span></span>
                                        </div>
                                    </div>
                                </li>";
    }
}
