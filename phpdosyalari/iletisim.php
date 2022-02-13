<?php
include 'top.php';

$iletisim = array(

 "Ahmet Çevrim"=>array("mail"=> "ahmet.cevrim@bilgiedu.net","telefon"=> "5380684936","twitter" => "https://twitter.com/cevrimxe" ),

 "James Hetfield"=>array("mail"=> "purplecevrim@gmail.com","telefon"=> "5380684937","twitter" => "https://twitter.com/papahetfield81" )

);


 ?>


 <!DOCTYPE html>
 <html lang="tr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Hesapla | İletişim</title>
   </head>
   <body>
     <div class="iletisimdiv">
      <h1> <?php
      echo "Ahmet Çevrim Mail: ".$iletisim["Ahmet Çevrim"]["mail"]."<br>"."<br>";
      echo "Ahmet Çevrim Telefon: ".$iletisim["Ahmet Çevrim"]["telefon"]."<br>"."<br>";
      echo "Ahmet Çevrim Twitter: ".$iletisim["Ahmet Çevrim"]["twitter"]."<br>"."<br>";
      echo "James Hetfield Mail: ".$iletisim["James Hetfield"]["mail"]."<br>"."<br>";
      echo "James Hetfield Telefon: ".$iletisim["James Hetfield"]["telefon"]."<br>"."<br>";
      echo "James Hetfield Twitter: ".$iletisim["James Hetfield"]["twitter"]."<br>"."<br>";
        ?></h1>
     </div>
   </body>
 </html>
