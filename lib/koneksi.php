<?php
    $server = "localhost";
    $user = "root";
    $password = "secret";
    $db = "onlinetoko";

    $konek = mysqli_connect($server,$user,$password,$db);

    if (!$konek) {
        die ("Koneksi gagal" . mysql_connect_error());
    }

?>