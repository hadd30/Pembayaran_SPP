<?php

    $id_spp = $_POST['id_spp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    include 'koneksi.php';
    $sql = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";
    $query = mysqli_query($koneksi, $sql);
    if($query) {
        header("Location:?url=spp");
    }else {
        echo "<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=spp');</script>";
    }

?>