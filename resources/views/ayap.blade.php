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
                            src="/img/ayam panggang.jpg" 
                            alt="Ayam Panggang Kecap" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>1 buah Bawang Bombay</li>
                            <li>5 sdm Kecap manis</li>
                            <li>Secukupnya Margarin</li>
                            <li>Bumbu halus</li>
                            <li>5 siung Bawang putih</li>
                            <li>1/2 sdt Merica</li>
                            <li>Secukupnya Garam</li>
                            <li>1 sdt Kaldu bubuk</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Cuci bersih ayam, ambil dagingnya saja dan hilangkan tulangnya, kemudian potong-potong.</li>
                            <li>Ulek bumbu sampai halus, kemudian marinasi ayam dengan bumbu tersebut. Diamkan sekitar 15 menit.</li>
                            <li>Siapkan panggangan/grill, oles dengan margarin, kemudian taruh ayam di atasnya. Bolak-balik agar tidak gosong dan matang merata.</li>
                            <li>Oleskan kecap manis dan bolak-balik. Beri irisan bawang Bombay. Tunggu sampai ayam mengeluarkan minyak dan matang. Matikan kompor.</li>
                            <li>Ayam Fillet Panggang Kecap siap disajikan.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
