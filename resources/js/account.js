import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import Toastify from 'toastify-js'
import "toastify-js/src/toastify.css"

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#birth-day", {
        dateFormat: "d/m/Y",
    });
});

// Function to display toast with error messages
function showErrors(errors) {
    Toastify({
        text: errors.join('\n'), // Combine all errors into one string
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
    }
}

