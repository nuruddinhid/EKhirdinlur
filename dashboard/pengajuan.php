<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Formulir Pengajuan Pensiun</div>
        </div>
        <br>
        <form method="POST" enctype="multipart/form-data">
            <!-- Input Nama -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama">
                </div>
            </div>
            <!-- Input Pangkat -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="pangkat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat</label>
                    <input type="text" id="pangkat" name="pangkat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan pangkat  ">
                </div>
                <!-- Input PA/BA -->
                <div class="mb-6">
                    <label for="paba" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PA/BA</label>
                    <select id="paba" name="paba" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Pangkat</option>
                        <option value="Perwira">Perwira</option>
                        <option value="Bintara">Bintara</option>
                    </select>
                </div>
            </div>
            <!-- Input NRP -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="nrp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRP</label>
                    <input type="text" id="nrp" name="nrp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan NRP">
                </div>
            </div>
            <!-- Input Kesatuan Wilayah -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="satwil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesatuan
                        Wilayah</label>
                    <input type="text" name="satwil" id="satwil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kesatuan Wilayah">
                </div>
                <div class="mb-6">
                    <label for="satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                    <input type="text" name="satuan" id="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Satuan">
                </div>
            </div>
            <!-- Input ASABRI -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="asabri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ASABRI</label>
                    <input type="text" name="asabri" id="asabri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan ASABRI">
                </div>
            </div>
            <!-- Input NPWP -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="npwp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP</label>
                    <input type="text" name="npwp" id="npwp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan NPWP">
                </div>
            </div>
            <!-- Input KATMA -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="katma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KATMA</label>
                    <input type="text" name="katma" id="katma" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan KATMA">
                </div>
            </div>
            <!-- Input Tanggal lahir -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="tanggallahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                    <input type="date" name="tgllahir" id="tanggallahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Alamat -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Alamat Lengkap">
                </div>
            </div>
            <!-- Input Dusun -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="dusun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dusun</label>
                    <input type="text" name="dusun" id="dusun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Dusun">
                </div>
            </div>
            <!-- Input Kelurahan -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="kelurahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan</label>
                    <input type="text" name="kelurahan" id="kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kelurahan">
                </div>
            </div>
            <!-- Input Kecamatan -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kecamatan">
                </div>
            </div>
            <!-- Input Kabupaten -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="kabupaten" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten</label>
                    <input type="text" name="kabupaten" id="kabupaten" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kabupaten">
                </div>
            </div>
            <!-- Input Provinsi -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <input type="text" name="provinsi" id="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Provinsi">
                </div>
            </div>
            <!-- Input No. HP -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="notelp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                        HP</label>
                    <input type="text" name="notelp" id="notelp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan No. HP">
                </div>
            </div>
            <!-- Input Bank -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="bank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank</label>
                    <input type="text" name="bank" id="bank" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Bank">
                </div>
            </div>
            <!-- Input Tanggal Mulai PDH -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="tanggalpdh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Mulai PDH</label>
                    <input type="date" name="tglmpdh" id="tanggalpdh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Tanggal Mulai Pensiun -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="tanggalpensiun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai
                        Pensiun</label>
                    <input type="date" name="tglmpens" id="tanggalpensiun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Jumlah Anak -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="jmlanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                        Anak</label>
                    <input type="number" name="jmlanak" id="jmlanak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Jumlah Anak">
                </div>
            </div>
            <!-- Input Nama Anak -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="namaanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Anak</label>
                    <input type="text" name="nmanak" id="nmanak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Anak">
                </div>
            </div>
            <!-- Input Hubungan Anak -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hubungan
                        Anak</label>
                    <input type="text" name="hubanak" id="hubanak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Hubungan Anak">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Formulir/SPP</label>
                    <input name="formspp" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi/Salinan Kep
                        Pensiun</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        Kep Pengangkatan Pertama</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asli SKPP
                        dari BKN</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        Kartu ASABRI</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daftar
                        Riwayat Hidup</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        KK</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        KTP/SIM yang masih berlaku (Suami/Istri)</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asli Surat
                        Keterangan Kuliah (Jika anak dalam tanggungan masih kuliah)</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pas Foto
                        (4x6)</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Tombol Submit -->
            <div class="mb-6">
                <button type="submit" name="kirim" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Kirim
                </button>
            </div>
        </form>
        <?php
        include '../config/koneksi.php';
        if (isset($_POST['kirim'])) {

            //berkas
            $berkasformulirspp = $_FILES['formspp']['name'];
            $lokasiformulirspp = $_FILES['formspp']['tmp_name'];
            move_uploaded_file($lokasiformulirspp, "../berkas/formulirspp/" . $berkasformulirspp);

            //input ke dalam database
            $koneksi->query("INSERT INTO tb_pengajuan (nama, pangkat, paba, nrp, satwil, satker, asabri, npwp, katma, alamat, dusun, kelurahan, kecamatan, kabupaten, provinsi, berkas_formspp) VALUES ('$_POST[nama]','$_POST[pangkat]','$_POST[paba]','$_POST[nrp]','$_POST[satwil]','$_POST[satuan]','$_POST[asabri]','$_POST[npwp]','$_POST[katma]','$_POST[alamat]','$_POST[dusun]','$_POST[kelurahan]','$_POST[kecamatan]','$_POST[kabupaten]','$_POST[provinsi]','$berkasformulirspp')");
        }
        ?>
    </div>
</div>