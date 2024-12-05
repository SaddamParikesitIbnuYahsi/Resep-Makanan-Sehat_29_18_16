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
                            src="/img/sapi lada hitam.jpg" 
                            alt="Oatmeal Telur" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>500 gr daging sapi</li>
                            <li>1 sdm maizena</li>
                            <li>4 siung bawang putih</li>
                            <li>1 bh bawang bombay</li>
                            <li>Paprika secukupnya, potong-potong</li>
                            <li>1.5 sdm kecap manis</li>
                            <li>1 sdm kecap asin</li>
                            <li>1 sdt minyak wijen</li>
                            <li>1 sdt saus tiram</li>
                            <li>1 sdt lada hitam</li>
                            <li>Secukupnya garam, gula, dan air</li>
                            <li>1 sdm maizena dilarutkan dengan air untuk mengentalkan</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Siapkan bahan-bahan.</li>
                            <li>Potong daging sapi sesuai selera, iris bawang putih dan bawang bombay.</li>
                            <li>Panaskan minyak dalam wajan, tumis bawang putih dan bawang bombay hingga harum.</li>
                            <li>Masukkan daging sapi, aduk hingga berubah warna.</li>
                            <li>Tambahkan paprika, kecap manis, kecap asin, minyak wijen, saus tiram, dan lada hitam. Aduk rata.</li>
                            <li>Tambahkan air secukupnya, masak hingga daging empuk.</li>
                            <li>Larutkan maizena dengan sedikit air, lalu tuangkan ke dalam wajan untuk mengentalkan saus.</li>
                            <li>Koreksi rasa dengan garam dan gula, masak hingga saus mengental dan meresap.</li>
                            <li>Sapi lada hitam siap disajikan, nikmati dengan nasi hangat.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
