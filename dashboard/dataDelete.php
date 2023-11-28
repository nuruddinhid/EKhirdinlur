<?php
    include '../config/koneksi.php';
    $result =  $koneksi-> query("SELECT * FROM tb_pengajuan WHERE pengajuan_id = '$_GET[id]'");
    $pecah = $result->fetch_assoc();
    $berkasformulirspp = $pecah['berkas_formspp'];
    
    if(file_exists("../berkas/formulirspp/$berkasformulirspp")){
        unlink("../berkas/formulirspp/$berkasformulirspp");
    }

    
    $koneksi->query("DELETE FROM tb_pengajuan WHERE pengajuan_id = '$_GET[id]'");
    echo "<script> alert('Data Terhapus'); </script>";
    echo "<script> location='index.php?x=data'; </script>";
?>