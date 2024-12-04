<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage-Dinik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<section id="certificates" class="mb-8">
            <h2 class="text-black font-bold text-2xl">Certificates</h2>
            <p class="text-gray-700 mt-2">This is the certificates section.</p>
        </section>
</body>
<script>
    function toggleNavbar() {
    const menu = document.getElementById('navbar-menu');
    menu.classList.toggle('hidden');
}
  function toggleDropdown(menuId) {
    // Ambil elemen dropdown berdasarkan ID yang diberikan
    const dropdownMenu = document.getElementById(menuId);

    // Periksa apakah elemen ditemukan, lalu toggle kelas 'hidden'
    if (dropdownMenu) {
        dropdownMenu.classList.toggle('hidden');
    } else {
        console.error(`Dropdown dengan ID ${menuId} tidak ditemukan.`);
    }
}

</script>
</html>