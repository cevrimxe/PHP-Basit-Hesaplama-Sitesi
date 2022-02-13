<?php

ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['kaydet'])){
    $kullaniciadi=isset($_POST['uyekad']) ? $_POST['uyekad'] : null;
    $kullanicimail=isset($_POST['uyemail']) ? $_POST['uyemail'] : null;
    $kullanicisifre=isset($_POST['uyepw']) ? $_POST['uyepw'] : null;
    $md5sifre=md5($kullanicisifre);
    $kayit=$pdo->prepare("INSERT INTO personel (kullaniciadi,mail,sifre)VALUES (?,?,?)");

    $add=$kayit->execute(array($kullaniciadi,$kullanicimail,$md5sifre));

    if($add){
      header('location:index.php?durum=basarili');
    }
    else {
      $hata=$kayit->errorInfo();
      echo 'mysql hatası'.$hata;
    }
}

if(isset($_POST['giris_yap'])){
  $kullaniciadi=$_POST['uyekad'];
  $kullanicisifre=$_POST['uyepw'];
  $sifremd5=md5($kullanicisifre);

  $secme=$pdo->prepare("SELECT * FROM personel WHERE kullaniciadi=:kullaniciadi and sifre=:sifre");
  $secme->execute(['kullaniciadi'=> $kullaniciadi, 'sifre' => $sifremd5]);

  $say=$secme-> rowCount();
  if($say==1){
    $_SESSION['userkullaniciadi']=$kullaniciadi;
    header('location:anasayfa.php?durum=girisbasarili');
    exit;
  }
  else {
    header('location:index.php?durum=basarisizgiris');
    exit;
  }

}


 ?>
