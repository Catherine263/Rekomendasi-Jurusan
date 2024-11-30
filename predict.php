<?php
// Mengambil nilai input dari form (misalnya nilai mata pelajaran)
$nilai_pp = $_POST['nilai_pp'];
$nilai_bi = $_POST['nilai_bi'];
$nilai_mtk = $_POST['nilai_mtk'];
$nilai_inggris = $_POST['nilai_inggris'];
$nilai_penjas = $_POST['nilai_penjas'];

// Membuat input data untuk dikirim ke Python
$input_data = "$nilai_pp, $nilai_bi, $nilai_mtk, $nilai_inggris, $nilai_penjas";

// Menjalankan file Python melalui shell
$command = "python3 predict_model.py $input_data";
$output = shell_exec($command);

// Menampilkan hasil prediksi
echo "Rekomendasi Jurusan: " . $output;
?>
