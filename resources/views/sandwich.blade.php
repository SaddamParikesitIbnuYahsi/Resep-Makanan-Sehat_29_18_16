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
                            src="/img/sandwich.jpg" 
                            alt="Sandwich" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>2 buah toti tawar</li>
                            <li>2 btr telur</li>
                            <li>secukupnya garam</li>
                            <li>Secukupnya merica bubuk</li>
                            <li>secukupnya origano</li>
                            <li>Secukupnya Cabai Bubuk (saya ga pake)</li>
                            <li>2 iris tomat</li>
                            <li>1 lembar daun selada</li>
                            <li>2 lembar keju slice</li>
                            <li>1 sdm butter</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Kocok telur, garam, kaldu bubuk, origano, dan merica hingga rata.</li>
                            <li>Siapkan teflon, masukkan butter/margarin dan biarkan leleh. Masukkan kocokan telur dan dadarkan. Letakkan 2 roti tawar di atasnya dan balikkan rotinya. Setelah telurnya matang, balikkan semuanya. Tata irisan tomat, daun selada, dan keju. Lipat sisi kiri dan kanan telur ke tengah roti, lalu lipat menjadi satu. Panggang bolak-balik hingga rata.</li>
                            <li>Setelah kedua sisi rata, angkat. Belah dua sandwich, sajikan.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
