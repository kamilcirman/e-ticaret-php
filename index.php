<?php
include 'header.php'; 

?>

<!--== Start Slider & Offer Area ==-->
<div class="slider-offer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ml-auto">
                <div class="slider-offer-content">
                    <div class="row">
                        <!-- Slider content Start -->     
                  
                        <div class="col-lg-8">
                        <?php  $slidersor=$db->prepare("SELECT * FROM slider ");
                                    $slidersor->execute();
                                    

                                    while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {   ?> 
                            <div class="slider-carousel owl-carousel">
                                <div class="single-slide-item">
                                    <a href="<?php echo $slidercek['slider_link']?>"><img src="<?php echo $slidercek['slider_resim'] ?>" alt="" class="img-responsive"></a>
                                </div>
                                <?php }?>
                            </div>
                            
                        </div>
                       
                       
                        <!-- Slider content End -->
                                   
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Slider & Offer Area ==-->

<!--== Start Product Content Wrapper ==-->
<div id="product-container-wrapper">
    <div class="container">
        <div class="row">
            <!-- Sidebar Content Start -->
            <div class="col-lg-3 order-last order-lg-first">
                <div id="home-sidebar-wrap">
                    <!-- Sidebar Banner Start -->
                    <div class="single-home-sidebar d-none d-lg-block">
                        <div class="sidebar-body">
                            <a href="shop.html" class="d-bock">
                                <img src="assets/img/home3-sidebar-banner.jpg" alt="Banner"/>
                            </a>
                        </div>
                    </div>
                    <!-- Sidebar Banner End -->

                    <!-- Most viewed Product Start -->
                    <div class="single-home-sidebar">
                        <h3 class="title">MostViewed</h3>
                        <div class="sidebar-body">
                            <div class="sidebar-product-carousel owl-carousel">
                                <div class="sidebar-carousel-item">
                                    <div class="product-small-list">
                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-1.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-3.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-2.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">MH02-Gray</a>
                                                </h2>
                                                <span class="pro-price">$20.11</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-3.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-4.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">MH02-Gray</a>
                                                </h2>
                                                <span class="pro-price">$20.11</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-5.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>

                                <div class="sidebar-carousel-item">
                                    <div class="product-small-list">
                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-1.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-2.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">MH02-Gray</a>
                                                </h2>
                                                <span class="pro-price">$20.11</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-3.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-4.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">MH02-Gray</a>
                                                </h2>
                                                <span class="pro-price">$20.11</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-5.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>

                                <div class="sidebar-carousel-item">
                                    <div class="product-small-list">
                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-1.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-2.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">MH02-Gray</a>
                                                </h2>
                                                <span class="pro-price">$20.11</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-3.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-4.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">MH02-Gray</a>
                                                </h2>
                                                <span class="pro-price">$20.11</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-pro-item d-flex">
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product-5.jpg" alt="Product"/>
                                            </a>
                                            <div class="pro-details">
                                                <h2>
                                                    <a href="single-product.html">Compete Hoodie</a>
                                                </h2>
                                                <span class="pro-price">$30.33</span>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most viewed Product End -->

                    <!-- Recent Post Start -->
                    <div class="single-home-sidebar">
                        <div class="section-title">
                            <h2>Recent Posts</h2>
                        </div>

                        <div class="sidebar-body">
                            <div class="recent-post-content">
                                <div class="sidebar-post-carousel owl-carousel">
                                    <!-- Single Recent Post Start -->
                                    <div class="single-blog-wrap">
                                        <figure class="blog-thumb">
                                            <a href="single-blog.html"><img src="assets/img/blog-thumb-1.jpg"
                                                                            alt="Blog"/></a>
                                            <figcaption class="blog-icon">
                                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-details">
                                            <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                                            <div class="post-meta">
                                                <a href="single-blog.html">20 June, 2018</a>
                                                <a href="single-blog.html">Post By: Tuntuni</a>
                                            </div>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram
                                                anteposuerit litterarum.</p>
                                        </div>
                                    </div>
                                    <!-- Single Recent Post End -->

                                    <!-- Single Recent Post Start -->
                                    <div class="single-blog-wrap">
                                        <figure class="blog-thumb">
                                            <a href="single-blog.html"><img src="assets/img/blog-thumb-1.jpg"
                                                                            alt="Blog"/></a>
                                            <figcaption class="blog-icon">
                                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-details">
                                            <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                                            <div class="post-meta">
                                                <a href="single-blog.html">20 June, 2018</a>
                                                <a href="single-blog.html">Post By: Tuntuni</a>
                                            </div>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram
                                                anteposuerit litterarum.</p>
                                        </div>
                                    </div>
                                    <!-- Single Recent Post End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Post End -->

                    <!-- Client Reviews Start -->
                    <div class="single-home-sidebar">
                        <div class="section-title">
                            <h2>Client Says</h2>
                        </div>

                        <div class="sidebar-body">
                            <div class="reviews-content">
                                <div class="reviews-carousel owl-carousel">
                                    <!-- Single Reviews Start -->
                                    <div class="single-reviews">
                                        <a href="#" class="client-thumb">
                                            <img src="assets/img/client-1.jpg" alt="Cliebt"/>
                                        </a>
                                        <a href="#" class="client-name">Stefano Colombarolli <span
                                                class="client-designation">Akamla Manager</span></a>

                                        <p class="client-quote">All Perfect !! I have three sites with magento , this
                                            theme is the best !! Excellent support , advice theme installation package ,
                                            sorry for English, are Italian but I had no problem !! Thank you !</p>
                                    </div>
                                    <!-- Single Reviews End -->

                                    <!-- Single Reviews Start -->
                                    <div class="single-reviews">
                                        <a href="#" class="client-thumb">
                                            <img src="assets/img/client-2.jpg" alt="Cliebt"/>
                                        </a>
                                        <a href="#" class="client-name">Alex Tuntuni <span class="client-designation">Product Manager</span></a>

                                        <p class="client-quote">All Perfect !! I have three sites with magento , this
                                            theme is the best !! Excellent support , advice theme installation package ,
                                            sorry for English, are Italian but I had no problem !! Thank you !</p>
                                    </div>
                                    <!-- Single Reviews End -->

                                    <!-- Single Reviews Start -->
                                    <div class="single-reviews">
                                        <a href="#" class="client-thumb">
                                            <img src="assets/img/client-3.jpg" alt="Cliebt"/>
                                        </a>
                                        <a href="#" class="client-name">Stefano Colombarolli <span
                                                class="client-designation">Akamla Manager</span></a>

                                        <p class="client-quote">All Perfect !! I have three sites with magento , this
                                            theme is the best !! Excellent support , advice theme installation package ,
                                            sorry for English, are Italian but I had no problem !! Thank you !</p>
                                    </div>
                                    <!-- Single Reviews End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Client Reviews End -->
                </div>
            </div>
            <!-- Sidebar Content End -->

            <!-- Product Content Area Wrap -->
            <div class="col-lg-9">
                <!-- Feature Product Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-content-wrap">
                            <!-- Product Tab Menu Start -->
                            <nav class="product-teb-menu">
                                <ul class="nav justify-content-center" role="tablist">
                                    <li><a class="active" href="#new-products" id="new-product-tab" data-toggle="tab">New
                                        Products</a></li>
                                    <li><a href="#sale-products" id="sale-product-tab" data-toggle="tab">OnSale</a></li>
                                    <li><a href="#feature-products" id="feature-product-tab" data-toggle="tab">Feature
                                        Products</a></li>
                                </ul>
                            </nav>
                            <!-- Product Tab Menu End -->

                            <!-- Product Tab Content Start -->
                            <div class="tab-content" id="productContent">
                                <div class="tab-pane fade show active" id="new-products" role="tabpanel">
                                    <div class="products-wrapper">
                                        <div class="product-carousel-home3 owl-carousel">
                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-1.jpg"
                                                                                       alt="Product"></a>
                                                    <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                       data-toggle="modal" data-target="#quickView"><i
                                                            class="fa fa-eye"></i></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Rival Field
                                                        Messenger</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-2.jpg"
                                                                                       alt="Product"></a>
                                                    <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                       data-toggle="modal" data-target="#quickView"><i
                                                            class="fa fa-eye"></i></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Compete
                                                        Track
                                                        Tote</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-3.jpg"
                                                                                       alt="Product"></a>
                                                    <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                       data-toggle="modal" data-target="#quickView"><i
                                                            class="fa fa-eye"></i></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Voyage Yoga
                                                        Bag</a>
                                                    </h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-4.jpg"
                                                                                       alt="Product"></a>
                                                    <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                       data-toggle="modal" data-target="#quickView"><i
                                                            class="fa fa-eye"></i></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Chaz
                                                        Kangeroo
                                                        Hoodie</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-5.jpg"
                                                                                       alt="Product"></a>
                                                    <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                       data-toggle="modal" data-target="#quickView"><i
                                                            class="fa fa-eye"></i></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Endeavor
                                                        Daytrip
                                                        Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="sale-products" role="tabpanel">
                                    <div class="products-wrapper">
                                        <div class="product-carousel-home3 owl-carousel">
                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-1.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Rival Field
                                                        Messenger</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">$20.99</span>
                                                        <del class="product-price sale">$40.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-2.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Compete
                                                        Track
                                                        Tote</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">$33.99</span>
                                                        <del class="product-price sale">$44.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-3.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Voyage Yoga
                                                        Bag</a>
                                                    </h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">77.99</span>
                                                        <del class="product-price sale">55.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-4.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Chaz
                                                        Kangeroo
                                                        Hoodie</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-5.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Endeavor
                                                        Daytrip
                                                        Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">$88.99</span>
                                                        <del class="product-price sale">$99.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="feature-products" role="tabpanel">
                                    <div class="products-wrapper">
                                        <div class="product-carousel-home3 owl-carousel">
                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-1.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Rival Field
                                                        Messenger</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">$20.99</span>
                                                        <del class="product-price sale">$40.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-2.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Compete
                                                        Track
                                                        Tote</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">$33.99</span>
                                                        <del class="product-price sale">$44.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-3.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Voyage Yoga
                                                        Bag</a>
                                                    </h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">77.99</span>
                                                        <del class="product-price sale">55.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-4.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Chaz
                                                        Kangeroo
                                                        Hoodie</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <span class="product-price">$40.99</span>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                            <!-- Single Product Start -->
                                            <div class="single-product-item">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets/img/product-5.jpg"
                                                                                       alt="Product"></a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title"><a href="single-product.html">Endeavor
                                                        Daytrip
                                                        Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="price-box d-flex">
                                                        <span class="product-price">$88.99</span>
                                                        <del class="product-price sale">$99.99</del>
                                                    </div>

                                                    <div class="product-meta">
                                                        <a href="#" class="btn btn-round btn-cart"
                                                           title="Add to Cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                        <a href="wishlist.html" class="btn btn-round btn-cart"
                                                           title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a href="compare.html" class="btn btn-round btn-cart"
                                                           title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Tab Content End -->
                        </div>
                    </div>
                </div>
                <!-- Feature Product End -->

                <!-- Category Banner Start -->
                <div class="category-banner-home3">
                    <div class="row row-5">
                        <div class="col-md-3">
                            <a href="single-product-sale.html"><img src="assets/img/banner-masonry-1.jpg" alt="Banner"/></a>
                        </div>

                        <div class="col-md-9 ">
                            <div class="row row-5">
                                <div class="col-md-8">
                                    <div class="row row-5">
                                        <div class="col-md-6 mt-10 mt-sm-0 mt-lg-0">
                                            <a href="single-product-sale.html"><img
                                                    src="assets/img/banner-masonry-2.jpg" alt="Banner"/></a>
                                        </div>
                                        <div class="col-md-6 mt-10 mt-sm-0 mt-lg-0">
                                            <a href="single-product-sale.html"><img
                                                    src="assets/img/banner-masonry-3.jpg" alt="Banner"/></a>
                                        </div>
                                    </div>

                                    <div class="row row-5">
                                        <div class="col-md-12 mt-10">
                                            <a href="single-product-sale.html"><img
                                                    src="assets/img/banner-masonry-4.jpg" alt="Banner"/></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-10 mt-sm-0 mt-lg-0">
                                    <a href="single-product-sale.html"><img src="assets/img/banner-masonry-5.jpg"
                                                                            alt="Banner"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Banner End -->

                <!-- Latest Product Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Section title Start -->
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>Latest Products</h2>
                                </div>
                            </div>
                            <!-- Section title End -->
                        </div>

                        <div class="row">
                            <!-- Latest Product Content -->
                            <div class="col-lg-12">
                                <div class="product-content-wrap">
                                    <!-- Product Tab Menu Start -->
                                    <nav class="latest-pro-tab-menu">
                                        <ul class="nav justify-content-center justify-content-lg-end" role="tablist">
                                            <li><a class="active" href="#computer-products" id="computer-products-tab"
                                                   data-toggle="tab">Computer</a></li>
                                            <li><a href="#smartphone-products" id="smartphone-products-tab"
                                                   data-toggle="tab">Smart
                                                Phone</a></li>
                                            <li><a href="#camera-products" id="camera-products-tab" data-toggle="tab">Camera</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Product Tab Menu End -->

                                    <!-- Product Tab Content Start -->
                                    <div class="tab-content" id="latestProducts">
                                        <div class="tab-pane fade show active" id="computer-products" role="tabpanel">
                                            <div class="products-wrapper">
                                                <div class="latest-product-carousel owl-carousel">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-4.jpg"
                                                                    alt="Product"></a>
                                                            <a href="#" class="btn btn-round btn-cart"
                                                               title="Quick View"
                                                               data-toggle="modal" data-target="#quickView"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Rival
                                                                Field
                                                                Messenger</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-3.jpg"
                                                                    alt="Product"></a>
                                                            <a href="#" class="btn btn-round btn-cart"
                                                               title="Quick View"
                                                               data-toggle="modal" data-target="#quickView"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Compete
                                                                Track
                                                                Tote</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-2.jpg"
                                                                    alt="Product"></a>
                                                            <a href="#" class="btn btn-round btn-cart"
                                                               title="Quick View"
                                                               data-toggle="modal" data-target="#quickView"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Voyage
                                                                Yoga
                                                                Bag</a>
                                                            </h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-1.jpg"
                                                                    alt="Product"></a>
                                                            <a href="#" class="btn btn-round btn-cart"
                                                               title="Quick View"
                                                               data-toggle="modal" data-target="#quickView"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Chaz
                                                                Kangeroo
                                                                Hoodie</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-5.jpg"
                                                                    alt="Product"></a>
                                                            <a href="#" class="btn btn-round btn-cart"
                                                               title="Quick View"
                                                               data-toggle="modal" data-target="#quickView"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Endeavor
                                                                Daytrip
                                                                Backpack</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="smartphone-products" role="tabpanel">
                                            <div class="products-wrapper">
                                                <div class="latest-product-carousel owl-carousel">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-1.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Rival
                                                                Field
                                                                Messenger</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">$20.99</span>
                                                                <del class="product-price sale">$40.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-2.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Compete
                                                                Track
                                                                Tote</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">$33.99</span>
                                                                <del class="product-price sale">$44.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-3.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Voyage
                                                                Yoga
                                                                Bag</a>
                                                            </h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">77.99</span>
                                                                <del class="product-price sale">55.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-4.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Chaz
                                                                Kangeroo
                                                                Hoodie</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-5.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Endeavor
                                                                Daytrip
                                                                Backpack</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">$88.99</span>
                                                                <del class="product-price sale">$99.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="camera-products" role="tabpanel">
                                            <div class="products-wrapper">
                                                <div class="latest-product-carousel owl-carousel">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-1.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Rival
                                                                Field
                                                                Messenger</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">$20.99</span>
                                                                <del class="product-price sale">$40.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-2.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Compete
                                                                Track
                                                                Tote</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">$33.99</span>
                                                                <del class="product-price sale">$44.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-3.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Voyage
                                                                Yoga
                                                                Bag</a>
                                                            </h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">77.99</span>
                                                                <del class="product-price sale">55.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-4.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Chaz
                                                                Kangeroo
                                                                Hoodie</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <span class="product-price">$40.99</span>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->

                                                    <!-- Single Product Start -->
                                                    <div class="single-product-item">
                                                        <figure class="product-thumb">
                                                            <a href="single-product.html"><img
                                                                    src="assets/img/product-5.jpg"
                                                                    alt="Product"></a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h2 class="product-title"><a href="single-product.html">Endeavor
                                                                Daytrip
                                                                Backpack</a></h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="price-box d-flex">
                                                                <span class="product-price">$88.99</span>
                                                                <del class="product-price sale">$99.99</del>
                                                            </div>

                                                            <div class="product-meta">
                                                                <a href="#" class="btn btn-round btn-cart"
                                                                   title="Add to Cart"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                                <a href="wishlist.html" class="btn btn-round btn-cart"
                                                                   title="Add to Wishlist"><i
                                                                        class="fa fa-heart"></i></a>
                                                                <a href="compare.html" class="btn btn-round btn-cart"
                                                                   title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Tab Content End -->
                                </div>
                            </div>
                            <!-- Latest Product Content -->
                        </div>

                        <div class="row">
                            <!-- Banner Area Start -->
                            <div class="col-lg-12">
                                <div class="banner-small">
                                    <a href="shop.html"><img src="assets/img/home2-banner.jpg" alt="Banner"></a>
                                </div>
                            </div>
                            <!-- Banner Area End -->
                        </div>
                    </div>
                </div>
                <!-- Latest Product End -->

                <!-- New Product Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Section title Start -->
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>New Products</h2>
                                </div>
                            </div>
                            <!-- Section title End -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="products-wrapper">
                                    <div class="latest-product-carousel owl-carousel">
                                        <!-- Single Product Start -->
                                        <div class="single-product-item">
                                            <figure class="product-thumb">
                                                <a href="single-product.html"><img src="assets/img/product-1.jpg"
                                                                                   alt="Product"></a>
                                                <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                   data-toggle="modal" data-target="#quickView"><i
                                                        class="fa fa-eye"></i></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title"><a href="single-product.html">Rival Field
                                                    Messenger</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="product-price">$40.99</span>

                                                <div class="product-meta">
                                                    <a href="#" class="btn btn-round btn-cart"
                                                       title="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a href="wishlist.html" class="btn btn-round btn-cart"
                                                       title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-round btn-cart"
                                                       title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-product-item">
                                            <figure class="product-thumb">
                                                <a href="single-product.html"><img src="assets/img/product-2.jpg"
                                                                                   alt="Product"></a>
                                                <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                   data-toggle="modal" data-target="#quickView"><i
                                                        class="fa fa-eye"></i></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title"><a href="single-product.html">Compete
                                                    Track
                                                    Tote</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="product-price">$40.99</span>

                                                <div class="product-meta">
                                                    <a href="#" class="btn btn-round btn-cart"
                                                       title="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a href="wishlist.html" class="btn btn-round btn-cart"
                                                       title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-round btn-cart"
                                                       title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-product-item">
                                            <figure class="product-thumb">
                                                <a href="single-product.html"><img src="assets/img/product-3.jpg"
                                                                                   alt="Product"></a>
                                                <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                   data-toggle="modal" data-target="#quickView"><i
                                                        class="fa fa-eye"></i></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title"><a href="single-product.html">Voyage Yoga
                                                    Bag</a>
                                                </h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="product-price">$40.99</span>

                                                <div class="product-meta">
                                                    <a href="#" class="btn btn-round btn-cart"
                                                       title="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a href="wishlist.html" class="btn btn-round btn-cart"
                                                       title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-round btn-cart"
                                                       title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-product-item">
                                            <figure class="product-thumb">
                                                <a href="single-product.html"><img src="assets/img/product-4.jpg"
                                                                                   alt="Product"></a>
                                                <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                   data-toggle="modal" data-target="#quickView"><i
                                                        class="fa fa-eye"></i></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title"><a href="single-product.html">Chaz
                                                    Kangeroo
                                                    Hoodie</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="product-price">$40.99</span>

                                                <div class="product-meta">
                                                    <a href="#" class="btn btn-round btn-cart"
                                                       title="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a href="wishlist.html" class="btn btn-round btn-cart"
                                                       title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-round btn-cart"
                                                       title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->

                                        <!-- Single Product Start -->
                                        <div class="single-product-item">
                                            <figure class="product-thumb">
                                                <a href="single-product.html"><img src="assets/img/product-5.jpg"
                                                                                   alt="Product"></a>
                                                <a href="#" class="btn btn-round btn-cart" title="Quick View"
                                                   data-toggle="modal" data-target="#quickView"><i
                                                        class="fa fa-eye"></i></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title"><a href="single-product.html">Endeavor
                                                    Daytrip
                                                    Backpack</a></h2>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="product-price">$40.99</span>

                                                <div class="product-meta">
                                                    <a href="#" class="btn btn-round btn-cart"
                                                       title="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a href="wishlist.html" class="btn btn-round btn-cart"
                                                       title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-round btn-cart"
                                                       title="Add to Compare"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product End -->
            </div>
            <!-- Product Content Area Wrap -->
        </div>
    </div>
</div>
<!--== End Product Content Wrapper ==-->

<!-- Start Popular Categories -->
<section id="popular-category" class="pt-20 pt-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Popular Categories</h2>
                </div>
            </div>
        </div>

        <div class="popular-cate-wrap">
            <div class="row">
                <!-- Single Popular Category -->
                <div class="col-lg-6">
                    <div class="single-popular-category">
                        <dl class="popular-cat-list">
                            <dt>Computer</dt>
                            <dd><a href="#">Laptop</a></dd>
                            <dd><a href="#">Ram/Rom</a></dd>
                            <dd><a href="#">Monitors</a></dd>
                        </dl>
                    </div>
                </div>
                <!-- Single Popular Category End -->

                <!-- Single Popular Category -->
                <div class="col-lg-6">
                    <div class="single-popular-category pop-cat-2">
                        <dl class="popular-cat-list">
                            <dt>Smart Phones</dt>
                            <dd><a href="#">Headphone</a></dd>
                            <dd><a href="#">Earphone</a></dd>
                            <dd><a href="#">Charger</a></dd>
                        </dl>
                    </div>
                </div>
                <!-- Single Popular Category End -->

                <!-- Single Popular Category -->
                <div class="col-lg-6">
                    <div class="single-popular-category pop-cat-3">
                        <dl class="popular-cat-list">
                            <dt>Camera</dt>
                            <dd><a href="#">Memory</a></dd>
                            <dd><a href="#">Flash</a></dd>
                            <dd><a href="#">Lens</a></dd>
                        </dl>
                    </div>
                </div>
                <!-- Single Popular Category End -->

                <!-- Single Popular Category -->
                <div class="col-lg-6">
                    <div class="single-popular-category pop-cat-4">
                        <dl class="popular-cat-list">
                            <dt>Desktop</dt>
                            <dd><a href="#">Keyboard</a></dd>
                            <dd><a href="#">Speaker</a></dd>
                            <dd><a href="#">Ram</a></dd>
                        </dl>
                    </div>
                </div>
                <!-- Single Popular Category End -->
            </div>
        </div>
    </div>
</section>
<!-- End Popular Categories -->

<!--== Start Brand Carousel Area ==-->
<div class="brand-logo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo-carousel owl-carousel">
                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/img/logo-1.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/img/logo-2.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/img/logo-3.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/img/logo-4.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/img/logo-5.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->

                    <!-- Single Brand Logo Start -->
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/img/logo-6.png" alt="brand"></a>
                    </div>
                    <!-- Single Brand Logo End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Carousel Area ==-->

<!--== Start Call To Action ==-->
<section id="call-to-action" class="callto-action-two">
    <div class="container">
        <div class="call-to-action-content">
            <div class="row">
                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>Free Shipping</h4>
                            <p>on order over $100</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->

                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-support"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>24/7 Support</h4>
                            <p>Online consultations</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->

                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>Daily updates</h4>
                            <p>Check out store</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->

                <!-- Single Call to Action Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-action-item d-flex align-items-center">
                        <div class="call-action-icon">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="call-action-info">
                            <h4>30-day Returns</h4>
                            <p>oneyback guarantee</p>
                        </div>
                    </div>
                </div>
                <!-- Single Call to Action End -->
            </div>
        </div>
    </div>
</section>
<!--== End Call To Action ==-->


<?php
include 'footer.php';
?>