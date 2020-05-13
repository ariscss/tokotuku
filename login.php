<!doctype html>
<html lang="en">

<head>
    <title>Login Member</title>
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
    <header></br></br>
        <div class="containers1">
            <nav class="row navbar navbar-expand-lg navbar-light bg-white">
                <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                    <a href="index.html" class="navbar-brand">
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
            </nav></br>
            <div class="col-lg-4 mx-auto">
                <div class="alert alert-primary" align="center" role="alert">
                    Selamat Datang, Silahkan Login Terlebih Dahulu ;)
                </div>
            </div>
        </div>
    </header>


    <main>
        <div class="col-lg-5 mx-auto">
            <div class="card border-primary mb-3" style="max-width: 300rem;">
                <div class="card-header text-white bg-info">
                    Login Member
                </div>
                <div class="card-body">
                    <div class="container">
                            <div class="form-group">
                        <form action="cek_login.php" method="post">
                                <label for="exampleFormControlInput1">Username </label>
                                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="button text-center">
                                <button type="submit" class="btn btn-info">Masuk</button>
                                <button type="reset" class="btn btn-light">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p align="center">Tidak Punya Akun ?<b>
                <font color="teal"><a href="new_member.php"> Buat Akun
            </b></p>
    </main>

</body>

</html>