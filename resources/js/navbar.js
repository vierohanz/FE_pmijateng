import $ from "jquery";
import Toastify from 'toastify-js'
import "toastify-js/src/toastify.css"

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


//Function to display toast with error messages
function showErrors(errors) {
    Toastify({
        text: errors.join('\n'), 
        duration: 2000,
        position: 'right',
        backgroundColor: 'red'
    }).showToast();
}

// Function to display toast with general messages
function showMessages(messages) {
    Toastify({
        text: messages.join('\n'), 
        duration: 2000,
        position: 'right',
        backgroundColor: 'green'
    }).showToast();
}

// Check for error messages from the backend
const errorElement = document.getElementById('error-messages');
if (errorElement) {
    const errorMessages = JSON.parse(errorElement.dataset.messages);
    if (errorMessages.length > 0) {
        showErrors(errorMessages);
    }
}

// Check for general messages from the backend
const messageElement = document.getElementById('flash-message');
if (messageElement) {
    const messages = [messageElement.dataset.message]; 
    if (messages.length > 0) {
        showMessages(messages);
         messageElement.remove();
    }
}
