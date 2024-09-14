import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import axios from "axios";
import $ from "jquery";
import toastr from "toastr";
import "toastr/build/toastr.min.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#tanggal-masuk", {
        dateFormat: "Y-m-d",
    });

    flatpickr("#tanggal-keluar", {
        dateFormat: "Y-m-d",
    });

    flatpickr("#tanggal-masuk-package", {
        dateFormat: "Y-m-d",
    });

    flatpickr("#tanggal-keluar-package", {
        dateFormat: "Y-m-d",
    });
});

$("#booking-form").on("submit", function (event) {
    event.preventDefault();
    const accessToken = window.accessToken;

    const apiUrlV1 = $('input[name="api_url_v1"]').val();
    const apiUrlV2 = $('input[name="api_url_v2"]').val();
    var formData = {
        user_email: $('input[name="user_email"]').val(),
        room_type_id: $('input[name="room_type_id"]').val(),
        start_date: $('input[name="start_date"]').val(),
        end_date: $('input[name="end_date"]').val(),
        amount: $('input[name="amount"]').val(),
        name: $('input[name="name"]').val(),
        phone: $('input[name="phone"]').val(),
        side: "client",
    };

    axios
        .post(`${apiUrlV2}booking/generateToken`, formData, {
            headers: {
                Authorization: `Bearer ${accessToken}`,
            },
        })
        .then((data) => {
            if (data) {
                console.log("DATA:", data);
                console.log("Snap token:", data.data.snap_token);
                snap.pay(data.data.snap_token, {
                    onSuccess: function (result) {
                        console.log("Payment success:", result);
                        window.location.href = "/historyTransaction";
                    },
                    onPending: function (result) {
                        window.location.href = "/historyTransaction";
                    },
                    onError: function (result) {
                        console.log("Payment error:", result);
                        window.location.href = "/historyTransaction";
                    },
                    onClose: function () {
                        window.location.href = "/historyTransaction";
                    },
                });
            } else {
                // Error Fetch data tidak ada
                toastr.options = {
                    positionClass: "toast-top-center",
                    preventDuplicates: true,
                    progressBar: true,
                    timeOut: "3000",
                    debug: false,
                    newestOnTop: false,
                };
                toastr.error(`Booking Tidak Ditemukan`);
                console.error(
                    "Fetch berhasil tapi data tidak ada / snap token tidak ada"
                );
            }
        })
        // Error Fetch
        .catch((error) => {
            console.error("Error Fetch:", error);
            if (error.response.status === 403) {
                toastr.options = {
                    positionClass: "toast-top-center",
                    preventDuplicates: true,
                    progressBar: true,
                    timeOut: "3000",
                    debug: false,
                    newestOnTop: false,
                };
                toastr.error(
                    "Akses ditolak. Lakukan Verifikasi Email di Profil."
                );
            } else {
                const errorMessage =
                    error.response?.data?.error ||
                    error.response?.data?.message ||
                    "Booking gagal disimpan";
                toastr.options = {
                    positionClass: "toast-top-center",
                    preventDuplicates: true,
                    progressBar: true,
                    timeOut: "3000",
                    debug: false,
                    newestOnTop: false,
                };
                toastr.error(`${errorMessage}`);
            }
        });
});

$("#booking-package-form").on("submit", function (event) {
    event.preventDefault();
    const accessToken = window.accessToken;

    const apiUrlV1 = $('input[name="api_url_v1"]').val();
    const apiUrlV2 = $('input[name="api_url_v2"]').val();
    var formData = {
        user_email: $('input[name="user_email"]').val(),
        package_id: $('input[name="package_id"]').val(),
        start_date: $('input[name="start_date"]').val(),
        end_date: $('input[name="end_date"]').val(),
        person_count: $('input[name="person_count"]').val(),
        side: "client",
    };

    axios
        .post(`${apiUrlV2}booking/packageToken`, formData, {
            headers: {
                Authorization: `Bearer ${accessToken}`,
            },
        })
        .then((data) => {
            if (data) {
                console.log("DATA:", data);
                console.log("Snap token:", data.data.snap_token);
                snap.pay(data.data.snap_token, {
                    onSuccess: function (result) {
                        console.log("Payment success:", result);
                        window.location.href = "/historyTransaction";
                    },
                    onPending: function (result) {
                        window.location.href = "/historyTransaction";
                    },
                    onError: function (result) {
                        console.log("Payment error:", result);
                        window.location.href = "/historyTransaction";
                    },
                    onClose: function () {
                        window.location.href = "/historyTransaction";
                    },
                });
            } else {
                // Error Fetch data tidak ada
                toastr.options = {
                    positionClass: "toast-top-center",
                    preventDuplicates: true,
                    progressBar: true,
                    timeOut: "3000",
                    debug: false,
                    newestOnTop: false,
                };
                toastr.error(`Booking Tidak Ditemukan`);
                console.error(
                    "Fetch berhasil tapi data tidak ada / snap token tidak ada"
                );
            }
        })
        // Error Fetch
        .catch((error) => {
            console.error("Error Fetch:", error);
            if (error.response.status === 403) {
                toastr.options = {
                    positionClass: "toast-top-center",
                    preventDuplicates: true,
                    progressBar: true,
                    timeOut: "3000",
                    debug: false,
                    newestOnTop: false,
                };
                toastr.error(
                    "Akses ditolak. Lakukan Verifikasi Email di Profil."
                );
            } else {
                const errorMessage =
                    error.response?.data?.error ||
                    error.response?.data?.message ||
                    "Booking gagal disimpan";
                toastr.options = {
                    positionClass: "toast-top-center",
                    preventDuplicates: true,
                    progressBar: true,
                    timeOut: "3000",
                    debug: false,
                    newestOnTop: false,
                };
                toastr.error(`${errorMessage}`);
            }
        });
});

function updateTotalPricePackage() {
    const pricePerPersonValue = document.getElementById("price_per_person");
    const personCountInput = document.getElementById("person-count");
    const totalPriceElement = document.getElementById("total-price-package");
    const startDateInput = document.getElementById("tanggal-masuk-package");
    const endDateInput = document.getElementById("tanggal-keluar-package");

    const personCount = parseInt(personCountInput.value) || 0;
    const pricePerPerson = parseInt(pricePerPersonValue.value) || 0;
    const days = calculateDaysDifference(
        startDateInput.value,
        endDateInput.value
    );
    const totalPrice = pricePerPerson * personCount * days;

    totalPriceElement.textContent = `Rp ${totalPrice.toLocaleString()}`;
}

function updateTotalPrice() {
    const amountRoomValue = document.getElementById("amount_room");
    const PriceRoomValue = document.getElementById("room_price");
    const totalPriceElement = document.getElementById("total-price");
    const startDateInput = document.getElementById("tanggal-masuk");
    const endDateInput = document.getElementById("tanggal-keluar");

    const amountRoom = parseInt(amountRoomValue.value) || 0;
    const PriceRoom = parseInt(PriceRoomValue.value) || 0;
    const days = calculateDaysDifference(
        startDateInput.value,
        endDateInput.value
    );
    const totalPrice = amountRoom * PriceRoom * days;

    totalPriceElement.textContent = `Rp ${totalPrice.toLocaleString()}`;
}

function calculateDaysDifference(startDate, endDate) {
    const start = new Date(startDate.split("/").reverse().join("-"));
    const end = new Date(endDate.split("/").reverse().join("-"));

    if (isNaN(start) || isNaN(end) || start >= end) return 1;

    const diffTime = Math.abs(end - start);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    return diffDays;
}

document
    .getElementById("amount_room")
    ?.addEventListener("input", updateTotalPrice);
document
    .getElementById("person-count")
    ?.addEventListener("input", updateTotalPricePackage);
document.getElementById("tanggal-masuk")?.addEventListener("input", () => {
    updateTotalPrice();
});
document.getElementById("tanggal-keluar")?.addEventListener("input", () => {
    updateTotalPrice();
});

document
    .getElementById("tanggal-masuk-package")
    ?.addEventListener("input", () => {
        updateTotalPricePackage();
    });
document
    .getElementById("tanggal-keluar-package")
    ?.addEventListener("input", () => {
        updateTotalPricePackage();
    });
