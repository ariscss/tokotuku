<?php
include "../lib/koneksi.php";

$nama = $_POST['namaBarang'];
$spesifikasi = $_POST['spesifikasi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$stok = $_POST['stok'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];

    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$gambar);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];


$sql = "INSERT INTO barang (nm_barang,spesifikasi,harga,gambar,stok,status,keterangan) VALUES ('$nama','$spesifikasi','$harga','$gambar','$stok','$status','$keterangan')";

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){
            move_uploaded_file($gambar_tmp, 'image/'.$gambar);
            if(mysqli_query($konek,$sql)){
                echo "<script>alert('Data berhasil ditambah.');window.location='barang.php';</script>";
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR' . mysqli_error($query);
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
