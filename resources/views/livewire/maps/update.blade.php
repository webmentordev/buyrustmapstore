<section>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form wire:submit.prevent='mapUpdate' enctype="multipart/form-data">
                        <div x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <h2 class="mb-3 text-3xl">Update a map</h2>
                            @if (session('success'))
                                <x-success :text="session('success')" />
                            @endif
                            <div class="grid grid-cols-3 gap-3 mb-3">
                                <div class="w-full">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="price" :value="__('Price')" />
                                    <x-text-input wire:model="price" id="price" class="block mt-1 w-full" step="0.01" type="number" required />
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="size" :value="__('Size')" />
                                    <x-text-input wire:model="size" id="size" class="block mt-1 w-full" type="number" required />
                                    <x-input-error :messages="$errors->get('size')" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full mb-3">
                                <x-input-label for="slug" :value="__('Slug')" />
                                <x-text-input wire:model="slug" id="slug" class="block mt-1 w-full" type="text" required />
                                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                            </div>
                            <div class="w-full mb-3">
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input wire:model="description" id="description" class="block mt-1 w-full" type="text" required />
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <div class="grid grid-cols-2 gap-3 mb-3">
                                <div class="w-full">
                                    <x-input-label for="image" :value="__('Thumbnail')" />
                                    <x-text-input wire:model="image" id="image" class="block mt-1 w-full rounded-none" type="file" accept="image/*" />
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <x-input-label for="file" :value="__('File')" />
                                    <x-text-input wire:model="file" id="file" class="block mt-1 w-full rounded-none" type="file" />
                                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                                </div>
                            </div>
                            <div wire:ignore>
                                <textarea id="editor" wire:model='body'></textarea>
                                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                            </div>
                            <div x-show="uploading" class="mt-3">
                                <progress max="100" x-bind:value="progress" class="w-full"></progress>
                            </div>
                            <div x-show="!uploading">
                                <x-primary-button class="mt-3" type="submit">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
            CKEDITOR.instances.editor.on('change', function(){
                @this.set('body', CKEDITOR.instances.editor.getData());
            });
        </script>
    </div>
</section>