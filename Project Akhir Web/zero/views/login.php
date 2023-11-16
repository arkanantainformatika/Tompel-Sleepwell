<?php
    session_start();
    require"../util/koneksi.php";
 
    if (isset($_POST["masuk"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // menyeleksi data user dengan username dan password yang sesuai
        $login = mysqli_query($conn,"select * from databasemultiuser where username='$username'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($login);
         
        // cek apakah username dan password di temukan pada database
        if($cek === 1){
         
            $data = mysqli_fetch_assoc($login);
        
            if ($data) {
                if (password_verify($password, $data['password'])) {
                    $_SESSION['logged'] = true;
                    $userType = $data['level'];
                    if ($userType == 'admin') {
                        header('Location:adminpage.php');
                    } elseif($userType == 'user') {
                        header('Location:userpage.php');
                    } else {
                        echo "
                        <script>
                            alert('Gagal');
                        </script>
                        ";
                    }
                }
            }
        } else {
            echo "
            <script>
                alert('Gagal');
            </script>
            ";
            // header("location:login.php?pesan=gagal");
        }   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SleepWell</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
	?>
    <div class="form">
        <img src="../assets/hotel 1.jpg" alt="">
        <div class="form-container">
            
            <h1>Sign In</h1><hr>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" class="textfield" required>
                <input type="password" name="password" placeholder="Password" class="textfield" required>
                <div class="remember">
                    <!-- <input type="checkbox" name="remember" value="true">
                    <label for="remember">Ingat username ini</label> -->
                    <h5>Anda Ingat Password?</h5> <a href="../views/regist.php" >Registrasi</a></a>
                </div>
                <input type="submit" name="masuk" value="Masuk" class="login-btn">
                <div class="buttonkembali">
                    <a class="link" href="halamanlogin.php">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>