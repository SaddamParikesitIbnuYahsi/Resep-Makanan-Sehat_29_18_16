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
                            src="/img/sate ikan tengiri.jpg" 
                            alt="Sate Ikan Tengiri" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>500 gr ikan tenggiri</li>
                            <li>1 sdt tfasi bakar</li>
                            <li>15 batang sereh</li>
                            <li>Kelapa parut yang setengah tua</li>
                            <li>3 lembar daun salam</li>
                            <li>2 sdt air asam jawa</li>
                            <li>5 lembar daun jeruk</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Pecahkan telur ayam dalam wadah, tambahkan 1 sdm air, kocok hingga berbuih.</li>
                            <li>Panaskan mentega dalam wajan 18 cm hingga leleh. Masukkan daging ayam, aduk hingga kaku dan matang.</li>
                            <li>Tambahkan kacang panjang, jagung, dan wortel, aduk hingga layu.</li>
                            <li>Bumbui merica dan garam, aduk rata.</li>
                            <li>Tuangkan telur dan ratakan. Masak hingga pinggirnya beku.</li>
                            <li>Tutup wajan dan masak dengan api kecil hingga permukaan beku dan matang.</li>
                            <li>Angkat, potong-potong, dan sajikan hangat.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
