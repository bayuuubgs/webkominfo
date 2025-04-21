@props([
    'tags' => [], 
])

<div class="bg-gray10 py-10">
    <div class="flex justify-center mb-10">
        <div class="flex gap-2 items-center text-center">
            <h2 class="text-gray90 font-bold text-[24px]">Tagar</h2>
            <h2 class="text-primary50 font-bold text-[24px]">Populer</h2>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-x-44 gap-y-6 max-w-screen-xl mx-auto px-6 text-center">
        @foreach ($tags as $tag)
            <a 
                href="{{ $tag['url'] }}" 
                class="text-gray70 hover:text-primary50 transition-colors duration-200"
            >
                #{{ $tag['label'] }}
            </a>
        @endforeach
    </div>
</div>
