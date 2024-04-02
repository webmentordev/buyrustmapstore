<section class="w-full">
    <div class="max-w-6xl m-auto py-12 px-4">
        @if (count($maps))
            <h1 class="text-4xl mb-1">Our Free <span class="span text-rust">Rust Maps</span> Collection</h1>
            <p class="mb-3">Download free custom Rust maps. We've also customized free custom Rust maps by removing unnecessary prefabs such as mountains, rock formations, roadside wrecks, etc., and combined Outpost and Bandit Camp. Scroll to the bottom to read about the features of the free custom Rust maps.</p>
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