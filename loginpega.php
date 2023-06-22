<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="img/logo.png">

</head>
<body id="bg-login">
    <div class="gambar"><img src="img/bglogin.jpg" alt=""></div>
    <!--<h4>MyTeknisi</h4>-->
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
            <p class="login-register-text">Don't have an account? <a href="register.php">create account</a>.</p>
        </form>
        <?php 
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                if(mysqli_num_rows($cek) > 0) { 
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login']=true;
                    $_SESSION['pegawai']= $d;
                    $_SESSION['id']= $d->id_pegawai;
                    echo '<script>window.location="dashboardpega.php"</script>';
                }else{
                    echo '<script>alert("Username atau password Anda salah!")</script>';    
                }
            }
            
        ?>
    </div>

</body>
</html>