<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
    @foreach($lunch as $item)
    <!-- Card -->
    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
        <img src="{{ asset('storage/' . $item['foto']) }}" alt="{{ $item['menu'] }}" class="rounded-lg w-full h-32 object-cover mb-4">
        <h3 class="text-lg font-semibold text-white">{{ $item['menu'] }}</h3>
        <h2 class="text-2xl font-semibold mb-4">{{ $item['bahan']}}</h2>
        <h2 class="text-2xl font-semibold mb-4">{{ $item['cara']}}</h2>
        <button class="mt-4"><a href="oatmeal" class="bg-indigo-600 text-white px-4 py-2 mt-2 rounded-lg hover:bg-indigo-700 transition">Lihat</a></button>
    </div>
    @endforeach
</div>
