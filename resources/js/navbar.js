import $ from "jquery";

window.addEventListener("scroll", function () {
    var navbar = document.getElementById("navbar");
    if (window.scrollY > 250) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add(
            "bg-[#151148]",
            "transition-all",
            "ease-in",
            "duration-400"
        );
    } else {
        navbar.classList.remove("bg-[#151148]");
        navbar.classList.add("bg-transparent");
    }
});

// Toggle humberger for sidebar
document.getElementById("toggle-button").addEventListener("click", function () {
    var sidebar = document.getElementById("sidebar");
    if (sidebar.classList.contains("-translate-x-full")) {
        sidebar.classList.remove("-translate-x-full");
        sidebar.classList.add("translate-x-0");
    } else {
        sidebar.classList.remove("translate-x-0");
        sidebar.classList.add("-translate-x-full");
    }
});

// Smooth scrolling for all anchor links
$('a[href*="#"]').on("click", function (e) {
    e.preventDefault();

    $("html, body").animate(
        {
            scrollTop: $($(this).attr("href")).offset().top,
        },
        1000,
        "linear"
    );
});
