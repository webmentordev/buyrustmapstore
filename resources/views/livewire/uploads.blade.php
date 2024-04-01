<section>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($images))
                        <table class="w-full">
                            <tr>
                                <th class="text-start">Image</th>
                                <th class="text-end">Created</th>
                            </tr>
                            @foreach ($images as $item)
                                <tr>
                                    <td class="text-start"><a href="{{ $item->url }}" target="_blank"><img width="100px" src="{{ $item->url }}"></a></td>
                                    <td class="text-end">{{ $item->created_at->format('D d/m/Y H:i:s A') }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No uploaded images data exist!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>