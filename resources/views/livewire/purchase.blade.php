<div>
    @if ($status == 'success')
        <header class="h-[90vh] flex items-center justify-center">
            <div class="bg-white rounded-md p-6 max-w-lg w-full text-sm">
                <div class="text-center mb-2">
                    <img src="https://api.iconify.design/material-symbols:check-circle.svg?color=%235d7239" class="m-auto mb-3" width="50" alt="Checkmark icon">
                    <h1 class="text-xl mb-2">Congratulations!</h1>
                    <p class="mb-2">Your order has been successfully placed</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg border border-gray-200">
                    <h2 class="mb-2 text-lg">What's NEXT?</h2>
                    <p class="mb-2">We have emailed you the map download link. Please keep it safe so you can download it in the future.</p>
                    <p>In case you have not received the email, please contact us at <strong class="underline text-rust">support(at)buyrustmaps.store</strong>.</p>
                </div>
                <a href="{{ route('home') }}" class="w-full bg-rust-green text-white p-3 rounded-md font-bold mt-3 inline-block text-center">Go To Home Page!</a>
            </div>
        </header>
    @endif
    
    @if ($status == 'cancel')
        <header class="h-[90vh] flex items-center justify-center">
            <div class="bg-white rounded-md p-6 max-w-lg w-full text-sm">
                <div class="text-center mb-2">
                    <p class="text-7xl mb-2">🙁</p>
                    <h1 class="text-xl mb-1">Sad to see you go!</h1>
                    <p class="mb-2">Your order has been cancelled!</p>
                </div>
                <a href="{{ route('home') }}" class="w-full bg-rust text-white p-3 rounded-md font-bold mt-3 inline-block text-center">Go To Home Page!</a>
            </div>
        </header>
    @endif
</div>