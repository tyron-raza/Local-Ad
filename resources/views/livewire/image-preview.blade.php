<div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">
            Featured Image
        </label>
        <div class="mt-1 flex items-center">
            @if ($featuredImage)
                <div class="m-2 p-2">
                    Photo Preview:
                    <img class="w-28 h-28 rounded" src="{{ $featuredImage->temporaryUrl() }}">
                </div>
            @endif
            <input wire:model="featuredImage" type="file" id="featured_image" name="featured_image"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
            @error('featured_image') <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
