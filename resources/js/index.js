import AOS from "aos";
import "aos/dist/aos.css";
import "flowbite";
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import $ from "jquery";
import Toastify from "toastify-js";
import "toastify-js/src/toastify.css";
import toastr from "toastr";
import "toastr/build/toastr.min.css";
import "toastr/build/toastr.min.css";
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
    // Inisialisasi flatpickr untuk input tanggal
    flatpickr("#arrival-date", {
        dateFormat: "Y/m/d",
        onChange: function (selectedDates) {
            // Simpan tanggal kedatangan ke localStorage
            localStorage.setItem(
                "arrivalDate",
                selectedDates[0] ? selectedDates[0].toISOString() : ""
            );
        },
    });

    flatpickr("#departure-date", {
        dateFormat: "Y/m/d",
        onChange: function (selectedDates) {
            // Simpan tanggal keberangkatan ke localStorage
            localStorage.setItem(
                "departureDate",
                selectedDates[0] ? selectedDates[0].toISOString() : ""
            );
        },
    });

    // Ambil tanggal dari localStorage saat halaman dimuat
    const savedArrivalDate = localStorage.getItem("arrivalDate");
    const savedDepartureDate = localStorage.getItem("departureDate");

    if (savedArrivalDate) {
        document
            .getElementById("arrival-date")
            ._flatpickr.setDate(savedArrivalDate);
    }

    if (savedDepartureDate) {
        document
            .getElementById("departure-date")
            ._flatpickr.setDate(savedDepartureDate);
    }

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

async function loadReviews() {
    try {
        const response = await fetch(
            "https://dashboard.palmerinjateng.id/api/v1/review/getTopReview"
        );
        const reviews = await response.json();
        const carouselContent = document.getElementById("carousel-content");

        reviews.forEach((review, index) => {
            const stars = renderStars(review.score);
            const reviewItem = `
                    <div class="duration-700 ease-in-out ${
                        index === 0 ? "block" : "hidden"
                    }" data-carousel-item>
                        <div class="flex flex-col xl:flex-row justify-center items-center h-full w-full space-x-4 p-4">
                            <div class="text-center justify-center flex flex-col items-center xl:text-left mt-4 xl:mt-0">
                                <p class="font-judson font-semibold text-xl xl:text-4xl ">${
                                    review.name
                                }</p>
                                <div class="flex justify-center xl:justify-start space-x-1 mt-2">
                                    ${stars}
                                </div>
                                <p class="font-poppins italic font-semibold text-lg xl:text-xl px-4 xl:px-0 text-custom-third mt-4">
                                    "${review.review}"
                                </p>
                            </div>
                        </div>
                    </div>`;
            carouselContent.insertAdjacentHTML("beforeend", reviewItem);
        });
    } catch (error) {
        console.error("Error loading reviews:", error);
    }
}

function renderStars(score) {
    let stars = "";
    for (let i = 0; i < score; i++) {
        stars += `<svg aria-hidden="true" class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.566 4.82a1 1 0 00.95.69h5.065c.969 0 1.371 1.24.588 1.81l-4.1 2.98a1 1 0 00-.364 1.118l1.566 4.82c.3.921-.755 1.688-1.54 1.118l-4.1-2.98a1 1 0 00-1.175 0l-4.1 2.98c-.784.57-1.838-.197-1.539-1.118l1.566-4.82a1 1 0 00-.364-1.118L.83 10.247c-.783-.57-.38-1.81.588-1.81h5.066a1 1 0 00.95-.69l1.565-4.82z"/>
                      </svg>`;
    }
    return stars;
}
loadReviews();
