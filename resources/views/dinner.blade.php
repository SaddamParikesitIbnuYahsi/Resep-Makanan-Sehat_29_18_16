<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waliyan</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="flex justify-between items-center mb-6">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Cari Makanan" 
                        class="bg-gray-700 text-gray-300 placeholder-gray-500 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 w-72"
                    >
                </div>
                <div class="space-x-4">
                    <button class="bg-gray-800 px-4 py-2 rounded-full border border-gray-600 text-gray-300 hover:bg-indigo-600 hover:text-white transition">Sign Up</button>
                    <button class="bg-indigo-600 px-4 py-2 rounded-full text-white hover:bg-indigo-700 transition">Login</button>
                </div>
            </header>

            <!-- Hero Section -->
            <section class="rounded-lg overflow-hidden mb-6">
                <img src="img/Group 12.png" alt="Healthy Food" class="w-full h-60 object-cover">
            </section>

            <!-- Food Category -->
            <section>
                <h2 class="text-2xl font-semibold mb-6">Dinner</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                        <img src="img/capcay udang.jpg" alt="CU" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Capcay Udang</h3>
                        <button class="mt-4"><a href="cu" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                    <img src="img/sop bening.jpg" alt="Sop Bening" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Sop Bening</h3>
                        <button class="mt-4"><a href="sopbening" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                        <img src="img/ayam panggang.jpg" alt="Sapi Lada Hitam" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Ayam Panggang</h3>
                        <button class="mt-4"><a href="ayap" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                        <img src="img/gurame asam manis.jpg" alt="Pecel" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Gurame Asam Manis</h3>
                        <button class="mt-4"><a href="gurame" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 5 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                        <img src="img/nasi bakar ayam suwir kemangi.jpg" alt="Ayam Panggang" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Nasi Bakar Ayam Suwir Kemangi</h3>
                        <button class="mt-4"><a href="nasi" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 6 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                    <img src="img/pepes ayam.jpg" alt="Ayam Panggang" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Pepes Ayam</h3>
                        <button class="mt-4"><a href="pepes" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 7 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                    <img src="img/steak ayam.jpg" alt="Ayam Black Pepper" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Steak Ayam</h3>
                        <button class="mt-4"><a href="steak" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 8 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                        <img src="img/bola daging.jpg" alt="Bola Daging" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Bola Daging</h3>
                        <button class="mt-4"><a href="bola" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                    <!-- Card 9 -->
                    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
                        <img src="img/sate ikan tengiri.jpg" alt="Salad Pasta" class="rounded-lg w-full h-32 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-white">Sate Ikan Tengiri</h3>
                        <button class="mt-4"><a href="sate" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
