<?php
$ambil = $koneksi->query("SELECT * FROM tb_user WHERE User_ID='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Data Pengguna</div>
        </div>
        <br>
        <form method="POST" enctype="multipart/form-data">
            <!-- Satker -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <span class="text-[14px] font-medium text-gray-400">
                        <?php echo $pecah['User_Email']; ?>
                    </span>
                </div>
            </div>
            <!-- Satker -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Satker</label>
                    <span class="text-[14px] font-medium text-gray-400">
                        <?php echo $pecah['User_Satker']; ?>
                    </span>
                </div>
            </div>
            <!-- Satker -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Satwil</label>
                    <span class="text-[14px] font-medium text-gray-400">
                        <?php echo $pecah['User_Satwil']; ?>
                    </span>
                </div>
            </div>
            <!-- Input Password -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                        Pengguna</label>
                    <input type="text" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Password Pengguna">
                </div>
            </div>
            
            <!-- Tombol Submit -->
            <div class="mb-6">
                <button type="submit" name="ubah"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Ubah
                </button>
            </div>
        </form>
        <?php
        include '../config/koneksi.php';
        if (isset($_POST['ubah'])) {
            $password = $_POST['password'];

            $koneksi->query("UPDATE tb_user SET User_Password='$password' WHERE User_ID = '$_GET[id]'");

            echo "<script> alert('Data berhasil ditambahkan'); </script>";
            echo "<script> location='index.php?x=datapengguna'; </script>";
        }
        ?>
    </div>
</div>