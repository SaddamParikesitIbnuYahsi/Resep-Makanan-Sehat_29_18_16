<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waliyan - Resep Makanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-100 font-poppins">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 h-screen p-6">
            <h1 class="text-2xl font-bold text-white mb-8">Waliyan</h1>
            <nav>
                <ul class="space-y-4">
                    <li><a href="breakfast" class="text-gray-400 hover:text-white transition">Breakfast</a></li>
                    <li><a href="/" class="text-gray-400 hover:text-white transition">Lunch</a></li>
                    <li><a href="dinner" class="text-gray-400 hover:text-white transition">Dinner</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Content Container -->
        <main class="flex-1 p-6">
            <!-- Recipe Content -->
            <section class="bg-gray-800 rounded-lg p-6 shadow-lg">
                <div class="flex flex-col md:flex-row gap-12">
                    <!-- Image -->
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img 
                            src="/img/pepes ayam.jpg" 
                            alt="Pepes Ayam" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>2 buah Dada Ayam</li>
                            <li>3 siung bawang putih geprek</li>
                            <li>1 butir bawang putih geprek</li>
                            <li>1 buah Bawang Bombay</li>
                            <li>1/2 buah Paprika Merah, 1/2 buah Paprika Hijau</li>
                            <li>3 sdm Saus Sambal</li>
                            <li>2 sdm Saus Tomat</li>
                            <li>2 sdm Kecap manis</li>
                            <li>1 sdm Saus tiram</li>
                            <li>2 sdm Lada Hitam bubuk</li>
                            <li>Secukupnya garam, gula pasir</li>
                            <li>Secukupnya air</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Masukkan 1 butir bawang putih geprek dan sejumput garam. Lalu rebus potongan dada ayam hingga matang.</li>
                            <li>Goreng potongan ayam yang sudah direbus tadi, goreng sebentar saja hingga daging berubah warna kecoklatan. Angkat dan tiriskan minyaknya.</li>
                            <li>Siapkan wajan, tumis bawang putih cincang, lalu masukkan potongan paprika merah dan aduk rata.</li>
                            <li>Lalu masukkan potongan ayam fillet, beri saus sambal, saus tomat, saus tiram, kecap manis, garam, dan gula pasir. Aduk rata, lalu tuangkan air secukupnya hingga ayam terendam.</li>
                            <li>Koreksi rasa. Masak hingga kuah menyusut. Terakhir masukkan potongan paprika hijau dan bawang bombay, aduk rata dan masak sebentar saja. Angkat.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
