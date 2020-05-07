<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhsin ÇELİK</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="javascript/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/stil2.css">
</head>

<body background="görseller/arkaplan.jpg">



<div class="container" id="menu">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" id="hakkimda" href="hakkimda.html">Hakkımda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="ozgecmis" href="ozgecmis.html">Özgeçmiş</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sehrim" href="sehrim.html">Şehrim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mirasimiz" href="mirasimiz.html">Mirasımız</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Giriş yap</a>
          </li>
        </ul>
      </div>
      <br><br>
      
<?php
echo "Ad: "; echo $_POST['Ad']; echo('<br>');
echo "Soyad: "; echo $_POST['Soyad']; echo('<br>');
echo "E-mail: "; echo $_POST['E-mail']; echo('<br>');
echo "Adres: "; echo $_POST['Adres']; echo('<br>');
echo "İl: "; echo $_POST['Il']; echo('<br>');
echo "Cinsiyet: "; echo $_POST['Cinsiyet']; echo('<br>');
echo "Öğrenim Durumu: "; echo $_POST['Ogrenim']; echo('<br>');
echo "Seçimler: "; echo $_POST['Kosul']; echo('<br>');
?>