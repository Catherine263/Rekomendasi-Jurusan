// Fungsi untuk kembali ke halaman sebelumnya
function goBack() {
    window.history.back();
}

// Tambahkan efek transisi ketika halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.container');
    container.classList.add('fade-in');
});
