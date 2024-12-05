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
                        <img src="/img/ikan dori crispy.jpg" alt="Ikan Dori Crispy" class="rounded-lg w-full h-auto object-cover">
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>1 ekor ikan dori fillet</li>
                            <li>2 buah Tomat Bandung</li>
                            <li>1/2 sdm margarin</li>
                            <li>2 sdm saus bulgogi Kikkoman</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Siapkan bahan</li>
                            <li>Bilas tomat di air mengalir dan potong tipis-tipis</li>
                            <li>Potong ikan dori menjadi 4 bagian</li>
                            <li>Tuang 2 sdm saus bulgogi ke atas ikan dori, dan balurkan ke semua permukaan ikan, diamkan selama 10 menit agar saus meresap ke dalam ikan</li>
                            <li>Oleskan margarin di pan, oles-oles sampai lumer</li>
                            <li>Setelah margarin lumer, panggang ikan dori sambil dibolak-bali selama 3-4 menit, masak sampai warna coklat matang</li>
                            <li>Angkat dan sajikan di piring bersama tomat yang sudah diiris. Lebih sedap lagi dicocol bersama sambal.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
