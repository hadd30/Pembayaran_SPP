<h5 class="text-xl font-semibold mb-4">Halaman Tambah Data Kelas</h5>
<a href="?url=kelas" class="text-xs bg-green-700 text-white p-2 rounded-sm hover:bg-green-600 transition">KEMBALI</a>

<hr class="text-slate-300 mt-6">

<form method="post" action="?url=proses-tambah-kelas" class="space-y-6">
    <div>
        <label for="nama_kelas" class="block text-sm font-medium text-gray-700 mb-1">Nama Kelas</label>
        <input type="text" name="nama_kelas" id="nama_kelas" required 
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div>
        <label for="kompetensi_keahlian" class="block text-sm font-medium text-gray-700 mb-1">Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" required 
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div class="flex gap-4">
        <button type="submit" 
            class="bg-blue-500 text-white px-4 py-2 text-xs rounded hover:bg-blue-600 transition">SIMPAN</button>
        <button type="reset" 
            class="bg-yellow-400 text-white px-4 py-2 text-xs rounded hover:bg-yellow-500 transition">KOSONGKAN</button>
    </div>
</form>
