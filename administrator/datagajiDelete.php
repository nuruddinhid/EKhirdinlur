<?php
    include '../config/koneksi.php';
    $result =  $koneksi-> query("SELECT * FROM tb_gaji WHERE gaji_id = '$_GET[id]'");
    $pecah = $result->fetch_assoc();
    
    $koneksi->query("DELETE FROM tb_gaji WHERE gaji_id = '$_GET[id]'");
    echo "<script> alert('Data Terhapus'); </script>";
    echo "<script> location='index.php?x=datagaji'; </script>";
?>