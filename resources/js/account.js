import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import Toastify from "toastify-js";
import "toastify-js/src/toastify.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#birth-day", {
        dateFormat: "d/m/Y",
    });
});
