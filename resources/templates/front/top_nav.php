 <div class="header-logo">
     <a href="index.html"><img alt="Akasha" src="/public/assets/images/logo.png" class="logo"></a></div>
 <div class="box-header-nav menu-nocenter">
     <ul id="menu-primary-menu" class="clone-main-menu akasha-clone-mobile-menu akasha-nav main-menu">
         <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
             <a class="akasha-menu-item-title" title="Pages" href="#">首頁</a>
             <span class="toggle-submenu"></span>
             <ul role="menu" class="submenu">
                 <li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                     <a class="akasha-menu-item-title" title="About" href="about.html">About</a></li>
                 <li id="menu-item-988" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                     <a class="akasha-menu-item-title" title="Contact" href="contact.html">Contact</a></li>
                 <li id="menu-item-990" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                     <a class="akasha-menu-item-title" title="Page 404" href="404.html">Page 404</a></li>
             </ul>
         </li>
         <!-- 分類 -->
         <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
             <a class="akasha-menu-item-title" title="Pages" href="#">商品項目</a>
             <span class="toggle-submenu"></span>
             <ul role="menu" class="submenu">
                 <?php
                    $query = "SELECT * FROM categories"; //查詢資料
                    $set_all_query = mysqli_query($connection, $query); //執行某個資料庫查詢

                    if (!$set_all_query) {
                        die("沒連到資料庫喔!" . mysqli_errno($connection));
                    }

                    while ($row = mysqli_fetch_assoc($set_all_query)) {  // mysqli_fetch_assoc取得一筆值

                        echo "<li id='menu-item-987' class='menu-item menu-item-type-custom menu-item-object-custom menu-item-987'>
                     <a class='akasha-menu-item-title' title='About' href='category.php?id={$row['cat_id']}'>{$row['cat_title']}</a></li>";
                    }


                    ?>

             </ul>
         </li>
     </ul>
 </div>