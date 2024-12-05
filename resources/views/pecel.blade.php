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
                            src="/img/pecel.jpg" 
                            alt="Pecel" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>2 helai Daun singkong</li>
                            <li>5 tangkai Kacang panjang</li>
                            <li>1 buah Wortel</li>
                            <li>2 lembar Kol</li>
                            <li>1/2 buah Timun</li>
                            <li>1/2 buah Labu siam</li>
                            <li>100 gram Kembang kol</li>
                            <li>100 gram Kecambah</li>
                            <li>Secukupnya Tahu</li>
                            <li>Secukupnya Tempe</li>
                            <li>200 gram Kacang tanah goreng</li>
                            <li>3 siung Bawang merah</li>
                            <li>2 siung Bawang putih</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Siapkan bahan.</li>
                            <li>Siapkan panci berisi air dan alas untuk mengukus sayur.</li>
                            <li>Masukkan daun singkong di bawahnya beri garam sedikit.</li>
                            <li>Letakkan alas mengukus (sarangan) di panci, masukkan sayur wortel, kembang kol, kacang panjang, labu siam, dan rebus sampai mendidih.</li>
                            <li>Haluskan kacang tanah goreng dan bawang, tambahkan cabe keriting, beri air, garam, gula, dan kecap.</li>
                            <li>Tambahkan air sampai kekentalan cukup.</li>
                            <li>Tes rasa, tuangkan sambal kacang ke wadah.</li>
                            <li>Siapkan nampan atau piring, tata sayuran di atasnya, dan sayur pecal siap disajikan.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
