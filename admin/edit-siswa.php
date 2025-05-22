<h5 class="text-xl font-semibold mb-4">Halaman Edit Data Siswa</h5>
<a href="?url=siswa" class="inline-block mb-4 text-blue-600 hover:underline">KEMBALI</a>

<form method="post" action="url-proses-edit-siswa&nisn=<?= $nisn ?>" class="space-y-4">
<!-- NISN -->
    <div>
        <label class="block font-medium mb-1">NISN</label>
        <input value="<?= $data['nisn'] ?>" readonly type="number" name="nisn" class="w-full border border-gray-300 rounded px-3 py-2" required>
    </div>

<!-- NIS -->
    <div>
        <label class="block font-medium mb-1">NIS</label>
        <input value="<?= $data['nis'] ?>" type="number" name="nis" class="w-full border border-gray-300 rounded px-3 py-2" required>
    </div>

<!-- Nama -->
    <div>
        <label class="block font-medium mb-1">Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2" required>
    </div>

<!-- Kelas -->
    <div>
        <label class="block font-medium mb-1">Kelas</label>
        <select name="id_kelas" class="w-full border border-gray-300 rounded px-3 py-2" required>
            <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
            <?php
            include './koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY nama_kelas ASC");
            foreach ($kelas as $data_kelas) {
            echo "<option value='{$data_kelas['id_kelas']}'>{$data_kelas['nama_kelas']}</option>";
        } ?>
        </select>
    </div>

<!-- Alamat -->
    <div>
        <label class="block font-medium mb-1">Alamat</label>
        <textarea name="alamat" class="w-full border border-gray-300 rounded px-3 py-2" required><?= $data['alamat'] ?></textarea>
    </div>

<!-- No Telepon -->
    <div>
        <label class="block font-medium mb-1">No Telepon</label>
        <input value="<?= $data['no_telp'] ?>" type="text" name="no_telp" class="w-full border border-gray-300 rounded px-3 py-2" required>
    </div>

<!-- SPP -->
    <div>
        <label class="block font-medium mb-1">SPP</label>
        <select name="id_spp" class="w-full border border-gray-300 rounded px-3 py-2" required>
            <option value="<?= $data['id_spp'] ?>">
                <?= $data['tahun'] ?> | <?= number_format($data['nominal'], 2, ',', '.') ?>
            </option>
            <?php
            $spp = mysqli_query($koneksi, "SELECT * FROM spp ORDER BY id_spp ASC");
            foreach ($spp as $data_spp) {
            echo "<option value='{$data_spp['id_spp']}'>{$data_spp['tahun']} | " . number_format($data_spp['nominal'], 2, ',', '.') . "</option>";
            } ?>
        </select>
    </div>

<!-- Tombol -->
    <div class="flex gap-2">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">SIMPAN</button>
        <button type="reset" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">KOSONGKAN</button>
    </div>
</form>
