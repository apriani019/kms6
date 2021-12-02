<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/navbar.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>LabMIPA UHO</title>
  </head>

  <body id="page-top">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-black fixed-top" data-aos="fade-down">
      <div class="container-fluid">
        <!-- logo -->
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.jpg" alt="" width="30" height="30" class="d-inline-block rounded-circle logo-img me-2" />
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
              <a class="nav-link js-scroll-trigger" style="color: aqua;" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="matematika/dashboard.php">Matematika</a>
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

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/ban1.jpg" class="d-block w-100" alt="bg1" />
          <div class="carousel-caption d-none d-md-block">
            <img src="img/logo.jpg" alt="logo" class="rounded-circle img-fluid b-img" />
            <h1 class="display-4">Lab <b>Matematika</b></h1>
            <p class="lead"></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/ban2.jpg" class="d-block w-100" alt="bg2" />
          <div class="carousel-caption d-none d-md-block">
            <img src="img/logo.jpg" alt="logo" class="rounded-circle img-fluid b-img" />
            <h1 class="display-4">Lab <b>Fisika</b></h1>
            <p class="lead">  kcsc</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/ban3.jpg" class="d-block w-100" alt="bg2" />
          <div class="carousel-caption d-none d-md-block">
            <img src="img/logo.jpg" alt="logo" class="rounded-circle img-fluid b-img" />
            <h1 class="display-4">Lab <b>Kimia</b></h1>
            <p class="lead"></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/ban4.jpg" class="d-block w-100" alt="bg2" />
          <div class="carousel-caption d-none d-md-block">
            <img src="img/logo.jpg" alt="logo" class="rounded-circle img-fluid b-img" />
            <h1 class="display-4">Lab <b>Biologi</b></h1>
            <p class="lead"></p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Carousel-->

    <!-- News -->
    <div">
      <marquee behavior="" direction="left"> Pendaftaran asisten Fisika telah dibuka. Siapkan transkrip nilai dan surat rekomendasi dari dosen penanggung jawab. Untuk informasi lebih lengkap, silakan klik link <a href="#">Asisten Fisika</a>. Pendaftaran ditutup pada tanggal 12 November 2021. </marquee>
    </div>
    <!-- End News -->

    <!-- Matematika -->
    <section id="matematika">
      <div class="container register mt-5 text-center">
        <div class="row mb-5">
          <h1 class="text-light">Laboratorium <b>Matematika</b></h1>
        </div>
        <div class="card mb-4"  style="max-width: 100%;" data-aos="fade-right" data-aos-duration="1500">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/mat1.jpg" class="img-fluid rounded-start" alt="comp1" style="height: 210px; width:210px">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><b>Dokumen Asisten</b></h5>
                <p class="card-text text-dark text-start mt-4">Berisi kumpulan pengetahuan yang dibutuhkan asisten, seperti SOP dan pengalaman asisten dalam menyelesaikan masalah yang terjadi saat praktikum. Anda juga dapat berbagi informasi melalui fitur upload.</p>
                <a href="#" class="btn btn-outline-primary mt-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4" style="max-width: 100%;" data-aos="fade-left" data-aos-duration="1500">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/mat2.jpg" class="img-fluid rounded-start" alt="comp2" style="height: 210px; width:200px">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><b>Form Pengusulan Alat dan Bahan</b></h5>
                <p class="card-text text-dark text-start mt-4">Laporkan permasalahan yang berhubungan dengan alat dan bahan praktikum dalam form ini.</p>
                <a href="matematika/usul.php" class="btn btn-outline-primary mt-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4" style="max-width: 100%;" data-aos="fade-right" data-aos-duration="1500">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/mat3.jpg" class="img-fluid rounded-start" alt="comp3" style="height: 210px; width:200px">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><b>Jadwal Praktikum</b></h5>
                <p class="card-text text-dark text-start mt-4">Lihat jadwal praktikum dan laboratorium yang digunakan.</p>
                <a href="matematika/jadwal.php" class="btn btn-outline-primary mt-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-lg-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00006d" fill-opacity="1" d="M0,64L288,160L576,128L864,224L1152,128L1440,256L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg> 
    </section>     
    <!-- End Matematika -->
    
    <!-- Fisika -->
    <section id="fisika">
      <div class="container content text-center">
        <div class="row mb-5">
          <h1 class="text-light">Laboratorium <b>Fisika</b></h1>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-3 bg-transparent" data-aos="flip-left" data-aos-duration="1000" >
            <div class="card" >
              <img src="img/fis1.jpg" class="card-img-top" alt="fis1">
              <div class="card-body">
                <h5 class="card-title mb-3"><b>Dokumen Asisten</b></h5>
                <p class="card-text">Berisi kumpulan pengetahuan yang dibutuhkan asisten, seperti SOP dan pengalaman asisten dalam menyelesaikan masalah yang terjadi saat praktikum. Anda juga dapat berbagi informasi melalui fitur upload.</p>
                <a href="#" class="btn btn-outline-primary">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3 bg-transparent" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="150">
            <div class="card" >
              <img src="img/fis2.jpg" class="card-img-top" alt="fis2" style="height: 330px;">
              <div class="card-body">
                <h5 class="card-title"><b>Form Pengusulan Alat dan Bahan</b></h5>
                <p class="card-text text-dark text-start mt-4 mb-4">Laporkan permasalahan yang berhubungan dengan alat dan bahan praktikum dalam form ini.</p>
                <a href="#" class="btn btn-outline-primary mt-5 mb-2">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3 bg-transparent" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="300">
            <div class="card" >
              <img src="img/fis3.jpg" class="card-img-top" alt="fis3">
              <div class="card-body">
                <h5 class="card-title mb-3"><b>Jadwal Praktikum</b></h5>
                <p class="card-text mb-4">Lihat jadwal praktikum dan laboratorium yang digunakan.</p>
                <a href="#" class="btn btn-outline-primary mt-5 mb-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#01011b" fill-opacity="1" d="M0,224L205.7,224L411.4,128L617.1,128L822.9,128L1028.6,96L1234.3,288L1440,96L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z"></path></svg>
    </section>
    <!-- End Fisika -->

     <!-- Kimia -->
     <section id="kimia">
      <div class="container register mt-5 text-center">
        <div class="row mb-5">
          <h1 class="text-light">Laboratorium <b>Kimia</b></h1>
        </div>
        <div class="card mb-4 " style="max-width: 100%;" data-aos="fade-up-left" data-aos-duration="500">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/kim1.jpg" class="img-fluid rounded-start" alt="kim1" style="height: 210px; width:210px">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><b>Dokumen Asisten</b></h5>
                <p class="card-text text-dark text-start mt-4">Berisi kumpulan pengetahuan yang dibutuhkan asisten, seperti SOP dan pengalaman asisten dalam menyelesaikan masalah yang terjadi saat praktikum. Anda juga dapat berbagi informasi melalui fitur upload.</p>
                <a href="#" class="btn btn-outline-primary mt-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4" style="max-width: 100%;" data-aos="zoom-in" data-aos-duration="500">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/kim2.jpg" class="img-fluid rounded-start" alt="kim2" style="height: 210px; width:200px">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><b>Form Pengusulan Alat dan Bahan</b></h5>
              <p class="card-text text-dark text-start mt-4">Laporkan permasalahan yang berhubungan dengan alat dan bahan praktikum dalam form ini.</p>
                <a href="#" class="btn btn-outline-primary mt-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4" style="max-width: 100%;" data-aos="fade-up-right" data-aos-duration="500">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/kim3.jpg" class="img-fluid rounded-start" alt="kim3" style="height: 210px; width:200px">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><b>Jadwal Praktikum</b></h5>
                <p class="card-text text-dark text-start mt-4">Lihat jadwal praktikum dan laboratorium yang digunakan.</p>
                <a href="#" class="btn btn-outline-primary mt-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-lg-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00006d" fill-opacity="1" d="M0,128L240,288L480,96L720,128L960,160L1200,96L1440,96L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path></svg>   
    <!-- End Kimia -->

    <!-- Biologi -->
    <section id="biologi">
      <div class="container content text-center">
        <div class="row mb-5">
          <h1 class="text-light">Laboratorium <b>Biologi</b></h1>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-3 bg-transparent" data-aos="zoom-in-right" data-aos-duration="1000" >
            <div class="card" >
              <img src="img/bio1.jpeg" class="card-img-top" alt="bio1" style="height: 330px;">
              <div class="card-body">
                <h5 class="card-title mb-3"><b>Dokumen Asisten</b></h5>
                <p class="card-text">Berisi kumpulan pengetahuan yang dibutuhkan asisten, seperti SOP dan pengalaman asisten dalam menyelesaikan masalah yang terjadi saat praktikum. Anda juga dapat berbagi informasi melalui fitur upload.</p>
                <a href="#" class="btn btn-outline-primary">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3 bg-transparent" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
            <div class="card" >
              <img src="img/bio2.png" class="card-img-top" alt="bio2" style="height: 330px;">
              <div class="card-body">
                <h5 class="card-title"><b>Form Pengusulan Alat dan Bahan</b></h5>
              <p class="card-text text-dark text-start mt-4 mb-4">Laporkan permasalahan yang berhubungan dengan alat dan bahan praktikum dalam form ini.</p>
                <a href="#" class="btn btn-outline-primary mt-5 mb-2">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3 bg-transparent" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="300">
            <div class="card" >
              <img src="img/bio3.jpg" class="card-img-top" alt="bio3" style="height: 330px;">
              <div class="card-body">
                <h5 class="card-title mb-4"><b>Jadwal Praktikum</b></h5>
                <p class="card-text mb-3">Lihat jadwal praktikum dan laboratorium yang digunakan.</p>
                <a href="#" class="btn btn-outline-primary mt-5 mb-3">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#01011b" fill-opacity="1" d="M0,64L240,224L480,160L720,96L960,192L1200,160L1440,0L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path></svg>
    </section>
    <!-- End Biologi -->

    <!-- Footer -->
    <footer class="text-center text-white pb-5">
      <p>Created by <i class="far fa-copyright"></i> 2021 <a href="http://fmipa.uho.ac.id/" class="fw-bold text-white">LabMIPA UHO</a></p>
    </footer>
    <!-- EndFooter -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once : true
      });
    </script>
    <!-- End AOS -->

  </body>
</html>
