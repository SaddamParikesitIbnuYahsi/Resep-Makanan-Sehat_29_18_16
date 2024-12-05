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
                            src="/img/capcay udang.jpg" 
                            alt="Capcay Udang" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>1 bonggol brokoli, rendam air garam, potong²</li>
                            <li>3 buah wortel, kupas kulit, potong²</li>
                            <li>1/4 kg udang</li> 
                            <li>1 bks bumbu capcay sajiku</li>
                            <li>3 siung bawang putih, cincang halus</li>
                            <li>Sedikit jahe, cincang halus</li>
                            <li>Secukupnya gula, garam dan kaldu bubuk (optional)</li>
                            <li>Sedikit minyak goreng untuk menumis</li>
                            <li>Sedikit air</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Tumis bawang putih dan jahe hingga harum. Lalu masukkan udang, tumis hingga berubah warna. Kemudian tambahkan air secukupnya.</li>
                            <li>Setelah mendidih, masukkan wortel. Masak hingga setengah matang. Lalu masukkan brokoli.</li>
                            <li>Kemudian tambahkan bumbu capcay sajiku, gula, garam dan kaldu bubuk sesuai selera. Masak hingga matang dan mengental. Tes rasa. Angkat.</li>
                            <li>Siap untuk disajikan.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
