<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "tokoonline";

    $konek = mysqli_connect($server,$user,$password,$db);

    if (!$konek) {
        die ("Koneksi gagal" . mysql_connect_error());
    }

?>