<section class="w-full">
    <div class="max-w-7xl m-auto py-12 px-4">
        @if (count($maps))
            <h1 class="text-4xl mb-1">Our Custom Rust Maps Collection</h1>
            <p class="mb-3 text-gray-700">List of all paid custom Rust maps with FPS+, buildable areas, and other special configurations. All custom Rust maps feature FPS+, indicating flat terrain, fewer rock formations, and custom node spawn locations.</p>
            <div class="grid grid-cols-3 gap-6">
                @foreach ($maps as $item)
                    <x-item :$item />
                @endforeach
            </div>
        @else
            <p class="text-center text-lg">No paid maps exist at the moment 🤔</p>
        @endif
    </div>
</section>