<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Lihat Data</div>
        </div>
        <div class="overflow-x-auto">
            <div class="relative overflow-x-auto">
                <?php
                $id_pengajuan = $_GET['id'];

                $ambil = $koneksi->query("SELECT * FROM tb_pengajuan JOIN tb_gaji ON tb_pengajuan.gaji_MKG=tb_gaji.gaji_MKG AND tb_pengajuan.pangkat_name=tb_gaji.pangkat_name WHERE pengajuan_id='$id_pengajuan'");
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
                        <!-- Akhir Bulan Mulai Pensiun -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal Mulai Pensiun
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['tglmpens'];
                                $tanggal_mpens = $pecah['tglmpens'];
                                echo month(date("n", strtotime($tanggal_mpens))) . " " . date("Y", strtotime($tanggal_mpens));
                                ?>
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
                        <!-- GPT -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                GPT
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['gaji_GPT'];
                                $gajigpt = $pecah['gaji_GPT'];
                                $angka_format = number_format($gajigpt, 0, ',', '.');
                                echo 'Rp. '.$angka_format;
                                ?>
                            </td>
                        </tr>
                        <!-- SIUN -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tunjangan Pensiun
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['gaji_SIUN'];
                                $gajisiun = $pecah['gaji_SIUN'];
                                $angka_format = number_format($gajisiun, 0, ',', '.');
                                echo 'Rp. '.$angka_format;
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
                        <!-- SIUN Istri -->
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pensiun Pokok Warakawuri/Duda
                            </th>
                            <td class="px-8 py-4">
                                <?php
                                $pecah['gaji_JANDA'];
                                $gajisuamiistri = $pecah['gaji_JANDA'];
                                $angka_format = number_format($gajisuamiistri, 0, ',', '.');
                                echo $angka_format;
                                ?>
                            </td>
                        </tr>
                        <!-- Anak 1 -->
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
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tunjangan Anak 1 Yatim/Piatu
                                </th>
                                <td class="px-8 py-4">
                                    <?php
                                    $pecah['gaji_yorp1'];
                                    $gajiyorp1 = $pecah['gaji_yorp1'];
                                    $angka_format = number_format($gajiyorp1, 0, ',', '.');
                                    echo 'Rp. '.$angka_format;
                                    ?>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tunjangan Anak 1 Yatim-Piatu
                                </th>
                                <td class="px-8 py-4">
                                    <?php
                                    $pecah['gaji_ynp1'];
                                    $gajiynp1 = $pecah['gaji_ynp1'];
                                    $angka_format = number_format($gajiynp1, 0, ',', '.');
                                    echo 'Rp. '.$angka_format;?>
                                </td>
                            </tr>
                        <?php endif; ?>

                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>