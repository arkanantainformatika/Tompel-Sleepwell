<!DOCTYPE html>
<html>
<head>
    
    <!-- <script>
        alert("just info, nyesel anda lihat web ini!");
    </script> -->
    <script>
        function twitteralert() {
            alert("uppss.. sowwy.. twitter gw bersifat pribadi hehe");
        }
        </script>    

    <script>
        function ytconfirm(){
            confirm("sorry guys channel youtube masih belum ada!");
        }
    </script>

    <script>
        // Fungsi untuk menampilkan pop-up saat pertama kali
        function showPopupOnFirstVisit() {
            if (document.cookie.indexOf("popupShown=true") === -1) {
                // Pop-up belum ditampilkan, maka tampilkan pop-up
                document.getElementById("popup").style.display = "block";
                
                // Set cookie untuk menandai bahwa pop-up sudah ditampilkan
                document.cookie = "popupShown=true; expires=Sun, 31 Dec 2023 12:00:00 UTC; path=/";
            }
        }
    
        // Panggil fungsi showPopupOnFirstVisit saat halaman dimuat
        window.onload = showPopupOnFirstVisit;
    </script>
    
    <meta charset="utf-8">
    <title>Tompel SleepWell</title>
    <link rel="stylesheet" href="../styles/css.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    
<script src="darkmode.js"></script>
<script src="darkmode.js"></script>

<link rel="stylesheet" type="text/css" href="darkmode.css">
</head>

<body>
 
    <div class="bungkus">
        <section>
            <!--- navigation --->
            <nav>
                <!--- logo --->
                <button onclick="showPopup()"<a href="about.php" class="logo">SleepWell Hotel</a> </button>
                <div id="popup" class="popup">
                    <h2>Tompel SleepWell Notification!</h2>
                    <p>Selamat Datang di Situs Resmi Kami</p>
                    <button onclick="hidePopup()">Tutup</button>
                </div>
                <script>
                        // Fungsi untuk menampilkan pop-up
                        function showPopup() {
                            document.getElementById("popup").style.display = "block";
                        }
                
                        // Fungsi untuk menyembunyikan pop-up
                        function hidePopup() {
                            document.getElementById("popup").style.display = "none";
                        }
                    </script>
            
                    <!--- menu --->
                    <ul>
                        <li><a href="halamanlogin.php">Home</a></li>
                        <!-- <li><a href="ulasan.php" class="active">Destinasi</a></li> -->
                        <!-- <li><a href="pesann.php">Pesan</a></li> -->
                        <a href="halamanlogin.php"><button><i class="fa fa-sign-out-alt"></i></button></a>

                    </ul>
            </nav>
    
            <!--- text --->
            <div class="text-container">
                <p>Selamat Datang di Halaman Pemesanan</p>
                <p> Tompel SleepWell</p>
                <p>Ingin liburan yang mengesankan? Yuk Pesan disini</p>
                <!-- <p>Ingin tahu lebih banyak tentang kami ? Ayo ikuti terus dan lakukan Pemesanan <br>
                Ayok pesan hotel yang nyaman</p> -->
                    <a href="pesann.php"><button class="hire-btn">Lihat Hotel</button></a>
                <!-- <button class="down-cv">Download CV</button> -->
            </div>
            <!-- model -->
            <!-- <img alt="model" class="model" src="halaman utama.jpg" width="700" height="600" > -->

            
        </section>
       
        <!-- footer -->
        <footer>
            <!-- <p>Terima kasih sudah mengunjungi web kami, sampai jumpa.</p> -->
            <p>Anda juga bisa mengunjungi media sosial kami</p>
                
            <!--paragraph-->
            <!--social-->
            <div class="social-icons">
                <a href="https://wa.me/+6285828564243"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100011447314163&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a> 
                <a href="javascript:void(0);" onclick="twitteralert()"><i class="fab fa-twitter"></i></a>
                <!-- <a href="alert"><i class="fab fa-twitter"></i></a> -->
                <a href="https://instagram.com/arkananta_shelby?igshid=NGVhN2U2NjQ0Yg=="><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0);" onclick="ytconfirm()"><i class="fab fa-youtube"></i></a>
                <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
            </div>
            
            <!--copyright-->
            <p class="copyright">Copyright @Tompel SleepWell</p>
        </footer>
 
        <!--social-attach-bar-->
        <div id="samping" class="social">
            <a href="https://wa.me/+6285828564243"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100011447314163&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
            <a href="javascript:void(0);" onclick="twitteralert()"><i class="fab fa-twitter"></i></a>
            <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
            <a href="https://instagram.com/arkananta_shelby?igshid=NGVhN2U2NjQ0Yg=="><i class="fab fa-instagram"></i></a>
            <a href="javascript:void(0);" onclick="ytconfirm()"><i class="fab fa-youtube"></i></a>
            <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
        </div>
    
    </div>
</body>


</html>