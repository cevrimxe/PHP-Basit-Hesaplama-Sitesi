<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cevrim.css">
    <title>Hesapla | Üye Ol</title>
  </head>
  <body>
    <header>
      <h2>Hesapla</h2>
    </header>
        <div class="Uyeol">
            <h1>Üye Ol</h1>
            <form action="dbhelper.php" method="post">
                <div class="user">
                    <input type="text" name="uyekad" placeholder="Kullanıcı Adı">
                </div>
                <div class="mail">
                    <input type="text" name="uyemail" placeholder="Mail Adresi">
                </div>
                <div class="sifre">
                    <input type="password" name="uyepw" placeholder="Şifre giriniz">
                </div>
                <button type="submit" class="sub" id="signup" name="kaydet">Üye Ol</button>
                <br>
            </form>
            <a href="index.php"> <button type="submit" class="sub" id="signup">Giriş Ekranına Dön</button> </a>
</div>



  </body>
</html>
