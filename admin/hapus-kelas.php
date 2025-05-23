<?php

    $id_spp = $_GET['id_kelas'];

    include 'koneksi.php';
    $sql = "DELETE FROM spp WHERE id_spp='id_kelas'";
    $query = mysqli_query($koneksi, $sql);
    if($query) {
        header("Location:?url=kelas"); 
    }else {
        echo "<script>alert('Maaf data tidak terhapus'); window.location.assign('?url=kelas');</script>";
    }

?>