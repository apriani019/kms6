<?php
  include ('../koneksi.php');
  $nama = $matkul = $semester = $prodi = $lab = $hari = $jam_Mulai = $jamAkhir = $errNama = $errMatkul = $errSemester = $errProdi = $errLab = $errHari = $errJam = "";
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty(trim($_POST['nama']))) {
      $errNama = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $nama = $_POST['nama'];
    }

    if(empty(trim($_POST['matkul']))) {
      $errMatkul = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $matkul = $_POST['matkul'];
    }

    if($_POST['semester'] == "Tidak ada") {
      $errSemester = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $semester = $_POST['semester'];
    }

    if($_POST['prodi'] == "Tidak ada") {
      $errProdi = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $prodi = $_POST['prodi'];
    }
    
    if($_POST['lab'] == "Tidak ada") {
      $errLab = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $lab = $_POST['lab'];
    }

    if($_POST['hari'] == "Tidak ada") {
      $errHari = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $hari = $_POST['hari'];
    }

    if(empty(trim($_POST['jamMulai'])) && empty(trim($_POST['jamAkhir']))) {
      $errJam = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:34%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Kolom ini wajib diisi!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else if(empty(trim($_POST['jamMulai']))) {
      $jamAkhir = $_POST['jamAkhir'];
      $errJam = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:45%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Anda belum mengisi waktu awal praktikum!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else if(empty(trim($_POST['jamAkhir']))) {
      $jamMulai = $_POST['jamMulai'];
      $errJam = "<div class='alert alert-danger alert-dismissible fade show ' role='alert' style='width:45%; height:7px; font-size:14px;'>
          <div style='margin-top:-9px'>
            <i class='fas fa-exclamation-triangle me-2'></i>Anda belum mengisi waktu akhir praktikum!
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='margin-top:-9px'></button>
        </div>";
    } else {
      $jamMulai = $_POST['jamMulai'];
      $jamAkhir = $_POST['jamAkhir'];
    }

    if(empty($errNama) && empty($errMatkul) && empty($errSemester) && empty($errProdi && empty($errLab && empty($errHari)))) {
      mysqli_query($connect, "INSERT INTO ajukan_jadwal_mtk SET
      asisten = '$_POST[nama]',
      matkul = '$_POST[matkul]',
      semester = '$_POST[semester]',
      prodi = '$_POST[prodi]',
      lab = '$_POST[lab]',
      hari = '$_POST[hari]',
      jam_mulai = '$_POST[jamMulai]',
      jam_akhir = '$_POST[jamAkhir]'") or die (mysqli_error($connect));

      header("location:hasil_ajukan.php?nama=$_POST[nama]&matkul=$_POST[matkul]&semester=$_POST[semester]&prodi=$_POST[prodi]&lab=$_POST[lab]&hari=$_POST[hari]&jamMulai=$_POST[jamMulai]&jamAkhir=$_POST[jamAkhir]");
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
          <h3><i class="fas fa-desktop me-2"></i></i>PENGAJUAN JADWAL PRAKTIKUM</h3>

          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item "><a href="../index.php" class="text-decoration-none">Home</a></li>
              <li class="breadcrumb-item "><a href="dashboard.php" class="text-decoration-none">Matematika</a></li>
              <li class="breadcrumb-item "><a href="jadwal.php" class="text-decoration-none">Jadwal Praktikum</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pengajuan Jadwal</li>
            </ol>
          </nav>
          <!-- end judul -->

          <!-- isi form -->
          <div class="container mt-5 mb-4">
            <div class="alert alert-primary text-center mt-3 mb-4">FORMULIR PENGAJUAN JADWAL PRAKTIKUM</div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

              <!-- kolom nama asisten -->
              <div class="mb-4">
                <label for="namaAsisten" class="form-label">Nama Asisten</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errNama;?>
                <input type="text" class="form-control" id="namaAsisten" name="nama" aria-describedby="namaAsisten" placeholder="Nama Anda" value="<?php echo $nama; ?>">
                <div id="namaAsisten" class="form-text">Masukkan nama asisten praktikum</div>
              </div>

              <!-- kolom mata kuliah -->
              <div class="mb-4">
                <label for="m" class="form-label">Mata Kuliah</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errMatkul;?>
                <input type="text" class="form-control" id="mataKuliah" name="matkul" aria-describedby="mataKuliah" placeholder="Mata Kuliah" value="<?php echo $matkul; ?>">
                <div id="mataKuliah" class="form-text">Masukkan mata kuliah yang dipraktikumkan</div>
              </div>

              <!-- kolom semester-->
              <div class="mb-4">
                <label for="semester" class="form-label">Semester</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errSemester;?>
                <select class="form-select" aria-label="Default select example" id="semester" name="semester" style="width:34%">
                  <option value="Tidak ada" selected>--pilih semester--</option>
                  <option value="1">Semester 1</option>
                  <option value="3">Semester 3</option>
                  <option value="5">Semester 5</option>
                </select>
              </div>
              
              <!-- kolom program studi -->
              <div class="mb-4">
                <label for="prodi" class="form-label">Program Studi</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errProdi;?>
                <select class="form-select" aria-label="Default select example" id="prodi" name="prodi" style="width:34%">
                  <option value="Tidak ada" selected>--pilih program studi--</option>
                  <option value="Matematika">Matematika</option>
                  <option value="Statistika">Statistika</option>
                  <option value="Ilmu Komputer">Ilmu Komputer</option>
                </select>
              </div>

              <!-- kolom laboratorium -->
              <div class="mb-4">
                <label for="laboratorium" class="form-label">Laboratorium</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errLab;?>
                <select class="form-select" aria-label="Default select example" id="laboratorium" name="lab" style="width:34%">
                  <option value="Tidak ada" selected>--pilih laboratorium--</option>
                  <option value="Lab. Statistik">Lab. Statistik</option>
                  <option value="Lab. Analisis dan Matematika Terapan">Lab. Analisis dan Matematika Terapan</option>
                  <option value="Lab. Aljabar">Lab. Aljabar</option>
                  <option value="Lab. Basis Data">Lab. Basis Data</option>
                </select>
              </div>

              <!-- kolom hari -->
              <div class="mb-4">
                <label for="hari" class="form-label">Hari</label>
                <!-- validasi notifikasi eror -->
                <?php echo $errHari;?>
                <select class="form-select" aria-label="Default select example" id="hari" name="hari" style="width:34%">
                  <option value="Tidak ada" selected>--pilih hari--</option>
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                </select>
              </div>

                <!-- kolom jam -->
                <div class="mb-4">
                  <label for="jam" class="form-label">Jam</label>
                  <!-- validasi notifikasi eror -->
                      <?php echo $errJam;?>
                  <div class="row">
                    <div class="col-md-4">
                      <input type="time" class="form-control" id="jam" name="jamMulai" aria-describedby="jam" placeholder="1" value="<?php echo $jamMulai; ?>">
                    </div>
                    <div class="col-md-1 ms-3">
                      <p class="text-center">s/d</p>
                    </div>
                    <div class="col-md-6">
                      <input type="time" class="form-control" id="jam" name="jamAkhir" aria-describedby="jam" placeholder="1" value="<?php echo $jamAkhir; ?>">
                    </div>
                  </div>
                  <div id="jam" class="form-text">Masukkan jam praktikum</div>
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

