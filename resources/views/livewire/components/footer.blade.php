<div class="w-full">
    <div class="max-w-7xl m-auto py-12 px-4 flex flex-col items-center justify-center">
        <img src="{{ asset('assets/buy_rust_maps_favicon.png') }}" width="70px" alt="BuyRustMapsStore Logo">
        <h2 class="text-4xl mb-3 mt-3">BuyRustMaps Store</h2>
        <ul class="flex items-center font-bold">
            <a href="{{ route('home') }}" wire:navigate>Home</a>
            <a class="ml-8" href="{{ route('maps') }}" wire:navigate>Maps</a>
            <a class="ml-8" href="{{ route('free') }}" wire:navigate>Free</a>
            <a class="ml-8" href="{{ route('contact') }}" wire:navigate>Contact</a>
        </ul>
        <ul class="flex items-center font-bold">
            <a href="{{ route('terms') }}" wire:navigate>Terms Of Service</a>
            <a class="ml-3" href="{{ route('privacy') }}" wire:navigate>Privacy Policy</a>
        </ul>
    </div>
    <div class="py-6 px-4 bg-gray-100 text-center">
        <p class="font-bold">Copyrights &copy; {{ date('Y') }} all reserved. System build by <a href="https://www.fiverr.com/mahmer97" rel="nofollow" target="_blank" class="underline text-rust">ilobber / mahmer97</a></p>
    </div>
</div>