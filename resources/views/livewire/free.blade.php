<section class="w-full">
    <div class="max-w-7xl m-auto py-12 px-4">
        @if (count($maps))
            <h1 class="text-4xl mb-3">Our Free Rust Maps Collection</h1>
            <div class="grid grid-cols-3 gap-6">
                @foreach ($maps as $item)
                    <x-free-item :$item />
                @endforeach
            </div>
        @else
            <p class="text-center text-lg">No free maps exist at the moment 🤔</p>
        @endif
    </div>
</section>