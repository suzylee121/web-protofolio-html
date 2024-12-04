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
<body class="bg-gray-100">
    <header class="bg-blue-500 p-8 flex items-center justify-between rounded-b-lg sticky top-0 z-30">
        <div class="flex items-center">
            <div class="bg-white rounded-full p-2">
                <i class="fas fa-user text-black"></i>
            </div>
            <h1 class="text-black font-bold ml-2">I’m Dini’k</h1>
        </div>
        <!-- Ikon Menu -->
        <div>
            <i class="fas fa-bars text-white text-2xl cursor-pointer" onclick="toggleNavbar()"></i>
        </div>
    </header>

    <main class="p-2">
    <!-- Navbar -->
    <nav id="navbar-menu" class="hidden bg-gray-500 text-white p-4">
        <ul class="space-y-2">
            <li><a href="#about-me" class="hover:underline">About Me</a></li>
            <li><a href="#education" class="hover:underline">Education Background</a></li>
            <li><a href="#skills" class="hover:underline">Skill and Hobby</a></li>
            <li><a href="#certificates" class="hover:underline">Certificates</a></li>
            <li><a href="#contact" class="hover:underline">Contact</a></li>
        </ul>
    </nav>
    <section>
          
            <!-- Kontainer utama -->
            <div class="relative rounded-[20px] overflow-hidden mt-4 w-full max-w-screen-lg mx-auto">
                <div class="flex overflow-x-auto scrollbar-hide space-x-4 border-radius: 20px 20px 20px 20px">
                    <div class="min-w-full h-[50vh] rounded-lg text-center text-black flex items-start justify-center relative">
                        <img src="assets/image/doc-1/foto1.jpg" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-60 ">  
                        <div class="absolute text-center text-black p-4">
                            <p class="text-black-100 mt-2">
                                <h2><b class="text-blue-500">Kuliah - Teknik Komputer</b></h2>
                                <span class="block mt-2">Melanjutkan pendidikan dengan fokus pada pengembangan sistem informasi dan manajemen data. Di sini saya belajar bahasa pemrograman tingkat lanjut dan teknologi cloud.</span>
                            </p>
                            <a href="doc/doc-kuliah.php">
                                <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4">
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-full h-[50vh] rounded-lg text-center text-black flex items-center justify-center relative">
                        <img src="assets/image/doc-2/foto1.png" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-60">  
                        <div class="absolute text-center text-black p-4">
                            <p >
                                <h2><b class="text-blue-500">Organisasi - Pengembangan diri dan Relasi Sesama mahasiswa</b></h2>
                                <span class="block text-black-100 mt-2"> Sebuah fase awal dalam perjalanan saya, di mana saya mulai aktif berorganisasi, membangun relasi, 
                                dan memahami pentingnya kolaborasi dengan sesama mahasiswa.</span>
                            </p>
                            <a href="doc/doc-organ.php">
                                <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4">
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-full h-[50vh] rounded-lg text-center text-black flex items-center justify-center relative ">
                        <img src="assets/image/doc-3/foto1.png" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-60">  
                        <div class="absolute text-center text-black p-4">
                            <p class="text-black-100 mt-2">
                                <h2><b class="text-blue-500">Hiburan - kegiatan untuk kesenangan badan dan batin</b></h2>
                                <span class="block mt-2">   Berbagai aktivitas yang saya nikmati untuk mengisi waktu luang. Bermain futsal dan badminton membantu menjaga kesehatan fisik serta mempererat hubungan sosial. Selain itu, saya juga suka menjelajahi tempat-tempat baru untuk mendapatkan pengalaman unik dan memperluas wawasan.
                                </span> </span>
                            </p>
                            <a href="doc/doc-hiburan.php">
                                <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4">
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-full h-[50vh] rounded-lg text-center text-black flex items-center justify-center relative">
                        <img src="assets/image/doc-4/foto1.jpg" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-60">  
                        <div class="absolute text-center text-black p-4">
                            <p class="text-black-100 mt-2">
                                <h2><b class="text-blue-500">SMK - Rekayasa Perangkat Lunak</b></h2>
                                <span class="block mt-2">Jenjang awal, di mana saya mulai mengenal dunia teknologi dan pemrograman. Di sinilah saya memahami dasar-dasar pengembangan perangkat lunak, algoritma, dan logika pemrograman.</span>
                            </p>
                            <a href="doc/doc-smk.php">
                                <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4">
                                    Lihat
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Icon scroll -->
                <div class="absolute inset-0 flex justify-between items-center pointer-events-none">
                    <div class="bg-gradient-to-r from-white via-white/70 to-transparent h-full w-10 flex items-center justify-center">
                        <i class="fas fa-chevron-left text-black text-2xl"></i>
                    </div>
                    <div class="bg-gradient-to-l from-white via-white/70 to-transparent h-full w-10 flex items-center justify-center">
                        <i class="fas fa-chevron-right text-black text-2xl"></i>
                    </div>
                </div>
            </div>
        </section>

        
<!------------------------------------------------------------------------ HomePage ------------------------------------------------------------------->
        <section id="about-me" class="mb-8 w-full">
            <div class="relative bg-gray-300 rounded-lg shadow-lg w-full max-w-screen-lg mx-auto">
                    <div class="absolute top-0 left-1/2 transform -translate-y-1/2 -translate-x-1/2 w-40 h-40 rounded-full overflow-hidden border-4 border-blue-500 shadow-lg">
                        <img alt="foto profil" class="rounded-full w-full h-full object-cover" src="assets/image/f-about.jpg"/>
                    </div>
                    <div class="text-center mt-12 p-20">
                    <p class="text-blue-500">
                    seorang pemula pengembang w/m dan QA Engineer
                    </p>
                    <h2 class="text-2xl font-bold">
                        Dini Dama Yanti
                    </h2>
                    <p class="mt-4 text-gray-700">
                    Nama lengkap saya Dini Dama Yanti. Saya merupakan seorang mahasiswa yang mempunyai semangat dan cita-cita yang tinggi dalam bidang teknologi, khususnya dalam dunia pemrograman dan rekayasa perangkat lunak. Saat ini, saya sedang belajar di
                        <a class="text-blue-500 underline" href="#">
                            Politeknik Negeri Padang
                        </a>
                        dan jurusan
                        <a class="text-blue-500 underline" href="#">
                        information Technology
                        </a>.
                        Since I first entered the world of computers and technology, I have felt very interested and captivated by the creative and logical processes
                         behind software development. I believe that with programming, I can create solutions to real problems and have a positive impact on society.
                    </p>
                


                    <hr style="border: 1px solid #000; width: 100%;">

                <div class="flex justify-center mt-2 space-x-3">
                    <a class="text-blue-500" href="https://web.facebook.com/profile.php?id=61568961076824">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a class="text-blue-500" href="https://www.instagram.com/behemoth_111/">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a class="text-blue-500" href="https://www.linkedin.com/in/dini-damayanti-0b3423338/">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>
            </div>
        </section>
<!------------------------------------------------------------------------ Pendidikan ------------------------------------------------------------------->
        <section id="education" class="p2">
            <div class="relative mb-12 px-4 md:px-8 relative">
                <h1 class="bg-blue-500 text-white text-center font-extrabold text-3xl md:text-4xl tracking-wider p-4 rounded-md relative">
                    <span class="relative z-10">
                        Education <span>Background</span>
                    </span>
                    <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-white rounded-md"></span>
                </h1>

                <!-- Vertical Line -->
                <div class="absolute left-1/2 top-16 transform -translate-x-1/2 h-full w-1 bg-gray-300"></div>

                <div class="flex flex-col mt-6 space-y-12 relative">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row-reverse items-center md:items-start space-y-6 md:space-y-0 md:space-x-8 relative">
                        <div class="w-24 h-24 bg-gray-400 rounded-full flex items-center justify-center overflow-hidden shadow-lg group-hover:scale-105 transition-transform duration-300">
                            <img src="assets/image/school/foto4.jpg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center md:text-end">
                            <h2 class="text-2xl md:text-3xl font-extrabold text-red-600 group-hover:text-red-800 transition-colors duration-300">Politeknik Negeri Padang</h2>
                            <p class="text-gray-700 leading-relaxed">
                                Di mana saya melanjutkan pendidikan tinggi serta pengembangan ilmu, minat, dan bakat saya, terutama di bidang teknologi informasi.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-6 relative">
                        <div class="w-24 h-24 bg-gray-400 rounded-full flex items-center justify-center overflow-hidden shadow-lg group-hover:scale-105 transition-transform duration-300">
                            <img src="assets/image/school/foto3.jpg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center md:text-start">
                            <h2 class="text-2xl md:text-3xl font-extrabold text-blue-600 group-hover:text-purple-800 transition-colors duration-300">SMK Maritim Nusantara</h2>
                            <p class="text-gray-700 leading-relaxed">
                                Mulai Sekolah Menengah Kejuruan tahun 2019, di sini saya mengenal apa itu teknologi dan mengambil jurusan Rekayasa Perangkat Lunak.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex flex-col md:flex-row-reverse items-center md:items-start space-y-6 md:space-y-0 md:space-x-8 relative">
                        <div class="w-24 h-24 bg-gray-400 rounded-full flex items-center justify-center overflow-hidden shadow-lg group-hover:scale-105 transition-transform duration-300">
                            <img src="assets/image/school/foto2.jpg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center md:text-end">
                            <h2 class="text-2xl md:text-3xl font-extrabold text-green-600 group-hover:text-green-800 transition-colors duration-300">Mts Negeri 4 Agam</h2>
                            <p class="text-gray-700 leading-relaxed">
                                Mulai Sekolah Menengah Pertama tahun 2016, di sini saya menempuh pendidikan tentang keagamaan dan menemukan pemahaman lebih tentang agama Islam itu sendiri.
                            </p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8 relative">
                        <div class="w-24 h-24 bg-gray-400 rounded-full flex items-center justify-center overflow-hidden shadow-lg group-hover:scale-105 transition-transform duration-300">
                            <img src="assets/image/school/foto1.jpg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="text-center md:text-start">
                            <h2 class="text-2xl md:text-3xl font-extrabold text-black group-hover:text-blue-800 transition-colors duration-300">SD Negeri 17 Balai Ahad</h2>
                            <p class="text-gray-700 leading-relaxed">
                                Mulai Sekolah Dasar tahun 2010, di sini saya mengenal hobi saya yang membawa saya untuk menjadi perwakilan sekolah di cabang olahraga badminton.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!------------------------------------------------------------------------ Skills ------------------------------------------------------------------->
        <section id="skills" class="mb-8 p-4">
        <h1 class="bg-blue-500 text-white text-center font-extrabold text-3xl md:text-4xl tracking-wider p-4 rounded-md relative">
                    <span class="relative z-10">
                       Craft  <span >& Prowess</span>
                    </span>
                    <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-blue-500 rounded-md"></span>
                </h1>
                <p class="text-gray-700 text-center mt-2">Sesuatu yang memadukan keahlian teknis dengan ekspresi artistik untuk 
                    menghasilkan solusi yang berdampak dan proyek yang bermakna.</p>   
                <div class="grid grid-cols-2 gap-4 mt-4">
             <!-- Dropdown mobile dev -->
             <div class="bg-gray-300 rounded-lg p-4 flex flex-col md:flex-row items-center gap-4 relative shadow-lg">
                    <!-- Gambar -->
                    <div class="w-full md:w-1/2 h-full relative">
                        <img src="assets/image/App.jpg" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-80">
                    </div>

                    <!-- Dropdown Section -->
                    <div class="w-full md:w-1/2 grid grid-cols-2 gap-4 items-center">
                        <!-- Dropdown 1: Skills -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu1')"
                                id="dropdownButton1"
                            >
                                Skills
                            </button>
                            <div id="dropdownMenu1" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option A</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option B</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option C</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Dropdown 2: Project -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu2')"
                                id="dropdownButton2"
                            >
                                Project
                            </button>
                            <div id="dropdownMenu2" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 1</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 2</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                    <!-- Dropdown web dev -->
                    <div class="bg-gray-300 rounded-lg p-4 flex flex-col md:flex-row items-center gap-4 relative shadow-lg">
                    <!-- Gambar -->
                    <div class="w-full md:w-1/2 h-full relative">
                        <img src="assets/image/web.png" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-80">
                    </div>

                    <!-- Dropdown Section -->
                    <div class="w-full md:w-1/2 grid grid-cols-2 gap-4 items-center">
                        <!-- Dropdown 1: Skills -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu1')"
                                id="dropdownButton1"
                            >
                                Skills
                            </button>
                            <div id="dropdownMenu1" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option A</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option B</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option C</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Dropdown 2: Project -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu2')"
                                id="dropdownButton2"
                            >
                                Project
                            </button>
                            <div id="dropdownMenu2" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 1</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 2</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Dropdown ms.office -->
                    <div class="bg-gray-300 rounded-lg p-4 flex flex-col md:flex-row items-center gap-4 relative shadow-lg">
                    <!-- Gambar -->
                    <div class="w-full md:w-1/2 h-full relative">
                        <img src="assets/image/office.jpg" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-80">
                    </div>

                    <!-- Dropdown Section -->
                    <div class="w-full md:w-1/2 grid grid-cols-2 gap-4 items-center">
                        <!-- Dropdown 1: Skills -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu1')"
                                id="dropdownButton1"
                            >
                                Skills
                            </button>
                            <div id="dropdownMenu1" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option A</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option B</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option C</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Dropdown 2: Project -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu2')"
                                id="dropdownButton2"
                            >
                                Project
                            </button>
                            <div id="dropdownMenu2" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 1</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 2</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Dropdown hardware -->
                    <div class="bg-gray-300 rounded-lg p-4 flex flex-col md:flex-row items-center gap-4 relative shadow-lg">
                    <!-- Gambar -->
                    <div class="w-full md:w-1/2 h-full relative">
                        <img src="assets/image/hardware.jpg" alt="Foto" class="object-cover w-full h-full rounded-lg opacity-80">
                    </div>

                    <!-- Dropdown Section -->
                    <div class="w-full md:w-1/2 grid grid-cols-2 gap-4 items-center">
                        <!-- Dropdown 1: Skills -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu1')"
                                id="dropdownButton1"
                            >
                                Skills
                            </button>
                            <div id="dropdownMenu1" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option A</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option B</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option C</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Dropdown 2: Project -->
                        <div class="relative flex justify-center">
                            <button 
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200 ease-in-out transform hover:scale-105" 
                                onclick="toggleDropdown('dropdownMenu2')"
                                id="dropdownButton2"
                            >
                                Project
                            </button>
                            <div id="dropdownMenu2" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-10">
                                <ul class="py-1 text-gray-700">
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 1</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 2</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

<!------------------------------------------------------------------------ Sertifikat ------------------------------------------------------------------->        
        <section id="certificates" class="mb-8 px-4">
        <h2 class="text-black font-bold text-2xl text-center">Certificates</h2>
        <p class="text-gray-700 mt-2 text-center">
            Here are some of the certificates I have achieved.
        </p>

        <!-- Certificate Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <img
                src="https://via.placeholder.com/300x200"
                alt="Certificate 1"
                class="w-full h-48 object-cover"
            />
            <div class="p-4">
                <h3 class="text-lg font-semibold text-black">Certificate Title 1</h3>
                <p class="text-gray-600 text-sm mt-2">Issued by Organization 1</p>
                <p class="text-gray-500 text-xs mt-1">Date: January 2023</p>
            </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <img
                src="https://via.placeholder.com/300x200"
                alt="Certificate 2"
                class="w-full h-48 object-cover"
            />
            <div class="p-4">
                <h3 class="text-lg font-semibold text-black">Certificate Title 2</h3>
                <p class="text-gray-600 text-sm mt-2">Issued by Organization 2</p>
                <p class="text-gray-500 text-xs mt-1">Date: February 2023</p>
            </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <img
                src="https://via.placeholder.com/300x200"
                alt="Certificate 3"
                class="w-full h-48 object-cover"
            />
            <div class="p-4">
                <h3 class="text-lg font-semibold text-black">Certificate Title 3</h3>
                <p class="text-gray-600 text-sm mt-2">Issued by Organization 3</p>
                <p class="text-gray-500 text-xs mt-1">Date: March 2023</p>
            </div>
            </div>
        </div>
        </section>


<!------------------------------------------------------------------------ contact ------------------------------------------------------------------->
        <section id="contact">
            <h2 class="text-black font-bold text-2xl">Contact</h2>
            <p class="text-gray-700 mt-2">This is the contact section.</p>
        </section>

        </main>
    
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