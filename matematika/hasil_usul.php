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
  <body>
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
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="dashboard.php">Matematika</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pengusulan Alat dan Bahan</li>
            </ol>
          </nav>
          <!-- end judul -->

          <!-- isi form -->
          <div class="container mt-5 mb-4">
            
             <?php
                include "../koneksi.php";

                if(isset($_POST['submit'])) {
                  $direktori = "ipload_alat/";
                  $nama_file = $_FILES['foto']['name'];
                  move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$nama_file);
                  mysqli_query($conn, "INSERT INTO usul SET
                  nama_alat_bahan = '$_POST[namaAlatBahan]',
                  jenis = '$_POST[jenis]',
                  jumlah = '$_POST[jumlah]',
                  file = '$nama_file',
                  keterangan = '$_POST[keterangan]'") or die (mysqli_error($conn));
                  
                  echo "<script>alert('Data Anda telah terkirim!')</script>";
                }
              ?>
               
            

            <div class="alert alert-primary text-center mt-4 mb-4">DATA PENGUSULAN ALAT DAN BAHAN</div>

            <p>Terima kasih telah melakukan pengusulan. Data Anda telah masuk dalam Daftar Usulan dan akan diperiksa oleh Kepala Laboratorium Matematika.</p>

            <div class="card mt-4 mb-3">
              <div class="card-header fw-bold">
                Nama Alat/Bahan
              </div>
              <div class="card-body">
                <?php echo $_POST['namaAlatBahan'] ?>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header fw-bold">
                Jenis Pengusulan
              </div>
              <div class="card-body">
                <?php echo $_POST['jenis'] ?>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header fw-bold">
                Jumlah
              </div>
              <div class="card-body">
                <?php echo $_POST['jumlah'] ?>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header fw-bold">
                Nama File Gambar
              </div>
              <div class="card-body">
               <img src="upload_alat/<?php echo  $nama_file ?>" style="width: 200px">
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header  fw-bold">
                Keterangan
              </div>
              <div class="card-body">
                <?php echo $_POST['keterangan'] ?>
              </div>
            </div>

            <a href="usul.php" class="btn btn-primary mt-2">Kembali</a>
          </div>
        </div>
        <!-- end form -->
      </div>
    </section>
    <!-- end content -->

    <!-- Footer -->
    <footer class="text-center text-white pb-5 bg-black">
      <p class="pt-5">Created by <i class="far fa-copyright"></i> 2021 <a href="http://fmipa.uho.ac.id/" class="fw-bold text-white">LabMIPA UHO</a></p>
    </footer>
    <!-- EndFooter -->

    <script>
      if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>

<script src="../alert/sweetalert2.all.min.js"></script>

 

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