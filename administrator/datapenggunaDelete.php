<?php
    include '../config/koneksi.php';
    $result =  $koneksi-> query("SELECT * FROM tb_user WHERE User_ID = '$_GET[id]'");
    $pecah = $result->fetch_assoc();
    
    $koneksi->query("DELETE FROM tb_user WHERE User_ID = '$_GET[id]'");
    echo "<script> alert('Data Terhapus'); </script>";
    echo "<script> location='index.php?x=datapengguna'; </script>";
?>