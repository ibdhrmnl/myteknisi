<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/fakeLoader.js"></script>
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <div class="fakeLoader"></div>
    <input type="checkbox" id="check">
    
    <!--<div class="img">
        <img src="img/bg.png" alt="">
    </div>-->
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
        </label>
        <div class="left_area">
            <left><img src="img/logo.png" class="logo" alt=""></left>
            <h3>MyTeknisi</h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="l_btn"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </header>
    <!--header area end-->

    <!--sidebar area start-->
    <div class="sidebar">
        <a href="dashboard.php"><i class=" fa-solid fa-house"></i><span>Beranda</span></a>
        <a href="profil.php"><i class=" fa-solid fa-user"></i><span>Profil</span></a>
        <a href="notifiaction.php"><i class=" fa-solid fa-bell"></i><span>Notifikasi</span></a>
        <a href="inbox.php"><i class=" fa-solid fa-comment"></i><span>Pesan</span></a>
        <a href="request.php"><i class=" fa-solid fa-microchip"></i><span>Request</span></a>
        <a href="contact.php"><i class=" fa-solid fa-address-book"></i><span>Hubungi Kami</span></a>
    </div>
    <!--sidebar area end-->

    <!--content-->
    <div class="img">   
        <div class="container">
            <h1>Dashboard</h1>
            <div class="box">
                <h4>Halo, <?php echo $_SESSION['pengguna']->Nama?>!</h4>
                <h4>Selamat datang di MyTeknisi!</h4>
        </div>
        <div class="box">
            <h3>Butuh bantuan kami untuk service, konsultasi, perbaikan, dan hal-hal lain di bidang software?<h3>
            <h3>Silakan buat sebuah request dengan menekan tombol Post Request di bawah ini<h3>
            <h3></h3> 
            <a href="post_request.php">
            <button name="submit" class="btn">Post Request</button>
                </a> 
            </div>
        </div>
            
            </div>
        <!--<img src="img/bg.png" alt="">-->
    </div>
    <!--content-->
    <!--footer>
        <div class="container">
            <small>Copyright &copy; 2022 - MyTeknisi.</small>
        </div>
    </footer>
    <!--footer-->
</body>
</html>


