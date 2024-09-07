// profile change
const profilePicture = document.getElementById("profilePicture");
const fileInput = document.getElementById("fileInput");

// Function to load image from LocalStorage
function loadProfilePicture() {
    const savedImage = localStorage.getItem("profileImage");
    if (savedImage) {
        profilePicture.style.backgroundImage = `url(${savedImage})`;
    } else {
        profilePicture.style.backgroundImage =
            'url("path/to/default-image.jpg")';
    }
}

// Load profile picture on page load
window.onload = function () {
    loadProfilePicture();
};

// Add click event to trigger file input when profile picture is clicked
profilePicture.addEventListener("click", () => {
    fileInput.click();
});

// Handle file input change event
fileInput.addEventListener("change", function (event) {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const imageUrl = e.target.result;

            // Update the profile picture
            profilePicture.style.backgroundImage = `url(${imageUrl})`;

            // Save the image URL to LocalStorage
            localStorage.setItem("profileImage", imageUrl);

            // Configure Toastr options before showing notification
            toastr.options = {
                positionClass: "toast-bottom-right",
                preventDuplicates: true,
                progressBar: true,
                timeOut: "5000",
                debug: true,
                newestOnTop: false,
                progressBar: true,
                positionClass: "toast-bottom-right",
                preventDuplicates: true,
            };

            // Show custom toast notification using Toastr
            toastr["success"]("Sukses mengupdate profile", "Update");
        };

        reader.onerror = function () {
            console.error("Error reading file");
        };

        reader.readAsDataURL(file);
    }
});
