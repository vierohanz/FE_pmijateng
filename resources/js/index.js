// Interaktif element
import $ from "jquery";
import AOS from "aos";
import "aos/dist/aos.css";
import "flowbite";
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
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

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#arrival-date", {
        dateFormat: "d/m/Y",
    });

    flatpickr("#departure-date", {
        dateFormat: "d/m/Y",
    });
});

const guestsInput = document.getElementById("guests");
const incrementBtn = document.getElementById("increment");
const decrementBtn = document.getElementById("decrement");

// Convert the input value to a number
let guests = parseInt(guestsInput.value);

// Increment function
incrementBtn.addEventListener("click", () => {
    guests++;
    guestsInput.value = guests;
});

// Decrement function
decrementBtn.addEventListener("click", () => {
    if (guests > 1) {
        // Ensure the value doesn't go below 1
        guests--;
        guestsInput.value = guests;
    }
});

const carousel = document.getElementById("carousel");
const carouselText = document.getElementById("carousel-text");
const items = carousel.getElementsByClassName("carousel-item");

function updateText() {
    let closestItem = null;
    let closestDistance = Number.MAX_VALUE;

    Array.from(items).forEach((item) => {
        const rect = item.getBoundingClientRect();
        const itemCenter = rect.left + rect.width / 2;
        const carouselCenter =
            carousel.clientWidth / 2 + carousel.getBoundingClientRect().left;
        const distance = Math.abs(carouselCenter - itemCenter);

        if (distance < closestDistance) {
            closestDistance = distance;
            closestItem = item;
        }
    });

    if (closestItem) {
        const description = closestItem.getAttribute("data-description");
        carouselText.textContent = description;
    }
}

carousel.addEventListener("scroll", updateText);
updateText();

// memberikan efek bounce
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carousel");

    let isBouncing = false;

    carousel.addEventListener("scroll", function () {
        const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
        const currentScroll = carousel.scrollLeft;

        if (!isBouncing) {
            if (currentScroll === 0) {
                isBouncing = true;
                carousel.classList.add("bounce-left");
            } else if (currentScroll >= maxScrollLeft) {
                isBouncing = true;
                carousel.classList.add("bounce-right");
            }
        }
    });

    carousel.addEventListener("animationend", function () {
        carousel.classList.remove("bounce-left", "bounce-right");
        isBouncing = false;
    });
});

// efek bounce package
const bouncePackage = document.getElementById("bouncePackage");
bouncePackage.addEventListener("scroll", () => {
    const maxScrollLeft = bouncePackage.scrollWidth - bouncePackage.clientWidth;
    const currentScrollLeft = bouncePackage.scrollLeft;
    bouncePackage.classList.remove("bounce-left", "bounce-right");
    if (currentScrollLeft === 0) {
        bouncePackage.classList.add("bounce-left");
    }
    if (currentScrollLeft >= maxScrollLeft) {
        bouncePackage.classList.add("bounce-right");
    }
});

// efek bounce meeting
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
