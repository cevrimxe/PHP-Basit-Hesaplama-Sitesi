<?php

include 'top.php';

class arac
{
  public $aracyas;
  public $arachacim;
  public function __construct($aracyas,$arachacim)
  {
    $this->aracyas=$aracyas;
    $this->arachacim=$arachacim;
  }

}

$katsayi=12;
class otomobil extends arac
{
  public function __construct($aracyas,$arachacim)
  {
    parent::__construct($aracyas,$arachacim);
  }
  public function hesapla()
  {
    return ($this->arachacim)*($GLOBALS['katsayi'])/($this->aracyas);
  }
  public function display()
  {
    echo "Otomobilinizin vergisi: ".$this->hesapla()." TL";
  }
}

class motorsiklet extends arac
{
  public $katsayi=3;
  public function __construct($aracyas,$arachacim)
  {
    parent::__construct($aracyas,$arachacim);
  }
  public function hesapla()
  {
    return ($this->arachacim)*($this->katsayi)/($this->aracyas);
  }
  public function display()
  {
    echo "Motosikletinizin vergisi: ".$this->hesapla()." TL";
  }
}





 ?>

 <!DOCTYPE html>
 <html lang="tr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Hesapla | Araç Vergi</title>
   </head>
   <body>
     <div class="Giris">
         <h1>Araç Vergi Hesaplama</h1>
         <form action="#" method="post">
             <div class="arac1">
                 <input type="number" name="arachacim" placeholder="Araç Hacmi">
             </div>
             <div class="arac2">
                 <input type="number" name="aracyas" placeholder="Araç Yaşı">
             </div>
             <select class="aractur" name="aractur" id="aracselect">
               <option value="Araç Türü Seçiniz...">Araç Türü Seçiniz...</option>
               <option value="Araba">Araba</option>
               <option value="Motosiklet">Motosiklet</option>
             </select>
             <button type="submit" class="sub" id="login" name="aracvergihesapla">Hesapla</button>
             <br>
             <p id="vergiyazi"> <?php
              if(isset($_POST['aracvergihesapla'])){
                  $arachacim=isset($_POST['arachacim']) ? $_POST['arachacim'] : null;
                  $aracyas=isset($_POST['aracyas']) ? $_POST['aracyas'] : null;
                  $aractur=isset($_POST['aractur']) ? $_POST['aractur'] : null;

                  if ($arachacim!=null && $aracyas!=null) {
                      switch ($aractur) {
                        case 'Araba':
                             $araba=new otomobil($aracyas,$arachacim);
                             $araba->display();
                          break;
                        case 'Motosiklet':
                             $motor=new motorsiklet($aracyas,$arachacim);
                             $motor->display();
                          break;
                        default:
                             echo "Lütfen araç türünü seçiniz.";
                          break;
                      }
                  }
                  else {
                    echo "Araç hacmi veya araç yaşı boş olamaz...";
                  }
              }
               ?></p>
         </form>

     </div>

   </body>
 </html>
