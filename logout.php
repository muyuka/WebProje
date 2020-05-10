<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   ?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
   <title>Başarılı.Yönlendiriliyorsunuz...</title>
</head>
<body>

<section class="iletisimSonuc"> 
    <div class="text-center">        
         <h2>HOŞGELDİNİZ B181210009. GİRİŞ İŞLEMİNİZ BAŞARILI.</h2><br>
         <h2>ANASAYFAYA YÖNLENDİRİLİYORSUNUZ...</h2>               
      </div>
</section>

</body>
</html>

<?php
   header('Refresh: 5; URL = index.html');
?>