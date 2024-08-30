// Interaktif element
import $ from "jquery";
import AOS from "aos";
import "aos/dist/aos.css";
import "flowbite";
AOS.init({
    duration: 1000,
    easing: "ease-in",
    once: true,
});

// For Carousel

// for event
document.addEventListener("DOMContentLoaded", function () {
    function showGrid(gridNumber) {
        // Hide all grids
        for (let i = 1; i <= 5; i++) {
            document.getElementById("grid-" + i).classList.add("hidden");
        }
        // Show the selected grid
        document
            .getElementById("grid-" + gridNumber)
            .classList.remove("hidden");
    }

    document.querySelectorAll(".list-item").forEach((button, index) => {
        button.addEventListener("click", () => {
            // Remove active class from all list items
            document.querySelectorAll(".list-item").forEach((item) => {
                item.classList.remove("active");
            });

            // Add active class to the clicked button
            button.classList.add("active");

            // Show the corresponding grid
            showGrid(index + 1);
        });
    });

    // Set Grid 1 and the first list item as active by default
    document.getElementById("grid-1").classList.remove("hidden");
    document.querySelector(".list-item").classList.add("active");
});
