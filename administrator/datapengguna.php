<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Data Pengguna</div>
        </div>
        <div>
            <a href="index.php?x=datapenggunacreate" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
                            Email</th>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                            Satuan Wilayah</th>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                            Satuan Kerja</th>
                        <th
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-center rounded-tr-md rounded-br-md">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../config/koneksi.php'; ?>
                    <?php $nomor = 1; ?>
                    <?php $result = $koneksi->query("SELECT * FROM tb_user WHERE User_Role = 'User'"); ?>
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
                                    <?php echo $pecah['User_Email']; ?>
                                </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">    
                                    <?php echo $pecah['User_Satwil']; ?>
                                </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400">    
                                    <?php echo $pecah['User_Satker']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>