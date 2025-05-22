<h5 class="text-xl font-bold mb-4">Halaman Tambah Data Siswa</h5>
<a href="?url=siswa" class="text-xs bg-green-700 text-white p-2 rounded-sm hover:bg-green-600 transition">KEMBALI</a>
<hr class="text-slate-300 mt-6">

<form method="post" action="?url=proses-tambah-siswa" class="space-y-4">
    <!-- NISN -->
    <div>
        <label class="block text-sm font-medium mb-1">NISN</label>
        <input type="number" name="nisn" required name="nisn" id="nisn" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- NIS -->
    <div>
        <label class="block text-sm font-medium mb-1">NIS</label>
        <input type="number" name="nis" required name="nis" id="nis" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Nama -->
    <div>
        <label class="block text-sm font-medium mb-1">Nama</label>
        <input type="text" name="nama" required name="nama" id="nama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <!-- Kelas -->
    <div>
        <label class="block text-sm font-medium mb-1">Kelas</label>
        <select name="id_kelas" required name="id_kelas" id="id_kelas" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">Pilih Kelas</option>
            <?php
            include 'koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas) {
            ?>
            <option value="<?= $data_kelas['id_kelas'] ?>">
                <?= $data_kelas['nama_kelas'] ?>
            </option>
            <?php } ?>
        </select>
    </div>

    <!-- Alamat -->
    <div>
        <label class="block text-sm font-medium mb-1">Alamat</label>
        <textarea name="alamat" required name="alamat" id="alamat" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <!-- SPP -->
    <div>
        <label class="block text-sm font-medium mb-1">SPP</label>
        <select name="id_spp" required name="" id="" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">Pilih SPP</option>
            <?php
            $spp = mysqli_query($koneksi, "SELECT * FROM spp ORDER BY id_spp ASC");
            foreach($spp as $data_spp) {
            ?>
            <option value="<?= $data_spp['id_spp'] ?>">
                <?= $data_spp['tahun'] ?> - <?= number_format($data_spp['nominal'], 2, ',', '.') ?>
            </option>
            <?php } ?>
        </select>
    </div>

    <!-- Tombol -->
    <div class="flex gap-3">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 text-xs rounded hover:bg-blue-600 transition">SIMPAN</button>
        <button type="reset" class="bg-yellow-400 text-white px-4 py-2 text-xs rounded hover:bg-yellow-500 transition">KOSONGKAN</button>
    </div>
</form>
