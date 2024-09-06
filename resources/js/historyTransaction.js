// JavaScript for filtering cards by status
document.querySelectorAll(".status-button").forEach((button) => {
    button.addEventListener("click", function () {
        const status = this.getAttribute("data-status");
        const cards = document.querySelectorAll(".card");

        cards.forEach((card) => {
            if (
                status === "all" ||
                card.getAttribute("data-status") === status
            ) {
                card.style.display = "flex"; // Show the card
            } else {
                card.style.display = "none"; // Hide the card
            }
        });

        // Update button styles
        document.querySelectorAll(".status-button").forEach((btn) => {
            btn.classList.remove("bg-red-500", "text-white");
            btn.classList.add("bg-gray-200", "text-gray-800");
        });
        this.classList.add("bg-red-500", "text-white");
        this.classList.remove("bg-gray-200", "text-gray-800");
    });
});
