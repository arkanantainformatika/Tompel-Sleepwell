<?php
    require "../util/koneksi.php";
    
    $id = $_GET['id'];

    $get = mysqli_query($conn, "SELECT * FROM adminku WHERE id = $id");
    $get_foto = mysqli_query($conn, "SELECT foto FROM adminku WHERE id = $id");

    $adminku = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $adminku[] = $row;
    }

    $adminku = $adminku[0];

    
    if (isset($_POST['ubah'])) {
        $namahotel = $_POST['namahotel'];
        $alamat = $_POST['alamat'];
        $fasilitas = $_POST['fasilitas'];
        $foto = $_FILES['foto']['name'];
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));

        $new_foto = "$nama.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];

        
        $data_old = mysqli_fetch_array($get_foto);
        unlink("img/".$data_old['foto']);

        if (move_uploaded_file($tmp, "../img/".$new_foto)) {
            $result = mysqli_query($conn, "UPDATE adminku SET namahotel='$namahotel', alamat='$alamat', fasilitas='$fasilitas', foto='$new_foto' WHERE id = $id");

            if ($result) {
                echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'adminpage.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal diubah!');
                </script>";
            }

        } else {
            echo "
            <script>
                alert('Data gagal diubah!');
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="namahotel">Nama</label>
                <input type="text" name="namahotel" value="<?php echo $adminku['namahotel'] ?>" class="textfield">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $adminku['alamat'] ?>" class="textfield">
                <label for="fasilitas">Fasilitas</label>
                <input type="text" name="fasilitas" value="<?php echo $adminku['fasilitas'] ?>" class="textfield">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="textfield">
                <input type="submit" name="ubah" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>