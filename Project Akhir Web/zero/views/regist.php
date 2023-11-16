<?php
require "../util/koneksi.php";

if (isset($_POST["masuk"])) {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    if ($password === $confirmpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM databasemultiuser where username = '$username' ");
        if (mysqli_fetch_assoc($result)) {
            echo "
            <script>
                alert('Username telah digunakan');
            </script>
            ";
        } else {
            $result = mysqli_query($conn, "INSERT INTO databasemultiuser VALUES('', '$nama', '$username','$password', 'user')");
            if (mysqli_affected_rows($conn)> 0) {
                echo "
                <script>
                    alert('Berhasil');
                    document.location.href='login.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Gagal');
                </script>
                ";
            }
        }
    }
    else {
        echo "
            <script>
                alert('Password Anda Tidak Sesuai');
            </script>
        "; 
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi SleepWell</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="form">
        <img src="../assets/hotel 2.jpg" alt="">
        <div class="form-container">
            <h1>Sign Up</h1><hr>
            <form action="" method= "POST">
                <input type="text" name="nama" placeholder="Nama" class="textfield" required>
                <input type="text" name="username" placeholder="Username" class="textfield" required>
                <input type="password" name="password" placeholder="Password" class="textfield" required>
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password" class="textfield" required>
                <input type="submit" name="masuk" value="Masuk" class="login-btn">
            </form>
        </div>
    </div>
</body>
</html>