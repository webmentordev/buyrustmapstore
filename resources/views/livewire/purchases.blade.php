<section>
    <div class="py-12">
        <div class="max-w-[99%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($purchases))
                        <table class="w-full text-sm">
                            <tr class="py-2 bg-black text-white">
                                <th class="text-start p-2">ID</th>
                                <th class="text-start">Email</th>
                                <th class="text-start">Map</th>
                                <th class="text-start">Paid</th>
                                <th class="text-start">Status</th>
                                <th class="text-end p-2">Created</th>
                            </tr>
                            @foreach ($purchases as $item)
                                <tr class="odd:bg-gray-100">
                                    <td class="text-start p-2 cursor-pointer" x-data="{ open: false}">
                                        <span x-on:click="open = true" x-show="!open" class="underline text-rust">Read</span>
                                        <span x-on:click="open = false" x-show="open">{{ $item->checkout_id }}</span>
                                    </td>
                                    <td class="text-start">{{ $item->email }}</td>
                                    <td class="text-start">{{ $item->map->name }}</td>
                                    <td class="text-start">${{ number_format($item->price, 2) }}</td>
                                    <td class="text-start">
                                        @if ($item->status == "paid")
                                            <span class="bg-rust-green font-semibold text-white py-1 px-2 rounded-md">Paid</span>
                                        @elseif($item->status == "cancel")
                                            <span class="bg-rust font-semibold text-white py-1 px-2 rounded-md">Cancel</span>
                                        @else
                                            <span class="bg-yellow-400 font-semibold text-black py-1 px-2 rounded-md">Unpaid</span>
                                        @endif
                                    </td>
                                    <td class="text-end p-2">{{ $item->created_at->format('D d/m/Y H:i:s A') }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No Purchases exist!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>