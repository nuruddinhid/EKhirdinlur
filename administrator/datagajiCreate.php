<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Data Gaji</div>
        </div>
        <br>
        <form method="POST" enctype="multipart/form-data">
            <!-- Input Pangkat -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="pangkat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat</label>
                    <select id="pangkat" name="pangkat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Pangkat</option>
                        <option value="1">AKBP</option>
                        <option value="2">KOMPOL</option>
                        <option value="3">AKP</option>
                        <option value="4">IPTU</option>
                        <option value="5">IPDA</option>
                        <option value="6">AIPTU</option>
                        <option value="7">AIPDA</option>
                        <option value="8">BRIPKA</option>
                        <option value="9">BRIGADIR</option>
                    </select>
                </div>
            </div>
            <!-- Input MKG -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="mkg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MKG</label>
                    <select id="mkg" name="mkg"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih MKG</option>
                        <option value="32">32</option>
                        <option value="31">31</option>
                        <option value="30">30</option>
                        <option value="29">29</option>
                        <option value="28">28</option>
                        <option value="27">27</option>
                        <option value="26">26</option>
                    </select>
                </div>
            </div>
            <!-- Input GPT -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="gpt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GPT</label>
                    <input type="text" id="gpt" name="gpt"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan GPT">
                </div>
            </div>
            <!-- Input SIUN -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="siun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SIUN</label>
                    <input type="text" id="siun" name="siun"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan SIUN">
                </div>
            </div>
            <!-- Input JANDA -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="janda"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">JANDA</label>
                    <input type="text" id="janda" name="janda"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan JANDA">
                </div>
            </div>
            <!-- Input Y/P 1 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="y/p1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Yatim/Piatu
                        1</label>
                    <input type="text" id="yorp1" name="yorp1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Yatim/Piatu 1">
                </div>
            </div>
            <!-- Input Y/P 2 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="y/p2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Yatim/Piatu
                        2</label>
                    <input type="text" id="yorp2" name="yorp2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Yatim/Piatu 2">
                </div>
            </div>
            <!-- Input Y-P 1 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="y-p1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Yatim-Piatu
                        1</label>
                    <input type="text" id="ynp1" name="ynp1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Yatim-Piatu 1">
                </div>
            </div>
            <!-- Input Y-P 2 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="y-p2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Yatim-Piatu
                        2</label>
                    <input type="text" id="ynp2" name="ynp2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Yatim-Piatu 2">
                </div>
            </div>
            <!-- Tombol Submit -->
            <div class="mb-6">
                <button type="submit" name="tambah"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Tambah
                </button>
            </div>
        </form>
        <?php
        include '../config/koneksi.php';
        if (isset($_POST['tambah'])) {

            $koneksi->query("
                INSERT INTO tb_gaji (pangkat_ID, gaji_MKG, gaji_GPT, gaji_JANDA, gaji_yorp1, gaji_yorp2, gaji_ynp1, gaji_ynp2)
                VALUES ('$_POST[pangkat]', '$_POST[mkg]', '$_POST[gpt]', '$_POST[janda]', '$_POST[yorp1]', '$_POST[yorp2]', '$_POST[ynp1]', '$_POST[ynp2]')
            ");

            echo "<script> alert('Data berhasil ditambahkan'); </script>";
            echo "<script> location='index.php?x=datagaji'; </script>";
        }
        ?>
    </div>
</div>