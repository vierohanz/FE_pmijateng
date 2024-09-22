import Swal from "sweetalert2";

document.addEventListener("DOMContentLoaded", function () {
    // Mendapatkan elemen status dan kontainer ikon
    const statusText = document.getElementById("status-text").innerText;
    const textInformation = document.getElementById("text-information");
    const iconContainer = document.getElementById("icon-container");

    // Kosongkan kontainer ikon sebelum memasukkan ikon yang sesuai
    iconContainer.innerHTML = "";

    // Menampilkan ikon berdasarkan status
    if (statusText === "success") {
        iconContainer.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
              <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                  <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                  <path d="m9 11l3 3L22 4" />
              </g>
          </svg>`;
        textInformation.innerText =
            "Pesanan telah selesai. Kami tunggu pesanan berikutnya";
        iconContainer.style.backgroundColor = "green";
    } else if (statusText === "pending") {
        iconContainer.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 24 24">
            <path fill="white"
              d="M12 20a8 8 0 1 0 0-16a8 8 0 0 0 0 16m0 2C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10m-1-6h2v2h-2zm0-10h2v8h-2z" />
          </svg>`;
        textInformation.innerText =
            "Pesanan tertunda. Segera lakukan pembayaran agar pesanan dapat diproses";
    } else if (statusText === "failed") {
        iconContainer.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 48 48">
              <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                d="M10 44h28a2 2 0 0 0 2-2V14H30V4H10a2 2 0 0 0-2 2v36a2 2 0 0 0 2 2M30 4l10 10m-22 8l12 12m0-12L18 34" />
          </svg>`;
        textInformation.innerText =
            "Pesanan gagal. Silahkan coba lagi atau hubungi kami jika terjadi kesalahan";
        iconContainer.style.backgroundColor = "red";
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

// Fungsi untuk menyoroti bintang saat di-hover
function highlightStars(star) {
    for (let i = 1; i <= star; i++) {
        document.getElementById(`star${i}`).classList.add("text-yellow-300");
    }
}

// Fungsi untuk mengatur skor saat bintang diklik
function rateStar(star) {
    selectedScore = star; // Simpan skor yang dipilih
    highlightStars(star); // Sorot bintang yang dipilih
}

// Fungsi untuk mereset bintang ke skor yang sudah dipilih
function resetStars() {
    for (let i = 1; i <= 5; i++) {
        const starElement = document.getElementById(`star${i}`);
        if (i <= selectedScore) {
            starElement.classList.add("text-yellow-300"); // Sorot jika skor sudah dipilih
        } else {
            starElement.classList.remove("text-yellow-300"); // Hapus sorotan jika tidak dipilih
        }
    }
}

// Event listener untuk hover bintang
for (let i = 1; i <= 5; i++) {
    document
        .getElementById(`star${i}`)
        .addEventListener("mouseover", function () {
            highlightStars(i); // Sorot bintang saat di-hover
        });
    document
        .getElementById(`star${i}`)
        .addEventListener("mouseout", resetStars); // Reset saat mouse keluar
    document.getElementById(`star${i}`).addEventListener("click", function () {
        rateStar(i); // Set skor saat bintang diklik
    });
}
// Fungsi untuk mendapatkan parameter dari URL
function getQueryParams() {
    const params = {};
    const queryString = window.location.search.substring(1);
    const queryArray = queryString.split("&");

    queryArray.forEach((param) => {
        const [key, value] = param.split("=");
        params[decodeURIComponent(key)] = decodeURIComponent(
            value.replace(/\+/g, " ")
        );
    });

    return params;
}
const queryParams = getQueryParams();
const userEmail = queryParams.user_email;
const userTransactionId = queryParams.id;
console.log("User Email:", userEmail);
console.log("Transaction ID:", userTransactionId);

let selectedScore = 0; // Untuk menyimpan skor yang dipilih
const reviewInput = document.querySelector('input[name="review"]'); // Ambil elemen input review

document
    .getElementById("submitReviewBtn")
    .addEventListener("click", function () {
        const review = reviewInput.value;

        if (review.trim() === "" || selectedScore === 0) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Silakan isi ulasan dan pilih skor.",
            });
            return;
        }

        fetch(
            `https://dashboard.palmerinjateng.id/api/v1/review/postReview?user_transaction_id=${userTransactionId}&user_email=${userEmail}`,
            {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    review: review,
                    score: selectedScore,
                }),
            }
        )
            .then((response) => {
                if (!response.ok) {
                    return Promise.reject(response);
                }

                return response.json();
            })
            .then((data) => {
                console.log(data);
                Swal.fire({
                    title: "Terima Kasih!",
                    text: "Ulasan berhasil dikirim!",
                    icon: "success",
                });
                reviewInput.value = "";
            })
            .catch((error) => {
                if (error.json) {
                    error.json().then((errData) => {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Terjadi kesalahan: " + errData.message,
                        });
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Terjadi kesalahan. Silakan coba lagi.",
                    });
                }
                console.error("Error:", error);
            });
    });

async function getReviewForCurrentTransaction() {
    const userTransactionId = queryParams.id; // Ambil ID transaksi
    const url = `https://dashboard.palmerinjateng.id/api/v1/review/getReviewForCurrentTransaction?user_transaction_id=${userTransactionId}`;

    try {
        const response = await fetch(url);

        // Memeriksa apakah respons berhasil
        if (!response.ok) {
            throw new Error(
                "Network response was not ok " + response.statusText
            );
        }

        const data = await response.json();

        // Mengecek apakah status dari API benar (true)
        if (data.status) {
            // Update elemen dengan data yang diterima
            const scoreContainer = document.getElementById("reviewScore");
            scoreContainer.innerHTML = ""; // Kosongkan konten sebelumnya

            // Menampilkan bintang berdasarkan skor
            scoreContainer.innerHTML = renderStars(data.score); // Hanya tampilkan bintang terisi

            document.getElementById("reviewText").textContent = data.review;
            document.getElementById(
                "scoreValue"
            ).textContent = `Score: ${data.score}`; // Tampilkan skor
        } else {
            console.error("Review data not found.");
        }
    } catch (error) {
        console.error("Error fetching review:", error);
    }
}

function renderStars(score) {
    let stars = "";
    for (let i = 0; i < score; i++) {
        stars += `<svg aria-hidden="true" class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.566 4.82a1 1 0 00.95.69h5.065c.969 0 1.371 1.24.588 1.81l-4.1 2.98a1 1 0 00-.364 1.118l1.566 4.82c.3.921-.755 1.688-1.54 1.118l-4.1-2.98a1 1 0 00-1.175 0l-4.1 2.98c-.784.57-1.838-.197-1.539-1.118l1.566-4.82a1 1 0 00-.364-1.118L.83 10.247c-.783-.57-.38-1.81.588-1.81h5.066a1 1 0 00.95-.69l1.565-4.82z"/>
                      </svg>`;
    }
    return stars;
}

document.addEventListener("DOMContentLoaded", getReviewForCurrentTransaction);
