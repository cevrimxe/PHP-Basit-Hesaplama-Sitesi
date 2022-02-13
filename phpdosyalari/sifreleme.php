<?php include 'top.php';

function metinsifrele(){

if(isset($_POST['sifrele'])){
    $sifrelenecekmetin=isset($_POST['metin']) ? $_POST['metin'] : null;
    $sifrelemeturu=isset($_POST['tür']) ? $_POST['tür'] : null;
    if ($sifrelenecekmetin!=null) {
      if ($sifrelemeturu!=null) {
        switch ($sifrelemeturu) {
          case 'md5':
            echo 'Girdiğiniz metnin md5 karşılığı: '.md5($sifrelenecekmetin);
            break;
          case 'crc32':
            echo 'Girdiğiniz metnin crc32 karşılığı: '.crc32($sifrelenecekmetin);
            break;
          case 'sha1':
            echo 'Girdiğiniz metnin sha1 karşılığı: '.sha1($sifrelenecekmetin);
            break;
          case 'base64':
            echo 'Girdiğiniz metnin base64 karşılığı: '.base64_encode($sifrelenecekmetin);
            break;
          default:
            echo "Şifreleme türü seçiniz...";
            break;
        }
      }

    }
    else {
      echo "Metin girmediniz...";
    }
}}



 ?>


<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cevrim.css">
    <title>Hesapla | Crypt</title>
  </head>
  <body>

        <div class="selam">
            <h1>Şifrelemek istediğiniz metni giriniz.</h1>
            <form action="#" method="post">
                <div class="user" >
                    <input type="text" name="metin" id="metin" placeholder="Metin">
                </div>
                <select id="typeselect" class="crypt" name="tür">
                    <option value="Şifreleme türü seçiniz.">Şifreleme türü seçiniz.</option>
                    <option value="md5">md5</option>
                    <option value="crc32">crc32</option>
                    <option value="sha1">sha1</option>
                    <option value="base64">base64</option>

                </select>
                <button type="submit" class="crypt" id="sifrele" name="sifrele">Şifrele</button>


            </form>
        </div>
        <h1>
<?php metinsifrele(); ?>

        </h1>





  </body>
</html>
