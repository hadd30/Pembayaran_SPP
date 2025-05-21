<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div>
    <div>
        <h5 class="mb-3 text-xl font-semibold">Halaman Tambah Data SPP</h5>
        <a href="?url=spp" class="text-xs bg-green-700 text-white p-2 rounded-sm hover:bg-green-600 transition">Kembali</a>
    </div>

    <hr class="text-slate-300 mt-6">

    <form method="post" action="?url=proses-tambah.php" class="space-y-4">
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Tahun</label>
            <input type="number" name="tahun" id="tahun" maxlength="4" required
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Nominal</label>
            <input type="number" name="nominal" id="nominal" maxlength="13" required
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <div class="flex space-x-2">
            <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 text-xs rounded hover:bg-blue-600 transition">Simpan</button>
            <button type="reset"
            class="bg-yellow-400 text-white px-4 py-2 text-xs rounded hover:bg-yellow-500 transition">Kosongkan</button>
        </div>
    </form>
</div>