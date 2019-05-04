<?php
include 'header.php';


$hakkimizdasor=$db->prepare("SELECT * FROM about WHERE hakkimizda_id=:id ");
$hakkimizdasor->execute(array(
    'id'=>1
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>


<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="hakkimizda.php" class="active">Hakkımızda</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Breadcrumb ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper">
    <div class="container">
        <!-- About Page Content Start -->
        <div class="row">
            <!-- About Text Start -->
            <div class="col-lg-6 order-last order-lg-first">
                <div class="about-text-wrap">
                    <h2><span><?php echo $hakkimizdacek['hakkimizda_baslik'];?></span></h2>
                    <p><?php echo $hakkimizdacek['hakkimizda_icerik'];?></p>
                    <div class="title-bg">
                        <div class = "title">Misyon </div>
                    </div>
                    <blockquote><?php echo $hakkimizdacek['hakkimizda_misyon'];?></blockquote>

                    <div class="title-bg">
                        <div class = "title">Vizyon </div>
                    </div>
                    <blockquote><?php echo $hakkimizdacek['hakkimizda_vizyon'];?></blockquote>
                    

                    
                </div>
            </div>
            <!-- About Text End -->

            <!-- About video Start -->
            <div class="title-bg">
                <div class = "title">Tanıtım Videosu </div>
                <iframe width = "400" height="400" src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video'];?>" frameborder="0"></iframe>
            </div> 
            
            <!-- About video End -->
        </div>
        <!-- About Page Content End -->
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Start Sale Feature Products -->
<div class="category-banner-area deal-products p-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="shop.html"><img src="assets/img/home4-deal-product-1.jpg" alt="Banner"></a>
            </div>

            <div class="col-md-4 mt-xs-30">
                <a href="shop.html"><img src="assets/img/home4-deal-product-2.jpg" alt="Banner"></a>
            </div>

            <div class="col-md-4 mt-xs-30">
                <a href="shop.html"><img src="assets/img/home4-deal-product-3.jpg" alt="Banner"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Sale Feature Products -->

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