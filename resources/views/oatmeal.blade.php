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
                            src="/img/oatmeal telur.jpg" 
                            alt="Oatmeal Telur" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>6 sdm oat</li>
                            <li>400 ml air (secukupnya)</li>
                            <li>1 kuntum brokoli</li>
                            <li>1/2 buah wortel</li>
                            <li>Kacang polong secukupnya</li>
                            <li>2 buah jagung kapri</li>
                            <li>Selada secukupnya</li>
                            <li>3 buah tomat ceri</li>
                            <li>1 butir telur ayam</li>
                            <li>Bubuk cabai</li>
                            <li>Cabai rawit secukupnya (opsional)</li>
                            <li>Garam, merica, dan kaldu ayam secukupnya</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Rebus sayuran.</li>
                            <li>Panaskan wajan, goreng telur mata sapi.</li>
                            <li>Panaskan air di panci, masukkan oat dan aduk sampai rata dan mengental.</li>
                            <li>Tambahkan kaldu ayam, garam, merica, dan bubuk cabai, lalu aduk kembali.</li>
                            <li>Setelah matang, tuangkan oatmeal ke mangkok.</li>
                            <li>Tambahkan telur sebagai topping.</li>
                            <li>Tata juga sayuran yang sudah direbus, tomat ceri, dan selada.</li>
                            <li>Taburi merica dan bubuk cabai supaya rasanya semakin gurih dan pedas.</li>
                            <li>Resep siap disajikan!</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
