<?php

    $id_spp = $_POST['id_spp'];
    var_dump($id_spp);

    include 'koneksi.php';
    $sql = "DELETE FROM spp WHERE id_spp='id_spp'";
    $query = mysqli_query($koneksi, $sql);
    if($query) {
        header("Location:?url=spp");
    }else {
        echo "<script>alert('Maaf data tidak terhapus'); window.location.assign('?url=spp');</script>";
    }

?>