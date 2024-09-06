function togglePasswordVisibility(id) {
    const passwordInput = document.getElementById(id);
    const passwordEye = document.getElementById(id + "-eye");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordEye.textContent = "visibility_off"; // Ubah ikon
    } else {
        passwordInput.type = "password";
        passwordEye.textContent = "visibility"; // Kembalikan ikon
    }
}

// Pastikan fungsi dapat diakses dari global scope
window.togglePasswordVisibility = togglePasswordVisibility;
