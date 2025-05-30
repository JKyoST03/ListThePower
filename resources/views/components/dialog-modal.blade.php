@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-[#292524] px-6 py-4">
        <div class="text-lg font-medium text-gray-200">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-gray-200">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-stone-900 text-end">
        {{ $footer }}
    </div>
</x-modal>
