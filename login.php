<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user =="b191210300" && $pass =="123"){
        header("Location: merhaba.php");
    }
    
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhsin ÇELİK</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="javascript/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <div class="loginbox">
    <img src="görseller/avatar.png" class="avatar">
        <h1>Üye Girişi</h1>
        <form action ="" method="post">
            <p>Kullanıcı Adı</p>
            <input type="text" name="username" placeholder="Kullanıcı Adı">
            <p>Parola</p>
            <input type="password" name="password" placeholder="Parola">
            <input type="submit" name="submit" value="Giriş">
            <a href="#">Parolamı unuttum</a><br>
            <a href="#">Hesap oluştur</a>
        </form>
        
    </div>

</body>
</head>
</html>