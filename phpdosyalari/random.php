<?php

include 'top.php';





 ?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cevrim.css">
    <title>Hesapla | Random Sayı</title>
  </head>
  <body>
        <div class="Giris">
            <h1>Random Sayı Üretici</h1>
            <form action="#" method="post">
                <div class="random_baslangic">
                    <input type="number" name="random_baslangic" placeholder="başlangıç değeri">
                </div>
                <h2>-</h2>
                <div class="random_bitis">
                    <input type="number" name="random_bitis" placeholder="bitiş değeri">
                </div>
                <button type="submit" class="sub" id="randomnum" name="randomnum">Random numara ver</button>
                <br>
            </form>

            <div class="dispdiv">
              <h1>
<?php
if(isset($_POST['randomnum'])){
    $randombaslangicdegeri=isset($_POST['random_baslangic']) ? $_POST['random_baslangic'] : null;
    $randombitisdegeri=isset($_POST['random_bitis']) ? $_POST['random_bitis'] : null;

    if ($randombaslangicdegeri!=null && $randombitisdegeri!=null) {
      if ($randombitisdegeri<$randombaslangicdegeri) {
        echo "Bitiş değeri başlangıç değerinden küçük olamaz.";
      }
      else {
        $dispdegeri=mt_rand($randombaslangicdegeri,$randombitisdegeri);
        echo $dispdegeri;
      }
    }
    else {
      echo "Başlangıç değeri veya bitiş değeri boş olamaz.";
    }
}
 ?>
              </h1>
            </div>
        </div>





  </body>
</html>
