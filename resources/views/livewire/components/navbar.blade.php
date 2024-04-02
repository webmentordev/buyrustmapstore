<nav class="sticky top-0 left-0 bg-white z-50 w-full border-b border-gray-200">
    <div class="max-w-6xl w-full mx-auto py-2 px-4 flex items-center justify-between">
        <a href="{{ route('home') }}" wire:navigate><img src="{{ asset('assets/buy_rust_maps_logo.png')  }}" width="50" alt="Buy rust maps logo"></a>
        <ul class="flex items-center font-bold">
            <a class="ml-8" href="{{ route('home') }}" wire:navigate>Home</a>
            <a class="ml-8" href="{{ route('maps') }}" wire:navigate>Maps</a>
            <a class="ml-8" href="{{ route('free') }}" wire:navigate>Free</a>
            @auth
                <a class="ml-8" href="{{ route('dashboard') }}" wire:navigate>Dashboard</a>
            @endauth
        </ul>
        <ul class="flex items-center">
            <a href="https://discord.gg/6FbmeKTeaM" rel="nofollow" target="_blank" class="mr-3">
                <img src="https://api.iconify.design/logos:discord-icon.svg?color=%2336c133" width="25px" alt="Discord Icon">
            </a>
            <a href="https://www.fiverr.com/mahmer97" rel="nofollow" target="_blank" class="mr-3">
                <img src="https://api.iconify.design/jam:fiverr-circle.svg?color=%231dbf73" width="28px" alt="Fiverr Icon">
            </a>
            <a href="https://steamcommunity.com/id/ilobber/" rel="nofollow" target="_blank" class="mr-3">
                <img src="https://api.iconify.design/fa6-brands:steam.svg?color=%23141515" width="25px" alt="Steam Icon">
            </a>
            <a class="font-bold py-1  px-3 bg-rust text-white rounded-md" href="{{ route('contact') }}" wire:navigate>Contact</a>
        </ul>
    </div>
</nav>