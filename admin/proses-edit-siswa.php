<?php

    $nisn = $_GET['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $d_spp = $_POST['id_spp'];

    include 'koneksi.php';
    $sql = "UPDATE spp SET nis='$nis', nama='$nama' WHERE id_kelas='$id_kelas alamat='$alamat no_telp='$no_telp id_spp='$id_spp";
    $query = mysqli_query($koneksi, $sql);
    if($query) {
        header("Location:?url=siswa");
    }else {
        echo "<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=spp');</script>";
    }

?>