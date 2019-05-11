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
    


?>