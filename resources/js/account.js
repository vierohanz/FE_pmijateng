import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#birth-day", {
        dateFormat: "d/m/Y",
    });
});
