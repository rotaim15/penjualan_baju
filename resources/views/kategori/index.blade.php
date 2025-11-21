<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->

    @foreach ($kategories as $kategori)
    <div class="mb-5 p-5 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-2">{{ $kategori->name }}</h2>
        <p class="text-gray-700">{{ $kategori->description }}</p>
    </div>

    @endforeach
</div>