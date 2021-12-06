<?php
 
include '../koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />

    <title></title>

    <link rel="stylesheet" href="login.css" />

  </head>

  <body>

  <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

    <form action="" method="POST" class="login-box">
      <h1>Login</h1>

      <div class="textbox">
      <i class="fas fa-envelope"></i>

        <input type="emails" placeholder="Email" value="<?php echo $email; ?>" required />
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>

        <input type="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required/>
      </div>

      <div class="input-group">
      <input type="button" class="btn" name="submit" value="Log in" />
      </div>

      <p class="login-register-text">Belum punya akun? <a href="signin.php">Sign in</a></p>
    </form>
  </body>
</html>
