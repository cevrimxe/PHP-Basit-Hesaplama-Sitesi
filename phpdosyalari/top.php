<?php

ob_start();
session_start();
include 'baglan.php';

  $güvenlik=$pdo->prepare("SELECT * FROM personel WHERE kullaniciadi=:kullaniciadi");
  $güvenlik->execute(['kullaniciadi'=> $_SESSION['userkullaniciadi']]);

  $say=$güvenlik->rowCount();
  $al=$güvenlik->fetch(PDO::FETCH_ASSOC);

  if ($say==0) {
    header('location:index.php?izinsizgirişdenemesi');
    exit;
  }

?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cevrim.css">
  </head>
  <body>
    <div class="top">
      <a href="anasayfa.php"> <h1>Hesapla</h1> </a>
        <div class="menu">
          <a href="iletisim.php"> <h4>İletişim</h4> </a>

        </div>
    </div>

<a href="cikisyap.php">
  <div class="exit">
<?php echo $al['kullaniciadi'];
echo "  -  ";
?>
  Çıkış Yap
</div>
</a>

  </body>
</html>
