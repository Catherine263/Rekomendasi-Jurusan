<!-- recommendation.php -->
<?php
// Mengambil data input dari form
$nilai_mtk = $_POST['nilai_mtk'];
$nilai_bi = $_POST['nilai_bi'];
$nilai_inggris = $_POST['nilai_inggris'];

// Fungsi untuk memberikan rekomendasi jurusan berdasarkan nilai
function getRecommendation($nilai_mtk, $nilai_bi, $nilai_inggris) {
    // Aturan untuk Jurusan Teknik Informatika
    if ($nilai_mtk >= 80 && $nilai_inggris >= 75) {
        return "Rekomendasi Jurusan: Teknik Informatika";
    }
    // Aturan untuk Jurusan Ekonomi
    elseif ($nilai_mtk >= 60 && $nilai_inggris < 75) {
        return "Rekomendasi Jurusan: Ekonomi";
    }
    // Aturan untuk Jurusan Kedokteran
    elseif ($nilai_mtk >= 85 && $nilai_inggris >= 80) {
        return "Rekomendasi Jurusan: Kedokteran";
    }
    // Jika tidak memenuhi aturan di atas, berikan saran umum
    else {
        return "Rekomendasi Jurusan: Pilih jurusan yang sesuai dengan minat dan bakat Anda!";
    }
}

// Menampilkan rekomendasi
$rekomendasi = getRecommendation($nilai_mtk, $nilai_bi, $nilai_inggris);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi</title>
</head>
<body>
    <h1><?php echo $rekomendasi; ?></h1>
    <a href="index.php">Kembali</a>
</body>
</html>
