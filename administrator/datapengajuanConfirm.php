<?php
    $result =  $koneksi-> query("SELECT * FROM tb_pengajuan WHERE pengajuan_id = '$_GET[id]'");
    $pecah = $result->fetch_assoc();
        
    $koneksi->query("UPDATE `tb_pengajuan` SET `status_pengajuan` = 'Disetujui' WHERE `tb_pengajuan`.`pengajuan_id` = '$_GET[id]'");
    echo "<script> alert('Data Terkonfirmasi'); </script>";
    echo "<script> location='index.php?x=datapengajuan'; </script>";
?>