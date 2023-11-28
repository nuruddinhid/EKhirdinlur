<?php
    $host = "localhost";//nama host
    $user = "root";//nama user
    $pass = "";//password
    $db = "db_sdm-khirdinlur";//nama database

    //membuat koneksi
    $koneksi = mysqli_connect($host, $user, $pass, $db);
    if(!$koneksi){
        die("Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error());
    }
?>