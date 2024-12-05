<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
    @foreach($lunch as $item)
    <!-- Card -->
    <div class="bg-gray-800 rounded-lg p-4 flex flex-col items-center shadow-lg">
        <img src="{{ asset('storage/' . $item['foto']) }}" alt="{{ $item['menu'] }}" class="rounded-lg w-full h-32 object-cover mb-4">
        <h3 class="text-lg font-semibold text-white">{{ $item['menu'] }}</h3>
        <h4>Bahan</h4>
        <h2 class="text-2xl font-semibold mb-4">{{ $item['bahan']}}</h2>
        <h4>Cara Membuat</h4>
        <h2 class="text-2xl font-semibold mb-4">{{ $item['cara']}}</h2>
    </div>
    @endforeach
</div>
