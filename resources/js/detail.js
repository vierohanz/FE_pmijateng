import "flowbite";

const bounceMeeting = document.getElementById("bounceMeeting");
bounceMeeting.addEventListener("scroll", () => {
    const maxScrollLeft = bounceMeeting.scrollWidth - bounceMeeting.clientWidth;
    const currentScrollLeft = bounceMeeting.scrollLeft;
    bounceMeeting.classList.remove("bounce-left", "bounce-right");
    if (currentScrollLeft === 0) {
        bounceMeeting.classList.add("bounce-left");
    }
    if (currentScrollLeft >= maxScrollLeft) {
        bounceMeeting.classList.add("bounce-right");
    }
});

function activatePaymentStep() {
    // Simpan status langkah pembayaran sebagai aktif
    localStorage.setItem("paymentStepActive", "true");
}

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
