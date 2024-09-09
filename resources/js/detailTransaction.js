document.addEventListener("DOMContentLoaded", function () {
    // Mendapatkan elemen status dan kontainer ikon
    const statusText = document.getElementById("status-text").innerText;
    const iconContainer = document.getElementById("icon-container");

    // Kosongkan kontainer ikon sebelum memasukkan ikon yang sesuai
    iconContainer.innerHTML = "";

    // Menampilkan ikon berdasarkan status
    if (statusText === "Selesai") {
        iconContainer.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
              <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                  <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                  <path d="m9 11l3 3L22 4" />
              </g>
          </svg>`;
    } else if (statusText === "Pending") {
        iconContainer.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
            <path fill="white"
              d="M12 20a8 8 0 1 0 0-16a8 8 0 0 0 0 16m0 2C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10m-1-6h2v2h-2zm0-10h2v8h-2z" />
          </svg>`;
    } else if (statusText === "Failed") {
        iconContainer.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 48 48">
              <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                d="M10 44h28a2 2 0 0 0 2-2V14H30V4H10a2 2 0 0 0-2 2v36a2 2 0 0 0 2 2M30 4l10 10m-22 8l12 12m0-12L18 34" />
          </svg>`;
    }

    // Fungsi untuk menyalin teks ke clipboard
    function copyToClipboard() {
        const orderId = document.getElementById("order-id").innerText;

        // Membuat elemen textarea sementara untuk menyalin teks
        const tempInput = document.createElement("textarea");
        tempInput.value = orderId;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        // Menampilkan pesan konfirmasi (opsional)
        alert("ID Pesanan berhasil disalin ke clipboard!");
    }

    // Event listener untuk tombol salin
    const copyButton = document.getElementById("copy-button");
    copyButton.addEventListener("click", copyToClipboard);
});
