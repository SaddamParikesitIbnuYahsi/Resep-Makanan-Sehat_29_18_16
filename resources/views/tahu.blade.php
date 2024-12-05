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
                            src="/img/telur tahu kukus.jpg" 
                            alt="Telur Tahu Kukus" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>4 butir telur</li>
                            <li>250 gr tahu putih</li>
                            <li>30 ml Sasa Santan Omega 3</li>
                            <li>150 gr wortel, potong dadu kecil</li>
                            <li>1 batang daun bawang, iris halus</li>
                            <li>2 siung bawang putih, haluskan</li>
                            <li>1/2 sdt merica bubuk</li>
                            <li>1 sdt garam</li>
                            <li>2 sdm tepung maizena</li>
                            <li>2 sdm minyak</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Haluskan tahu putih dengan Sasa Santan Omega 3.</li>
                            <li>Kocok telur di dalam mangkuk kemudian masukkan tahu, wortel, dan daun bawang, lalu aduk rata.</li>
                            <li>Tambahkan bawang putih, merica, garam, dan tepung maizena kemudian aduk rata.</li>
                            <li>Siapkan cetakan kecil yang telah diolesi dengan sedikit minyak. Kemudian tuang adonan hingga 3/4 penuh.</li>
                            <li>Setelah itu kukus adonan ke dalam panci pengukus selama 25 menit hingga matang dan padat. Angkat dan Tahu Telur Kukus siap untuk dihidangkan.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
