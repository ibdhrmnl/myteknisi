<?php

include 'db.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: loginpega.php");
}

if (isset($_POST['submit'])) {
	$nik = $_POST['NIK'];
	$nama = $_POST['Nama'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $jk = $_POST['Jenis_Kelamin'];
    $jabatan = $_POST['Jabatan'];
    
    $password = MD5($_POST['Password']);
    $cpassword = MD5($_POST['Cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM tb_pegawai WHERE Email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO tb_pegawai (NIK, Nama, Username, Email, Jenis_Kelamin, Jabatan, Password)
					VALUES ('$nik','$nama','$username','$email','$jk','$jabatan', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo '<script>window.location="berkas.php"</script>';
                $nik = "";
				$nama = "";
				$jk = "";
				$username = "";
				$email = "";
                $jabatan = "";               
				$_POST['Password'] = "";
				$_POST['Cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
			<input type="text" placeholder="NIK" name="NIK" class="input-control" value="<?php echo $nik; ?>" required>
			<input type="text" placeholder="Full Name" name="Nama" class="input-control" value="<?php echo $nama; ?>" required>
			<input type="text" placeholder="Username" name="Username" class="input-control" required>
			<input type="text" placeholder="Jenis Kelamin" name="Jenis_Kelamin" class="input-control" value="<?php echo $jk; ?>" required>
			<input type="text" placeholder="Jabatan" name="Jabatan" class="input-control" value="<?php echo $jabatan; ?>" required>
			<input type="email" placeholder="Email" name="Email" class="input-control" value="<?php echo $email; ?>" required>
			<input type="password" placeholder="Password" name="Password" class="input-control" value="<?php echo $_POST['password']; ?>" required>
			<input type="password" placeholder="Confirm Password" name="Cpassword" class="input-control" value="<?php echo $_POST['cpassword']; ?>" required>
			<button name="submit" class="btn">Selanjutnya</button>
			<p class="login-register-text">Have an account? <a href="loginpega.php">Log in</a>.</p>
		</form>
	</div>
</body>
</html>
