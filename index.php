<?php
include "lib/koneksi.php";
$sql = "SELECT nm_barang,spesifikasi,harga,gambar,keterangan FROM barang";
$hasil = mysqli_query($konek,$sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Toko Online CMMOS.com</title>


<!-- Bootstrap core CSS -->
<link href="dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="dist/fontawesome/css/all.min.css">

<!-- Custom styles for this template -->
<link rel="stylesheet" href="user.css">

  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light text-white" style="background-color: #32adb2; text-white">
  <div class="container">
  <b><a class="navbar-brand" href="home.php">COMMS.com</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      </ul>
  </div>
      <ul class="navbar-nav">
          <li class="nav-item">
              <a href="/cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
            <a href="new_member.php" class="nav-link">Register</a>
        </li>
        <li class="nav-item">
            <a href="login.php" class="nav-link">Admin</a>
        </li>
         </ul>
      </div>
      </nav>
</nav>

<main role="main" class="container">
  <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-body">
                Kategori: <strong>Semua kategori</strong>
                <span class="float-right">
                  Urutkan Harga: <a href="#" class="badge badge-info">Termurah</a> | <a href="#" class="badge badge-info">Termahal</a>
                </span>
              </div>
            </div>
          </div>
        </div>

      <?php
      if (mysqli_num_rows($hasil) > 0) {
        while ($row = mysqli_fetch_assoc($hasil)) { 
      ?>
          <div class="row">
          <div class="col-md-6">
            <div class="card mb-3">
              <img src="admin/image/<?= $row['gambar']; ?>" width="30px" height="418px" alt="Onix Mouse" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?= $row['nm_barang']; ?></h5>
                <p class="card-text"><strong>Rp78.000,-</strong></p>
                <p class="card-text">"Lightweight Wireless Mouse with 1600 dpi and Silent Click."</p>
                <a href="#" class="badge badge-info"><i class="fas fa-tags"></i>Category</a>
              </div>
              <div class="card-footer">
                <form action="">
                  <div class="input-group">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-info">Add to Cart</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
  <?php
        }
      }
?>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3">
              <img src="assets/images/3.jpg" width="30px" height="418px" alt="Onix Mouse" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Onix Alba Mouse</h5>
                <p class="card-text"><strong>Rp78.000,-</strong></p>
                <p class="card-text">"Lightweight Wireless Mouse with 1600 dpi and Silent Click."</p>
                <a href="#" class="badge badge-info"><i class="fas fa-tags"></i>Category</a>
              </div>
              <div class="card-footer">
                <form action="">
                  <div class="input-group">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-info">Add to Cart</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card mb-3">
              <img src="assets/images/4.jpg" width="30px" height="418px"  alt="Onix Keyboard" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Gaming Keyboard Onix Mini Wireless</h5>
                <p class="card-text"><strong>Rp204.900,-</strong></p>
                <p class="card-text">"Onix Mini Wireless Keyboard Basic - Touchpad for KODI, PC and TV Box."</p>
                <a href="#" class="badge badge-info"><i class="fas fa-tags"></i>Category</a>
              </div>
              <div class="card-footer">
                <form action="">
                  <div class="input-group">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-info">Add to Cart</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <img src="assets/images/5.jpg" width="30px" height="418px" alt="Onix Bluetooth" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Onix Bluetooth Receiver Wireless Audio</h5>
                <p class="card-text"><strong>Rp120.000,-</strong></p>
                <p class="card-text">"Onix Bluetooth Music Audio Receiver Transmitter Stereo Universal."</p>
                <a href="#" class="badge badge-info"><i class="fas fa-tags"></i>Category</a>
              </div>
              <div class="card-footer">
                <form action="">
                  <div class="input-group">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-info">Add to Cart</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <img src="assets/images/7.jpg" width="30px" height="418px" alt="Onix PowerBox" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Onix Elite 01 Headset Retract</h5>
                <p class="card-text"><strong>Rp129.000,-</strong></p>
                <p class="card-text">"Power Strip steker with 4 Socket & 8 USB Port Charger."</p>
                <a href="#" class="badge badge-info"><i class="fas fa-tags"></i>Category</a>
              </div>
              <div class="card-footer">
                <form action="">
                  <div class="input-group">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-info">Add to Cart</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
              <a class="page-link" href="home1.php">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="home1.php">Next</a></li>
          </ul>
        </nav>
        
      </div>
  <div class="col-md-3">
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
            <div class="card-header">
              Pencarian
            </div>
            <div class="card-body">
              <form action="">
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button class="btn btn-info">Cari</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            Kategori
          </div>
          
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Kategori</li>
              <li class="list-group-item">Kategori 1</li>
              <li class="list-group-item">Kategori 2</li>
            </ul>
          
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<footer class="section-footer mt-5 mb-4 border-top">
            <div class="container-fluid">
                <div class="row border-top justify-content-center align-items-center pt-1">
                    <div class="col-auto font-weight-light">
                    </br><h6>2020 Copyright COMMS.com ~ All rights reserved ( Online Shop )</h6>
                    </div>
                </div>
            </div>

        </div>
</footer>
<script src="assets/jquery/jquery-3.4.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
