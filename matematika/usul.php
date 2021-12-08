<?php
  include ('../koneksi.php');
  $nama = $jenis = $jumlah = $keterangan = $errName = $errJenis = $errJumlah = $errFoto = "";
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $direktori = "upload_alat/";
    $nama_file = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$nama_file);

    if(empty(trim($_POST['namaAlatBahan']))) {
      $errName = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $nama = $_POST['namaAlatBahan'];
    }

    if($_POST['jenis'] == "Tidak ada") {
      $errJenis = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $jenis = $_POST['jenis'];
    }

    if(empty(trim($_POST['jumlah']))) {
      $errJumlah = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $jumlah = $_POST['jumlah'];
    }

    if(empty(trim($nama_file)) && $jenis == "Kerusakan alat") {
      $errFoto = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:50%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi untuk menunjukkan alat yang rusak!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else if(empty(trim($nama_file)) && $jenis == "Alat tidak berfungsi") {
      $errFoto = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:60%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi untuk menunjukkan alat yang tidak berfungsi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    }

    if($_POST['keterangan']) {
      $keterangan = $_POST['keterangan'];
    }

    if(empty($errName) && empty($errJenis) && empty($errJumlah) && empty($errFoto)) {
      mysqli_query($connect, "INSERT INTO usul_mtk SET
      nama_alatbahan = '$_POST[namaAlatBahan]',
      jenis = '$_POST[jenis]',
      jumlah = '$_POST[jumlah]',
      nama_file = '$nama_file',
      keterangan = '$_POST[keterangan]'") or die (mysqli_error($connect));
      header("location:hasil_usul.php?nama=$_POST[namaAlatBahan]&jenis=$_POST[jenis]&jumlah=$_POST[jumlah]&nama_file=$_POST[nama_file]&keterangan=$_POST[keterangan]");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>LabMIPA UHO</title>
  </head>

  <body id="page-top"">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-black fixed-top">
      <div class="container-fluid">
        <!-- logo -->
        <a class="navbar-brand" href="../index.php">
          <img src="../img/logo.jpg" alt="" width="30" height="30" class="d-inline-block rounded-circle logo-img me-2" />
          Lab<b>MIPA</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- search -->
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-info" type="submit"><i class="fas fa-search text-white"></i></button>
          </form>
          <!-- menu -->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:aqua" href="dashboard.php">Matematika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Fisika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Kimia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Biologi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Navbar-->

    <!-- content -->
    <section id="content">
      <div class="row no-gutters mt-5">
        <!-- sidebar -->
        <div class="col-md-2 sidebar" style="width: 26%">
          <!-- header -->
          <header class="text-center text-light fs-4 mb-3 bg-primary pt-1"><i class="fas fa-square-root-alt me-2"></i>Matematika</header>
          <!-- end header -->
          
          <ul class="nav flex-column ms-3 mb-5">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboard.php"><i class="fas fa-qrcode me-2"></i> Dashboard</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-file-alt me-2"></i> Dokumen Asisten</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="usul.php"><i class="fas fa-desktop me-2"></i> Pengusulan Alat dan Bahan</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jadwal.php"><i class="far fa-calendar me-2"></i> Jadwal Praktikum</a>
              <hr class="bg-secondary" />
            </li>
          </ul>
        </div>
        <!-- end sidebar -->

        <!-- form -->
        <!-- judul -->
        <div class="col-md-10 mt-2 pt-4 bg-light text-black" style="width: 74%">
          <h3><i class="fas fa-desktop me-2"></i></i>PENGUSULAN ALAT DAN BAHAN</h3>

          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item "><a href="../index.php" class="text-decoration-none">Home</a></li>
              <li class="breadcrumb-item "><a href="dashboard.php" class="text-decoration-none">Matematika</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pengusulan Alat dan Bahan</li>
            </ol>
          </nav>
          <!-- end judul -->

          <!-- isi form -->
          <div class="container mt-5 mb-4">
            <div class="alert alert-primary text-center mt-3 mb-4">FORMULIR PENGUSULAN ALAT DAN BAHAN</div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

              <!-- kolom nama alat/bahan -->
              <div class="mb-4">
                <label for="namaAlatBahan" class="form-label">Nama Alat/Bahan</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errName;?>
                <input type="text" class="form-control" id="namaAlatBahan" name="namaAlatBahan" aria-describedby="namaAB" placeholder="Nama" value="<?php echo $nama; ?>">
                <div id="namaAB" class="form-text">Masukkan nama alat/bahan yang akan diusulkan</div>
              </div>

              <!-- kolom jenis pengusulan -->
              <div class="mb-4">
                <label for="jenis" class="form-label">Jenis Pengusulan</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errJenis;?>
                <select class="form-select" aria-label="Default select example" id="jenis" name="jenis">
                  <option value="Tidak ada" selected>--pilih kriteria--</option>
                  <option value="Kerusakan alat">Kerusakan alat</option>
                  <option value="Alat tidak berfungsi">Alat tidak berfungsi</option>
                  <option value="Kekurangan bahan">Kekurangan bahan</option>
                  <option value="Alat/Bahan tidak tersedia">Alat/Bahan tidak tersedia</option>
                </select>
              </div>

              <!-- kolom jumlah -->
              <div class="mb-4">
                <label for="jumlah" class="form-label">Jumlah</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errJumlah;?>
                <input type="number" min="1" max="30" class="form-control" id="jumlah" name="jumlah" aria-describedby="jumlah" placeholder="1" value="<?php echo $jumlah; ?>">
                <div id="jumlah" class="form-text">Masukkan jumlah alat/bahan</div>
              </div>
               
              <!-- kolom upload gambar -->
              <div class="mb-3" >
                <label for="foto" class="form-label">Gambar Alat</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errFoto;?>
                <input type="file" accept="image/*" class="form-control" id="foto" name="foto" rows="3" aria-describedby="foto" placeholder="Masukkan teks di sini" ></input>
                <div id="foto" class="form-text">Masukkan gambar jika Anda memilih 'Kerusakan Alat' atau 'Alat Tidak Berfungsi' pada kolom Jenis Pengusulan</div>
              </div>

              <!-- kolom keterangan -->
              <div class="mb-3" >
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" aria-describedby="keterangan" placeholder="Masukkan teks di sini" value="<?php echo $keterangan; ?>"></textarea>
                <div id="keterangan" class="form-text">Jika ada keterangan tambahan, isi kolom ini</div>
              </div>


              <button type="submit" name="submit" class="btn btn-primary" id="tombol" >Kirim</button>

            </form>
          </div>
        </div>
        <!-- end form -->
      </div>
    </section>
    <!-- end content -->
    
   

    <script src="../alert/sweetalert2.all.min.js"></script>

    <script>
      btn-primary.forEach(function(el) {
        el.addEventListener('click', function(e) {
          e.preventDefault();
        });
      });
    </script>

    <script>
      if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>

    <!-- Footer -->
    <footer class="text-center text-white pb-5 bg-black">
      <p class="pt-5">Created by <i class="far fa-copyright"></i> 2021 <a href="http://fmipa.uho.ac.id/" class="fw-bold text-white">LabMIPA UHO</a></p>
    </footer>
    <!-- EndFooter -->

    

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
    <!-- End AOS -->
  </body>
</html>

