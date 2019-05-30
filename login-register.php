<?php 

include 'header.php';

?>

<!--== Start Page Breadcrumb ==-->
<div class="page-breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop.html" class="active">Member Area</a></li>
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
        <div class="member-area-from-wrap">
            <div class="row">
                <!-- Login Content Start -->
                <div class="col-lg-5">
                    <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>GİRİŞ YAP</h2>

                        <form action="#" method="post">
                            <div class="single-input-item">
                                <input type="text" placeholder="Username" required />
                            </div>

                            <div class="single-input-item">
                                <input type="password" placeholder="Enter your Password" required />
                            </div>

                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Beni Hatırla</label>
                                        </div>
                                    </div>

                                    <a href="#" class="forget-pwd">Paroloyı Unuttum</a>
                                </div>
                            </div>

                            <div class="single-input-item">
                              <a href="index.php"><button class="btn">GİRİŞ YAP</button></a>  
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login Content End -->

                <!-- Register Content Start -->
                <div class="col-lg-7 mt-30 mt-lg-0">
                    <div class="login-reg-form-wrap">
                        <h2>KAYIT OL</h2>
                        <form action="admin/netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     <!--   <form action="../admin/netting/islem.php" method="POST"> -->
                            <!-- şifre kontrol-->
                                 <?php 

                                if (isset($_GET['durum']) && $_GET['durum']=="farklisifre") {?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
                                </div>
                                    
                                <?php } elseif (isset($_GET['durum']) && $_GET['durum']=="eksiksifre") {?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                                </div>
                                    
                                <?php } elseif (isset($_GET['durum']) && $_GET['durum']=="mukerrerkayit") {?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
                                </div>
                                    
                                <?php } elseif (isset($_GET['durum']) && $_GET['durum']=="basarisiz") {?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
                                </div>
                                    
                                <?php }
                                ?>
                     
                            <div class="single-input-item">
                                <input type="text" name="username" placeholder="username" required />
                            </div>

                            <div class="single-input-item">
                                <input type="email" name="email" placeholder="email" required />
                            </div>

                      

                            <div class="single-input-item">
                                <input type="text" name="name" placeholder="name" required />
                            </div>
                            
                            <div class="single-input-item">
                                <input type="text" name="surname" placeholder="surname" required />
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="password" name="passwordone" placeholder="Enter your Password" required />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="password" name="passwordtwo" placeholder="Repeat your Password" required />
                                    </div>
                                </div>
                            </div>

                            
                            <div class="single-input-item">
                              <button type="submit" name="registerkaydet" class="btn">KAYIT OL</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register Content End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!--== Start Footer Area ==-->
<?php

include 'footer.php';

?>