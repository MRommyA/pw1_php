<?php
require_once 'controller.php';

$prestasiObj = new Prestasi();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if ($prestasiObj->deletePrestasi($id)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location='index.php';
              </script>";
    }

} else {
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location='index.php';
          </script>";
}
?>