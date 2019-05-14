<?php
ob_start();
session_start();


include 'baglan.php';
include '../production/fonksiyon.php';

//admin giriş
if(isset($_POST['admingiris'])){
$kullanici_username = $_POST['username'];
$kullanici_password = md5($_POST['password']);
$kullanicisor=$db->prepare("SELECT * FROM users WHERE username=:username and password=:password ");

$kullanicisor->execute(array(
    'username'=> $kullanici_username ,
    'password' => $kullanici_password,
));
    $say = $kullanicisor -> rowCount();

   if ($say==1) {
       $_SESSION['username']=$kullanici_username;
        header("Location:../production/index.php");
        exit;
   }else{
       header("Location:../production/login.php?durum=no");
        exit;
   }
}





//adres ayarları
if(isset($_POST['adreskaydet'])){
    //adres güncelleme
$adreskaydet=$db->prepare("UPDATE addresses SET
    address = :address,
    created_at = :created_at,
    updated_at = :updated_at
    WHERE user_id = 1 ");
$update=$adreskaydet->execute(array(
    'address' => $_POST['address'],
    'created_at'=> $_POST['created_at'],
    'updated_at'=> $_POST['updated_at']
));
if($update){
    header("Location:../production/iletisim_ayarlar.php?durum=ok");
}else{
    header("Location:../production/iletisim_ayarlar.php?durum=no");
}
}

//hakkımızda ayarlar

if(isset($_POST['hakkimizdakaydet'])){
    //hakkımızda güncelleme
$hakkimizdakaydet=$db->prepare("UPDATE about SET
    hakkimizda_baslik = :hakkimizda_baslik,
    hakkimizda_icerik = :hakkimizda_icerik,
    hakkimizda_video = :hakkimizda_video,
    hakkimizda_vizyon = :hakkimizda_vizyon,
    hakkimizda_misyon = :hakkimizda_misyon

    WHERE hakkimizda_id =1");
$update=$hakkimizdakaydet->execute(array(
    'hakkimizda_baslik'=> $_POST['hakkimizda_baslik'],
    'hakkimizda_icerik'=> $_POST['hakkimizda_icerik'],
    'hakkimizda_video'=> $_POST['hakkimizda_video'],
    'hakkimizda_vizyon'=> $_POST['hakkimizda_vizyon'],
    'hakkimizda_misyon'=> $_POST['hakkimizda_misyon']

));
if($update){
    header("Location:../production/hakkimizda.php?durum=ok");
}else{
    header("Location:../production/hakkimizda.php?durum=no");
}
}














 //kullanıcı güncelleme
 if(isset($_POST['kullaniciguncelle'])){
   
    $userkaydet=$db->prepare("UPDATE users SET
        username = :username,
        email = :email,
        password =:password,
        name = :name,
        surname = :surname,
        created_at = :created_at,
        updated_at = :updated_at
        WHERE id =  {$_POST['id']} ");
    $update=$userkaydet->execute(array(
        'username'=> $_POST['username'],
        'email'=> $_POST['email'],
        'password'=>$_POST['password'],
        'name'=> $_POST['name'],
        'surname'=> $_POST['surname'],
        'created_at'=> $_POST['created_at'],
        'updated_at'=> $_POST['updated_at']
    ));
    if($update){
        header("Location:../production/kullanici-duzenle.php?durum=ok");
    }else{
        header("Location:../production/kullanici-duzenle.php?durum=no");
    }
    }
//kullanıcı sil

if($_GET['kullanicisil']=="ok"){
$sil=$db->prepare("DELETE from users where id= :id");
$kontrol=$sil->execute(array(

    'id'=>$_GET['id']
));
if ($kontrol) {
    header("location:../production/kullanici.php?sil=ok");
}
if ($kontrol) {
    header("location:../production/kullanici.php?sil=no");
}
}












// kategori düzenle

if(isset($_POST['kategoriduzenle'])){
    $id=$_POST['id'];
    $categori_slug = seo($_POST['id']);

    //kategori güncelleme
$kategorikaydet=$db->prepare("UPDATE categories SET
    category_name = :category_name,
    category_slug = :category_slug,

    created_at = :created_at,
    updated_at = :updated_at,
    durum = :durum

    WHERE id = {$_POST['id']} ");
$update=$kategorikaydet->execute(array(
    'category_name'=> $_POST['category_name'],
    'category_slug'=> $_POST['category_slug'],
   
    'created_at'=> $_POST['created_at'],
    'updated_at'=> $_POST['updated_at'],
    'durum'=> $_POST['durum']
));
if($update){
    header("Location:../production/kategori.php?durum=ok");
}else{
    header("Location:../production/kategori-duzenle.php?durum=no");
}
}
//kategori silme

if($_GET['kategorisil']=="ok"){
    $sil=$db->prepare("DELETE from categories where id= :id");
    $kontrol=$sil->execute(array(
    
        'id'=>$_GET['id']
    ));
    if ($kontrol) {
        header("location:../production/kategori.php?sil=ok");
    }
    if ($kontrol) {
        header("location:../production/kategori.php?sil=no");
    }
    }
    //kategori ekle
    if (isset($_POST['kategoriekle'])) {
        $ekle=$db->prepare("INSERT INTO categories SET
        category_name = :category_name,
        category_slug = :category_slug,
      
        created_at = :created_at,
        updated_at = :updated_at,
        durum = :durum
        ");
        $insert=$ekle->execute(array(
        'category_name'=>$_POST['category_name'],
        'category_slug'=>$_POST['category_slug'],
      
        'created_at'=>$_POST['created_at'],
        'updated_at'=>$_POST['updated_at'],
        'durum'=>$_POST['durum']
        ));
    if ($insert) {
        header("Location:../production/kategori.php?durum=ok");
    }else{
        header("Location:../production/kategori-ekle.php?durum=no");
    }
    }



















//slider ekle


if (isset($_POST['sliderekle'])) {


	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_resim']["tmp_name"];
	@$name = $_FILES['slider_resim']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_name=:slider_name,
		slider_yol=:slider_yol,
		slider_sira=:slider_sira,
        slider_link=:slider_link,
		slider_resim=:slider_resim
		");
	$insert=$kaydet->execute(array(
		'slider_name' => $_POST['slider_name'],
		'slider_yol' => $_POST['slider_yol'],
        'slider_sira' => $_POST['slider_sira'],
        'slider_link' => $_POST['slider_link'],
		'slider_resim' => $refimgyol
		));

	if ($insert) {

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}
    }

    //slider düzenle
    if(isset($_POST['sliderduzenle'])){
    
    
    $sliderkaydet=$db->prepare("UPDATE slider SET
        slider_name = :slider_name,
        slider_yol = :slider_yol,
        slider_sira = :slider_sira,
        slider_link = :slider_link,
        slider_resim = :slider_resim
    WHERE id = $_POST[id]");

    $update=$sliderkaydet->execute(array(
        'slider_name'=> $_POST['slider_name'],
        'slider_yol'=> $_POST['slider_yol'],
        'slider_sira'=> $_POST['slider_sira'],
        'slider_link'=> $_POST['slider_link'],
        'slider_resim'=> $_POST['slider_resim']

    ));
    if($update){
        header("Location:../production/slider.php?durum=ok");
    }else{
        header("Location:../production/slider-duzenle.php?durum=no");
    }
    }
//slider sil
if($_GET['slidersil']=="ok"){
    $sil=$db->prepare("DELETE from slider where id=:id");
    $kontrol=$sil->execute(array(
    
        'id'=>$_GET['id']
    ));
    if ($kontrol) {
        header("location:../production/slider.php?sil=ok");
    }
    if ($kontrol) {
        header("location:../production/slider.php?sil=no");
    }
    }

?>