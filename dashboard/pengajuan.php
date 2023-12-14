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
                    <input type="text" id="nama" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan nama">
                </div>
            </div>
            <!-- Input Pangkat -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="pangkat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat</label>
                    <input type="text" id="pangkat" name="pangkat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan pangkat  ">
                </div>
                <!-- Input PA/BA -->
                <div class="mb-6">
                    <label for="paba" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PA/BA</label>
                    <select id="paba" name="paba"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                    <input type="text" id="nrp" name="nrp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan NRP">
                </div>
            </div>
            <!-- Input Kesatuan Wilayah -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="satwil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesatuan
                        Wilayah</label>
                    <input type="text" name="satwil" id="satwil"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Kesatuan Wilayah">
                </div>
                <div class="mb-6">
                    <label for="satuan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                    <input type="text" name="satuan" id="satuan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Satuan">
                </div>
            </div>
            <!-- Input ASABRI -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="asabri"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ASABRI</label>
                    <input type="text" name="asabri" id="asabri"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan ASABRI">
                </div>
            </div>
            <!-- Input NPWP -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="npwp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP</label>
                    <input type="text" name="npwp" id="npwp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan NPWP">
                </div>
            </div>
            <!-- Input KATMA -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="katma"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KATMA</label>
                    <input type="text" name="katma" id="katma"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan KATMA">
                </div>
            </div>
            <!-- Input Tanggal lahir -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="tanggallahir"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                    <input type="date" name="tgllahir" id="tgllahir"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Alamat -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="alamat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Alamat Lengkap">
                </div>
            </div>
            <!-- Input Dusun -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="dusun"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dusun</label>
                    <input type="text" name="dusun" id="dusun"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Dusun">
                </div>
            </div>
            <!-- Input Kelurahan -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="kelurahan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan</label>
                    <input type="text" name="kelurahan" id="kelurahan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Kelurahan">
                </div>
            </div>
            <!-- Input Kecamatan -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="kecamatan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Kecamatan">
                </div>
            </div>
            <!-- Input Kabupaten -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="kabupaten"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten</label>
                    <input type="text" name="kabupaten" id="kabupaten"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Kabupaten">
                </div>
            </div>
            <!-- Input Provinsi -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="provinsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                    <input type="text" name="provinsi" id="provinsi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Provinsi">
                </div>
            </div>
            <!-- Input No. HP -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="notelp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                        HP</label>
                    <input type="text" name="notelp" id="notelp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan No. HP">
                </div>
            </div>
            <!-- Input Bank -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="bank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank</label>
                    <input type="text" name="bank" id="bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Bank">
                </div>
            </div>
            <!-- Input Tanggal Mulai PDH -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="tanggalpdh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Mulai PDH</label>
                    <input type="date" name="tglmpdh" id="tanggalpdh"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Tanggal Mulai Pensiun -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="tanggalpensiun"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai
                        Pensiun</label>
                    <input type="date" name="tglmpens" id="tanggalpensiun"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Nama Istri/Suami-->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="nmsuamiistri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Suami/Istri</label>
                    <input type="text" name="nmsuamiistri" id="nmsuamiistri"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama Anak">
                </div>
                <!-- Input Tanggal Lahir Istri/Suami -->
                <div class="mb-6">
                    <label for="tanggallahirsuamiistri"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                    <input type="date" name="tgllahirsuamiistri" id="tgllahirsuamiistri"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Nama Anak 1-->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="nmanak1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Anak 1</label>
                    <input type="text" name="nmanak1" id="nmanak1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama Anak">
                </div>
                <!-- Input Tanggal Anak 1 -->
                <div class="mb-6">
                    <label for="tanggalanak1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                    <input type="date" name="tglanak1" id="tglanak1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Hubungan Anak 1 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hubungan
                        Anak 1</label>
                    <input type="text" name="hubanak1" id="hubanak1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Hubungan Anak">
                </div>
            </div>
            <!-- Input Nama Anak 2-->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="nmanak2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Anak 2</label>
                    <input type="text" name="nmanak2" id="nmanak2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama Anak">
                </div>
                <!-- Input Tanggal Anak 2 -->
                <div class="mb-6">
                    <label for="tanggalanak2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                    <input type="date" name="tglanak2" id="tglanak2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Hubungan Anak 2 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hubungan
                        Anak 2</label>
                    <input type="text" name="hubanak2" id="hubanak2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Hubungan Anak">
                </div>
            </div>
            <!-- Input Nama Anak 3-->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="nmanak3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Anak 3</label>
                    <input type="text" name="nmanak3" id="nmanak3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Nama Anak">
                </div>
                <!-- Input Tanggal Anak 3 -->
                <div class="mb-6">
                    <label for="tanggalanak3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                    <input type="date" name="tglanak3" id="tglanak3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <!-- Input Hubungan Anak 3 -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hubungan
                        Anak 3</label>
                    <input type="text" name="hubanak3" id="hubanak3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan Hubungan Anak">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Formulir/SPP</label>
                    <input name="formspp"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi/Salinan Kep
                        Pensiun</label>
                    <input name="keppensiun"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        Kep Pengangkatan Pertama</label>
                    <input name="keppengangkatan"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asli SKPP
                        dari BKN</label>
                    <input name="skpp"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        Kartu ASABRI</label>
                    <input name="asabri"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daftar
                        Riwayat Hidup</label>
                    <input name="riwayathidup"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        KK</label>
                    <input name="kartukeluarga"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fotokopi
                        KTP/SIM yang masih berlaku (Suami/Istri)</label>
                    <input name="ktpsim"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asli Surat
                        Keterangan Kuliah (Jika anak dalam tanggungan masih kuliah)</label>
                    <input name="suratketerangankuliah"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pas Foto
                        (4x6)</label>
                    <input name="pasfoto"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Input Berkas -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-6">
                    <label for="hubanak"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP</label>
                    <input name="npwp"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            <!-- Tombol Submit -->
            <div class="mb-6">
                <button type="submit" name="kirim"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Kirim
                </button>
            </div>
        </form>
        <?php
        include '../config/koneksi.php';
        if (isset($_POST['kirim'])) {

            $nama = $_POST['nama'];
            $pangkat = $_POST['pangkat'];
            $paba = $_POST['paba'];
            $nrp = $_POST['nrp'];
            $satwil = $_POST['satwil'];
            $satuan = $_POST['satuan'];
            $asabri = $_POST['asabri'];
            $npwp = $_POST['npwp'];
            $katma = $_POST['katma'];
            $tgllahir = date('Y-m-d', strtotime($_POST['tgllahir']));
            $alamat = $_POST['alamat'];
            $dusun = $_POST['dusun'];
            $kelurahan = $_POST['kelurahan'];
            $kecamatan = $_POST['kecamatan'];
            $kabupaten = $_POST['kabupaten'];
            $provinsi = $_POST['provinsi'];
            $bank = $_POST['bank'];
            $tglmpdh = date('Y-m-d', strtotime($_POST['tglmpdh']));
            $tglmpens = date('Y-m-d', strtotime($_POST['tglmpens']));
            $namasuamiistri = $_POST['nmsuamiistri'];
            $tgllahir_suamiistri = date('Y-m-d', strtotime($_POST['tgllahirsuamiistri']));
            $namaanak1 = $_POST['nmanak1'];
            $tgllahir_anak1 = date('Y-m-d', strtotime($_POST['tglanak1']));
            $hub_anak1 = $_POST['hubanak1'];
            $namaanak2 = $_POST['nmanak2'];
            $tgllahir_anak2 = date('Y-m-d', strtotime($_POST['tglanak2']));
            $hub_anak2 = $_POST['hubanak2'];
            $namaanak3 = $_POST['nmanak3'];
            $tgllahir_anak3 = date('Y-m-d', strtotime($_POST['tglanak3']));
            $hub_anak3 = $_POST['hubanak3'];

            //berkas form spp
            $berkasformulirspp = $_FILES['formspp']['name'];
            $lokasiformulirspp = $_FILES['formspp']['tmp_name'];
            move_uploaded_file($lokasiformulirspp, "../berkas/formulirspp/" . $berkasformulirspp);

            //berkas kep pensiun
            $berkaskeppensiun = $_FILES['keppensiun']['name'];
            $lokasikeppensiun = $_FILES['keppensiun']['tmp_name'];
            move_uploaded_file($lokasikeppensiun, "../berkas/keppensiun/" . $berkaskeppensiun);

            //berkas kep pengangkatan pertama
            $berkaskeppengangkatan = $_FILES['keppengangkatan']['name'];
            $lokasikeppengangkatan = $_FILES['keppengangkatan']['tmp_name'];
            move_uploaded_file($lokasikeppengangkatan, "../berkas/keppengangkatan/" . $berkaskeppengangkatan);

            //berkas SKPPP dari BKN
            $berkasskpp = $_FILES['skpp']['name'];
            $lokasiskpp = $_FILES['skpp']['tmp_name'];
            move_uploaded_file($lokasiskpp, "../berkas/skpp/" . $berkasskpp);

            //berkas ASABRI
            $berkasasabri = $_FILES['asabri']['name'];
            $lokasiasabri = $_FILES['asabri']['tmp_name'];
            move_uploaded_file($lokasiasabri, "../berkas/asabri/" . $berkasasabri);

            //berkas daftar riwayat hidup
            $berkasriwayathidup = $_FILES['riwayathidup']['name'];
            $lokasiriwayathidup = $_FILES['riwayathidup']['tmp_name'];
            move_uploaded_file($lokasiriwayathidup, "../berkas/riwayathidup/" . $berkasriwayathidup);

            //berkas kartu keluaraga
            $berkaskartukeluarga = $_FILES['kartukeluarga']['name'];
            $lokasikartukeluarga = $_FILES['kartukeluarga']['tmp_name'];
            move_uploaded_file($lokasikartukeluarga, "../berkas/kartukeluarga/" . $berkaskartukeluarga);

            //berkas ktp/sim
            $berkasktpsim = $_FILES['ktpsim']['name'];
            $lokasiktpsim = $_FILES['ktpsim']['tmp_name'];
            move_uploaded_file($lokasiktpsim, "../berkas/ktpsim/" . $berkasktpsim);

            //berkas surat keterangan kuliah
            $berkassuratketerangankuliah = $_FILES['suratketerangankuliah']['name'];
            $lokasisuratketerangankuliah = $_FILES['suratketerangankuliah']['tmp_name'];
            move_uploaded_file($lokasisuratketerangankuliah, "../berkas/suratketerangankuliah/" . $berkassuratketerangankuliah);

            //berkas Pas Foto
            $berkaspasfoto = $_FILES['pasfoto']['name'];
            $lokasipasfoto = $_FILES['pasfoto']['tmp_name'];
            move_uploaded_file($lokasipasfoto, "../berkas/pasfoto/" . $berkaspasfoto);
            
            //berkas NPWP
            $berkasnpwp = $_FILES['npwp']['name'];
            $lokasinpwp = $_FILES['npwp']['tmp_name'];
            move_uploaded_file($lokasinpwp, "../berkas/npwp/" . $berkasnpwp);
            
            //input ke dalam database
            $koneksi->query("INSERT INTO tb_pengajuan (nama, pangkat, paba, nrp, satwil, satker, asabri, npwp, katma, tgllahir, alamat, dusun, kelurahan, kecamatan, kabupaten, provinsi, bank, tglmpdh, tglmpens, nmistri, tgllahir_istri, nmanak1, tgllahir_anak1, hubanak1, nmanak2, tgllahir_anak2, hubanak2, nmanak3, tgllahir_anak3, hubanak3, berkas_formspp, berkas_keppensiun, berkas_keppengangkatanpertama, berkas_skpp, berkas_asabri, berkas_riwayathidup, berkas_kk, berkas_ktpsim, berkas_suketkuliah, berkas_pasfoto, berkas_npwp) VALUES ('$nama','$pangkat','$paba','$nrp','$satwil','$satuan','$asabri','$npwp','$katma','$tgllahir','$alamat','$dusun','$kelurahan','$kecamatan','$kabupaten','$provinsi','$bank','$tglmpdh','$tglmpens', '$namasuamiistri', '$tgllahir_suamiistri', '$namaanak1', '$tgllahir_anak1', '$hub_anak1', '$namaanak2', '$tgllahir_anak2', '$hub_anak2', '$namaanak3', '$tgllahir_anak3', '$hub_anak3', '$berkasformulirspp', '$berkaskeppensiun', '$berkaskeppengangkatan', '$berkasskpp', '$berkasasabri', '$berkasriwayathidup', '$berkaskartukeluarga', '$berkasktpsim', '$berkassuratketerangankuliah', '$berkaspasfoto', '$berkasnpwp')");
        }
        ?>
    </div>
</div>