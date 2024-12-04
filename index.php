<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="assets/scripts.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script>
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
</script>

</head>
<body class="flex items-center justify-center min-h-screen bg-blue-300">
    <div class="bg-white rounded-lg shadow-lg p-6 w-80">
        <div class="text-center">
            <p class="text-lg font-bold">Hai, Apa Kabar?</p>
            <p class="text-lg font-bold">Kenalin Aku<span class="text-blue-600"> Dini'k</span> itu loh</p>
            
        </div>
        <div class="flex justify-end my-4">
            <img src="assets/image/icon.jpg" alt="icon 1" class="w-60 h-auto">
        </div>
        <div class="text-center">
            <p class="text-sm">Mau tau lebih banyak lagi tentang aku</p>
            <p class="text-sm">klik aja tombol di bawah ini</p>
        </div>
        <div class="flex justify-center mt-4">
            <form action="homepage.php" method="post">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Selanjutnya <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <div id="loading-spinner" class="hidden ml-4">
                    <i class="fas fa-spinner fa-spin text-blue-500 text-xl"></i>
                </div>
            </form>
        </div>
    </div>
</body>
</html>