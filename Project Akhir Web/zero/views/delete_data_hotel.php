<?php
    require "../util/koneksi.php";

    $id = $_GET['id'];

    $get_foto = mysqli_query($conn, "SELECT foto FROM adminku WHERE id = $id");

    $data_old = mysqli_fetch_array($get_foto);
    unlink("img/".$data_old['foto']);

    $result = mysqli_query($conn, "DELETE FROM adminku WHERE id = $id");
    
    $adminku = [];

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'adminpage.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'adminpage.php';
        </script>";
    }
?>