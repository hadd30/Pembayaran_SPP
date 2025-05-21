<?php

  session_start();

if(empty($_SESSION['id_petugas'])){
  echo "<script>alert('Maaf anda belum login');
  window.location.assign('../index2.php');
  </script>";
}
if($_SESSION['level']!= 'admin'){
  echo "<script>alert('Maaf anda bukan sesi admin');
      window.location.assign('../index2.php');
      </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body img="">
    <div class="mt-5 shadow-lg mx-36">
      <h3 class="font-bold text-lg mb-2">Aplikasi Pembayaran SPP.</h3>
      <div class="p-3 bg-green-200 rounded-lg">
        <p class="text-green-600 text-xs">Anda Login Sebagai <span class="font-semibold">ADMINISTRATOR</span> Aplikasi Pembayaran SPP.</p>
      </div>
      <div class="flex text-sm">
        <a href="admin.php" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Administrator</a>
        <a href="index3.php?url=spp" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">SPP</a>
        <a href="admin.php?url=kelas" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Kelas</a>
        <a href="admin.php?url=siswa" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Siswa</a>
        <a href="admin.php?url=petugas" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Petugas</a>
        <a href="admin.php?url=pembayaran" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Pembayaran</a>
        <a href="admin.php?url=laporan" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Laporan</a>
        <a href="admin.php?=logout" class="bg-green-700 text-white mr-2 mt-3 rounded-md py-1 px-2 hover:bg-green-600 hover:transitio hover:scale-100">Log-out</a>
      </div>

      <div class="mt-2 p-3 border border-slate-400 rounded-lg">
          <div class="">
            <!-- ini isi web kita -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)) {
              echo "<h4><b>Selamat Datang Di Halaman Administrator.</h4></b>";
              echo "Aplikasi Pembayaran SPP Digunakan Untuk Mempermudah Dalam Mencata Pembayaran Siswa / Siswi Di sekolah.";
            }else{
              include $file.'.php';
            }
            ?>
          </div>
        </div>
  </body>
</html>
