<?php
    require "db.php";
    function generateRandomString($length = 10){
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($char);
        $randomString = '';
        for ($i = 0; $i < $length; $i++){
            $randomString .= $char[rand(0, $charLength - 1)];
        }
        return $randomString;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Berkas</title>
</head>

<body id="bg-login">
    <div class="gambar"><img src="img/bg3.png" alt=""></div> 
    <div class="box-berkas">
        <center style="padding-bottom:22px;"><h2>Upload Berkas</h2></center>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="padding-bottom: 12px;">
                <label for="" style="padding-bottom:12px;"><b>Nama :</b></label>
                <input type="text" name="Nama" class="input">
                <br>
                <label for="exampleFormControlFile1"><b>FOTO KTP</b></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="KTP">
            </div>
            <div class="form-group" style="padding-bottom: 12px;">

                <label for="exampleFormControlFile1"><b>CV</b></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="CV">
            </div>
            <div class="form-group" style="padding-bottom: 12px;">

                <label for="exampleFormControlFile1"><b>SERTIFIKAT KEAHLIAN</b></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="SERTIF">
            </div>
            <div class="form-group" style="padding-bottom: 12px;">

                <label for="exampleFormControlFile1"><b>FOTO 3*4, LATAR BIRU</b></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="FOTO">
            </div>
                                                                                                   
            <button name="submit" class="btn">Create Account</button>
        </form>


        <?php     
            if(isset($_POST['submit'])){
                $nama = $_POST['Nama'];
                $dir = "Dokumen/ktp";
                $dir2 = "Dokumen/cv";
                $dir3 = "Dokumen/sertifikat";
                $dir4 = "Dokumen/pasfoto";
                $file_name = basename($_FILES['KTP']['name']);
                $file_name2 = basename($_FILES['CV']['name']);
                $file_name3 = basename($_FILES['SERTIF']['name']);
                $file_name4 = basename($_FILES['FOTO']['name']);
                $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $file_type2 = strtolower(pathinfo($file_name2, PATHINFO_EXTENSION));
                $file_type3 = strtolower(pathinfo($file_name3, PATHINFO_EXTENSION));
                $file_type4 = strtolower(pathinfo($file_name4, PATHINFO_EXTENSION));
                $upload_file = $_FILES['KTP']['tmp_name'];
                $upload_file2 = $_FILES['CV']['tmp_name'];
                $upload_file3 = $_FILES['SERTIF']['tmp_name'];
                $upload_file4 = $_FILES['FOTO']['tmp_name'];
                $random_name = generateRandomString(5).$nama;
                $new_name = $random_name.'.'.$file_type;
                $new_name2 = $random_name.'.'.$file_type2;
                $new_name3 = $random_name.'.'.$file_type3;
                $new_name4 = $random_name.'.'.$file_type4;


                if($file_name && $file_name2 && $file_name3 && $file_name4==''){
                    echo 'gagal';
                } else{
                    if($file_type!='jpg' && $file_type!='jpeg' && $file_type!='png' && $file_type!='pdf' && $file_type!='docx' && 
                        $file_type2!='jpg' && $file_type2!='jpeg' && $file_type2!='png' && $file_type2!='pdf' && $file_type2!='docx' &&
                        $file_type3!='jpg' && $file_type3!='jpeg' && $file_type3!='png' && $file_type3!='pdf' && $file_type3!='docx' &&
                        $file_type4!='jpg' && $file_type4!='jpeg' && $file_type4!='png' && $file_type4!='pdf' && $file_type4!='docx'){
                        echo 'gagal';
                    } else{
                        move_uploaded_file($upload_file, $dir.'/'.$new_name);
                        move_uploaded_file($upload_file2, $dir2.'/'.$new_name2);
                        move_uploaded_file($upload_file3, $dir3.'/'.$new_name3);
                        move_uploaded_file($upload_file4, $dir4.'/'.$new_name4);
                        $query = mysqli_query($conn, "INSERT INTO tb_berkas (Nama,ktp,cv,sertifikat,pas_foto,Tanggal_Upload) VALUES('$nama','$new_name','$new_name2','$new_name3','$new_name4',sysdate())");
                        echo "<script>alert('Wow! User Registration Completed.')</script>";
				        echo '<script>window.location = "loginpega.php"</script>';
                    }
                }

            }
        ?>
    </div>
</body>

</html>