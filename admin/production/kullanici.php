<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$usersor=$db->prepare("SELECT * FROM users");
$usersor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kullanıcı Listeleme <small>,

              <?php 

              if (isset($_GET['durum']) && ($_GET['durum'] == "ok")) {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (isset($_GET['durum']) && ($_GET['durum'] == "no")) {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


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


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>username</th>
                  <th>email</th>
                  <th>name</th>
                  <th>surname</th>
                  <th>created_at</th>
                  <th>updated_at</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $usercek['username'] ?></td>
                  <td><?php echo $usercek['email'] ?></td>
                  <td><?php echo $usercek['name'] ?></td>
                  <td><?php echo $usercek['surname'] ?></td>
                  <td><?php echo $usercek['created_at'] ?></td>
                  <td><?php echo $usercek['updated_at'] ?></td>
                  <td><center><a href="kullanici-islemleri.php?id=<?php echo $usercek['id'];?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                  <td><center><a href="../netting/islem.php?id=<?php echo $usercek['id'];?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>



                <?php  }

                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
