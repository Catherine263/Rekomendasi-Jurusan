<?php
// Logic untuk rekomendasi jurusan berdasarkan input nilai
$jurusan_rekomendasi = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari form
    $nilai_pp = $_POST['nilai_pp'];
    $nilai_bi = $_POST['nilai_bi'];
    $nilai_mtk = $_POST['nilai_mtk'];
    $nilai_inggris = $_POST['nilai_inggris'];
    $nilai_penjas = $_POST['nilai_penjas'];
    $nilai_sejarah = $_POST['nilai_sejarah'];

    // Proses rekomendasi jurusan berdasarkan nilai
    if ($nilai_mtk >= 80 && $nilai_inggris >= 75) {
        $jurusan_rekomendasi = "Teknik Informatika";
    } elseif ($nilai_mtk >= 60 && $nilai_mtk <= 80 && $nilai_bi >= 70) {
        $jurusan_rekomendasi = "Ekonomi";
    } elseif ($nilai_mtk >= 85 && $nilai_inggris >= 80) {
        $jurusan_rekomendasi = "Kedokteran";
    } elseif ($nilai_pp >= 70 && $nilai_bi >= 70 && $nilai_sejarah >= 70) {
        $jurusan_rekomendasi = "Sosial & Humaniora";
    } else {
        $jurusan_rekomendasi = "Maaf, nilai yang Anda masukkan tidak sesuai dengan kriteria jurusan yang tersedia.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Jurusan Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <h1>Sistem Pakar: Rekomendasi Jurusan Kuliah</h1>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <form action="" method="POST">
            <div class="input-section">
                <h2>Masukkan Nilai Anda</h2>
                <label>Pendidikan Pancasila</label>
                <input type="number" name="nilai_pp" min="0" max="100" required>
                
                <label>Bahasa Indonesia</label>
                <input type="number" name="nilai_bi" min="0" max="100" required>
                
                <label>Matematika</label>
                <input type="number" name="nilai_mtk" min="0" max="100" required>
                
                <label>Bahasa Inggris</label>
                <input type="number" name="nilai_inggris" min="0" max="100" required>
                
                <label>Pendidikan Jasmani</label>
                <input type="number" name="nilai_penjas" min="0" max="100" required>
                
                <label>Sejarah</label>
                <input type="number" name="nilai_sejarah" min="0" max="100" required>
            </div>
            
            <button type="submit">Dapatkan Rekomendasi</button>
        </form>

        <!-- Menampilkan hasil rekomendasi -->
        <?php if (!empty($jurusan_rekomendasi)): ?>
            <div class="result">
                <h3>Rekomendasi Jurusan Anda: <?php echo $jurusan_rekomendasi; ?></h3>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
