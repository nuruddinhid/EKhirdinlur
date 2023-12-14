<div class="p-6">
    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Status</div>
        </div>
        <div class="flex items-center mb-4 order-tab">
            <button type="button" data-tab="order" data-tab-page="dalamproses" class="bg-gray-50 text-sm font-medium text-gray-400 py-2 px-4 rounded-tl-md rounded-bl-md hover:text-gray-600 active">Dalam Proses</button>
            <button type="button" data-tab="order" data-tab-page="disetujui" class="bg-gray-50 text-sm font-medium text-gray-400 py-2 px-4 hover:text-gray-600">Disetujui</button>
            <button type="button" data-tab="order" data-tab-page="ditolak" class="bg-gray-50 text-sm font-medium text-gray-400 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-600">Ditolak</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[540px]" data-tab-for="order" data-page="dalamproses">
                <thead>
                    <tr>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">No</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Nama</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Nrp</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Satuan Wilayah</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Satuan Kerja</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $result = $koneksi->query("SELECT * FROM tb_pengajuan WHERE status_pengajuan = ' ' "); ?>
                    <?php while ($pecah = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="py-2 px-4 border-b border-b-gray-50 text-center">
                                <div class="flex items-center">
                                    <span class="text-[13px] font-medium text-gray-400"> <?php echo $nomor; ?> </span>
                                </div>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['nama']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['nrp']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['satwil']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['satker']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">In progress</span>
                            </td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php } ?>
                </tbody>
            </table>
            <table class="w-full min-w-[540px] hidden" data-tab-for="order" data-page="disetujui">
                <thead>
                    <tr>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">No</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Nama</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Nrp</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Satuan Wilayah</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Satuan Kerja</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $result = $koneksi->query("SELECT * FROM tb_pengajuan WHERE status_pengajuan = 'Disetujui'"); ?>
                    <?php while ($pecah = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="py-2 px-4 border-b border-b-gray-50 text-center">
                                <div class="flex items-center">
                                    <span class="text-[13px] font-medium text-gray-400"> <?php echo $nomor; ?> </span>
                                </div>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['nama']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['nrp']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['satwil']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['satker']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">In progress</span>
                            </td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php } ?>
                </tbody>
            </table>
            <table class="w-full min-w-[540px] hidden" data-tab-for="order" data-page="ditolak">
                <thead>
                    <tr>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">No</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Nama</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">NRP</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Satuan Wilayah</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Satuan Kerja</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">Status</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $result = $koneksi->query("SELECT * FROM tb_pengajuan WHERE status_pengajuan = 'Ditolak'"); ?>
                    <?php while ($pecah = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="py-2 px-4 border-b border-b-gray-50 text-center">
                                <div class="flex items-center">
                                    <span class="text-[13px] font-medium text-gray-400"> <?php echo $nomor; ?> </span>
                                </div>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['nama']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['nrp']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['satwil']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-400"> <?php echo $pecah['satker']; ?> </span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="inline-block p-1 rounded bg-rose-500/10 text-rose-500 font-medium text-[12px] leading-none">Canceled</span>
                            </td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>