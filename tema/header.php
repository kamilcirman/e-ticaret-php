<?php
include '../admin/netting/baglan.php';
include '../admin/production/fonksiyon.php';





//usersor
$usersor=$db->prepare("SELECT * FROM users WHERE id=:id ");
$usersor->execute(array(
    'id'=>1
));
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);


//adres sor

$adressor=$db->prepare("SELECT * FROM addresses WHERE id=:id ");
$adressor->execute(array(
    'id'=>1
));
$adrescek=$adressor->fetch(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/tienda-v4/tienda/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 18:31:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Arabul.com</title>

    <!--=== Favicon ===-->
<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

<!--== Google Fonts ==-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet">

<!--=== Bootstrap CSS ===-->
<link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
<!--=== Font-Awesome CSS ===-->
<link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
<!--=== Plugins CSS ===-->
<link href="assets/css/plugins.css" rel="stylesheet">
<!--=== Helper CSS ===-->
<link href="assets/css/helper.min.css" rel="stylesheet">
<!--=== Main Style CSS ===-->
<link href="assets/css/style.css" rel="stylesheet">

<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--== Start Header Section ==-->
<header id="header-area" class="header__3">
    <!-- Start PreHeader Area -->
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-6">
                    <div class="preheader-contact-info d-flex align-items-center justify-content-between justify-content-md-start">
                        <div class="single-contact-info">
                            <span class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <a href="mailto:your@example.com" class="contact-text">
                                <strong>Email:</strong> your@email.here
                            </a>
                        </div>
                        <div class="single-contact-info">
                            <span class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <a href="tel:01816277243" class="contact-text">
                                <strong>Phone:</strong> (+1) 866-540-3229
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-6 mt-xs-10">
                    <div class="site-setting-menu">
                        <ul class="nav justify-content-center justify-content-md-end">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="login-register.html">Sign In</a></li>
                            <li class="switcher dropdown-show"><a href="#" class="arrow-toggle">English</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#">Bengali</a></li>
                                    <li><a href="#">Chinese</a></li>
                                    <li><a href="#">Hindi</a></li>
                                    <li><a href="#">Urdu</a></li>
                                </ul>
                            </li>
                            <li class="switcher dropdown-show"><a href="#" class="arrow-toggle">USD</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#">BDT</a></li>
                                    <li><a href="#">AUD</a></li>
                                    <li><a href="#">CAD</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PreHeader Area -->

    <!-- Start Header Middle Area -->
    <div class="header-middle-area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-4 col-md-2 col-xl-3 m-auto text-center text-lg-left">
                    <a href="index.php" class="logo-wrap d-block">
                        <img src="assets/img/logo-black.png" alt="Logo" class="img-fluid"/>
                    </a>
                </div>
                <!-- Logo Area End -->

                <!-- Search Box Area Start -->
                <div class="col-8 col-md-7 col- m-auto ">
                    <div class="search-box-wrap">
                        <form class="search-form d-flex" action="#" method="get">
                            <input type="search" name="search" placeholder="type and hit enter"/>
                            <button class="btn btn-search"><img src="assets/img/icons/icon-search.png"
                                                                alt="Search Icon"/>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Search Box Area End -->

                <!-- Mini Cart Area Start -->
                <div class="col-12 col-md-3 col-xl-2 m-auto text-center text-lg-right mt-xs-15">
                    <div class="minicart-wrapper">
                        <button class="btn btn-minicart">My Cart <sup class="cart-count">3</sup></button>
                        <div class="minicart-content">
                            <div class="mini-cart-body">
                                <!-- Single Cart Item Start -->
                                <div class="single-cart-item d-flex">
                                    <figure class="product-thumb">
                                        <a href="single-product.html"><img src="assets/img/product-1.jpg"
                                                                           alt="Products"/></a>
                                    </figure>

                                    <div class="product-details">
                                        <h2><a href="single-product.html">Sprite Yoga Companion</a></h2>
                                        <div class="cal d-flex align-items-center">
                                            <span class="quantity">3</span>
                                            <span class="multiplication">X</span>
                                            <span class="price">$77.00</span>
                                        </div>
                                    </div>
                                    <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <!-- Single Cart Item End -->

                                <!-- Single Cart Item Start -->
                                <div class="single-cart-item d-flex">
                                    <figure class="product-thumb">
                                        <a href="single-product.html"><img src="assets/img/product-2.jpg"
                                                                           alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="single-product.html">Yoga Companion Kit</a></h2>
                                        <div class="cal d-flex align-items-center">
                                            <span class="quantity">2</span>
                                            <span class="multiplication">X</span>
                                            <span class="price">$6.00</span>
                                        </div>
                                    </div>
                                    <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <!-- Single Cart Item End -->

                                <!-- Single Cart Item Start -->
                                <div class="single-cart-item d-flex">
                                    <figure class="product-thumb">
                                        <a href="single-product.html"><img src="assets/img/product-3.jpg"
                                                                           alt="Products"/></a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                        <div class="cal d-flex align-items-center">
                                            <span class="quantity">1</span>
                                            <span class="multiplication">X</span>
                                            <span class="price">$116.00</span>
                                        </div>
                                    </div>
                                    <a href="single-product.html" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <!-- Single Cart Item End -->
                            </div>
                            <div class="mini-cart-footer">
                                <a href="checkout.html" class="btn">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mini Cart Area End -->
            </div>
        </div>
    </div>
    <!-- End Header Middle Area -->

    <!-- Start Main Menu Area -->
    <div class="navigation-area">
        <div class="container">
            <div class="row">
                <!-- Categories List Start -->
                <div class="col-10 col-lg-3">
                    <div class="categories-list-wrap">
                        <button class="btn btn-category d-none d-lg-inline-block"><i class="fa fa-bars"></i> Kategoriler
                        </button>
                        <ul class="category-list-menu">
                            

                            <?php
                        $kategorisor=$db->prepare("SELECT * FROM categories WHERE durum=:durum ORDER BY id ASC ");
                        $kategorisor->execute(array(

                            'durum' => 1
                        ));
                        while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){
                        
                        
                        ?>
                            <li class="category-item-parent dropdown-show">
                                <a href="
                                
                                <?php
                                if ($kategoricek['category_slug']) {
                                   echo $kategoricek['category_slug'];
                                }
                                else{
                                    echo "sayfa-".seo($kategoricek['category_name']);
                                }


                                ?>" 
                                class="category-item arrow-toggle">
                                    <span><?php echo $kategoricek['category_name']?></span>
                                </a>
                        <?php }?>
                                
                            </li>

                            
                           
                            
                          
                            
                            <li class="category-item-parent">
                                <a href="#" class="category-item btn-more">More Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Categories List End -->

                <!-- Main Menu Start -->
                <div class="col-2 col-lg-9 d-none d-lg-block">
                    <div class="main-menu-wrap">
<nav class="mainmenu">
                <ul class="main-navbar clearfix">
                    <li class="dropdown-show"><a href="index.php" >Home</a></li>
                    <li><a href="hakkimizda.php">About Us</a></li>
                    <li class="dropdown-show"><a href="#" class="arrow-toggle">Shop</a>
                        <ul class="mega-menu-wrap dropdown-nav">
                            <li class="mega-menu-item"><a href="shop.html" class="mega-item-title">Shop PageLayout</a>
                                <ul>
                                    <li><a href="shop-3-grid.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-grid.html">Shop 4 Column</a></li>
                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-list.html">Shop Lsiting View</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop Lsit left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop Lsit Right Sidebar</a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-item"><a href="single-product.html" class="mega-item-title">Single
                                Products Style</a>
                                <ul>
                                    <li><a href="single-product-carousel.html">Single Product Carousel</a></li>
                                    <li><a href="single-product-sticky-left.html">Single Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Single Product Sticky Right</a></li>
                                    <li><a href="single-product-gallery-left.html">Single Product Gallery Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Single Product Gallery Right</a></li>
                                    <li><a href="single-product-tab-style-top.html">Single Product Tab Style Top</a></li>
                                    <li><a href="single-product-tab-style-left.html">Single Product Tab Style Left</a></li>
                                    <li><a href="single-product-tab-style-right.html">Single Product Tab Style Right</a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-item"><a href="single-product.html" class="mega-item-title">Single
                                Products</a>
                                <ul>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                    <li><a href="single-product-group.html">Single Product Group</a></li>
                                    <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate.html">Single Product Affiliate </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-show"><a href="#" class="arrow-toggle">Men</a>
                        <ul class="mega-menu-wrap dropdown-nav">
                            <li class="mega-menu-item"><a href="shop-list.html" class="mega-item-title">Shirt</a>
                                <ul>
                                    <li><a href="shop.html">Tops & Tees</a></li>
                                    <li><a href="shop.html">Polo Short Sleeve</a></li>
                                    <li><a href="shop.html">Graphic T-Shirts</a></li>
                                    <li><a href="shop.html">Jackets & Coats</a></li>
                                    <li><a href="shop.html">Fashion Jackets</a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-item"><a href="shop-list.html" class="mega-item-title">Jeans</a>
                                <ul>
                                    <li><a href="shop.html">Crochet</a></li>
                                    <li><a href="shop.html">Sleeveless</a></li>
                                    <li><a href="shop.html">Stripes</a></li>
                                    <li><a href="shop.html">Sweaters</a></li>
                                    <li><a href="shop.html">Hoodies</a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-item"><a href="shop-list.html"
                                                        class="mega-item-title">Shoes</a>
                                <ul>
                                    <li><a href="shop.html">Tops & Tees</a></li>
                                    <li><a href="shop.html">Polo Short Sleeve</a></li>
                                    <li><a href="shop.html">Graphic T-Shirts</a></li>
                                    <li><a href="shop.html">Jackets & Coats</a></li>
                                    <li><a href="shop.html">Fashion Jackets</a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-item"><a href="shop-list.html"
                                                        class="mega-item-title">Watches</a>
                                <ul>
                                    <li><a href="shop.html">Crochet</a></li>
                                    <li><a href="shop.html">Sleeveless</a></li>
                                    <li><a href="shop.html">Stripes</a></li>
                                    <li><a href="shop.html">Sweaters</a></li>
                                    <li><a href="shop.html">Hoodies</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-show"><a href="#" class="arrow-toggle">Pages</a>
                        <ul class="dropdown-nav">
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="login-register.html">Login & Register</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-show"><a href="#" class="arrow-toggle">Blog</a>
                        <ul class="dropdown-nav">
                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                            <li><a href="single-blog.html">Single Blog</a></li>
                            <li><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
</nav>
                    </div>
                </div>
                <!-- Main Menu End -->
            </div>
        </div>
    </div>
    <!-- End Main Menu Area -->
</header>
<!--== End Header Section ==-->
