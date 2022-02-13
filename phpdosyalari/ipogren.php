<?php

include 'top.php';

 ?>

<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cevrim.css">
    <title>Hesapla | IP Öğren</title>
  </head>
  <body>
        <div class="Giris">
            <h1>IP adresini öğren</h1>
            <div class="dispdiv" id="ipogren">
              <h1 id="iptext">
<?php
echo "IP adresiniz: ".$_SERVER['REMOTE_ADDR'];
 ?>
              </h1>
            </div>
        </div>





  </body>
</html>
