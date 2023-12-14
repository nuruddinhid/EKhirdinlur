<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="icon" href="../assets/images/logo_sdm.png" type="image/x-icon">
    <title>Administrator</title>
</head>

<body class="text-gray-800 font-inter">
    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <?php include '../config/koneksi.php'; ?>    
        <?php include 'component/navbar.php'; ?>
        <?php include 'component/sidebar.php'; ?>
        <!-- start: Container -->
        <div class="container">
            <!-- Begin Page Content -->
            <?php
            if (isset($_GET['x'])) {
                switch ($_GET['x']) {
                    case 'datapengajuan':
                        include 'datapengajuan.php';
                        break;
                    case 'datapengajuansetuju':
                        include 'datapengajuanConfirm.php';
                        break;
                    case 'datapengajuantolak':
                        include 'datapengajuanReject.php';
                        break;
                    case 'datapengguna':
                        include 'datapengguna.php';
                        break;
                    case 'datapenggunacreate':
                        include 'datapenggunaCreate.php';
                        break;
                    case 'datapenggunaupdate':
                        include 'datapenggunaUpdate.php';
                        break;
                    case 'datapenggunadelete':
                        include 'datapenggunaDelete.php';
                        break;
                    case 'datagaji':
                        include 'datagaji.php';
                        break;
                    case 'datagajicreate':
                        include 'datagajiCreate.php';
                        break;
                    case 'datagajiupdate':
                        include 'datagajiUpdate.php';
                        break;
                    case 'datagajidelete':
                        include 'datagajiDelete.php';
                        break;
                }
            } else {
                include 'home.php';
            }
            ?>
            <!-- /.container-fluid -->
        </div>
        <!-- end: Container -->
    </main>
    <!-- end: Main -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="dist/js/script.js"></script>
</body>

</html>