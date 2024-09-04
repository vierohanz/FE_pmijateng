function handleRedirect(event) {
    event.preventDefault(); // Mencegah redirect langsung

    const link = event.currentTarget;
    const parentDiv = link.closest("div.h-full.col-span-2"); // Elemen yang akan digeser

    // Tambahkan kelas untuk animasi
    parentDiv.classList.add("animate-slide-in");

    // Tunggu animasi selesai sebelum redirect
    setTimeout(() => {
        window.location.href = link.getAttribute("href");
    }, 500); // Durasi animasi sesuai dengan durasi di CSS
}
