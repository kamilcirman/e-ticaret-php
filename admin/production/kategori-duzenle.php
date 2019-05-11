<?php
include 'header.php';

$kategorisor=$db->prepare("SELECT * FROM categories  WHERE id=:id");
$kategorisor->execute(array(
  'id' =>$_GET['id']

));

$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori düzenle <small>
                    
                    <?php

                     if (isset($_GET['durum']) && ($_GET['durum'] == "ok")) {
                    ?>
                      <b style="color:green;">İşlem Başarılı...</b>                      
                      <?php
                       } elseif (isset($_GET['durum']) && ($_GET['durum'] == "no")) { ?>

                     
                      <b style="color:red;">İşlem Başarısız...</b>                      
                      <?php } ?>

                
                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Adı <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="category_name" value="<?php echo $kategoricek['category_name']?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Url <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="category_slug" value="<?php echo $kategoricek['category_slug']?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Oluşturulma Tarihi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="created_at" value="<?php echo $kategoricek['created_at']?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Güncelleme Tarihi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="updated_at" value="<?php echo $kategoricek['updated_at']?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="durum" value="<?php echo $kategoricek['durum']?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?php echo $kategoricek['id'] ?>">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align ="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="kategoriduzenle" class="btn btn-success">Düzenle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
            
<?php
include 'footer.php';
?>