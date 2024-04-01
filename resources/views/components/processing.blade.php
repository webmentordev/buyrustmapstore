@props(['text'])
<div class="fixed bottom-3 left-3 z-50 bg-gray-900 text-white p-5 rounded-lg">
    <div class="flex items-center">
        <img src="https://api.iconify.design/svg-spinners:270-ring-with-bg.svg?color=%2335e232" width="30px" alt="Processing">
        <p class="font-bold ml-2 text-2xl">{{ $text }}</p>
    </div>
</div>