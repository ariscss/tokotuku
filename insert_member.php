<?php
include "lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$pekerjaan = $_POST['pekerjaan'];

$sqlcek = "SELECT uname FROM member WHERE uname='$username'";
$hasil = mysqli_query($konek,$sqlcek);
$row = mysqli_fetch_assoc($hasil);

if ($username == $row['uname']) {
    echo "<script>alert('Data Sudah Ada.');window.location='new_member.php';</script>";
}else{
    $sql = "INSERT INTO member (uname,pswd,nama,alamat,kota,tlp,email,pekerjaan) VALUES ('$username','$password','$nama','$alamat','$kota','$telp','$email','$pekerjaan')";

    if (mysqli_query($konek,$sql)) {
        echo "<script>alert('Data Berhasil di tambahkan , Silahkan Login.');window.location='login.php';</script>";
    }else {
        echo "<script>alert('Gagal Mendaftar.');window.location='new_member.php';</script>";
    }
}



