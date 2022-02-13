<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cevrim.css">
    <title>Hesapla | Giriş</title>
  </head>
  <body>
    <header>
      <h2>Hesapla</h2>
    </header>
        <div class="Giris">
            <h1>Giriş Yap</h1>
            <form action="dbhelper.php" method="post">
                <div class="user">
                    <input type="text" name="uyekad" placeholder="Kullanıcı Adı">
                </div>
                <div class="sifre">
                    <input type="password" name="uyepw" placeholder="Şifre">
                </div>
                <button type="submit" class="sub" id="login" name="giris_yap">Giriş Yap</button>
                <br>
            </form>
            <a href="uyeol.php"> <button type="submit" class="sub" id="signup">Üye Ol</button> </a>
        </div>





  </body>
</html>
