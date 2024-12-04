function toggleDropdown() {
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownMenu.classList.toggle('hidden');
}
// Fungsi untuk toggle menu navbar
function toggleNavbar() {
    const menu = document.getElementById("navbar-menu");
    menu.classList.toggle("hidden");
}

// Fungsi untuk menyembunyikan navbar setelah item diklik
function hideNavbarOnClick() {
    const menu = document.getElementById("navbar-menu");
    menu.classList.add("hidden");
}

// Menambahkan event listener ke semua link dalam navbar
document.addEventListener("DOMContentLoaded", () => {
    const navbarLinks = document.querySelectorAll("#navbar-menu a");
    navbarLinks.forEach(link => {
        link.addEventListener("click", hideNavbarOnClick);
    });
});
const container = document.querySelector('.scroll-container');

// Scroll ke kiri
function scrollLeft() {
    container.style.transform = 'translateX(100%)'; // Scroll ke kiri
}

// Scroll ke kanan
function scrollRight() {
    container.style.transform = 'translateX(-100%)'; // Scroll ke kanan
}

document.getElementById('next-page-form').addEventListener('submit', function (event) {
    // Mencegah form langsung dikirim
    const submitButton = document.getElementById('submit-button');
    const loadingSpinner = document.getElementById('loading-spinner');

    // Menampilkan spinner loading
    loadingSpinner.classList.remove('hidden');

    // Nonaktifkan tombol untuk mencegah klik berulang
    submitButton.disabled = true;

    // Opsional: Hapus teks pada tombol untuk menampilkan hanya spinner
    submitButton.innerHTML = 'Loading...';

    // Form akan tetap terkirim setelah JavaScript selesai
});

