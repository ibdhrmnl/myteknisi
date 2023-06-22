<?php

include 'db.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$nama = $_POST['Nama'];
	$alamat = $_POST['Alamat'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $hp = $_POST['Hp'];
    $password = MD5($_POST['Password']);
    $cpassword = MD5($_POST['Cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM tb_pengguna WHERE Email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tb_pengguna (Nama, Alamat, Username, Email, Hp, Password)
					VALUES ('$nama','$alamat', '$username', '$email','$hp', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registrasi User Berhasil!.')</script>";
				echo '<script>window.location="login.php"</script>';
                $nama = "";
				$alamat = "";
				$username = "";
				$email = "";
                $hp = "";
				$_POST['Password'] = "";
				$_POST['Cpassword'] = "";
			} else {
				echo "<script>alert('Terjadi Kesalahan.')</script>";
			}
		} else {
			echo "<script>alert('Email telah digunakan.')</script>";
		}

	} else {
		echo "<script>alert('Password tidak Cocok.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Register Form </title>
</head>
<body  id="bg-login">
	<div class="gambar"><img src="img/bglogin.jpg" alt=""></div>
	<div class="box-signup">
		<h2>Create Account</h2>
		<form action="" method="POST" class="login-email">
			<input type="text" placeholder="Nama" name="Nama" class="input-control" value="<?php echo $nama; ?>" required>

			<input type="text" placeholder="Alamat" name="Alamat" class="input-control" value="<?php echo $alamat; ?>" required>

			<input type="text" placeholder="Username" name="Username" class="input-control" required>


			<input type="email" placeholder="Email" name="Email" class="input-control" value="<?php echo $email; ?>" required>


			<input type="text" placeholder="Nomor Telepon" name="Hp" class="input-control" value="<?php echo $hp; ?>" required.>


			<input type="password" placeholder="Password" name="Password" class="input-control" value="<?php echo $_POST['password']; ?>" required>


			<input type="password" placeholder="Konfirmasi Password" name="Cpassword" class="input-control" value="<?php echo $_POST['cpassword']; ?>" required>


			<button name="submit" class="btn">Selanjutnya</button>

			<p class="login-register-text">Sudah Memiliki Akun? <a href="login.php">Login</a>.</p>
		</form>
	</div>
</body>
</html>
