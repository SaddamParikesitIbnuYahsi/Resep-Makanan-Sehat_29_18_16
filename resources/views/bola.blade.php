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
                            src="/img/bola daging.jpg" 
                            alt="Bola Daging" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>250 gram daging sapi</li>
                            <li>100 gram dada ayam</li>
                            <li>1 siung bawang bombay uk sedang, cincang</li>
                            <li>1/2 sdt italian seasonings</li>
                            <li>50 gr putih telur (sy : 2 butir telur utuh ukuran kecil)</li>
                            <li>1/2 sdt kaldu bubuk</li>
                            <li>2 sdt gula</li>
                            <li>3/4 sdt garam</li>
                            <li>1/2 sdt baking powder</li>
                            <li>1 sdt garlic powder</li>
                            <li>10 gr breadcrumb</li>
                            <li>3 sdm margarine</li>
                            <li>2-3 sdm tepung maizena</li>
                            <li>50-100 ml air es</li>
                            <li><strong>Bahan Saos Gravy:</strong></li>
                            <li>3 sdm margarine/butter</li>
                            <li>1/2 buah bombay, iris</li>
                            <li>1/2 buah bombay, iris</li>
                            <li>100 ml susu/fresh milk (resep asli 60 ml cooking cream)</li>
                            <li>2 cube kaldu sapi</li>
                            <li>400 ml air</li>
                            <li>1 sdm tepung terigu</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Siapkan semua bahan-bahan.</li>
                            <li>Chopper daging sapi dan ayam sampai halus, lalu pindahkan ke wadah.</li>
                            <li>Tumis bombay dengan sedikit margarine sampai layu. Angkat.</li>
                            <li>Mixer bahan-bahan yang ada di dalam wadah berisi daging giling, campurkan telur, italian seasoning, maizena, bombay tumis, garam, gula, kaldu bubuk, air.</li>
                            <li>Bentuk bulat-bulat meatball lalu grilled dengan margarine di atas teflon sampai matang.</li>
                            <li>Tumis bombay dengan minyak sampai caramelize, lalu masukkan bawang putih, tumis sebentar.</li>
                            <li>Lalu masukkan butter dan terigu, aduk-aduk sebentar, lalu masukkan air yang sudah diaduk bersama kaldu cube bersama susu/cooking cream.</li>
                            <li>Masak sampai mengental. Boleh dihaluskan dengan blender atau langsung disajikan bersama meatball, mashed potato, dan salad/sayuran.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
