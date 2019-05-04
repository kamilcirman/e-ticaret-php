<?php
include 'baglan.php';
if(isset($_POST['kullanıcıkaydet'])){
    //kullanıcı güncelleme
$userkaydet=$db->prepare("UPDATE users SET
    username = :username,
    email = :email,
    password =:password,
    name = :name,
    surname = :surname,
    created_at = :created_at,
    updated_at = :updated_at
    WHERE id =  1 ");
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
    header("Location:../production/kullanıcı_islemleri.php?durum=ok");
}else{
    header("Location:../production/kullanıcı_islemleri.php?durum=no");
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


?>