
<?php 

require 'function.php';

// cek apakah tombol submit sudah dipencet atau belum
if( isset($_POST["submit"]) ) {
  
// cek apakah data berhasil di tambahkan atau tidak
  if( apload($_POST) > 0 ){
    echo "
    <script>
    alert('Dokumen berhasil di apload!');
    document.location.href = 'apload.php';
    </script>
  ";

  }else{
    echo "
    <script>
    alert('Dokumen gagal di apload!');
    document.location.href = 'apload.php';
    </script>
  ";
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
    <link rel="stylesheet" href="usul.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>LabMIPA UHO</title>
  </head>

  <body id="page-top">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-black fixed-top">
      <div class="container-fluid">
        <!-- logo -->
        <a class="navbar-brand" href="index.html">
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
              <a class="nav-link js-scroll-trigger" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Matematika</a>
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
        <div class="col-md-2 mt-2 pt-4 sidebar" style="width: 26%">
          <ul class="nav flex-column ms-3 mb-5">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><i class="fas fa-home me-2"></i> Dashboard</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-file-alt me-2"></i> Dokumen Asisten</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="usul.html"><i class="fas fa-desktop me-2"></i> Pengusulan Alat dan Bahan</a>
              <hr class="bg-secondary" />
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="far fa-calendar me-2"></i> Jadwal Praktikum</a>
              <hr class="bg-secondary" />
            </li>
          </ul>
        </div>
        <!-- end sidebar -->
        <!-- form -->

              <!-- judul -->
        <div class="col-md-10 mt-2 pt-4 bg-light text-black" style="width: 74%">
          <h3><i class="fas fa-desktop me-2"></i></i>APLOAD DOKUMEN</h3>
              <!-- end judul -->

                <!-- isi form -->
            <div class="container mt-5 mb-4">
              <form enctype="multipart/form-data" method="POST" action="">
                <div class="mb-3">
                  <label for="formFile" class="form-label">File yang di upload :</label>
                  <input class="form-control" type="file" name="fupload" id="formFile" >
                </div> 
                <div class="mb-3" >
                  <label for="deskripsi" class="form-label">Deskripsi File : </label>
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Apload</button>
              </form>
            </div>
        </div>
        <!-- end form -->       
      </div>
    </section>
    <!-- end content -->

    <!-- Footer -->
    <footer class="text-center text-white pb-5 bg-black">
      <p class="pt-4">Created by <i class="far fa-copyright"></i> 2021 <a href="http://fmipa.uho.ac.id/" class="fw-bold text-white">LabMIPA UHO</a></p>
    </footer>
    <!-- EndFooter -->

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





























