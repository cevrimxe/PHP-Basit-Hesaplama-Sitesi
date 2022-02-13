<?php

try {
  $sunucuadi="localhost";
  $kullaniciadi="root";
  $sifre="";
  $dns='mysql:host=localhost;dbname=kullanici';
  $pdo=new PDO($dns,$kullaniciadi,$sifre);
  $pdo->exec('SET CHARSET UTF8');

} catch (\Exception $e) {
echo $e->getMessage();
}




 ?>
