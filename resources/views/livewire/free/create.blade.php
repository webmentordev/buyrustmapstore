<section>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form wire:submit.prevent='createMap' enctype="multipart/form-data">
                        <div x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <h2 class="mb-3 text-3xl">Create a new map</h2>
                            @if (session('success'))
                                <x-success :text="session('success')" />
                            @endif
                            <div class="grid grid-cols-2 gap-3 mb-3">
                                <div class="w-full">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="size" :value="__('Size')" />
                                    <x-text-input wire:model="size" id="size" class="block mt-1 w-full" type="number" required />
                                    <x-input-error :messages="$errors->get('size')" class="mt-2" />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3 mb-3">
                                <div class="w-full">
                                    <x-input-label for="image" :value="__('Thumbnail')" />
                                    <x-text-input wire:model="image" id="image" class="block mt-1 w-full rounded-none" type="file" accept="image/*" required />
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="file" :value="__('File')" />
                                    <x-text-input wire:model="file" id="file" class="block mt-1 w-full rounded-none" type="file" required />
                                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                                </div>
                            </div>
                            <div x-show="uploading" class="mt-3">
                                <progress max="100" x-bind:value="progress" class="w-full"></progress>
                            </div>
                            <div x-show="!uploading">
                                <x-primary-button class="mt-3" type="submit">
                                    {{ __('Create') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>