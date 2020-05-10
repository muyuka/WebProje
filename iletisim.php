
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Yusuf Karadeniz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>
<body>
<nav class = "navbar navbar-dark bg-dark navbar-expand-lg text-white fixed-top">
        <div class = "container py-1">
            <a href="index.html" class = "navbar-brand">Muyuka</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-Muyuka" aria-controls="navbar-Muyuka">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class ="collapse navbar-collapse" id="navbar-Muyuka">
                <ul class = "navbar-nav ml-auto">
                    <li class = "nav-item px-2"> 
                        <a href ="index.html" class ="nav-link" target="_self">Hakkımda</a>
                    </li>
                    <li class = "nav-item px-2"> 
                        <a href ="takimim.html" class ="nav-link">Mirasımız</a>
                    </li>
                    <li class = "nav-item dropdown px-2"> 
                      <a class="nav-link dropdown-toggle" href="sehrim.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Şehrim
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sehrim.html">İstanbul</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="topkapisarayi.html">Topkapı Sarayı</a>
                        <a class="dropdown-item" href="kizkulesi.html">Kız Kulesi</a>
                        <a class="dropdown-item" href="yerebatansarnici.html">Yere Batan Sarnıcı</a>
                        <a class="dropdown-item" href="galatakulesi.html">Galata Kulesi</a>
                      </div>                      
                    </li>
                    <li class = "nav-item px-2"> 
                        <a href ="özgecmis.html" class ="nav-link">ÖzGeçmişim</a>
                    </li>
                    <li class = "nav-item pl-2"> 
                        <a href ="iletisim.html" class ="nav-link">İletişim</a>
                    </li>
                    <li class = "nav-item pl-2"> 
                        <a href ="login.html" class ="nav-link">Login</a>
                    </li>
                </ul>

            </div>
        </div>
</nav>
        
<section class="iletisimSonuc">            
    <div class="text-center">        
        <p class="display-3">BİZİMLE TEMESA GEÇTİĞİNİZ ÇİN TEŞEKKÜRLER...</p><br><br>
    <div>
        
        <?php      
            echo "AD - SOYAD :"  . " " . $_POST['ad-soyad'] . "<br>";
            echo "E-POSTA :" . " " . $_POST['email'] . "<br>";
            echo "DOĞUM TARİHİ :" . " " . $_POST['tarih'] . "<br>";
            echo "TELEFON :" . " " . $_POST['telefon'] . "<br>";
            echo "ŞEHİR :" . " " . $_POST['sehir'] . "<br>";
            echo "KİMSİNİZ :" . " " . $_POST['mesaj'] . "<br>";
        ?>
        </div>
            
        </div>
</section>

<footer class="bg-dark text-center">
    <div class="container">
      <div class="row pt-5 mb-3"></div>
      
      <div class="">
        <a href="https://www.facebook.com/yusuf.karadeniz.182" class="fb-ic" target="_blank">
          <i class="fab fa-facebook text-white mr-4"> </i>
        </a>
        <a class="tw-ic" href="https://twitter.com/yussufkaradeniz" target="_blank">
          <i class="fab fa-twitter text-white mr-4"> </i>
        </a>
        <a class="li-ic" href="https://www.linkedin.com/in/yussufkaradeniz" target="_blank">
          <i class="fab fa-linkedin text-white mr-4"> </i>
        </a>
        <a class="ins-ic" href="https://www.instagram.com/yussufkaradeniz/" target="_blank">
          <i class="fab fa-instagram text-white mr-4"> </i>
        </a>         
      </div>
    </div>
    <div class="footer-copyright text-center py-3 text-white">© Yusuf Karadeniz</div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>