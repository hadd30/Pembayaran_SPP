<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<div>
    <div>
        <h5 class="text-semibold mb-3 text-xl font-semibold">Halaman Data SPP</h5>
        <a href="?url=tambah-spp" class="text-xs bg-green-700 text-white p-2 rounded-sm hover:bg-green-600 transition">Tambah SPP</a>
    </div>

    <hr class="text-slate-300 mt-6">

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tahun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hapus
                    </th>
                </tr>
            </thead>

            <?php
            include'koneksi.php';
            $no = 1;
            $sql = "SELECT*FROM spp ORDER BY id_spp DESC";
            $query = mysqli_query($koneksi, $sql);
            foreach($query as $data){ ?>
                <tr class="bg-white dark:bg-slate-800">
                    <td class="px-3 py-3"><?= $no++; ?></td>
                    <td class="px-3 py-3"><?= $data['tahun'] ?></td>
                    <td class="px-3 py-3"><?= $data['nominal'] ?></td>
                    <td>
                        <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class="text-xs p-2 text-white bg-blue-600 hover:bg-blue-800 transition rounded px-3 py-3">EDIT</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?url=hapus-spp&id_spp=<? $data['id_spp'] ?>" class="text-xs p-2 text-white bg-red-600 hover:bg-red-800 transition rounded py-3 px-3">HAPUS</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>