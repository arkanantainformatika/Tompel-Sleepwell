<?php
    require "../util/koneksi.php";
    
    $id = $_GET['id_pemesanan'];

    $get = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id = $id");
    $pemesanan = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $pemesanan[] = $row;
    }

    $pemesanan = $pemesanan[0];

    
    if (isset($_POST['ubah'])) {
        $nama_pemesan = $_POST['nama_pemesan'];
        $nama_hotel_pemesanan = $_POST['nama_hotel_pemesanan'];
        $alamat_hotel_pemesanan = $_POST['alamat_hotel_pemesanan'];
        $fasilitas_hotel = $_POST['fasilitas_hotel'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
      

        if (move_uploaded_file($tmp, "../img/".$new_foto)) {
            $result = mysqli_query($conn, "UPDATE pemesanan SET nama_pemesan='$nama_pemesan', nama_hotel_pemesanan='$nama_hotel_pemesanan', alamat_hotel_pemesanan='$alamat_hotel_pemesanan', fasilitas_hotel='$fasilitas_hotel', check_in='$check_in', check_out='$check_out', WHERE id = $id");

            if ($result) {
                echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'adminpage_pemesanan.php';
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
    <link rel="stylesheet" href="../styles/style_data_pemesanan.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" value="<?php echo $pemesanan['nama_pemesan'] ?>" class="textfield">
                <label for="nama_hotel_pemesanan">Nama Hotel</label>
                <input type="text" name="nama_hotel_pemesanan" value="<?php echo $pemesanan['nama_hotel_pemesanan'] ?>" class="textfield">
                <label for="alamat_hotel_pemesanan">Alamat Hotel</label>
                <input type="text" name="alamat_hotel_pemesanan" value="<?php echo $pemesanan['alamat_hotel_pemesanan'] ?>" class="textfield">
                <label for="fasilitas_hotel">Fasilitas</label>
                <input type="text" name="fasilitas_hotel" value="<?php echo $pemesanan['fasilitas_hotel'] ?>" class="textfield">
                <label for="check_in">Check-in</label>
                <input type="text" name="check_in" value="<?php echo $pemesanan['check_in'] ?>" class="textfield">
                <label for="check_out">Check-out</label>
                <input type="text" name="check_out" value="<?php echo $pemesanan['check_out'] ?>" class="textfield">
                <input type="submit" name="ubah" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>