<section class="w-full">
    <div class="max-w-7xl m-auto py-12 px-4">
        <div class="grid grid-cols-5 gap-6">
            <div class="h-fit col-span-3">
                <div wire:loading wire:target='buynow'>
                    <x-processing text="Processing..." />
                </div>
                <h1 class="text-5xl mb-1">Buy <span class="span text-rust inline-block">{{ $map->name }}</span> Custom Rust Map</h1>
                <p class="mb-1"><strong>Map Published</strong>: <time class="entry-date published" datetime="{{ $map->created_at->tz('UTC')->toAtomString() }}" itemprop="datePublished">{{ $map->created_at->format('M, d Y') }}</time></p>
                @if ($map->created_at != $map->updated_at)
                    <p class="mb-3"><strong>Last Updated</strong>: <time class="entry-date published" datetime="{{ $map->updated_at->tz('UTC')->toAtomString() }}" itemprop="datePublished">{{ $map->updated_at->format('M, d Y') }}</time>
                @endif
                <div class="relative">
                    <span class="bg-rust-green border border-rust-green hover:hidden bg-opacity-30 backdrop-blur-sm text-white py-1 px-4 absolute top-3 right-3 rounded-md span text-3xl">{{ $map->size }} Map Size</span>
                    <img class="w-full rounded-2xl" src="{{ asset($map->image) }}" alt="{{ $map->name }} FPS Boosted Custom Map under ${{ $map->price }}" title="{{ $map->name }} FPS Boosted Custom Map under ${{ $map->price }}">
                </div>
                <main class="mt-4 map">
                    {!! $map->body !!}
                </main>
            </div>
            <div class="w-full bg-gray-100 col-span-2 h-fit p-6 rounded-lg sticky top-[70px] left-0">
                <h2 class="text-3xl mb-3">Purchase Map</h2>
                <form wire:submit='buynow' method="post">
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Contact Email')" />
                        <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <p class="mb-1">You can use any real or fake email just to instantly receive the download link of the map. We recommend keeping the download link safe so you can use it to download the map file later in the future 😁</p>
                    <p class="text-2xl text-end text-rust font-bold mb-2">US$ {{ number_format($map->price, 2) }}</p>
                    <button class="bg-black rounded-md w-full text-white mt-2 py-4 px-4 font-bold flex justify-center items-center">
                        <span>Click to Pay Now</span>
                        <img src="https://api.iconify.design/logos:stripe.svg?color=%233a3636" width="60px" alt="Stripe Logo" class="ml-1">
                    </button>
                </form>
                <p class="p-4 bg-yellow-300/20 rounded-2xl mt-3">We honor our users' privacy, which is why we use Stripe exclusively as our payment processor. We never store your information on our server or share it with anyone else. Stripe does not share your card information with anyone, ensuring it remains private at all times 💪</p>
            </div>
        </div>
    </div>
</section>
