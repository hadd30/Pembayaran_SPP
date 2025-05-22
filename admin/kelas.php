<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<h5 class="text-xl font-semibold mb-4">Halaman Data Kelas</h5>
<a href="?url=tambah-kelas" class="text-xs bg-green-700 text-white p-2 rounded-sm hover:bg-green-600 transition">Tambah Kelas</a>
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

    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM kelas ORDER BY id_kelas DESC";
        $query = mysqli_query($koneksi, $sql);
        foreach($query as $data) {
        ?>
        <tr class="border-t">
            <td class="border px-4 py-2"><?= $no++; ?></td>
            <td class="border px-4 py-2"><?= $data['nama_kelas'] ?></td>
            <td class="border px-4 py-2"><?= $data['kompetensi_keahlian'] ?></td>
            <td class="border px-4 py-2">
                <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition">EDIT</a>
            </td>
            <td class="border px-4 py-2">
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas'] ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">HAPUS</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
