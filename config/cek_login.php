<?php
    // mengaktifkan session pada php
    session_start();

    // menghubungkan php dengan koneksi database
    include 'config/koneksi.php';

    // menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE User_name='$email' AND User_password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    // cek apakah username dan password di temukan pada database
    if($cek> 0){
        $data = mysqli_fetch_assoc($login);

        // cek jika user login sebagai admin
        if($data['User_Role']=="admin"){
            // buat session login dan username
            $_SESSION['User_Name'] = $email;
            $_SESSION['User_Role'] = "admin";
            // alihkan ke halaman dashboard admin
            header("Location: ./administrator/index.php");

        // cek jika user login sebagai user
        }else if($data['User_Role']=="user"){
            // buat session login dan username
            $_SESSION['User_Name'] = $email;
            $_SESSION['User_Role'] = "user";
            // alihkan ke halaman dashboard user
            header("Location: ./dashboard/index.php");
        }else{
            echo "<script>alert('Login Gagal');</script>";
        }
    }else{
        echo "<script>alert('Login Gagal');</script>";
    }
?>