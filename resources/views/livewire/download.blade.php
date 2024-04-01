<div>
    <header class="h-[90vh] flex items-center justify-center">
        <div class="bg-white rounded-md p-6 max-w-lg w-full text-sm">
            <div class="text-center mb-2">
                <img src="https://api.iconify.design/material-symbols:check-circle.svg?color=%235d7239" class="m-auto mb-3" width="50" alt="Checkmark icon">
                <h1 class="text-xl mb-2">File Authentication Verified!</h1>
                <p class="mb-2">Your your map file is ready to download</p>
                <p><strong>Download attempts left:</strong> {{ 5 - $map->downloads }}</p>
                <form action="{{ route('download', $map->checkout_id) }}" method="post">
                    @csrf
                    <button class="w-full bg-rust-green text-white p-3 rounded-md font-bold mt-3 inline-block text-center">Download</button>
                </form>
            </div>
        </div>
    </header>
</div>