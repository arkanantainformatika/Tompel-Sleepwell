<!-- masih cacat -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Biodata Pribadi</title>
</head>
<body>
    <h1>Form Biodata Pribadi</h1>

    <form id="biodataForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="output">
        <!-- Hasil input akan ditampilkan di sini -->
    </div>

    <script>
        document.getElementById("biodataForm").addEventListener("submit", function(e) {
            e.preventDefault(); // Mencegah form dari pengiriman tradisional.

            // Mengambil nilai input dari form
            const nama = document.getElementById("nama").value;
            const umur = document.getElementById("umur").value;
            const alamat = document.getElementById("alamat").value;
            const email = document.getElementById("email").value;

            // Menampilkan hasil input
            const output = document.getElementById("output");
            output.innerHTML = `
                <h2>Hasil Input:</h2>
                <p><strong>Nama:</strong> ${nama}</p>
                <p><strong>Umur:</strong> ${umur} tahun</p>
                <p><strong>Alamat:</strong> ${alamat}</p>
                <p><strong>Email:</strong> ${email}</p>
            `;
        });
    </script>
</body>
</html>
