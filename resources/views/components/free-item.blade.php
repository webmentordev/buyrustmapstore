@props(['item'])
<div class="w-full relative rounded-lg p-3 overflow-hidden bg-gray-100">
    <div class="relative">
        <span class="bg-rust-green text-white py-1 px-4 absolute top-3 right-3 rounded-md span">{{ $item->size }} Size</span>
        <a href="{{ asset($item->image) }}" class="w-full" target="_blank">
            <img src="{{ asset($item->image) }}" alt="{{ $item->name }} FPS+ Boosted Custom Rust map" class="mb-3 rounded-lg w-full">
        </a>
        <span class="span absolute bottom-1 right-2 bg-black/90 text-sm text-gray-200 py-2 px-3 mb-2 inline-block">{{ $item->created_at->diffForHumans() }}</span>
    </div>
    <div class="p-2">
        <h3 title="{{ $item->name }} Custom Rust map" class="text-2xl">{{ $item->name }}</h3>
        <form action="{{ route('free_download', $item->slug) }}" method="post">
            @csrf
            <button type="submit" class="py-2 px-4 text-center bg-rust text-white span w-full mt-1 inline-block rounded-sm">Download</button>
        </form>
    </div>
</div>