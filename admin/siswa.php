<h5 class="text-xl font-semibold mb-4">Halaman Data Siswa</h5>
<a href="?url=tambah-siswa" class="text-xs bg-green-700 text-white p-2 rounded-sm hover:bg-green-600 transition">
    Tambah Siswa
</a>
<hr class="text-slate-300 mt-6">

<div class="overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NISN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kelas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No-Telp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SPP
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
            include './koneksi.php';
            $no = 1;
            $sql = "SELECT * FROM siswa, spp, kelas 
                    WHERE siswa.id_kelas = kelas.id_kelas 
                    AND siswa.id_spp = spp.id_spp 
                    ORDER BY nama ASC";
            $query = mysqli_query($koneksi, $sql);
            foreach ($query as $data) {
            ?>
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2"><?= $no++; ?></td>
                <td class="border px-4 py-2"><?= $data['nis']; ?></td>
                <td class="border px-4 py-2"><?= $data['nisn']; ?></td>
                <td class="border px-4 py-2"><?= $data['nama']; ?></td>
                <td class="border px-4 py-2"><?= $data['nama_kelas']; ?></td>
                <td class="border px-4 py-2"><?= $data['alamat']; ?></td>
                <td class="border px-4 py-2"><?= $data['no_telp']; ?></td>
                <td class="border px-4 py-2">
                    <?= $data['tahun']; ?> - Rp<?= number_format($data['nominal'], 2, ',', '.'); ?>
                </td>
                <td class="border px-4 py-2">
                    <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition">
                        EDIT
                    </a>
                </td>
                <td class="border px-4 py-2">
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                        HAPUS
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
