<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Detail Data</div>
        </div>
        <div class="overflow-x-auto">
            <div class="relative overflow-x-auto">
                <?php
                $id_pengajuan = $_GET['id'];

                $ambil = $koneksi->query("SELECT * FROM tb_pengajuan WHERE pengajuan_id='$id_pengajuan'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tbody>
                        <!-- Nama -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['nama']; ?>
                            </td>
                        </tr>
                        <!-- Pangkat -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pangkat
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['pangkat_name']; ?>
                            </td>
                        </tr>
                        <!-- PA/BA -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                PA/BA
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['paba']; ?>
                            </td>
                        </tr>
                        <!-- NRP -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                NRP
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['nrp']; ?>
                            </td>
                        </tr>
                        <!-- Jabatan -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Jabatan
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['jabatan']; ?>
                            </td>
                        </tr>
                        <!-- Satuan Wilayah -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Satuan Wilayah
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['satwil']; ?>
                            </td>
                        </tr>
                        <!-- Satuan Kerja -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Satuan Kerja
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['satker']; ?>
                            </td>
                        </tr>
                        <!-- ASABRI -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Asabri
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['asabri']; ?>
                            </td>
                        </tr>
                        <!-- NPWP -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                NPWP
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['npwp']; ?>
                            </td>
                        </tr>
                        <!-- Katma -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pengangkatan Pertama
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['katma'];
                                $tanggal_katma = $pecah['katma'];
                                echo date("d", strtotime($tanggal_katma)) . " " . month(date("n", strtotime($tanggal_katma))) . " " . date("Y", strtotime($tanggal_katma));
                                ?>
                            </td>
                        </tr>
                        <!-- Tanggal Lahir -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal Lahir
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['tgllahir'];
                                $tanggal_lahir = $pecah['tgllahir'];
                                echo date("d", strtotime($tanggal_lahir)) . " " . month(date("n", strtotime($tanggal_lahir))) . " " . date("Y", strtotime($tanggal_lahir));
                                ?>
                            </td>
                        </tr>
                        <!-- Alamat -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Alamat
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['alamat']; ?>
                            </td>
                        </tr>
                        <!-- Dusun -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Dusun
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['dusun']; ?>
                            </td>
                        </tr>
                        <!-- Kelurahan -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Kelurahan
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['kelurahan']; ?>
                            </td>
                        </tr>
                        <!-- Kecamatan -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Kecamatan
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['kecamatan']; ?>
                            </td>
                        </tr>
                        <!-- Kabupaten -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Kabupaten
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['kabupaten']; ?>
                            </td>
                        </tr>
                        <!-- Provinsi -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Provinsi
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['provinsi']; ?>
                            </td>
                        </tr>
                        <!-- Bank -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Bank
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['bank']; ?>
                            </td>
                        </tr>
                        <!-- Tanggal Mulai PDH -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal Mulai PDH
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['tglmpdh'];
                                $tanggal_mpdh = $pecah['tglmpdh'];
                                echo date("d", strtotime($tanggal_mpdh)) . " " . month(date("n", strtotime($tanggal_mpdh))) . " " . date("Y", strtotime($tanggal_mpdh));
                                ?>
                            </td>
                        </tr>
                        <!-- Tanggal Mulai Pensiun -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal Mulai Pensiun
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['tglmpens'];
                                $tanggal_mpens = $pecah['tglmpens'];
                                echo date("d", strtotime($tanggal_mpens)) . " " . month(date("n", strtotime($tanggal_mpens))) . " " . date("Y", strtotime($tanggal_mpens));
                                ?>
                            </td>
                        </tr>
                        <!-- MKG -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                MKG
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['gaji_MKG'];
                                ?>
                            </td>
                        </tr>
                        <!-- Nama Suami/Istri -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama Suami/Istri
                            </th>
                            <td class="px-8 py-4">
                                <?php echo $pecah['nmsuamiistri']; ?>
                            </td>
                        </tr>
                        <!-- Tanggal Lahir Suami/Istri -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal Lahir Suami/Istri
                            </th>
                            <td class="px-8 py-4">
                                <?php $pecah['tgllahir_suamiistri'];
                                $tanggal_lahirsuamiistri = $pecah['tgllahir_suamiistri'];
                                echo date("d", strtotime($tanggal_lahirsuamiistri)) . " " . month(date("n", strtotime($tanggal_lahirsuamiistri))) . " " . date("Y", strtotime($tanggal_lahirsuamiistri));
                                ?>
                            </td>
                        </tr>
                        <?php if (!empty($pecah['nmanak1'])): ?>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nama Anak 1
                                </th>
                                <td class="px-8 py-4">
                                    <?php echo $pecah['nmanak1']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Lahir Anak 1
                                </th>
                                <td class="px-8 py-4">
                                    <?php
                                    $pecah['tgllahir_anak1'];
                                    $tanggal_lahiranak1 = $pecah['tgllahir_anak1'];
                                    echo date("d", strtotime($tanggal_lahiranak1)) . " " . month(date("n", strtotime($tanggal_lahiranak1))) . " " . date("Y", strtotime($tanggal_lahiranak1));
                                    ?>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Hubungan Anak 1
                                </th>
                                <td class="px-8 py-4">
                                    <?php echo $pecah['hubanak1']; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($pecah['nmanak2'])): ?>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nama Anak 2
                                </th>
                                <td class="px-8 py-4">
                                    <?php echo $pecah['nmanak2']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Lahir Anak 2
                                </th>
                                <td class="px-8 py-4">
                                    <?php
                                    $pecah['tgllahir_anak2'];
                                    $tanggal_lahiranak2 = $pecah['tgllahir_anak2'];
                                    echo date("d", strtotime($tanggal_lahiranak2)) . " " . month(date("n", strtotime($tanggal_lahiranak2))) . " " . date("Y", strtotime($tanggal_lahiranak2));
                                    ?>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Hubungan Anak 2
                                </th>
                                <td class="px-8 py-4">
                                    <?php echo $pecah['hubanak2']; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($pecah['nmanak3'])): ?>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nama Anak 3
                                </th>
                                <td class="px-8 py-4">
                                    <?php echo $pecah['nmanak3']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Lahir Anak 3
                                </th>
                                <td class="px-8 py-4">
                                    <?php
                                    $pecah['tgllahir_anak3'];
                                    $tanggal_lahiranak3 = $pecah['tgllahir_anak3'];
                                    echo date("d", strtotime($tanggal_lahiranak3)) . " " . month(date("n", strtotime($tanggal_lahiranak3))) . " " . date("Y", strtotime($tanggal_lahiranak3));
                                    ?>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Hubungan Anak 3
                                </th>
                                <td class="px-8 py-4">
                                    <?php echo $pecah['hubanak3']; ?>
                                </td>
                            </tr>
                        <?php endif; ?>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan Formulir SPP
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_formspp'])): ?>
                                    <a href="../berkas/formulirspp/<?php echo $pecah['berkas_formspp']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan Kep Pensiun
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_keppensiun'])): ?>
                                    <a href="../berkas/keppensiun/<?php echo $pecah['berkas_keppensiun']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan Pengangkatan Pertama
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_keppengangkatanpertama'])): ?>
                                    <a href="../berkas/keppengangkatan/<?php echo $pecah['berkas_keppengangkatanpertama']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan SKPP dari BKN
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_skpp'])): ?>
                                    <a href="../berkas/skpp/<?php echo $pecah['berkas_skpp']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan ASABRI
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_asabri'])): ?>
                                    <a href="../berkas/asabri/<?php echo $pecah['berkas_asabri']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan Daftar Riwayat Hidup
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_riwayathidup'])): ?>
                                    <a href="../berkas/riwayathidup/<?php echo $pecah['berkas_riwayathidup']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan Kartu Keluarga
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_kk'])): ?>
                                    <a href="../berkas/kartukeluarga/<?php echo $pecah['berkas_kk']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan KTP/SIM
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_ktpsim'])): ?>
                                    <a href="../berkas/ktpsim/<?php echo $pecah['berkas_ktpsim']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan Surat Keterangan Kuliah
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_suketkuliah'])): ?>
                                    <a href="../berkas/suratketerangankuliah/<?php echo $pecah['berkas_suketkuliah']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Pas Foto
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_pasfoto'])): ?>
                                    <a href="../berkas/pasfoto/<?php echo $pecah['berkas_pasfoto']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berkas Scan NPWP
                            </th>
                            <td class="px-8 py-4">
                                <?php if (!empty($pecah['berkas_npwp'])): ?>
                                    <a href="../berkas/npwp/<?php echo $pecah['berkas_npwp']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                        download>Unduh</a>
                                <?php else: ?>
                                    <span
                                        class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Belum
                                        diupload</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br><br>
        <div class="mb-6">
            <a href="index.php?x=datapengajuansetuju&id=<?php echo $pecah['pengajuan_id']; ?>"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Konfirmasi
            </a>
            <a data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                Tolak
            </a>
            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Keterangan ditolak
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="post" action="index.php?x=datapengajuantolak&id=<?php echo $pecah['pengajuan_id']; ?>" class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <textarea id="keterangan_tolak" name="keterangan_tolak" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Keterangan"></textarea>
                                </div>
                            </div>
                            <button type="submit" name="kirim"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                                Tolak
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>