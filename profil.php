<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
    $query = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE Id_pengguna = '".$_SESSION['id']."' ");
    $d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>

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
        <a href="dashboard.php"><i class=" fa-solid fa-house"></i><span>Dashboard</span></a>
        <a href="profil.php"><i class=" fa-solid fa-user"></i><span>Profil</span></a>
        <a href="notifiaction.php"><i class=" fa-solid fa-bell"></i><span>Notification</span></a>
        <a href="inbox.php"><i class=" fa-solid fa-comment"></i><span>Inbox</span></a>
        <a href="request.php"><i class=" fa-solid fa-microchip"></i><span>Request</span></a>
        <a href="contact.php"><i class=" fa-solid fa-address-book"></i><span>Contact Us</span></a>
    </div>
    <!--sidebar area end-->

    <!--content-->
    <div class="img">
        <div class="container">
            <h3>Profil</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="Nama" placeholder="Full Name" class="input-control"
                        value="<?php echo $d->Nama ?>" required>
                    <input type="text" name="Alamat" placeholder="Address" class="input-control"
                        value="<?php echo $d->Alamat ?>" required>
                    <input type="text" name="Username" placeholder="Username" class="input-control"
                        value="<?php echo $d->Username ?>" required>
                    <input type="text" name="Email" placeholder="Email" class="input-control"
                        value="<?php echo $d->Email ?>" required>
                    <input type="text" name="Hp" placeholder="Number Phone" class="input-control"
                        value="<?php echo $d->Hp ?>" required>
                    <input type="submit" name="submit" value="Change Profile" class="btn2">
                </form>
                <?php 
                    if(isset($_POST['submit'])){
                        $nama = ucwords($_POST['Nama']);
                        $alamat = ucwords($_POST['Alamat']) ;
                        $username = $_POST['Username'];
                        $email = $_POST['Email'];
                        $hp = $_POST['Hp'];
                    
                        $update = mysqli_query($conn, "UPDATE tb_pengguna SET
                                        Nama = '".$nama."',
                                        Alamat = '".$alamat."',
                                        Username = '".$username."',
                                        Email = '".$email."',
                                        HP = '".$hp."'
                                        WHERE Id_pengguna = '".$d->Id_pengguna."' ");
                        if($update){
                            echo '<script>alert("your data has been changed successfully")</script>';
                            echo '<script>window.location = "profil.php"</script>';
                        }else{
                            echo 'gagal' .mysqli_error(conn);
                        }
                    }
                ?>
            </div>
            <h3>Ubah Password</h3>
                <div class="box">
                    <form action="" method="POST">
                        <input type="password" name="pass1" placeholder="New Password" class="input-control" required>
                        <input type="password" name="pass2" placeholder="Confirm Password" class="input-control"
                            required>
                        <input type="submit" name="update_pass" value="Change Password" class="btn2">
                    </form>
                    <?php
                    if(isset($_POST['update_pass'])){
                        $pass1 = $_POST['pass1'];
                        $pass2 = $_POST['pass2'];

                        if($pass2 != $pass1){
                            echo '<script>alert("Your Password Does Not Match")</script>';
                        }else{
                            $u_pass = mysqli_query($conn, "UPDATE tb_pengguna SET Password = '".MD5($pass1)."' WHERE Id_pengguna = '".$d->Id_pengguna."' ");
                            if($u_pass){
                                echo '<script>alert("your password has been changed successfully")</script>';
                            }else{
                                echo 'gagal' .mysqli_error($conn);
                            }

                        }                
                    }
                ?>
                </div>
        </div>
        <!--<img src="img/bg.png" alt="">-->
    </div>
    <!--content-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - MyTeknisi.</small>
        </div>
    </footer>
    <!--footer-->

</body>

</html>