<?php
include "lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sqlcek = "SELECT uname,pswd FROM member WHERE uname='$username' AND pswd='$password'";
$hasil = mysqli_query($konek,$sqlcek);

if (mysqli_num_rows($hasil)==1) {
    echo "<script>alert('anda berhasil login');window.location='login.php';</script>";
}else {
    echo "<script>alert('Gagal Login.');window.location='login.php';</script>";
}
