<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="../dist/css/floating-labels.css" rel="stylesheet">
    
  </head>
  <body>

    <form class="form-signin" action="dashboard.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://cf.shopee.co.id/file/be75cee953885e95681fccf95a66fa5b" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
        <p>Selamat Datang Silahkan Login Terlebih Dahulu</p>
      </div>

      <div class="form-label-group">
        <input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <button class="btn btn-lg btn-info btn-block" type="submit">Masuk</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; TokoTuku 2020</p>
    </form>

<?php include_once "view/footer.php"; ?>