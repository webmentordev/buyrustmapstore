<section>
    <div class="py-12">
        <div class="max-w-[99%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($maps))
                        <table class="w-full text-sm">
                            <tr class="py-2 bg-black text-white">
                                <th class="text-start p-2">Image</th>
                                <th class="text-start">Name</th>
                                <th class="text-start">Slug</th>
                                <th class="text-start">Stripe</th>
                                <th class="text-start">Price</th>
                                <th class="text-start">Size</th>
                                <th class="text-start">Original</th>
                                <th class="text-start">Status</th>
                                <th class="text-end p-2">Created</th>
                                <th class="text-end p-2">Update</th>
                            </tr>
                            @foreach ($maps as $item)
                                <tr class="odd:bg-gray-100">
                                    <td class="text-start p-2"><a href="{{ $item->image }}" target="_blank"><img src="{{ $item->image }}" width="40px"></a></td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-start">{{ $item->slug }}</td>
                                    <td class="text-start">{{ $item->stripe }}</td>
                                    <td class="text-start">${{ number_format($item->price, 2) }}</td>
                                    <td class="text-start">{{ $item->size }}</td>
                                    <td class="text-start">{{ $item->original }}</td>
                                    <td class="text-start">
                                        @if ($item->is_active)
                                            <button class="bg-rust-green font-semibold text-white py-1 px-2 rounded-md" wire:click="updateStatus('{{ $item->slug }}')">Active</button>
                                        @else
                                            <button class="bg-rust font-semibold text-white py-1 px-2 rounded-md" wire:click="updateStatus('{{ $item->slug }}')">Inactive</button>
                                        @endif
                                    </td>
                                    <td class="text-end p-2">{{ $item->created_at->format('D d/m/Y H:i:s A') }}</td>
                                    <td class="text-end p-2"><a class="underline text-indigo-600" href="{{ route('maps.update', $item->slug) }}">Update</a></td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No uploaded maps data exist!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>