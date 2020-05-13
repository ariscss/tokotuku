<!doctype html>
<html lang="en">

<head>
    <title>Member Baru</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  CSS custom -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="dist/fontawesome/css/all.min.css">
</head>

<body>
    <header></br>
        <div class="containers">
            <nav class="row navbar navbar-expand-lg navbar-light bg-white">
                <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                    <as href="index.html" class="navbar-brand">
                        <img src="assets/images/11.png" width="170px" alt="">
                        </a>
                </div>
                <ul class="navbar-nav mr-auto d-none d-lg-block">
                    <li>
                        <span class="text-muted">
                            | &nbsp; Toko Komputer
                        </span>
                    </li>
                </ul>
            </nav>
        </div>

    </header></br></br>
    <div class="col-lg-6 mx-auto">
        <div class="alert alert-warning" align="center" role="alert">
            Silahkan Isi Data Anda Terlebih Dahulu Untuk Bergabung ;)
        </div>
    </div>
    <main>
        <div class="col-lg-6 mx-auto">
            <div class="card border-info mb-3" style="max-width: 400rem;">
                <div class="card-header">
                    New Member
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="insert_member.php" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" name="password" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Masukkan Password Baru...">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Masukkan Nama Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat Pengguna</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Kota</label>
                                <input type="text" name="kota" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Masukkan Kota">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Telepon / HP</label>
                                <input type="text" name="telp" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Masukkan Nomor Telepon / HP Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">E-mail</label>
                                <input type="email" name="email" name="nama" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Masukkan Alamat E-mail Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Masukkan Pekerjaan Anda">
                            </div>
                            <div class="button text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-light">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form></br>

        </div>
        </div>
        </div>
        </div>
    </main>
    </br></br>
</body>

</html>