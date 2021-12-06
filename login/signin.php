<?php
 
include '../koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $jurusan = $_POST['jurusan'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM tbl_user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tbl_user (nama, email, jabatan, password, jurusan)
                    VALUES ('$nama','$email','$jabatan','$password','$jurusan')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $jabatan = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                $jurusan = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style (2).css">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign In</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Jabatan" name="jabatan" value="<?php echo $jabatan; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Jurusan" name="jurusan" value="<?php echo $jurusan; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Sign In</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>