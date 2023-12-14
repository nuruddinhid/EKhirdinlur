<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Data Gaji</div>
        </div>
        <div>
            <a href="index.php?x=datagajicreate" data-modal-target="default-modal" data-modal-toggle="default-modal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah
            </a>
        </div>
        <br>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[540px]" data-tab-for="order">
                <thead>
                    <tr>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                            No.</th>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                            Pangkat</th>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                            MKG</th>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-center rounded-tr-md rounded-br-md">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../config/koneksi.php'; ?>
                    <?php $nomor = 1; ?>
                    <?php $result = $koneksi->query("SELECT * FROM tb_gaji"); ?>
                    <?php while ($pecah = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="py-2 px-4 border-b border-b-gray-50 text-center">
                                <div class="flex items-center">
                                    <span class="text-[13px] font-medium text-gray-400">
                                        <?php echo $nomor; ?>
                                    </span>
                                </div>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">
                                    <?php $pangkat = $pecah['pangkat_ID'];
                                    if ($pangkat == 1) {
                                        echo 'AKBP';
                                    }else if ($pangkat == 2) {
                                        echo 'KOMPOL';
                                    }else if ($pangkat == 3) {
                                        echo 'AKP';
                                    }else if ($pangkat == 4) {
                                        echo 'IPTU';
                                    }else if ($pangkat == 5) {
                                        echo 'IPDA';
                                    }else if ($pangkat == 6) {
                                        echo 'AIPTU';
                                    }else if ($pangkat == 7) {
                                        echo 'AIPDA';
                                    }else if ($pangkat == 8) {
                                        echo 'BRIPKA';
                                    }else if ($pangkat == 9) {
                                        echo 'BRIGADIR';
                                    }
                                    ?>
                                </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">
                                    <?php echo $pecah['gaji_MKG']; ?>
                                </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50 text-center">
                                <a
                                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                <a href="index.php?x=datagajidelete&id=<?php echo $pecah['gaji_id']; ?>"
                                    onclick="return confirm('Apakah Anda Yakin ?');"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
                            </td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>