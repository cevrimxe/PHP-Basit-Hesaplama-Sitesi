<?php

include 'top.php';

/**
 *
 */
class Cevrimcalc
{
  public STATIC $vizekatsayi=0.4;
  public STATIC $finalkatsayi=0.6;


  public STATIC function ortalamahesapla($vizenotu,$finalnotu){
    echo (($vizenotu*self::$vizekatsayi)+($finalnotu*self::$finalkatsayi));
  }
}






 ?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hesapla | Ders Ortalama</title>
  </head>
  <body>
    <div class="Giris">
        <h1>Ders Ortalama Hesaplama</h1><br>
        <form action="#" method="post">
            <div class="arac1">
                <input type="number" name="vizenotu" placeholder="Vize Notu">
            </div>
            <div class="arac2">
                <input type="number" name="finalnotu" placeholder="Final Notu">
            </div>
            <button type="submit" class="sub" id="login" name="dersortalamahesapla">Hesapla</button>
            <br>
            <p id="vergiyazi"> <?php
             if(isset($_POST['dersortalamahesapla'])){
                 $vizenotu=isset($_POST['vizenotu']) ? $_POST['vizenotu'] : null;
                 $finalnotu=isset($_POST['finalnotu']) ? $_POST['finalnotu'] : null;


                 if ($vizenotu!=null && $finalnotu!=null) {
                   if($vizenotu>100 || $finalnotu>100){
                     echo "Vize notu veya final notu 100'den büyük olamaz...";
                   }
                   else {
                     Cevrimcalc::ortalamahesapla($vizenotu,$finalnotu);
                   }
                 }
                 else {
                   echo "Vize notu veya final notu boş olamaz...";
                 }
             }
              ?></p>
              <h5>Vize sınavı %40, final sınavı %60 oranlı hesaplanır.</h5>
        </form>

    </div>
  </body>
</html>
