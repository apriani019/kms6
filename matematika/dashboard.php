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
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="css/dashboard.css">

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
              <a class="nav-link text-primary" aria-current="page" href="dashboard.php"><i class="fas fa-qrcode me-2"></i> Dashboard</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-file-alt me-2"></i> Dokumen Asisten</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link" href="usul.php"><i class="fas fa-desktop me-2"></i> Pengusulan Alat dan Bahan</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jadwal.php"><i class="far fa-calendar me-2"></i> Jadwal Praktikum</a>
              <hr class="bg-secondary" />
            </li>
          </ul>
        </div>
        <!-- end sidebar -->


        <!-- menu -->

        <!-- judul -->
        <div class="col-md-10 mt-2 pt-4 bg-light text-black" style="width: 74%">
          <h3><i class="fas fa-tachometer-alt me-2"></i>DASHBOARD</h3>

          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a>Matematika</a></li>
            </ol>
          </nav>
          <!-- end judul -->

          <!-- card -->
          <div class="container content mt-5">
            <div class="row">
              <div class="col-lg-4 mt-3">
                <div class="card bg-primary text-light me-4" style="width: 18rem;">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-file-alt me-2"></i>
                    </div>
                    <h5 class="card-title">DOKUMEN ASISTEN</h5>
                    <div class="display-4 fw-bold">10</div>
                    <a href="" class="detail"><p class="card-text text-light">Lihat Detail <i class="fas fa-angle-double-right ms-2"></i></p></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-3">
                <div class="card bg-success text-light" style="width: 18rem;">
                  <div class="card-body">
                    <div class="card-body-icon"><i class="fas fa-desktop ms-2"></i></div>
                    <h5 class="card-title">FORM PENGUSULAN</h5>
                    <div class="display-4 fw-bold">10</div>
                    <a href="usul.php" class="detail"><p class="card-text text-light">Lihat Detail <i class="fas fa-angle-double-right ms-2"></i></p></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-3">
                <div class="card bg-warning text-light" style="width: 18rem;">
                  <div class="card-body">
                    <div class="card-body-icon"><i class="far fa-calendar ms-2"></i> </div>
                    <h5 class="card-title">JADWAL PRAKTIKUM</h5>
                    <div class="display-4 fw-bold">10</div>
                    <a href="jadwal.php" class="detail"><p class="card-text text-light">Lihat Detail <i class="fas fa-angle-double-right ms-2"></i></p></a>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <!-- end menu -->
      </div>
    </section>
    <!-- end content -->

    <!-- Footer -->
    <footer class="text-center text-white pb-5 bg-black">
      <p class="pt-5">Created by <i class="far fa-copyright"></i> 2021 <a href="http://fmipa.uho.ac.id/" class="fw-bold text-white">LabMIPA UHO</a></p>
    </footer>
    <!-- EndFooter -->

    <!-- boostrap js -->
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
