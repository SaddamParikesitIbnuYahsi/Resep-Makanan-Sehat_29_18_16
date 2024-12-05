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
                            src="/img/smoothies oatmeal stoberi pisang.jpg" 
                            alt="Smoothies Oatmeal Stoberi Pisang" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>2 sdm oat</li>
                            <li>200 ml susu Frisian Flag Full Cream</li>
                            <li>1 buah pisang beku</li>
                            <li>6 buah stroberi beku</li>
                            <li>Madu secukupnya</li>
                            <li>Granola</li>
                            <li>2 buah stroberi (untuk topping)</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Siapkan blender, lalu masukkan oatmeal, susu cair Frisian Flag Purefarm Full Cream, pisang, stroberi, dan madu.</li>
                            <li>Tuangkan smoothie oatmeal tersebut ke dalam gelas.</li>    
                            <li>Tambahkan stroberi dan granola sebagai topping.</li>
                            <li>Anda juga bisa menambahkan buah jenis lainnya sebagai topping guna menambah cita rasa agar semakin segar.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
