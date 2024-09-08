// Di file topbarPayment.js
document.addEventListener("DOMContentLoaded", function () {
    // Periksa status di localStorage
    const isPaymentStepActive = localStorage.getItem("paymentStepActive");

    const step2 = document.getElementById("step-2");

    if (isPaymentStepActive === "true") {
        // Jika aktif, ubah warna langkah "Bayar" menjadi merah
        step2.classList.remove("bg-gray-500");
        step2.classList.add("bg-red-700"); // Merah
    }

    // Setelah memeriksa, hapus status dari localStorage
    // Untuk mengatur ulang saat kembali ke halaman detail
    localStorage.removeItem("paymentStepActive");
});
