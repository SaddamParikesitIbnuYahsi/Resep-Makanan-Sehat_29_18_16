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
                            src="/img/Capcay.jpg" 
                            alt="Capcay Telur" 
                            class="rounded-lg w-full h-auto object-cover"
                        >
                    </div>
                    <!-- Ingredients -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Bahan - Bahan</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>1 batang wortel</li>
                            <li>2 butir telur</li>
                            <li>Beberapa lembar Sawi Pahit</li>
                            <li>4 batang buncis</li>
                            <li>Sedikit Brokoli</li>
                            <li>1 siung bawang merah</li>
                            <li>1 ruas jahe</li>
                            <li>1 sdt bumbu penyedap rasa jamur</li>
                            <li>2 sdm saus tomat</li>
                            <li>Ujung pisau merica bubuk</li>
                            <li>1 sdm tepung maizena</li>
                            <li>3 sdm minyak untuk tumis</li>
                            <li>1 gelas air (kaldu)</li>
                        </ol>
                    </div>
                    <!-- Instructions -->
                    <div class="w-full md:w-1/3">
                        <h2 class="text-2xl font-semibold mb-4">Cara Membuat</h2>
                        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
                            <li>Wortel dikupas, belah dan potong tipis, sawi dipotong kotak sekitar 5x5 cm, buncis iris tipis diagonal, brokoli dipetik jadi seukuran "langsung-hap", bawang-jahe iris tipis. Tumis bawang-jahe dengan sedikit minyak, masukkan kocokan telur, kemudian besarkan api, masukkan potongan wortel, aduk sebentar, masukkan sayur lainnya, aduk rata kembali.</li>
                            <li>Masukkan bumbu dan saus, aduk rata kembali.</li>
                            <li>Tambahkan air (kaldu) satu gelas, ceplokkan kembali sebutir telur, kecilkan api, tutup sebentar, masukkan larutan maizena, aduk² sampai kuah mengental.</li>
                            <li>Sajikan dengan nasi.</li>
                        </ol>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
