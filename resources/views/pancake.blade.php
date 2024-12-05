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
                            src="/img/pancake oatmeal kurma.jpg" 
                            alt="Pancake Oatmeal Kurma" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>5 sdm oat</li>
                            <li>1-2 buah pisang</li>
                            <li>Susu cair Frisian Flag secukupnya</li>
                            <li>2 butir telur</li>
                            <li>2 buah kurma, iris tipis</li>
                            <li>Madu secukupnya</li>
                            <li>Yoghurt tanpa rasa secukupnya</li>
                            <li>Kacang almond</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Potong pisang menjadi beberapa bagian.</li>
                            <li>Campurkan oat dan telur, lalu kocok dan aduk sampai rata.</li>
                            <li>Tuangkan susu cair Frisian Flag dan aduk kembali.</li>
                            <li>Tambahkan pisang yang sudah halus dan sedikit madu untuk menambah rasa manis, lalu aduk lagi.</li>
                            <li>Setelah adonan sudah tercampur, tuangkan ke dalam teflon anti lengket yang sudah dipanaskan.</li>
                            <li>Masak pancake oatmeal sampai kedua sisinya matang.</li>
                            <li>Angkat dan tuangkan di piring.</li>
                            <li>Tambahkan kurma yang sudah diiris, sedikit potongan pisang, yoghurt, dan kacang almond sebagai topping.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
