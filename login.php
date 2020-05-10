<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
     
      <div class = "container form-signin">       
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'b181210009@sakarya.edu.tr' && 
                  $_POST['password'] == '123456') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  header('Refresh: 0; URL = logout.php');             
               }else {
                  $msg = 'Kullanıcı adı veya şifre yanlış. Tekrar giriş yapınız.';
               }
            }
         ?>
      </div>
      
        <div class="container-fluid">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login">
        <h1>LOGİN</h1><br>
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <label for="kullaniciAdi">Kullanıcı Adı</label><br>
        <input type="email" name="username" id="username"required autofocus><br><br>
        <label for="sifre">Parola</label><br>
         <input type="password" name="password" id="password" ><br><br>
         <button id="giris" type="submit" name="login" >GİRİŞ</button>
        </form>

        </div> 


</body>
</html>