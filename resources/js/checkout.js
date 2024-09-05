import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#tanggal-masuk", {
        dateFormat: "d/m/Y",
    });

    flatpickr("#tanggal-keluar", {
        dateFormat: "d/m/Y",
    });
});
