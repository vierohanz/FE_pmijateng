document.addEventListener("DOMContentLoaded", function () {
    // Periksa status di localStorage
    const isPaymentStepActive = localStorage.getItem("paymentStepActive");

    const step2 = document.getElementById("step-2");

    if (isPaymentStepActive === "true") {
        step2.classList.remove("bg-gray-500");
        step2.classList.add("bg-red-700");
    }
    localStorage.removeItem("paymentStepActive");
});

document.addEventListener("DOMContentLoaded", function () {
    const currentUrl = window.location.href;

    // Cek apakah URL berisi '/checkout/'
    if (currentUrl.includes("/checkout/")) {
        // Mengubah warna step-2 menjadi merah
        const step2 = document.getElementById("step-2");
        if (step2) {
            step2.classList.add("bg-red-700");
            step2.classList.remove("bg-gray-500"); // Menghapus kelas warna abu-abu
            step2.classList.add("bg-red-700"); // Menambahkan kelas warna merah
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const currentUrl = window.location.href;

    // Cek apakah URL berisi '/checkout/'
    if (currentUrl.includes("/checkout-package/")) {
        // Mengubah warna step-2 menjadi merah
        const step2 = document.getElementById("step-2");
        if (step2) {
            step2.classList.add("bg-red-600");
            step2.classList.remove("bg-gray-500");
            step2.classList.add("bg-red-600");
        }
    }
});
