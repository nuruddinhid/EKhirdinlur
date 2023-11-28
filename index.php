<?php 
	session_start();
    include 'config/koneksi.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!-- tailwind css -->
    <link rel="stylesheet" href="../assets/dist/output.css" />
    <!-- carousel -->
    <link rel="stylesheet" href="./vendor//OwlCarousel2-2.3.4//dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="./vendor//OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link rel="icon" href="assets/images/logo_sdm.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Khirdinlur</title>
</head>
<body>
<!-- Header -->
<?php include 'component/header.php'; ?>
<!-- End Header -->

<!-- Form Login -->
<div class="container mx-auto mt-8 p-8 bg-white rounded shadow-md max-w-md">
    <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>
    <form method="POST">
        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <button class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600" name="login">Login</button>
        </div>
    </form>
</div>

<!-- Footer -->
<?php include 'component/footer.php'; ?>
<!-- End Footer -->
<?php
    //login dashboard
    if(isset($_POST["login"])){
        //$email = $_POST['email'];
        //$password = $_POST['password'];
        //$query = mysqli_query($koneksi, "SELECT * FROM tb-user WHERE User_name='$email' AND User_password='$password'");
        $ambil = $koneksi->query("SELECT * FROM tb_user WHERE User_Email='$_POST[email]' AND User_password='$_POST[password]'");
        //menghitung akun yang cocok
        $akunyangcocok = $ambil->num_rows;
        if($akunyangcocok>0){
            $data = mysqli_fetch_assoc($ambil);

            if($data['User_Role']== "Admin"){
                $_SESSION['User_Email'] = $email;
                $_SESSION['User_Role'] = "Admin";
                header("Location: administrator/index.php");
            }else if($data['User_Role']== "User"){
                $_SESSION['User_Email'] = $email;
                $_SESSION['User_Role'] = "User";
                header("Location: Dashboard/index.php");
            }
        }else{
            echo "<script>alert('Login Gagal Email Tidak Ditemukan');</script>";
            echo "<script>location='index.php';</script>";
        }
    }
?>
</body>
</html> 