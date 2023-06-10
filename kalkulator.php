<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="liveTime()">
    <div class="header">
    <b>Tanggal & Waktu Saat Ini: <div id="tanggalwaktu"></div></b>
    <script src="./js/date.js"></script>
</div>
        <header class="header">
            <h1><b>Penentuan Nilai Pelatihan Peserta</b></h1>
        </header>
    </div>
    <h2><u>K A L K U L A T O R</u></h2>
    <p>(Penentuan Nilai Akhir Peserta Pelatihan JWD)</p>

    <form action="" method="post">
        <u>Nilai Praktik<span id="br"></span>
            <input type="number" name="prak" placeholder="MASUKKAN NILAI PRAKTIK" autocomplete="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"><br><br>
            Nilai Pilihan Ganda<span id="br"></span>
            <input type="number" name="pilgan" placeholder="MASUKKAN NILAI PILIHAN GANDA" autocomplete="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"><br><br>
            Nilai Kehadiran<span id="br"></span>
            <input type="number" name="hadir" placeholder="MASUKKAN NILAI KEHADIRAN" autocomplete="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"><br><br>
            Nilai Sikap<span id="br"></span></u>
        <input type="number" name="sikap" placeholder="MASUKKAN NILAI SIKAP" autocomplete="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"><br><br>
        <input class="hasil" type="submit" name="submit" value="HASIL"><br><br><br>

    </form>

    <?php
    if (isset($_POST['submit'])) {

        $prak = $_POST['prak'];
        $pilgan = $_POST['pilgan'];
        $hadir = $_POST['hadir'];
        $sikap = $_POST['sikap'];

        $nilai = (0.6 * $prak) + (0.3 * $pilgan) + (0.05 * $hadir) + (0.05 * $sikap);

        if ($nilai > 100 || $nilai < 0) {
            $nilai = "-";
            $kriteria = "Nilai akhir tidak valid";
        } elseif ($nilai >= 95) {
            $kriteria = "Memuaskan";
        } elseif ($nilai >= 85) {
            $kriteria = "Baik Sekali";
        } elseif ($nilai >= 75) {
            $kriteria = "Baik";
        } elseif ($nilai >= 65) {
            $kriteria = "Cukup";
        } else {
            $kriteria = "Tidak lulus";
        }

        echo "<table>";
        echo "<tr><th>Keterangan</th>";
        echo "<th>Nilai</th><tr>";
        echo "<tr><td>Nilai Akhir</td><td>" . $nilai . "</td></tr>";
        echo "<tr><td>Kriteria Kelulusan</td><td>" . $kriteria . "</td></tr>";
        echo "</table><br><br>";
    } else {
        echo "Silahkan Masukkan Angkanya Untuk Melihat Hasilnya";
    }
    ?>
		<footer class="footer">
			<br>Copyright &copy; Muh. Dadang Hawari
		</footer>
</body>
</html>