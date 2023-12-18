<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pengajuan = $_GET['id'];
    $keterangan_tolak = $_POST['keterangan_tolak'];

    $koneksi->query("UPDATE `tb_pengajuan` SET `status_pengajuan` = 'Ditolak', `keterangan_tolak` = '$keterangan_tolak' WHERE `tb_pengajuan`.`pengajuan_id` = '$id_pengajuan'");

    echo "<script> alert('Data Ditolak'); </script>";
    echo "<script> location='index.php?x=datapengajuan'; </script>";
} else {
    // Jika akses langsung ke proses_tolak.php tanpa metode POST, redirect ke halaman lain atau beri pesan kesalahan.
    header("Location: index.php");
}
?>
